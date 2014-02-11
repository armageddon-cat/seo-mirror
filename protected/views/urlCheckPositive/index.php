<?php
/* @var $this UrlCheckPositiveController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать UrlCheckPositive', 'url'=>array('create')),
	array('label'=>'Управление UrlCheckPositive', 'url'=>array('admin')),
);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
