<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:57:04
  from 'C:\xampp\htdocs\PrestaShop\admin123\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b92598011a247_74167679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e80358b4343e64c6078d434aab3d72b1eaf47d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin123\\themes\\new-theme\\template\\content.tpl',
      1 => 1534496029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b92598011a247_74167679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
