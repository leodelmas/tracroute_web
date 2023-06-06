<?php
/* Smarty version 4.3.1, created on 2023-06-06 09:00:07
  from '/Users/leodelmas/dev/tracroute_web/admin1189gutynxijazakewz/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647ed977c06c34_28764792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6a4ffdd72e0c88c6484946ec66f57d85de9ae6' => 
    array (
      0 => '/Users/leodelmas/dev/tracroute_web/admin1189gutynxijazakewz/themes/default/template/content.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647ed977c06c34_28764792 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
