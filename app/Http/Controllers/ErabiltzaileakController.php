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
       
        $erabiltzailea = erabiltzaileak::all();
        
        
        return response()->json($erabiltzailea);
    }
}
