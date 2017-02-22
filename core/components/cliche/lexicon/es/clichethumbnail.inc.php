<?php
/**
 * Default English Lexicon Entries for ClicheThumbnail
 *
 * @package cliche
 * @subpackage lexicon
 */

$_lang['clichethumbnail.main_default_text'] = '<h4>Haga clic en el botón de arriba para seleccionar una imagen</h4>La vista previa de la imagen seleccionada reemplazará este texto';
$_lang['clichethumbnail.main_your_preview'] = 'Vista previa de miniaturas';

$_lang['clichethumbnail.window_title'] = 'Administrador de miniaturas';

$_lang['clichethumbnail.breadcrumb_album'] = 'Navegador del álbum';
$_lang['clichethumbnail.breadcrumb_crop'] = 'Recortar imagen';
$_lang['clichethumbnail.breadcrumb_crop_desc'] = '<h3>Herramienta de recorte</h3><p>Utilice la imagen de la izquierda (tamaño original) para ajustar la selección a la miniatura de la derecha (vista previa en miniatura)</p>';
$_lang['clichethumbnail.breadcrumb_root'] = 'Lista de álbumes';
$_lang['clichethumbnail.breadcrumb_root_desc'] = '<h3>Vista previa de miniaturas</h3><p>Selecciona una imagen del álbum dedicado</p>';
$_lang['clichethumbnail.breadcrumb_root_desc_with_thumb'] = '<h3>Vista previa de miniaturas</h3><p>Puede seleccionar una parte específica de la imagen haciendo clic en el botón "Recortar imagen"</p>';
$_lang['clichethumbnail.breadcrumb_upload'] = 'Añade imagenes';

$_lang['clichethumbnail.btn_add_photo'] = 'Añade Imagenes';
$_lang['clichethumbnail.btn_back_to_album'] = 'Volver al álbum';
$_lang['clichethumbnail.btn_back_to_main'] = 'Volver al panel principal';
$_lang['clichethumbnail.btn_browse'] = 'Selecciona...';
$_lang['clichethumbnail.btn_browse_album'] = 'Selecciona álbum';
$_lang['clichethumbnail.btn_crop_thumbnail'] = 'Recorta Imagen';
$_lang['clichethumbnail.btn_crop_validate'] = 'Registrar los cambios';
$_lang['clichethumbnail.btn_replace_thumbnail'] = 'Seleccionar otra imagen';
$_lang['clichethumbnail.btn_remove_thumbnail'] = 'Reiniciar';
$_lang['clichethumbnail.btn_select_image'] = 'Selecciona esta imagen';
$_lang['clichethumbnail.btn_start_upload'] = 'Iniciar subida';

$_lang['clichethumbnail.main_empty_msg'] = '<h4>No hay una miniatura todavía para este documento</p>';

$_lang['clichethumbnail.album_desc'] = '<div class="album-infos"><tpl if="cover_id == 0">
        <span class="no-preview">Sin vista previa</span>
    </tpl>
    <tpl if="cover_id">
        <tpl if="thumbnail">
            <img src="{thumbnail}" title="Imagen de la portada para el álbum {name} "alt =" imagen de la portada para el álbum {name}" />
        </tpl>
        <tpl if="!thumbnail">
            <span class="no-preview error"><strong>Error</strong>Imagen no encontrada</span>
        </tpl>
    </tpl>
    <div class="album-name"><h3>Álbum : <span>{name}</span></h3>
        Creado el <strong>{createdon}</strong> por <strong>{createdby}</strong><br/>
        Álbum id : #<strong>{id}</strong>
    </div>
    <div class="album-meta">
        <span>{total}</span>
        Imágenes
    </div></div>
    <tpl if="description">
    </div>
    <div class="album-desc">
        <p class="ct_info">Este álbum está reservado para cliché. No se puede editar ni eliminar de este panel.<br/>
        Sin embargo, todavía puede cargar imágenes que se utilizarán para la variable de plantilla adjunta.
        </p>
    </tpl>';
$_lang['clichethumbnail.album_empty_msg'] = '<h4>No hay imágenes en este álbum </h4><p>Cargar imágenes haciendo clic en "Añadir imágenes"</p>';
$_lang['clichethumbnail.album_loading'] = '<div class="centered empty-msg">Cargando...</div>';

$_lang['clichethumbnail.image_cover_alt_msg'] = '{name} vista previa';
$_lang['clichethumbnail.image_created_by'] = 'Creado por';
$_lang['clichethumbnail.image_created_on'] = 'Creado el';
$_lang['clichethumbnail.image_desc_title'] = 'Descripción';
$_lang['clichethumbnail.image_informations_title'] = 'Información';
$_lang['cliche.image_unselected_msg'] = '<div class="empty-msg">Seleccione una imagen de la columna principal para ver su descripción</div>';
$_lang['clichethumbnail.image_no_desc'] = '<em>Sin descripción</em>';
$_lang['clichethumbnail.image_no_preview'] = 'Sin vista previa';

$_lang['clichethumbnail.upload_cancel'] = 'Cancelar';
$_lang['clichethumbnail.upload_desc'] = '<h4>Selecciona archivos desde su ordenador</h4><p>Puede seleccionar varios archivos a la vez manteniendo pulsada la tecla Mayúscula.</p>';
$_lang['clichethumbnail.upload_in_progress'] = 'Carga en progreso...';
$_lang['clichethumbnail.upload_ready_msg'] = 'Archivos listos para subir :';

$_lang['clichethumbnail.cropper_empty_msg'] = '<h4>Cargando...</p>';