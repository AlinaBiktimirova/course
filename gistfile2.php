<?php
// $model->getParent()
// Данная задача на работу со структурой данных, данная задача не о наследовании.
// Нельзя менять сигнатуру функции. 
// Нельзя менять сигнатуру класса модели, в данной задаче применяется только метод getParent класса Model.
// Написание своих функций для использование в этой функции разрешается.
// Reflection НЕ применять


class Parentsclass4 {
    static public function getParent() {var_dump(get_called_class());}
}
class Parentsclass6 extends Parentsclass4 {static public function getParent(){var_dump(get_called_class()); return Parentsclass4::getParent();}}
class Parentsclass5 extends Parentsclass4 {static public function getParent(){var_dump(get_called_class()); return Parentsclass4::getParent();}}
class Parentsclass7 extends Parentsclass6 {static public function getParent(){var_dump(get_called_class()); return Parentsclass6::getParent();}}  
class Parentsclass8 extends Parentsclass6 {static public function getParent(){var_dump(get_called_class()); return Parentsclass6::getParent();}}

class Model extends Parentsclass8{
	
	static function getParent(){
		var_dump(get_called_class());
		return Parentsclass8::getParent();
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
Model::getParent();
