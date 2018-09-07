<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:51:20
  from 'C:\xampp\htdocs\PrestaShop\modules\outofstock\views\templates\hook\displayProductOutOfStock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9258282dd8c8_52705909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b6e58e6e50074bf2cd3958d3cac8386d4b84f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\modules\\outofstock\\views\\templates\\hook\\displayProductOutOfStock.tpl',
      1 => 1536315767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9258282dd8c8_52705909 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['out_of_stock']->value == true) {?> 
<p style="color:red; font-weight:bold;"> OUT OF STOCK </p>
<?php }
}
}
