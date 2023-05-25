<?php 

class identity{

    public $name;
    private $age;
    protected $height;

    public function setName($identity){
        $this->name = $identity;
    }
    public function setAge($identity){
        $this->age = $identity;
    }
    public function setHeight($identity){
        $this->height = $identity;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getHeight(){
        return $this->height;
    }
}



$identity1 = new identity;
$identity1->setName('Ragibavi');
$identity1->setAge(16);
$identity1->setHeight(165);


echo "Name : " . $identity1->getName();
echo "<br>";
echo "Age : " . $identity1->getAge();
echo "<br>";
echo "Height : " . $identity1->getHeight();
