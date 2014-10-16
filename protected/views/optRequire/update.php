<?php
/* @var $this OptRequireController */
/* @var $model OptRequire */

$this->breadcrumbs=array(
	'Opt Requires'=>array('index'),
	$model->RequireID=>array('view','id'=>$model->RequireID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptRequire', 'url'=>array('index')),
	array('label'=>'Create OptRequire', 'url'=>array('create')),
	array('label'=>'View OptRequire', 'url'=>array('view', 'id'=>$model->RequireID)),
	array('label'=>'Manage OptRequire', 'url'=>array('admin')),
);
?>

<h1>Update OptRequire <?php echo $model->RequireID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>