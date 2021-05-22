$(document).ready(function(){
    $(".filter").click(function(e){
       
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
        else if(attr == "chop-suey"){
            $("."+ attr).show();
        }
        else if(attr == "egg-foo-young"){
            $("."+ attr).show();
        }
        else if(attr == "poultry"){
            $("."+ attr).show();
        }
        else if(attr == "roast-pork"){
            $("."+ attr).show();
        }
        else if(attr == "shrimp"){
            $("."+ attr).show();
        }
        else if(attr == "beef"){
            $("."+ attr).show();
        }
        else if(attr == "vegetable"){
            $("."+ attr).show();
        }
        else if(attr == "fried-rice"){
            $("."+ attr).show();
        }
        else if(attr == "lo-mein"){
            $("."+ attr).show();
        }
        else if(attr == "chow-mein-fun"){
            $("."+ attr).show();
        }
        else if(attr == "daily"){
            $("."+ attr).show();
        }
        else if(attr == "house"){
            $("."+ attr).show();
        }
        else if(attr == "lunch"){
            $("."+ attr).show();
        }
        else if(attr == "side"){
            $("."+ attr).show();
        }
        else {
            $(".menu-restaurant").show();
        }

        return false;
       
    })
});