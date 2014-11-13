<?php
/* @var $this SecDesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	$model->designid,
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Create SecDesign', 'url'=>array('create')),
	array('label'=>'Update SecDesign', 'url'=>array('update', 'id'=>$model->designid)),
	array('label'=>'Delete SecDesign', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->designid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>View SecDesign #<?php echo $model->designid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'designid',
		'designname',
		'threatmodel',
		'attacktree',
		'createtime',
		'updatetime',
		'finishiedtime',
		'projectid',
		'designfinishied',
	),
)); ?>
