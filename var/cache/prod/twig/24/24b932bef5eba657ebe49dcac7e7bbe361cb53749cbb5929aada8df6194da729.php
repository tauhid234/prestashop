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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig */
class __TwigTemplate_42424fc91d8ce3359a7abc5641602764e6c095be24405d856ecf6cfe2ed2d75a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'request_sql_settings' => [$this, 'block_request_sql_settings'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlSettingsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_requests_process_settings")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label col-sm-2\" for=\"form_settings_default_file_encoding\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your default file encoding", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["requestSqlSettingsForm"] ?? null), "settings", []), "default_file_encoding", []), 'errors');
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["requestSqlSettingsForm"] ?? null), "settings", []), "default_file_encoding", []), 'widget');
        echo "
          </div>
        </div>";
        // line 46
        $this->displayBlock('request_sql_settings', $context, $blocks);
        // line 49
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlSettingsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 46
    public function block_request_sql_settings($context, array $blocks = [])
    {
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requestSqlSettingsForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 47,  77 => 46,  71 => 57,  65 => 53,  59 => 49,  57 => 46,  52 => 42,  50 => 41,  45 => 38,  37 => 32,  31 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/settings_panel.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\RequestSql\\Blocks\\settings_panel.html.twig");
    }
}
