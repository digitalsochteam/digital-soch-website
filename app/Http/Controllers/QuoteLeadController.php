<?php

namespace App\Http\Controllers;

use App\Models\QuoteLead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class QuoteLeadController extends Controller
{
    /**
     * Display all leads
     */
    public function index()
    {
        $leads = QuoteLead::orderBy('created_at', 'desc')->get();
        return view('backend.quoteleads.list', compact('leads'));
    }



    /**
     * Store a new quote lead or update count if mobile already exists
     */
    public function store(Request $request)
    {
        Log::info('Storing quote lead', ['request' => $request->all()]);

        // Validation
        $request->validate([
            'fullname' => 'required|string|max:255',
            'city' => 'nullable|string|max:150',
            'mobile' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Normalize IP
        $ipAddress = $request->ip() === '::1' ? '127.0.0.1' : $request->ip();

        // Capture only key headers
        $headers = json_encode([
            'user-agent' => $request->header('user-agent'),
            'referer' => $request->header('referer'),
            'origin' => $request->header('origin'),
        ], JSON_UNESCAPED_SLASHES);

        // Generate unique lead ID
        $leadId = 'LEAD-' . now()->format('YmdHis') . '-' . strtoupper(Str::random(4));

        // Check if lead with same mobile exists
        $existingLead = QuoteLead::where('mobile', $request->mobile)->first();

        if ($existingLead) {
            // Increment request count
            $existingLead->increment('request_count');

            // Update fields
            $existingLead->update([
                'fullname' => $request->fullname,
                'city' => $request->city ?? $existingLead->city,
                'email' => $request->email ?? $existingLead->email,
                'subject' => $request->subject ?? $existingLead->subject,
                'message' => $request->message ?? $existingLead->message,
                'leadid' => $existingLead->leadid ?? $leadId,
                'status' => 'Pending',
                'source' => 'Website',
                'ipaddress' => $ipAddress,
                'header' => $headers,
            ]);

            $status = "success";
            $message = "Your response is already recorded! Please wait for our team to contact you.";
            return view('frontend.dashboard.thanku', compact('status', 'message'));
        }

        // If mobile doesn't exist, enforce IP limit
        $ipRequestCount = QuoteLead::where('ipaddress', $ipAddress)->count();
        if ($ipRequestCount >= 2) {
            Log::warning("IP blocked due to request limit", ['ip' => $ipAddress, 'count' => $ipRequestCount]);
            $status = "error";
            $message = "You have reached the maximum number of quote requests allowed from this IP address.";
            return view('frontend.dashboard.thanku', compact('status', 'message'));
        }

        // Create new lead
        QuoteLead::create([
            'fullname' => $request->fullname,
            'city' => $request->city,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'leadid' => $leadId,
            'status' => 'Pending',
            'source' => 'Website',
            'ipaddress' => $ipAddress,
            'header' => $headers,
            'request_count' => 1,
        ]);

        $status = "success";
        $message = "Your response has been saved successfully!";
        return view('frontend.dashboard.thanku', compact('status', 'message'));
    }




    public function destroy(QuoteLead $lead)
    {
        $lead->delete();

        return back()->with('success', 'Quote lead deleted successfully.');
    }
}