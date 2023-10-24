<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:13
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\item-slide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48dd6ea77_50249687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaad0ab3ab102128daf59cf681a646b5d79da533' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\item-slide.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48dd6ea77_50249687 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['slide']->value)) && $_smarty_tpl->tpl_vars['slide']->value) {?>    
    <li class="mls_slides_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['slide']->value['enabled']) {?>mls_disabled<?php }?>" data-id-slide="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'] ));?>
" data-obj="slide">
         <span class="title-silde" ><span><?php if ($_smarty_tpl->tpl_vars['slide']->value['title']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'] ));
}?></span></span>
         <div class="slide-content">
             <div class="left-block col-lg-9" >
                <div class="left-content">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSSlideInner','slide'=>$_smarty_tpl->tpl_vars['slide']->value,'layout'=>$_smarty_tpl->tpl_vars['mls_layout']->value),$_smarty_tpl ) );?>
               
                </div>
             </div>
             <div class="right-block col-lg-3">
                <h2 data-title="&#xE3C4;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</h2>
                <div data-title="&#xE145;" class="mls_add_layer btn btn-default" data-id-slide="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                <ul id="layers_slide<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'] ));?>
" class="mls_layers_ul">
                    <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['layers'])) && $_smarty_tpl->tpl_vars['slide']->value['layers']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide']->value['layers'], 'layer');
$_smarty_tpl->tpl_vars['layer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->do_else = false;
?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSLayerSort','layer'=>$_smarty_tpl->tpl_vars['layer']->value),$_smarty_tpl ) );?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </ul>
             </div>
         </div>
    </li>
<?php }
}
}
