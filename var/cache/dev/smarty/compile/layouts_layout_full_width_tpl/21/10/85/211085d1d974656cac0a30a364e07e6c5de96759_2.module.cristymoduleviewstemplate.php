<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:07
  from 'module:cristymoduleviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b867753bb6dd4_33805322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211085d1d974656cac0a30a364e07e6c5de96759' => 
    array (
      0 => 'module:cristymoduleviewstemplate',
      1 => 1535102025,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b867753bb6dd4_33805322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\xampp\htdocs\PrestaShop/modules/cristymodule/views/templates/front/history.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3474070705b867753bab536_13161143', 'page_content');
?>


<!-- end C:\xampp\htdocs\PrestaShop/modules/cristymodule/views/templates/front/history.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_3474070705b867753bab536_13161143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3474070705b867753bab536_13161143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id='history_div'>
        <table class="table table-responsive table-striped">
            <thead>
                <th>ID</th>
                <th>BODY</th>
                <th>DATE</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_history_list']->value, 'history_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['history_item']->value) {
?>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history_item']->value, 'history');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['history']->value) {
?>
                        <td> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['history']->value, ENT_QUOTES, 'UTF-8');?>
 </td>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'page_content'} */
}
