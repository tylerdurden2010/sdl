<?php
/* @var $this TableProjectController */
/* @var $model TableProject */

$this->breadcrumbs=array(
	'Table Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TableProject', 'url'=>array('index')),
	array('label'=>'Manage TableProject', 'url'=>array('admin')),
);
?>

<h1>Create TableProject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>