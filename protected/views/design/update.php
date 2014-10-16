<?php
/* @var $this DesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	$model->DesignID=>array('view','id'=>$model->DesignID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Create SecDesign', 'url'=>array('create')),
	array('label'=>'View SecDesign', 'url'=>array('view', 'id'=>$model->DesignID)),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>Update SecDesign <?php echo $model->DesignID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>