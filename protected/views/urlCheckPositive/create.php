<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */


$this->menu=array(
	array('label'=>'Список UrlCheckPositive', 'url'=>array('index')),
	array('label'=>'Успраление UrlCheckPositive', 'url'=>array('admin')),
);
?>

<h1>Создать UrlCheckPositive</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>