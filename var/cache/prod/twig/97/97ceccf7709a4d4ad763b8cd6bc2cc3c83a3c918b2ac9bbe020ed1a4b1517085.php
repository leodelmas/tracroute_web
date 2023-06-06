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

/* __string_template__de5a4506be9deb306ff07ea6fb906775a69d95124132b4a044f46fb8821cd94c */
class __TwigTemplate_eff4d1828f4d608bd9793bdc77c0e5f515887a943a34753e22598b149a3f2cde extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/tracroute_web/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/tracroute_web/img/app_icon.png\" />

<title>Commandes • Tracroute</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'd84a7d39ec4833cd2a7367a640b3973c';
    var token_admin_orders = tokenAdminOrders = 'd84a7d39ec4833cd2a7367a640b3973c';
    var token_admin_customers = 'a10adf948447a8c7e1ffb482b4dd8132';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'ab4dfce47aa9a4f78ec819880360e35a';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = '9ecfefea8b851f8aac6add786be63000';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/tracroute_web/admin1189gutynxijazakewz/index.php/improve/modules/manage?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE';
    var admin_notification_get_link = '/tracroute_web/admin1189gutynxijazake";
        // line 42
        echo "wz/index.php/common/notifications?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE';
    var admin_notification_push_link = adminNotificationPushLink = '/tracroute_web/admin1189gutynxijazakewz/index.php/common/notifications/ack?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/tracroute_web/admin1189gutynxijazakewz/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/tracroute_web/admin1189gutynxijazakewz/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/ps_checkout/views/css/adminOrderView.css?version=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/admin1189gutynxijazakewz/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tracroute_web/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/";
        // line 68
        echo "edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/tracroute_web\\/admin1189gutynxijazakewz\\/\";
