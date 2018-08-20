<?php
/* Smarty version 3.1.32, created on 2018-08-17 12:25:04
  from 'C:\xampp\htdocs\PrestaShop\admin860kfuwxr\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b76947037b2f2_01229256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12aa54c4718f896f142c95a936431fc44a47b475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\admin860kfuwxr\\themes\\default\\template\\content.tpl',
      1 => 1534496025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b76947037b2f2_01229256 (Smarty_Internal_Template $_smarty_tpl) {
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
