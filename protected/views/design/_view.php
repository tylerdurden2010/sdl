<?php
/* @var $this DesignController */
/* @var $data SecDesign */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DesignID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DesignID), array('view', 'id'=>$data->DesignID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectID')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InterFace')); ?>:</b>
	<?php echo CHtml::encode($data->InterFace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataFlow')); ?>:</b>
	<?php echo CHtml::encode($data->DataFlow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ThreatAnalysis')); ?>:</b>
	<?php echo CHtml::encode($data->ThreatAnalysis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ThirdPart')); ?>:</b>
	<?php echo CHtml::encode($data->ThirdPart); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DesFinish')); ?>:</b>
	<?php echo CHtml::encode($data->DesFinish); ?>
	<br />

	*/ ?>

</div>