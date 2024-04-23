<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class AuthController extends Controller
{
    public function login(Request $request){
        $fields = $request->validate([
            'email' =>'required|email',
           'motpasse' =>'required'
        ]);

        $client = Client::where('email', $fields['email'])->first();
        if($client){
            if(Hash::check($fields['motpasse'], $client->motpasse)){
                return response()->json($client->id);
            }
        }
        return response()->json(['message' => 'Email ou Mot de passe incorrect' ], 401);
    }






    public function logout(Request $request)
    {
        try {
            $request->user()->tokens()->delete();
        } catch (\Exception $e) {
            return response(['message' => 'Something went wrong'], 500);
        }

        return [
            'message' => 'Logged out'
        ];
    }
}
