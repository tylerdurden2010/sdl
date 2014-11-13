<?php
/* @var $this SecDesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	$model->designid=>array('view','id'=>$model->designid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Create SecDesign', 'url'=>array('create')),
	array('label'=>'View SecDesign', 'url'=>array('view', 'id'=>$model->designid)),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>Update SecDesign <?php echo $model->designid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>