<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tindakan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'id_tindakan'); ?>
		<?php echo $form->textField($model,'id_tindakan'); ?>
		<?php echo $form->error($model,'id_tindakan'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
		<?php echo $form->error($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_tindakan'); ?>
		<?php echo $form->textField($model,'tanggal_tindakan'); ?>
		<?php echo $form->error($model,'tanggal_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan_pasien'); ?>
		<?php echo $form->textArea($model,'keluhan_pasien',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keluhan_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_diagnosa'); ?>
		<?php echo $form->textArea($model,'hasil_diagnosa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hasil_diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan'); ?>
		<?php echo $form->textField($model,'pelaksanaan',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'pelaksanaan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->