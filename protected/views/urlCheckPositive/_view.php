<?php
/* @var $this UrlCheckPositiveController */
/* @var $data UrlCheckPositive */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_url_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_url_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_time')); ?>:</b>
	<?php echo CHtml::encode($data->check_time); ?>
	<br />


</div>