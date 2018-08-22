<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:47
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d16131cdae6_37491742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cebda5ce48f866e6e6888e4bef433eedeef96ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:checkout/_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5b7d16131cdae6_37491742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17731476845b7d16131b65c7_73259040', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9969230775b7d16131be7f3_77644830', 'hook_after_body_opening_tag');
?>


    <header id="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13176006145b7d16131c0bb6_89331439', 'header');
?>

    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2174787625b7d16131c1692_86764606', 'notifications');
?>


    <section id="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <div class="container">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2139861495b7d16131c7e91_54745671', 'content');
?>

      </div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_695441155b7d16131cb6d1_58914626', 'footer');
?>

    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9888181975b7d16131cc134_37464493', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11815289225b7d16131cd0b1_56231540', 'hook_before_body_closing_tag');
?>


  </body>

</html>
<?php }
/* {block 'head'} */
class Block_17731476845b7d16131b65c7_73259040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17731476845b7d16131b65c7_73259040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_9969230775b7d16131be7f3_77644830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_9969230775b7d16131be7f3_77644830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'header'} */
class Block_13176006145b7d16131c0bb6_89331439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13176006145b7d16131c0bb6_89331439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_2174787625b7d16131c1692_86764606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_2174787625b7d16131c1692_86764606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'notifications'} */
/* {block 'cart_summary'} */
class Block_9647205905b7d16131c8978_21473714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_715605815b7d16131c9e87_65630520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_2139861495b7d16131c7e91_54745671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2139861495b7d16131c7e91_54745671',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_9647205905b7d16131c8978_21473714',
    1 => 'Block_715605815b7d16131c9e87_65630520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content">
          <div class="row">
            <div class="col-md-8">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9647205905b7d16131c8978_21473714', 'cart_summary', $this->tplIndex);
?>

            </div>
            <div class="col-md-4">

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_715605815b7d16131c9e87_65630520', 'cart_summary', $this->tplIndex);
?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            </div>
          </div>
        </section>
      <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_695441155b7d16131cb6d1_58914626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_695441155b7d16131cb6d1_58914626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_9888181975b7d16131cc134_37464493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_9888181975b7d16131cc134_37464493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_11815289225b7d16131cd0b1_56231540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_11815289225b7d16131cd0b1_56231540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
