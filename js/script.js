$(document).ready(function() {
	var tmp, content;
	mov = 500;

	$("nav ul a").click(function(){
		var element = $(this);
		$("nav ul a").css("background-color","");
		element.css("background-color","rgba(0,0,0,0.3)");
	});
	
	$("table#left_table tr, table#right_table tr").hover(
		function () {
			var element = $(this);
			tmp = element.attr("id");
			content = element.attr("data-content");
			element.after("<div class='info info"+tmp+"'>"+content+"</div>");
			
		},
		function () {
			$(".info"+tmp).remove();
		}
	);
	
	$("#left-arrow").click(function(){
		
		if (mov >= 600)
		{	
			mov -= 100;
			var x = parseInt($("#table-test").css("left"));
			position = x + 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});
	$("#right-arrow").click(function(){
		
		if (mov <= 600)
		{	
			mov += 100;
			var x = parseInt($("#table-test").css("left"));
			position = x - 250;
			$("#table-test").animate({ left: position }, 500 );
		}
	});

	$("table#table-test tr td").hover(
		function(){
			// thi = $(this);
			// tp = thi.attr("id");
			// thi.after("<div class='hover more"+tp+"'><h1>Blabla</h1></div>")
		},
		function(){
		
		}
	);


});