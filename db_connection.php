<?php


function db_connection(){
    try{
    $servername = "localhost";
    $user = "aseelmfili";
    $dbname = "ecc_db";
    $dbpass = "";
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $dbpass);
            
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            return $conn;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}



function check_customers($email,$password){
    
    try{
        
    $conn = db_connection();
    
    $check_stmt=  $conn->prepare("SELECT * FROM customers WHERE email=? AND password=?");
      
      if ($check_stmt->execute([$email,$password]) && ($row=$check_stmt->fetch(PDO::FETCH_ASSOC))!==false) {
        header("Location:https://cpit-435-aseelmfili.c9users.io/viewHall.php");
      } 
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
}

function insert_customers($fname,$lname,$email,$password,$phoneNo,$city){
    
    try {
           $conn = db_connection();
     
            
            $stmt = $conn->prepare("INSERT INTO customers(fname,lname,email,password,phoneNo,city) VALUES (?,?,?,?,?,?)");
            
            if($stmt->execute([$fname,$lname,$email,$password,$phoneNo,$city])){
                    header("Location:https://cpit-435-aseelmfili.c9users.io/login.php");
                } 
        }
        catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }

            
}
