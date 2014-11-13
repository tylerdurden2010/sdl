<?php
/* @var $this SecRequireController */
/* @var $model SecRequire */

$this->breadcrumbs=array(
	'Sec Requires'=>array('index'),
	$model->requireid=>array('view','id'=>$model->requireid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecRequire', 'url'=>array('index')),
	array('label'=>'Create SecRequire', 'url'=>array('create')),
	array('label'=>'View SecRequire', 'url'=>array('view', 'id'=>$model->requireid)),
	array('label'=>'Manage SecRequire', 'url'=>array('admin')),
);
?>

<h1>Update SecRequire <?php echo $model->requireid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>