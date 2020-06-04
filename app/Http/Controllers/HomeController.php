<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "questions" => count(Question::all()),
            "users" => count(User::all()),
        ];
        return view('home', $data);
    }
}
