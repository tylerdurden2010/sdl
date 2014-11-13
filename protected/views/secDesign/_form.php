<?php
/* @var $this SecDesignController */
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
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'designname'); ?>
		<?php echo $form->textField($model,'designname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'designname'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'threatmodel'); ?>
        <?php echo CHtml::activeFileField($model, 'threatmodel'); ?> 
        <?php echo $form->error($model,'threatmodel'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'attacktree'); ?>
        <?php echo CHtml::activeFileField($model, 'attacktree'); ?> 
        <?php echo $form->error($model,'attacktree'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
		<?php echo $form->error($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime'); ?>
		<?php echo $form->error($model,'updatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finishiedtime'); ?>
		<?php echo $form->textField($model,'finishiedtime'); ?>
		<?php echo $form->error($model,'finishiedtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designfinishied'); ?>
		<?php echo $form->textField($model,'designfinishied'); ?>
		<?php echo $form->error($model,'designfinishied'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->