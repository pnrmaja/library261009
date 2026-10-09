<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $record = new User();
        $record->create($request->all());

        return $record;
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $record = User::findOrFail($user->id);
        $record->update($request->all());

        return $record;
    }

    public function destroy(User $user)
    {
        return User::destroy($user->id);
    }
}
