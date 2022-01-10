<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TXT')); ?>:</b>
	<?php echo CHtml::encode($data->TXT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALIAS')); ?>:</b>
	<?php echo CHtml::encode($data->ALIAS); ?>
	<br />


</div>