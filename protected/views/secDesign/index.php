<?php
/* @var $this SecDesignController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sec Designs',
);

$this->menu=array(
	array('label'=>'Create SecDesign', 'url'=>array('create')),
	array('label'=>'Manage SecDesign', 'url'=>array('admin')),
);
?>

<h1>Sec Designs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
