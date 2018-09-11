$(function()    {
    //Cache the window object
    var $window = $(window);
    
    //Parallax background effect
    $('section[data-type="background"]').each(function()    {
        var $bgobj = $(this); //assigning the object
        $(window).scroll(function() {
            
            //scroll the background at var speed
            //the yPos is a negative value because we're scrolling it up!
            
            var yPos = -($window.scrollTop()/
$bgobj.data('speed'));
            
            //Put together our final background position
            var coords = '50% '+ yPos + 'px';
            
            //Move the background
            $bgobj.css({backgroundPosition: coords });
        
        
        }); //end window scroll
    
    
    });
});

$(document).ready(function () {
    var divs = $('#tn-mainlist>.tn-item');
    var now = 0; // currently shown div
    divs.hide().first().show();
    $("#next").click(function (e) {
        divs.eq(now).slideUp(200);
        now = (now + 1 < divs.length) ? now + 1 : 0;
        divs.eq(now).slideDown(200); // show next
        //var aaa = $("#pg-from").html();
        //alert(aaa);
        if(now == 0) {
            $("#pg-from").html("১");
            $("#pg-to").html("৩");
        } else if(now == 1) {
            $("#pg-from").html("৪");
            $("#pg-to").html("৬");
        } else if(now == 2) {
            $("#pg-from").html("৭");
            $("#pg-to").html("৯");
        } else if(now == 3) {
            $("#pg-from").html("১০");
            $("#pg-to").html("১২");
        } else if(now == 4) {
            $("#pg-from").html("১৩");
            $("#pg-to").html("১৫");
        } else if(now == 5) {
            $("#pg-from").html("১৬");
            $("#pg-to").html("১৮");
        }
    });
    $("#prev").click(function (e) {
        divs.eq(now).slideUp(200);
        now = (now > 0) ? now - 1 : divs.length - 1;
        divs.eq(now).slideDown(200); // or .css('display','block');
        //console.log(divs.length, now);
        if(now == 0) {
            $("#pg-from").html("১");
            $("#pg-to").html("৩");
        } else if(now == 1) {
            $("#pg-from").html("৪");
            $("#pg-to").html("৬");
        } else if(now == 2) {
            $("#pg-from").html("৭");
            $("#pg-to").html("৯");
        } else if(now == 3) {
            $("#pg-from").html("১০");
            $("#pg-to").html("১২");
        } else if(now == 4) {
            $("#pg-from").html("১৩");
            $("#pg-to").html("১৫");
        } else if(now == 5) {
            $("#pg-from").html("১৬");
            $("#pg-to").html("১৮");
        }
    });
});

