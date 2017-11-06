<?php
 define("_LIB_FOLDER", "lib"); //declare a variable to get to the lib folder later on
 define("_API_FOLDER", "api"); //declare a variable to get to the api folder later on
 //constants for errors
 define("_ERROR_USERNAME_NOT_SPECIFIED_CODE", "1000");
 define("_ERROR_USERNAME_NOT_SPECIFIED_MSG", "userName or password not specified");
 define("_ERROR_USERNAME_NOT_CORRECT_CODE", "2000");
 define("_ERROR_USERNAME_NOT_CORRECT_MSG", "userName or password is not correct");
 define("_ERROR_USER_NOT_LOGGED_IN_CODE", "3000");
 define("_ERROR_USER_NOT_LOGGED_IN_MSG", "You are not logged in. Please authenticate first in order to get access to this functionality");
 define("_ERROR_USER_MUST_LOGIN_FIRST_CODE", "4000");
 define("_ERROR_USER_MUST_LOGIN_FIRST_MSG", "You are not logged in. Please login first in order to be able to logout");
 define("_ERROR_USER_NOT_RECOGNIZED_CODE", "5000");
 define("_ERROR_USER_NOT_RECOGNIZED_MSG", "This username doesn't exist");
 define("_ERROR_DB_CONNECTION_CODE", "6000");
 define("_ERROR_DB_CONNECTION_MSG", "Can't connect to the specified Database with the specified IP");
 define("_ERROR_DETAILS_NOT_SPECIFIED_ERROR_CODE", "7000");
 define("_ERROR_DETAILS_NOT_SPECIFIED_ERROR_MSG", "All fields are required. Please add values to them.");
 define("_ERROR_USERNAME_ALREADY_EXISTS_CODE", "8000");
 define("_ERROR_USERNAME_ALREADY_EXISTS_MSG", "Username already taken. Please choose another username.");
 define("_ERROR_PASSWORDS_DO_NOT_MATCH_CODE", "9000");
 define("_ERROR_PASSWORDS_DO_NOT_MATCH_MSG", "Inserted passwords do not match. Please try again.");
 define("_ERROR_CATEGORY_NOT_SPECIFIED_CODE", "10000");
 define("_ERROR_CATEGORY_NOT_SPECIFIED_MSG", "Selected category does not exist");
 define("_ERROR_PRODUCT_NOT_SPECIFIED_MSG", "Selected product does not exist");
 define("_ERROR_PRODUCT_NOT_SPECIFIED_CODE", "1000");
 define("_ERROR_PRODUCT_NOT_CREATED_MSG", "All fields are required. Please add values to them.");
 define("_ERROR_PRODUCT_NOT_CREATED_CODE", "8000");
//db details
 define("_DB_HOST", "127.0.0.1");
 define("_DB_USER", "root");
 define("_DB_PASSWORD", "");
 define("_DB_NAME", "bck_min");
 define("_DB_PORT", "3306");