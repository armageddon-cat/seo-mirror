<?php
/* @var $this ProjectController */
/* @var $model Project */


$this->menu=array(
	array('label'=>'Список Project', 'url'=>array('index')),
	array('label'=>'Создать Project', 'url'=>array('create')),
	array('label'=>'Изменить Project', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление Project', 'url'=>array('admin')),
);
?>

<h1>Просмотр Project #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'project_name',
		'created',
	),
)); ?>
