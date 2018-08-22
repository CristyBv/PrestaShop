<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:48
  from 'module:paymentexampleviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d16142feb94_59592404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8295372eec94e6341f0a17c90f36344b3e1e1b36' => 
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
function content_5b7d16142feb94_59592404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="payment-form">

  <p>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card number'),$_smarty_tpl ) );?>
</label>
    <input type="text" size="20" autocomplete="off" name="card-number">
  </p>

  <p>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Firstname'),$_smarty_tpl ) );?>
</label>
    <input type="text" autocomplete="off" name="firstname">
  </p>

  <p>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastname'),$_smarty_tpl ) );?>
</label>
    <input type="text" autocomplete="off" name="lastname">
  </p>

  <p>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVC'),$_smarty_tpl ) );?>
</label>
    <input type="text" size="4" autocomplete="off" name="card-cvc">
  </p>

  <p>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration (MM/AAAA)'),$_smarty_tpl ) );?>
</label>
    <select id="month" name="card-expiry-month">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month']->value, ENT_QUOTES, 'UTF-8');?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <span> / </span>
    <select id="year" name="card-expiry-year">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8');?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </p>
</form>
<?php }
}
