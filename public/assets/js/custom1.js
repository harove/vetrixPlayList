


$(document).ready(function() {

    $("#addrow").click(function(){
        $row = $('#addrow').parent().parent();
        $rowClone = $row.clone();
        $rowClone.children().last().remove();
        $("#lista2").append($rowClone);
    });   
});

