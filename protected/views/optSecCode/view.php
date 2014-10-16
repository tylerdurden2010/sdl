<?php
/* @var $this OptSecCodeController */
/* @var $model OptSecCode */

$this->breadcrumbs=array(
	'Opt Sec Codes'=>array('index'),
	$model->SecCodeID,
);

$this->menu=array(
	array('label'=>'List OptSecCode', 'url'=>array('index')),
	array('label'=>'Create OptSecCode', 'url'=>array('create')),
	array('label'=>'Update OptSecCode', 'url'=>array('update', 'id'=>$model->SecCodeID)),
	array('label'=>'Delete OptSecCode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SecCodeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptSecCode', 'url'=>array('admin')),
);
?>

<h1>View OptSecCode #<?php echo $model->SecCodeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SecCodeID',
		'ProjectID',
		'Question',
		'UserID',
		'ScanReport',
		'DangerousFunction',
		'Tool',
		'SecFinish',
	),
)); ?>
