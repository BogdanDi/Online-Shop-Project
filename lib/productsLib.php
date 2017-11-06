<?php
require_once(__DIR__.'/../config/general.php');


function getAllProducts(){
    global $db;
    $data = array();
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM products WHERE active=1");
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    /* bind result variables */
    $stmt->bind_result($id, $name, $description, $price, $image, $promo, $topsel, $rating, $active, $categ);

    /* fetch values */
    while ($stmt->fetch()) {
        $tmp = array();
        $tmp["id"] = $id;
        $tmp["name"] = $name;
        $tmp["description"] = $description;
        $tmp["price"] = $price;
        $tmp["image"] = $image;
        $tmp["promo"] = $promo;
        $tmp["topsel"] = $topsel;
        $tmp["rating"] = $rating;
        $tmp["active"] = $active;
        $tmp["categ"] = $categ;
        array_push($data, $tmp);
    }
    
    if (empty($data)) return false;
    else return $data;
}

function returnProduct($productId) {
    global $db;
    $data = array();
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM products WHERE productId=? limit 0,1");
    
    mysqli_stmt_bind_param($stmt, "i", $productId);
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    /* bind result variables */
    $stmt->bind_result($id, $name, $description, $price, $image, $promo, $topsel, $rating, $active, $categ);

    /* fetch values */
    while ($stmt->fetch()) {
        $tmp = array();
        $tmp["id"] = $id;
        $tmp["name"] = $name;
        $tmp["description"] = $description;
        $tmp["price"] = $price;
        $tmp["image"] = $image;
        $tmp["promo"] = $promo;
        $tmp["topsel"] = $topsel;
        $tmp["rating"] = $rating;
        $tmp["active"] = $active;
        $tmp["categ"] = $categ;
        array_push($data, $tmp);
    }
    
    if (empty($data)) return false;
    else return $data;
}
// function addProduct($productId) {
    
// }


