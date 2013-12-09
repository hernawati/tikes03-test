<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	$model->no_cm,
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label'=>'Update Pasien', 'url'=>array('update', 'id'=>$model->no_cm)),
	array('label'=>'Delete Pasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_cm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>View Pasien #<?php echo $model->no_cm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_cm',
		'nm_pasien',		
		//'jk_pasien',
		array(
			'name'=>'jk_pasien',
			'value'=>$model->getJenkelStr($model->jk_pasien),
		),
		'alamat',
		'tgl_lahir',
	),
)); ?>
