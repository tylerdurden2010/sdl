<?php
/* @var $this OptSecCodeController */
/* @var $model OptSecCode */

$this->breadcrumbs=array(
	'Opt Sec Codes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptSecCode', 'url'=>array('index')),
	array('label'=>'Manage OptSecCode', 'url'=>array('admin')),
);
?>

<h1>Create OptSecCode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>