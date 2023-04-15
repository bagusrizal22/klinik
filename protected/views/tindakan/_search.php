<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tindakan'); ?>
		<?php echo $form->textField($model,'id_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_tindakan'); ?>
		<?php echo $form->textField($model,'tanggal_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan_pasien'); ?>
		<?php echo $form->textArea($model,'keluhan_pasien',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_diagnosa'); ?>
		<?php echo $form->textArea($model,'hasil_diagnosa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan'); ?>
		<?php echo $form->textField($model,'pelaksanaan',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->