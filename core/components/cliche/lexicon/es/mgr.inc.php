<?php
/**
 * Default Manager Spanish Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */

$_lang['cliche.main_title'] = 'Cliche';

$_lang['cliche.breadcrumb_album_list_desc'] = '<h3>Lista de Álbumes</h3><p>Seleccione un álbum para ver su contenido.</p>';
$_lang['cliche.breadcrumb_root'] = 'Lista de álbumes';
$_lang['cliche.breadcrumb_upload_images'] = 'Subir imágenes';

$_lang['cliche.field_album_name_label'] = 'Nombre del Álbum (obligatorio)';
$_lang['cliche.field_album_desc_label'] = 'Breve descripción';
$_lang['cliche.field_image_name_label'] = 'Nombre de la Imagen (obligatorio)';
$_lang['cliche.field_image_desc_label'] = 'Descripción';

$_lang['cliche.album_list_empty_msg'] = '<h4>No hay álbumes creados</h4><p>Cree su primer álbum usando el botón de arriba, luego haga clic en el elemento recién creado para ver su contenido.<br/>Utilice las rutas de navegación para navegar hacia adelante y hacia atrás en el albums (El elemento verde actual no se puede hacer clic)</p>';
$_lang['cliche.album_list_total_pics'] = '{total} Imágenes';

$_lang['cliche.album_desc'] = '<div class="album-infos"><tpl if="cover_id == 0">
        <span class="no-preview">Sin vista previa</span>
    </tpl>
    <tpl if="cover_id == 0">
        <span class="no-preview"><span>Sin vista previa</span></span>
    </tpl>
    <tpl if="cover_id">
        <tpl if="thumbnail">
            <img src="{thumbnail}" title="Imagen para la portada del álbum {name}" alt="Imagen para la portada del álbum {name}" />
        </tpl>
        <tpl if="!thumbnail">
            <span class="no-preview error"><span><strong>Error</strong>Imagen no encontrada</span></span>
        </tpl>
    </tpl>
    <div class="album-name"><h3>Álbum : <span>{name}</span></h3>
        Creado el <strong>{createdon}</strong> por <strong>{createdby}</strong><br/>
        Ábum id : #<strong>{id}</strong>
    </div>
    <div class="album-meta">
        <span>{total}</span>
        Imágenes
    </div></div>
    <tpl if="description">
    </div><div class="album-desc"><p>{description}</p></tpl>';
$_lang['cliche.album_item_cover_alt_msg'] = '{name} vista previa';
$_lang['cliche.album_item_created_by'] = 'Creado por';
$_lang['cliche.album_item_created_on'] = 'Creado el';
$_lang['cliche.album_item_desc_title'] = 'Descripción';
$_lang['cliche.album_item_empty_msg'] = '<h4>No hay imagen en este álbum</h4><p>Añadir imágenes al hacer clic en el botón verde "Añadir imágenes"</p>';
$_lang['cliche.album_item_id'] = 'ID';
$_lang['cliche.album_item_informations_title'] = 'Información';

$_lang['cliche.btn_add_album'] = 'Añadir Álbum';
$_lang['cliche.btn_add_photo'] = 'Añadir Imágenes';
$_lang['cliche.btn_back_to_album_list'] = 'Volver a la lista de álbumes';
$_lang['cliche.btn_back_to_album'] = 'Volver al álbum';
$_lang['cliche.btn_browse'] = 'Selecciona...';
$_lang['cliche.btn_delete_album'] = 'Eliminar álbum';
$_lang['cliche.btn_delete_image'] = 'Eliminar imagen';
$_lang['cliche.btn_edit_image'] = 'Editar imagen';
$_lang['cliche.btn_options'] = 'Opciones';
$_lang['cliche.btn_save_album'] = 'Guardar Álbum';
$_lang['cliche.btn_save_image'] = 'Guardar Imagen';
$_lang['cliche.btn_set_as_album_cover'] = 'Establecer como portada del álbum';
$_lang['cliche.btn_start_upload'] = 'Iniciar la subida';
$_lang['cliche.btn_update_album'] = 'Actualizar álbum';

