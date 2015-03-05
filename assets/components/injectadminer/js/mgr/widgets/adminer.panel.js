/**
 * Loads the panel for Adminer
 *
 * @class injectAdminer.panel.Adminer
 * @extends MODx.FormPanel
 * @param {Object} config An object of configuration properties
 * @xtype injectadminer-panel-adminer
 */
injectAdminer.panel.Adminer = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'injectadminer-panel-adminer',
		title: _('injectadminer_adminer_tab'),
        bodyStyle: '',
        defaults: { collapsible: false ,autoHeight: true },
        items: [{
            html: '<iframe style="overflow:auto;width:100%;height:650px;" frameborder="0"  src="'+injectAdminer.config.adminerUrl +'"</iframe>',
            border: false,
            cls: 'modx-page-header',
            id: 'injectadminer-adminer-adminer',
         }]
    });
    injectAdminer.panel.Adminer.superclass.constructor.call(this,config);
};
Ext.extend(injectAdminer.panel.Adminer,MODx.FormPanel);
Ext.reg('injectadminer-panel-adminer',injectAdminer.panel.Adminer);
