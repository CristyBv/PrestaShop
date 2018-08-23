<?php
/* Smarty version 3.1.32, created on 2018-08-23 11:15:42
  from 'C:\xampp\htdocs\PrestaShop\modules\cristymodule\views\templates\hook\cristymodule_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e6d2eba6496_97172863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a27fa53db02e9424eb13785dcb8556e25310f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\modules\\cristymodule\\views\\templates\\hook\\cristymodule_history.tpl',
      1 => 1535012141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7e6d2eba6496_97172863 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click this link','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>
" class='ml-2'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CristyModule History','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>
</a></>
<?php }
}
