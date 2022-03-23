<html>
<body>

<?php 
class Fruit{
    public $name;
    private $color;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setColor($color){
        $this->color = $color;
    }
    function getColor(){
        return $this->color;
    }
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
    protected  function intro(){
        echo "The fruit is: {$this->name} and the color is {$this->color}.<br>";
    }
}
class Blueberry extends Fruit{
    public function myMessage(){
        echo "I am a Blueberry<br>";
        $this->intro();
    }
}
class Goodbye{
    const LEAVING_MESSAGE = "Thank you<br>";
    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }
}
$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");

echo $apple->getName() . '<br>';
echo $apple->getColor() . '<br>';


$blueberry = new Blueberry("Blueberry", "Blue");
$blueberry->myMessage();
echo '<br>';

//var_dump($apple instanceof Fruit);

$goodbye = new Goodbye();
$goodbye->byebye();

//----------------------------------------------------------------------------------------------------------------------------


//ABSTRACT METHOD CAR 
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract protected function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    protected function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
    public function message(){
        return $this->intro();
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->message();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();
?>

</body>

</html>