<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:04
  from 'C:\xampp\htdocs\PrestaShop\themes\cristy\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b867750564960_32730656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0db158394cab04d5e5ca26204ca653349a8161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\cristy\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1535535649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b867750564960_32730656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12137371785b86775055fda4_02151629', 'variant_links');
?>

<?php }
/* {block 'variant_link_item'} */
class Block_9636212515b8677505611e2_66851134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['variant']->value['type'] === "color") {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
        >
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      <?php
}
}
/* {/block 'variant_link_item'} */
/* {block 'variant_links'} */
class Block_12137371785b86775055fda4_02151629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variant_links' => 
  array (
    0 => 'Block_12137371785b86775055fda4_02151629',
  ),
  'variant_link_item' => 
  array (
    0 => 'Block_9636212515b8677505611e2_66851134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9636212515b8677505611e2_66851134', 'variant_link_item', $this->tplIndex);
?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'variant_links'} */
}
