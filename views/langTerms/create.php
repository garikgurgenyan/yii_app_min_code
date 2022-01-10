<?php

$this->breadcrumbs = array(
    LangTerms::get('Settings') => array('//site/settings'),
    LangTerms::get('Labels')=>array('index'),
    LangTerms::get('New'),
);

$this->menu=array(
	//array('label'=>'List LangTerms', 'url'=>array('index')),
        array('template' => '<hr/>'),
	array('label'=>LangTerms::get('Back'), 'url'=>array('index')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>