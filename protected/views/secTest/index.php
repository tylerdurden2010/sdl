<?php
/* @var $this SecTestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sec Tests',
);

$this->menu=array(
	array('label'=>'Create SecTest', 'url'=>array('create')),
	array('label'=>'Manage SecTest', 'url'=>array('admin')),
);
?>

<h1>Sec Tests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
