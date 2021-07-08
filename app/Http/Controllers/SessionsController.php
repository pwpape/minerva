<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        //validate the request
        $attributes = request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        //attempt to authenticate and login the user 
        //based on provided creditials
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Get budgeting');
        }

        return back()->withInput()->withErrors(['username' => 'Credentials could not be verified']);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out');
    }
}
