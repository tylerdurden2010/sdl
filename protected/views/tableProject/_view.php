<?php
/* @var $this TableProjectController */
/* @var $data TableProject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProjectID), array('view', 'id'=>$data->ProjectID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectName')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Step')); ?>:</b>
	<?php echo CHtml::encode($data->Step); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateTime')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateTime); ?>
	<br />


</div>