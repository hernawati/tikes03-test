<?php
/* @var $this SpesialisController */
/* @var $data Spesialis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spesialis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_spesialis), array('view', 'id'=>$data->id_spesialis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->nm_spesialis); ?>
	<br />


</div>