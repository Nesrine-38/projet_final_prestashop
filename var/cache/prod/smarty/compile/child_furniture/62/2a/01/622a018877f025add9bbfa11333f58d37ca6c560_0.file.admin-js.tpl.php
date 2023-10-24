<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:11
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48b9fc0f0_47903280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '622a018877f025add9bbfa11333f58d37ca6c560' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\admin-js.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48b9fc0f0_47903280 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
mls_slider.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
multilayerslider-admin.js"><?php echo '</script'; ?>
><?php }
}
