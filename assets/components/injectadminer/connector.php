<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var injectAdminer $injectAdminer */
$injectAdminer = $modx->getService('injectadminer', 'injectAdminer', $modx->getOption('injectadminer_core_path', null, $modx->getOption('core_path') . 'components/injectadminer/') . 'model/injectadminer/');
$modx->lexicon->load('injectadminer:default');

// handle request
$corePath = $modx->getOption('injectadminer_core_path', null, $modx->getOption('core_path') . 'components/injectadminer/');
$path = $modx->getOption('processorsPath', $injectAdminer->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));