<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Список User', 'url'=>array('index')),
	array('label'=>'Создание User', 'url'=>array('create')),
	array('label'=>'Просмотр User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление User', 'url'=>array('admin')),
);
?>

<h1>Изменение User <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>