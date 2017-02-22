<?php
/**
 * Default English Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */
/* System settings */
$_lang['setting_cliche.upload_size_limit'] = 'Límite de tamaño de subida';
$_lang['setting_cliche.upload_size_limit_desc'] = 'Máximo tamaño de archivo para subir';

$_lang['setting_cliche.upload_allowed_extensions'] = 'Extensiones permitidas';
$_lang['setting_cliche.upload_allowed_extensions_desc'] = 'Se permite una lista de extensiones separada por comas para los tipos de archivo';

/* Top Menu */

$_lang['cliche'] = 'Cliche, Administrador de álbumes';
$_lang['cliche.menu'] = 'Cliche';
$_lang['cliche.menu_desc'] = 'Un gestor de medios para MODx Revolution.';

$_lang['setting_cliche.album_mgr_panels'] = 'Paneles de Administrador de álbumes';
$_lang['setting_cliche.album_mgr_panels_desc'] = 'Lista de paneles a cargar en el panel del administrador';

/* file uploader */
$_lang['cliche.album_id_error'] = '[Cliche] Álbum id no especifidado';
$_lang['cliche.already_exist_error'] = '[Cliche]  Archivo ya existe';
$_lang['cliche.create_temp_dir_error'] = '[Cliche] No se pudo crear el directorio temporal';
$_lang['cliche.db_save_item_error'] = '[Cliche] No se pudo guardar el elemento "[[+filename]]" en la base de datos';
$_lang['cliche.empty_file_error'] = '[Cliche] El archivo parece estar vacío : ';
$_lang['cliche.file_too_large_error'] = '[Cliche] El archivo es demasiado grande';
$_lang['cliche.increase_post_max_size'] = '[Cliche] Tu límite de tama&ntilde;o de subida se establecida en: [[+size]], necesitas aumentar la directiva php "<em>post_max_size</em>" (actualmente es [[+directive]))';
$_lang['cliche.increase_upload_max_filesize'] = '[Cliche] Su límite de tama&ntilde;o de subida esta establecida en: [[+size]], necesita aumentar la directiva php "<em>upload_max_filesize</em>" (actualmente es [[+directive]))';
$_lang['cliche.invalid_extensions_error'] = '[Cliche] Extensión de archivo no válida, solo se aceptan las siguientes extensiones : ';
$_lang['cliche.misc_error'] = '[Cliche] No se pudo cargar el archivo';
$_lang['cliche.no_file_error'] = '[Cliche] No se ha cargado ningún archivo';
$_lang['cliche.target_dir_error'] = '[Cliche] No se pudo crear el directorio destino en : ';
$_lang['cliche.target_dir_write_error'] = '[Cliche] No se pudo escribir en el directorio : ';
$_lang['cliche.uploadxhr_error'] = '[Cliche] No se pudo cargar la clase auxiliar UploadFileXhr';
$_lang['cliche.uploadfileform_error'] = '[Cliche] No se pudo cargar la clase auxiliar UploadFileForm de : ';
$_lang['cliche.image_upload_success_msg'] = 'Imagen cargada correctamente';
$_lang['cliche.upload_zip_success'] = 'Archivo ZIP cargado correctamente - [[+ count]] imágenes creadas';
$_lang['cliche.xpdozip_not_found'] = '[Cliche] No se pudo cargar xPDOZip';
$_lang['cliche.zip_error_unpack'] = '[Cliche] Error al desempaquetar';

/* Processors */
$_lang['cliche.album_created_succesfully'] = 'Álbum creado correctamente';
$_lang['cliche.album_deleted_successfully'] = 'Álbum y elementos eliminados correctamente';
$_lang['cliche.album_not_found'] = '[Cliche] Álbum no encontrado<br/>';
$_lang['cliche.album_not_specified'] = '[Cliche] Álbum no especificado<br/>';
$_lang['cliche.album_udpated_succesfully'] = 'Álbum actualizado correctamente';
$_lang['cliche.error_album_create_name_already_taken'] = 'El nombre del álbum ya existe. Elige otro nombre';
$_lang['cliche.error_album_delete_cancelled'] = 'Error - No se pudo eliminar el álbum. Operación cancelada, póngase en contacto con el webmaster';
$_lang['cliche.error_album_delete_no_id'] = 'Error - La Id del álbum era falsa o no se envío';
$_lang['cliche.error_delete_item_aborted'] = 'Error - No se pudo eliminar el elemento - Operación cancelada, póngase en contacto con el webmaster';
$_lang['cliche.error_delete_item_no_id'] = 'Error - El id del elemento era falso o no se envío';
$_lang['cliche.error_album_not_created'] = 'No se pudo crear el álbum';
$_lang['cliche.item_deleted_succesfully'] = 'Elemento elimindado correctamente';
$_lang['cliche.item_not_found'] = '[Cliche] Elemento no encontrado<br/>';
$_lang['cliche.item_not_specified'] = '[Cliche] Elemento no especificado<br/>';
$_lang['cliche.item_set_as_cover_succesfully'] = 'Imagen establecida como portada del álbum correctamente';
$_lang['cliche.no_albums'] = '[Cliche] No hay álbumes creados aún<br/>';