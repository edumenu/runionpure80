<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "test";

foreach($db as $key => $value){

    //defining the keys as a constant
    //chaning the key to upper case
    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
//    echo "Connection successful!";
}

?>