<?php
/**
* @package cliche
* @subpackage build
*/
$plugins = array();

$plugins[0]= $modx->newObject('modPlugin');
$plugins[0]->fromArray(array(
    'id' => 1,
    'name' => 'ClicheThumbnail',
    'description' => 'Resource Thumbnail Manager via Cliche 3rd party component',
    'plugincode' => getSnippetContent($sources['plugins'], 'plugin.clichethumbnail'),
),'',true,true);

$events = include $sources['data'].'events/events.clichethumbnail.php';
if (is_array($events) && !empty($events)) {
    $modx->log(modX::LOG_LEVEL_INFO,'<strong>Added '.count($events).' events to ClicheThumbnail plugin.</strong>');
    $plugins[0]->addMany($events);
}
unset($events);

$plugins[1]= $modx->newObject('modPlugin');
$plugins[1]->fromArray(array(
    'id' => 2,
    'name' => 'ClicheAlbumSelect',
    'description' => 'TV select of album connected to Resource',
    'plugincode' => getSnippetContent($sources['plugins'], 'plugin.clichealbumselect'),
),'',true,true);

$events = include $sources['data'].'events/events.clichealbumselect.php';
if (is_array($events) && !empty($events)) {
    $modx->log(modX::LOG_LEVEL_INFO,'<strong>Added '.count($events).' events to ClicheAlbumSelect plugin.</strong>');
    $plugins[1]->addMany($events);
}
unset($events);

return $plugins;