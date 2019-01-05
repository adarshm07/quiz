<?php
//all the variables defined here are accessible in all the files that include this one
$db_url='localhost';
$db_user='root';
$db_password='';
$db_name='quz';
$con= new mysqli($db_url,$db_user,$db_password,$db_name)or die("Could not connect to mysql".mysqli_error($con));

?>