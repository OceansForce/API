<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreErabiltzailea2Request;
// use App\Http\Requests\UpdateErabiltzailea2Request;
use App\Models\Erabiltzailea2;
use Illuminate\Http\Request;


class Erabiltzailea2Controller extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $erabiltzaileak = Erabiltzailea2::all();
        return response()->json($erabiltzaileak);
    }

   
}
