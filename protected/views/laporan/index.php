<?php
/* @var $this LaporanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Laporans',
);

$this->menu=array(
	array('label'=>'Create Laporan', 'url'=>array('create')),
	array('label'=>'Manage Laporan', 'url'=>array('admin')),
);
?>

<h1>Laporans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
