<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Filter\HashMapWhitelistFilter;

class AddCategoryToSearch extends Module {

    public function __construct() {

		// need_instance. Indicates whether to load the module’s class when displaying the “Modules” page in the back office. If set at 0, the module will not be loaded, and therefore will spend less resources to generate the “Modules” page. If your module needs to display a warning message in the “Modules” page, then you must set this attribute to 1.
		// ps_versions_compliancy. Indicates which version of PrestaShop this module is compatible with. In the example above, we explicitly write that this module will only work with PrestaShop 1.5.x, and no other major version.
		// bootstrap. Indicates that the module’s template files have been built with PrestaShop 1.6’s bootstrap tools in mind – and therefore, that PrestaShop should not try to wrap the template code for the configuration screen (if there is one) with helper tags.

        $this->name = 'addcategorytosearch';
        $this->author = 'CristyBv';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
		$this->need_instance = 0;
		$this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Add Category To Search', array(), 'Modules.Pagesnotfound.Admin');
		$this->description = $this->trans('Add category to search bar', array(), 'Modules.Pagesnotfound.Admin');
		$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
		
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
	}
    
	public function install()
	{	
		// Check that the Multistore feature is enabled, and if so, set the current context to all shops on this installation of PrestaShop.
		if (Shop::isFeatureActive())
			Shop::setContext(Shop::CONTEXT_ALL);

		if (!parent::install() || !Configuration::updateValue('ADD_CATEGORY_TO_SEARCH', 1))
			return false;			
		return true;
	}

	public function uninstall()
	{
		if (!parent::uninstall() || !Configuration::deleteByName('ADD_CATEGORY_TO_SEARCH'))
			return false;
		return true;
	}

	public function getContent()
	{
		$output = null;

		if (Tools::isSubmit('submit'.$this->name))
		{
			
			$switch = Tools::getValue('swtichaddcategory');
			
			Configuration::updateValue('ADD_CATEGORY_TO_SEARCH', $switch);

			dump(Context::getContext()); 

			$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		// Get default language
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
	
		// Init Fields form array
		$fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Settings'),
			),
			'input' => array(
				array(
					'type' => 'switch',
					'label' => $this->l('Show History'),
					'name' => 'swtichaddcategory',
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'label2_on',
							'value' => 1,
							'label' => $this->l('Enabled')
						),
						array(
							'id' => 'label2_off',
							'value' => 0,
							'label' => $this->l('Disabled')
						)
					)
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'btn btn-default pull-right'
			)
		);
	
		$helper = new HelperForm();
	
		// Module, token and currentIndex
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

		// Language
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
	
		// Title and toolbar
		$helper->title = $this->displayName;
		$helper->show_toolbar = true;        // false -> remove toolbar
		$helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
		$helper->submit_action = 'submit'.$this->name;
		$helper->toolbar_btn = array(
			'save' =>
			array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
				'&token='.Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
			)
		);
	
		// Load current value
		$helper->fields_value['swtichaddcategory'] = Configuration::get('ADD_CATEGORY_TO_SEARCH');
	
		return $helper->generateForm($fields_form);
	}

}

