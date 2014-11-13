<?php
/* @var $this SecRequireController */
/* @var $model SecRequire */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sec-require-form',
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
		<?php echo $form->labelEx($model,'requirename'); ?>
		<?php echo $form->textField($model,'requirename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'requirename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirecontent'); ?>
		<?php //echo $form->textArea($model,'requirecontent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'requirecontent'); ?>
	</div>

	<div class="row">
        <?php //echo $form->labelEx($model,'file'); ?>
        <?php echo CHtml::activeFileField($model, 'file'); ?> 
        <?php echo $form->error($model,'file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirefinish'); ?>
		<?php echo $form->textField($model,'requirefinish'); ?>
		<?php echo $form->error($model,'requirefinish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->RadioButtonList($model,'projectid',$model->getAllProjects(),array('uncheckValue'=>NULL)); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>



	<div class="tinymce">
		<?php echo $form->labelEx($model,'securitycontent'); ?><br />
		<?php $this->widget('application.extensions.tinymce.ETinyMce',
		array(
		'model'=>$model,
		'attribute'=>'securitycontent',
		'editorTemplate'=>'full',
		'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
		)); ?>
		<?php echo $form->error($model,'securitycontent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'securityfinish'); ?>
		<?php echo $form->textField($model,'securityfinish'); ?>
		<?php echo $form->error($model,'securityfinish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirecertain'); ?>
		<?php echo $form->textField($model,'requirecertain'); ?>
		<?php echo $form->error($model,'requirecertain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'securitycertian'); ?>
		<?php echo $form->textField($model,'securitycertian'); ?>
		<?php echo $form->error($model,'securitycertian'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->