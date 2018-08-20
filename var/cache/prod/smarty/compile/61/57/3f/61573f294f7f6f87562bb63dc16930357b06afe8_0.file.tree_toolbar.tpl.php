<?php
/* Smarty version 3.1.32, created on 2018-08-17 12:32:47
  from 'C:\xampp\htdocs\PrestaShop\admin123\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b76963f7d3778_62854325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61573f294f7f6f87562bb63dc16930357b06afe8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin123\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1534496027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76963f7d3778_62854325 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
