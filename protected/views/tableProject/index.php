<?php
/* @var $this TableProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Projects',
);

$this->menu=array(
	array('label'=>'Create TableProject', 'url'=>array('create')),
	array('label'=>'Manage TableProject', 'url'=>array('admin')),
);
?>

<h1>Table Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
