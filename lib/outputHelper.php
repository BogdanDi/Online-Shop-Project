<?php
function returnHeader(){
    header('Content-Type: application/json');
}
function throwJSONError($errorCode, $errorMessage){
    $result = array(
        "successful" => false, 
        "errorCode" => $errorCode,
        "errorMessage" => $errorMessage
    );
    $encodedJSON = json_encode($result);
    echo $encodedJSON;
    exit();
}
function echoJSONOutput($out = array()){
    $newOut = array("successful" => true);
    if(is_array($out) AND count($out) > 0){
        $newOut['details'] = $out;
    }
    echo json_encode($newOut);
    exit();
}