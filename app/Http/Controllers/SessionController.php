<?php

namespace Bibliophile\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
       return redirect()->to('/index');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/endsession');
    }
}
