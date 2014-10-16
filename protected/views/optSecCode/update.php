<?php
/* @var $this OptSecCodeController */
/* @var $model OptSecCode */

$this->breadcrumbs=array(
	'Opt Sec Codes'=>array('index'),
	$model->SecCodeID=>array('view','id'=>$model->SecCodeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptSecCode', 'url'=>array('index')),
	array('label'=>'Create OptSecCode', 'url'=>array('create')),
	array('label'=>'View OptSecCode', 'url'=>array('view', 'id'=>$model->SecCodeID)),
	array('label'=>'Manage OptSecCode', 'url'=>array('admin')),
);
?>

<h1>Update OptSecCode <?php echo $model->SecCodeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>