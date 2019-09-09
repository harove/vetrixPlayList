<?php

namespace App\Http\Controllers;

use App\Heroe;
use App\Playlist;
use Illuminate\Http\File;
//use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
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
        // dump($request->get('dzchunkindex'));   //0
        // dump($request->get('dztotalfilesize')); //8.545.557
        // dump($request->get('dzchunksize'));  //1.000.000
        // dump($request->get('dztotalchunkcount'));   //9
        // dump($request->get('dzchunkbyteoffset')); // 8500000
        
      
        //dump($input);

        //dump($request->file());     okp
        //dump($request->file('file'));
        //dump(Input::file('file')->getClientOriginalExtension());
        //dump($request->input('dzuuid')!=null);    okp

        //return collect([1,2,3,4]);
        //dd($input->acceptedFiles);

        //$request->get('acceptedFiles');
        //dd(json_encode($request));
       
        // 'file' => 'image|max:500000',

        //$input = Input::all();

        if ($request->input('dzuuid')!=null) {

            //$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
            //dump(isset($_REQUEST["dzuuid"]));
            //dump($_REQUEST);
            //dump($_FILES["file"]);
            // dump(Input::file('file')->guessClientExtension());
            // dump(Input::file('file')->getClientOriginalName());
            // dump(__DIR__);
            // dump(Input::file('file')->getRealPath());
            // dump($_FILES['file']);
            // dump(Input::file('file'));
            //$dzchunkindex = $request->get('dzchunkindex');
            //dump($dzchunkindex);

            // $rules = array(
            //     'file' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv|max:1000000'
            // );
            // $validation = Validator::make($input, $rules);        
            // //dump($validation->fails());
            // if ($validation->fails()) {
            //     return Response::make($validation->errors()->first(), 400);
            // }
    
            // if (Input::file('file')->getClientOriginalExtension() == 'mp4'){
            // }    
            $chunk = isset($_REQUEST["dzchunkindex"]) ? intval($_REQUEST["dzchunkindex"]) : 0;
            $chunks = isset($_REQUEST["dztotalchunkcount"]) ? intval($_REQUEST["dztotalchunkcount"]) : 0;

            $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_FILES["file"]["name"];
            $filePath = "uploads/$fileName";

            $out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
            if ($out) {
              // Read binary input stream and append it to temp file
              $in = @fopen($_FILES['file']['tmp_name'], "rb");
             
              if ($in) {
                while ($buff = fread($in, 512))
                  fwrite($out, $buff);
              } else
                die('{"OK": 0, "info": "Failed to open input stream."}');
             
              @fclose($in);
              @fclose($out);
             
              @unlink($_FILES['file']['tmp_name']);
            } else
              die('{"OK": 0, "info": "Failed to open output stream."}');
             
             
            // Check if file has been uploaded
            if (!$chunks || $chunk == $chunks - 1) {
              // Strip the temp .part suffix off
              rename("{$filePath}.part", $filePath);
            }
             
            die('{"OK": 1, "info": "Upload successful."}');

                //$extension = Input::file('file')->getClientOriginalExtension(); 
                //$fileName = rand(11111, 99999) . '_' . $dzchunkindex . '.' . $extension; // renameing image
                //$fileName = Input::file('file')->getClientOriginalName() . '_' . $dzchunkindex . '.' . Input::file('file')->getClientOriginalExtension();
                //$destinationPath = 'uploads';
                //$fileName = Input::file('file')->getClientOriginalName();
                //dump($fileName);
                //$path = public_path().'/uploads/';
                //return $file->move($path, $filename);
                
                //dump($fileNameFullPath);
                //$fileNameFullPath = 'uploads/' . $fileName;
                //$storage_path = storage_path() . '/public';
                //$fileNameFullPath = $storage_path . '/' . $fileName;
                //dump($storage_path);

                //dump($disk);
                
                // if ($dzchunkindex == 0) {
                //     // create new file
                //     Storage::putFileAs('public',$request->file('file'),'movie.mp4');
                // }


                //$disk = Storage::disk('local'); 

                // $fout = fopen('movie.mp4','ab');
                // dump($fout);
                // $fin = fopen($request->file('file'),'rb');
                // dump($fin);
                // $buff = fread($fin,1001006);
                // dump($buff);
                // fwrite($fout,$buff);
                // dump(fwrite($fout,$buff));
                
                // fclose($fin);
                // fclose($fout);
                
                //$disk->put('movie.mp4',$fh);


                //$appended = $disk->append('movie.mp4',fopen($request->file('file'),'a+b'));   //ok first chunk

                //$appended = $disk->append('movie.mp4',$request->file('file'));
              
                //file_put_contents('movie.mp4', stream_get_contents($request->file('file')), FILE_APPEND);
                //$appended = Storage::append('movie.mp4', $request->file('file'));
                //dump($appended);



                //Storage::putFile($fileName, new File($storage_path));
                //$path = public_path().'/uploads/';
                //return $file->move($path, $filename);

               
                //dump(Storage::exists($request->file('file')));

                //$path = $request->file('file')->store('files');

                //dump($path);

                //Storage::append($request->file('file'), 'public/coco.mp4' );
             
                

                //$file = fopen(Storage::disk('local'), "a+b");

                
                //file_put_contents ( $fileNameFullPath , $fileName, FILE_APPEND );
                //if file name exist in folder entonces apendear en el file

              

                //apendear 

                //$upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
                // if ($upload_success) {
                //     return Response::json('success', 200);
                // } else {
                //     return Response::json('error', 400);
                // }
                
        

        }  // check is chunk
    }  //end uploadFiles method




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
