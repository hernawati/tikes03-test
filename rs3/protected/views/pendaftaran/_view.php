<?php
/* @var $this PendaftaranController */
/* @var $data Pendaftaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_daftar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_daftar), array('view', 'id'=>$data->no_daftar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_cm')); ?>:</b>
	<?php echo CHtml::encode($data->no_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_daftar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_daftar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />


</div>