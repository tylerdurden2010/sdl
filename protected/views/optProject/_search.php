<?php
/* @var $this OptProjectController */
/* @var $model OptProject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'ProjectName'); ?>
		<?php echo $form->textField($model,'ProjectName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Step'); ?>
		<?php echo $form->textField($model,'Step',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ProjectID'); ?>
		<?php echo $form->textField($model,'ProjectID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',$htmlOptions=array('type'=>'button','class'=>'btn btn-default',)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->