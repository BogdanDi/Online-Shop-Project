<?php
require_once(__DIR__.'/../config/general.php');

function addCategory($categoryName, $active){
    global $db;
    $stmt = mysqli_stmt_init($db);
    $query = "INSERT into `categories` (categName, active) VALUES (?, ?)";
    mysqli_stmt_prepare($stmt, $query);
     /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "si", strtolower($categoryName), $active);
    /* execute query */
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }else return false;
}

function getAllCategories(){
    global $db;
    $data = array();
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM categories WHERE active=1");
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    /* bind result variables */
    $stmt->bind_result($id, $name, $active);

    /* fetch values */
    while ($stmt->fetch()) {
        $tmp = array();
        $tmp["id"] = $id;
        $tmp["name"] = $name;
        $tmp["active"] = $active;
        array_push($data, $tmp);
    }
    
    if (empty($data)) return false;
    else return $data;
}

function returnCategory($categID) {
    global $db;
    $data = array();
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM categories WHERE categID=? limit 0,1");
    
    mysqli_stmt_bind_param($stmt, "i", $categID);
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    /* bind result variables */
    $stmt->bind_result($id, $name, $active);

    /* fetch values */
    while ($stmt->fetch()) {
        $tmp = array();
        $tmp["id"] = $id;
        $tmp["name"] = $name;
        $tmp["active"] = $active;
        array_push($data, $tmp);
    }
    
    if (empty($data)) return false;
    else return $data;
}
function updateCateg($categID, $categName, $active) {
	global $db;
    $stmt = mysqli_stmt_init($db);
    $updateCateg = "UPDATE categories SET categID = ?, categName = ?, active = ? WHERE categID=?";
    mysqli_stmt_prepare($stmt, $updateCateg);
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "si", $categID, $categName, $active);
    /* execute query */
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }else return false;
}




