var populateNewProducts = function(data) {
	//console.log("populating with:", data);
	var products = "";
	    //console.log('len', data);
	    for(var i=0; i<data.length; i++){
	    	if(i<8){

	    	products += '<div id="bed1" class="shop_cart shop_cart_main">';
	        products +=   '<div class="sus" style="background-image:url(' + data[i].image +');background-size:cover;">';
	        products +=        '<div class="btns">';   
	        products +=            '<a href="Shope Page_3.html"><div  class="but1">Quick View</div></a>';
	        products +=            '<a class="butondr" href=""><div class="buton" class="but2"><img class="buy_picto" src="images/buy.png" alt="buy"/>  ADD TO CART</div></a>';
	        products +=        '</div>';
	        products +=     '</div>';
	        products +=     '<div class="centru">';
	        products +=         '<div class="art"><h3 class="art_name">'+data[i].name+'</h3></div>';
	        products +=         '<div class="stars5">';
	        products +=            '<img src="images/blackstar.png" alt="star" />';
	        products +=            '<img src="images/blackstar.png" alt="star" />';
	        products +=            '<img src="images/star.png" alt="star" />';
	        products +=            '<img src="images/star.png" alt="star" />';
	        products +=            '<img src="images/star.png" alt="star" />';
	        products +=        '</div>';
	        products +=        '<div class="line5"></div>';
	        products +=        '<div class="cursor4"></div>';
			products +=     '</div>';
			products +=     '<div class="jos">';
			products +=        '<div class="d_left">';
			products +=              '<div class="small"><img src="images/heart.png" alt="like" /></div>';
			products +=              '<div class="small"><img src="images/arrows.png" alt="rep" /></div>';
			products +=              '<div class="price">$'+data[i].price+'</div>';
			products +=        '</div>';
			products +=      '</div>';
			products +=   '</div>';
	    	}
		}
		$('.rw').html(products);
}

var sortByTheCategory = function (category, arrayToSort) {
	//console.log("Sort by categ: ", category, "array: ", arrayToSort);

	var sortedArray = arrayToSort.filter(function(item) {
		return item.categ == category;
	});

	//console.log("Sorted array: ", sortedArray);

	populateNewProducts(sortedArray);
}

var serverData = null;


	$.ajax({
	    method: 'GET',
	    url: 'https://minimized-bck-end-bogdandima.c9users.io/api/products/getAllProducts.php',
	    success: function(data) {
	    	//console.log("Products loaded.");
		    serverData = data;
			//console.log("data loaded:", data);
			populateNewProducts(data.details);
	    }
	});
	
	$('.tab-name').on('click', function() {
		console.log("clicked");

		if (serverData != null) {
			var category = $(this).attr('data-newtab');
			console.log('category =', category, serverData);

			sortByTheCategory(category, serverData.details);
		}
		else
		{
			alert("Products not loaded yet!");
		}
	});

$(document).ready(function(){
	//console.log("Document ready");
});

$(window).on("load", function(){
	//console.log("Window load");
});