<?php
$this->breadcrumbs=array(
	'Типы дефектов'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список типов дефектов', 'url'=>array('index')),
	array('label'=>'Создать тип дефекта', 'url'=>array('create')),
);
?>

<h1>Изменить тип дефекта "<?php echo $model->name; ?>"</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>