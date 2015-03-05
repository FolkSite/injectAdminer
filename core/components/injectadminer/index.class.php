<?php

/**
 * Class injectAdminerMainController
 */
abstract class injectAdminerMainController extends modExtraManagerController {
	/** @var injectAdminer $injectAdminer */
	public $injectAdminer;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('injectadminer_core_path', null, $this->modx->getOption('core_path') . 'components/injectadminer/');
		require_once $corePath . 'model/injectadminer/injectadminer.class.php';

		$this->injectAdminer = new injectAdminer($this->modx);
		$this->addCss($this->injectAdminer->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->injectAdminer->config['jsUrl'] . 'mgr/injectadminer.js');
		$this->addHtml('
		<script type="text/javascript">
			injectAdminer.config = ' . $this->modx->toJSON($this->injectAdminer->config) . ';
			injectAdminer.config.connector_url = "' . $this->injectAdminer->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('injectadminer:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends injectAdminerMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}