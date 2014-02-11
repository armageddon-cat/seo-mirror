<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Список User', 'url'=>array('index')),
	array('label'=>'Успраление User', 'url'=>array('admin')),
);
?>

<h1>Создать User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>