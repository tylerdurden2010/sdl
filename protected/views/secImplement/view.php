<?php
/* @var $this SecImplementController */
/* @var $model Implement */

$this->breadcrumbs=array(
	'Implements'=>array('index'),
	$model->implementid,
);

$this->menu=array(
	array('label'=>'List Implement', 'url'=>array('index')),
	array('label'=>'Create Implement', 'url'=>array('create')),
	array('label'=>'User apply','url'=>array('userview', 'id'=>$model->implementid)),
	array('label'=>'Update Implement', 'url'=>array('update', 'id'=>$model->implementid)),
	array('label'=>'Delete Implement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->implementid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Implement', 'url'=>array('admin')),
);
?>

<h1>View Implement #<?php echo $model->implementid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'implementid',
		'implementname',
		'projectid',
		'implementreport',
		// 'create_time',
		// 'update_time',
		// 'finishied_time',
		'implementfinishied',
		array
		(
			'name'=>'Survey URL',
			'type'=>'raw',
			'value'=>'<a href='.$model->surveyurl.'>Apply Form</a>'
		),
	),
)); ?>
