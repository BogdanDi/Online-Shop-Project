<?php
require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/categoriesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();
if(empty($_POST['categID'])) {
    return throwJSONError(_ERROR_CATEGORY_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_NOT_SPECIFIED_MSG);
} 
if($data = updateCateg($_POST['categID'])) {
    if($data !== false) echoJSONOutput($data);
    else throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}