<?php
/* @var $this OptSecCodeController */
/* @var $model OptSecCode */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SecCodeID'); ?>
		<?php echo $form->textField($model,'SecCodeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProjectID'); ?>
		<?php echo $form->textField($model,'ProjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Question'); ?>
		<?php echo $form->textField($model,'Question',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ScanReport'); ?>
		<?php echo $form->textField($model,'ScanReport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DangerousFunction'); ?>
		<?php echo $form->textField($model,'DangerousFunction',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tool'); ?>
		<?php echo $form->textField($model,'Tool',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SecFinish'); ?>
		<?php echo $form->textField($model,'SecFinish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->