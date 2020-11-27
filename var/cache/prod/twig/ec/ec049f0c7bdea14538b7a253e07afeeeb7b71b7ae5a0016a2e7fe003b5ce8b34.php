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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig */
class __TwigTemplate_ce88af763e4f40623ee6b6e351e9dddc4e0aab34cf962cdfcbde45c5f52307af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'manufacturers_listing' => [$this, 'block_manufacturers_listing'],
            'manufacturers_address_listing' => [$this, 'block_manufacturers_address_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add_manufacturer" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturers_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new brand", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"], "add_manufacturer_address" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturer_addresses_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new brand address", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        $this->displayBlock('manufacturers_listing', $context, $blocks);
        // line 51
        $this->displayBlock('manufacturers_address_listing', $context, $blocks);
    }

    // line 43
    public function block_manufacturers_listing($context, array $blocks = [])
    {
        // line 44
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig", 46)->display(twig_array_merge($context, ["grid" => ($context["manufacturerGrid"] ?? null)]));
        // line 47
        echo "      </div>
    </div>";
    }

    // line 51
    public function block_manufacturers_address_listing($context, array $blocks = [])
    {
        // line 52
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 54
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig", 54)->display(twig_array_merge($context, ["grid" => ($context["manufacturerAddressGrid"] ?? null)]));
        // line 55
        echo "      </div>
    </div>";
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        // line 61
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/manufacturer.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 64,  88 => 63,  83 => 61,  80 => 60,  75 => 55,  73 => 54,  70 => 52,  67 => 51,  62 => 47,  60 => 46,  57 => 44,  54 => 43,  50 => 51,  48 => 43,  45 => 42,  41 => 26,  39 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\index.html.twig");
    }
}
