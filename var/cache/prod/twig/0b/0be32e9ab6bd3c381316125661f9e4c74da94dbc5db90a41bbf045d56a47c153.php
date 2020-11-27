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

/* @PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig */
class __TwigTemplate_dc7ef2f074662f274570a304563431397956866576f0868e5713ee07662264ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'logs_severity_level_meaning' => [$this, 'block_logs_severity_level_meaning'],
            'logs_main_panel' => [$this, 'block_logs_main_panel'],
            'logs_by_mail' => [$this, 'block_logs_by_mail'],
            'logs_by_email_form_rest' => [$this, 'block_logs_by_email_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", 27);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        $this->displayBlock('logs_severity_level_meaning', $context, $blocks);
        // line 36
        $this->displayBlock('logs_main_panel', $context, $blocks);
        // line 44
        $this->displayBlock('logs_by_mail', $context, $blocks);
    }

    // line 30
    public function block_logs_severity_level_meaning($context, array $blocks = [])
    {
        // line 31
        echo "    <div class=\"row\">";
        // line 32
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig");
        echo "
    </div>";
    }

    // line 36
    public function block_logs_main_panel($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 39
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
      </div>
    </div>";
    }

    // line 44
    public function block_logs_by_mail($context, array $blocks = [])
    {
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logsByEmailForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_save_settings")]);
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logs by email", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"form-group row\">";
        // line 55
        $context["helptip"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter \"5\" if you do not want to receive any emails.", [], "Admin.Advparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Emails will be sent to the shop owner.", [], "Admin.Advparameters.Help"));
        // line 56
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Minimum severity level", [], "Admin.Advparameters.Feature"), ($context["helptip"] ?? null), "col-sm-2");
        echo "
                <div class=\"col-sm\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["logsByEmailForm"] ?? null), "logs_by_email", []), 'errors');
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["logsByEmailForm"] ?? null), "logs_by_email", []), 'widget');
        echo "
                </div>
              </div>";
        // line 63
        $this->displayBlock('logs_by_email_form_rest', $context, $blocks);
        // line 66
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logsByEmailForm"] ?? null), 'form_end');
    }

    // line 63
    public function block_logs_by_email_form_rest($context, array $blocks = [])
    {
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["logsByEmailForm"] ?? null), 'rest');
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/logs.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 82,  147 => 81,  143 => 80,  140 => 79,  136 => 64,  133 => 63,  129 => 76,  121 => 70,  115 => 66,  113 => 63,  108 => 59,  106 => 58,  102 => 56,  100 => 55,  93 => 50,  85 => 45,  82 => 44,  75 => 39,  72 => 37,  69 => 36,  63 => 32,  61 => 31,  58 => 30,  54 => 44,  52 => 36,  50 => 30,  47 => 29,  43 => 25,  41 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\LogsPage\\index.html.twig");
    }
}
