<?php
/* @var $this SecRequireController */
/* @var $model SecRequire */

$this->breadcrumbs=array(
	'Sec Requires'=>array('index'),
	$model->requireid,
);

$this->menu=array(
	array('label'=>'List SecRequire', 'url'=>array('index')),
	array('label'=>'Create SecRequire', 'url'=>array('create')),
	array('label'=>'Update SecRequire', 'url'=>array('update', 'id'=>$model->requireid)),
	array('label'=>'Delete SecRequire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->requireid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecRequire', 'url'=>array('admin')),
);
?>

<h1>View SecRequire #<?php echo $model->requireid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'requirename',
		'requireid',
		'requirecontent',
		'requirefinish',
		'projectid',
		'securitycontent',
		'securityfinish',
		'createtime',
		'updatetime',
		'finishiedtime',
		'requirecertain',
		'securitycertian',
		'file',
	),
)); ?>
