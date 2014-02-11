<?php
/* @var $this UrlCheckPositiveController */
/* @var $model UrlCheckPositive */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'url-check-positive-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_url_id'); ?>
		<?php echo $form->textField($model,'project_url_id'); ?>
		<?php echo $form->error($model,'project_url_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_time'); ?>
		<?php echo $form->textField($model,'check_time'); ?>
		<?php echo $form->error($model,'check_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->