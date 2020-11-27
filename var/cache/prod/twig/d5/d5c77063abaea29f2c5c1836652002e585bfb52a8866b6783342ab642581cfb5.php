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

/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_b6717957abf50438c107d83f0bb05c47d6e304e975cc55eef89913e598f6f03a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cms_page_category_breadcrumb' => [$this, 'block_cms_page_category_breadcrumb'],
            'cms_category_grid' => [$this, 'block_cms_category_grid'],
            'cms_grid' => [$this, 'block_cms_grid'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add_cms_category" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_category_create", ["id_cms_category" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 30
($context["app"] ?? null), "request", []), "query", []), "get", [0 => "id_cms_category"], "method")]), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new page category", [], "Admin.Design.Help"), "icon" => "add_circle_outline"], "add_cms_page" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_create", ["id_cms_category" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 35
($context["app"] ?? null), "request", []), "query", []), "get", [0 => "id_cms_category"], "method")]), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new page", [], "Admin.Design.Help"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "
  <div class=\"row\">
    <div class=\"col-sm\">";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 46)->display($context);
        // line 47
        echo "    </div>
  </div>";
        // line 50
        $this->displayBlock('cms_page_category_breadcrumb', $context, $blocks);
        // line 54
        $this->displayBlock('cms_category_grid', $context, $blocks);
        // line 69
        $this->displayBlock('cms_grid', $context, $blocks);
    }

    // line 50
    public function block_cms_page_category_breadcrumb($context, array $blocks = [])
    {
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 51)->display($context);
    }

    // line 54
    public function block_cms_category_grid($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 57, "1776086570")->display(twig_array_merge($context, ["grid" => ($context["cmsCategoryGrid"] ?? null)]));
        // line 65
        echo "      </div>
    </div>";
    }

    // line 69
    public function block_cms_grid($context, array $blocks = [])
    {
        // line 70
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 72)->display(twig_array_merge($context, ["grid" => ($context["cmsGrid"] ?? null)]));
        // line 73
        echo "      </div>
    </div>";
    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        // line 79
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 81,  108 => 80,  104 => 79,  101 => 78,  96 => 73,  94 => 72,  91 => 70,  88 => 69,  83 => 65,  81 => 57,  78 => 55,  75 => 54,  71 => 51,  68 => 50,  64 => 69,  62 => 54,  60 => 50,  57 => 47,  55 => 46,  51 => 43,  48 => 42,  44 => 26,  42 => 35,  41 => 30,  40 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_b6717957abf50438c107d83f0bb05c47d6e304e975cc55eef89913e598f6f03a___1776086570 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 57
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 57);
        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 59
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "id_cms_category"], "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "id_cms_category"], "method") != $this->getAttribute(($context["cmsPageView"] ?? null), "root_category_id", [])))) {
            // line 61
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 61)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  174 => 60,  171 => 59,  154 => 57,  112 => 81,  108 => 80,  104 => 79,  101 => 78,  96 => 73,  94 => 72,  91 => 70,  88 => 69,  83 => 65,  81 => 57,  78 => 55,  75 => 54,  71 => 51,  68 => 50,  64 => 69,  62 => 54,  60 => 50,  57 => 47,  55 => 46,  51 => 43,  48 => 42,  44 => 26,  42 => 35,  41 => 30,  40 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\index.html.twig");
    }
}
