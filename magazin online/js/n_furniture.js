var beds = [{
	img: "../images/continut/bed1.jpg",
	name: "Bed1",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed2.jpg",
	name: "Bed2",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed3.jpg",
	name: "Bed3",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed4.jpg",
	name: "Bed4",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed5.jpg",
	name: "Bed5",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed6.jpg",
	name: "Bed6",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed7.jpg",
	name: "Bed7",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/bed8.jpg",
	name: "Bed8",
	star: 4,
	price: "$250.00"
}];
var chairs = [{
	img: "../images/continut/chair1.jpg",
	name: "Chair1",
	star: 4,
	price: "$150.00"
}, {
	img: "../images/continut/chair2.jpg",
	name: "Chair2",
	star: 4,
	price: "$350.00"
}, {
	img: "../images/continut/chair3.jpg",
	name: "Chair3",
	star: 4,
	price: "$300.00"
}, {
	img: "../images/continut/chair4.jpg",
	name: "Chair4",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/chair5.jpg",
	name: "Chair5",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/chair6.jpg",
	name: "Chair6",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/chair7.jpg",
	name: "Chair7",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/chair8.jpg",
	name: "Chair8",
	star: 4,
	price: "$150.00"
}];
var sofas = [{
	img: "../images/continut/sofa1.jpg",
	name: "Sofa1",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa2.jpg",
	name: "Sofa2",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa3.jpg",
	name: "Sofa3",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa4.jpg",
	name: "Sofa4",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa5.jpg",
	name: "Sofa5",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa6.jpg",
	name: "Sofa6",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa7.jpg",
	name: "Sofa7",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/sofa8.jpg",
	name: "Sofa8",
	star: 4,
	price: "$250.00"
}];
var tables = [{
	img: "../images/continut/table1.jpg",
	name: "Table1",
	star: 4,
	price: "$150.00"
}, {
	img: "../images/continut/table2.jpg",
	name: "Table2",
	star: 4,
	price: "$350.00"
}, {
	img: "../images/continut/table3.jpg",
	name: "Table3",
	star: 4,
	price: "$300.00"
}, {
	img: "../images/continut/table4.jpg",
	name: "Table4",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/table5.jpg",
	name: "Table5",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/table6.jpg",
	name: "Table6",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/table7.jpg",
	name: "Table7",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/table8.jpg",
	name: "Table8",
	star: 4,
	price: "$150.00"
}];
var dinings = [{
	img: "../images/continut/dining1.jpg",
	name: "Dining1",
	star: 4,
	price: "$150.00"
}, {
	img: "../images/continut/dining2.jpg",
	name: "Dining2",
	star: 4,
	price: "$350.00"
}, {
	img: "../images/continut/dining3.jpg",
	name: "Dining3",
	star: 4,
	price: "$300.00"
}, {
	img: "../images/continut/dining4.jpg",
	name: "Dining4",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/dining5.jpg",
	name: "Dining5",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/dining6.jpg",
	name: "Dining6",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/dining7.jpg",
	name: "Dining7",
	star: 4,
	price: "$250.00"
}, {
	img: "../images/continut/dining8.jpg",
	name: "Dining8",
	star: 4,
	price: "$150.00"
}];
var products = {beds: beds, chairs: chairs, sofas: sofas, tables: tables, dinings: dinings};

var populateProducts = function(productsArray, target) {
	var myProductImg = '';
	var myProductName = '';
	var myProductStar = '';
	var myProductPrice = '';

	var elementeleDinPagina = $('.shop_cart');
	var image = $(".sus");
	var title = $("")

	for( var j = 0; j< elementeleDinPagina.length; j++) {
		$(elementeleDinPagina[0]).find('img').attr('src', productsArray[j].img);
		$(elementeleDinPagina[0]).find('.title').html(productsArray[j].img);
		$(elementeleDinPagina[0]).find('.price').html(productsArray[j].img);
	}

	/*for (var i = 0; i < productsArray.length; i++) {
		myProductImg += productsArray[i].img;
		myProductName += productsArray[i].name;
		myProductPrice += productsArray[i].price;
	}
	$(target).attr("style", 'background-image: url("' + myProductImg + '")');
	$(target).html(myProductName);
	$(target).html(myProductPrice);*/
};



var switchTab = function(e) {
	alert("ceva");
	var tabType = $(e.target).attr('data-tab');

	populateProducts(products[tabType + 's'], '.product.' + tabType);

	$('.product').hide();
	$('#' + tabType).show();
};
$(".tab-name").on("click", switchTab);