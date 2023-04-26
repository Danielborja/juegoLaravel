<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Player;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */  
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = $request->name;
        $contrasena = $request->password;

        $siusuario = DB::table('players')
                ->where('name', $usuario)
                ->where('password', $contrasena)
                ->first();
        
        $id = DB::table('players')
                ->select('players.id')
                ->where('players.name', '=', $usuario)
                ->where('players.password', '=', $contrasena)
                ->get();

        if ($siusuario){
            return view('juego',compact('id'));
        }else{
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
