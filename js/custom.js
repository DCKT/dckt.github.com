$(document).ready(function() {

	$("div.presentation img:eq(0)").animate({
		'left':'-3%',
	},700);
	$("div.presentation img:eq(1)").animate({
		'left':'-3%',
	},1200);
	$("div.presentation img:eq(2)").animate({
		'left':'-3%',
	},1600);

	$("div.exp div.exp-list").animate({
		'margin-top': '0px'
	}, 500);
	$("div.exp div.list-exp-left, div.list-exp-right").animate({
		'opacity': '1'
	}, 2500);
});