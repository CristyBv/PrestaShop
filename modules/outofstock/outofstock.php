<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Filter\HashMapWhitelistFilter;

class OutOfStock extends Module {

    public function __construct() {

		// need_instance. Indicates whether to load the module’s class when displaying the “Modules” page in the back office. If set at 0, the module will not be loaded, and therefore will spend less resources to generate the “Modules” page. If your module needs to display a warning message in the “Modules” page, then you must set this attribute to 1.
		// ps_versions_compliancy. Indicates which version of PrestaShop this module is compatible with. In the example above, we explicitly write that this module will only work with PrestaShop 1.5.x, and no other major version.
		// bootstrap. Indicates that the module’s template files have been built with PrestaShop 1.6’s bootstrap tools in mind – and therefore, that PrestaShop should not try to wrap the template code for the configuration screen (if there is one) with helper tags.

        $this->name = 'outofstock';
        $this->author = 'CristyBv';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
		$this->need_instance = 0;
		$this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Out of Stock', array(), 'Modules.Pagesnotfound.Admin');
		$this->description = $this->trans('Out of Stock...', array(), 'Modules.Pagesnotfound.Admin');
		$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
		
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	}
    
	public function install()
	{	
		// Check that the Multistore feature is enabled, and if so, set the current context to all shops on this installation of PrestaShop.
		if (Shop::isFeatureActive())
			Shop::setContext(Shop::CONTEXT_ALL);

		if (!parent::install() ||
		 //!Configuration::updateValue('ADD_CATEGORY_TO_SEARCH', 1) ||
		 !$this->registerHook('displayAdminProductsMainStepLeftColumnBottom') ||
		 !$this->registerHook('displayHeader') ||
		 !$this->registerHook('actionProductUpdate') ||
		 !$this->registerhook('displayProductPriceBlock')
		 )
			return false;			
		return Db::getInstance()->execute(
				'CREATE TABLE `'._DB_PREFIX_.'out_of_stock` (
				id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
				id_product INT(10) unsigned NOT NULL,
				date_add DATETIME NOT NULL,
				PRIMARY KEY(id),
				INDEX (`date_add`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;'
			);
	}

	public function uninstall()
	{
		if (!parent::uninstall() || !Configuration::deleteByName('ADD_CATEGORY_TO_SEARCH'))
			return false;
		return Db::getInstance()->execute('DROP TABLE `'._DB_PREFIX_.'out_of_stock`');
	}

	public function hookDisplayAdminProductsMainStepLeftColumnBottom($params) {
		$product_id = $params['id_product'];
		$out_of_stock = Db::getInstance()->executeS('SELECT * from `'._DB_PREFIX_.'out_of_stock` where `id_product` = '.$product_id);
		if($out_of_stock)
			$this->context->smarty->assign('out_of_stock', true);
		else $this->context->smarty->assign('out_of_stock', false);
		return $this->display(__FILE__, 'displayCheckBox.tpl');
	}

	public function hookDisplayHeader()
	{
		$this->context->controller->addCSS($this->_path.'css/outofstockmodule.css', 'all');
	}

	public function hookActionProductUpdate($params) {
		$product_id = $params['id_product'];
		if(Tools::getValue('outofstock')) Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'out_of_stock` (`id_product`) VALUES ('. $product_id .') ');
		else Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'out_of_stock` WHERE `id_product` ='. $product_id);
		die;
	}

	public function hookDisplayProductPriceBlock($params) {		
		$product_id = $params['product']['id_product'];
		$out_of_stock = Db::getInstance()->executeS('SELECT * from `'._DB_PREFIX_.'out_of_stock` where `id_product` = '.$product_id);
		if($out_of_stock)
			$this->context->smarty->assign('out_of_stock', true);
		else $this->context->smarty->assign('out_of_stock', false);
		return $this->display(__FILE__, 'displayProductOutOfStock.tpl');
	}
}

