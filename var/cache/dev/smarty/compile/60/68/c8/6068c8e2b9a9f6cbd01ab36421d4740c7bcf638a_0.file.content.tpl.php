<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:57:15
  from 'C:\xampp\htdocs\PrestaShop\admin123\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b92598b1565d5_20743883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6068c8e2b9a9f6cbd01ab36421d4740c7bcf638a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1534496025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b92598b1565d5_20743883 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
