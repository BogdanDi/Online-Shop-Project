$.ajax({
	    method: 'GET',
	    url: 'https://minimized-bck-end-bogdandima.c9users.io/api/products/getAllProducts.php',
	    success: function(data) {
	    	console.log("Products loaded.");
		    serverData = data;
			console.log("data loaded:", data);
			populateProducts(data.details);
			onProductsLoad();
	    }
	});
	
var populateProducts = function(data) {
	console.log("populating with:", data);
	var products = "";
	    console.log('len', data);
	    for(var i=0; i<data.length; i++){
	    	products += '<div data-id="' + data[i].id + '" class="prod_thumbs"><img class="testbuton" src="' + data[i].image + '" alt="' + data[i].id + '" /></div>';
		}
		$('.frh_car_items').html(products);
}
var sortById = function (idSort, arrayToSort) {
	console.log("Sort by id: ", idSort, "array: ", arrayToSort);

	var sortedArray = arrayToSort.filter(function(item) {
		return item.topsel < 15;
	});

	console.log("Sorted array: ", sortedArray);

	populateProducts(sortedArray);
}
var sortByTopsel = function (topsl, arrayToSort) {
	console.log("Sort by id: ", topsl, "array: ", arrayToSort);

	var sortedArray = arrayToSort.filter(function(item) {
		return item.topsel > 5;
	});

	console.log("Sorted array: ", sortedArray);

	populateProducts(sortedArray);
}
var sortBySaleOff = function (saleOff, arrayToSort) {
	console.log("Sort by ts: ", saleOff, "array: ", arrayToSort);
	var sortedArray = arrayToSort.filter(function(item) {
		return item.promo == 1;
	});
	console.log("Sorted array: ", sortedArray);
	populateProducts(sortedArray);
}
var sortByRating = function (rated, arrayToSort) {
	console.log("Sort by rateing: ", rated, "array: ", arrayToSort);
	var sortedArray = arrayToSort.filter(function(item) {
		return item.rating == 5;
	});
	console.log("Sorted array: ", sortedArray);
	populateProducts(sortedArray);
}
var serverData = null;
		
$('div[data-categ="featured"]').on('click', function() {
	console.log("clicked");

	if (serverData != null) {
		var idSort = $(this).attr('data-categ');
		console.log('topsel =', idSort, serverData);

		sortById(idSort, serverData.details);
		onProductsLoad();
	}
	else
	{
		alerts("Products not loaded yet!");
	}
});
	
$('div[data-categ="topsel"]').on('click', function() {
	console.log("clicked");

	if (serverData != null) {
		var topsl = $(this).attr('data-categ');
		console.log('topsel =', topsl, serverData);

		sortByTopsel(topsl, serverData.details);
		onProductsLoad();
	}
	else
	{
		alerts("Products not loaded yet!");
	}
});
	
$('div[data-categ="sale-off"]').on('click', function() {
	console.log("clicked");
	if (serverData != null) {
		var saleOff = $(this).attr('data-categ');
		console.log('saleOff =', saleOff, serverData);
		sortBySaleOff(saleOff, serverData.details);
		onProductsLoad();
	}
	else
	{
		alerts("Products not loaded yet!");
	}
});
	
$('div[data-categ="top-rated"]').on('click', function() {
	console.log("clicked");
	if (serverData != null) {
		var rated = $(this).attr('data-categ');
		console.log('rated =', rated, serverData);
		sortByRating(rated, serverData.details);
		onProductsLoad();
	}
	else
	{
		alerts("Products not loaded yet!");
	}
});

$(document).ready(function(){
	console.log("Document ready");
});

$(window).on("load", function(){
	console.log("Window load");
});



	
var populateProduct = function(data) {
	console.log("populating with:", data[0].image);
	var product = "";
		console.log('len', data);
	
		product += '<img class="ceva" src="' + data[0].image + '" alt="furniture" />';
		product += '<h1 class="headder_nume_produs">' + data[0].name + '</h1>';
		product += '<div class="btns"id = "bunton_verde">';   
	    product +=  '<a href="Shope Page_3.html"><div class="but1 ultimlu_buton">Quick View</div></a>';
	    product += '</div>'
		
		$('.frg_body_img').html(product);
}
var selectedProduct = function (prouctId, arrayToSort) {
	//console.log("id clicked: ", prouctId, "array: ", arrayToSort);

	var sortedArray = arrayToSort.filter(function(item) {
		return item.id == prouctId;
	});

	//console.log("Sorted array: ", sortedArray);

	populateProduct(sortedArray);
}
	

var onProductsLoad = function(){
	$('.prod_thumbs').on('click', function() {
		//console.log("image clicked");

		if (serverData != null) {
			var prouctId = $(this).attr('data-id');
			//console.log('prouctId =', prouctId, serverData);

			selectedProduct(prouctId, serverData.details);
		}
		else
		{
			alerts("Products not loaded yet!");
		}
	});
}

	$(document).ready(function(){
	console.log("Document ready");
});

$(window).on("load", function(){
	console.log("Window load");
});
