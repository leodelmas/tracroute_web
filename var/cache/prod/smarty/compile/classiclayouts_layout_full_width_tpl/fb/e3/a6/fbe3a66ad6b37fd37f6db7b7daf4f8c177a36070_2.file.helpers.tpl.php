<?php
/* Smarty version 4.3.1, created on 2023-09-06 15:52:10
  from '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64f8840acff190_42710728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe3a66ad6b37fd37f6db7b7daf4f8c177a36070' => 
    array (
      0 => '/Users/leodelmas/dev/tracroute_web/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f8840acff190_42710728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/leodelmas/dev/tracroute_web/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/fb/e3/a6/fbe3a66ad6b37fd37f6db7b7daf4f8c177a36070_2.file.helpers.tpl.php',
    'uid' => 'fbe3a66ad6b37fd37f6db7b7daf4f8c177a36070',
    'call_name' => 'smarty_template_function_renderLogo_84781732564f8840acf84b9_71542006',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_84781732564f8840acf84b9_71542006 */
if (!function_exists('smarty_template_function_renderLogo_84781732564f8840acf84b9_71542006')) {
function smarty_template_function_renderLogo_84781732564f8840acf84b9_71542006(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_84781732564f8840acf84b9_71542006 */
}
