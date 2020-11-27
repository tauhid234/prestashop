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

/* @PrestaShop/Admin/Module/catalog.html.twig */
class __TwigTemplate_fedc15e9ac089620af67e97abbf1fb9a16fde26ad81de9850b8b57d5155dc4a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 25);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    \$('body').on(
      'moduleCatalogLoaded',
      function() {";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryTab"], "method")) {
            // line 34
            echo "        \$('.module-category-menu[data-category-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryTab"], "method"), "html", null, true);
            echo "\"]').click();";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryRef"], "method")) {
            // line 37
            echo "        \$('.module-category-menu[data-category-ref=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryRef"], "method"), "html", null, true);
            echo "\"]').click();";
        }
        // line 39
        echo "      }
    );
  </script>";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        // line 45
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10 module-catalog-page\">";
        // line 48
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 48)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 50
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 50)->display($context);
        // line 52
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 52)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 54
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 54)->display($context);
        // line 56
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_loader.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 56)->display($context);
        // line 58
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", [], "any", true, true)) {
            // line 59
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/categories_grid.html.twig", "@PrestaShop/Admin/Module/catalog.html.twig", 59)->display(twig_array_merge($context, ["categories" => $this->getAttribute(($context["topMenuData"] ?? null), "categories", [])]));
        }
        // line 61
        echo "    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 61,  88 => 59,  86 => 58,  84 => 56,  82 => 54,  80 => 52,  78 => 50,  76 => 48,  73 => 45,  70 => 44,  64 => 39,  59 => 37,  57 => 36,  52 => 34,  50 => 33,  43 => 28,  40 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/catalog.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\catalog.html.twig");
    }
}
