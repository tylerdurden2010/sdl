<?php
/* @var $this SecRequireController */
/* @var $data SecRequire */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('requireid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->requireid), array('view', 'id'=>$data->requireid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirename')); ?>:</b>
	<?php echo CHtml::encode($data->requirename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirecontent')); ?>:</b>
	<?php echo CHtml::encode($data->requirecontent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirefinish')); ?>:</b>
	<?php echo CHtml::encode($data->requirefinish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('securitycontent')); ?>:</b>
	<?php echo CHtml::encode($data->securitycontent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('securityfinish')); ?>:</b>
	<?php echo CHtml::encode($data->securityfinish); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatetime')); ?>:</b>
	<?php echo CHtml::encode($data->updatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finishiedtime')); ?>:</b>
	<?php echo CHtml::encode($data->finishiedtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirecertain')); ?>:</b>
	<?php echo CHtml::encode($data->requirecertain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('securitycertian')); ?>:</b>
	<?php echo CHtml::encode($data->securitycertian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	*/ ?>

</div>