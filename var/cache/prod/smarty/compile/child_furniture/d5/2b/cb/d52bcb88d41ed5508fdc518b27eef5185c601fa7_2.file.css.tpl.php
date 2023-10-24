<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:20:35
  from 'C:\wamp64\www\prestashop\modules\ybc_newsletter\views\templates\hook\css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b693b17bb6_25304491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52bcb88d41ed5508fdc518b27eef5185c601fa7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_newsletter\\views\\templates\\hook\\css.tpl',
      1 => 1698147965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b693b17bb6_25304491 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #ynp-submit, .ybc-newsletter-popup:not(.ynpt6) #ynp-close{background:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .ynpt6 .ynp-email-input{border-bottom-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    .alert-success span{color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #uniform-ynp-input-dont-show > span.checked::before{color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_button']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    #ynp-submit:hover, .ybc-newsletter-popup:not(.ynpt6) #ynp-close:hover{background:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
    <?php if ($_smarty_tpl->tpl_vars['template']->value == 'ynpt1' && $_smarty_tpl->tpl_vars['image']->value) {?>
        .ynp-div-l3{background: url('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
') top left no-repeat;}      
    <?php }?>
</style><?php }
}
