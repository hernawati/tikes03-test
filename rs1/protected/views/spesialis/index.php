<?php
/* @var $this SpesialisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spesialis',
);

$this->menu=array(
	array('label'=>'Create Spesialis', 'url'=>array('create')),
	array('label'=>'Manage Spesialis', 'url'=>array('admin')),
);
?>

<h1>Spesialis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
