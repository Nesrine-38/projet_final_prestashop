<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:57:55
  from 'C:\wamp64\www\prestashop\themes\furniture\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537cd632721f4_68343229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b630874a2c07c69ed9ffdf7c03fe149d2f9e1956' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537cd632721f4_68343229 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
