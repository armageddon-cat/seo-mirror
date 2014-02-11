<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */


$this->menu=array(
	array('label'=>'Список UrlCheckPositive', 'url'=>array('index')),
	array('label'=>'Создание UrlCheckPositive', 'url'=>array('create')),
	array('label'=>'Просмотр UrlCheckPositive', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление UrlCheckPositive', 'url'=>array('admin')),
);
?>

<h1>Изменение UrlCheckPositive <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>