<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_cm')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_cm), array('view', 'id'=>$data->no_cm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->nm_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jk_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->jk_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />


</div>