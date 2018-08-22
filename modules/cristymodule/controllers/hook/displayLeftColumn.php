<?php

class CristyModuleDisplayLeftColumnController
{

    public function __construct($module, $file, $path)
    {
        $this->file = $file;
        $this->module = $module;
        $this->context = Context::getContext();
        $this->_path = $path;
    }

    public function hookDisplayLeftColumn($params)
	{
		$this->context->smarty->assign(
			array(
				'my_module_name' => Configuration::get('CRISTY_MODULE'),
				'my_module_link' => $this->context->link->getModuleLink('cristymodule', 'display')
			)
		);
		return $this->module->display($this->file, 'cristymodule.tpl');
    }
    
    public function run($params) {
        return $this->hookDisplayLeftColumn($params);
    }
}

?>