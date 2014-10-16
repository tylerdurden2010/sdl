<?php
/* @var $this OptProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create OptProject', 'url'=>array('create'),'itemOptions'=>array('class'=>'active','role'=>'presentation'),),
	array('label'=>'Manage OptProject', 'url'=>array('admin'),'itemOptions'=>array('role'=>'presentation'),),
);
?>
<div class="page-header">
<h1>Projects</h1>
  </div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
