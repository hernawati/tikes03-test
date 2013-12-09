<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_daftar'); ?>
		<?php echo $form->textField($model,'no_daftar'); ?>
		<?php echo $form->error($model,'no_daftar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_cm'); ?>
		<?php echo $form->textField($model,'no_cm'); ?>
		<?php echo $form->error($model,'no_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_daftar'); ?>
		<?php echo $form->textField($model,'tgl_daftar'); ?>
		<?php echo $form->error($model,'tgl_daftar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_dokter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->