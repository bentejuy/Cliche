<?php
/**
 * Default Russian Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */
/* System settings */
$_lang['setting_cliche.upload_size_limit'] = 'Лимит размера файла';
$_lang['setting_cliche.upload_size_limit_desc'] = 'Максимальный размер файла для загрузки';

$_lang['setting_cliche.upload_allowed_extensions'] = 'Разрешенные Расширения';
$_lang['setting_cliche.upload_allowed_extensions_desc'] = 'Список разрешенных для загрузки расширений файлов, разделенных запятыми';
 
/* Top Menu */

$_lang['cliche'] = 'Cliche, Менеджер альбомов';
$_lang['cliche.menu'] = 'Cliche';
$_lang['cliche.menu_desc'] = 'Медиа менеджер для MODX Revolution.';

$_lang['setting_cliche.album_mgr_panels'] = 'Панели Менеджера Альбомов';
$_lang['setting_cliche.album_mgr_panels_desc'] = 'Список панелей для загрузки на панели менеджера';

/* file uploader */
$_lang['cliche.album_id_error'] = '[Cliche] Не установлен идентификатор альбома';
$_lang['cliche.already_exist_error'] = '[Cliche] Файл уже существует';
$_lang['cliche.create_temp_dir_error'] = '[Cliche] Не получилось создать временную папку';
$_lang['cliche.db_save_item_error'] = '[Cliche] Не получилось сохранить элемент "[[+filename]]" в базе данных';
$_lang['cliche.empty_file_error'] = '[Cliche] Файл пуст : ';
$_lang['cliche.file_too_large_error'] = '[Cliche] Файл слишком большой';
$_lang['cliche.increase_post_max_size'] = '[Cliche] Ваш лимит размера файла задан на: [[+size]], вам нужно увеличить php директиву "<em>post_max_size</em>" (текущее значение [[+directive]])';
$_lang['cliche.increase_upload_max_filesize'] = '[Cliche] Ваш лимит размера файла задан на:: [[+size]], вам нужно увеличить php директиву "<em>upload_max_filesize</em>" (текущее значение [[+directive]])';
$_lang['cliche.invalid_extensions_error'] = '[Cliche] Неправильное расширение файла, разрешены только следующие расширения: ';
$_lang['cliche.misc_error'] = '[Cliche] Файл не может быть загружен';
$_lang['cliche.no_file_error'] = '[Cliche] Ни один файл не был загружен';
$_lang['cliche.target_dir_error'] = '[Cliche] Не получилось создать папку в : ';
$_lang['cliche.target_dir_write_error'] = '[Cliche] Не получилось записать в папку: ';
$_lang['cliche.uploadxhr_error'] = '[Cliche] Не загружается класс UploadFileXhr';
$_lang['cliche.uploadfileform_error'] = '[Cliche] Не загружается класс UploadFileForm из: ';
$_lang['cliche.image_upload_success_msg'] = 'Изображение успешно загружено'; 
$_lang['cliche.upload_zip_success'] = 'Zip файл успешно загружен - [[+count]] изображений создано';
$_lang['cliche.xpdozip_not_found'] = '[Cliche] xPDOZip не загружается';
$_lang['cliche.zip_error_unpack'] = '[Cliche] Ошибка во время распаковки';

/* Processors */
$_lang['cliche.album_created_succesfully'] = 'Альбом успешно создан';
$_lang['cliche.album_deleted_successfully'] = 'Альбом и изображения успешно удалены';
$_lang['cliche.album_not_found'] = '[Cliche] Альбом не найден<br/>';
$_lang['cliche.album_not_specified'] = '[Cliche] Альбом не выбран<br/>';
$_lang['cliche.album_udpated_succesfully'] = 'Альбом успешно обновлен';
$_lang['cliche.error_album_create_name_already_taken'] = 'Такое имя альбома уже есть. Выберите другое';
$_lang['cliche.error_album_delete_cancelled'] = 'Ошибка - Альбом не может быть удален. Операция отменена, пожалуйста, свяжитесь с вебмастером';
$_lang['cliche.error_album_delete_no_id'] = 'Ошибка - Неправильный Идентификатор альбома';
$_lang['cliche.error_delete_item_aborted'] = 'Ошибка - Изображение не может быть удалено. Операция отменена, пожалуйста, свяжитесь с вебмастером';
$_lang['cliche.error_delete_item_no_id'] = 'Ошибка - Неправильный Идентификатор изображения';
$_lang['cliche.error_album_not_created'] = 'Нельзя создать альбом';
$_lang['cliche.item_deleted_succesfully'] = 'Изображение успешно удалено';
$_lang['cliche.item_not_found'] = '[Cliche] Изображение не найдено<br/>';
$_lang['cliche.item_not_specified'] = '[Cliche] Изображение не выбрано<br/>';
$_lang['cliche.item_set_as_cover_succesfully'] = 'Изображение успешно установлено обложкой альбома';
$_lang['cliche.no_albums'] = '[Cliche] Еще не создано ни одного альбома<br/>';