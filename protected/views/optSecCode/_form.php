<?php
/* @var $this OptSecCodeController */
/* @var $model OptSecCode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opt-sec-code-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProjectID'); ?>
		<?php echo $form->textField($model,'ProjectID'); ?>
		<?php echo $form->error($model,'ProjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Question'); ?>
		<?php echo $form->textField($model,'Question',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ScanReport'); ?>
		<?php echo $form->textField($model,'ScanReport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ScanReport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DangerousFunction'); ?>
		<?php echo $form->textField($model,'DangerousFunction',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DangerousFunction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tool'); ?>
		<?php echo $form->textField($model,'Tool',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Tool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SecFinish'); ?>
		<?php echo $form->textField($model,'SecFinish'); ?>
		<?php echo $form->error($model,'SecFinish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->