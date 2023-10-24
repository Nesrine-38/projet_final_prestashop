<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:24:42
  from 'C:\wamp64\www\prestashop\modules\ets_megamenu\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b78aca83a5_91442660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5472bb2170f08f24013c389c094d8485d5235693' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_megamenu\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1698147956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b78aca83a5_91442660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19763964196537b78ab7c952_09989433', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6478516676537b78abe94e7_42637756', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12500445686537b78ac24b59_89726032', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2258881596537b78ac8db54_72211326', "input_row");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_19763964196537b78ab7c952_09989433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_19763964196537b78ab7c952_09989433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['values']['query'])) && $_smarty_tpl->tpl_vars['input']->value['values']['query']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    				<?php $_smarty_tpl->_assignInScope('id_checkbox', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]),'html','UTF-8' )));?>
    				<div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
    					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value ));?>
"><input type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['value'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?> checked="checked"<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']],'html','UTF-8' ));?>
</label>
    				</div>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php }?> 
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_CACHE_LIFE_TIME') {?>
            <a class="mm_clear_cache" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_clear_cache_url']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear menu cache','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</a>
        <?php }?>               
    <?php }?>            
<?php
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_6478516676537b78abe94e7_42637756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_6478516676537b78abe94e7_42637756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name']) {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['display_img'])) && $_smarty_tpl->tpl_vars['input']->value['display_img']) {?>
            <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9 uploaded_img_wrapper">
        		<a  class="ets_mm_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
" /></a>
                <?php if ((!(isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) || (isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) && !$_smarty_tpl->tpl_vars['input']->value['hide_delete']) && (isset($_smarty_tpl->tpl_vars['input']->value['img_del_link'])) && $_smarty_tpl->tpl_vars['input']->value['img_del_link'] && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                    <a class="delete_url" style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_del_link'],'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                <?php }?>
            </div>        
        <?php }?>    
    <?php }
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_12500445686537b78ac24b59_89726032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12500445686537b78ac24b59_89726032',
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
            <?php if ((isset($_smarty_tpl->tpl_vars['reset_default']->value)) && $_smarty_tpl->tpl_vars['reset_default']->value) {?>
                <span class="btn btn-default mm_reset_default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only reset configuration to default. Menu data won\'t be lost','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));?>
loader.gif" />
                    <i class="process-icon-refresh"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                </span>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
            <div class="img_loading_wrapper hidden">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));?>
ajax-loader.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" class="ets_megamenu_loading" />
            </div>
            <input type="hidden" name="mm_object" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_object']->value,'html','UTF-8' ));?>
" />
            <?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>
                <input type="hidden" name="itemId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item_id']->value ));?>
" />
                <input type="hidden" name="mm_form_submitted" value="1" />
            <?php } else { ?>
                <input type="hidden" name="mm_config_submitted" value="1" />
            <?php }?>
            <div class="mm_save_wrapper">
    			<button type="submit" value="1"	class="mm_save_button <?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>mm_save<?php } else { ?>mm_config_save<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'],'html','UTF-8' ));
} else { ?>btn btn-default pull-right<?php }?>">
    				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'],'html','UTF-8' ));
} else { ?>process-icon-save<?php }?>"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'],'html','UTF-8' ));?>

    			</button>
                <div class="mm_saving">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));?>
loader.gif" />
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saving','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                </div>
            </div>
			<?php }?>
            
		</div>
	<?php }?>    
<?php
}
}
/* {/block "footer"} */
/* {block "input_row"} */
class Block_2258881596537b78ac8db54_72211326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_2258881596537b78ac8db54_72211326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_LAYOUT') {?>
        <div class="mm_config_form_tab_div">
            <ul class="mm_config_form_tab">
                <li class="mm_config_genneral active" data-tab="general"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</li>
                <li class="mm_config_design" data-tab="design"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</li>
            </ul>
        </div>
        <div class="mm_config_forms">
            <div class="mm_config_general active">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_SKIN') {?>
        </div>
        <div class="mm_config_design">
    <?php }?>    
    <div class="form-group-wrapper row_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['input']->value['name']),'html','UTF-8' ));?>
"><?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_CUSTOM_CSS') {?>
        </div>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
}
