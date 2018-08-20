<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CristyModule extends Module {
    public function __construct() {

        $this->name = 'cristymodule';
        $this->author = 'CristyBv';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->trans('Cristy Module', array(), 'Modules.Pagesnotfound.Admin');
		$this->description = $this->trans('Testing...', array(), 'Modules.Pagesnotfound.Admin');
		$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    
	// public function install()
	// {
	// 	if (defined(_PS_VERSION_) && version_compare(_PS_VERSION_, '1.5.0.1', '>=')) {
	// 		$hookName = 'displayTop';
	// 	} else {
	// 		$hookName = 'top';
	// 	}
	// 	if (!parent::install() || !$this->registerHook($hookName) || !$this->registerHook('AdminStatsModules'))
	// 		return false;

	// 	return Db::getInstance()->execute(
	// 		'CREATE TABLE `'._DB_PREFIX_.'pagenotfound` (
	// 		id_pagenotfound INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	// 		id_shop INTEGER UNSIGNED NOT NULL DEFAULT \'1\',
	// 		id_shop_group INTEGER UNSIGNED NOT NULL DEFAULT \'1\',
	// 		request_uri VARCHAR(256) NOT NULL,
	// 		http_referer VARCHAR(256) NOT NULL,
	// 		date_add DATETIME NOT NULL,
	// 		PRIMARY KEY(id_pagenotfound),
	// 		INDEX (`date_add`)
	// 	) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;'
	// 	);
	// }
}
