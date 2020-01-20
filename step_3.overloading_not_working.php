<?php
/**
 * declare error example
 */
class A  extends B{
  protected $name;
  public function setName($name, $name2){ // <<< error
    $this->name = $name2;
  }
  public function printName(){
    echo "A.name [".$this->name. "]\n<br>";
  }
}
class B{
  protected $name;
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
$a->printName2(); // B.name (printName2) [ddd] 
$a->callPrintName(); // A.name [ddd] 


/// 대안 1. using 'interface'
/// 대안 2. using '...params' 
function sum(... $numbers){
}
/// 대안 3. using array