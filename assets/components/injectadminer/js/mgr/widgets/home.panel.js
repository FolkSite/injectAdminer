injectAdminer.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'injectAdminer-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			html: '<h2>Полезные утилиты</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			bodyStyle: 'padding: 10px',
			border: true,
			hideMode: 'offsets',
			items: [{
				title: _('injectadminer_adminer'),
				items: [{
					html: _('injectadminer_adminer_tab'),
					border: false,
					bodyCssClass: 'panel-desc',
					bodyStyle: 'margin-bottom: 10px',
				},{
					xtype: 'injectadminer-panel-adminer',
				}
				]
			}]
		}]
	});
	injectAdminer.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(injectAdminer.panel.Home, MODx.Panel);
Ext.reg('injectadminer-panel-home', injectAdminer.panel.Home);
