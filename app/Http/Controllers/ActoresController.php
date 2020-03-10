<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActoresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = Actor::all();
        return view('actores.index',compact('actores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        // $pelicula = Pelicula::find($pelicula);
       return view('actor.show', compact('actor'));

    }
    public function create()
    {
        return view('actores.create');
    }
    public function store()
    {

        request()->validate([
            'nombre'=> 'required|min:4'
        ]);
        
        $act = Actor::create([
            'nombre'=>request()->nombre,
            
        ]);

        return redirect()->route('actores.index')->with(['status'=> "Se agrego un actor $act->nombre"]);
    }
}