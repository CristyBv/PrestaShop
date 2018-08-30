<?php
/* Smarty version 3.1.32, created on 2018-08-30 12:15:03
  from 'module:cristymoduleviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b87b597574c19_41608057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d9b1ec3859db10b1561778c1edcb074231b245' => 
    array (
      0 => 'module:cristymoduleviewstemplate',
      1 => 1535014897,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b87b597574c19_41608057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\xampp\htdocs\PrestaShop/modules/cristymodule/views/templates/front/display.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3558468465b87b597571863_72305795', 'page_content');
?>
<!-- end C:\xampp\htdocs\PrestaShop/modules/cristymodule/views/templates/front/display.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_3558468465b87b597571863_72305795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3558468465b87b597571863_72305795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to this page!','d'=>'Modules.CristyModule'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
