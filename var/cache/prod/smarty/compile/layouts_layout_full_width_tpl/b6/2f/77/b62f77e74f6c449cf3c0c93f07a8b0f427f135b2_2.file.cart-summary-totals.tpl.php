<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:48
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d161464cd89_23016356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b62f77e74f6c449cf3c0c93f07a8b0f427f135b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d161464cd89_23016356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15430427755b7d1614648c33_63197881', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15943763945b7d161464ae93_93939620', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_15430427755b7d1614648c33_63197881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_15430427755b7d1614648c33_63197881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_15943763945b7d161464ae93_93939620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_15943763945b7d161464ae93_93939620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
