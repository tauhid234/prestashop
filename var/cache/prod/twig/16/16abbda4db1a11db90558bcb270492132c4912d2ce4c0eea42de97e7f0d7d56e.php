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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig */
class __TwigTemplate_346367ad8ffffa3b49ae2b22f096d8f4bb8941b70b819477bae123f6559075ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'mailThemeConfigurationFormBlock' => [$this, 'block_mailThemeConfigurationFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('mailThemeConfigurationFormBlock', $context, $blocks);
    }

    public function block_mailThemeConfigurationFormBlock($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mailThemeConfigurationForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_save_configuration")]);
        echo "
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-block row\">
          <div class=\"card-text\">

            <div class=\"form-group row\">
              <label class=\"form-control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your default email theme", [], "Admin.Design.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This won't regenerate email templates, it only sets the default email theme for future generation (when a language is installed for example).", [], "Admin.Design.Help")], "method"), "html", null, true);
        // line 43
        echo "
              </label>
              <div class=\"col-sm\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["mailThemeConfigurationForm"] ?? null), "configuration", []), "defaultTheme", []), 'errors');
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["mailThemeConfigurationForm"] ?? null), "configuration", []), "defaultTheme", []), 'widget');
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">
              <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</span>
            </button>
          </div>
        </div>
      </div>";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mailThemeConfigurationForm"] ?? null), 'form_end');
        echo "
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 61,  76 => 56,  64 => 47,  62 => 46,  58 => 43,  56 => 40,  46 => 32,  40 => 29,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\MailTheme\\Blocks\\configuration_form.html.twig");
    }
}
