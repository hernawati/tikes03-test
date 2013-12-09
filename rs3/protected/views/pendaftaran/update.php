<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs=array(
	'Pendaftarans'=>array('index'),
	$model->no_daftar=>array('view','id'=>$model->no_daftar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pendaftaran', 'url'=>array('index')),
	array('label'=>'Create Pendaftaran', 'url'=>array('create')),
	array('label'=>'View Pendaftaran', 'url'=>array('view', 'id'=>$model->no_daftar)),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>

<h1>Update Pendaftaran <?php echo $model->no_daftar; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>