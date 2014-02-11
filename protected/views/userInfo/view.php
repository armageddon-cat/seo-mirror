<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */


$this->menu=array(
	array('label'=>'Список UserInfo', 'url'=>array('index')),
	array('label'=>'Создать UserInfo', 'url'=>array('create')),
	array('label'=>'Изменить UserInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить UserInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление UserInfo', 'url'=>array('admin')),
);
?>

<h1>Просмотр UserInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'name',
		'surname',
		'full_name',
		'email',
		'last_activity',
		'company',
	),
)); ?>
