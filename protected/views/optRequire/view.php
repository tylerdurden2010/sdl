<?php
/* @var $this OptRequireController */
/* @var $model OptRequire */

$this->breadcrumbs=array(
	'Opt Requires'=>array('index'),
	$model->RequireID,
);

$this->menu=array(
	array('label'=>'List OptRequire', 'url'=>array('index')),
	array('label'=>'Create OptRequire', 'url'=>array('create')),
	array('label'=>'Update OptRequire', 'url'=>array('update', 'id'=>$model->RequireID)),
	array('label'=>'Delete OptRequire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RequireID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptRequire', 'url'=>array('admin')),
);
?>

<h1>View OptRequire #<?php echo $model->RequireID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'StoreDate',
		'ProjectID',
		'UserID',
		'DevelopFinish',
		'RequireID',
		'SecFinish',
	),
)); ?>
