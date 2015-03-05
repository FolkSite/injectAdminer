<?php

/**
 * The home manager controller for injectAdminer.
 *
 */
class injectAdminerHomeManagerController extends injectAdminerMainController {
	/* @var injectAdminer $injectAdminer */
	public $injectAdminer;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('injectadminer');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->injectAdminer->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->injectAdminer->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		// $this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/misc/utils.js');
		// $this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		// $this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/widgets/adminer.panel.js');
		$this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "injectadminer-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->injectAdminer->config['templatesPath'] . 'home.tpl';
	}
}