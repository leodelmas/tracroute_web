<?php
/* Smarty version 4.3.1, created on 2023-06-06 09:00:32
  from '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647ed990cbeb98_03198308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6726095c311e1cf6990ad125dfde5964a85e9a38' => 
    array (
      0 => '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/index.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647ed990cbeb98_03198308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1686849663647ed990cbbf58_71535873', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1646294037647ed990cbc601_70908669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2141502895647ed990cbd573_20291507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1148244073647ed990cbcf61_87096737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141502895647ed990cbd573_20291507', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1686849663647ed990cbbf58_71535873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1686849663647ed990cbbf58_71535873',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1646294037647ed990cbc601_70908669',
  ),
  'page_content' => 
  array (
    0 => 'Block_1148244073647ed990cbcf61_87096737',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2141502895647ed990cbd573_20291507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646294037647ed990cbc601_70908669', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148244073647ed990cbcf61_87096737', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
