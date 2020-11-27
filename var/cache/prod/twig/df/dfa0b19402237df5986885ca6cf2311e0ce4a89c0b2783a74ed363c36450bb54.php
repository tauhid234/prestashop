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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig */
class __TwigTemplate_e733e2ad93428ea134128242fe50c60317e6f7bb7f90a3a29c48e1ba1569268a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'webservice_form_configuration' => [$this, 'block_webservice_form_configuration'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["webserviceConfigurationForm"] = $this->getAttribute(($context["form"] ?? null), "webservice_configuration", []);
        // line 30
        $this->displayBlock('webservice_form_configuration', $context, $blocks);
    }

    public function block_webservice_form_configuration($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable PrestaShop's webservice", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

          <div class=\"col-sm\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_webservice", []), 'errors');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_webservice", []), 'widget');
        echo "

            <small class=\"form-text\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before activating the webservice, you must be sure to: ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
              <br/>
              1.";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check that URL rewriting is available on this server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
              <br/>
              2.";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check that the five methods GET, POST, PUT, DELETE and HEAD are supported by this server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable CGI mode for PHP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

          <div class=\"col-sm\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_cgi", []), 'errors');
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_cgi", []), 'widget');
        echo "

            <small class=\"form-text\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before choosing \"Yes\", check that PHP is not configured as an Apache module on your server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </small>
          </div>
        </div>";
        // line 68
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 71
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
    }

    // line 68
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["webserviceConfigurationForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 69,  118 => 68,  110 => 75,  104 => 71,  102 => 68,  96 => 63,  91 => 60,  89 => 59,  84 => 56,  75 => 50,  70 => 48,  65 => 46,  60 => 43,  58 => 42,  53 => 39,  44 => 33,  40 => 31,  34 => 30,  32 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Webservice\\webservice_settings.html.twig");
    }
}
