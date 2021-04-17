<?php
    $animals=[
        'quadruped'=>[
                      'dog',
                      'cat',
                      'cow'],
        'biped'    =>[
                      'duck', // pato
                      'hen',  // fowl - hen - chicken - gallina femenino del pollo
                      'oca'
                     ],
    ];

    foreach($animals as $pedType){
        foreach($pedType as $spec){
            echo $spec."<br/>";
        }
    }
    echo "<br/><br/>";
    foreach($animals as $key => $pedType)
    {
        echo $key.":<br/>";
        foreach($pedType as $index => $spec){
            echo "[".$index."]->".$spec."<br/>";
        }
    }

     class Aritmetic{
         private $prop;
         
         public function doSome(){
            echo "Hi, the prop is:".$this->prop;
        }
        public function setProp($n){
            $this->prop = $n;
        }
       
       public function getProp(){
           return $this->prop;
       }
     }

 $aritmeticObj = new Aritmetic;
 $aritmeticObj ->setProp(5);
 echo "The property value:".$aritmeticObj ->getProp();

 var_dump($aritmeticObj instanceof Pander);

 class WheeledVehicle{
    private $wheelCount;
    private bool $usesFuel;
    private bool $selfPropelled;
    private float $weight;

    public function __constructor($wheels=2,$fuel=true,$propelled=true,$weight=25)
    {
        $this->wheelCount = $wheels;
        $this->usesFuel = $fuel;
        $this->selfPropelled = $propelled;
        $this->weight = $weight;
        }
    public function __destruct(){}

    public function getWheels(){ return $this->wheelCount; }
    public function getFuel(){ return $this->usesFuel;  }
    public function getPropelled(){ return $this->selfPropelled; }
    public function getWeight(){ return $this->weight; }

    public function setWheels($w){  $this->wheelCount=$w; }
    public function setFuel($f)  {  $this->usesFuel=$f;  }
    public function setPropelled($p){  $this->selfPropelled=$p; }
    public function setWeight($w)   {  $this->weight=$w; }
     
}

$car = new WheeledVehicle();
$car->setWheels(4);
$car->setFuel(true);
$car->setPropelled(true);
$car->setWeight(2200);


echo "<br/>Car Wheels: ".$car->getWheels();
echo "<br/>---------------------------------------------------------------------------------------------
      ----------------------------------------------------------------------------------------------<br/>
       DATABASE MYSQLI OOP PHP CONNECTION <br/>
      -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";


abstract class Base
{ 
    protected $name = ''; 

    private function className()
    {
    	return get_called_class();
    }

    public function login(){ 
        return "Mi nombre es {$this->name}: desde la clase {$this->className()} y me encuentro iniciando sesion... <br>"; 
    }
}

class Admin extends Base
{ 
    public function __construct($name)
    {
    	$this->name = $name;
    }
} 

class User extends Base
{ 
    public function __construct($name)
    {
    	$this->name = $name;
    }
} 

class Guest extends Base
{ 
	protected $name = 'Invitado';
} 



$guest = new Guest(); 
echo $guest->login(); 

$user = new User('Italo Morales'); 
echo $user->login(); 

$admin = new Admin('Lynda Morales'); 
echo $admin->login();


?>