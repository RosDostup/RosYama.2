<?php
$this->breadcrumbs=array(
	'Типы дефектов'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список типов дефектов', 'url'=>array('index')),
);
?>

<h1>Создать тип дефекта</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>