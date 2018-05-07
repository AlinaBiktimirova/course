<?php
// $model->getParent()
function getAllParents(Model $model)
{
    $parents = [];
    
    // напишите код получения всех прямых родителей объекта $model
    // у объекта есть метод getParent(), он возвращает непосредственного родителя или null
    // у каждого объекта может быть только один родитель
    //   [4]
    //    |\
    //    | \
    //    |  \
    //   [6]  [5]
    //    |\    
    //    |  \   
    //   [7]  [8]
         
    return $parents;
}
class Parentsclass4 {
 public function ParentsObject(){return "parents method class";}
 public function getParent() {var_dump(class_parents(new Parentsclass8)); }
}
$model= new Parentsclass4();
$model= new Parentsclass8();
echo $model->getParent();
class Parentsclass6 extends Parentsclass4 {}
class Parentsclass5 extends Parentsclass4 {}
class Parentsclass7 extends Parentsclass6 {}  
class Parentsclass8 extends Parentsclass6 {}
//$model= new Parentsclass8();
// echo $model-> ParentsObject().'<br>';;    
//var_dump(class_parents(new Parentsclass8));




/*
class Parentsclass4 {
  public function ParentsObject(); 
}
class Parentsclass6 extends Parentsclass4 {
    public function ParentsObject(){  
		return "parents method class";
	}      
	public function createObject1() { //getParent()
		return this->ParentsObject();
	}
}    
$Parents4= new Parentsclass4();                              
$Parents6= new Parentsclass6(); 
echo $Parents6-> createObject1();
echo '<br>';
class Parentsclass5 extends Parentsclass4 {
	public function ParentsObject(){      
		return "parents method class";
	}    
	public static function createObject2() {  //getParent()
		return this->ParentsObject();
	}
}
$Parents4= new Parentsclass4();                              
$Parents5= new Parentsclass5(); 
echo $Parents5-> createObject2();
echo '<br>';

class Parentsclass7 extends Parentsclass6 {
    public function ParentsObject(){  
		return "parents method class"; //метод class 4
	}   
	public function createObject1() { //метод класса 6 
		return this->ParentsObject();
	}
	public function createObject3() { //getParent()
		return this->createObject1(); ///возвращает метод класса 6
	}
}    
$Parents4= new Parentsclass4();                              
$Parents7= new Parentsclass7(); 
echo $Parents7-> createObject3();
echo '<br>';

class Parentsclass8 extends Parentsclass6 {
    public function ParentsObject(){  
		return "parents method class"; //метод class 4
	}   
	public function createObject1() { //метод класса 6 
		return this->ParentsObject();
	}
	public function createObject4() { //getParent()
		return this->createObject1(); ///возвращает метод класса 6
	}
}    
$Parents4= new Parentsclass4();                              
$Parents8= new Parentsclass8(); 
echo $Parents8-> createObject4();
echo '<br>';*/
