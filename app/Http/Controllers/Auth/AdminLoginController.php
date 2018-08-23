<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log, Auth, App\Admin;

class AdminLoginController extends Controller
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
        return view('auth.admin_login');
    }

    /**
     * Authenticate the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // input validate
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        // username and password validate
        if (Auth::guard('admin')->attempt($request->only('username', 'password'))) {
            return redirect()->route('client.index');
        }

        return redirect()->back()
                        ->withInput($request->only('username'))
                        ->with('error', 'Username or password is wrong.');
    }

    /**
     * logout the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.loginForm');
    }
}
