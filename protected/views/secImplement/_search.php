<?php
/* @var $this SecImplementController */
/* @var $model Implement */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'implementid'); ?>
		<?php echo $form->textField($model,'implementid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'implementname'); ?>
		<?php echo $form->textField($model,'implementname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'implementreport'); ?>
		<?php echo $form->textField($model,'implementreport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finishied_time'); ?>
		<?php echo $form->textField($model,'finishied_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'implementfinishied'); ?>
		<?php echo $form->textField($model,'implementfinishied'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surveyurl'); ?>
		<?php echo $form->textField($model,'surveyurl',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->