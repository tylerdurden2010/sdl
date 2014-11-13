<?php
/* @var $this SecRequireController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sec Requires',
);

$this->menu=array(
	array('label'=>'Create SecRequire', 'url'=>array('create')),
	array('label'=>'Manage SecRequire', 'url'=>array('admin')),
);
?>

<h1>Sec Requires</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
