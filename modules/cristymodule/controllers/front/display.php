<?php
class CristyModuleDisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:cristymodule/views/templates/front/display.tpl');
  }
}
?>