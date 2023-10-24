<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__93da699ca669b60ee40ac9d88febd0c9b45af07cbab7483c6dbf53c8f0bbae42 */
class __TwigTemplate_91d456ee826addf3510f6b2b5c272af9388a267ed9df75b769c7589e23fe7b3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Gestionnaire de modules • tp</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a0d3f7d793e28fd9a9de471c43aa049d';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = 'e5baac7305c5fd644de84e639473c386';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8';
    var admin_notification_get_link = '/prestashop/admin277gopvmghypcv494mc/index.php/common/notifications?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin277gopvmghypcv494mc/index.php/common/notifications/ack?_token=2rlLLnGPfWe";
        // line 40
        echo "KCzJMOqGkgTOvhQTxsfI2UMH4mT847E8';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin277gopvmghypcv494mc/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ybc_blog_free/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin277gopvmghypcv494mc\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin277gopvmghypcv494mc\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\";
var currency = {\"iso_co";
        // line 70
        echo "de\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin277gopvmghypcv494mc/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin277gopvmghypcv494mc/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js";
        // line 87
        echo "/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin277gopvmghypcv494mc\\/index.php?controller=AdminGamification&token=ca7552c427a7383d3761bbd5deaf2eb6\";
            var current_id_tab = 40;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin277gopvmghypcv494mc/index.php/common/notifications?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 109
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop/admin277gopvmghypcv494mc/index.php\"  data-token=\"2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminDashboard&amp;token=859613e99ee23e396f6eb5adbc786a7f\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=98575f0828a5cb424e082774110d5584\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fda936f8a1c548e95b8";
        // line 143
        echo "5a50e3be5ee80\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/products-v2/create?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/categories/new?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"110\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminQuickAccesses&token=0ebba1c0b45170bb9235a70c0290537c\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminQuickAccesses&token=0ebba1c0b45170bb9235a70c0290537c\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin277gopv";
        // line 183
        echo "mghypcv494mc/index.php?controller=AdminSearch&amp;token=a6f80dab91042262f91246e6fb3bd5a7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-ite";
        // line 200
        echo "m\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=98575f0828a5cb424e082774110d5584\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fda936f8a1c548e95b85a50e3be5ee80\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction";
        // line 235
        echo "</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/products-v2/create?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/categories/new?token=3ef04b7b186045fc0bcfabd7d2a14b47\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"82\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminQuickAccesses&token=0ebba1c0b45170bb9235a70c0290537c\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Supprimer de l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminQuickAccesses&token=0ebba1c0b45170bb9235a70c0290537c\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
        ";
        // line 279
        echo "  &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/maintenance/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
         ";
        // line 319
        echo "     class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e45863d56e3841d6c9fd2623bcd7a7af\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les rése";
        // line 367
        echo "aux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Nesrine\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Nesrine</s";
        // line 416
        echo "pan>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/employees/1/edit?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminLogin&amp;logout=1&amp;token=eb4c371211efde5b5bc664479892b4e4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/employees/toggle-navigation?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminDashboard&amp;token=859613e99ee23e396f6eb5adbc786a7f\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"li";
        // line 460
        echo "nk-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminDashboard&amp;token=859613e99ee23e396f6eb5adbc786a7f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Commandes
                       ";
        // line 495
        echo "         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders/invoices/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders/credit-slips/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/orders/delivery-slips/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/";
        // line 526
        echo "prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCarts&amp;token=e45863d56e3841d6c9fd2623bcd7a7af\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/products?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/products?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                         ";
        // line 558
        echo "     <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/categories?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/monitoring/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminAttributesGroups&amp;token=f1d99111552f514c036efbf97c53b706\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/catalog/brands/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Marques et fournisseurs
                                </a>
          ";
        // line 585
        echo "                    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/attachments/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCartRules&amp;token=fda936f8a1c548e95b85a50e3be5ee80\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/stocks/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subt";
        // line 617
        echo "ab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/customers/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/customers/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/addresses/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                 ";
        // line 646
        echo "             
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCustomerThreads&amp;token=8267f86cbc79802ce8350b6561e2196b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCustomerThreads&amp;token=8267f86cbc79802ce8350b6561e2196b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/sell/customer-service/order-messages/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Messages prédéfinis
                               ";
        // line 674
        echo " </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminReturn&amp;token=6ee1a892469e876bbdfa04c53316ffc4\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/metrics/legacy/stats?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <";
        // line 706
        echo "a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/metrics/legacy/stats?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/metrics?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/mbo/modules/catalog/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                       ";
        // line 741
        echo "             keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/mbo/modules/catalog/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/design/themes/?_token=2rlLLnGPfWeKCzJMOqGkg";
        // line 768
        echo "TOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/design/themes/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/mbo/themes/catalog/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/pre";
        // line 798
        echo "stashop/admin277gopvmghypcv494mc/index.php/improve/design/mail_theme/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/design/cms-pages/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/design/modules/positions/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminImages&amp;token=1b608a42cc86a9983844ff48ebf8db46\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                     ";
        // line 828
        echo "                                       
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/modules/link-widget/list?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCarriers&amp;token=054abf594405f51a543d614c3b171fe0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminCarriers&amp;token=054abf594405f51a543d614c3b171fe0\" class=\"link\"> Transporteurs
                ";
        // line 856
        echo "                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/shipping/preferences/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminMbeConfiguration&amp;token=13f64c0f7c5aee3046d72b8354ea230e\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminMbeShipping&amp;token=9113f5bb18943618b96654797e5b92b2\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
       ";
        // line 887
        echo "                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/payment/payment_methods?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/payment/payment_methods?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/payment/preferences?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Préférences
                                </a>
                              </li>

               ";
        // line 916
        echo "                                                               </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/international/localization/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/international/localization/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/in";
        // line 945
        echo "dex.php/improve/international/zones/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/international/taxes/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/international/translations/settings?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"134\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fd875bc48fcbedbfd452227b9ff2ce68\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
    ";
        // line 976
        echo "                  </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-134\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=fd875bc48fcbedbfd452227b9ff2ce68\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminPsfacebookModule&amp;token=4196642186fde8d7b65998565c951e67\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
 ";
        // line 1011
        echo "                 
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/preferences/preferences?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/preferences/preferences?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/order-preferences/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Commandes
              ";
        // line 1038
        echo "                  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/product-preferences/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/customer-preferences/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/contacts/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
  ";
        // line 1069
        echo "                              <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/shop/seo-urls/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminSearchConf&amp;token=5a5de15e8be46102f8aa5ccf8fa75f72\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/system-information/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                   ";
        // line 1098
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/system-information/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/performance/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/administration/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/ad";
        // line 1126
        echo "vanced/emails/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/import/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/employees/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/sql-requests/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
             ";
        // line 1157
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/logs/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/webservice-keys/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/configure/advanced/feature-flags/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin277gopvmghyp";
        // line 1182
        echo "cv494mc/index.php/configure/advanced/security/?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminKlaviyoPsConfig&amp;token=ac78b2982c892fb71947bc1304b05a13\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"158\" id=\"tab-AdminYbcBlogFree\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"159\" id=\"subtab-AdminYbcBlogFreePost\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreePost&amp;token=93eb35315826e0d07ec30cf05452869e\" class=\"link\">
                      <i class=\"material-icons m";
        // line 1219
        echo "i-extension\">extension</i>
                      <span>
                      Blog posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"160\" id=\"subtab-AdminYbcBlogFreeCategory\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreeCategory&amp;token=bdede0ed612a09b32dc8f857e2d5fa55\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminYbcBlogFreeComment\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreeComment&amp;token=3ef541a4cd1793754120571b1bd065f8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog comments
                      </span>
   ";
        // line 1253
        echo "                                                 <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminYbcBlogFreeSlider\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreeSlider&amp;token=835265e5577366925bd1251995bd8835\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"163\" id=\"subtab-AdminYbcBlogFreeGallery\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreeGallery&amp;token=4c26b0dbe34f5af026b9f82dfefd019c\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog gallery
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                        ";
        // line 1284
        echo "                            keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"164\" id=\"subtab-AdminYbcBlogFreeSetting\">
                    <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminYbcBlogFreeSetting&amp;token=1f0ede7120ded1e90a36dc969db865a9\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                      ";
        // line 1337
        echo "                                    <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin277gopvmghypcv494mc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ";
        // line 1364
        echo "             <li class=\"nav-item\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/manage?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/alerts?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin277gopvmghypcv494mc/index.php/improve/modules/updates?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                   ";
        // line 1388
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin277gopvmghypcv494mc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252";
        // line 1409
        echo "Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=2rlLLnGPfWeKCzJMOqGkgTOvhQTxsfI2UMH4mT847E8\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1430
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admin277gopvmghypcv494mc/index.php?controller=AdminDashboard&amp;token=859613e99ee23e396f6eb5adbc786a7f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1464
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 109
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1430
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1464
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__93da699ca669b60ee40ac9d88febd0c9b45af07cbab7483c6dbf53c8f0bbae42";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1649 => 1464,  1628 => 1430,  1617 => 109,  1608 => 1464,  1568 => 1430,  1545 => 1409,  1522 => 1388,  1496 => 1364,  1467 => 1337,  1412 => 1284,  1379 => 1253,  1343 => 1219,  1304 => 1182,  1277 => 1157,  1244 => 1126,  1214 => 1098,  1183 => 1069,  1150 => 1038,  1121 => 1011,  1084 => 976,  1051 => 945,  1020 => 916,  989 => 887,  956 => 856,  926 => 828,  894 => 798,  862 => 768,  833 => 741,  796 => 706,  762 => 674,  732 => 646,  701 => 617,  667 => 585,  638 => 558,  604 => 526,  571 => 495,  534 => 460,  488 => 416,  437 => 367,  387 => 319,  345 => 279,  299 => 235,  262 => 200,  243 => 183,  201 => 143,  162 => 109,  138 => 87,  119 => 70,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__93da699ca669b60ee40ac9d88febd0c9b45af07cbab7483c6dbf53c8f0bbae42", "");
    }
}
