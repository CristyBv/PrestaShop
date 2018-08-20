<?php
/* Smarty version 3.1.32, created on 2018-08-17 12:30:15
  from 'C:\xampp\htdocs\PrestaShop\admin123\themes\default\template\helpers\list\list_action_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7695a7da7803_08479729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfcdb1f31900b1e2494fd198534178cc18c342e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin123\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1534496027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7695a7da7803_08479729 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" >
	<i class="icon-search-plus"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
