<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:20:36
  from 'C:\wamp64\www\prestashop\modules\ybc_productimagehover\views\templates\hook\renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b694cad118_11115109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd679479135d2bf4ef8e3483d8249f64023f29400' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_productimagehover\\views\\templates\\hook\\renderJs.tpl',
      1 => 1698147966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b694cad118_11115109 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
 var baseAjax ='<?php if ((isset($_smarty_tpl->tpl_vars['_PI_VER_17_']->value)) && $_smarty_tpl->tpl_vars['_PI_VER_17_']->value) {
echo $_smarty_tpl->tpl_vars['baseAjax']->value;
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAjax']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>';
 var YBC_PI_TRANSITION_EFFECT = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
 var _PI_VER_17_ = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_PI_VER_17_']->value )), ENT_QUOTES, 'UTF-8');?>

 var _PI_VER_16_ = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_PI_VER_16_']->value )), ENT_QUOTES, 'UTF-8');?>

<?php echo '</script'; ?>
><?php }
}
