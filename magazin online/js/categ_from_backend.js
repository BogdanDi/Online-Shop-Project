$.ajax({
    method: 'GET',
    url: 'https://minimized-bck-end-bogdandima.c9users.io/api/categories/getAllCategories.php',
    success: function(data) {
	    var categories = "";
	    console.log("Categs loaded.");
	    for(var i=0; i<data.details.length; i++){
	    	categories += "<div data-categ='"+ data.details[i].id +"' class='fbc_items_conteiner'><div class='fbc_items_left'>> "+data.details[i].name+"</div><div class='fbc_number_items'>9</div></div>";
	    }
		
	    $('.category_men').html(categories);
	    onCategsLoaded();
    }
});

