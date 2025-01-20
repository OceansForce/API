<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\erabiltzaileak;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){

        //Datuak balidatzeko
        $request->validate([
            'email'=> 'required|email',
            'pasahitza'=>'required|min:6',
        ]);

        // Encontrar el correo
        $user = erabiltzaileak::where('email', $request->email)->first();

        if(!$user || $user->pasahitza !== $request->pasahitza){
            return response()->json(['error' => 'Datuak gaixki daude'], 401);
        }

        //$token = $user->createToken($request->email);

        return response()->json([
            'message' => 'Login egin da',
            'user' => $user,
            //'token' => $token->plainTextToken,
        ]);
    }

    public function logout(Request $request)
    {
        // Revocar el token de acceso
        //$request->user()->tokens()->delete();

        return response()->json('Has cerrado sesión correctamente');
    }
}
