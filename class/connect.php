<?php
       $server = 'localhost';
       $usr    = 'konrad'
       $pass   = 'ycgalardy2415'
       $db     = 'juegos'
       
       $conn = new mysqli($server,$usr,$pass,$db); // server | user | pass-code | database
         
       if ($conn ->connect_error) die ('ERROR!! Connection failed:'.$conn->connect_error()) ;
           else {
                  echo 'CONNECTED!';
                   $conn -> close(); 
          }
       
?>