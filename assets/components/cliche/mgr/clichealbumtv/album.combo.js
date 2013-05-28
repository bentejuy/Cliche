MODx.combo.ClicheAlbum = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        name: 'clichealbum'
        ,baseParams: {
            action: 'mgr/albums/getlist'
        }
        ,hiddenName: 'clichealbum'
        ,displayField: 'name'
        ,valueField: 'id'
        ,pageSize: 20
        ,fields: ['id','name']
        ,tpl: new Ext.XTemplate('<tpl for="."><div class="x-combo-list-item"><span style="font-weight: bold">{name}</span></div></tpl>')
        ,url: MODx.config.assets_url+'components/cliche/mgr/clichealbumtv/connector.php'
        ,listWidth: 350
        ,allowBlank: true
    });
    MODx.combo.ClicheAlbum.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.ClicheAlbum,MODx.combo.ComboBox);
Ext.reg('modx-combo-clichealbum',MODx.combo.ClicheAlbum);