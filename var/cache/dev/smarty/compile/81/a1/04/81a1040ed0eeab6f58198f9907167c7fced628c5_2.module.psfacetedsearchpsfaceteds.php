<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:05
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8677512e0220_41566863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1534495922,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8677512e0220_41566863 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\PrestaShop/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['rendered_active_filters']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['rendered_active_filters']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['rendered_facets']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['rendered_facets']->value;?>

<?php }?>
<!-- end C:\xampp\htdocs\PrestaShop/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
