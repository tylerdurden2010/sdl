<?php
/* @var $this SecTestController */
/* @var $model SecTest */

$this->breadcrumbs=array(
	'Sec Tests'=>array('index'),
	$model->testid,
);

$this->menu=array(
	array('label'=>'List SecTest', 'url'=>array('index')),
	array('label'=>'Create SecTest', 'url'=>array('create')),
	array('label'=>'Update SecTest', 'url'=>array('update', 'id'=>$model->testid)),
	array('label'=>'Delete SecTest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->testid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecTest', 'url'=>array('admin')),
);
?>

<h1>View SecTest #<?php echo $model->testid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'testid',
		'testname',
		'projectid',
		'create_time',
		'update_time',
		'finishied_time',
		'testreport',
		'securitytoolsurl',
		'bugamount',
		'bugreport',
	),
)); ?>
