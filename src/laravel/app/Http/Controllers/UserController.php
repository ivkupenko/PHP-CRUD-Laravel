<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// dummy comment to chec the gpg key

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required',
        ]);

        $newUser = User::create($validated);

        return redirect(route('users.index'));
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required',
        ]);

        $user->update($validated);

        return redirect(route('users.index'))->with('success', 'User updated!');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success', 'User deleted!');
    }
}
