<?php
$this->breadcrumbs = array(
    LangTerms::get('Settings') => array('//site/settings'),
    LangTerms::get('Labels') => array('index'),
    $model->ALIAS,
);


$this->menu = array(
    array('label' => LangTerms::get('Edit'), 'url' => array('update', 'id' => $model->ID)),
//    array('label' => LangTerms::get('Delete'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ID), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => LangTerms::get('New'), 'url' => array('create')),
    array('template' => '<hr/>'),
    array('label' => LangTerms::get('Back'), 'url' => array('index')),
);

?>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'TXT',
        'ALIAS',
    ),
));
?>
