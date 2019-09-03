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


//// Strict Standards: Declaration of A::setName() should be compatible with B::setName($name)
/// php 는 재정의 (overriding ) 안 되요. 이 부분이 많은 어려움을 일으킴...
/// setName ($name2) 식으로 변수명이 바뀌는 것은 괜찮습니다. 
/// setName ($name) -> setName ($name2) ==> allow...
/// 갯수가 늘어나거나, 타입이 변경된 경우. (Request $request) -> (AdvancedRequest $request) ==> error....
