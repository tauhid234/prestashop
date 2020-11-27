<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f8806c709ce843381612b94e69467bc15289b81d2585b8641519fa04ef0b9de0 */
class __TwigTemplate_879a11bca57cd650b8a936bc152ebae0ed81020a68ad0eff1a2b39463aca74f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Halaman • TES TOKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.6.9';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '9ba4074fb7d9c222b6deff10340e1ca5';
    var token_admin_orders = 'f03a48bc21113b51b0393b2323894835';
    var token_admin_customers = 'd26ba1fd261106125a432c4fecb85ec4';
    var token_admin_customer_threads = '895a2a35422430e180052d7c4667f9e9';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '2066b9526eaa519289330760fa0bbde1';
    var choose_language_translate = 'Pilih bahasa';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin223zh17js/index.php/improve/modules/catalog/recommended?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w';
    var admin_notification_get_link = '/prestashop/admin223zh17js/index.php/common/notifications?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w';
    var admin_notification_push_link = '/prestashop/admin223zh17js/index.php/common/notifications/ack?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w';
    var tab_modules_list = 'wic_pushproductcms,protectedshops,trustedshops,trustedshopsintegration,ebadgeletitbuy,etranslation,bablic';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin223zh17js/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin223zh17js/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin223zh17js\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin223zh17js\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin223zh17js/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin223zh17js/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin223zh17js/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin223zh17js/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin223zh17js/index.php/common/notifications?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin223zh17js\\/index.php?controller=AdminGamification&token=48e8a55d058e076c5639718e062a0c8c\";
            var current_id_tab = 57;
        </script>";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-id admincmscontent\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminDashboard&amp;token=f5ec8b9c40e62b77f89e6c552fcd932a\"></a>
      <span id=\"shop_version\">1.7.6.9</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=38380717e8065fc923bd75f09a0b096a\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php/sell/catalog/categories/new?token=2c843c8c6d174ef833bc73f0f897b998\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php/improve/modules/manage?token=2c843c8c6d174ef833bc73f0f897b998\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminOrders&amp;token=f03a48bc21113b51b0393b2323894835\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php/sell/catalog/products/new?token=2c843c8c6d174ef833bc73f0f897b998\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=abbb98d292a97a70d973dc44a5b2543c\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"76\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\"
        data-post-link=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminQuickAccesses&token=46093f9de4ce6667e87969eeddb57fbb\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Halaman - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Tambahkan halaman ini ke QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminQuickAccesses&token=46093f9de4ce6667e87969eeddb57fbb\">
      <i class=\"material-icons\">settings</i>
      Kelola akses cepat
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin223zh17js/index.php?controller=AdminSearch&amp;token=1283cc507bf65ccd7bd8e6d6e1278d81\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nama produk, SKU, referensi...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nama...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor faktur\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Lihat toko
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
              Pesanan<span id=\"_nb_new_orders_\"></span>
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
              Pelanggan<span id=\"_nb_new_customers_\"></span>
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
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Apakah Anda memeriksa rasio konversi baru-baru ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Sudahkah Anda mengirim surel akuisisi belakangan ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
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
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/syifatauhid%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Muhammad</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin223zh17js/index.php/configure/advanced/employees/1/edit?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\">
      <i class=\"material-icons\">settings</i>
      Profile Anda
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Pelatihan</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Prestashop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminLogin&amp;logout=1&amp;token=c22f99921aa99a21139e5c91e6265951\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin223zh17js/index.php/configure/advanced/employees/toggle-navigation?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminDashboard&amp;token=f5ec8b9c40e62b77f89e6c552fcd932a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Jual</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminOrders&amp;token=f03a48bc21113b51b0393b2323894835\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Penjualan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminOrders&amp;token=f03a48bc21113b51b0393b2323894835\" class=\"link\"> Penjualan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/orders/invoices/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Invoice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminSlip&amp;token=b7e09a76c7a06feb4f2c3fb4e59deebb\" class=\"link\"> Nota kredit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/orders/delivery-slips/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Nota pengiriman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCarts&amp;token=3191f1718a34e7429ad8a4a167f49218\" class=\"link\"> Daftar belanja
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop/admin223zh17js/index.php/sell/catalog/products?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/catalog/products?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/catalog/categories?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Kategori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminTracking&amp;token=6b8a47deb258a545ba31b8eaa96b8135\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminAttributesGroups&amp;token=c2eb11d05da9dffeafed34281f829078\" class=\"link\"> Atribut dan Fitur
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/catalog/brands/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Brand dan Supplier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminAttachments&amp;token=73df86a7fccbdc52d70d16512dfdf780\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCartRules&amp;token=abbb98d292a97a70d973dc44a5b2543c\" class=\"link\"> Diskon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/stocks/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/prestashop/admin223zh17js/index.php/sell/customers/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/prestashop/admin223zh17js/index.php/sell/customers/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminAddresses&amp;token=e3683b43198a23af13bf82acdd39443f\" class=\"link\"> Alamat
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCustomerThreads&amp;token=895a2a35422430e180052d7c4667f9e9\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Layanan Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCustomerThreads&amp;token=895a2a35422430e180052d7c4667f9e9\" class=\"link\"> Layanan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminOrderMessage&amp;token=d3d421e85846ebc0e5d489dd06906da9\" class=\"link\"> Pesan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminReturn&amp;token=e44b7e0f40a2ac80ed9becf0edfb809b\" class=\"link\"> Retur barang
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminStats&amp;token=38380717e8065fc923bd75f09a0b096a\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistik
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Peningkatan</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/prestashop/admin223zh17js/index.php/improve/modules/manage?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modul
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/modules/manage?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/prestashop/admin223zh17js/index.php/modules/addons/modules/catalog?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Katalog Modul
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/prestashop/admin223zh17js/index.php/improve/design/themes/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Desain
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/design/themes/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/prestashop/admin223zh17js/index.php/modules/addons/themes/catalog?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Kumpulan Tema
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/design/mail_theme/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Tema email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/design/cms-pages/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Halaman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/design/modules/positions/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Posisi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminImages&amp;token=e3f592c3e3fec620f92bf95bd201937b\" class=\"link\"> Pengaturan Gambar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/prestashop/admin223zh17js/index.php/modules/link-widget/list?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCarriers&amp;token=4971745a463e76da57f6e9e269e79069\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Pengiriman
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminCarriers&amp;token=4971745a463e76da57f6e9e269e79069\" class=\"link\"> Kurir
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/shipping/preferences?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/prestashop/admin223zh17js/index.php/improve/payment/payment_methods?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pembayaran
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/payment/payment_methods?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Cara Pembayaran
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/payment/preferences?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/prestashop/admin223zh17js/index.php/improve/international/localization/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internasional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/international/localization/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Pelokalan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminZones&amp;token=ed3d11668824e7d549a39f77cff9e5de\" class=\"link\"> Lokasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/international/taxes/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Pajak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/prestashop/admin223zh17js/index.php/improve/international/translations/settings?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Terjemahan
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminEmarketing&amp;token=42bce2262273f9e71fa4e8141ac4fbb1\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfigurasi</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/preferences/preferences?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parameter Toko
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/preferences/preferences?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Umum
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/order-preferences/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Pengaturan Order
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/product-preferences/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/customer-preferences/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Pengaturan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/contacts/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Kontak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/shop/seo-urls/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminSearchConf&amp;token=37c4f2fa43d4811647828a9e516d2bd2\" class=\"link\"> Cari
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminGamification&amp;token=48e8a55d058e076c5639718e062a0c8c\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/system-information/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parameter lanjutan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/system-information/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Informasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/performance/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Kinerja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/administration/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Administrasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/emails/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/import/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Impor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/employees/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Karyawan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/sql-requests/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/logs/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/prestashop/admin223zh17js/index.php/configure/advanced/webservice-keys/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">36%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:35.714285714286%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Desain</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin223zh17js/index.php/improve/design/cms-pages/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\" aria-current=\"page\">Halaman</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Halaman          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/prestashop/admin223zh17js/index.php/improve/design/cms-pages/category/new?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\"                  title=\"Tambahkan kategori halaman baru\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Tambahkan kategori halaman baru
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/prestashop/admin223zh17js/index.php/improve/design/cms-pages/new?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\"                  title=\"Tambah halaman baru\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Tambah halaman baru
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/prestashop/admin223zh17js/index.php/improve/modules/catalog?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\"                title=\"Modul yang direkomendasikan\"
                              >
                Modul yang direkomendasikan
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin223zh17js/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.6.9%2526country%253Did/Bantuan?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modul dan layanan yang direkomendasikan',
        'Close': 'Tutup',
      },
      recommendedModulesUrl: '/prestashop/admin223zh17js/index.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(5, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ayo kita mulai!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin223zh17js\\/index.php?controller=AdminDashboard&token=f5ec8b9c40e62b77f89e6c552fcd932a\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop\\/admin223zh17js\\/index.php\\/sell\\/catalog\\/products\\/new?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin223zh17js\\/index.php\\/improve\\/design\\/themes\\/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"\\/prestashop\\/admin223zh17js\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\",\"2\":\"Sesuaikan tawaran Anda dengan pasar: Tambahkan cara pembayaran untuk pelanggan!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin223zh17js\\/index.php\\/improve\\/payment\\/payment_methods?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dan Anda bisa memilih untuk menambahkan cara pembayaran lainnya dari sini!\",\"page\":\"\\/prestashop\\/admin223zh17js\\/index.php\\/improve\\/payment\\/payment_methods?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\",\"2\":\"Pilih solusi pengiriman yang paling mungkin akan cocok dengan pelanggan! Buat kurir Anda sendiri atau tambahkan modul yang siap pakai.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin223zh17js\\/index.php?controller=AdminCarriers&token=4971745a463e76da57f6e9e269e79069\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Anda bisa menawarkan pilihan pengantaran yang lebih banyak dengan membentuk kurir tambahan\",\"page\":\"http:\\/\\/localhost\\/prestashop\\/admin223zh17js\\/index.php?controller=AdminCarriers&token=4971745a463e76da57f6e9e269e79069\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop\\/admin223zh17js\\/index.php\\/improve\\/modules\\/catalog?_token=ZXV19-Q3AMmKA5Oo7THijtFOaM3M1NGt5NuVAFtpu7w\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\n          Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Pelatihan<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminWelcome&token=33b97c776094c8e465ffc00b458d59ad\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>";
        // line 1217
        $this->displayBlock('content_header', $context, $blocks);
        // line 1218
        $this->displayBlock('content', $context, $blocks);
        // line 1219
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1220
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1221
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/prestashop/admin223zh17js/index.php?controller=AdminDashboard&amp;token=f5ec8b9c40e62b77f89e6c552fcd932a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=syifatauhid%40gmail.com&amp;firstname=Muhammad&amp;lastname=Tauhid&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin223zh17js/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=syifatauhid%40gmail.com&amp;firstname=Muhammad&amp;lastname=Tauhid&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>";
        // line 1328
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1217
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1218
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1219
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1220
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1328
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__f8806c709ce843381612b94e69467bc15289b81d2585b8641519fa04ef0b9de0";
    }

    public function getDebugInfo()
    {
        return array (  1408 => 1328,  1403 => 1220,  1398 => 1219,  1393 => 1218,  1388 => 1217,  1379 => 104,  1371 => 1328,  1264 => 1221,  1262 => 1220,  1260 => 1219,  1258 => 1218,  1256 => 1217,  142 => 104,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f8806c709ce843381612b94e69467bc15289b81d2585b8641519fa04ef0b9de0", "");
    }
}
