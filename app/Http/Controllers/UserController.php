<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();
        $username_keyword = $request->username_keyword;
        if (!empty($username_keyword)) {
            $query->where('username', 'LIKE', "%$username_keyword%");
        }

        $email_keyword = $request->email_keyword;
        if (!empty($email_keyword)) {
            $query->where('email', 'LIKE', "%$email_keyword%");
        }

        $role_keyword = $request->role_keyword;
        if(!empty($role_keyword)){
            $query->where('role','LIKE',"%$role_keyword%");
        }

        $User = $query->paginate(10);

        return view('Admin_Page.Admin_Account', ['User' => $User]);


        // $keyword = $request->username_keyword;
        // $User = User::where('username', 'LIKE', '%'.$keyword.'%')->paginate(10);

        // $email_keyword = $request->email_keyword;
        // $User = User::where('email', 'LIKE', '%'.$email_keyword.'%')->paginate(10);

        // return view('Admin_Page.Admin_Account', ['User' => $User]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $User = User::find($id);
        // dd($data);
        return view('Admin_Page.EditForm_User', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Admin_Page.Admin_Account');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::find($id);

        if($request->email != $user->email){
            $request->validate([
                'email' => 'email|unique:users,email, . $id',
            ]);
        }

        $UserUpdate = [
            'username' => $request->username,
            'email' => $request->email,
            'NoTelp' => $request->NoTelp ,
            'role' => $request->role,
        ];

        DB::table('users')->where('id',$id)->update($UserUpdate);
        return redirect()->action([UserController::class,'index']);
        /*
        $request->validate([
            'username' => ['nullable', 'unique:users'],
            'password' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    if (!Hash::check($value, $request->user()->password)) {
                        $fail('The current password is incorrect.');
                    }
                },
            ],
            'newpassword' => ['required'],
        ]);

        $user = User::find($id);
         if ($request->has('username')) {
            $user->username = $request->username;
        }

        if ($request->has('password') && $request->has('newpassword')) {
            if ($request->password !== $user->password) {
                return back()->withErrors(['password' => 'The current password is incorrect.']);
            }
            $user->password = bcrypt($request->newpassword);
        }

            $user->update([
                'username'=> $request->username,
                'password'=> ($request->newpassword),
            ]);
        return back()->with('message', 'Your profile has been updated');*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = User::find($id);
        $supplier->delete();
        return redirect()->back()->with('success', 'suppl$supplier berhasil dihapus');
    }
}
