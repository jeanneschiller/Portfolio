$(function(){
	//Smooth Scroll
	$('.menu a').smoothScroll();

	//background fill
	$(".skill-set").mouseover(function(){
    	$(".skill-set").css("background-color", "yellow");
    });
    $(".skill-set").mouseout(function(){
        $(".skill-set").css("background-color", "lightgray");
    });

});