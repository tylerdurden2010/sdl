<?php
/* @var $this SecTestController */
/* @var $model SecTest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sec-test-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'testname'); ?>
		<?php echo $form->textField($model,'testname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'testname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->RadioButtonList($model,'projectid',$model->getAllProjects(),array('uncheckValue'=>NULL)); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

<!-- 	<div class="row">
		<?php //echo $form->labelEx($model,'create_time'); ?>
		<?php //echo $form->textField($model,'create_time'); ?>
		<?php //echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'update_time'); ?>
		<?php //echo $form->textField($model,'update_time'); ?>
		<?php //echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php //	echo $form->labelEx($model,'finishied_time'); ?>
		<?php //	echo $form->textField($model,'finishied_time'); ?>
		<?php //	echo $form->error($model,'finishied_time'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'Test Report'); ?>
		<?php echo $form->textField($model,'testreport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'testreport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Security Tools'); ?>
		<?php echo $form->textField($model,'securitytoolsurl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'securitytoolsurl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bug amounts'); ?>
		<?php echo $form->textField($model,'bugamount'); ?>
		<?php echo $form->error($model,'bugamount'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->