<?php
class CristyModuleHistoryModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    dump($this->context->cookie);
    $this->context->smarty->assign(['my_history_list' => $this->getHistoryList()]);
    $this->setTemplate('module:cristymodule/views/templates/front/history.tpl');
  }

  public function getHistoryList() {
      return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'cristy_module` ORDER BY `date_add`');
  }
}
?>