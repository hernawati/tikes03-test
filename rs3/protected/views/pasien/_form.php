<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_cm'); ?>
		<?php echo $form->textField($model,'no_cm'); ?>
		<?php echo $form->error($model,'no_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_pasien'); ?>
		<?php echo $form->textField($model,'nm_pasien',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nm_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jk_pasien'); ?>
		<?php 
			  //echo $form->textField($model,'jk_pasien',array('size'=>1,'maxlength'=>1));
			  echo $form->dropDownList($model,'jk_pasien',$model->getJenkel());
		?>
		<?php echo $form->error($model,'jk_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php //echo $form->textField($model,'tgl_lahir'); 
			  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'name'=>'Pasien[tgl_lahir]',
					'value'=>$model->tgl_lahir,
					'options'=>array(
						'showAnim'=>'fold',
						'dateFormat'=>'yy-mm-dd',
					),
				)
			  );
			  
		?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->