<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // To View all
    public function index()
    {
        $users = User::latest()->get();
        return view('page.root.index', compact('users'));
    }

    public function dashboard()
    {
        return view('admin.home');
    }

    public function userManagement()
    {
        $users = User::all();
        $lengthUser = User::count();
        $lengthUserAdmin = User::where('role', 'admin')->count();
        $lengthUserUser = User::where('role', 'user')->count();
        return view('admin.user', compact('users', 'lengthUser', 'lengthUserAdmin', 'lengthUserUser'));
    }


    // // To action Create View
    // public function create(){
    //     return view('');
    // };

    // // To action create
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     User::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password')
    //     ]);
    // };

    // // To action edit
    // public function edit(){
    //     return view('');
    // };

    // // To action update
    // public function update(Request $request, string $id){
    //     $user = User::findOrFail($id);
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'role' => 'required'
    //     ]);

    //     $user->update([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //         'role' => $request->input('role')
    //     ]);
    // }

    // // To delete user
    // public function destroy(string $id){
    //     $user = User::findOrFail($id);
    //     $user->delete();
    // }
}