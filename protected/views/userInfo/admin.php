<?php
/* @var $this UserInfoController */
/* @var $model UserInfo */


$this->menu=array(
	array('label'=>'Список UserInfo', 'url'=>array('index')),
	array('label'=>'Создание UserInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Просмотр User Infos</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'name',
		'surname',
		'full_name',
		'email',
		/*
		'last_activity',
		'company',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
