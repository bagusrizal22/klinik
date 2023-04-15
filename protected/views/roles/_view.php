<?php
/* @var $this RolesController */
/* @var $data Roles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->role_id), array('view', 'id'=>$data->role_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastUpdate')); ?>:</b>
	<?php echo CHtml::encode($data->LastUpdate); ?>
	<br />


</div>