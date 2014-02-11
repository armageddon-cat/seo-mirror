<?php
/* @var $this UserInfoController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Создать UserInfo', 'url'=>array('create')),
	array('label'=>'Управление UserInfo', 'url'=>array('admin')),
);
?>

<h1></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
