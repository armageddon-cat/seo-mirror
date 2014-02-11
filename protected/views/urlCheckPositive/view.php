<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */


$this->menu=array(
	array('label'=>'Список UrlCheckPositive', 'url'=>array('index')),
	array('label'=>'Создать UrlCheckPositive', 'url'=>array('create')),
	array('label'=>'Изменить UrlCheckPositive', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить UrlCheckPositive', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление UrlCheckPositive', 'url'=>array('admin')),
);
?>

<h1>Просмотр UrlCheckPositive #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_url_id',
		'check_time',
	),
)); ?>
