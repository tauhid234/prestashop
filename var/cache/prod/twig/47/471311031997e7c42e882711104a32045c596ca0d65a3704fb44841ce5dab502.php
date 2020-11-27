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

/* @Product/CatalogPage/Blocks/filters.html.twig */
class __TwigTemplate_5b89a4eee7597ae5c5d93f6200032c34062429a03d3471c68139d25c6364d390 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_filter_by_categories' => [$this, 'block_product_catalog_filter_by_categories'],
            'product_catalog_filter_bulk_actions' => [$this, 'block_product_catalog_filter_bulk_actions'],
            'product_catalog_filter_select_all' => [$this, 'block_product_catalog_filter_select_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div id=\"catalog-actions\" class=\"col order-first\">
  <div class=\"row\">
    <div class=\"col\">";
        // line 28
        $this->displayBlock('product_catalog_filter_by_categories', $context, $blocks);
        // line 77
        $this->displayBlock('product_catalog_filter_bulk_actions', $context, $blocks);
        // line 129
        echo "    </div>
  </div>";
        // line 132
        $this->displayBlock('product_catalog_filter_select_all', $context, $blocks);
        // line 150
        echo "</div>
";
    }

    // line 28
    public function block_product_catalog_filter_by_categories($context, array $blocks = [])
    {
        // line 29
        echo "        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        // line 38
        if (((isset($context["selected_category"]) || array_key_exists("selected_category", $context)) &&  !(null === ($context["selected_category"] ?? null)))) {
            // line 39
            echo "                  (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["selected_category"] ?? null), "getName", [], "method"), "html", null, true);
            echo ")";
        }
        // line 41
        echo "          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
            </div>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categories"] ?? null), 'widget');
        echo "
          </div>
        </div>";
    }

    // line 77
    public function block_product_catalog_filter_bulk_actions($context, array $blocks = [])
    {
        // line 78
        echo "        <div
            class=\"d-inline-block\"
            bulkurl=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", ["action" => "activate_all"]);
        echo "\"
            massediturl=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", ["action" => "sort"]);
        echo "\"
            redirecturl=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => ($context["limit"] ?? null), "offset" => ($context["offset"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null)]), "html", null, true);
        echo "\"
            redirecturlnextpage=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => ($context["limit"] ?? null), "offset" => (($context["offset"] ?? null) + ($context["limit"] ?? null)), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null)]), "html", null, true);
        echo "\"
        >";
        // line 85
        $context["buttons_action"] = [0 => ["onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", [], "Admin.Actions")], 1 => ["onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", [], "Admin.Actions")]];
        // line 97
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", [], "Admin.Actions")]]);
        // line 108
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", [], "Admin.Actions")]]);
        // line 118
        $this->loadTemplate("@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "@Product/CatalogPage/Blocks/filters.html.twig", 118)->display(twig_array_merge($context, ["div_style" => "btn-group dropdown bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", [], "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 125
($context["buttons_action"] ?? null)]));
        // line 127
        echo "        </div>";
    }

    // line 132
    public function block_product_catalog_filter_select_all($context, array $blocks = [])
    {
        // line 133
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"md-checkbox\">
        <label>
          <input
            type=\"checkbox\"
            id=\"bulk_action_select_all\"
            onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
            value=\"\"
          >
          <i class=\"md-checkbox-control\"></i>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/filters.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 144,  156 => 133,  153 => 132,  149 => 127,  147 => 125,  146 => 118,  144 => 108,  142 => 97,  140 => 85,  136 => 83,  132 => 82,  128 => 81,  124 => 80,  120 => 78,  117 => 77,  110 => 72,  105 => 69,  94 => 60,  83 => 51,  72 => 41,  67 => 39,  65 => 38,  63 => 37,  54 => 29,  51 => 28,  46 => 150,  44 => 132,  41 => 129,  39 => 77,  37 => 28,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Blocks/filters.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Blocks\\filters.html.twig");
    }
}
