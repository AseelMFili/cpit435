<?php

require('db_connection.php');
    
    

   $fname=$_POST["firstName"]; 
   $lname=$_POST["lastName"]; 
   $email= $_POST["email"];
   $password= md5($_POST["password"]); 
   $phoneNo=$_POST["phoneNo"]; 
   $city=$_POST["city"]; 

    insert_customers($fname,$lname,$email,$password,$phoneNo,$city);
?> 