@extends('layouts.master')

@section('css')
<script src="{{ asset('assets/js/dropzone.js') }}"></script>
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Blank page</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Extra Pages</a></li>
        <li class="breadcrumb-item active">Blank page</li>
    </ol>

</div>

@endsection

@section('content')
 
    <div class="contatiner">


        <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
        <form method="post" action="{{route('upload-files')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
        @csrf
        </form>   



    </div>
@endsection

@section('script')
<link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}"> 

<script type="text/javascript">
    Dropzone.options.dropzone =
     {


        paramName: 'file',
        chunking: true,
        chunkSize: 1000000, // bytes
        retryChunks: true,
        retryChunksLimit: 3,
        maxFilesize: 100, // megabytes    
        //forceChunking: true,
        //url: '/upload',
    
     
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".mp4",
        addRemoveLinks: true,
        timeout: 5000,

        chunksUploaded: function(file, done) {
        done();
        }

        // success: function(file, response) 
        // {
        //     console.log(response);
        // },
        // error: function(file, response)
        // {
        //    return false;
        // }



    };
</script>

@endsection