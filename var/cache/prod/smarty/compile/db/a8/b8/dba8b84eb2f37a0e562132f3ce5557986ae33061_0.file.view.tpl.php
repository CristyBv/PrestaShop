<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:48:44
  from 'C:\xampp\htdocs\PrestaShop\admin123\themes\default\template\controllers\payment\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d155c877c12_93668829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba8b84eb2f37a0e562132f3ce5557986ae33061' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin123\\themes\\default\\template\\controllers\\payment\\helpers\\view\\view.tpl',
      1 => 1534496025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d155c877c12_93668829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_716749685b7d155c875b51_88501552', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_716749685b7d155c875b51_88501552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_716749685b7d155c875b51_88501552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have more than one shop and must select one to configure payment.','d'=>'Admin.Payment.Notification'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
	<?php }
}
}
/* {/block "override_tpl"} */
}
