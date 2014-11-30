<?php
/* @var $this SecTestController */
/* @var $data SecTest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('testid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->testid), array('view', 'id'=>$data->testid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testname')); ?>:</b>
	<?php echo CHtml::encode($data->testname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finishied_time')); ?>:</b>
	<?php echo CHtml::encode($data->finishied_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('testreport')); ?>:</b>
	<?php echo CHtml::encode($data->testreport); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('securitytoolsurl')); ?>:</b>
	<?php echo CHtml::encode($data->securitytoolsurl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bugamount')); ?>:</b>
	<?php echo CHtml::encode($data->bugamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bugreport')); ?>:</b>
	<?php echo CHtml::encode($data->bugreport); ?>
	<br />

	*/ ?>

</div>