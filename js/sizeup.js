$(document).ready(function() {

	var width = (window.innerWidth);
	var height =  (window.innerHeight);

	$("div#sizeup").html("Largeur : "+width+" <br />Hauteur : "+height);
	
	window.onresize = function size ()
	{
		var width = (window.innerWidth);
		var height =  (window.innerHeight);

		$("div#sizeup").html("Largeur : "+width+" <br />Hauteur : "+height);
	}

     $(function() {
        $( "div#sizeup" ).draggable();
    });
 
});
