<?php

require('db_conn.php');


   $email= $_POST["email"];
   $password= md5($_POST["password"]); 

if(check_customers($email,$password)){
    header("Location:https://cpit-435-aseelmfili.c9users.io/viewHall.php");
}else{
    header("Location:https://cpit-435-aseelmfili.c9users.io/login.php?error=Login Error Please check your email and password!");
}
?>