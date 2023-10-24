<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:25:18
  from 'C:\wamp64\www\prestashop\modules\ets_megamenu\views\templates\hook\admin-alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b7ae0ae7c0_70134542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ea31a60381b63940cf32acc913684cff754034' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_megamenu\\views\\templates\\hook\\admin-alerts.tpl',
      1 => 1698147956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b7ae0ae7c0_70134542 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['errors'])) && $_smarty_tpl->tpl_vars['alerts']->value['errors']) {?>
    <div class="alert alert-danger mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['errors']);?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['success'])) && $_smarty_tpl->tpl_vars['alerts']->value['success']) {?>
    <div class="alert alert-success mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['success']);?>
</div>
<?php }
}
}
