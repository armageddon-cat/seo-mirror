<?php
/* @var $this ProjectUrlController */
/* @var $model ProjectUrl */


$this->menu=array(
	array('label'=>'Список ProjectUrl', 'url'=>array('index')),
	array('label'=>'Создание ProjectUrl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#project-url-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Просмотр Project Urls</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'project-url-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'project_id',
		'created',
		'url',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
