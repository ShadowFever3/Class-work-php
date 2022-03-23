<html>
<body>

<?php 
abstract class Animal{
    public int $age;
    public String $gender;

    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }
    function setGender($gender){
        $this->gender = $gender;
    }
    function getGender(){
        return $this->gender;
    }
    public function __construct($age, $gender) {
        $this->age = $age;
        $this->gender = $gender;
    }
    abstract protected function isMammal(): bool; 
    abstract protected function mate(): bool;
    protected  function intro(){
        echo "The Animal is a: {$this->gender} and the Age is {$this->age}.<br>";
    }
    
}
class Duck extends Animal{
    private String $breakColor = "Yellow";
    function getBreakColor(){
        return $this->breakColor;
    }
    public function __construct($age, $gender) {
        $this->age = $age;
        $this->gender = $gender;
    }
    public function isMammal() : bool{
        return false;
    }
    public function mate() : bool{
        return true;
    }
    function quack(){
        return "Quack Quack Quack";
    }
    function Swim(){
        return "Duck is swiming";
    }
    function intro(){
        echo "The Duck is a: {$this->gender} and the Age is {$this->age}. The duck is {$this->breakColor}<br>";
    }
}
class Fish extends Animal{
    private int $sizeInFt;
    private bool $canEat;
    public function __construct($sizeInFt, $canEat, $age, $gender) {
        $this->sizeInFt = $sizeInFt;
        $this->canEat = $canEat;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function isMammal() : bool{
        return false;
    }
    public function mate() : bool{
        return false;
    }
    function Swim(){
        return "Fish is swiming";
    }
    function intro(){
        echo "The Fish is a: {$this->gender} and the Age is {$this->age}. The fish is {$this->sizeInFt} and can eat?{$this->canEat}<br>";
    }
}
class Zebra extends Animal{
    private bool $is_wild;
    public function __construct($is_wild,$age, $gender ) {
        $this->is_wild = $is_wild;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function isMammal() : bool{
        return true;
    }
    public function mate() : bool{
        return true;
    }
    function intro(){
        echo "The Zebra is a: {$this->gender} and the Age is {$this->age}. Wild? {$this->is_wild}<br>";
    }
}
echo "FOR THIS SECTION 1 = TRUE, NO ANSWER = FALSE" . '<br>';
$george = new Zebra(true, 12, "Male");
$george->intro();
$phill = new Zebra(false, 14, "Male");
$phill->intro();

$pat = new Fish(4, true, 4, "female");
$pat->intro();
$tiRouge = new Fish(6, false, 11, "Male");
$tiRouge->intro();

$bob = new Duck(23, "Male");
$bob->intro();
$franc = new Duck(13, "Male");
$franc->intro();


?>
</body>
</html>