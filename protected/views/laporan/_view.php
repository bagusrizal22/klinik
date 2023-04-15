<?php
/* @var $this LaporanController */
/* @var $data Laporan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_laporan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_laporan), array('view', 'id'=>$data->id_laporan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->id_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />


</div>