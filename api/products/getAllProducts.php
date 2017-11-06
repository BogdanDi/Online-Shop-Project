<?php
require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if($data = getAllProducts()) {
    if($data !== false){
        echoJSONOutput($data);
    }else throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_CREATED_CODE, _ERROR_CATEGORY_NOT_CREATED_MSG);
}