<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать Project', 'url'=>array('create')),
	array('label'=>'Управление Project', 'url'=>array('admin')),
);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
