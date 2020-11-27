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

/* @PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig */
class __TwigTemplate_cb944f7824c8f15dde20d414faa6eb9081b09df87486f18a69e8063815f00452 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">";
        // line 32
        if (($context["isSingleShopContext"] ?? null)) {
            // line 33
            echo "          <div class=\"card\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">credit_card</i>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active payment", [], "Admin.Payment.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">";
            // line 38
            $this->loadTemplate("@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", 38)->display($context);
            // line 39
            echo "            </div>
          </div>";
        } else {
            // line 42
            echo "          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have more than one shop and must select one to configure payment.", [], "Admin.Payment.Notification"), "html", null, true);
            echo "</p>
          </div>";
        }
        // line 46
        echo "      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  66 => 43,  63 => 42,  59 => 39,  57 => 38,  52 => 35,  48 => 33,  46 => 32,  42 => 29,  39 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/payment_methods.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\PaymentMethods\\payment_methods.html.twig");
    }
}
