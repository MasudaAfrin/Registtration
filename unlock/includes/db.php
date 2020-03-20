<?php 
   $db = mysqli_connect("localhost","root","","unlock");
   if(!$db){
        die("database connection failed".mysqli_error($db));
   }
   /* 
   else{
       echo "connection established";
   }
   */  
?>