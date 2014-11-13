<?php
/* @var $this SecDesignController */
/* @var $data SecDesign */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('designid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->designid), array('view', 'id'=>$data->designid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designname')); ?>:</b>
	<?php echo CHtml::encode($data->designname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('threatmodel')); ?>:</b>
	<?php echo '<img src='."{$data->threatmodel}".' width=500px height=500px>'; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attacktree')); ?>:</b>
	<?php echo '<img src='."{$data->attacktree}".' width=500px height=500px>'; ?>
	<br />



	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designfinishied')); ?>:</b>
	<?php echo CHtml::encode($data->designfinishied); ?>
	<br />

	*/ ?>

</div>