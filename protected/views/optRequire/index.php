<?php
/* @var $this OptRequireController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opt Requires',
);

$this->menu=array(
	array('label'=>'Create OptRequire', 'url'=>array('create')),
	array('label'=>'Manage OptRequire', 'url'=>array('admin')),
);
?>

<h1>Opt Requires</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
