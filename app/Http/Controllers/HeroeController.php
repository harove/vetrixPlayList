<?php

namespace App\Http\Controllers;

use App\Heroe;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


// use Illuminate\Support\Facades\Request for Request::input('name')        




class HeroeController extends Controller
{
    public function index(){
        $heroes = Heroe::all();
        $playlists = Playlist::all();
        return view('pages-blank',['heroes' => $heroes],['playlists' => $playlists]);
    }


    public function uploadVideo(){

        return view('imageupload');
    }




    public function uploadFiles(Request $request) {

        //dd('hola');
        //dump($request->file());
        //dump($request);
        //dump($request->all());
        
        // dump($request->get('dzuuid'));
        // dump($request->get('dzchunkindex'));   //17
        // dump($request->get('dztotalfilesize')); //8.545.557
        // dump($request->get('dzchunksize'));  //1.000.000
        // dump($request->get('dztotalchunkcount'));   //9
        // dump($request->get('dzchunkbyteoffset')); // 8500000
        
        

        $input = Input::all();

        //dump($request->input('dzuuid')!=null);





        //if (chunk)

        //dump($input);

        //return collect([1,2,3,4]);
        //dd($input->acceptedFiles);

        //$request->get('acceptedFiles');
        //dd(json_encode($request));
       
        // 'file' => 'image|max:500000',

        $rules = array(
            'file' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv,png|max:1000000'
        );
   



        $validation = Validator::make($input, $rules);        
        //dump($validation->fails());
        if ($validation->fails()) {
            return Response::make($validation->errors()->first(), 400);
        }
 


        $destinationPath = 'uploads'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
 
        if ($upload_success) {
             return Response::json('success', 200);
         } else {
             return Response::json('error', 400);
         }


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
