<?php

if(!class_exists('ClicheAlbumSelectInputRender')) {
    class ClicheAlbumSelectInputRender extends modTemplateVarInputRender {

        public function getLexiconTopics() {
            return array('cliche:mgr');
        }

        public function getTemplate() {
            $this->setPlaceholder('action',$this->modx->request->getActionIDs(array('index'), 'cliche')['index']);
            return $this->modx->getOption('core_path').'components/cliche/elements/tv/clichealbumselect.tpl';
        }

        public function process($value,array $params = array()) {
            $this->modx->controller->addLastJavascript($this->modx->getOption('assets_url') . "components/cliche/mgr/clichealbumtv/album.combo.js");
        }
    }
}
return 'ClicheAlbumSelectInputRender';