$(document).ready(function() {
    $("#lista2").sortable();

    $(".addrow").click(function(){
        $row = $(this).parent().parent();
        $rowClone = $row.clone();
        $rowClone.children().last().remove();
        $rowClone.addClass("table-primary");
        $rowClone.append("<td><a href='' class='btn btn-primary'>Borrar</a></td>");
        $("#lista2").append($rowClone);
    });  
    
    $(".deleteRow").click(function(e){
        e.preventDefault();
        
        playlist_id = $(this).parent().parent().attr('id');
        console.log($(this).parent().parent().attr('id'));  //id to delete through ajax
        $(this).parent().parent().remove();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/playlist/'+playlist_id+'/',
            type: 'DELETE',
            data: {'id': playlist_id},
            success: function(){ 
                console.log('success'); 
            },
            error: function(data) {
                console.log(data)
            }
        });



    });





    $("#saveplaylist").click(function(e){
        e.preventDefault();
        var table = $('#tableplay').tableToJSON();
        //console.log(table);
        dataString = JSON.stringify(table);  
        //console.log(dataString = JSON.stringify(table));  
        table2 = [{'name' : 'name', 'jaja' : 'jaja'},{'name' : 'name', 'jaja' : 'jaja'}];       
        table3 = {'name' : 'epales', 'jaja' : 'jaja'};  
        table4=[{'name' : 'epales', 'jaja' : 'jaja'}]; 


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/persistPlaylist/',
            type: 'POST',
            data: dataString,
           
            //contentType: 'application/json',
            //processData: false,
            //dataType: "json",
            success: function(){ 
                console.log('success'); 
            },
            error: function(data) {
                console.log(data)
            }
        });


    })






});



