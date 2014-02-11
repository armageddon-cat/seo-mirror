<?php
/* @var $this ProjectUrlController */
/* @var $model ProjectUrl */


$this->menu=array(
	array('label'=>'Список ProjectUrl', 'url'=>array('index')),
	array('label'=>'Успраление ProjectUrl', 'url'=>array('admin')),
);
?>

<h1>Создать ProjectUrl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>