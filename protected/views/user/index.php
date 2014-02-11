<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать User', 'url'=>array('create')),
	array('label'=>'Управление User', 'url'=>array('admin')),
);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
