<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Http\Requests\CreateVideojuegoRequest;

class VideojuegoController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    
    public function index(){
        $catalogo= Videojuego::get();

        return view('videojuegos.index', compact('catalogo'));

    }

    public function create(){

        return view('videojuegos.create',[
            'videojuego'=> new Videojuego
        ]);
    }

    public function store(CreateVideojuegoRequest $request)
    {
        request()->validate([
            'nombre'=>'required',
            'consola'=>'required',
            'precio_adquisicion'=>'required'
        ]);
        Videojuego::create([
            'imagen'=> request('imagen')->file('imagen')->store('imagenes','public'),
            'videojuego_nombre' => request('nombre'),
            'videojuego_categoria' => request('clasificacion'),
            'videojuego_consola'=> request('consola'),
            'videojuego_precio_adquisicion' => request('precio_adquisicion'),
            'videojuego_precio_venta'=> (request('precio_adquisicion')*1.4)
        ]);
         
        return redirect()->route('videojuego.create')->with('registrar', 'completado');

    }

    public function show($id){
        return view('videojuegos.show',[
            'videojuego'=> Videojuego::findOrFail($id)
        ]);
        
    }

    public function edit(Videojuego $videojuego){
        return view('videojuegos.edit',[
            'videojuego'=> $videojuego
        ]);

    }

    public function update(Videojuego $videojuego){
        request()->validate([
            'nombre'=>'required',
            'clasificacion'=> 'required',
            'consola'=>'required',
            'precio_adquisicion'=>'required',
            'precio_venta'=> 'required'
        ]);
        $videojuego->update([
            'videojuego_nombre'=> request('nombre'),
            'videojuego_categoria' => request('clasificacion'),
            'videojuego_consola'=> request('consola'),
            'videojuego_precio_adquisicion'=> request('precio_adquisicion'),
            'videojuego_precio_venta'=> request('precio_venta')
        ]);

        return redirect()->route('videojuego.show', $videojuego)->with('editar', 'completado');
    }

    public function destroy(Videojuego $videojuego){
        $videojuego->delete();

        return redirect()->route('videojuego.index')->with('eliminar', 'completado');
    }
}
