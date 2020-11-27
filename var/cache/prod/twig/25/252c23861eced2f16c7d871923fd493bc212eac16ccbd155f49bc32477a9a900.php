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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig */
class __TwigTemplate_5c77c3eb76e4a68f471bd00755d8081fec57dbf1c117628b5250ef0f830a4705 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'email_configuration' => [$this, 'block_email_configuration'],
            'email_configuration_form_rest' => [$this, 'block_email_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->displayBlock('email_configuration', $context, $blocks);
    }

    public function block_email_configuration($context, array $blocks = [])
    {
        // line 28
        echo "  <div class=\"col-12\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">mail</i>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send emails to", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "send_emails_to", []), 'errors');
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "send_emails_to", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where customers send messages from the order page.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
              </small>
            </div>
          </div>

          <div class=\"form-group row js-email-method\" data-smtp-mail-method=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["smtpMailMethod"] ?? null), "html", null, true);
        echo "\">
            <label class=\"form-control-label\"></label>
            <div class=\"col-sm\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_method", []), 'errors');
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_method", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\"></label>
            <div class=\"col-sm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_type", []), 'errors');
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_type", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log Emails", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "log_emails", []), 'errors');
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "log_emails", []), 'widget');
        echo "
            </div>
          </div>";
        // line 70
        $this->displayBlock('email_configuration_form_rest', $context, $blocks);
        // line 73
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>";
    }

    // line 70
    public function block_email_configuration_form_rest($context, array $blocks = [])
    {
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 71,  123 => 70,  114 => 77,  108 => 73,  106 => 70,  101 => 66,  99 => 65,  95 => 63,  87 => 58,  85 => 57,  76 => 50,  74 => 49,  69 => 46,  61 => 41,  57 => 39,  55 => 38,  51 => 36,  43 => 31,  38 => 28,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Email\\Blocks\\email_configuration.html.twig");
    }
}
