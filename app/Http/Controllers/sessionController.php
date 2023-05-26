<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;

class sessionController extends Controller
{
    function index()
    {
        return view("Login Page/Login Admin");
    }

    public function registeruser(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'NoTelp' => $request->NoTelp,
            'remember_token' => Str::random(60)
        ]);
        return redirect()->route('AdminLogin');
    }
    function login(Request $request)
    {
        FacadesSession::flash('email', $request->email);
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'email wajib diisi',
                'password.required' => 'email wajib diisi'
            ]
        );
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            //success
            return redirect('Admin_Dashboard')->with('success', 'Berhasil Login');
        } else {
            // return redirect('LoginAdmin')->withErrors('tidak valid');
            //gagal
            return 'gagal';
        }
    }

    function create()
    {
    }
    public function Register()
    {
        return view('Sign_Up_Page.Register');
    }
}
