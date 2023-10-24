<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:03:55
  from 'C:\wamp64\www\prestashop\modules\ets_purchasetogether\views\templates\hook\_renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c0bb2ff894_48762618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8883840140ec8d25c49c3c63bddf5f722aba8e64' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_purchasetogether\\views\\templates\\hook\\_renderJs.tpl',
      1 => 1698147958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c0bb2ff894_48762618 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var PC_ETS_VER_17 = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_VER_17']->value )), ENT_QUOTES, 'UTF-8');?>
;
var PC_ETS_VER_16 = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_VER_16']->value )), ENT_QUOTES, 'UTF-8');?>
;
<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value)) && $_smarty_tpl->tpl_vars['configs']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configs']->value, 'config', false, 'id');
$_smarty_tpl->tpl_vars['config']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->do_else = false;
?>
var <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
var PC_ETS_REDIRECT_URL = '<?php echo $_smarty_tpl->tpl_vars['redirectURL']->value;?>
';
var PC_ETS_STATIC_TOKEN = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
