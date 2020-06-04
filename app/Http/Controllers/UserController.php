<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Roles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends HomeController
{
    public function index()
    {
        $users = User::where('role','!=', Roles::$_role["ADMIN"])->get();
        $data = [
            "users" => $users
        ];
        return view('dashboard.admin.users.index', $data);
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
    public function add()
    {
        return view('dashboard.admin.users.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = $request->toArray();
        $store = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 0,
        ]);

        if ($store)
            return redirect(route('users'))->with('status', 'Success add new user');

        return redirect(route('add-new-user'))->with('status', 'Success add new user');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        User::findOrFail($id)->delete();

        return redirect(route('users'))->with('status', 'Success remove user');

    }
}
