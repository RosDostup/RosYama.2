<?php
$MESS['HOLE_TYPE_badroad']    = 'Разбитая дорога';
$MESS['HOLE_TYPE_holeonroad'] = 'Дефект на дороге';
$MESS['HOLE_TYPE_hatch']      = 'Люк';
$MESS['HOLE_TYPE_crossing']   = 'Переезд';
$MESS['HOLE_TYPE_nomarking']  = 'Отсутствие разметки';
$MESS['HOLE_TYPE_rails']      = 'Рельсы';
$MESS['HOLE_TYPE_policeman']  = 'Лежачий полицейский';
$MESS['HOLE_TYPE_fence']      = 'Ограждение';
$MESS['HOLE_TYPE_holeinyard'] = 'Дефект во дворе';
$MESS['HOLE_TYPE_light']      = 'Светофор';
$MESS['HOLE_REQUEST_SENT']    = Yii::app()->params->gibddOn ? 'отправлен запрос в ГИБДД' : 'отправлен запрос в местные органы власти';
$MESS['HOLE_ITWAS']           = 'Было';
$MESS['HOLE_ITBECAME']        = 'Стало';
$MESS['HOLE_REQUEST_FORM']    = 'Заявление';
$MESS['HOLE_FIXED']           = 'отмечен факт исправления дефекта';

$MESS['HOLE_STATE_fresh']      = 'Добавлено на сайт';
$MESS['HOLE_STATE_inprogress'] = '';
$MESS['HOLE_STATE_fixed']      = '';
$MESS['HOLE_STATE_achtung']    = '';
$MESS['HOLE_STATE_gibddre']    = Yii::app()->params->gibddOn ? 'Получен ответ из ГИБДД' : 'Получен ответ из местных органов власти';

$MESS['WAIT']  = 'Ждать, когда отремонтируют';
$MESS['PAST']  = 'Просрочено';
$MESS['DAYS5'] = 'дней';
$MESS['DAYS2'] = 'дня';
$MESS['DAY']   = 'день';
$MESS['CLOSE'] = 'Закрыть';

$MESS['HOLE_REQUEST_FORM_TO']                  = 'Начальнику...';
$MESS['HOLE_REQUEST_FORM_FROM']                = 'От';
$MESS['HOLE_REQUEST_FORM_POSTADDRESS']         = 'Почтовый адрес заявителя с индексом (для переписки и получения уведомлений)';
$MESS['HOLE_REQUEST_FORM_ADDRESS']             = 'Адрес дефекта';
$MESS['HOLE_REQUEST_FORM_COMMENT']             = 'Если дефект дороги представляет собой работающий в плохом режиме или неработающий светофор,';
$MESS['HOLE_REQUEST_FORM_SIGNATURE']           = 'Подпись';
$MESS['HOLE_REQUEST_FORM_TO_COMMENT']          = Yii::app()->params->gibddOn ? 'Укажите наименование структурного подразделения ГИБДД и фамилию начальника' : 'Укажите наименование местного органа власти (включая его территориальную принадлежность) и фамилию начальника';
$MESS['HOLE_REQUEST_FORM_FROM_COMMENT']        = 'Фамилия, имя и отчество заявителя в родительном падеже';
$MESS['HOLE_REQUEST_FORM_POSTADDRESS_COMMENT'] = 'Мы не храним на сайте почтовые адреса заявителей';
$MESS['HOLE_REQUEST_FORM_ADDRESS_COMMENT']     = 'желательно указать адрес и месторасположение дефекта как можно более точно';
$MESS['HOLE_REQUEST_FORM_COMMENT_COMMENT']     = 'можно указать причину изменения режима и предложить свой вариант';
$MESS['HOLE_REQUEST_FORM_SIGNATURE_COMMENT']   = 'Фамилия в именительном падеже и инициалы';
$MESS['HOLE_REQUEST_FORM_SUBMIT']              = 'Сгенерировать PDF-файл';
$MESS['HOLE_REQUEST_FORM_SUBMIT2']             = 'Текст заявления в HTML';
$MESS['HOLE_REQUEST_FORM_SHOW_DESCRIPTIONS']            = 'Выводить описание дефекта и описание местоположения';
$MESS['HOLE_REQUEST_FORM_SHOW_DESCRIPTIONS_COMMENT']            = 'Снимите отметку если не нужно выводить описания дефекта и местоположения, указанные вами при добавлении дефекта';
$MESS['HOLE_REQUEST_FORM_PRINT_PICTURES']            = 'Выводить изображения к дефектам';
$MESS['HOLE_REQUEST_FORM_PRINT_PICTURES_COMMENT']            = 'Отметьте, если нужно выводить изображения';

