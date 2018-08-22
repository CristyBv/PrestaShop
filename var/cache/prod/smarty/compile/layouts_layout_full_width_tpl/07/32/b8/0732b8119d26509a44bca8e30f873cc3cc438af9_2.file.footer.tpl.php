<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:48
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d16146f1883_01094874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0732b8119d26509a44bca8e30f873cc3cc438af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d16146f1883_01094874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15189517365b7d16146efc83_91567016', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_15189517365b7d16146efc83_91567016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15189517365b7d16146efc83_91567016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
