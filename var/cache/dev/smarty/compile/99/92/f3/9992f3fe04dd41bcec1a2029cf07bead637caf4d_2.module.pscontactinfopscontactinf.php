<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:50:48
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b867a88eb8711_31813950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1534495924,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b867a88eb8711_31813950 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\PrestaShop/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact">
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tel: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: %fax%','sprintf'=>array('%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: [1]%email%[/1]','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('">'),'[/1]'=>'</a>'),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<!-- end C:\xampp\htdocs\PrestaShop/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
