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

/* @PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig */
class __TwigTemplate_0025a736a69eb363b680d804f36667d30d492d3be3a6ba97745b0e874c72b525 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig", 25);
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
        // line 27
        list($context["generateByDateForm"], $context["generateByStatusForm"], $context["invoiceOptionsForm"]) =         [$this->getAttribute(        // line 28
($context["byDateForm"] ?? null), "generate_by_date", []), $this->getAttribute(($context["byStatusForm"] ?? null), "generate_by_status", []), $this->getAttribute(($context["optionsForm"] ?? null), "invoice_options", [])];
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  <div class=\"row justify-content-center\">";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig", 34)->display($context);
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig", 37)->display($context);
        // line 38
        echo "
  </div>

  <div class=\"row justify-content-center\">";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig", 43)->display($context);
        // line 44
        echo "  </div>";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        // line 48
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/invoices.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 50,  67 => 48,  64 => 47,  60 => 44,  58 => 43,  53 => 38,  51 => 37,  49 => 34,  47 => 32,  44 => 31,  40 => 25,  38 => 28,  37 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Invoices\\invoices.html.twig");
    }
}
