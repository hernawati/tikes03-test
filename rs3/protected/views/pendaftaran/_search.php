<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_daftar'); ?>
		<?php echo $form->textField($model,'no_daftar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_cm'); ?>
		<?php echo $form->textField($model,'no_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_daftar'); ?>
		<?php echo $form->textField($model,'tgl_daftar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->