$_lang['cliche.window_create_a_new_album'] = 'Crear un nuevo Álbum';
$_lang['cliche.window_delete_album'] = 'Eliminar Álbum';
$_lang['cliche.window_delete_album_msg'] = 'Todas las imágenes de este álbum también se eliminarán. Esta operación es irreversible.';
$_lang['cliche.window_delete_image'] = 'Eliminar imagen';
$_lang['cliche.window_delete_image_msg'] = '¿Estás seguro de que quieres eliminar esta imagen? Esta operación es irreversible.';
$_lang['cliche.window_edit_image'] = 'Edita tu Imagen';
$_lang['cliche.window_edit_image_msg'] = 'Edita las información de tu imagen';
$_lang['cliche.window_set_as_album_cover'] = 'Establecer como portada';
$_lang['cliche.window_set_as_album_cover_msg'] = '¿Desea establecer esta imagen como portada del álbum?';
$_lang['cliche.window_update_album'] = 'Actualizar álbum actual';
$_lang['cliche.window_reorder_album'] = 'Reordenar Álbum';
$_lang['cliche.window_reorder_album_msg'] = '¿Está seguro de que desea reordenar este elemento de álbum?';

$_lang['cliche.upload_cancel_msg'] = 'Cancelar';
$_lang['cliche.upload_desc'] = '<h4>Seleccionar archivos de su ordenador</h4><p>Puede seleccionar varios archivos a la vez manteniendo pulsada la tecla May&uuml;scula.</p>';
$_lang['cliche.upload_in_progress'] = 'Subida en progreso...';
$_lang['cliche.upload_items_for'] = '<h3>Subir imágenes</h3><p>Subir nuevas imágenes al álbum <strong>';
$_lang['cliche.upload_ready_msg'] = 'Archivos listos para subir :';
$_lang['cliche.upload_successful'] = 'Archivos subidos correctamente';

/* file uploader messages */
$_lang['cliche.album_id_error'] = '[Cliche] Id de álbum no especificado';
$_lang['cliche.already_exist_error'] = '[Cliche] Archivo ya existe';
$_lang['cliche.create_temp_dir_error'] = '[Cliche] No se pudo crear el directorio temporal';
$_lang['cliche.empty_file_error'] = '[Cliche] El archivo parece estar vacío : ';
$_lang['cliche.file_too_large_error'] = '[Cliche] El archivo es demasiado grande';
$_lang['cliche.increase_post_max_size'] = '[Cliche] Aumenta el tamaño de post_max_size y upload_max_filesize a ';
$_lang['cliche.invalid_extensions_error'] = '[Cliche] Extensión de archivo no válida, solo se aceptan las siguientes extensiones : ';
$_lang['cliche.misc_error'] = '[Cliche] No se pudo cargar el archivo';
$_lang['cliche.no_file_error'] = '[Cliche] No se ha cargado ningún archivo';
$_lang['cliche.target_dir_error'] = '[Cliche] No se pudo crear el directorio destino en : ';
$_lang['cliche.target_dir_write_error'] = '[Cliche] No se pudo escribir en el directorio : ';
$_lang['cliche.uploadxhr_error'] = '[Cliche] No se pudo cargar la clase auxiliar UploadFileXhr';
$_lang['cliche.uploadfileform_error'] = '[Cliche] No se pudo cargar la clase auxiliar UploadFileForm de : ';
$_lang['cliche.xpdozip_not_found'] = '[Cliche] No se pudo cargar xPDOZip';
$_lang['cliche.zip_error_unpack'] = '[Cliche] Error al desempaquetar';

/* Common */
$_lang['cliche.album_empty_col_msg'] = 'Seleccione un elemento de la columna principal para ver su descripción';
$_lang['cliche.loading'] = '<div class="centered empty-msg">Cargando...</div>';
$_lang['cliche.no_desc'] = '<em>Sin descripción</em>';
$_lang['cliche.no_preview'] = 'Sin vista previa';
$_lang['cliche.saving_msg'] = 'Guardando, por favor Espera...';
$_lang['cliche.save_new_order'] = 'Guardar nuevo orden';

/* AlbumSelect TV */
$_lang['cliche.album_management'] = 'Administrar álbum';