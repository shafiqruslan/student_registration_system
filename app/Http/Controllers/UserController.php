<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $users = User::whereRoleIs('student')->latest()->paginate(5);
        return view('users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //Display the specified resource.
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //Show the form for editing the specified resource.
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'postcode' => 'required|string|max:5',
            'state' => 'required|string|max:48',
            'phone_number' => 'required|string|max:12',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    //Remove the specified resource from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
