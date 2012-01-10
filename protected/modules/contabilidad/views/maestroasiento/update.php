<?php
$this->breadcrumbs=array(
	'Maestroasientos'=>array('index'),
	$model->idasiento=>array('view','id'=>$model->idasiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maestroasiento', 'url'=>array('index')),
	array('label'=>'Create Maestroasiento', 'url'=>array('create')),
	array('label'=>'View Maestroasiento', 'url'=>array('view', 'id'=>$model->idasiento)),
	array('label'=>'Manage Maestroasiento', 'url'=>array('admin')),
);
?>

<h1>Ingreso de detalles del asiento <?php echo $model->numeroasiento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'comprobanteData'=>$comprobanteData,
    'documentoData'=>$documentoData,
    'cuentasData'=>$cuentasData,
    'numeroComp'=>$numeroComp,
    'numeroDoc'=>$numeroDoc)); ?>