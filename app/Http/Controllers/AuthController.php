<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('username', $request->username)
            ->first();

       if ($user && $request->password == $user->password) {
            Session::put('user', $user->username);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    public function dashboard()
{
    if (!Session::has('user')) {
        return redirect('/login');
    }

    return view('dashboard');
}
}