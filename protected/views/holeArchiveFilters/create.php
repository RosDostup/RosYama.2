<?php
$this->breadcrumbs=array(
	'Hole Archive Filters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список правил архивации дефектов', 'url'=>array('admin')),
);
?>

<h1>Добавить правило</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>