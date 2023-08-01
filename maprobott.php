<?php



 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="maprobot";


$link = mysqli_connect($servername,$username,$password,$dbname);
    if (!$link){
        die("Connection failed: " . mysqli_connect_error());
    }
 
    
 $direction = $_POST['btn'];

 

   $insert = mysqli_query($link ,"INSERT INTO  map_dira (direction) VALUES ('$direction') ");
 

 mysqli_close($link);
?>