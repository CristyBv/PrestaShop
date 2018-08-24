<?php
class CristyModuleHistoryModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->context->smarty->assign(['my_history_list' => $this->getHistoryList()]);
    $this->setTemplate('module:cristymodule/views/templates/front/history.tpl');
  }

  public function getHistoryList() {
      return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'cristy_module` ORDER BY `date_add`');
  }

  public function setMedia()
  {
    // We call the parent method
    parent::setMedia();
    // Save the module path in a variable
    $this->path = __PS_BASE_URI__.'modules/cristymodule/';
    // Include the module CSS and JS files needed
    $this->context->controller->addCSS($this->path.'css/history.css', 'all');
    $this->context->controller->addJS($this->path.'js/history.js');
  }
}
?>