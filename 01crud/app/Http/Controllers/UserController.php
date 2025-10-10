<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('country')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $countries = Country::all;
        return view('users.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'country_id' => 'required|exists:countries,id',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        $user->load('country', 'bicycles');
        return view('users.show', compact('user'));

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $countries = Country::all();
        return view('users.edit', compact('user', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'country_id' => 'required|exists:countries,id',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Verificar se existem bicicletas associadas
        if ($user->bicycles()->count() > 0) {
            return redirect()->route('users.index')
                ->with('error', 'Cannot delete user - there are bicycles associated!');
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully!');
    }

}
