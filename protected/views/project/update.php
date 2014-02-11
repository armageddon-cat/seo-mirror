<?php
/* @var $this ProjectController */
/* @var $model Project */


$this->menu=array(
	array('label'=>'Список Project', 'url'=>array('index')),
	array('label'=>'Создание Project', 'url'=>array('create')),
	array('label'=>'Просмотр Project', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Project', 'url'=>array('admin')),
);
?>

<h1>Изменение Project <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>