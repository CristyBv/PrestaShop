<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:07
  from 'C:\xampp\htdocs\PrestaShop\themes\cristy\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b867753c2a739_01731855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89caf91ac8c81b23b795a336c37514a2e7c5a1e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrestaShop\\themes\\cristy\\templates\\page.tpl',
      1 => 1535535649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b867753c2a739_01731855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19182226195b867753c275f6_36175091', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19679208915b867753c28212_30089149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15296918265b867753c27e60_75530016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19679208915b867753c28212_30089149', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_4633497055b867753c27a71_60171847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15296918265b867753c27e60_75530016', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_20255010525b867753c29170_19198678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_75431195b867753c28d55_12543007 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20255010525b867753c29170_19198678', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_793749165b867753c29d40_34163903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11312183625b867753c29986_20582678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793749165b867753c29d40_34163903', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19182226195b867753c275f6_36175091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19182226195b867753c275f6_36175091',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4633497055b867753c27a71_60171847',
  ),
  'page_header' => 
  array (
    0 => 'Block_15296918265b867753c27e60_75530016',
  ),
  'page_title' => 
  array (
    0 => 'Block_19679208915b867753c28212_30089149',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_75431195b867753c28d55_12543007',
  ),
  'page_content' => 
  array (
    0 => 'Block_20255010525b867753c29170_19198678',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11312183625b867753c29986_20582678',
  ),
  'page_footer' => 
  array (
    0 => 'Block_793749165b867753c29d40_34163903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4633497055b867753c27a71_60171847', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75431195b867753c28d55_12543007', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11312183625b867753c29986_20582678', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
