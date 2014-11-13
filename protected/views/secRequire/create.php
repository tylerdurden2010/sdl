<?php
/* @var $this SecRequireController */
/* @var $model SecRequire */

$this->breadcrumbs=array(
	'Sec Requires'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SecRequire', 'url'=>array('index')),
	array('label'=>'Manage SecRequire', 'url'=>array('admin')),
);
?>

<h1>Create SecRequire</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>