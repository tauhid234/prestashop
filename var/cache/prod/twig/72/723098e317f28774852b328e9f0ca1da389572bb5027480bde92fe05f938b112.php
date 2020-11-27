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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig */
class __TwigTemplate_2209d2d8ff30455f848c59637ae645e5dee06f80ed17294c840cefb3a5153012 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["cmsPageView"] ?? null), "breadcrumb_tree", []))) {
            // line 27
            echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-block\">
          <nav>
            <ol class=\"breadcrumb\">";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["cmsPageView"] ?? null), "breadcrumb_tree", []));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "                <li class=\"breadcrumb-item\">";
                // line 35
                $context["cmsPageRouteParameters"] = [];
                // line 37
                if (($this->getAttribute($this->getAttribute($context["category"], "cmsPageCategoryId", []), "value", []) != $this->getAttribute(($context["cmsPageView"] ?? null), "root_category_id", []))) {
                    // line 38
                    $context["cmsPageRouteParameters"] = ["id_cms_category" => $this->getAttribute($this->getAttribute($context["category"], "cmsPageCategoryId", []), "value", [])];
                }
                // line 40
                echo "
                  <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cms_pages_index", ($context["cmsPageRouteParameters"] ?? null)), "html", null, true);
                echo "\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
                  </a>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>";
        }
        // line 53
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 53,  67 => 46,  58 => 42,  55 => 41,  52 => 40,  49 => 38,  47 => 37,  45 => 35,  43 => 34,  39 => 33,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\Blocks\\breadcrumb.html.twig");
    }
}
