$(document).ready(function(){
    $(".filter").click(function(){
        var attr = $(this).attr("data-filter");
        $(".filter").removeClass("active");
        $(this).addClass("active");
        $(".menu-restaurant").hide();
        if(attr == "breakfast"){
            $("."+ attr).show();
        }
        else if(attr == "lunch"){
            $("."+ attr).show();
        }
        else if(attr == "dinner"){
            $("."+ attr).show();
        }
        else {
            $(".menu-restaurant").show();
        }

       
    })
});