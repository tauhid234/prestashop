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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig */
class __TwigTemplate_5868483976853024470dd7f1a02e20d31e5f0d784b56ab8f6c973c15af4bf03c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'smtp_configuration' => [$this, 'block_smtp_configuration'],
            'smtp_configuration_form_rest' => [$this, 'block_smtp_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->displayBlock('smtp_configuration', $context, $blocks);
    }

    public function block_smtp_configuration($context, array $blocks = [])
    {
        // line 28
        echo "  <div class=\"col-12\">
    <div class=\"card js-smtp-configuration";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_method", []), "vars", []), "value", []) != ($context["smtpMailMethod"] ?? null))) {
            echo "d-none";
        }
        echo "\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail domain name", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fully qualified domain name (keep this field empty if you don't know).", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "domain", []), 'errors');
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "domain", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP address or server name (e.g. smtp.mydomain.com).", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "server", []), 'errors');
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "server", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "username", []), 'errors');
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "username", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "password", []), 'errors');
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "password", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "encryption", []), 'errors');
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "encryption", []), 'widget');
        // line 72
        if ( !($context["isOpenSslExtensionLoaded"] ?? null)) {
            // line 73
            echo "                <small class=\"form-text\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL does not seem to be available on your server.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
                </small>";
        }
        // line 77
        echo "            </div>
          </div>

          <div class=\"form-group row\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port number to use.", [], "Admin.Advparameters.Feature")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "port", []), 'errors');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "port", []), 'widget');
        echo "
            </div>
          </div>";
        // line 88
        $this->displayBlock('smtp_configuration_form_rest', $context, $blocks);
        // line 91
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>";
    }

    // line 88
    public function block_smtp_configuration_form_rest($context, array $blocks = [])
    {
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 89,  158 => 88,  149 => 95,  143 => 91,  141 => 88,  136 => 84,  134 => 83,  130 => 81,  125 => 77,  120 => 74,  118 => 73,  116 => 72,  114 => 71,  112 => 70,  108 => 68,  100 => 63,  98 => 62,  94 => 60,  87 => 55,  85 => 54,  81 => 52,  74 => 47,  72 => 46,  68 => 44,  61 => 39,  59 => 38,  55 => 36,  48 => 31,  41 => 29,  38 => 28,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Email\\Blocks\\smtp_configuration.html.twig");
    }
}
