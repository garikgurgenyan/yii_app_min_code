<?php
$this->breadcrumbs = array(
    LangTerms::get('Settings') => array('//site/settings'),
    LangTerms::get('Labels') => array('index'),
    $model->ALIAS => array('index'),
    LangTerms::get('Edit'),
);

$this->menu=array(
  array('template' => '<hr/>'),
	array('label'=> LangTerms::get('Back'), 'url'=>array('view','id'=>$model->ID)),
   
);
?>

<h1><?php echo LangTerms::get('Edit'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>