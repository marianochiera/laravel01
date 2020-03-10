<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function show(Pelicula $pelicula)
    {
        // $pelicula = Pelicula::find($pelicula);
       return view('peliculas.show', compact('pelicula'));

    }
    public function create()
    {
        return view('peliculas.create');
    }
    public function store()
    {

        request()->validate([
            'titulo'=> 'required|min:4'
        ]);
        $ruta_archivo = request()->file('foto')->store('public');

        // $peli = new Pelicula();
        // $peli->titulo = request()->titulo;
        // $peli->foto = basename($ruta_archivo);
        // $pelis->save();

        $peli = Pelicula::create([
            'titulo'=>request()->titulo,
            'foto'=>basename($ruta_archivo)
        ]);

        return redirect()->route('peliculas.index')->with(['status'=> "Se creó la pelicula $peli->titulo"]);
    }
    public function edit(Pelicula $pelicula)
    {

       return view('peliculas.edit', compact('pelicula'));

    }
    public function update(Pelicula $pelicula)
    {
       if(request()->foto){
           $ruta_archivo = request()->file('foto')->store('public');
           if($pelicula->foto){
               Storage::delete('public/'.$pelicula->foto);
           }
       }
        $pelicula->update([
            'titulo'=>request()->titulo,
            'foto'=> isset($ruta_archivo) ? basename($ruta_archivo): $pelicula->foto
        ]);
        return redirect()->route('peliculas.show',$pelicula)->with(['status'=> "Se editó la pelicula $pelicula->titulo"]);
    }
    public function destroy(Pelicula $pelicula)
    {
        Storage::delete('public/'.$pelicula->foto);
        $pelicula->delete() ;
        return redirect()->route('peliculas.index')->with(['status'=> "Se borró la pelicula $pelicula->titulo"]);
    }
}
