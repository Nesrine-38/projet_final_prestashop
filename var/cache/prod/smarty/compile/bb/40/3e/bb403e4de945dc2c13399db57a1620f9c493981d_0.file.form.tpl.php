<?php
/* Smarty version 4.3.1, created on 2023-10-24 16:07:36
  from 'C:\wamp64\www\prestashop\modules\ybc_newsletter\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537cfa84faca3_72442428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb403e4de945dc2c13399db57a1620f9c493981d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_newsletter\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1698147965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537cfa84faca3_72442428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12449190806537cfa8436ac8_01409733', "field");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7469605966537cfa846e9b6_72575327', "input_row");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6753447936537cfa84966f2_05354036', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_12449190806537cfa8436ac8_01409733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_12449190806537cfa8436ac8_01409733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['display_img'])) && $_smarty_tpl->tpl_vars['input']->value['display_img']) {?>
        <label class="control-label col-lg-3" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-9">
    		<a  class="ybc_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
" /></a>
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['img_del_link'])) && $_smarty_tpl->tpl_vars['input']->value['img_del_link'] && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this image?','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
');" style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_del_link'],'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_TEMPLATE') {?>
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
            <div class="ybc-templates" style="cursor: pointer;text-decoration: underline; font-style: italic; margin-top: 4px; color: #00aff0;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview this template','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>

            </div>
        </div>
    <?php }
}
}
/* {/block "field"} */
/* {block "input_row"} */
class Block_7469605966537cfa846e9b6_72575327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_7469605966537cfa846e9b6_72575327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_DISPLAY_POPUP') {?>
        <div class="ybc_newsletter_form_tab_content">
            <div class="ybc_newsletter_form_tab_div">
                <ul class="ybc_newsletter_form_tab">
                    <li class="ybc_newsletter_general active" data-tab="general"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                    <li class="ybc_newsletter_time_option" data-tab="time_option"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conditions','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                    <li class="ybc_newsletter_design" data-tab="design"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                    <li class="ybc_newsletter_email" data-tab="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                    <li class="ybc_newsletter_socials" data-tab="socials"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Socials','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                    <li class="ybc_newsletter_misc" data-tab="misc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MISC','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</li>
                </ul>
            </div>
            <div class="ybc_newsletter_form">
                <div class="ybc_newsletter_form_general active">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_TIME_IN') {?>
                        </div><div class="ybc_newsletter_form_time_option">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_TEMPLATE') {?>
                        </div><div class="ybc_newsletter_form_design">
                    <?php }?>  
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_REQUIRE_VERIFICATION') {?>
                        </div><div class="ybc_newsletter_form_email">
                    <?php }?>  
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'BLOCKSOCIAL_FACEBOOK') {?>
                        </div><div class="ybc_newsletter_form_socials">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_PAGE[]') {?>
                        </div><div class="ybc_newsletter_form_misc">
                    <?php }?>  
                    <div class="form-group-wrapper row_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['input']->value['name']),'html','UTF-8' ));?>
"><?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_NEWSLETTER_PAGE[]') {?>
                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
/* {block "footer"} */
class Block_6753447936537cfa84966f2_05354036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6753447936537cfa84966f2_05354036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
		<div class="panel-footer">
            <?php echo '<script'; ?>
 type="text/javascript">
                $(document).ready(function(){
                    if($('.ybc_fancy').length > 0)
                    {
                        $('.ybc_fancy').fancybox();
                    }
                });
            <?php echo '</script'; ?>
>
            <?php if ((isset($_smarty_tpl->tpl_vars['export_link']->value)) && $_smarty_tpl->tpl_vars['export_link']->value) {?>
                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['export_link']->value,'html','UTF-8' ));?>
"><i class="process-icon-export"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to .csv file','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
			<button type="submit" value="1"	id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['table']->value,'html','UTF-8' ));?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1) ));
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submit_action']->value,'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'],'html','UTF-8' ));
} else { ?>btn btn-default pull-right<?php }?>">
				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'],'html','UTF-8' ));
} else { ?>process-icon-save<?php }?>"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'],'html','UTF-8' ));?>

			</button>
			<?php }?>
            
		</div>
	<?php }
}
}
/* {/block "footer"} */
}
