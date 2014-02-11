<?php
/* @var $this ProjectController */
/* @var $model Project */


$this->menu=array(
	array('label'=>'Список Project', 'url'=>array('index')),
	array('label'=>'Успраление Project', 'url'=>array('admin')),
);
?>

<h1>Создать Project</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>