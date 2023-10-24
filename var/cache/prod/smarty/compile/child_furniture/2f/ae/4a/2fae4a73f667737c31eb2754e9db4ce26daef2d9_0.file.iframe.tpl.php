<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:16
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c4902424f7_94662192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fae4a73f667737c31eb2754e9db4ce26daef2d9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\iframe.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c4902424f7_94662192 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .ets_multilayerslider_wrapper{
        min-height:800px;
    }
</style>
<?php echo '<script'; ?>
 type="text/javascript">
   function phProductFeedResizeIframe(obj) {
       $('iframe').css('height','auto');
       setTimeout(function() {
           $('iframe').css('opacity',1);
           var pHeight = $(obj).parent().height();
           $(obj).css('height','540px');
       }, 300);
    }
<?php echo '</script'; ?>
> 
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
