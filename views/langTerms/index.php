<?php
$this->breadcrumbs=array(
	'Lang Terms',
);

$this->menu=array(
	array('label'=>'Create LangTerms', 'url'=>array('create')),
	array('label'=>'Manage LangTerms', 'url'=>array('index')),
);
?>

<h1>Lang Terms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
