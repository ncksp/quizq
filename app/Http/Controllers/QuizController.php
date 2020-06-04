<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends HomeController
{
    public function index()
    {
        return view('dashboard.user.quiz');
    }
}
