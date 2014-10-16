<?php
/* @var $this OptSecCodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opt Sec Codes',
);

$this->menu=array(
	array('label'=>'Create OptSecCode', 'url'=>array('create')),
	array('label'=>'Manage OptSecCode', 'url'=>array('admin')),
);
?>

<h1>Opt Sec Codes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
