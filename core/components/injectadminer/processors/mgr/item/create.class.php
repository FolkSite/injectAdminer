<?php

/**
 * Create an Item
 */
class injectAdminerItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'injectAdminerItem';
	public $classKey = 'injectAdminerItem';
	public $languageTopics = array('injectadminer');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('injectadminer_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('injectadminer_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'injectAdminerItemCreateProcessor';