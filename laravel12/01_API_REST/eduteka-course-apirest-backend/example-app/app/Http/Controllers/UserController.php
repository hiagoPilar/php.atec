<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        try {
            $user = new User();
            $user->fill($data);
            $user->password = Hash::make(123);
            $user->save();
            return response()->json($user, 201);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $users = User::findOrFail($id);
            return response()->json($user, 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha'
            ], 404);
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $data = $request->validated();

        try {
            $user = User::findOrFail($id);
            $user->update($data);

            return response()->json($user, 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            $removed = User::destroy($id);
            if(!$removed){
                throw new Exception();
            }
            return response()->json(null, 204);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha'
            ], 400);
        }
    }
}
