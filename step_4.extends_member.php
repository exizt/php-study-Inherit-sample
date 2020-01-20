<?php
const NewLine = '<br>';

class classA {
	
	const CONSTANT_1 = 'constant (class A)';
	
	public function doMethod(){
		echo NewLine;
		echo __CLASS__;
		echo NewLine;
		var_dump($this);// 여기가 포인트이다. 상속되는 과정에서 변경됨.
		echo NewLine;
		echo self::CONSTANT_1;
		echo NewLine;
	}
	
	public function doMethod2(){
		echo NewLine;
		echo __CLASS__;
		echo NewLine;
		var_dump($this);
		echo NewLine;
		echo $this::CONSTANT_1;
		echo NewLine;
	}
}

class classB extends classA {
	
	const CONSTANT_1 = 'constant (class B)';

	public function doMethod(){
		echo NewLine;
		echo __CLASS__;
		echo NewLine;
		var_dump($this);
		echo NewLine;
		echo $this::CONSTANT_1;
		echo NewLine;
	}
	
	public function call(){
		echo 'parent A, child B';
		echo NewLine;
		echo "*** this->doMethod ******";
		echo $this->doMethod();
		echo NewLine;
		echo "*** self::doMethod ******";
		echo self::doMethod();
		echo NewLine;
		echo "*** parent::doMethod ******";
		echo parent::doMethod();
		echo NewLine;
		echo "*** this::doMethod2 ******";
		echo $this->doMethod2();
		
	}
}

$obj = new classB;
$obj->call();