<?php
/* Smarty version 3.1.32, created on 2018-08-23 13:02:25
  from 'C:\xampp\htdocs\PrestaShop\modules\mymodcomments\views\templates\hook\getContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e8631b16db8_53635791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c3419a765845f78588f07cbce175724f36a6ff3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\modules\\mymodcomments\\views\\templates\\hook\\getContent.tpl',
      1 => 1413798467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7e8631b16db8_53635791 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
    <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings updated','mod'=>'mymodcomments'),$_smarty_tpl ) );?>
</div>
<?php }?>

<?php }
}
