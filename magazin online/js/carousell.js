$( document ).ready(function(){
	var first_img = $( ".frh_car_items div:first-child img").attr("src");
	$(".ceva").attr("src", first_img);
	$(".ceva").attr("alt", first_img);
})

$(".frh_car_items div img").click(function(){
	var image = $(this).attr("src");
	console.log(image);
	$(".ceva").attr("src", image);
	$(".ceva").attr("alt", image);
})