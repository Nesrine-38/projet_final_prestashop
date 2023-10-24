<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:24:41
  from 'C:\wamp64\www\prestashop\modules\ets_megamenu\views\templates\hook\admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b789a51433_95157633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea5cedaabfcf7f7d63bfcc3e37fb97b1d5c7d82' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_megamenu\\views\\templates\\hook\\admin-js.tpl',
      1 => 1698147956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b789a51433_95157633 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
megamenu-admin.js"><?php echo '</script'; ?>
><?php }
}
