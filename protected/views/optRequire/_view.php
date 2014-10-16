<?php
/* @var $this OptRequireController */
/* @var $data OptRequire */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RequireID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RequireID), array('view', 'id'=>$data->RequireID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StoreDate')); ?>:</b>
	<?php echo CHtml::encode($data->StoreDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectID')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DevelopFinish')); ?>:</b>
	<?php echo CHtml::encode($data->DevelopFinish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SecFinish')); ?>:</b>
	<?php echo CHtml::encode($data->SecFinish); ?>
	<br />


</div>