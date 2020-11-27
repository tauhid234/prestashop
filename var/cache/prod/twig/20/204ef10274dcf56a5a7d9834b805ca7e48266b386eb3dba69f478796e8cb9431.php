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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig */
class __TwigTemplate_32227ca0c07d803dc15008a9ebd08d55245f1437346096e43f09f2694dc9dcb5 extends \Twig\Template
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
        $context["severity"] = $this->getAttribute(($context["record"] ?? null), "severity", []);
        // line 27
        $context["withMessage"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "with_message", []);
        // line 29
        if ((($context["severity"] ?? null) == 1)) {
            // line 30
            $context["severityClass"] = "success";
            // line 31
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Informative only", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 32
($context["severity"] ?? null) == 2)) {
            // line 33
            $context["severityClass"] = "warning";
            // line 34
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 35
($context["severity"] ?? null) == 3)) {
            // line 36
            $context["severityClass"] = "danger";
            // line 37
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 38
($context["severity"] ?? null) == 4)) {
            // line 39
            $context["severityClass"] = "dark";
            // line 40
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Major issue (crash)!", [], "Admin.Advparameters.Help")) : (""));
        } else {
            // line 42
            $context["severityClass"] = "";
        }
        // line 44
        echo "
<span class=\"badge badge-pill badge-";
        // line 45
        echo twig_escape_filter($this->env, ($context["severityClass"] ?? null), "html", null, true);
        echo "\">";
        // line 46
        if (($context["withMessage"] ?? null)) {
            // line 47
            echo twig_escape_filter($this->env, ($context["severityMessage"] ?? null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
            echo ")";
        } else {
            // line 49
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
        }
        // line 51
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 51,  76 => 49,  70 => 47,  68 => 46,  65 => 45,  62 => 44,  59 => 42,  56 => 40,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  38 => 31,  36 => 30,  34 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\severity_level.html.twig");
    }
}
