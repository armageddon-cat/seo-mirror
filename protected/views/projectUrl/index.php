<?php
/* @var $this ProjectUrlController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать ProjectUrl', 'url'=>array('create')),
	array('label'=>'Управление ProjectUrl', 'url'=>array('admin')),
);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
