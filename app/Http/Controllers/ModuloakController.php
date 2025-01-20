<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoremoduloakRequest;
// use App\Http\Requests\UpdatemoduloakRequest;
use App\Models\moduloak;
use App\Models\erabiltzaileak; 
use Illuminate\Http\Request;

class ModuloakController extends Controller
{
    //Para ver
    public function index()
    {
        $moduloak= moduloak::all();
        return response()->json($moduloak);
    }

    //Para ver
    public function ikasle_modulu(Request $request)
    {
        $request->validate([
            'email'=> 'required|email'
       ]);

       $erabiltzailea = erabiltzaileak::where('email', $request->email)->first();
       $modulo_ids=
        //$moduloak= moduloak::all();
     
        return ["Mensaje"=>$erabiltzailea->id];
    }


    //Para crear
    public function create()
    {
        return view('moduloaks.create');
    }

    //Para valida los datos y los inplementa
    public function store(Request $request)
    {
        // $creacion=$request->all();
        $file= $request->validate([
            'id'=>'required',
            'izena'=>'required',
            'gela'=>'required',
        ]);

        $creacion= moduloak::create($file);
        return ['Se a creado'=> $creacion];
    }

    /**
     * Display the specified resource.
     */
    public function edit(moduloak $moduloak)
    {
        return view('moduloaks.edit', compact('moduloak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, moduloak $moduloak)
    {
        $file= $request->validate([
            'id'=>'required',
            'izena'=>'required',
            'gela'=>'required',
        ]);

        $moduloak->update($file);
        return  $moduloak;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(moduloak $moduloak)
    {
        $moduloak->delete();
        return ["Mensaje"=>"Se a Eliminado"];
    }
}
