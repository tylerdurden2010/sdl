<?php
/* @var $this OptProjectController */
/* @var $data OptProject */
?>

<div class="col-sm-4">
<div class="panel panel-success">

     <div class="panel-heading">
              <h3 class="panel-title"><?php echo CHtml::encode($data->getAttributeLabel('ProjectName')); ?></h3>
            </div>
	          <div class="panel-body">
             <?php echo CHtml::encode($data->ProjectName); ?>
            </div>

         <div class="panel-heading">
              <h3 class="panel-title"><?php echo CHtml::encode($data->getAttributeLabel('Step')); ?></h3>
            </div>
              <div class="panel-body">
            <?php echo CHtml::encode($data->Step); ?>
            </div>

            <div class="panel-heading">
            <h3 class="panel-title"><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?></h3>
          </div>
            <div class="panel-body">
          <?php echo CHtml::encode($data->UserID); ?>
          </div>
</div>
</div>