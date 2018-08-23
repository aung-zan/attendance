<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]);
    }

    /**
     * Display login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.client_login');
    }

    /**
     * Authenticate the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6',
        ]);

        if (Auth::guard('client')->attempt($request->only('email', 'password'))) {
            return redirect()->route('attendance.index');
        }

        return redirect()->back()
                        ->with('error', 'Email or password is wrong.');
    }

    /**
     * logout the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('client')->logout();

        return redirect()->route('client.loginForm');
    }
}
