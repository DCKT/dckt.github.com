$(document).ready(function (){

	$("#right-content a#home").click(function(){
		$(".window-appli").fadeOut("normal");
	});


	$("#right-content #dock ul li").click(function(){
		$(".window-appli").fadeIn("normal");
	});

});