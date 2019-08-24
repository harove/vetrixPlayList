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
    
  
    


});



