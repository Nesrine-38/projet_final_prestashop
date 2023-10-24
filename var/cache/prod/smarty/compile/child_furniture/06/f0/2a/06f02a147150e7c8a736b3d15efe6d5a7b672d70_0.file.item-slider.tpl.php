<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:13
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\item-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48d8f61f0_78357102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f02a147150e7c8a736b3d15efe6d5a7b672d70' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\item-slider.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48d8f61f0_78357102 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="mls_slides_ul"> 
    <?php if ((isset($_smarty_tpl->tpl_vars['slides']->value)) && $_smarty_tpl->tpl_vars['slides']->value) {?>           
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSSlide','slide'=>$_smarty_tpl->tpl_vars['slide']->value,'layout'=>$_smarty_tpl->tpl_vars['mls_layout']->value),$_smarty_tpl ) );?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
    <?php }?>
</ul> 
<div class="alert alert-warning msl_no_slides <?php if ($_smarty_tpl->tpl_vars['slides']->value) {?>hidden<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No slide available. Click "Add slide" to add new slides!','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>       <?php }
}
