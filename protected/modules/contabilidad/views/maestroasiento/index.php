<?php
$this->breadcrumbs=array(
	'Maestroasientos',
);

$this->menu=array(
	array('label'=>'Crear Asiento', 'url'=>array('create')),
	array('label'=>'Administrar Asientos', 'url'=>array('admin')),
);
?>

<h1>Asientos Contables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
