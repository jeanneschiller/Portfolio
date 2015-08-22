$(function(){
	//Smooth Scroll
	$('.menu a').smoothScroll();

	//portfolio masking
		// $(".portfolio-img").mouseover(function(){
  //   	$(this).css("filter", "none");
    	//$(".portfolio-img").mouseover(function(){
    	//$(this).css(".portfolio-img", "white");
    //});

	//skills background fill
	$(".skill-set").mouseover(function(){
    	$(this).css("background-color", "#E5CD54");
    });
    $(".skill-set").mouseout(function(){
        $(this).css("background-color", "#53BDAF");
    });

});