$(document).ready(function(){
    // append arrow img for tile
    var appendArrow = function(){
        var tile = $("*[class*='arrow-'] a");
        
        $(tile).append("<div class='tilearrow'></div>");
    }
    
    //add right padding if right sibling exists
    var tileTxt = $(".tile-txt");
    $(tileTxt).each(function(){
        if($(this).next().hasClass("tile-txt")){
            $(this).addClass("rp12");
        }
    })
    
    
    // Match height
    var matchHeight = function(){
        var winWidth = $(window).width(),
            mhel = $(".f-matchHeight"),
            heightForAll = 0;
        
        if(winWidth > 992){
            heightForAll = 0;
            $(mhel).each(function(){
                $(this).css({"height": "auto"})
                // Increase height for all is taller one is found.
                if($(this).outerHeight() > heightForAll){
                    heightForAll = $(this).outerHeight();
                }
            });

            // Match
            $(mhel).css({"height": heightForAll + "px"})
        } else {
            $(mhel).css({"height": 0})
            $(mhel).css({"height": "auto"})
        }
    }
    
    // Get URL param
    function getUrlParameter(sParam){
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        
        for(i = 0; i < sURLVariables.length; i++){
            var sParameterName = sURLVariables[i].split("=");
            
            if(sParameterName[0] === sParam){
                return sParameterName[1];
            }
        }
    }
    
    // Detect submenu & adjust .container top margin
    function detectSM(){
        var isSM = getUrlParameter("sm");
        if(isSM == 1){
            if($(window).width() > 767){
                $(".container").css({"margin-top" : "50px"})
            } else {
                $(".container").css({"margin-top" : "-75px"})
            }
        }
    }
    
     
    // MOBILE MENU TOGGLE =======
	$("#m-menu").click(function(){
        $("nav").slideToggle(function(){
            if($("nav").is(":visible")){
                $("nav").addClass("hambactive")
            }else{
                $("nav").removeClass("hambactive")
            }
        })
    });
    
	// recover nav
	$(window).resize(function(){
        if($(window).width() > 767){
            $("nav").show().removeClass("hambactive")
        }else{
            if(!$("nav").hasClass("hambactive")){
                $("nav").hide()
            }
        }
    });
    
    // Mobile Submaneu behaviour
    var makeMobileSubmenu = function(){
        if($(window).width() < 767){
            if($("#subnav").length){
                if(!$("#mSubDropdown").length){ 
                    var subnavLabel = $("#subnav ul").attr("data-tabindex"),
                        subnavLabel = $("nav ul li:nth-child(" + subnavLabel + ")").text();

                    $("#subnav").prepend("<div id='mSubDropdown'><a href='#'>" + subnavLabel + "<span></span></a></div><div id='mSubDropdownArrow'></div>");
                    $("#mSubDropdownArrow").hide();
                    $("#mSubDropdown").click(function(e){
                        $("#subnav ul, #mSubDropdownArrow").slideToggle();
                        e.preventDefault();
                    })
                } else {
                    $("#mSubDropdown").show();
                }

                $("#subnav ul, #mSubDropdownArrow").hide();
                $("#mSubDropdownArrow").css({"left" : ($("#mSubDropdownArrow").parent().outerWidth() - $("#mSubDropdownArrow").outerWidth()) / 2});
                $(".container").css({"margin-top" : "-25px"})
            } else {
                 $(".container").css({"margin-top" : "-75px"})
            }
        } else {
            $("#mSubDropdown, #mSubDropdownArrow").hide();
            $("#subnav ul").show()
        }
    };
    
    
    // onload
    matchHeight();
    appendArrow();
    detectSM();
    makeMobileSubmenu();
    
    $(window).resize(function(){
        matchHeight();
        detectSM();
        makeMobileSubmenu();
    });
    
})





