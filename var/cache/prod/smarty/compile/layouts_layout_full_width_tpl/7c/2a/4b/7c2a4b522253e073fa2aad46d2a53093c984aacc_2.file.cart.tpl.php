<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:35
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d160780c7f8_92469742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c2a4b522253e073fa2aad46d2a53093c984aacc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\checkout\\cart.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5b7d160780c7f8_92469742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2600968375b7d16077fe202_92802517', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_11468065225b7d1607800752_84321041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_11533962395b7d1607804d47_13738252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'hook_shopping_cart_footer'} */
class Block_16987623195b7d16078077a6_69904820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_14938828385b7d1607809319_61148092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_20828535995b7d1607809d35_50915678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_3971282365b7d160780a937_52981822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_18998759945b7d1607808ee8_50565006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14938828385b7d1607809319_61148092', 'hook_shopping_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20828535995b7d1607809d35_50915678', 'cart_totals', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3971282365b7d160780a937_52981822', 'cart_actions', $this->tplIndex);
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_8870054275b7d160780bad0_51519171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_2600968375b7d16077fe202_92802517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2600968375b7d16077fe202_92802517',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_11468065225b7d1607800752_84321041',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_11533962395b7d1607804d47_13738252',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_16987623195b7d16078077a6_69904820',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_18998759945b7d1607808ee8_50565006',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_14938828385b7d1607809319_61148092',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_20828535995b7d1607809d35_50915678',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_3971282365b7d160780a937_52981822',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_8870054275b7d160780bad0_51519171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11468065225b7d1607800752_84321041', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11533962395b7d1607804d47_13738252', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16987623195b7d16078077a6_69904820', 'hook_shopping_cart_footer', $this->tplIndex);
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18998759945b7d1607808ee8_50565006', 'cart_summary', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8870054275b7d160780bad0_51519171', 'hook_reassurance', $this->tplIndex);
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
