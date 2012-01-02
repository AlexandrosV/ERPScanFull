<?php
$this->breadcrumbs=array(
	'Maestroasientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Asientos', 'url'=>array('index')),
//	array('label'=>'Manage Maestroasiento', 'url'=>array('admin')),
);
?>

<h1>Crear Asiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'comprobanteData'=>$comprobanteData)); ?>