<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:04:04
  from 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c0c40a7fa6_80549602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl',
      1 => 1698147972,
      2 => 'module',
    ),
    'e57c3104b8810991acf0e2c6684ad8f30e180d76' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6537c0c40a7fa6_80549602 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12 col-xs-12">
    <section class="categoryproducts">
      <h2 class="h1 products-section-title text-uppercase">
        <span>
                          1 other product in the category
                    </span>
      </h2>
      <div class="categoryproducts_content">
                        <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="image_item_product">
        
          <a href="http://localhost/prestashop/documents-de-promotion-/3-affiche-respectez-les-consignes.html" class="thumbnail product-thumbnail">
            <img src = "http://localhost/prestashop/3-home_default/affiche-respectez-les-consignes.jpg" alt = ""
              data-full-size-image-url = "http://localhost/prestashop/3-large_default/affiche-respectez-les-consignes.jpg" />
          </a>
        
        
                    
    </div>
    <div class="product-description">
      
        <h4 class="h3 product-title" itemprop="name"><a href="http://localhost/prestashop/documents-de-promotion-/3-affiche-respectez-les-consignes.html">Affiche &quot;Respectez les...</a></h4>
      
            
      <div class="hook-reviews">
	      
	  </div>
      
      
                  <div class="product-price-and-shipping">
            
            <span itemprop="price" class="price">3,60 €</span>
                   
            
            
          </div>
              
      <div class="highlighted-informations">
                     <div class="wishlist">
            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="WishlistCart('wishlist_block_list', 'add', '3', '0', 1); return false;">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
        </div>
    
         <div class="add_to_cart_button atc_div">
                             <input name="qty" type="hidden" class="form-control atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
                <button class="add_to_cart btn btn-primary" onclick="mypresta_productListCart.add($(this));">
                    <i class="fa fa-shopping-cart"></i>
                </button>
         </div>
          <a href="#" class="quick-view" data-link-action="quickview">
            <i class="material-icons search">search</i>
          </a>
        </div>
    </div>
    
      <ul class="product-flags">
                                  <li class="new">
                Neuf
              </li>
                                                      </ul>
    
  </div>
</article>
                </div>
    </section>
</div>
<?php }
}
