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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig */
class __TwigTemplate_a0676426421d8b2aaa19a9097f92631c438a4f98122f13d700c741d92f74fbfc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $context["enableSidebar"] = true;
        // line 29
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %lastname% %firstname%", ["%firstname%" => $this->getAttribute($this->getAttribute(        // line 30
($context["editableEmployee"] ?? null), "firstName", []), "value", []), "%lastname%" => $this->getAttribute($this->getAttribute(        // line 31
($context["editableEmployee"] ?? null), "lastName", []), "value", [])], "Admin.Advparameters.Feature");
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "vars", []), "errors", []))) {
            // line 36
            echo "    <div class=\"alert alert-danger\">";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "        <div class=\"alert-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>";
        }
        // line 42
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col\">";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 45)->display(twig_array_merge($context, ["employeeForm" =>         // line 46
($context["employeeForm"] ?? null), "level" =>         // line 47
($context["level"] ?? null), "errorMessage" =>         // line 48
($context["errorMessage"] ?? null), "isRestrictedAccess" =>         // line 49
($context["isRestrictedAccess"] ?? null), "superAdminProfileId" =>         // line 50
($context["superAdminProfileId"] ?? null), "showAddonsConnectButton" =>         // line 51
($context["showAddonsConnectButton"] ?? null), "getTabsUrl" =>         // line 52
($context["getTabsUrl"] ?? null), "avatarUrl" => $this->getAttribute(        // line 53
($context["editableEmployee"] ?? null), "avatarUrl", [])]));
        // line 55
        echo "    </div>
  </div>";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        // line 60
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 63
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/vendor/jquery-passy.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/employee_form.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 65,  93 => 63,  91 => 60,  88 => 59,  83 => 55,  81 => 53,  80 => 52,  79 => 51,  78 => 50,  77 => 49,  76 => 48,  75 => 47,  74 => 46,  73 => 45,  69 => 42,  66 => 40,  58 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  43 => 26,  41 => 31,  40 => 30,  39 => 29,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\edit.html.twig");
    }
}