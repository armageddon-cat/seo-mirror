<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */


$this->menu=array(
	array('label'=>'Список UserInfo', 'url'=>array('index')),
	array('label'=>'Создание UserInfo', 'url'=>array('create')),
	array('label'=>'Просмотр UserInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление UserInfo', 'url'=>array('admin')),
);
?>

<h1>Изменение UserInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>