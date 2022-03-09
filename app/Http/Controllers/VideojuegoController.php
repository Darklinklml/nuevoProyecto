<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Http\Requests\CreateVideojuegoRequest;
use Illuminate\Support\Facades\Storage;

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
        $videojuego = new Videojuego($request->validated());
        $videojuego->videojuego_clasificacion= request('videojuego_clasificacion');
        $videojuego->imagen = $request->file('imagen')->store('imagenes','public');
        $videojuego->videojuego_precio_venta= $request->videojuego_precio_adquisicion * 1.4;
        $videojuego->save();
         
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

    public function update(Videojuego $videojuego, CreateVideojuegoRequest $request){
        if($request->hasFile('imagen')){
            Storage::delete($videojuego->imagen);
            $videojuego->fill($request->validated());
            $videojuego->videojuego_clasificacion= request('videojuego_clasificacion');
            $videojuego->imagen = $request->file('imagen')->store('imagenes','public');
            $videojuego->videojuego_precio_venta= request('videojuego_precio_venta');
        }else{
            $videojuego->update(array_filter($request->validated()));
        }

        return redirect()->route('videojuego.show', $videojuego)->with('editar', 'completado');
    }

    public function destroy(Videojuego $videojuego){
        Storage::delete($videojuego->imagen);
        $videojuego->delete();

        return redirect()->route('videojuego.index')->with('eliminar', 'completado');
    }
}