$MESS['HOLE_CART_ADMIN_TEXT_1']  = 'Пока заявление не выслано,';
$MESS['HOLE_CART_ADMIN_TEXT_3']  = 'можно';
$MESS['HOLE_CART_ADMIN_TEXT_4']  = 'Напечатать заявление';
$MESS['HOLE_CART_ADMIN_TEXT_2']  = 'редактировать';
$MESS['HOLE_CART_ADMIN_TEXT_5']  = '';
$MESS['HOLE_CART_ADMIN_TEXT_6']  = Yii::app()->params->gibddOn ? 'Отметить факт отправки заявления в ГИБДД' : 'Заявление в местные органы власти уже отправлено';
$MESS['HOLE_CART_ADMIN_TEXT_7']  = 'Если дефект устранён';
$MESS['HOLE_CART_ADMIN_TEXT_8']  = 'Отметить как устранённый';
$MESS['HOLE_CART_ADMIN_TEXT_8a'] = 'Отметить дефект как устранённый';
$MESS['HOLE_CART_ADMIN_TEXT_9']  = '';
$MESS['HOLE_CART_ADMIN_TEXT_10'] = 'удалить';
$MESS['HOLE_CART_ADMIN_TEXT_11'] = 'Вы уверены, что хотите удалить этот дефект с сайта?';
$MESS['HOLE_CART_ADMIN_TEXT_12'] = 'Отменить подачу моей заявки';
$MESS['HOLE_CART_ADMIN_TEXT_13'] = 'Аннулировать факт исправления';
$MESS['HOLE_CART_ADMIN_TEXT_14'] = 'Написать жалобу в прокуратуру';
$MESS['HOLE_CART_ADMIN_TEXT_15'] = 'Напечатать заявление';
$MESS['HOLE_CART_ADMIN_TEXT_16'] = 'Если дефект не устранён';
$MESS['HOLE_CART_ADMIN_TEXT_OR'] = 'или';

$MESS['HOLE_CART_ADMIN_GIBDD_REPLY_RECEIVED'] = Yii::app()->params->gibddOn ? 'Получен ответ из ГИБДД' : 'Получен ответ из местных органов власти';
$MESS['HOLE_GIBDDREPLY'] = Yii::app()->params->gibddOn ? 'Ответ из ГИБДД' : 'Ответ из местных органов власти';

if(Yii::app()->params->gibddOn)
    $MESS['HOLE_PROSECUTOR_FORM_PREFACE'] = '<p>В связи с тем, что ГИБДД может проигнорировать ваше обращение или ограничиться разнообразными формальными отписками, мы не можем предоставить вам образец универсального заявления в прокуратуру, который содержал бы в себе все возможные варианты жалоб.</p>
<p>Однако, учитывая наш опыт, по истечению 37 дней, в том случае, если повреждение дороги всё еще не устранено, а ГИБДД не желает принимать меры, вам предложен шаблон обращения в прокуратуру, который вы сможете дополнить или изменить с учетом вашей конкретной ситуации.</p>
<p>Данный шаблон Жалобы на бездействие органов ГИБДД будет полезен в том случае, если Инспекция не ответила на ваше заявление, либо ответила, что дорога находится в исправном состоянии и нет причин для принятия соответствующих мер, или сообщила, что повреждение устранено, но это не соответствует действительности.</p>';
else
    $MESS['HOLE_PROSECUTOR_FORM_PREFACE'] = '<p>В связи с тем, что местные органы власти могут проигнорировать ваше обращение или ограничиться разнообразными формальными отписками, мы не можем предоставить вам образец универсального заявления в прокуратуру, который содержал бы в себе все возможные варианты жалоб.</p>
<p>Однако, учитывая наш опыт, по истечении 37 дней, в том случае, если дефект всё еще не устранён, а местные органы власти не желают принимать меры, мы предлагаем вам шаблон обращения в прокуратуру, который вы сможете дополнить или изменить с учетом вашей конкретной ситуации.</p>
<p>Данный шаблон <b>жалобы на бездействие местных органов</b> будет полезен в том случае, если Инспекция не ответила на ваше заявление, либо ответила, что дефект отсутствует и нет причин для принятия соответствующих мер, или сообщила, что повреждение устранено, но это не соответствует действительности.</p>';
$MESS['HOLE_PROSECUTOR_FORM_TO']                       = 'В прокуратуру';
$MESS['HOLE_PROSECUTOR_FORM_TO_COMMENT']               = 'Укажите субъект РФ в родительном падеже';
$MESS['HOLE_PROSECUTOR_FORM_FROM']                     = 'От';
$MESS['HOLE_PRESECUTOR_FORM_ADDRESS']                  = 'Адрес дефекта';
$MESS['HOLE_PROSECUTOR_FORM_POSTADDRESS']              = 'Адрес заявителя';
$MESS['HOLE_PROSECUTOR_FORM_POSTADDRESS_COMMENT']      = 'Почтовый адрес заявителя с индексом (для переписки и получения уведомлений)';

