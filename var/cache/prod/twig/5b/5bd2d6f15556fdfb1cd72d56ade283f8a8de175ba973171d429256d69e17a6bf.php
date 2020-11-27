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

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_33f5a7e46255e504ae42df4cd1c6b6b1b5b332cce1a9ad38b90a03d34abca72a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_header' => [$this, 'block_product_catalog_form_table_header'],
            'product_catalog_form_table_filters' => [$this, 'block_product_catalog_form_table_filters'],
            'product_catalog_form_table_items' => [$this, 'block_product_catalog_form_table_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25);
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" =>         // line 30
($context["limit"] ?? null), "offset" =>         // line 31
($context["offset"] ?? null), "orderBy" =>         // line 32
($context["orderBy"] ?? null), "sortOrder" =>         // line 33
($context["sortOrder"] ?? null)]), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 85
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 199
        echo "    </thead>";
        // line 200
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 210
        echo "  </table>
</div>
";
    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = [])
    {
        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">";
        // line 42
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "id_product", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">";
        // line 48
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "name", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">";
        // line 51
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "reference", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\">";
        // line 54
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "Admin.Catalog.Feature"), "name_category", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">";
        // line 57
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "price", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </th>";
        // line 63
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 64
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">";
            // line 65
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Catalog.Feature"), "sav_quantity", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
            echo "
          </th>";
        } else {
            // line 68
            echo "            <th></th>";
        }
        // line 70
        echo "
          <th scope=\"col\" class=\"text-center\">";
        // line 72
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "active", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>";
        // line 74
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 75
            echo "            <th scope=\"col\">";
            // line 76
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", [], "Admin.Global"), "position", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
            echo "
            </th>";
        }
        // line 79
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>";
    }

    // line 85
    public function block_product_catalog_form_table_filters($context, array $blocks = [])
    {
        // line 86
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? null);
        // line 87
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">";
        // line 89
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 89)->display(twig_array_merge($context, ["input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 95
($context["filter_column_id_product"] ?? null), "disabled" =>         // line 96
($context["filters_disabled"] ?? null)]));
        // line 98
        echo "          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "\"";
        // line 107
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 108
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? null), "html", null, true);
        echo "\"";
        // line 117
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 118
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 126
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? null), "html", null, true);
        echo "\"";
        // line 127
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 128
        echo "            />
          </th>
          <th class=\"text-center\">";
        // line 131
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 131)->display(twig_array_merge($context, ["input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 137
($context["filter_column_price"] ?? null), "disabled" =>         // line 138
($context["filters_disabled"] ?? null)]));
        // line 140
        echo "          </th>
          <th class=\"text-center\"></th>";
        // line 142
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 143
            echo "          <th class=\"text-center\">";
            // line 144
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 144)->display(twig_array_merge($context, ["input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>             // line 150
($context["filter_column_sav_quantity"] ?? null), "disabled" =>             // line 151
($context["filters_disabled"] ?? null)]));
            // line 153
            echo "          </th>";
        } else {
            // line 155
            echo "            <th></th>";
        }
        // line 157
        echo "
          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 160
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        echo ">
                <option value=\"\"></option>
                <option value=\"1\"";
        // line 162
        if (((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context)) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\"";
        // line 163
        if (((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context)) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>";
        // line 167
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 168
            echo "            <th>";
            // line 169
            if ( !($context["activate_drag_and_drop"] ?? null)) {
                // line 170
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", [], "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />";
            } else {
                // line 172
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", [], "Admin.Actions");
                echo "\" />";
            }
            // line 174
            echo "            </th>";
        }
        // line 176
        echo "          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>";
    }

    // line 200
    public function block_product_catalog_form_table_items($context, array $blocks = [])
    {
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", ["limit" =>         // line 202
($context["limit"] ?? null), "offset" =>         // line 203
($context["offset"] ?? null), "orderBy" =>         // line 204
($context["orderBy"] ?? null), "sortOrder" =>         // line 205
($context["sortOrder"] ?? null), "products" =>         // line 206
($context["products"] ?? null), "last_sql" =>         // line 207
($context["last_sql"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 207,  327 => 206,  326 => 205,  325 => 204,  324 => 203,  323 => 202,  322 => 201,  319 => 200,  311 => 194,  306 => 191,  296 => 184,  291 => 181,  284 => 176,  281 => 174,  276 => 172,  271 => 170,  269 => 169,  267 => 168,  265 => 167,  257 => 163,  251 => 162,  244 => 160,  239 => 157,  236 => 155,  233 => 153,  231 => 151,  230 => 150,  229 => 144,  227 => 143,  225 => 142,  222 => 140,  220 => 138,  219 => 137,  218 => 131,  214 => 128,  210 => 127,  207 => 126,  202 => 124,  194 => 118,  190 => 117,  187 => 116,  182 => 114,  174 => 108,  170 => 107,  167 => 106,  162 => 104,  154 => 98,  152 => 96,  151 => 95,  150 => 89,  147 => 87,  145 => 86,  142 => 85,  135 => 80,  133 => 79,  128 => 76,  126 => 75,  124 => 74,  120 => 72,  117 => 70,  114 => 68,  109 => 65,  107 => 64,  105 => 63,  101 => 60,  96 => 57,  91 => 54,  86 => 51,  81 => 48,  76 => 45,  71 => 42,  67 => 39,  64 => 38,  58 => 210,  56 => 200,  54 => 199,  52 => 85,  50 => 38,  46 => 35,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  35 => 26,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Lists/products_table.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Lists\\products_table.html.twig");
    }
}
