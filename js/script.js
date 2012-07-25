$(document).ready(function (){
	var id_application;
	//Event click go back home
	$("#right-content a#home").click(function(){
		$("#test"+id_application).fadeOut("normal");
		$("#right-content #dock, #right-content #applications").fadeIn("normal");
		
	});


	//Event click dock
	$("#right-content #dock ul li").click(function(){
		id_application = $(this).attr("id");

			$("#right-content #dock, #right-content #applications").fadeOut("normal");
			$("#test"+id_application).fadeIn("normal");

		
		
	});

	//Event click application
	$("#right-content #applications ul li").click(function(){
			
	});

});