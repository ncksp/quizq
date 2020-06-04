<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends HomeController
{
    public function index()
    {
       return view('dashboard.user.report');
    }
}
