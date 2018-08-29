<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:05
  from 'C:\xampp\htdocs\PrestaShop\modules\cristymodule\views\templates\hook\cristymodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b86775133c559_16329656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e438a6311b51cb6b6aaa469ad4272979971879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\modules\\cristymodule\\views\\templates\\hook\\cristymodule.tpl',
      1 => 1535010955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b86775133c559_16329656 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="cristymodule_block_left" class="block">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome!','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>
</h4>
  <div class="block_content">
    <p>
      <?php if (!isset($_smarty_tpl->tpl_vars['my_module_name']->value) || !$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'cristymodule_tempvar', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'World','d'=>'Modules.CristyModule'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_assignInScope('cristymodule_name', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cristymodule_tempvar'));?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('cristymodule_name', $_smarty_tpl->tpl_vars['my_module_name']->value);?>
      <?php }?>     
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello %1$s!','sprintf'=>array($_smarty_tpl->tpl_vars['cristymodule_name']->value),'d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>

    </p>
    <ul>
      <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click this link','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click me!','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>
</a></li>
    </ul>
  </div>
</div><?php }
}
