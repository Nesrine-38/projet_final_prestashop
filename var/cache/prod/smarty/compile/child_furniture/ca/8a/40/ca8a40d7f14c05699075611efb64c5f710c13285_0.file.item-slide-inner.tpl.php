<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:14
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\item-slide-inner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48e14e7f6_63319410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca8a40d7f14c05699075611efb64c5f710c13285' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\item-slide-inner.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48e14e7f6_63319410 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="action">
    <span data-title="&#xE14C;" class="mls_slide_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this item','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
    <span data-title="&#xE14D;" class="mls_slide_duplicated" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this slide','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>    
    <span data-title="&#xE150;" class="mls_slide_edit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
</div>
<div class="msl_layer_wrapper" data-width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderWidth']->value ));?>
" data-height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderHeight']->value ));?>
" style="position: relative;width:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderWidth']->value ));?>
px;height:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderHeight']->value ));?>
px;<?php if ($_smarty_tpl->tpl_vars['slide']->value['link_img']) {?> background-image: url('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['link_img'],'html','UTF-8' ));?>
');background-repeat: <?php if ($_smarty_tpl->tpl_vars['slide']->value['repeat_x'] && $_smarty_tpl->tpl_vars['slide']->value['repeat_y']) {?>repeat<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value['repeat_x']) {?>repeat-x<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value['repeat_y']) {?>repeat-y<?php } else { ?>no-repeat<?php }?>;<?php }
if ($_smarty_tpl->tpl_vars['slide']->value['backgroud_color']) {?> background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['backgroud_color'],'html','UTF-8' ));?>
; <?php }?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['layers'])) && $_smarty_tpl->tpl_vars['slide']->value['layers']) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide']->value['layers'], 'layer');
$_smarty_tpl->tpl_vars['layer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->do_else = false;
?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSLayer','layer'=>$_smarty_tpl->tpl_vars['layer']->value,'layout'=>$_smarty_tpl->tpl_vars['mls_layout']->value),$_smarty_tpl ) );?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>     <?php }
}
