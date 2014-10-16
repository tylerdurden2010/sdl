<?php
/* @var $this DesignController */
/* @var $model SecDesign */

$this->breadcrumbs=array(
	'Sec Designs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SecDesign', 'url'=>array('index')),
	array('label'=>'Create SecDesign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sec-design-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sec Designs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sec-design-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DesignID',
		'ProjectID',
		'InterFace',
		'DataFlow',
		'ThreatAnalysis',
		'UserID',
		/*
		'ThirdPart',
		'DesFinish',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
