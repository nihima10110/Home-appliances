<?php
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   $con = mysqli_connect('localhost' , 'root' ,'','lab' );
   if($conn->connect_error)
   {
    die('Connection Failed: ' .$cpnn->connect_error);
   }
   else
   {
    $stmt=$conn->prepare("insert into registration(fname,email,password)
                        values(?,?,?)");
     $stmt->bind_param("sss",$fname,$email,$password);
     echo "Your registration has been completed"  ;
     $stmt->close(); 
     $conn->close();            
   }
   ?>

