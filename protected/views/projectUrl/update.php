<?php
/* @var $this ProjectUrlController */
/* @var $model ProjectUrl */


$this->menu=array(
	array('label'=>'Список ProjectUrl', 'url'=>array('index')),
	array('label'=>'Создание ProjectUrl', 'url'=>array('create')),
	array('label'=>'Просмотр ProjectUrl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление ProjectUrl', 'url'=>array('admin')),
);
?>

<h1>Изменение ProjectUrl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>