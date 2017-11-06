var sliderCounter = 0;

//SLIDER TOP
$('.next_carousel').on('click', function() {

	sliderCounter += 1;

	if(sliderCounter >= $('.slider-list').children().length) {
		sliderCounter = 0;
 	}
 	
	$('.slider-list').css('margin-left', '-' + sliderCounter * 750 + 'px');
	$('.slider-list').css("transition", '2s');
});

$('.prev_carousel').on('click', function() {
	sliderCounter -= 1;

	if(sliderCounter < 0) {
		sliderCounter = $('.slider-list').children().length-1;
 	}
 	
	$('.slider-list').css('margin-left', '-' + sliderCounter * 750 + 'px');
	$('.slider-list').css("transition", '2s');

});

//SLIDER BOTTOM TABS

$(".frg_l_arrow").on("click", function() {
	sliderCounter+=1;
	if (sliderCounter>= $(".frh_car_items:visible").children().length-5){
		sliderCounter = 0;
	}
	$(".frh_car_items").css("margin-left", "-" + sliderCounter * 77 + "px");
	$(".frh_car_items").css("transition", "0.5s");
})
$(".frg_r_arrow").on("click", function() {
	sliderCounter-=1;
	if (sliderCounter<0) {
		sliderCounter = $(".frh_car_items:visible").children().length-6;
	}
	$(".frh_car_items").css("margin-left", "-" + sliderCounter * 77 + "px");
	$(".frh_car_items").css("transition", ".5s");
})

//SLIDER BRANDS

$(".brand_move_l").on("click", function() {
	sliderCounter+=1;
	if (sliderCounter>= $(".brand_wrap").children().length-14){
		sliderCounter = 0;
	}
	$(".brand_wrap").css("margin-left", "-" + sliderCounter * 105 + "px");
	$(".brand_wrap").css("transition", "0.5s");
})
$(".brand_move_r").on("click", function() {
	sliderCounter-=1;
	if (sliderCounter<0) {
		sliderCounter = $(".brand_wrap").children().length-14;
	}
	$(".brand_wrap").css("margin-left", "-" + sliderCounter * 105 + "px");
	$(".brand_wrap").css("transition", ".5s");
})
