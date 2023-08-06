<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function EditorDashboard()
    {
        return view('editor.editor_dashboard');
    }
}
