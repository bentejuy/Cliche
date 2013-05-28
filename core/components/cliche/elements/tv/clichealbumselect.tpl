<select id="tv{$tv->id}" name="tv{$tv->id}" class="combobox"></select>
<script type="text/javascript">
    // <![CDATA[
    {literal}
    MODx.load({
        {/literal}
        xtype: 'modx-combo-clichealbum'
        ,name: 'tv{$tv->id}'
        ,hiddenName: 'tv{$tv->id}'
        ,transform: 'tv{$tv->id}'
        ,id: 'tv{$tv->id}'
        ,width: 300
        ,value: '{$tv->value}'
        {literal}
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    {/literal}
    // ]]>
</script>
<div class="x-btn cliche-btn">
    <a target="_blank" class="x-btn-text cliche-text" href="{$modx->getOption('manager_url')}?a={$action}&album={$tv->value}">
        {$modx->lexicon('cliche.album_management')}
    </a>
</div>
<style>
    {literal}
    .cliche-btn {width:132px; padding: 8px; margin-top: 10px}
    .cliche-text {color: #53595F; font: bold 11px tahoma,verdana,helvetica,sans-serif; outline: 0 none; text-shadow: 0 1px 0 #FCFCFC; text-decoration:none}
    {/literal}
</style>
