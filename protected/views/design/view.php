<?php
/* @var $this DesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	$model->DesignID,
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Create SecDesign', 'url'=>array('create')),
	array('label'=>'Update SecDesign', 'url'=>array('update', 'id'=>$model->DesignID)),
	array('label'=>'Delete SecDesign', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DesignID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>View SecDesign #<?php echo $model->DesignID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DesignID',
		'ProjectID',
		'InterFace',
		'DataFlow',
		'ThreatAnalysis',
		'UserID',
		'ThirdPart',
		'DesFinish',
	),
)); ?>
