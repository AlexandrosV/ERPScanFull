<?php
$this->breadcrumbs=array(
	'Maestroasientos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listado de Asientos', 'url'=>array('index')),
	array('label'=>'Crear Asiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maestroasiento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Asientos contables registrados</h1>

<p>
Opcionalmente puede buscar con los signos (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) la inicio de cada criterio.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$model->cedularuc='';
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maestroasiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		'numeroasiento',		
		'fechacreacion',
        'referenciaadicional',
		/*
		'fechamodificacion',
		'detalle',
		'iddocumento',
		'numerodocumento',
		'idcuentabancaria',
		'idcomprobantecontable',
		'numerocomprobante',
		'estado',
		'mayorizado',
		'impreso',
		'valormovimiento',
		
		'asientocuadrado',
		'idempresa',
		*/
		array(
			'class'=>'CButtonColumn',
            'template' => '{update}',                         
             'updateButtonUrl'=>'Yii::app()->createUrl("/maestroasiento/update",  array())',
		),
       
	),
)); 





?>
