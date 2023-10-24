<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:57:57
  from 'C:\wamp64\www\prestashop\themes\furniture\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537cd6524b629_95803574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '827e6fe63ad800feec9193100642fb57f638db10' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\checkout\\cart.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_6537cd6524b629_95803574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12367378746537cd65218457_55725677', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_12633610296537cd6521d256_61862825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_1050159256537cd65223202_38074727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="label" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['index'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_1589945706537cd6523e566_45983954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_4235249306537cd65242862_57121512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_4907921326537cd652343a1_59266227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="card cart-summary">
    
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1589945706537cd6523e566_45983954', 'cart_totals', $this->tplIndex);
?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4235249306537cd65242862_57121512', 'cart_actions', $this->tplIndex);
?>

    
              </div>
            <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_2321432926537cd652472f3_40216574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_12367378746537cd65218457_55725677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12367378746537cd65218457_55725677',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_12633610296537cd6521d256_61862825',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_1050159256537cd65223202_38074727',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_4907921326537cd652343a1_59266227',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_1589945706537cd6523e566_45983954',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_4235249306537cd65242862_57121512',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_2321432926537cd652472f3_40216574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">
    <div class="cart-grid">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12633610296537cd6521d256_61862825', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050159256537cd65223202_38074727', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        </div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4907921326537cd652343a1_59266227', 'cart_summary', $this->tplIndex);
?>

    
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2321432926537cd652472f3_40216574', 'display_reassurance', $this->tplIndex);
?>

      </div>

    </div>
  </div>
<?php
}
}
/* {/block 'content'} */
}
