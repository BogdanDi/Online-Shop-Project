<?php
require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();
if(empty($_GET['productId'])) {
    return throwJSONError(_ERROR_CATEGORY_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_NOT_SPECIFIED_MSG);
} 
if($data = returnProduct($_GET['productId'])) {
    if($data !== false) echoJSONOutput($data);
    else throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}