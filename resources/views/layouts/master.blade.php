<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        @include('layouts.head')
    </head>
<body>
    <div id="wrapper">
         @include('layouts.header')
         @include('layouts.sidebar')
         <div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   @include('layouts.settings')
                   @yield('content')
                </div> 
            </div> 
        </div> 
        @include('layouts.footer')  
        @include('layouts.footer-script')  
    </div> 



    <script>
        $(document).ready(function() {

            // $("#lista1").sortable({
            //     connectWith : ['#lista2'],
            //   update : function(event, ui) {
            //      $('#resultado').append(ui.item.parent().attr('id')+"<br/>");
            //      $('#resultado').append(ui.item.parent().sortable('toArray')+"<br/>");
            //   }});

            // $("#lista2").sortable({connectWith : ['#lista1']});



            $("#addrow").click(function(){
                console.log("hola");
                $("#lista2").append("hola");
            });   

           



        });
    </script>
    




</body>
</html>