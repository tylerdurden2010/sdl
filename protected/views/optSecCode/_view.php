<?php
/* @var $this OptSecCodeController */
/* @var $data OptSecCode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SecCodeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SecCodeID), array('view', 'id'=>$data->SecCodeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectID')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Question')); ?>:</b>
	<?php echo CHtml::encode($data->Question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ScanReport')); ?>:</b>
	<?php echo CHtml::encode($data->ScanReport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DangerousFunction')); ?>:</b>
	<?php echo CHtml::encode($data->DangerousFunction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tool')); ?>:</b>
	<?php echo CHtml::encode($data->Tool); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SecFinish')); ?>:</b>
	<?php echo CHtml::encode($data->SecFinish); ?>
	<br />

	*/ ?>

</div>