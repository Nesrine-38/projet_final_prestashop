<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:20:43
  from 'C:\wamp64\www\prestashop\modules\blockwishlist\blockwishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b69b7cfc30_39274108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdf39360dee23baf646da35fd43d34f304ac9c3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1698147953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b69b7cfc30_39274108 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    var wishlistProductsIds=[];
    var baseDir ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var static_token='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var isLogged ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isLogged']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
    var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
';
    var mywishlist_url='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','lists',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    <?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value)) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>
    var isLoggedWishlist=true;
    <?php } else { ?>
    var isLoggedWishlist=false;
    <?php }?>

<?php echo '</script'; ?>
>

<a class="wishtlist_top" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','lists',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <i class="fa fa-heart-o"></i>
</a><?php }
}
