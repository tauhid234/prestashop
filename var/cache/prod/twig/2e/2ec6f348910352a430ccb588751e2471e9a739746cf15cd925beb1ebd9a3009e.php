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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig */
class __TwigTemplate_f48ee83845152ee96673d6029911df9654a295d8bb21046e06e0553fce6dbb3f extends \Twig\Template
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
        if ( !(null === $this->getAttribute(($context["record"] ?? null), "employee", []))) {
            // line 28
            list($context["employeeName"], $context["employeeImage"]) =             [$this->getAttribute(($context["record"] ?? null), "employee", []), (("http://profile.prestashop.com/" . twig_urlencode_filter($this->getAttribute(($context["record"] ?? null), "email", []))) . ".jpg")];
            // line 30
            echo "  <span class=\"employee_avatar_small\">
    <img class=\"img rounded-circle\" alt=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["employeeImage"] ?? null), "html", null, true);
            echo "\" height=\"32\" width=\"32\" />
  </span>";
            // line 33
            echo twig_escape_filter($this->env, ($context["employeeName"] ?? null), "html", null, true);
        } else {
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 35,  43 => 33,  37 => 31,  34 => 30,  32 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/employee_name_with_avatar.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\employee_name_with_avatar.html.twig");
    }
}
