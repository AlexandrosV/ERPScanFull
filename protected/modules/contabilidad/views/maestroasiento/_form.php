<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maestroasiento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroasiento'); ?>
		<?php echo $form->textField($model,'numeroasiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numeroasiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodocontable'); ?>
		<?php echo $form->textField($model,'periodocontable',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'periodocontable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedularuc'); ?>
		<?php echo $form->textField($model,'cedularuc',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'cedularuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficiario'); ?>
		<?php echo $form->textField($model,'beneficiario',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'beneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
		<?php echo $form->error($model,'fechacreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechamodificacion'); ?>
		<?php echo $form->textField($model,'fechamodificacion'); ?>
		<?php echo $form->error($model,'fechamodificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textField($model,'detalle',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iddocumento'); ?>
		<?php echo $form->textField($model,'iddocumento'); ?>
		<?php echo $form->error($model,'iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numerodocumento'); ?>
		<?php echo $form->textField($model,'numerodocumento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numerodocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcuentabancaria'); ?>
		<?php echo $form->textField($model,'idcuentabancaria'); ?>
		<?php echo $form->error($model,'idcuentabancaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcomprobantecontable'); ?>
		<?php echo $form->textField($model,'idcomprobantecontable'); ?>
		<?php echo $form->error($model,'idcomprobantecontable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numerocomprobante'); ?>
		<?php echo $form->textField($model,'numerocomprobante',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numerocomprobante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->checkBox($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mayorizado'); ?>
		<?php echo $form->checkBox($model,'mayorizado'); ?>
		<?php echo $form->error($model,'mayorizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impreso'); ?>
		<?php echo $form->checkBox($model,'impreso'); ?>
		<?php echo $form->error($model,'impreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valormovimiento'); ?>
		<?php echo $form->textField($model,'valormovimiento',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'valormovimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referenciaadicional'); ?>
		<?php echo $form->textField($model,'referenciaadicional',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'referenciaadicional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asientocuadrado'); ?>
		<?php echo $form->checkBox($model,'asientocuadrado'); ?>
		<?php echo $form->error($model,'asientocuadrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
		<?php echo $form->error($model,'idempresa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->