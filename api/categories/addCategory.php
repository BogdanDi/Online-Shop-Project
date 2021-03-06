<?php
require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/categoriesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();
if(empty($_POST['categName']) OR empty($_POST['active'])) {
    return throwJSONError(_ERROR_CATEGORY_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_NOT_SPECIFIED_MSG);
} 
if(addCategory($_POST['categName'], $_POST['active']) === true) {
    echoJSONOutput();
} else {
    throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}
