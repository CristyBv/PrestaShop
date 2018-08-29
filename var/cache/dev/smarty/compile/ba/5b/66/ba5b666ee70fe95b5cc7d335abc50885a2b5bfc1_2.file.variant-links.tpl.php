<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:50:48
  from 'C:\xampp\htdocs\PrestaShop\themes\cristy_theme\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b867a880e6d78_51219451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5b666ee70fe95b5cc7d335abc50885a2b5bfc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\cristy_theme\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1535535649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b867a880e6d78_51219451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20425716135b867a880e3060_62497703', 'variant_links');
?>

<?php }
/* {block 'variant_link_item'} */
class Block_13675812485b867a880e3e33_27754943 extends Smarty_Internal_Block
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
class Block_20425716135b867a880e3060_62497703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variant_links' => 
  array (
    0 => 'Block_20425716135b867a880e3060_62497703',
  ),
  'variant_link_item' => 
  array (
    0 => 'Block_13675812485b867a880e3e33_27754943',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13675812485b867a880e3e33_27754943', 'variant_link_item', $this->tplIndex);
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
