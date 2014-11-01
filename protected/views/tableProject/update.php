<?php
/* @var $this TableProjectController */
/* @var $model TableProject */

$this->breadcrumbs=array(
	'Table Projects'=>array('index'),
	$model->ProjectID=>array('view','id'=>$model->ProjectID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TableProject', 'url'=>array('index')),
	array('label'=>'Create TableProject', 'url'=>array('create')),
	array('label'=>'View TableProject', 'url'=>array('view', 'id'=>$model->ProjectID)),
	array('label'=>'Manage TableProject', 'url'=>array('admin')),
);
?>

<h1>Update TableProject <?php echo $model->ProjectID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>