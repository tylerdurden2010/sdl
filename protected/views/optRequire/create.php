<?php
/* @var $this OptRequireController */
/* @var $model OptRequire */

$this->breadcrumbs=array(
	'Opt Requires'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptRequire', 'url'=>array('index')),
	array('label'=>'Manage OptRequire', 'url'=>array('admin')),
);
?>

<h1>Create OptRequire</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>