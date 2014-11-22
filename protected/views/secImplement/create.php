<?php
/* @var $this SecImplementController */
/* @var $model Implement */

$this->breadcrumbs=array(
	'Implements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Implement', 'url'=>array('index')),
	array('label'=>'Manage Implement', 'url'=>array('admin')),
);
?>

<h1>Create Implement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>