<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Heroe;
use App\Playlist;


class HeroeController extends Controller
{
    public function index(){
   
        $heroes = Heroe::all();
        $playlists = Playlist::all();
        return view('pages-blank',['heroes' => $heroes],['playlists' => $playlists]);
    }

    public function create(){
        return view('admin.heroes.create');
    }
    public function store(Request $request){
       return $this->saveHero($request, null);
    }
    public function update(Request $request, $id){
       return $this->saveHero($request, $id);
    }
    public function saveHero(Request $request, $id){

        if($id){
            
            $hero = Heroe::find($id);

        }else{
            
            $hero = new Heroe();
            $hero->xp       = 0;
            $hero->level_id = 1;
        }

        $hero->name     = $request->input('nombre');
        $hero->hp       = $request->input('hp');
        $hero->attack   = $request->input('ataque');
        $hero->defense  = $request->input('defensa');
        $hero->luck     = $request->input('suerte');
        $hero->coins    = $request->input('monedas');
        $hero->save();

        return redirect()->route('admin.heroes');
    }
    public function edit($id){
        $hero = Heroe::find($id);

        return view('admin.heroes.edit', ['hero' => $hero]);
    }
}
