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
}
$apple = new Fruit();
$banana = new Fruit();

$apple->setName('Apple');
$apple->setColor('Red');

echo $apple->getName() . '<br>';
echo $apple->getColor() . '<br>';



?>

</body>

</html>