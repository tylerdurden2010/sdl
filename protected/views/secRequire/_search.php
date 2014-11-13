<?php
/* @var $this SecRequireController */
/* @var $model SecRequire */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'requirename'); ?>
		<?php echo $form->textField($model,'requirename',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requireid'); ?>
		<?php echo $form->textField($model,'requireid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requirecontent'); ?>
		<?php echo $form->textArea($model,'requirecontent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requirefinish'); ?>
		<?php echo $form->textField($model,'requirefinish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'securitycontent'); ?>
		<?php echo $form->textArea($model,'securitycontent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'securityfinish'); ?>
		<?php echo $form->textField($model,'securityfinish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finishiedtime'); ?>
		<?php echo $form->textField($model,'finishiedtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requirecertain'); ?>
		<?php echo $form->textField($model,'requirecertain'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'securitycertian'); ?>
		<?php echo $form->textField($model,'securitycertian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->