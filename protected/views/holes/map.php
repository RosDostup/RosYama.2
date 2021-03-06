<?
$this->pageTitle=Yii::app()->name . ' :: Карта дефектов';
?>
<div id="addmess" style="display:none; color:#0C0"><p><b>Выберите место на карте и кликните по нему два раза, чтобы отметить расположение дефекта.</b></p></div>
  <div class="head">
		<div class="container">
<div class="lCol">
												<a href="/" class="logo" title="На главную"><img src="<? echo Yii::app()->params['logo_path'] ?>" alt="Логотип" /></a>
												<div class="btn">									
													<?php echo CHtml::link('<i class="text">Добавить</i><i class="arrow"></i>',Array('/holes/add'),Array('class'=>'addFact', 'id'=>'addFactButton')); ?>
												</div>
											</div>
						<div class="rCol">
<h1>Карта дефектов<?php if ($usermodel) echo ' в зоне наблюдения <br /> пользователя '.CHtml::link(CHtml::encode($usermodel->fullname), Array('profile/view', 'id'=>$usermodel->id)); ?></h1>

<?php $form=$this->beginWidget('CActiveForm',Array(
	'id'=>'map-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="filterCol filterStatus">
<p class="title">Показать дефекты со статусом</p>
<?php foreach ($model->allstatesMany as $alias=>$name) : ?>
	<label><span class="<?php echo $alias; ?>"><input id="chn0" name="Holes[STATE][]" type="checkbox"  value="<?php echo $alias; ?>" /></span><ins><?php echo $name; ?></ins></label>
<?php endforeach; ?>	
</div>
<div class="filterCol filterType">
<p class="title">Показать тип дефектов</p>
<?php foreach ($types as $i=>$type) : ?>
<label class="col2"><span><input id="ch0" name="Holes[type][]" type="checkbox" value="<?php echo $type->id; ?>"   /></span><ins class="<?php echo $type->alias; ?>"><?php echo $type->name; ?></ins></label>
<?php endforeach; ?>
<input id="MAPLAT" name="MAPLAT" type="hidden" value="" />
<input id="MAPZOOM" name="MAPZOOM" type="hidden" value="" />

<div class="clear"></div>
<br />
<div class="chekboxes" style="float:right;">
<?php echo $form->checkBox($model,"archive",Array('class'=>'filter_checkbox')); ?>	
<?php echo $form->labelEx($model,'archive',Array('label'=>'Показывать дефекты из архива', 'class'=>'archive')); ?>

</div>

</div>
<div class="submit"><input type="submit" name="button" id="button" value="Показать" /><input type="reset" name="reset" id="reset_button" value="Сбросить" type="button" />
<div style="float:right;">
<?php if (!Yii::app()->user->isGuest && Yii::app()->user->userModel->hole_area) : ?>
<label><span class="myarea_check"><input id="myarea_check_inp" name="myarea_check_inp" type="checkbox" <?php if (!$usermodel) echo 'checked="true"' ?> /></span><ins>Показать мою зону наблюдения</ins></label>
<?php endif; ?>
<?php if(Yii::app()->params->gibddOn) {?>
<label style="padding-left:10px;"><span class="gibdd_check"><input id="ibdd_check_inp" name="ibdd_check_inp" type="checkbox" /></span><ins>Показывать границы наблюдения подразделений ГИБДД</ins></label>
<?php }?>
</div>
</div>
<?php $this->endWidget(); ?>			</div>
		</div>
	</div>
	<div class="mainCols">
			
<div id="addmess" style="display:none; color:#0C0"><p><b>Выберите место на карте и кликните по нему два раза, чтобы отметить расположение дефекта.</b></p></div>

<div class="bx-yandex-search-layout">
	<div class="bx-yandex-search-form">
		<form id="search_form_MAP_DzDvWLBsil" name="search_form_MAP_DzDvWLBsil" onsubmit="jsYandexSearch_MAP_DzDvWLBsil.searchByAddress(this.address.value); return false;">
			<p>Введите адрес места для быстрого поиска</p>
			<input type="text" id="address_inp" name="address" class="textInput" value="" style="width: 300px;" />
			<input type="submit" value="Искать" />
			<a style="display:none;" id="clear_result_link" href="#" onclick="clearSerchResults('MAP_DzDvWLBsil', JCBXYandexSearch_arSerachresults); document.getElementById('address_inp').value=''; return false;">Очистить</a>
		</form>
	</div>

	<div class="bx-yandex-search-results" id="results_MAP_DzDvWLBsil"></div>
		

<div class="bx-yandex-view-layout">
	<div class="bx-yandex-view-map">
<script type="text/javascript">
history.navigationMode = 'compatible';
$(document).ready( function(){
                                init_MAP_DzDvWLBsil(<?php if ($usermodel) echo "null, 'userarea'"; elseif(!Yii::app()->user->isGuest && Yii::app()->user->userModel->hole_area)  echo "null, 'bigmap_with_area'"?>);
                             }
                 );


</script>
<?php if ($usermodel) : ?>
	<?php echo CHtml::hiddenField('user_id', $usermodel->id); ?>
<?php endif; ?>
<?php
					$this->widget('application.extensions.ymapmultiplot.YMapMultiplot', array(
							'key'=>$this->mapkey,
						   'id' => 'BX_YMAP_MAP_DzDvWLBsil',//id of the <div> container created
						   'label' => 'Тест', //Title for bubble. Used if you are plotting multiple locations of same business
						   'address' =>  Array(), //Array of AR objects
						   'width'=>'100%',
						   'height'=>'600px',						   
						   //'notshow'=>true
					  ));
					?>
	</div>
</div>
<img src="/images/map_shadow.jpg" class="mapShadow" alt="" />

			</div>
	</div>
	</div>
