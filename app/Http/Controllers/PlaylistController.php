<?php

namespace App\Http\Controllers;
use App\Playlist;
use Illuminate\Http\Request;
class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    
    //     $playlist = new Playlist;
    //     $playlist->name = $request->input('name');
    //     $playlist->save();
    //     return redirect()->route('pages-blank');
    
    // }

    public function store(Request $request)
    {
        if($request->ajax()){
            // $playlist = new Playlist;   
            // $playlist->name = $request->input('name');
            // $playlist->save(); 
            // return response()->json([
            //    //"message ok" => $request->json()->all()
            //    //"message okp" => json_encode($request->json()->all(),JSON_UNESCAPED_SLASHES)
               
            // ]); 

                
            

                // return response()->json(
                // //     //"message ok" => $request->json()->all()
                // //     //"message okp" => json_encode($request->json()->all(),JSON_UNESCAPED_SLASHES)
                // //     //"message okp" => $postbody[0]
                // //     //json_decode($request->getContent(), true)
                // $request->json()->all()
                    
                // ); 

                $videosArray= $request->json()->all();
                
                $playlist = new Playlist;  

                foreach ($videosArray as $video){
                    $playlist->name = $video['name'];
                    $playlist->save(); 
                }

        
        
            }



        //$request->all();
        //dd(json_decode($request->getContent(), true));
        //dd($request->all());
        //$input = $request->all();
        // $playlist = new Playlist;   
        // $playlist->name = $request->get('name');
        // $playlist->save();                       
        //return redirect()->route('pages-blank');   //sirve
        //return response()->json(dd($request->all()));
    }


    // class QuestionsController extends Controller
    // {
    //     public function store(Request $request, Mymodel $mymodel) {
    //       $mymodel->create([
    //         'title'=>$request->title,
    //         // this or the one below will work.
    //         // 'option_name'=> $request->option_name,
    //         'option_name'=>Input::get('option_name'),
    //         ]);
    //       return back();
    //     }
    // }









    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
