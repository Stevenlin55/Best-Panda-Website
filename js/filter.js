$(document).ready(function(){
    $(".filter").click(function(){
        var attr = $(this).attr("data-filter");
        $(".filter").removeClass("active");
        $(this).addClass("active");
        $(".menu-restaurant").hide();
        if(attr == "appetizer"){
            $("."+ attr).show();
        }
        else if(attr == "soup"){
            $("."+ attr).show();
        }
        else if(attr == "entree"){
            $("."+ attr).show();
        }
        else if(attr == "fried-rice"){
            $("."+ attr).show();
        }
        else if(attr == "noodles"){
            $("."+ attr).show();
        }
        else if(attr == "specials"){
            $("."+ attr).show();
        }
      
        else if(attr == "side"){
            $("."+ attr).show();
        }
        else {
            $(".menu-restaurant").show();
        }

       
    })
});