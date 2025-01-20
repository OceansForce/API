<?php

namespace App\Http\Controllers;

use App\Models\erabiltzaileak; 
use Illuminate\Http\Request;

class ErabiltzaileakController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       $request->validate([
            'email'=> 'required|email'
       ]);
       
        $erabiltzailea = erabiltzaileak::where('email', $request->email)->first();

        $erabiltzaileak= erabiltzaileak::all();

        if(!$erabiltzailea){
            return response()->json(['error' => 'Datuak gaixki daude'], 401);
        }elseif ($erabiltzailea->Irakaslea !== 'true') {
            return response()->json(['error' => 'EZ da Irakaslea'], 401);
        }
        
        
        return response()->json($erabiltzaileak);
    }
}
