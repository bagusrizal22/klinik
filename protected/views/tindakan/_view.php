<?php
/* @var $this TindakanController */
/* @var $data Tindakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tindakan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tindakan), array('view', 'id'=>$data->id_tindakan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_diagnosa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->pelaksanaan); ?>
	<br />

	*/ ?>

</div>