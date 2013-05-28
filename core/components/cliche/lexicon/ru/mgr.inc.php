<?php
/**
 * Default Manager Russian Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */
 
$_lang['cliche.main_title'] = 'Cliche';

$_lang['cliche.breadcrumb_album_list_desc'] = '<h3>Список альбомов</h3><p>Выберите альбом для просмотра его содержимого.</p>';
$_lang['cliche.breadcrumb_root'] = 'Список альбомов';
$_lang['cliche.breadcrumb_upload_images'] = 'Загрузить изображения'; 

$_lang['cliche.field_album_name_label'] = 'Название альбома (обязательно)';
$_lang['cliche.field_album_desc_label'] = 'Краткое описание';
$_lang['cliche.field_image_name_label'] = 'Имя изображения (обязательно)';
$_lang['cliche.field_image_desc_label'] = 'Описание';

$_lang['cliche.album_list_empty_msg'] = '<h4>Еще не создано ни одного альбома</h4><p>Создайте свой первый альбом, используя кнопку вверху, затем нажмите на созданный элемент, чтобы посмотреть его содержимое.<br/>Используйте значок с домиком, чтобы вернуться к списку альбомов (сейчас этот значок не кликабельный)</p>';
$_lang['cliche.album_list_total_pics'] = 'Изображений: {total}';

$_lang['cliche.album_desc'] = '<div class="album-infos">
    <tpl if="cover_id == 0">
		<span class="no-preview">Нет изображения</span>
	</tpl>
	<tpl if="cover_id">
		<tpl if="thumbnail">
			<img src="{thumbnail}" title="Обложка для альбома {name}" alt="Обложка для альбома {name}" />
		</tpl>
		<tpl if="!thumbnail">
			<span class="no-preview error"><span><strong>Ошибка</strong>Изображение не найдено</span></span>
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
	</div><div class="album-desc"><p>{description}</p></tpl>';
$_lang['cliche.album_item_cover_alt_msg'] = '{name} предварительный просмотр';
$_lang['cliche.album_item_created_by'] = 'Создано пользователем';
$_lang['cliche.album_item_created_on'] = 'Создано';
$_lang['cliche.album_item_desc_title'] = 'Описание';
$_lang['cliche.album_item_empty_msg'] = '<h4>В этом альбоме нет изображений</h4><p>Добавьте изображения, нажав на кнопку "Добавить изображения"</p>';
$_lang['cliche.album_item_id'] = 'ID';
$_lang['cliche.album_item_informations_title'] = 'Информация';

$_lang['cliche.btn_add_album'] = 'Добавить альбом';
$_lang['cliche.btn_add_photo'] = 'Добавить изображения';
$_lang['cliche.btn_back_to_album_list'] = 'Вернуться к списку альбомов';
$_lang['cliche.btn_back_to_album'] = 'Вернуться к альбому';
$_lang['cliche.btn_browse'] = 'Выбрать...';
$_lang['cliche.btn_delete_album'] = 'Удалить альбом';
$_lang['cliche.btn_delete_image'] = 'Удалить изображение';
$_lang['cliche.btn_edit_image'] = 'Изменить изображение';
$_lang['cliche.btn_options'] = 'Настройки';
$_lang['cliche.btn_save_album'] = 'Сохранить альбом';
$_lang['cliche.btn_save_image'] = 'Сохранить изображение';
$_lang['cliche.btn_set_as_album_cover'] = 'Выбрать обложку альбома';
$_lang['cliche.btn_start_upload'] = 'Начать загрузку';
$_lang['cliche.btn_update_album'] = 'Обновить альбом';

$_lang['cliche.window_create_a_new_album'] = 'Создать новый альбом';
$_lang['cliche.window_delete_album'] = 'Удалить альбом';
$_lang['cliche.window_delete_album_msg'] = 'Все изображения в этом альбоме так же будут удалены. Это действие необратимо.';
$_lang['cliche.window_delete_image'] = 'Удалить изображение';
$_lang['cliche.window_delete_image_msg'] = 'Вы уверены, что хотите удалить изображение? Это действие необратимо.';
$_lang['cliche.window_edit_image'] = 'Изменить изображение';
$_lang['cliche.window_edit_image_msg'] = 'Изменить информацию об изображении';
$_lang['cliche.window_set_as_album_cover'] = 'Установить обложку альбома';
$_lang['cliche.window_set_as_album_cover_msg'] = 'Вы уверены, что хотите установить это изображение обложкой для альбома?';
$_lang['cliche.window_update_album'] = 'Обновить текущий альбом';

$_lang['cliche.upload_cancel_msg'] = 'Отмена';
$_lang['cliche.upload_desc'] = '<h4>Выберите файлы со своего компьютера</h4><p>Вы можете выбрать несколько файлов за раз, удерживая клавишу Shift.</p>';
$_lang['cliche.upload_in_progress'] = 'Идет загрузка...'; 
$_lang['cliche.upload_items_for'] = '<h3>Загрузчик изображений</h3><p>Загрузите новые изображения в альбом <strong>';
$_lang['cliche.upload_ready_msg'] = 'Файлы, готовые для загрузки:';
$_lang['cliche.upload_successful'] = 'Файлы успешно загружены'; 

/* file uploader messages */
$_lang['cliche.album_id_error'] = '[Cliche] Не установлен идентификатор альбома';
$_lang['cliche.already_exist_error'] = '[Cliche] Файл уже существует';
$_lang['cliche.create_temp_dir_error'] = '[Cliche] Не получилось создать временную папку';
$_lang['cliche.empty_file_error'] = '[Cliche] Файлы пусты: ';
$_lang['cliche.file_too_large_error'] = '[Cliche] Файл слишком большой';
$_lang['cliche.increase_post_max_size'] = '[Cliche] Увеличьте директивы post_max_size и upload_max_filesize ';
$_lang['cliche.invalid_extensions_error'] = '[Cliche] Неправильное расширение файла, разрешены только следующие расширения: ';
$_lang['cliche.misc_error'] = '[Cliche] Файл не может быть загружен';
$_lang['cliche.no_file_error'] = '[Cliche] Не выбран ни один файл';
$_lang['cliche.target_dir_error'] = '[Cliche] Не может быть создана папка по адресу : ';
$_lang['cliche.target_dir_write_error'] = '[Cliche] Не получается записать в папку: ';
$_lang['cliche.uploadxhr_error'] = '[Cliche] Не загружается класс UploadFileXhr';
$_lang['cliche.uploadfileform_error'] = '[Cliche] Не загружается класс UploadFileForm из: ';
$_lang['cliche.xpdozip_not_found'] = '[Cliche] xPDOZip не может быть загружен';
$_lang['cliche.zip_error_unpack'] = '[Cliche] Ошибка во время распаковки';

/* Common */
$_lang['cliche.album_empty_col_msg'] = 'Выберите элемент из главной колонки, чтобы посмотреть его описание';
$_lang['cliche.loading'] = '<div class="centered empty-msg">Загрузка...</div>';
$_lang['cliche.no_desc'] = '<em>Нет описания</em>';
$_lang['cliche.no_preview'] = 'Нет обложки';
$_lang['cliche.saving_msg'] = 'Сохраняется, пожалуйста, подождите...';
$_lang['cliche.save_new_order'] = 'Сохранить новый порядок';

/* AlbumSelect TV */
$_lang['cliche.album_management'] = 'Управление альбомом';