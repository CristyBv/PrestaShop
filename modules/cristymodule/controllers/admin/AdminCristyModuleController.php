<?php
class AdminCristyModuleController extends ModuleAdminController
{
    public $ssl = true;

	public function __construct()
	{
        $this->display = 'view';
        parent::__construct();
		$this->context = Context::getContext();
	}

	public function initContent()
	{
		parent::initContent();
        $this->context->smarty->assign(array());
        $this->createTemplate('displayview.tpl')->fetch();
        //$this->setTemplate('module:cristymodule/views/templates/front/display.tpl');
    }
    
    public function renderView() {
        return parent::renderView();
    }

    public function renderList()
    {
        return parent::renderList();
    }
}
?>