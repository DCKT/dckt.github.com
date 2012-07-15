$(document).ready(function (){

	//Event click go back home
	$("#right-content a#home").click(function(){
		$(".window-appli").fadeOut("normal");
	});


	//Event click dock
	$("#right-content #dock ul li").click(function(){
		var id_application = $(this).attr("id");


			$("#test"+id_application).fadeIn("normal");
		
		
	});

	//Event click application
	$("#right-content #applications ul li").click(function(){
		if($(this).attr("id") == "2")
		{
			alert("reussi")
		}
		else {
			$(".window-appli").fadeIn("normal");
		}

		
	});

});