$MESS['HOLE_PROSECUTOR_FORM_APPLICATION_DATA']         = Yii::app()->params->gibddOn ? 'Дата ответа из ГИБДД (dd.mm.YYYY)' : 'Дата ответа из местного органа власти (dd.mm.YYYY)';
$MESS['HOLE_PROSECUTOR_FORM_APPLICATION_DATA_COMMENT'] = Yii::app()->params->gibddOn ? 'Если есть ответ из ГИБДД, его можно приложить к жалобе, указав дату. Если нет, то не надо указывать' : 'Если есть ответ из местного органа власти, его можно приложить к жалобе, указав дату. Если нет, то не надо указывать';
$MESS['HOLE_PRESECUTOR_FORM_GIBDD']                    = Yii::app()->params->gibddOn ? 'Отделение ГИБДД' : 'Название местного органа власти';
$MESS['HOLE_PRESECUTOR_FORM_GIBDD_COMMENT']            = Yii::app()->params->gibddOn ? 'Укажите отделение ГИБДД, куда вы отправляли заявление' : 'Укажите местный орган власти, куда вы отправляли заявление';
if(Yii::app()->params->gibddOn)
    $MESS['HOLE_PROSECUTOR_FORM2_PREFACE']       = '<p>В том случае, если органы ГИБДД выполнили свои обязанности и направили предписание об устранении повреждений дорожного полотна в учреждение или организацию, ответственную за ремонт и содержание дороги, однако никакого результата это не принесло и ямы остались на прежнем месте, мы рекомендуем вам обратиться в прокуратуру.</p>
<p>Предлагаем вам шаблон обращения, который вы сможете дополнить или изменить с учетом вашей конкретной ситуации.</p>';
else
    $MESS['HOLE_PROSECUTOR_FORM2_PREFACE']       = '<p>В том случае, если местные органы власти выполнили свои обязанности и направили предписание об устранении повреждений дорожного полотна в учреждение или организацию, ответственную за ремонт и содержание дороги, однако никакого результата это не принесло и ямы остались на прежнем месте, мы рекомендуем вам обратиться в прокуратуру.</p>
<p>Предлагаем вам шаблон обращения, который вы сможете дополнить или изменить с учетом вашей конкретной ситуации.</p>';
$MESS['HOLE_PRESECUTOR_FORM_GIBDD_REPLY']    = Yii::app()->params->gibddOn ? 'Резолютивная часть ответа из ГИБДД,' : 'Резолютивная часть ответа из местного органа власти,';
$MESS['HOLE_PRESECUTOR_FORM_GIBDD_COMMENT2'] = 'которая была невыполнена. Процитируйте её.';
$MESS['REQUEST_TO_PROSECUTOR_SENT']          = Yii::app()->params->gibddOn ? 'отправлена жалоба на ГИБДД в прокуратуру' : 'отправлена жалоба на местный орган власти в прокуратуру';

//$MESS['PREMODRATION_WARNING'] = 'Заебали постить всякую хуйню';

$MESS['PREMODRATION_WARNING'] = 'На сайте включён режим премодерации. Вы можете продолжать работу с добавленным вами дефектом, но остальным пользователям он станет доступным для просмотра только после одобрения его модератором.';
if(Yii::app()->params->gibddOn)
    $MESS['ST1234_INSTRUCTION'] = 'Просим вас обратить внимание, что нажатие кнопки «Печать заявления» и создание PDF-файла не означает автоматической отправки этого заявления в компетентные органы и старта процесса исправления дефекта. На данный момент есть три варианта отправки заявления:<br><br><ol><li>заявление может быть отправлено на адрес выбранного отделения ГИБДД обычным почтовым отправлением с уведомлением о доставке. Это наиболее надежный способ;</li><li>заявление может быть отнесено заявителем лично в подразделение ГИБДД и зарегистрировано в канцелярии или дежурной части</li><li>заявление может быть отправлено с&nbsp;официального сайта <a target="_blank" href="http://www.gibdd.ru/letter">ГИБДД&nbsp;МВД&nbsp;России</a>.</li></ol>';
else
    $MESS['ST1234_INSTRUCTION'] = 'Просим вас обратить внимание, что нажатие кнопки «Печать заявления» и создание PDF-файла не означает автоматической отправки этого заявления в компетентные органы и старта процесса исправления дефекта. Заявление может быть отправлено на адрес местного органа власти обычным почтовым отправлением с уведомлением о доставке. Это наиболее надежный способ.';
return $MESS;

?>
