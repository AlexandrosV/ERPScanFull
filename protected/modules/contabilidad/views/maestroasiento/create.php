<?php
$this->breadcrumbs=array(
	'Maestroasientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maestroasiento', 'url'=>array('index')),
	array('label'=>'Manage Maestroasiento', 'url'=>array('admin')),
);


?>

<h1>Create Maestroasiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'comprobanteData'=>$comprobanteData)); ?>