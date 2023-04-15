<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->id_pembayaran,
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'Update Pembayaran', 'url'=>array('update', 'id'=>$model->id_pembayaran)),
	array('label'=>'Delete Pembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pembayaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>View Pembayaran #<?php echo $model->id_pembayaran; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pembayaran',
		'pasien.nama_pasien',
		'tindakan.tanggal_tindakan',
		'obat.nama_obat',
		'obat.harga',
	),
)); ?>
