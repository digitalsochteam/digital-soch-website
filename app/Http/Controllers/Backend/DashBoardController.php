<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


class DashBoardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.view', );
    }
}