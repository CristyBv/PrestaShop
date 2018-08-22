<?php
/* Smarty version 3.1.32, created on 2018-08-22 11:07:33
  from 'module:paymentexampleviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d19c51ef176_90641075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a0f6b25c1ac743f1e1701b780ffe617e521319' => 
    array (
      0 => 'module:paymentexampleviewstempla',
      1 => 1511875141,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d19c51ef176_90641075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3736064585b7d19c51e3028_45801848', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layout']->value));
}
/* {block "content"} */
class Block_3736064585b7d19c51e3028_45801848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3736064585b7d19c51e3028_45801848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have successfully submitted your payment form.'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the params:'),$_smarty_tpl ) );?>
</p>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'value', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Now, you just need to proceed the payment and do what you need to do."),$_smarty_tpl ) );?>
</p>
  </section>
<?php
}
}
/* {/block "content"} */
}
