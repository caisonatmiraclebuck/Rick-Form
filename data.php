<?php

error_reporting(0);

define (DB_USER, "root");
define (DB_PASSWORD, "");
define (DB_DATABASE, "");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


extract($_POST);

$sql = "INSERT into contact (name,email,mobile,message,date) VALUES('" . $name . "','" . $email . "','". $mobile . "','" . $message . "','" . date ("Y-m-d H:i:s"). "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";

?>