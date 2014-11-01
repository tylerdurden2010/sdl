<?php
/* @var $this TableProjectController */
/* @var $model TableProject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'table-project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProjectName'); ?>
		<?php echo $form->textField($model,'ProjectName',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'ProjectName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Step'); ?>
		<?php echo $form->textField($model,'Step',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Step'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UpdateTime'); ?>
		<?php echo $form->textField($model,'UpdateTime'); ?>
		<?php echo $form->error($model,'UpdateTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->