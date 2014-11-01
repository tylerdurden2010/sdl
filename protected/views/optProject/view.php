<?php
/* @var $this OptProjectController */
/* @var $model OptProject */

$this->breadcrumbs=array(
	'Opt Projects'=>array('index'),
	$model->ProjectID,
);



$this->menu=array(
	array('label'=>'List OptProject', 'url'=>array('index'),'itemOptions'=>array('class'=>'active','role'=>'presentation'),),
	array('label'=>'Create OptProject', 'url'=>array('create'),'itemOptions'=>array('role'=>'presentation'),),
	array('label'=>'Update OptProject', 'url'=>array('update', 'id'=>$model->ProjectID),'itemOptions'=>array('role'=>'presentation'),),
	array('label'=>'Delete OptProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProjectID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptProject', 'url'=>array('admin')),
	array('label'=>'Create issue','url'=>array('issue/create','pid'=>$model->id)),

);


?>

<h1>View Project :<?php echo $model->ProjectName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProjectName',
		'Step',
		'ProjectID',
		'UserID',
	),				
)); ?>
