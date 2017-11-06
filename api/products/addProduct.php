<?php

    $con = mysqli_connect("127.0.0.1", "bogdandima", "");
    if(!$con){
        echo "Not connected to server";
    }
    if(!mysqli_select_db($con, 'bck_min')){
        echo "No db Selected";
    }
    $productName = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $cetegId = $_POST['category'];
    
    $sql = "insert INTO products(productName,description,price,image,cetegId)VALUES('$productName','$description','$price','$image','$cetegId')";
    if(!mysqli_query($con, $sql)){
        echo "Not Inserted";
    } else {
        echo "Inserted";
    }
    
    header("refresh:2; url=/../magazin online/index.php");
    
    
    
    
    