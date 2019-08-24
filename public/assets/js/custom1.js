$(document).ready(function() {
    $(".addrow").click(function(){
        $row = $(this).parent().parent();
        $rowClone = $row.clone();
        $rowClone.children().last().remove();
        $("#lista2").append($rowClone);
    });   
});

