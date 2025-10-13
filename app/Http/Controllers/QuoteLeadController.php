<?php

namespace App\Http\Controllers;

use App\Models\QuoteLead;
use Illuminate\Http\Request;
use Log;

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

        $request->validate([
            'fullname' => 'required|string|max:255',
            'city' => 'nullable|string|max:150',
            'mobile' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

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
            ]);

            return redirect()
                ->route("frontend.dashboard.index")
                ->with('success', 'Your Response has been saved successfully!');
        }

        QuoteLead::create($request->all());

        return redirect()
            ->route('frontend.dashboard.index')
            ->with('success', 'Your Response has been saved successfully!');
    }


    public function destroy(QuoteLead $lead)
    {
        $lead->delete();

        return back()->with('success', 'Quote lead deleted successfully.');
    }
}