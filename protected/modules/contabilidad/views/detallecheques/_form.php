<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalleasientos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idasiento'); ?>
		<?php echo $form->textField($model,'idasiento'); ?>
		<?php echo $form->error($model,'idasiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuentacontable'); ?>
		<?php echo $form->textField($model,'cuentacontable'); ?>
		<?php echo $form->error($model,'cuentacontable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valordebe'); ?>
		<?php echo $form->textField($model,'valordebe',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valordebe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorhaber'); ?>
		<?php echo $form->textField($model,'valorhaber',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valorhaber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subdetalle'); ?>
		<?php echo $form->textField($model,'subdetalle',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'subdetalle'); ?>
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