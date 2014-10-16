<?php
/* @var $this DesignController */
/* @var $model SecDesign */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sec-design-form',
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
		<?php echo $form->labelEx($model,'InterFace'); ?>
		<?php echo $form->textField($model,'InterFace',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'InterFace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataFlow'); ?>
		<?php echo $form->textField($model,'DataFlow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DataFlow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ThreatAnalysis'); ?>
		<?php echo $form->textField($model,'ThreatAnalysis',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ThreatAnalysis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ThirdPart'); ?>
		<?php echo $form->textField($model,'ThirdPart',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ThirdPart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DesFinish'); ?>
		<?php echo $form->textField($model,'DesFinish'); ?>
		<?php echo $form->error($model,'DesFinish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->