<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //query
        $user = User::latest()->paginate(5);

        return view('user.index',compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('user.index')->with('success','user created successfully.');
    }

    public function show(User $user)
    {
        return view('user.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index')->with('success','user updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','user deleted successfully');
    }
}
