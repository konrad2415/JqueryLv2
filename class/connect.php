<?php
       $server = 'localhost';
       $usr    = 'konrad';
       $pass   = 'Hall0w33nday';
       $db     = 'juegos';
       
       $conn = new mysqli($server,$usr,$pass,$db); // server | user | pass-code | database
       
       class Connect{
              private  $server; 
              private  $usr;    
              private  $pass;   
              private  $db;     
              private  $conn;  
              private  $query;     
              
              public function  __construct($serv="localhost",$user="konra",$key="Hall0w33nday",$db="juegos"){
                     $this->server  = $serv ;
                     $this->usr     = $user;
                     $this->pass    = $key;
                     $this->db      = $db; 
              }


              public function  __destruct(){}

              public function doConnect(){ 
                    $this->conn = new mysqli($server,$usr,$pass,$db); // server | user | pass-code | database
                    if ($this->conn ->connect_error) die ('ERROR!! Connection failed:'.$this->conn->connect_error()) ; 
                    else return $this->conn;
              }




              // Set internal methods
              public function setServer($srv){
                     $this->server  = $srv ;
              }
              
              public function setDbuser($usr){
                     $this->usr     = $usr ;
              }
              
              public function setDbpass($key){
                     $this->pass    = $key;
              }
              
              public function setDbname($db){
                     $this->db      = $db;
              }
                    
              
              // Get internal values
              public function getServer(){
                     return $this->server;  
              }
              
              public function getDbuser(){
                     return $this->usr;     
              }
              
              public function getDbname(){
                     return $this->db;      
              }
       }


       $t = new CNT;
       //$t -> doConnect();
       echo $t->getDbuser();
       echo "<br/>".$t->getDbname();


       /*
       
        if ($conn ->connect_error) die ('ERROR!! Connection failed:'.$conn->connect_error()) ;
           else {
            $query = "SELECT id_juego,
                        nombre,
                        anio,
                        empresa
                    FROM t_juegos";

           $result = mysqli_query($conn,$query);
                   //echo 'CONNECTED!';
                   $conn -> close(); 
          }
       
       
       */

?>