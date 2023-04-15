<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
		<?php echo $form->error($model,'id_dokter'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'nama_dokter'); ?>
		<?php echo $form->textField($model,'nama_dokter',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_dokter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->