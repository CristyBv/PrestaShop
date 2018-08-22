<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:48
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\checkout\_partials\cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d1614423617_53113568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea11ac9faaf214ca998180e9a1e98d5c83c2708d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-product-line.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
  ),
),false)) {
function content_5b7d1614423617_53113568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18470366255b7d1614418fa0_14037311', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9438589155b7d1614419d79_50051877', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12271452125b7d161441dcf9_57728179', 'cart_summary_subtotals');
?>


  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9161846105b7d1614421f48_40319598', 'cart_summary_voucher');
?>


  <hr class="separator">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13984443015b7d1614422aa8_37570600', 'cart_summary_totals');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_18470366255b7d1614418fa0_14037311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_18470366255b7d1614418fa0_14037311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_product_list'} */
class Block_18682604835b7d161441ace3_67257507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <li class="media"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'cart_summary_product_list'} */
/* {block 'cart_summary_products'} */
class Block_9438589155b7d1614419d79_50051877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_9438589155b7d1614419d79_50051877',
  ),
  'cart_summary_product_list' => 
  array (
    0 => 'Block_18682604835b7d161441ace3_67257507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="cart-summary-products">

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'show details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </p>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18682604835b7d161441ace3_67257507', 'cart_summary_product_list', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_12271452125b7d161441dcf9_57728179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_12271452125b7d161441dcf9_57728179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
          <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_voucher'} */
class Block_9161846105b7d1614421f48_40319598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_9161846105b7d1614421f48_40319598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
/* {block 'cart_summary_totals'} */
class Block_13984443015b7d1614422aa8_37570600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_13984443015b7d1614422aa8_37570600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
}
