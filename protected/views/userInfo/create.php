<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */


$this->menu=array(
	array('label'=>'Список UserInfo', 'url'=>array('index')),
	array('label'=>'Успраление UserInfo', 'url'=>array('admin')),
);
?>

<h1>Создать UserInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>