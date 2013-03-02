<?php
/**
 * Default Russian Lexicon Entries for ClicheThumbnail
 *
 * @package cliche
 * @subpackage lexicon
 */

$_lang['clichethumbnail.main_default_text'] = '<h4>Нажмите на кнопку выше, чтобы выбрать изображение</h4>Предварительный просмотре выбранного изображения заменит этот текст';
$_lang['clichethumbnail.main_your_preview'] = 'Предварительный просмотр миниатюры';
$_lang['clichethumbnail.window_title'] = 'Менеджер миниатюр';

$_lang['clichethumbnail.breadcrumb_album'] = 'Браузер альбомов';
$_lang['clichethumbnail.breadcrumb_crop'] = 'Обрезать изображение';
$_lang['clichethumbnail.breadcrumb_crop_desc'] = '<h3>Инструмент обрезки изображения</h3><p>Используйте левое изображение (исходного размера), назначьте область для миниатюры справа (предварительный просмотр миниатюры)</p>';
$_lang['clichethumbnail.breadcrumb_root'] = 'Список альбомов';
$_lang['clichethumbnail.breadcrumb_root_desc'] = '<h3>Предварительный просмотр миниатюры</h3><p>Выберите изображение из назначенного альбома</p>';
$_lang['clichethumbnail.breadcrumb_root_desc_with_thumb'] = '<h3>Предварительный просмотр миниатюры</h3><p>Вы можете выбрать отдельную область изображения, нажав на кнопку "Обрезать изображение"</p>';
$_lang['clichethumbnail.breadcrumb_upload'] = 'Добавить изображения';

$_lang['clichethumbnail.btn_add_photo'] = 'Добавить изображения';
$_lang['clichethumbnail.btn_back_to_album'] = 'Вернуться в альбом';
$_lang['clichethumbnail.btn_back_to_main'] = 'Вернуться на главную панель';
$_lang['clichethumbnail.btn_browse'] = 'Выбрать...';
$_lang['clichethumbnail.btn_browse_album'] = 'Выбрать альбом';
$_lang['clichethumbnail.btn_crop_thumbnail'] = 'Обрезать изображение';
$_lang['clichethumbnail.btn_crop_validate'] = 'Принять изменения';
$_lang['clichethumbnail.btn_replace_thumbnail'] = 'Выбрать другое изображение';
$_lang['clichethumbnail.btn_remove_thumbnail'] = 'Отмена';
$_lang['clichethumbnail.btn_select_image'] = 'Выбрать это изображение';
$_lang['clichethumbnail.btn_start_upload'] = 'Начать загрузку';

$_lang['clichethumbnail.main_empty_msg'] = '<h4>Для этого документа еще не выбрана миниатюра</p>';

$_lang['clichethumbnail.album_desc'] = '<div class="album-infos"><tpl if="cover_id == 0">
		<span class="no-preview">Нет предварительного просмотра</span>
	</tpl>
	<tpl if="cover_id">
		<tpl if="thumbnail">
			<img src="{thumbnail}" title="Обложка альбома {name}" alt="Обложка альбома {name}" />
		</tpl>
		<tpl if="!thumbnail">
			<span class="no-preview error"><strong>Ошибка</strong>Изображение не найдено</span>
		</tpl>
	</tpl>
	<div class="album-name"><h3>Альбом : <span>{name}</span></h3>
		Создан <strong>{createdon}</strong> пользователем <strong>{createdby}</strong><br/>
		Идентификатор альбома : #<strong>{id}</strong>
	</div>
	<div class="album-meta">
		<span>{total}</span>
		Изображений
	</div></div>
	<tpl if="description">
	</div>
	<div class="album-desc">
		<p class="ct_info">Этот альбом зарезервирован для TV-параметра clichethumbnail. Вы не сможете изменить или удалить его с этой панели.<br/> 
		Тем не менее, вы все еще можете загружать изображения, чтобы использовать их в TV-параметрах.
		</p>
	</tpl>';
$_lang['clichethumbnail.album_empty_msg'] = '<h4>В этом альбоме еще нет изображений</h4><p>Загрузить изображения, нажав на "Добавить изображения"</p>';
$_lang['clichethumbnail.album_loading'] = '<div class="centered empty-msg">Загрузка...</div>';

$_lang['clichethumbnail.image_cover_alt_msg'] = 'Предварительный просмотр {name}';
$_lang['clichethumbnail.image_created_by'] = 'Создано пользователем';
$_lang['clichethumbnail.image_created_on'] = 'Создано';
$_lang['clichethumbnail.image_desc_title'] = 'Описание';
$_lang['clichethumbnail.image_informations_title'] = 'Информация';
$_lang['cliche.image_unselected_msg'] = '<div class="empty-msg">Выберите изображение из клавной колонки, чтобы посмотреть его описание</div>';
$_lang['clichethumbnail.image_no_desc'] = '<em>Нет описания</em>';
$_lang['clichethumbnail.image_no_preview'] = 'Нет предварительного просмотра';

$_lang['clichethumbnail.upload_cancel'] = 'Отмена';
$_lang['clichethumbnail.upload_desc'] = '<h4>Выберите файлы со своего компьютера</h4><p>Вы можете выбрать несколько файлов за раз, удерживая клавишу Shift.</p>';
$_lang['clichethumbnail.upload_in_progress'] = 'Идет загрузка...'; 
$_lang['clichethumbnail.upload_ready_msg'] = 'Файлы, готовые для загрузки:';

$_lang['clichethumbnail.cropper_empty_msg'] = '<h4>Загрузка...</p>';
