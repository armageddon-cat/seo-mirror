<?php
/* @var $this ProjectUrlController */
/* @var $model ProjectUrl */


$this->menu=array(
	array('label'=>'Список ProjectUrl', 'url'=>array('index')),
	array('label'=>'Создать ProjectUrl', 'url'=>array('create')),
	array('label'=>'Изменить ProjectUrl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить ProjectUrl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ProjectUrl', 'url'=>array('admin')),
);
?>

<h1>Просмотр ProjectUrl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'project_id',
		'created',
		'url',
	),
)); ?>
