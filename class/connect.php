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
              
              public function  __construct($serv="localhost",$user="konrad",$key="Hall0w33nday",$db="juegos"){
                     $this->server  = $serv ;
                     $this->usr     = $user;
                     $this->pass    = $key;
                     $this->db      = $db; 
              }


              public function  __destruct(){}

              public function doConnect(){ 
                    $this->conn = new mysqli($this->server,$this->usr,$this->pass,$this->db); // server | user | pass-code | database
                    if ($this->conn ->connect_error) die ('ERROR!! Connection failed:'.$this->conn->connect_error) ; 
                        else return $this->conn;
              }

              public function doClose(){ return $this->conn->close();}
              
              // CRUD  onto database methods
              public function dbCreate($sqlR){

              }

              public function dbRead($sqlR){
                     $this->query    = $sqlR;
                       $result = mysqli_query($this->conn,$this->query);
                       echo "<br/><br/>";   
                       var_dump($result);
                       echo "<br/>Sqli Query ok<br/>";   

                        //$this->conn -> close();    
                 
              }

              public function dbUpdate($sqlW){

              }
              public function dbDelete($sqlW){

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


       $t = new Connect();
       //$t -> doConnect();
       echo $t->getDbuser();
       echo "<br/>".$t->getDbname();
       if($t-> doConnect())echo "<br/>Connected successfully!";
        
        
        $t->dbRead("SELECT id_juego,
        nombre,
        anio,
        empresa
    FROM t_juegos");

if($t->doClose())echo "<br/>Connection closed successfully";

?>