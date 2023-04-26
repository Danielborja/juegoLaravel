<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function random()
    {

        return rand(0,2);

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        if ($request->has('piedra')) {
            $valorBoton = 0;
        } elseif ($request->has('papel')) {
            $valorBoton = 1;
        } elseif ($request->has('tijera')) {
            $valorBoton = 2;
        }
        
        $maquina = $this -> random();
        
        $cuentaGanadas=0;
        $cuentaPerdidas=0;

        if ($valorBoton == 0 and $maquina = 0) {    
            return view ("empate",compact('maquina'));
        }
        
        elseif ($valorBoton == 0 and $maquina = 1) {
            $cuentaPerdidas = 1;
            return view ("gameover",compact('maquina'));
        }
        elseif ($valorBoton == 0 and $maquina = 2) {
            $cuentaGanadas = 1; 
            return view ("winner",compact('maquina'));
        }
        elseif ($valorBoton == 1 and $maquina = 0) {
            $cuentaGanadas = 1; 
            return view ("winner",compact('maquina'));
        }
        elseif ($valorBoton == 1 and $maquina = 1) {
            return view ("empate",compact('maquina'));
        }
        elseif ($valorBoton == 1 and $maquina = 2) {
            $cuentaPerdidas = 1;
            return view ("gameover",compact('maquina'));
        }
        elseif ($valorBoton == 2 and $maquina = 0) {
            $cuentaPerdidas = 1;
            return view ("gameover",compact('maquina'));
        }
        elseif ($valorBoton == 2 and $maquina = 1) {
            $cuentaGanadas = 1; 
            return view ("winner",compact('maquina'));
        }
        elseif ($valorBoton == 2 and $maquina = 2) {
            return view ("empate",compact('maquina'));
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
