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

/* __string_template__04132ea0fb18942d347b2b29343234feb161101e16ce381e7c2bade84b49d4b3 */
class __TwigTemplate_022cea8c298e9263be5a125b419ee6228b2879bd3043699f96cd57a205697d8a extends \Twig\Template
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
<html lang=\"vn\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Danh mục • Inax</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'vn';
    var lang_is_rtl = '0';
    var full_language_code = 'vi-vn';
    var full_cldr_language_code = 'vi-VN';
    var country_iso_code = 'VN';
    var _PS_VERSION_ = '1.7.7.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Một đơn hàng mới đã được đặt trên cửa hàng của bạn.';
    var order_number_msg = 'Số đơn hàng: ';
    var total_msg = 'Tổng cộng: ';
    var from_msg = 'Từ: ';
    var see_order_msg = 'Xem đơn hàng này';
    var new_customer_msg = 'Một khách hàng mới đăng ký vào cửa hàng của bạn.';
    var customer_name_msg = 'Tên khách hàng: ';
    var new_msg = 'Một tin nhắn mới đã được đăng trên cửa hàng của bạn.';
    var see_msg = 'Đọc tin nhắn này';
    var token = '4524714d57e6e5cb32f2f9e1e2381245';
    var token_admin_orders = '10895729d2f59a7d14c5e1d4e6ddf7e8';
    var token_admin_customers = '5ca59f5852578786bcb43e7165ed78fc';
    var token_admin_customer_threads = '1734a16ad3807175097c0451cb70390a';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '71f5c69241a757f4be72e7523f9a622f';
    var choose_language_translate = 'Chọn ngôn ngữ:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin512cci02k/index.php/improve/modules/catalog/recommended?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8';
    var admin_notification_get_link = '/prestashop/admin512cci02k/index.php/common/notifications?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8';
    var admin_notification_push_link = '/prestashop/admin512cci02k/index.php/common/notifications/ack?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8';
    var tab_modules_list = '';
    var update_success_msg = 'Cập nhật thành công';
    var errorLogin = 'PrestaShop đã không thể đăng nhập vào Addons. Vui lòng kiểm tra thông tin của bạn và kết nối Internet của bạn.';
    var search_product_msg = 'Tìm kiếm một sản phẩm';
  </script>

      <link href=\"/prestashop/admin512cci02k/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin512cci02k/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin512cci02k\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin512cci02k\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"\\u0110\\u1ed3ng Vi\\u1ec7t Nam\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin512cci02k/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin512cci02k/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin512cci02k/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin512cci02k/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin512cci02k/index.php/common/notifications?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 97
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-vn admincategories\"
  data-base-url=\"/prestashop/admin512cci02k/index.php\"  data-token=\"0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminDashboard&amp;token=2c210facc0775a8775fe3cce3b3e9efa\"></a>
      <span id=\"shop_version\">1.7.7.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Truy cập nhanh
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php/improve/modules/manage?token=7980cbe90862fde6ed0063ec4f3f5332\"
                 data-item=\"Các mô-đun đã cài đặt\"
      >Các mô-đun đã cài đặt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php/sell/catalog/categories/new?token=7980cbe90862fde6ed0063ec4f3f5332\"
                 data-item=\"Danh mục mới\"
      >Danh mục mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fb338815a3593393248a73213a1fb35e\"
                 data-item=\"Phiếu giảm giá mới\"
      >Phiếu giảm giá mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php/sell/catalog/products/new?token=7980cbe90862fde6ed0063ec4f3f5332\"
                 data-item=\"Sản phẩm mới\"
      >Sản phẩm mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c27123b69da0dcc54b45c34e1585c889\"
                 data-item=\"Định giá danh mục\"
      >Định giá danh mục</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminOrders&amp;token=10895729d2f59a7d14c5e1d4e6ddf7e8\"
                 data-item=\"Đơn hàng\"
      >Đơn hàng</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"174\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories\"
        data-post-link=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminQuickAccesses&token=bd6565590a3a63de34acdbf83111522b\"
        data-prompt-text=\"Vui lòng đặt tên phím tắt này:\"
        data-link=\"Danh mục - Dạng danh mục\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminQuickAccesses&token=bd6565590a3a63de34acdbf83111522b\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin512cci02k/index.php?controller=AdminSearch&amp;token=545aaf9a01b941cd2e2d50a59a1dcfcb\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Tìm kiếm (ví dụ: tham chiếu sản phẩm, tên khách hàng...) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Mọi nơi
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Mọi nơi\" href=\"#\" data-value=\"0\" data-placeholder=\"Bạn đang tìm kiếm thứ gì?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Mọi nơi</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Danh mục\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Danh mục</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng tên\" href=\"#\" data-value=\"2\" data-placeholder=\"Tên\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Khách hàng bằng tên</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng địa chỉ Ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Khách hàng theo địa chỉ IP</a>
        <a class=\"dropdown-item\" data-item=\"Đơn hàng\" href=\"#\" data-value=\"3\" data-placeholder=\"ID đơn đặt hàng\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Đơn hàng</a>
        <a class=\"dropdown-item\" data-item=\"Biên nhận\" href=\"#\" data-value=\"4\" data-placeholder=\"Số hóa đơn\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Biên nhận</a>
        <a class=\"dropdown-item\" data-item=\"Giỏ hàng\" href=\"#\" data-value=\"5\" data-placeholder=\"Mã ID thẻ\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Giỏ hàng</a>
        <a class=\"dropdown-item\" data-item=\"Các mô-đun\" href=\"#\" data-value=\"7\" data-placeholder=\"Tên module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Các mô-đun</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">TÌM KIẾM</span><i class=\"material-icons\">search</i></button>
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
      Xem cửa hàng của tôi
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
              Đơn hàng<span id=\"_nb_new_orders_\"></span>
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
              Khách hàng<span id=\"_nb_new_customers_\"></span>
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
              Tin nhắn<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có đơn hàng mới vào lúc này :(<br>
              Gần đây bạn đã chọn tỉ giá chuyển đổi chưa?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có khách hàng mới vào lúc này :(<br>
              Gần đây bạn có hoạt động trên mạng xã hội không?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có tin nhắn mới vào lúc này.<br>
              Có vẻ như tất cả khách hàng của bạn đều hài lòng :)
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
      từ <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - đã đăng ký <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/taitatsang%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Sáng</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin512cci02k/index.php/configure/advanced/employees/1/edit?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\">
      <i class=\"material-icons\">settings</i>
      Hồ sơ của bạn
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Đào tạo</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminLogin&amp;logout=1&amp;token=8cde90b261e15e7763ab7173c6a186a4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Đăng xuất</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin512cci02k/index.php/configure/advanced/employees/toggle-navigation?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminDashboard&amp;token=2c210facc0775a8775fe3cce3b3e9efa\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Bảng điều khiển</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Bán hàng</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin512cci02k/index.php/sell/orders/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Đơn hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/orders/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/orders/invoices/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Biên nhận
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/orders/credit-slips/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Phiếu tín dụng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/orders/delivery-slips/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Phiếu giao hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCarts&amp;token=4186e795625ccdc87853a377256abed1\" class=\"link\"> Giỏ hàng
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin512cci02k/index.php/sell/catalog/products?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Danh mục
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/catalog/products?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Sản phẩm
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/catalog/categories?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Danh mục
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/catalog/monitoring/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Giám sát
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminAttributesGroups&amp;token=2c316cf6df4a4e45f157d025563893c8\" class=\"link\"> Thuộc tính &amp; Tính năng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/catalog/brands/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Thương hiệu &amp; Nhà cung cấp
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/attachments/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Tập tin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCartRules&amp;token=fb338815a3593393248a73213a1fb35e\" class=\"link\"> Giảm giá
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/stocks/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin512cci02k/index.php/sell/customers/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Khách hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/customers/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Khách hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/addresses/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Địa chỉ
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCustomerThreads&amp;token=1734a16ad3807175097c0451cb70390a\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Dịch vụ Khách hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCustomerThreads&amp;token=1734a16ad3807175097c0451cb70390a\" class=\"link\"> Dịch vụ Khách hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin512cci02k/index.php/sell/customer-service/order-messages/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Tin nhắn đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminReturn&amp;token=9b3f357f67239bdaec4f44ee4f799486\" class=\"link\"> Hàng hóa trả lại
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminStats&amp;token=c27123b69da0dcc54b45c34e1585c889\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Cải thiện</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin512cci02k/index.php/improve/modules/manage?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Các mô-đun
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/modules/manage?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin512cci02k/index.php/modules/addons/modules/catalog?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin512cci02k/index.php/improve/design/themes/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Thiết kế
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/design/themes/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Chủ đề &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin512cci02k/index.php/modules/addons/themes/catalog?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Danh mục Chủ đề
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/design/mail_theme/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/design/cms-pages/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Các trang
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/design/modules/positions/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Vị trí
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminImages&amp;token=6c7a5c2dd818e23c6ca3d47d2c80cf34\" class=\"link\"> Cài đặt hình ảnh
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin512cci02k/index.php/modules/link-widget/list?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCarriers&amp;token=535e0176814af8011d42c2c022715629\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Vận chuyển
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminCarriers&amp;token=535e0176814af8011d42c2c022715629\" class=\"link\"> Cty vận chuyển
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/shipping/preferences?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Tùy chọn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin512cci02k/index.php/improve/payment/payment_methods?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Thanh toán
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/payment/payment_methods?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Phương thức thanh toán
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/payment/preferences?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Tùy chọn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin512cci02k/index.php/improve/international/localization/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Quốc tế
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/international/localization/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Địa phương hóa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminZones&amp;token=07b68a8760f9e93c871ece0f0ba166e6\" class=\"link\"> Địa phương
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/international/taxes/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Thuế
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin512cci02k/index.php/improve/international/translations/settings?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Dịch
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Cấu hình</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/preferences/preferences?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Thông số cửa hàng
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/preferences/preferences?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Chung
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/order-preferences/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Cài đặt Đơn hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/product-preferences/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Cài đặt Sản phẩm
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/customer-preferences/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Cài đặt Khách hàng
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/contacts/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Liên hệ
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/shop/seo-urls/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Truy cập &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminSearchConf&amp;token=d8b976bc982805aabe31ead5c008c45f\" class=\"link\"> Tìm kiếm
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/system-information/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Thông số chi tiết
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/system-information/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Thông tin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/performance/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/administration/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Quản trị
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/emails/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Hộp thư
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/import/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Nhập vào
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/employees/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Quản trị viên
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/sql-requests/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Cơ sở dữ liệu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/logs/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Nhật ký
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin512cci02k/index.php/configure/advanced/webservice-keys/?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Danh mục</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Danh mục          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin512cci02k/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\"                  title=\"Thêm danh mục mới\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Thêm danh mục mới
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Giúp đỡ\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin512cci02k/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fvn%252Fdoc%252FAdminCategories%253Fversion%253D1.7.7.0%2526country%253Dvn/Gi%C3%BAp%20%C4%91%E1%BB%A1?_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8\"
                   id=\"product_form_open_help\"
                >
                  Giúp đỡ
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Các module và các dịch vụ được đề xuất',
        'Close': 'đóng',
      },
      recommendedModulesUrl: '/prestashop/admin512cci02k/index.php/modules/addons/modules/recommended?tabClassName=AdminCategories&_token=0smekatgLeVs6_CCuF23ThqPg32U4yI5ECcWzcbREH8',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1083
        $this->displayBlock('content_header', $context, $blocks);
        // line 1084
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1085
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1086
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1087
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, Không!</h1>
  <p class=\"mt-3\">
    Phiên bản dành cho điện thoại di động của trang này chưa có.
  </p>
  <p class=\"mt-2\">
    Vui lòng sử dụng một máy tính để bàn để truy cập vào trang này, cho đến khi được điều chỉnh cho điện thoại di động.
  </p>
  <p class=\"mt-2\">
    Cảm ơn.
  </p>
  <a href=\"http://localhost/prestashop/admin512cci02k/index.php?controller=AdminDashboard&amp;token=2c210facc0775a8775fe3cce3b3e9efa\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Quay lại
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=taitatsang%40gmail.com&amp;firstname=S%C3%A1ng&amp;lastname=Tai&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin512cci02k/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Kết nối cửa hàng của bạn với chợ PrestaShop để tự động nhập tất cả các mua bán Addons của bạn.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=taitatsang%40gmail.com&amp;firstname=S%C3%A1ng&amp;lastname=Tai&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
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

    </div>
  
";
        // line 1194
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 97
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1083
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1084
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1085
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1086
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1194
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
        return "__string_template__04132ea0fb18942d347b2b29343234feb161101e16ce381e7c2bade84b49d4b3";
    }

    public function getDebugInfo()
    {
        return array (  1284 => 1194,  1279 => 1086,  1274 => 1085,  1269 => 1084,  1264 => 1083,  1255 => 97,  1247 => 1194,  1138 => 1087,  1135 => 1086,  1132 => 1085,  1129 => 1084,  1127 => 1083,  137 => 97,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__04132ea0fb18942d347b2b29343234feb161101e16ce381e7c2bade84b49d4b3", "");
    }
}
