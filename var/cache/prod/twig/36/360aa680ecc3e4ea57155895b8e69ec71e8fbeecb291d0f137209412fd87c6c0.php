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

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? null), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "  <div class=\"products-catalog\">";
        // line 40
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content container-fluid\">";
        // line 44
        if (twig_length_filter($this->env, ($context["permission_error"] ?? null))) {
            // line 45
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">";
            // line 52
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? null), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>";
        }
        // line 58
        echo "
      <div class=\"row align-items-start\">";
        // line 60
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 64
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 73
        echo "      </div>";
        // line 75
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 99
        echo "
    </div>
  </div>";
        // line 104
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104, "1948015974")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 126
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126, "2145568291")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 148
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148, "204669730")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 170
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170, "656745887")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 192
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192, "1117141359")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg"]]]));
        // line 210
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210, "1050820355")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
    }

    // line 60
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        // line 61
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => ($context["import_link"] ?? null)]);
    }

    // line 64
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        // line 65
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 66
($context["limit"] ?? null), "offset" =>         // line 67
($context["offset"] ?? null), "orderBy" =>         // line 68
($context["orderBy"] ?? null), "sortOrder" =>         // line 69
($context["sortOrder"] ?? null)]);
    }

    // line 75
    public function block_product_catalog_form($context, array $blocks = [])
    {
        // line 76
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 77
($context["limit"] ?? null), "orderBy" =>         // line 78
($context["orderBy"] ?? null), "offset" =>         // line 79
($context["offset"] ?? null), "sortOrder" =>         // line 80
($context["sortOrder"] ?? null), "filter_category" =>         // line 81
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 82
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 83
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 84
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 85
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 86
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 87
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 88
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 89
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 90
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 91
($context["products"] ?? null), "last_sql" =>         // line 92
($context["last_sql"] ?? null), "product_count_filtered" =>         // line 93
($context["product_count_filtered"] ?? null), "pagination_parameters" =>         // line 94
($context["pagination_parameters"] ?? null), "pagination_limit_choices" =>         // line 95
($context["pagination_limit_choices"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___1948015974 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 104
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        // line 115
        echo "      <div class=\"modal-body\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___2145568291 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        // line 137
        echo "      <div class=\"modal-body\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 140,  304 => 138,  302 => 137,  299 => 136,  282 => 126,  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___204669730 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 148
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 158
    public function block_content($context, array $blocks = [])
    {
        // line 159
        echo "      <div class=\"modal-body\">";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 162,  374 => 160,  372 => 159,  369 => 158,  352 => 148,  308 => 140,  304 => 138,  302 => 137,  299 => 136,  282 => 126,  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___656745887 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 170
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        // line 181
        echo "      <div class=\"modal-body\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 184,  444 => 182,  442 => 181,  439 => 180,  422 => 170,  378 => 162,  374 => 160,  372 => 159,  369 => 158,  352 => 148,  308 => 140,  304 => 138,  302 => 137,  299 => 136,  282 => 126,  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___1117141359 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 192
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 203
    public function block_content($context, array $blocks = [])
    {
        // line 204
        echo "      <div class=\"modal-body\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 205,  512 => 204,  509 => 203,  492 => 192,  448 => 184,  444 => 182,  442 => 181,  439 => 180,  422 => 170,  378 => 162,  374 => 160,  372 => 159,  369 => 158,  352 => 148,  308 => 140,  304 => 138,  302 => 137,  299 => 136,  282 => 126,  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_38571a10ebcf0314e6e4c5c6196724ad5c2363f2535c502f6c37955d1d785615___1050820355 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 210
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 221
    public function block_content($context, array $blocks = [])
    {
        // line 222
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 222,  574 => 221,  557 => 210,  514 => 205,  512 => 204,  509 => 203,  492 => 192,  448 => 184,  444 => 182,  442 => 181,  439 => 180,  422 => 170,  378 => 162,  374 => 160,  372 => 159,  369 => 158,  352 => 148,  308 => 140,  304 => 138,  302 => 137,  299 => 136,  282 => 126,  238 => 118,  234 => 116,  232 => 115,  229 => 114,  212 => 104,  171 => 95,  170 => 94,  169 => 93,  168 => 92,  167 => 91,  166 => 90,  165 => 89,  164 => 88,  163 => 87,  162 => 86,  161 => 85,  160 => 84,  159 => 83,  158 => 82,  157 => 81,  156 => 80,  155 => 79,  154 => 78,  153 => 77,  152 => 76,  149 => 75,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  138 => 64,  134 => 61,  131 => 60,  127 => 210,  125 => 192,  123 => 170,  121 => 148,  119 => 126,  117 => 104,  113 => 99,  111 => 75,  109 => 73,  107 => 64,  105 => 60,  102 => 58,  94 => 52,  86 => 45,  84 => 44,  79 => 40,  77 => 38,  74 => 37,  69 => 34,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\catalog.html.twig");
    }
}
