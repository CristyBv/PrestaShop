<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.admin.data_provider.product_interface' shared service.

return $this->services['prestashop.core.admin.data_provider.product_interface'] = new \PrestaShop\PrestaShop\Adapter\Product\AdminProductDataProvider(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image_manager']) ? $this->services['prestashop.adapter.image_manager'] : $this->load('getPrestashop_Adapter_ImageManagerService.php')) && false ?: '_'});
