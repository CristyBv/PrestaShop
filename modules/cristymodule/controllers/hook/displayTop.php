<?php

class CristyModuleDisplayTopController
{
    public function __construct($module, $file, $path)
    {
        $this->file = $file;
        $this->module = $module;
        $this->context = Context::getContext();
        $this->_path = $path;
    }

    public function hookDisplayTop($params)
	{
		$this->context->smarty->assign(
			array(
                'my_module_link' => $this->context->link->getModuleLink('cristymodule', 'history'),                
			)
		);
		return $this->module->display($this->file, 'cristymodule_history.tpl');
    }
    
    public function run($params) {
        return $this->hookDisplayTop($params);
    }
}

?>