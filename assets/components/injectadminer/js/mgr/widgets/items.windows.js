injectAdminer.window.CreateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'injectadminer-item-window-create';
	}
	Ext.applyIf(config, {
		title: _('injectadminer_item_create'),
		width: 550,
		autoHeight: true,
		url: injectAdminer.config.connector_url,
		action: 'mgr/item/create',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	injectAdminer.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(injectAdminer.window.CreateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'textfield',
			fieldLabel: _('injectadminer_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('injectadminer_item_description'),
			name: 'description',
			id: config.id + '-description',
			height: 150,
			anchor: '99%'
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('injectadminer_item_active'),
			name: 'active',
			id: config.id + '-active',
			checked: true,
		}];
	}

});
Ext.reg('injectadminer-item-window-create', injectAdminer.window.CreateItem);


injectAdminer.window.UpdateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'injectadminer-item-window-update';
	}
	Ext.applyIf(config, {
		title: _('injectadminer_item_update'),
		width: 550,
		autoHeight: true,
		url: injectAdminer.config.connector_url,
		action: 'mgr/item/update',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	injectAdminer.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(injectAdminer.window.UpdateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'hidden',
			name: 'id',
			id: config.id + '-id',
		}, {
			xtype: 'textfield',
			fieldLabel: _('injectadminer_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('injectadminer_item_description'),
			name: 'description',
			id: config.id + '-description',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('injectadminer_item_active'),
			name: 'active',
			id: config.id + '-active',
		}];
	}

});
Ext.reg('injectadminer-item-window-update', injectAdminer.window.UpdateItem);