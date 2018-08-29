<?php
class AdminCristyModuleController extends ModuleAdminController
{
    public $ssl = true;

	public function __construct()
	{
        $this->display = 'view';
        parent::__construct();
        $this->context = Context::getContext();
        //$this->meta_title = $this->l('Title');
        //$this->toolbar_title[] = $this->meta_title;
	}

	public function initContent()
	{
		parent::initContent();
        $this->context->smarty->assign(array());
        //$this->setTemplate('displayview.tpl');
        $this->renderView();
    }
    
    public function renderView() {
        parent::renderView();
        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).
            '/../../views/templates/admin/cristy_module/displayview.tpl');
        return $tpl->fetch();
    }

    public function renderList()
    {
        return parent::renderList();
    }
}
?>