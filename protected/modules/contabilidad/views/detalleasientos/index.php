<?php
$this->breadcrumbs=array(
	'Detalleasientoses',
);

//$this->menu=array(
//	array('label'=>'Create Detalleasientos', 'url'=>array('create')),
//	array('label'=>'Manage Detalleasientos', 'url'=>array('admin')),
//);
?>

<table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>