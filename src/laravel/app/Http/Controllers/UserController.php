<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserDataRequest;
use App\Http\Requests\UpdateUserDataRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($sex = $request->input('sex')) {
            $query->where('sex', $sex);
        }

        $users = $query->orderBy('id', 'asc')->paginate(10)->appends($request->query());
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserDataRequest $request)
    {
        User::create($request->validated());

        return redirect(route('users.index'));
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user, UpdateUserDataRequest $request)
    {
        $user->update($request->validated());

        return redirect(route('users.index'))->with('success', 'User updated!');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success', 'User deleted!');
    }
}
