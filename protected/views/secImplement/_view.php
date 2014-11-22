<?php
/* @var $this SecImplementController */
/* @var $data Implement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('implementid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->implementid), array('view', 'id'=>$data->implementid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('implementname')); ?>:</b>
	<?php echo CHtml::encode($data->implementname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('implementreport')); ?>:</b>
	<?php echo CHtml::encode($data->implementreport); ?>
	<br />

<!-- 	<b><?php //echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php// echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php //echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('finishied_time')); ?>:</b>
	<?php// echo CHtml::encode($data->finishied_time); ?>
	<br /> -->


	<b><?php echo CHtml::encode($data->getAttributeLabel('implementfinishied')); ?>:</b>
	<?php echo CHtml::encode($data->implementfinishied); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surveyurl')); ?>:</b>
	<?php echo '<a href='.$data->surveyurl.'>Survey form</a>'; ?>
	<br />


</div>