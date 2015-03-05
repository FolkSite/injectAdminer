injectAdminer.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'injectadminer-panel-home', renderTo: 'injectadminer-panel-home-div'
		}]
	});
	injectAdminer.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(injectAdminer.page.Home, MODx.Component);
Ext.reg('injectadminer-page-home', injectAdminer.page.Home);
