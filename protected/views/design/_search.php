<?php
/* @var $this DesignController */
/* @var $model SecDesign */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DesignID'); ?>
		<?php echo $form->textField($model,'DesignID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProjectID'); ?>
		<?php echo $form->textField($model,'ProjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InterFace'); ?>
		<?php echo $form->textField($model,'InterFace',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataFlow'); ?>
		<?php echo $form->textField($model,'DataFlow',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ThreatAnalysis'); ?>
		<?php echo $form->textField($model,'ThreatAnalysis',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ThirdPart'); ?>
		<?php echo $form->textField($model,'ThirdPart',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DesFinish'); ?>
		<?php echo $form->textField($model,'DesFinish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->