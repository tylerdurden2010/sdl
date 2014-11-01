<?php
/* @var $this TableProjectController */
/* @var $model TableProject */

$this->breadcrumbs=array(
	'Table Projects'=>array('index'),
	$model->ProjectID,
);

$this->menu=array(
	array('label'=>'List TableProject', 'url'=>array('index')),
	array('label'=>'Create TableProject', 'url'=>array('create')),
	array('label'=>'Update TableProject', 'url'=>array('update', 'id'=>$model->ProjectID)),
	array('label'=>'Delete TableProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProjectID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TableProject', 'url'=>array('admin')),
);
?>

<h1>View TableProject #<?php echo $model->ProjectID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProjectName',
		'Step',
		'ProjectID',
		'UserID',
		'UpdateTime',
	),
)); ?>
