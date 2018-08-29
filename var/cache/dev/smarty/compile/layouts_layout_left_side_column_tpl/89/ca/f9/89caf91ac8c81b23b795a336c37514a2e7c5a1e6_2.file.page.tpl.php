<?php
/* Smarty version 3.1.32, created on 2018-08-29 13:37:04
  from 'C:\xampp\htdocs\PrestaShop\themes\cristy\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8677506b0e60_77187177',
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
function content_5b8677506b0e60_77187177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14266566445b8677506ade37_01999548', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17880482125b8677506aea34_06601669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15119591285b8677506ae693_81968357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17880482125b8677506aea34_06601669', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_18386138045b8677506ae2b6_72824574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15119591285b8677506ae693_81968357', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_5641275095b8677506af905_30618783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_593554165b8677506af549_68028534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5641275095b8677506af905_30618783', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13668422095b8677506b04a3_89203714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16592895715b8677506b00f7_74345697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13668422095b8677506b04a3_89203714', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14266566445b8677506ade37_01999548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14266566445b8677506ade37_01999548',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18386138045b8677506ae2b6_72824574',
  ),
  'page_header' => 
  array (
    0 => 'Block_15119591285b8677506ae693_81968357',
  ),
  'page_title' => 
  array (
    0 => 'Block_17880482125b8677506aea34_06601669',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_593554165b8677506af549_68028534',
  ),
  'page_content' => 
  array (
    0 => 'Block_5641275095b8677506af905_30618783',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16592895715b8677506b00f7_74345697',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13668422095b8677506b04a3_89203714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18386138045b8677506ae2b6_72824574', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_593554165b8677506af549_68028534', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16592895715b8677506b00f7_74345697', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
