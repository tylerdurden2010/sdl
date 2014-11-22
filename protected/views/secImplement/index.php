<?php
/* @var $this SecImplementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Implements',
);

$this->menu=array(
	array('label'=>'Create Implement', 'url'=>array('create')),
	array('label'=>'Manage Implement', 'url'=>array('admin')),
);
?>

<h1>Implements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
