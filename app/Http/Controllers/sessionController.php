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
        return view("Login_Page.Login_Admin");
    }
    function indexStaff()
    {
        return view("Login_Page.Login_Admin");
    }

    public function registeruser(Request $request)
    {
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return back()->with('RegisterError', 'Register Failed');
        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'NoTelp' => $request->NoTelp,
            'remember_token' => Str::random(60),
            'role' => 'Staff',
        ]);
        return redirect()->route('StaffLogin');
    }

    public function registerAdmin(Request $request)
    {
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return back()->with('RegisterError', 'Register Failed');
        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'NoTelp' => $request->NoTelp,
            'remember_token' => Str::random(60),
            'role' => 'Admin',
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
            if (auth()->user()->role == 'Admin') {
                return redirect()->route('AdminDashboard')->with('success', 'Berhasil Login');
            } else if (auth()->user()->role == 'Staff') {
                return redirect()->route('pembayaran.index')->with('success', 'Berhasil Login');
            }
        } else {
            // return redirect('LoginAdmin')->withErrors('tidak valid');
            //gagal
            return back()->with('loginError', 'Login Failed!');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    function create()
    {
    }
    public function Register()
    {
        return view('Sign_Up_Page.Register');
    }
}
