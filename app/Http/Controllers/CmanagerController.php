<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmanagerController extends Controller
{
    public function CmanagerDashboard()
    {
        return view('cmanager.cmanager_dashboard');
    }
}
