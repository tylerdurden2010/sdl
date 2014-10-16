<?php
/* @var $this OptProjectController */
/* @var $model OptProject */

$this->breadcrumbs=array(
	'Opt Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptProject', 'url'=>array('index'),'itemOptions'=>array('class'=>'active','role'=>'presentation'),),
	array('label'=>'Manage OptProject', 'url'=>array('admin'),'itemOptions'=>array('class'=>'','role'=>'presentation'),),
);
?>

<h1>Create Project</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>