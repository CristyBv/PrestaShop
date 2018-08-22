<?php
/* Smarty version 3.1.32, created on 2018-08-22 10:51:47
  from 'C:\xampp\htdocs\PrestaShop\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d161390b175_92855910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f815088cdb74ee3408b614940e3539f34e4c3def' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1534496038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d161390b175_92855910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18530085345b7d1613908af7_84439590', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_18530085345b7d1613908af7_84439590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_18530085345b7d1613908af7_84439590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
