<?php
/* @var $this SecTestController */
/* @var $model SecTest */

$this->breadcrumbs=array(
	'Sec Tests'=>array('index'),
	$model->testid=>array('view','id'=>$model->testid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecTest', 'url'=>array('index')),
	array('label'=>'Create SecTest', 'url'=>array('create')),
	array('label'=>'View SecTest', 'url'=>array('view', 'id'=>$model->testid)),
	array('label'=>'Manage SecTest', 'url'=>array('admin')),
);
?>

<h1>Update SecTest <?php echo $model->testid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>