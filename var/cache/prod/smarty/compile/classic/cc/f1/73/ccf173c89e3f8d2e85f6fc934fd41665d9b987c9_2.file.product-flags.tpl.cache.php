<?php
/* Smarty version 4.3.1, created on 2023-06-06 11:29:58
  from '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647efc9602f7f1_91909500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf173c89e3f8d2e85f6fc934fd41665d9b987c9' => 
    array (
      0 => '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647efc9602f7f1_91909500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1277574865647efc9602be32_35019565';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148325955647efc9602cbf9_65831176', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_1148325955647efc9602cbf9_65831176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_1148325955647efc9602cbf9_65831176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
