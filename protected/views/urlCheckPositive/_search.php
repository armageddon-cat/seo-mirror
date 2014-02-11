<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_url_id'); ?>
		<?php echo $form->textField($model,'project_url_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_time'); ?>
		<?php echo $form->textField($model,'check_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->