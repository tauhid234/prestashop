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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig */
class __TwigTemplate_77f67f9241a11f090a3415a56651a9de37f7cc3e92edd1b3cedea91bca43ec63 extends \Twig\Template
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
        $context["updateRouteParams"] = $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayPluck(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "record_route_params", []));
        // line 27
        echo "
<div class=\"position-drag-handle js-";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "-position\"
     data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "id_field", []), [], "array"), "html", null, true);
        echo "\"
     data-position=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "position_field", []), [], "array"), "html", null, true);
        echo "\"
     data-update-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "update_route", []), ($context["updateRouteParams"] ?? null)), "html", null, true);
        echo "\"
     data-update-method=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "update_method", []), "html", null, true);
        echo "\"
     data-pagination-offset=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "pagination", []), "offset", []), "html", null, true);
        echo "\"
>
    <i class=\"material-icons\">drag_indicator</i>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 33,  51 => 32,  47 => 31,  43 => 30,  39 => 29,  35 => 28,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\position_handle.html.twig");
    }
}
