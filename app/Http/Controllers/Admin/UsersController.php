<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function getUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user')->with('user', $user);
    }

    public function store(Request $request)
    {
        /*
         * validation
         */
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|unique:users|email',
            'role' => 'required',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required'
        ]);
        $user_password = Hash::make($request->password);
        $user = new User($request->all());
        $user->save();
        return redirect('admin/users')->with('success', 'Successfully Added A new User');
    }

    public function update(Request $request)
    {
        //manually check db for emails that match
        $request->validate([
            'id' => 'required',
            'name' => 'required|min:6',
            'email' => 'required|email',
            'role' => 'required',
            'isActive' => 'required',

        ]);
        /*
         * update the user based on the id
         */
        $user = User:: find($request->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role = $request->get('role');
        $user->isActive = $request->get('isActive');

        $user->save();
        return redirect('admin/user/' . $user->id)->with('success', 'Successfully updated the user');


    }


}
