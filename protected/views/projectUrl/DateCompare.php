<?php
/* @var $this ProjectUrlController */
/* @var $model ProjectUrl */
/* @var $form CActiveForm */
//$pathname = YiiBase::getPathOfAlias('webroot').'/protected/files/seo/'.Yii::app()->user->id.'/';
//$pathname.=$project_id.'/'.$model->url.'/';
?>
        <?php 
        $truedir = scandir($pathname);
        array_shift($truedir);
        array_shift($truedir);
//        foreach ($truedir as $key => $value) {
//            $key=$value;
//            $truedir[$key]=$value;
//            echo $key;
//            echo $value;
//        }
//        print_r($truedir);
        ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-url-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->checkBoxList($model,'url',$truedir); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->