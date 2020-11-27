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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig */
class __TwigTemplate_9f919aca41a3a625e1800f02f8a15f5201569973eeed8c2e63c8a8996c783f44 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 35
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 35);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'employee_showcase_card' => [$this, 'block_employee_showcase_card'],
            'employee_listing' => [$this, 'block_employee_listing'],
            'employee_options' => [$this, 'block_employee_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new employee", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 35
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        $this->displayBlock('employee_showcase_card', $context, $blocks);
        // line 46
        $this->displayBlock('employee_listing', $context, $blocks);
        // line 54
        $this->displayBlock('employee_options', $context, $blocks);
    }

    // line 38
    public function block_employee_showcase_card($context, array $blocks = [])
    {
        // line 39
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 41)->display($context);
        // line 42
        echo "      </div>
    </div>";
    }

    // line 46
    public function block_employee_listing($context, array $blocks = [])
    {
        // line 47
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 49)->display(twig_array_merge($context, ["grid" => ($context["employeeGrid"] ?? null)]));
        // line 50
        echo "      </div>
    </div>";
    }

    // line 54
    public function block_employee_options($context, array $blocks = [])
    {
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", 55)->display($context);
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        // line 60
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/employee.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 63,  100 => 62,  95 => 60,  92 => 59,  88 => 55,  85 => 54,  80 => 50,  78 => 49,  75 => 47,  72 => 46,  67 => 42,  65 => 41,  62 => 39,  59 => 38,  55 => 54,  53 => 46,  51 => 38,  48 => 37,  44 => 35,  42 => 27,  40 => 26,  22 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\index.html.twig");
    }
}
