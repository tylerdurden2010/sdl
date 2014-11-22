<?php
/* @var $this SecImplementController */
/* @var $model Implement */

$this->breadcrumbs=array(
	'Implements'=>array('index'),
	$model->implementid=>array('view','id'=>$model->implementid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Implement', 'url'=>array('index')),
	array('label'=>'Create Implement', 'url'=>array('create')),
	array('label'=>'View Implement', 'url'=>array('view', 'id'=>$model->implementid)),
	array('label'=>'Manage Implement', 'url'=>array('admin')),
);
?>

<h1>Update Implement <?php echo $model->implementid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>