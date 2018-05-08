<?php
// $model->getParent()
// Данная задача на работу со структурой данных, данная задача не о наследовании.
// Нельзя менять сигнатуру функции. 
// Нельзя менять сигнатуру класса модели, в данной задаче применяется только метод getParent класса Model.
// Написание своих функций для использование в этой функции разрешается.
// Reflection НЕ применять


class Parentsclass4 {
  public function getParent() {var_dump(get_parent_class($this));}
}
class Parentsclass6 extends Parentsclass4 {public function getParent(){var_dump(get_parent_class($this)); }}
class Parentsclass5 extends Parentsclass4 {public function getParent(){var_dump(get_parent_class($this)); }}
class Parentsclass7 extends Parentsclass6 {public function getParent(){var_dump(get_parent_class($this)); }}  
class Parentsclass8 extends Parentsclass6 {public function getParent(){var_dump(get_parent_class($this)); }}

class Model extends Parentsclass8{
	
	function getParent(){
		var_dump(get_parent_class($this));
	
	}
	
    function getAllParents(Model $model)
    {
      $parents = ['Model', 'Parentsclass8', 'Parentsclass7', 'Parentsclass6', 'Parentsclass5', 'Parentsclass4'];
    
      // напишите код получения всех прямых родителей объекта $model.
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

}
$model=new Model();
$model->getParent();
echo '<hr>';
$obj = new ReflectionClass('Model');
print_r($obj->getParentClass());
