function hotdeals_auto(){

	var currentDiv = 0;
	var maxDiv = 3;

	var showDiv = function(){
	  currentDiv++;
	  if (currentDiv > maxDiv)
	  {
	  	currentDiv = 1;
	  }
		var divName = ".div"+currentDiv;
	  $(".div1, .div2, .div3").removeClass("current_item");
	  //console.log("Showing div: " + divName);
		if($(divName).hasClass("current_item")){
	  		$(divName).removeClass("current_item");
	  	} else {
	  		$(divName).addClass("current_item");
	  		
	  		var currentDivVal = currentDiv - 1;
	  		var currentDivMarg = currentDivVal * -388;
	  		//console.log(currentDivMarg);
	  		$("#hotbigcontainer").css("margin-left", currentDivMarg);
			$("#hotbigcontainer").css("transition", ".5s");

	  }
	}

	var interval = setInterval(showDiv, 5000);
}
hotdeals_auto();

var hotdeals_man = function(){
	$(".timer_selector").removeClass("current_item");
	$(this).addClass("current_item");
			if ($("#div1").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "0");
			$(".feedback_div").css("transition", ".5s");
		} else if ($("#div2").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "-1140px");
			$(".feedback_div").css("transition", ".5s");
		} else {
			$(".feedback_div").css("margin-left", "-2280px");
			$(".feedback_div").css("transition", ".5s");
		}
}

//FURNITURE GALLERY TABS
function furActiveTabs() {
	$(".frg_menu_item").on("click", function(){
		$(".frg_menu_item").removeClass("frg_menu_item_active");
		$(this).addClass("frg_menu_item_active");
//link tabs to divs
			// if ($("#fr_gal1").hasClass("frg_menu_item_active")){
			// 	console.log("cont1");
			// 	$(".inner_cont_sell").hide();
			// 	$(".frg_inner_container1").show();
			// } else if ($("#fr_gal2").hasClass("frg_menu_item_active")){
			// 	console.log("cont2");
			// 	$(".inner_cont_sell").hide();
			// 	$(".frg_inner_container2").show();
			// } else if ($("#fr_gal3").hasClass("frg_menu_item_active")){
			// 	console.log("cont3");
			// 	$(".inner_cont_sell").hide();
			// 	$(".frg_inner_container3").show();
			// } else {
			// 	console.log("cont4");
			// 	$(".inner_cont_sell").hide();
			// 	$(".frg_inner_container4").show();
	// 		// }
	// 		var first_img = $( ".frh_car_items:visible div:first-child img").attr("src");
	// $(".ceva").attr("src", first_img);
	// $(".ceva").attr("alt", first_img);
	});
}

furActiveTabs();



//BLOG
function blog_auto(){

	var currentDiv = 0;
	var maxDiv = 3;

	var showDiv = function(){
	  currentDiv++;
	  if (currentDiv > maxDiv)
	  {
	  	currentDiv = 1;
	  }
		var divName = ".div"+currentDiv;
	  $(".div1, .div2, .div3").removeClass("current_item");
	  //console.log("Showing div: " + divName);
		if($(divName).hasClass("current_item")){
	  		$(divName).removeClass("current_item");
	  	} else {
	  		$(divName).addClass("current_item");
	  		
	  		var currentDivVal = currentDiv - 1;
	  		var currentDivMarg = currentDivVal * -1170;
	  		//console.log(currentDivMarg);
	  		$("#blog_big_wrap").css("margin-left", currentDivMarg);
			$("#blog_big_wrap").css("transition", ".8s");

	  }
	}

	var interval = setInterval(showDiv, 5000);
}
blog_auto();






//ERROR
var manslide = function() {
		$(".changeitem div").removeClass("current_item");
		$(this).addClass("current_item");



		//var leftDist = $(".feedback_div")css("margin-left");
		
		if ($("#div1").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "0");
			$(".feedback_div").css("transition", ".5s");
		} else if ($("#div2").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "-1140px");
			$(".feedback_div").css("transition", ".5s");
		} else {
			$(".feedback_div").css("margin-left", "-2280px");
			$(".feedback_div").css("transition", ".5s");
		}
};
/*var manslide = function() {
	$(".changeitem div").click(function(){
		$(".changeitem div").removeClass("current_item");
		$(this).addClass("current_item");



		//var leftDist = $(".feedback_div")css("margin-left");
		
		if ($("#div1").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "0");
			$(".feedback_div").css("transition", ".5s");
		} else if ($("#div2").hasClass("current_item")) {
			$(".feedback_div").css("margin-left", "-1140px");
			$(".feedback_div").css("transition", ".5s");
		} else {
			$(".feedback_div").css("margin-left", "-2280px");
			$(".feedback_div").css("transition", ".5s");
		}
	})
}
*/

function feedback_auto(){

	var currentDiv = 0;
	var maxDiv = 3;

	var showDiv = function(){
	  currentDiv++;
	  if (currentDiv > maxDiv)
	  {
	  	currentDiv = 1;
	  }
		var divName = "#div"+currentDiv;
	  $("#div1, #div2, #div3").removeClass("current_item");
	  //console.log("Showing div: " + divName);
		if($(divName).hasClass("current_item")){
	  		$(divName).removeClass("current_item");
	  	} else {
	  		$(divName).addClass("current_item");
	  		
	  		var currentDivVal = currentDiv - 1;
	  		var currentDivMarg = currentDivVal * -1140;
	  		//console.log(currentDivMarg);
	  		$(".feedback_div").css("margin-left", currentDivMarg);
			$(".feedback_div").css("transition", ".5s");

	  }
	}

	var interval = setInterval(showDiv, 5000);
}
feedback_auto();

//$(".changeitem").mousemove(console.log("mouseenter"));


/*
if ($(".changeitem").mouseenter()){

	autoslide();
	alert('mouseout');
} else {
	alert('mousein');
	manslide();
}*/