<?php
/* @var $this SecImplementController */
/* @var $model Implement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'implement-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'implementname'); ?>
		<?php echo $form->textField($model,'implementname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'implementname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->RadioButtonList($model,'projectid',$model->getAllProjects(),array('uncheckValue'=>NULL)); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Implement Report'); ?>
		<?php echo $form->textField($model,'implementreport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'implementreport'); ?>
	</div>

<!-- 	<div class="row">
		<?php //echo $form->labelEx($model,'create_time'); ?>
		<?php //echo $form->textField($model,'create_time'); ?>
		<?php //echo $form->error($model,'create_time'); ?>
	</div>//
//
	<div class//="row">
		<?php //echo $form->labelEx($model,'update_time'); ?>
		<?php //echo $form->textField($model,'update_time'); ?>
		<?php //echo $form->error($model,'update_time'); ?>
	</div>//
//
	<div class//="row">
		<?php //echo $form->labelEx($model,'finishied_time'); ?>
		<?php //echo $form->textField($model,'finishied_time'); ?>
		<?php //echo $form->error($model,'finishied_time'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'Implement Finishied'); ?>
		<?php echo $form->textField($model,'implementfinishied'); ?>
		<?php echo $form->error($model,'implementfinishied'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surveyurl'); ?>
		<?php echo $form->textField($model,'surveyurl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'surveyurl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->