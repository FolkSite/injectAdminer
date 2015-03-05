var injectAdminer = function (config) {
	config = config || {};
    // Ext.applyIf(config,{
    //     base_url: MODx.config.assets_url+'components/injectadminer/',
    //     // connector_url: MODx.config.assets_url+'components/injectadminer/connector.php',
    //     // core_path : MODx.config.core_path,
    //     adminer_url: MODx.config.base_url +'core/injectadminer/extras/adminer',
    //     });
	injectAdminer.superclass.constructor.call(this, config);
};
Ext.extend(injectAdminer, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('injectadminer', injectAdminer);

injectAdminer = new injectAdminer();
