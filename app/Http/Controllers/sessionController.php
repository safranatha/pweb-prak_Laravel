<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class sessionController extends Controller
{
    function index(){
        return view("Login Page/Login Admin");
    }
    function login(Request $request){
        FacadesSession::flash('email',$request->email);
        $request->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ],
            [
                'email.required'=>'email wajib diisi',
                'password.required'=>'email wajib diisi'
            ]
            );
        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)) {
            //success
            return redirect('Admin_Dashboard')->with('success','Berhasil Login');
        } else {
            // return redirect('LoginAdmin')->withErrors('tidak valid');
            //gagal
            return 'gagal';
        }
    }

    function create(){
        
    }
    function regist(){
        return view("Sign Up Page/Register");
    }
}
