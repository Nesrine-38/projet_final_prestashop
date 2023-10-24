<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:11
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48be208d6_98439736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1103b87b54886ab6cd64ad23b0b2b63b9f7100d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48be208d6_98439736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10619410926537c48bc85707_71139395', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10710749976537c48bd42b84_05176476', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1247899596537c48bd801a1_53491222', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8589053366537c48bde9b33_45155656', "input_row");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_10619410926537c48bc85707_71139395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_10619410926537c48bc85707_71139395',
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
    					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
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

        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'animation_in' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'animation_out') {?>
            <div class="mls_sample_effect"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sample animation effect','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
        <?php }?>         
    <?php }?>            
<?php
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_10710749976537c48bd42b84_05176476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_10710749976537c48bd42b84_05176476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name']) {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['display_img'])) && $_smarty_tpl->tpl_vars['input']->value['display_img']) {?>
            <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9 uploaded_img_wrapper">
        		<img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
" />
                <?php if ((!(isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) || (isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) && !$_smarty_tpl->tpl_vars['input']->value['hide_delete']) && (isset($_smarty_tpl->tpl_vars['input']->value['img_del_link'])) && $_smarty_tpl->tpl_vars['input']->value['img_del_link'] && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                    <a class="delete_url" style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_del_link'],'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete" data-title="&#xE872;"></i></span></a>
                <?php }?>
            </div>        
        <?php }?>    
    <?php }
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_1247899596537c48bd801a1_53491222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1247899596537c48bd801a1_53491222',
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
            <?php if ((isset($_smarty_tpl->tpl_vars['cancel_url']->value)) && $_smarty_tpl->tpl_vars['cancel_url']->value) {?>
                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cancel_url']->value,'html','UTF-8' ));?>
"><i class="process-icon-cancel"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
            <div class="img_loading_wrapper hidden">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));?>
ajax-loader.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
" class="ybc_blog_loading" />
            </div>
            <input type="hidden" name="mls_object" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mls_object']->value,'html','UTF-8' ));?>
" />
            <?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>
                <input type="hidden" name="itemId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item_id']->value ));?>
" />
                <input type="hidden" name="mls_form_submitted" value="1" />
            <?php } else { ?>
                <input type="hidden" name="mls_config_submitted" value="1" />
            <?php }?>
            <div class="mls_save_wrapper">
    			<button type="submit" value="1"	class="<?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>mls_save<?php } else { ?>mls_config_save<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'],'html','UTF-8' ));
} else { ?>btn btn-default pull-right<?php }?>">
    				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'],'html','UTF-8' ));
} else { ?>process-icon-save<?php }?>"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'],'html','UTF-8' ));?>

    			</button>
                <div class="mls_saving">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));?>
loader.gif"/>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saving','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
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
class Block_8589053366537c48bde9b33_45155656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_8589053366537c48bde9b33_45155656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['mls_object']->value)) && $_smarty_tpl->tpl_vars['mls_object']->value == 'MLS_Layer' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'layer_type') {?>
        <div class="mls_layer_form_tab_div">
            <ul class="mls_layer_form_tab">
                <li class="layer_content active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</li>
                <li class="layer_position"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</li>
                <li class="layer_transition"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transition','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</li>
            </ul>
        </div>
        <div class="mls_layer_edit_form">
            <div class="layer_content_form">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['mls_object']->value)) && $_smarty_tpl->tpl_vars['mls_object']->value == 'MLS_Layer' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'top') {?>
        </div><div class="layer_position_form active">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['mls_object']->value)) && $_smarty_tpl->tpl_vars['mls_object']->value == 'MLS_Layer' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'animation_in') {?>
        </div><div class="layer_transition_form">
    <?php }?>    
    <div class="form-group-wrapper row_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['input']->value['name']),'html','UTF-8' ));?>
"><?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['mls_object']->value)) && $_smarty_tpl->tpl_vars['mls_object']->value == 'MLS_Layer' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'move_out') {?>
        </div></div>
    <?php }
}
}
/* {/block "input_row"} */
}
