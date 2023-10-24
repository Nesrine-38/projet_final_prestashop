<?php
/* Smarty version 4.3.1, created on 2023-10-24 16:07:36
  from 'C:\wamp64\www\prestashop\modules\ybc_newsletter\views\templates\hook\javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537cfa8c2aa54_02528921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9e7a7e618f31b878982c4ed317af8fbbf9724e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_newsletter\\views\\templates\\hook\\javascript.tpl',
      1 => 1698147965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537cfa8c2aa54_02528921 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">var ybc_newsletter_module_path='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_MODULE_PATH']->value,'quotes','UTF-8' ));?>
';<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_MODULE_PATH']->value,'quotes','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
><?php }
}
