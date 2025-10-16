<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // validacao dos dados do front
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // validacao dos dados do model user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // criar token
        $token = $user->createToken('api-token', ['post:read', 'post:create'])->plainTextToken;
        // vai ter duas habilidades (read e create) e plainTextToken retorna somente o HasToken

        return response()->json(['ok' => true, 'user' => $user, 'token' => $token]);
    }

    public function login(Request $request)
    // usa request pois vamos ter o metodo post e vamos receber infos dentro da requisicao
    {
        // validacao dos dados que recebeu do front
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);

        // validar login e importar Auth no namespace
        if (Auth::attempt($validated)) {
            // buscar o user
            $user = User::where('email', $validated['email'])->first();

            $token = $user->createToken('api-token', ['post:read', 'post:create'])->plainTextToken;

            return response()->json(['ok' => true, 'token' => $token]);
        }

        return response()->json(['ok' => false, 'msg' => 'Credenciais invalidas!'], 401);
    }

    public function logout(Request $request)
    {
        $token = $request->bearerToken();

        if (! $token) {
            return response()->json(['ok' => false, 'msg' => 'Token nao informado!'], 400);
        }

        $access_token = PersonalAccessToken::findToken($token);

        if (! $access_token) {
            return response()->json(['ok' => false, 'msg' => 'Token invalido!'], 400);
        }

        $access_token->delete();

        return response()->json(['ok' => true, 'msg' => 'Logout sucesso']);
    }
}
