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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/create.html.twig */
class __TwigTemplate_d0966bea2c6a47c26a6231003b18eef0dacd6cda70a142fc0015e2dd595f580a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/create.html.twig", 26);
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
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new", [], "Admin.Actions");
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/create.html.twig", 33)->display(twig_array_merge($context, ["employeeForm" =>         // line 34
($context["employeeForm"] ?? null), "level" =>         // line 35
($context["level"] ?? null), "errorMessage" =>         // line 36
($context["errorMessage"] ?? null), "isRestrictedAccess" => false, "superAdminProfileId" =>         // line 38
($context["superAdminProfileId"] ?? null), "getTabsUrl" =>         // line 39
($context["getTabsUrl"] ?? null), "avatarUrl" => $this->getAttribute($this->getAttribute(        // line 40
($context["employeeForm"] ?? null), "vars", []), "defaultAvatarUrl", [])]));
        // line 42
        echo "    </div>
  </div>";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 50
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/vendor/jquery-passy.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/employee_form.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 52,  67 => 50,  65 => 47,  62 => 46,  57 => 42,  55 => 40,  54 => 39,  53 => 38,  52 => 36,  51 => 35,  50 => 34,  49 => 33,  46 => 31,  43 => 30,  39 => 26,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/create.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\create.html.twig");
    }
}
