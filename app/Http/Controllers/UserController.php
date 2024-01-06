<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginAuth(Request $request){
        $request->validate([
            "email"=> "required",
            "password"=> "required"
        ]);

        $users = $request->only(["email", 'password']);
        if(Auth::attempt($users)){
            return redirect()->route('home.page');
        } else {
            return redirect()->back()->with('failed', 'Login failed, Please try again.');
        }
    }
    public function logoutAuth(Request $request){
        Auth::logout();
        return redirect()->route('login')->with('logout','You been have logged out.');
    }

    public function index()
    {
        $users = User::all();
        return view("user.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan data akun!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $users = User::find($id);
        return view("user.edit", compact("users"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'role' => 'required',
        ]);

        if ($request->password == '') {
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
         }
         else {
             User::where('id', $id)->update([
                 'name' => $request->name,
                 'email' => $request->email,
                 'role' => $request->role,
                 'password' => Hash::make($request->password),
             ]);
         }

        return redirect()->route('user.home')->with('success', 'Berhasil mengubah data akun!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('deleted','Berhasil menghapus data');
    }
}
