$(function(){
	//Smooth Scroll
	$('.menu a').smoothScroll();

	//background fill
	$(".skill-set").mouseover(function(){
    	$(this).css("background-color", "#E5CD54");
    });
    $(".skill-set").mouseout(function(){
        $(this).css("background-color", "#53BDAF");
    });

});