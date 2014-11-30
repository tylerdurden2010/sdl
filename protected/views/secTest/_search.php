<?php
/* @var $this SecTestController */
/* @var $model SecTest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'testid'); ?>
		<?php echo $form->textField($model,'testid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'testname'); ?>
		<?php echo $form->textField($model,'testname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
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
		<?php echo $form->label($model,'testreport'); ?>
		<?php echo $form->textField($model,'testreport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'securitytoolsurl'); ?>
		<?php echo $form->textField($model,'securitytoolsurl',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bugamount'); ?>
		<?php echo $form->textField($model,'bugamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bugreport'); ?>
		<?php echo $form->textField($model,'bugreport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->