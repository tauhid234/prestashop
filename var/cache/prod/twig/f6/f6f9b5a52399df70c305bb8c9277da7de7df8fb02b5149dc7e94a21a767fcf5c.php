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

/* @Product/ProductPage/Forms/form_supplier_combination.html.twig */
class __TwigTemplate_e462f74bb79a8016fca7f6e770728a76c4dc2d541934f56d28d5dd7826bdeacc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        if ((twig_length_filter($this->env, ($context["suppliers"] ?? null)) > 0)) {
            // line 26
            echo "  <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference(s)", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can specify product reference(s) for each associated supplier. Click \"Save\" after changing selected suppliers to display the associated product references.", [], "Admin.Catalog.Help");
            echo "
        </p>
      </div>
    </div>
  </div>";
        }
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["supplierId"]) {
            // line 39
            $context["collectionName"] = ("supplier_combination_" . $context["supplierId"]);
            // line 40
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><strong>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"), "vars", []), "label", []), "html", null, true);
            echo "</strong></div>
    <div class=\"panel-body\" id=\"supplier_combination_";
            // line 42
            echo twig_escape_filter($this->env, $context["supplierId"], "html", null, true);
            echo "\">
      <div>";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"), 'errors');
            echo "
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr >
              <th width=\"30%\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product name", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"30%\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global"), "html", null, true);
            echo "</th>
            </tr>
          </thead>
          <tbody>";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier_combination"]) {
                // line 56
                echo "            <tr>
              <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supplier_combination"], "vars", []), "value", []), "label", []), "html", null, true);
                echo "</td>
              <td>";
                // line 58
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_reference", []), 'widget');
                echo "</td>
              <td>";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price", []), 'widget');
                echo "</td>
              <td>";
                // line 61
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price_currency", []), 'widget');
                // line 62
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "id_product_attribute", []), 'widget');
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_id", []), 'widget');
                echo "
              </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier_combination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "          </tbody>
        </table>
      </div>
    </div>
  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplierId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_supplier_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 67,  113 => 63,  111 => 62,  109 => 61,  105 => 59,  101 => 58,  97 => 57,  94 => 56,  90 => 55,  84 => 51,  80 => 50,  76 => 49,  72 => 48,  65 => 44,  61 => 42,  57 => 41,  54 => 40,  52 => 39,  48 => 38,  40 => 31,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Forms/form_supplier_combination.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_supplier_combination.html.twig");
    }
}
