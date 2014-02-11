<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */


$this->menu=array(
	array('label'=>'Список UrlCheckPositive', 'url'=>array('index')),
	array('label'=>'Создание UrlCheckPositive', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#url-check-positive-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Просмотр Url Check Positives</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'url-check-positive-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'project_url_id',
		'check_time',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
