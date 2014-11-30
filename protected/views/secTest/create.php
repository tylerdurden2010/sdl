<?php
/* @var $this SecTestController */
/* @var $model SecTest */

$this->breadcrumbs=array(
	'Sec Tests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SecTest', 'url'=>array('index')),
	array('label'=>'Manage SecTest', 'url'=>array('admin')),
);
?>

<h1>Create SecTest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>