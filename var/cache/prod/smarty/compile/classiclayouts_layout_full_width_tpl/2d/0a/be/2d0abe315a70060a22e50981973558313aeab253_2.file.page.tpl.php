<?php
/* Smarty version 4.3.1, created on 2023-06-06 11:29:53
  from '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647efc91c4e929_22612913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d0abe315a70060a22e50981973558313aeab253' => 
    array (
      0 => '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/page.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647efc91c4e929_22612913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456454611647efc91c489c8_51006629', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_404405710647efc91c49885_16272021 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1816811627647efc91c49019_21396929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_404405710647efc91c49885_16272021', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_533615775647efc91c4bdf4_25764252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2034775034647efc91c4c6f4_36877576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_70920181647efc91c4b7b8_05210872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533615775647efc91c4bdf4_25764252', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2034775034647efc91c4c6f4_36877576', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1970253251647efc91c4dab6_48918832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1160009514647efc91c4d4a6_52669153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1970253251647efc91c4dab6_48918832', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_456454611647efc91c489c8_51006629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_456454611647efc91c489c8_51006629',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1816811627647efc91c49019_21396929',
  ),
  'page_title' => 
  array (
    0 => 'Block_404405710647efc91c49885_16272021',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_70920181647efc91c4b7b8_05210872',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_533615775647efc91c4bdf4_25764252',
  ),
  'page_content' => 
  array (
    0 => 'Block_2034775034647efc91c4c6f4_36877576',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1160009514647efc91c4d4a6_52669153',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1970253251647efc91c4dab6_48918832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1816811627647efc91c49019_21396929', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70920181647efc91c4b7b8_05210872', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160009514647efc91c4d4a6_52669153', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
