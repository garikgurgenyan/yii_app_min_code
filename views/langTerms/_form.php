<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lang-terms-form',
	'enableAjaxValidation'=>false,
)); ?>

	 <p class="note"> <span class="required">*</span>-ով նշված դաշտերը պարտադիր են</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'ALIAS'); ?>
		<?php echo $form->textField($model,'ALIAS',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'ALIAS'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'TXT'); ?>
		<?php echo $form->textField($model,'TXT',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'TXT'); ?>
	</div>
	
        <div class="row buttons">
		<?php echo CHtml::submitButton('Հաստատել'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->