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

/* @PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig */
class __TwigTemplate_173b8f74c7841971cae1a16b765ae2c4dfb4367ae5577eabaa1c0293cbe1e580 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tax_options_rest' => [$this, 'block_tax_options_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", 26);
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_taxes_save_options")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax options", [], "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "enable_tax", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable tax", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "enable_tax", []), 'widget', ["attr" => ["class" => "js-enable-tax"]]);
        echo "
            <small class=\"form-text\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select whether or not to include tax on purchases.", [], "Admin.International.Help"), "html", null, true);
        echo "
            </small>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "display_tax_in_cart", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display tax in the shopping cart", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "display_tax_in_cart", []), 'widget', ["attr" => ["class" => "js-display-in-cart"]]);
        echo "
          <small class=\"form-text\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select whether or not to display tax on a distinct line in the cart.", [], "Admin.International.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>
      <div class=\"form-group row\">
        <label for=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "tax_address_type", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Based on", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "tax_address_type", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use ecotax", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), 'widget');
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), "vars", []), "value", []) != 0)) {
            // line 72
            echo "            <small class=\"form-text\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you disable the ecotax, the ecotax for all your products will be set to 0.", [], "Admin.International.Help"), "html", null, true);
            echo "
            </small>";
        }
        // line 76
        echo "        </div>
      </div>";
        // line 78
        if ($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", [], "any", false, true), "eco_tax_rule_group", [], "any", true, true)) {
            // line 79
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "eco_tax_rule_group", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ecotax", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the ecotax (e.g. French ecotax: 19.6%).", [], "Admin.International.Help")]);
        }
        // line 85
        $this->displayBlock('tax_options_rest', $context, $blocks);
        // line 88
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 85
    public function block_tax_options_rest($context, array $blocks = [])
    {
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["taxOptionsForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 86,  149 => 85,  143 => 98,  136 => 93,  130 => 88,  128 => 85,  125 => 79,  123 => 78,  120 => 76,  115 => 73,  113 => 72,  111 => 71,  109 => 70,  104 => 67,  101 => 66,  94 => 62,  89 => 59,  86 => 58,  78 => 53,  74 => 51,  69 => 48,  66 => 47,  58 => 42,  54 => 40,  49 => 37,  46 => 36,  38 => 31,  33 => 28,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Tax\\Blocks\\tax_options.html.twig");
    }
}
