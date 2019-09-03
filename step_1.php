<?php
/**
 * private member variable with extends
 */
class A  extends B{
  private $name;
  public function setName($name){
    $this->name = $name;
  }
  public function printName(){
    echo "A.name [".$this->name. "]\n<br>";
  }
}
class B{
  private $name;
  public function setName($name){
    $this->name = $name;
  }
  public function printName(){
    echo "B.name [".$this->name. "]\n<br>";
  }
  public function printName2(){
    echo "B.name (printName2) [".$this->name. "]\n<br>";
  }
  public function callPrintName(){
    $this->printName();
  }
}
$a = new A;
$a->setName('ddd');
$a->printName(); // A.name [ddd] 
$a->printName2(); // B.name (printName2) [] 
$a->callPrintName(); // A.name [ddd] 
