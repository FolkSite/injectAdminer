<?php
/**
 * @var modX $modx
 * @var modTemplate $template
 * @var modResource $resource
 */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
	case xPDOTransport::ACTION_INSTALL:
	case xPDOTransport::ACTION_UPGRADE:
		$modx = & $object->xpdo;

		// Добавляем страницу на основе шаблона
		// if ($template = $modx->getObject('modTemplate', array('templatename' => 'injectAdminerTemplate'))) {
		// 	if (!$resource = $modx->getObject('modResource', array('alias' => 'injectadminerpage'))) {
		// 		$resource = $modx->newObject('modResource');
		// 	}
		// 	$resource->fromArray(array(
		// 		'pagetitle' => 'Пример страницы',
		// 		'published' => 1,
		// 		'parent' => 0,
		// 		'richtext' => 0,
		// 		'searchable' => 0,
		// 		'cacheable' => 0,
		// 		'hidemenu' => 1,
		// 		'show_in_tree' => 0,
		// 		'menuindex' => 100,
		// 		'alias' => 'reorders',
		// 		'template' => $template->id,
		// 		'content' => file_get_contents(MODX_CORE_PATH . 'components/injectadminer/elements/pages/injectadminerpage.html')
		// 	));
		// 	$resource->save();
		// }


		break;

	case xPDOTransport::ACTION_UNINSTALL:
		break;
}
return true;