<?php
/* @var $this OptProjectController */
/* @var $model OptProject */

$this->breadcrumbs=array(
	'Opt Projects'=>array('index'),
	$model->ProjectID=>array('view','id'=>$model->ProjectID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptProject', 'url'=>array('index')),
	array('label'=>'Create OptProject', 'url'=>array('create')),
	array('label'=>'View OptProject', 'url'=>array('view', 'id'=>$model->ProjectID)),
	array('label'=>'Manage OptProject', 'url'=>array('admin')),
);
?>

<h1>Update OptProject <?php echo $model->ProjectID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>