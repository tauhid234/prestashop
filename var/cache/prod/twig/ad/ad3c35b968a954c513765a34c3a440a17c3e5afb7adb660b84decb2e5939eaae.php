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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig */
class __TwigTemplate_b8e9befc1dc70f57ed14bbd7088c8f383afaea43dcad7926fc5d5d64f689bbfb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'email_configuration_form_rest' => [$this, 'block_email_configuration_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        if (($context["isEmailLogsEnabled"] ?? null)) {
            // line 30
            echo "  <div class=\"row\">
    <div class=\"col\">";
            // line 32
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_logs_grid.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 32)->display($context);
            // line 33
            echo "    </div>
  </div>";
        }
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailConfigurationForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_emails_save_options")]);
        echo "
  <div class=\"row justify-content-center\">";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 39)->display($context);
        // line 40
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 40)->display($context);
        // line 42
        $this->displayBlock('email_configuration_form_rest', $context, $blocks);
        // line 45
        echo "  </div>";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailConfigurationForm"] ?? null), 'form_end');
        // line 48
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", 48)->display($context);
    }

    // line 42
    public function block_email_configuration_form_rest($context, array $blocks = [])
    {
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["emailConfigurationForm"] ?? null), 'rest');
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/email.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 55,  88 => 54,  83 => 52,  80 => 51,  76 => 43,  73 => 42,  69 => 48,  67 => 46,  65 => 45,  63 => 42,  61 => 40,  59 => 39,  55 => 37,  51 => 33,  49 => 32,  46 => 30,  44 => 29,  41 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Email\\index.html.twig");
    }
}
