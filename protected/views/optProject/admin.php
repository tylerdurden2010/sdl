<?php
/* @var $this OptProjectController */
/* @var $model OptProject */

$this->breadcrumbs=array(
	'Opt Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OptProject', 'url'=>array('index'),'itemOptions'=>array('class'=>'active','role'=>'presentation'),),
	array('label'=>'Create OptProject', 'url'=>array('create'),'itemOptions'=>array('role'=>'presentation'),),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#opt-project-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Opt Projects</h1>

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
	'id'=>'opt-project-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ProjectName',
		'Step',
		'ProjectID',
		'UserID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