var baseDir = \"\\/tracroute_web\\/\";
var changeFormLanguageUrl = \"\\/tracroute_web\\/admin1189gutynxijazakewz\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psgdprNoAddresses = \"Donn\\u00e9es client supprim\\u00e9es par le module RGPD officiel.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/tracroute_web/admin1189gutynxijazakewz/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/admin1189gutynxijazakewz/themes/new-the";
        // line 87
        echo "me/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_mbo/views/js/recommended-modules.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_checkout/views/js/adminOrderView.js?version=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/admin1189gutynxijazakewz/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/tracroute_web/modules/ps_edition_basic/views/js/favicon.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8888\\/tracroute_web\\/admin1189gutynxijazakewz\\/index.php?controller=AdminGamification&token=f668d76e9eba0b0720a93a96714f8eb2\";
            var current_id_tab = 4;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificati";
        // line 111
        echo "onGetUrl: '/tracroute_web/admin1189gutynxijazakewz/index.php/common/notifications?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 121
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminorders\"
  data-base-url=\"/tracroute_web/admin1189gutynxijazakewz/index.php\"  data-token=\"4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminDashboard&amp;token=4a01b190445c6eae397533dc06f0590a\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link active\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders?token=a7588cf62d78ae8c35865c7104f8ee94\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4e227a512ab33ae156e0c759a0ef3fdf\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/improve/modules/manage?token=a7588cf62d78ae8c35865c7104f8ee94\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCartRules&amp;addcart_ru";
        // line 155
        echo "le&amp;token=2ebc7adbfc28a7e67de817111a222107\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/products/new?token=a7588cf62d78ae8c35865c7104f8ee94\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/categories/new?token=a7588cf62d78ae8c35865c7104f8ee94\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"1\"
        data-rand=\"19\"
        data-icon=\"icon-AdminParentOrders\"
        data-url=\"index.php/sell/orders\"
        data-post-link=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminQuickAccesses&token=b6c60988e18d4f04fbf8171122be4f18\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Commandes - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminQuickAccesses&token=b6c60988e18d4f04fbf8171122be4f18\">
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
      a";
        // line 195
        echo "ction=\"/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminSearch&amp;token=04a1f5d8918185f4b3f49decd314d9fa\"
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures<";
        // line 211
        echo "/a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
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
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders?token=a7588cf62d78ae8c35865c7104f8ee94\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4e227a512ab33ae156e0c759a0ef3fdf\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/improve/modules/manage?token=a7588cf62d78ae8c35865c7104f8ee94\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2ebc7adbfc28a7e67de817111a222107\"
             da";
        // line 246
        echo "ta-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/products/new?token=a7588cf62d78ae8c35865c7104f8ee94\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/categories/new?token=a7588cf62d78ae8c35865c7104f8ee94\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"1\"
      data-rand=\"137\"
      data-icon=\"icon-AdminParentOrders\"
      data-url=\"index.php/sell/orders\"
      data-post-link=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminQuickAccesses&token=b6c60988e18d4f04fbf8171122be4f18\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Commandes - Liste\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Supprimer de l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminQuickAccesses&token=b6c60988e18d4f04fbf8171122be4f18\">
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
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en maintenan";
        // line 289
        echo "ce.</strong></p><p class=&quot;text-left&quot;>Vos clients et visiteurs ne peuvent y accéder actuellement. &amp;lt;br /&amp;gt; Vous pouvez gérer les paramètres de maintenance dans l&#039;onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/maintenance/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"
          >
            <i class=\"material-icons\">build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/tracroute_web/\" target= \"_blank\">
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
              class=\"nav-link active\"
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
      ";
        // line 331
        echo "        data-type=\"customer\"
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
              Avez-vous consulté vos <strong><a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ab1f0cc6811553dab10ce2b6ab9cfc35\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </";
        // line 374
        echo "div>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/tracroute_web/img/pr/default.jpg\" alt=\"Antinova\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Antinova</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/employees/1/edit?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=loc";
        // line 424
        echo "alhost%3A8888&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-fr\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminLogin&amp;logout=1&amp;token=2838ad0c4383fa415332c229173b009b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    ";
        // line 449
        echo "</nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/employees/toggle-navigation?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminDashboard&amp;token=4a01b190445c6eae397533dc06f0590a\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminDashboard&amp;token=4a01b190445c6eae397533dc06f0590a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-shop";
        // line 490
        echo "ping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/invoices/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/credit-slips/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2U";
        // line 519
        echo "nE\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/delivery-slips/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCarts&amp;token=ab1f0cc6811553dab10ce2b6ab9cfc35\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/products?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
           ";
        // line 552
        echo "                                                         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/products?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/categories?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/monitoring/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
    ";
        // line 582
        echo "                                                        
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminAttributesGroups&amp;token=5dd3918b1aab01bba0a862f2fecfd8bc\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/catalog/brands/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/attachments/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCartRules";
        // line 608
        echo "&amp;token=2ebc7adbfc28a7e67de817111a222107\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/stocks/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/customers/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu";
        // line 640
        echo "=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/customers/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/addresses/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCustomerThreads&amp;token=ab4dfce47aa9a4f78ec819880360e35a\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
     ";
        // line 670
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCustomerThreads&amp;token=ab4dfce47aa9a4f78ec819880360e35a\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/customer-service/order-messages/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminReturn&amp;token=b933ee8d30025b84dcfc66966061219f\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3";
        // line 700
        echo "2\" id=\"subtab-AdminStats\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/metrics/legacy/stats?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
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
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/metrics/legacy/stats?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/metrics?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
         ";
        // line 729
        echo "                     
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/modules/catalog/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/modules/catalog/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
 ";
        // line 764
        echo "                                                           
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/modules/manage?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/design/themes/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/design/themes/?_token=4qTkc8Hnom4IKkExIdhNz8R";
        // line 791
        echo "2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/themes/catalog/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/design/mail_theme/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/design/cms-pages/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li clas";
        // line 822
        echo "s=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/design/modules/positions/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminImages&amp;token=0419e94eb8732f54e23a430e00c79213\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/link-widget/list?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCarriers&amp;token=076677a7cb69fc9614b9931a1872b441\" class=\"lin";
        // line 850
        echo "k\">
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
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminCarriers&amp;token=076677a7cb69fc9614b9931a1872b441\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/shipping/preferences/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost:";
        // line 880
        echo "8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminMbeConfiguration&amp;token=2cf930bb7a4ec38354481f739c0bb5ed\" class=\"link\"> Paramètres
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminMbeShipping&amp;token=55d4783a43f8c911e92cb82726b03a3c\" class=\"link\"> Expéditions MBE
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/payment/payment_methods?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
     ";
        // line 911
        echo "                                                       
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/payment/payment_methods?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/payment/preferences?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/international/localization/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                               ";
        // line 940
        echo "             </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/international/localization/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/international/zones/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/international/taxes/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-";
        // line 969
        echo "submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/improve/international/translations/settings?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"136\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a0f2343de5beb5d49c68d90ff442364e\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-136\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a0f2343de5beb5d49c68d90ff442364e\" class=\"link\"> Google
                                </a>
                         ";
        // line 997
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminPsfacebookModule&amp;token=5326f500f2fba6c2bcf8ec5a0bf0c5e3\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/preferences/preferences?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collap";
        // line 1033
        echo "se\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/preferences/preferences?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/order-preferences/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/product-preferences/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                               ";
        // line 1062
        echo " <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/customer-preferences/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/contacts/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/shop/seo-urls/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminSearchConf&amp;token=9ac9188f076ed7c5b467def637c47a6d\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
             ";
        // line 1091
        echo "                           </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/system-information/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/system-information/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/performance/?";
        // line 1119
        echo "_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/administration/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/emails/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/import/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                           ";
        // line 1150
        echo "   <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/employees/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/sql-requests/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/logs/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/webservice-keys/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Webservice
                                </a>
                              ";
        // line 1177
        echo "</li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/feature-flags/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/configure/advanced/security/?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Commandes</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Commandes    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
          ";
        // line 1230
        echo "        class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/new?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"                  title=\"Ajouter une commande\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une commande
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/tracroute_web/admin1189gutynxijazakewz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminOrders%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/sell/orders/new?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"              title=\"Ajouter une commande\"            >
              Ajouter une commande
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn ";
        // line 1267
        echo "btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/tracroute_web/admin1189gutynxijazakewz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminOrders%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Booster les ventes',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/modules/recommended/?tabClassName=AdminOrders&recommendation_format=modal&_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1306
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
  <a href=\"http://localhost:8888/tracroute_web/admin1189gutynxijazakewz/index.php?controller=AdminDashboard&amp;token=4a01b190445c6eae397533dc06f0590a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Se connecter à la marketplace Addons</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Liez votre boutique à votre compte Addons pour recevoir automatiquement les mises à jour importantes des modules que vous avez achetés. Vous n&#039;avez pas encore de compte ?
                      <a href=\"https://accounts.distribution.prestashop.net/fr/sign-up?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Inscrivez-vous maintenant</a>
                  </p>
                  <p>
                      Si vous avez créé votre compte avec Google, veuillez suivre la procédure de mot de passe oublié de Addons M";
        // line 1348
        echo "arketplace pour créer votre mot de passe : 
                      <a href=\"https://auth.prestashop.com/fr/mot-de-passe/demande-de-reinitialisation\" target=\"_blank\">Réinitialiser votre mot de passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/addons/login?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Adresse e-mail</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Mot de passe</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Se souvenir de moi
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">C&#039;est parti !</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://auth.prestashop.com/fr/mot-de-passe/demande-de-reinitialisation\" target=\"_blank\">Mot de passe oublié ?</a>
                </p>
              ";
        // line 1379
        echo "</div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmer la déconnexion</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Vous êtes sur le point de vous déconnecter de votre compte Addons. Vous pourriez rater d&#039;importantes mises à jour pour les modules que vous avez achetés.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Annuler\">
          <a class=\"btn btn-primary uppercase\" href=\"/tracroute_web/admin1189gutynxijazakewz/index.php/modules/mbo/addons/logout?_token=4qTkc8Hnom4IKkExIdhNz8R2wXr_ZzS6sgGWqIM2UnE\" id=\"module-modal-addons-logout-ack\">Oui, me déconnecter</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1418
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 121
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1306
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

    // line 1418
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
        return "__string_template__de5a4506be9deb306ff07ea6fb906775a69d95124132b4a044f46fb8821cd94c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1599 => 1418,  1578 => 1306,  1567 => 121,  1558 => 1418,  1517 => 1379,  1484 => 1348,  1436 => 1306,  1395 => 1267,  1356 => 1230,  1301 => 1177,  1272 => 1150,  1239 => 1119,  1209 => 1091,  1178 => 1062,  1147 => 1033,  1109 => 997,  1079 => 969,  1048 => 940,  1017 => 911,  984 => 880,  952 => 850,  922 => 822,  889 => 791,  860 => 764,  823 => 729,  792 => 700,  760 => 670,  728 => 640,  694 => 608,  666 => 582,  634 => 552,  599 => 519,  568 => 490,  525 => 449,  498 => 424,  446 => 374,  401 => 331,  357 => 289,  312 => 246,  275 => 211,  257 => 195,  215 => 155,  176 => 121,  164 => 111,  138 => 87,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__de5a4506be9deb306ff07ea6fb906775a69d95124132b4a044f46fb8821cd94c", "");
    }
}
