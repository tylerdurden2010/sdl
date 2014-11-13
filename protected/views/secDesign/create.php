<?php
/* @var $this SecDesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>Create SecDesign</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>