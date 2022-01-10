<?php
$this->breadcrumbs = array(
    LangTerms::get('Settings') => array('//site/settings'),
    LangTerms::get('Labels'),
);


$this->menu=array(
	array('label'=>LangTerms::get('New'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lang-terms-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo LangTerms::get('Labels'); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lang-terms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TXT',
		'ALIAS',
		array(
            'class' => 'CButtonColumn',
		),
	),
)); ?>
