


$(document).ready(function() {

    $("#addrow").click(function(){
        $row = $('#addrow').parent().parent()


        $("#lista2").append($row.clone());

    
        

    });   
});

