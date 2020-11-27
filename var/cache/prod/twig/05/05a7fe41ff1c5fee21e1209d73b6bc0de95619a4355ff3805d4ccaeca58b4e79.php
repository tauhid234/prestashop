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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig */
class __TwigTemplate_3ac0caa68d10c8934808a0c353cc94d8422a39f7ba8c4d1d0e011680af37e3bc extends \Twig\Template
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
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerAddresses", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">";
        // line 32
        if ( !twig_test_empty($this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerAddresses", []))) {
            // line 33
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address (2)", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mobile phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerAddresses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 49
                echo "            <tr>
              <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "first_name", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "last_name", []), "html", null, true);
                echo "</td>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address1", []), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address2", []), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", []), "html", null, true);
                echo "</td>
              <td>";
                // line 54
                if ($this->getAttribute($context["address"], "state", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "state", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 55
                if ($this->getAttribute($context["address"], "phone", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 56
                if ($this->getAttribute($context["address"], "phone_mobile", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone_mobile", []), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 57
                if ($this->getAttribute($context["address"], "other", [])) {
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["address"], "other", []), "html", null, true));
                } else {
                    echo "-";
                }
                echo "</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_manufacturer_addresses_edit", ["addressId" => $this->getAttribute($context["address"], "id", [])]), "html", null, true);
                echo "\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </tbody>
      </table>";
        } else {
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No address has been found for this brand.", [], "Admin.Catalog.Notification"), "html", null, true);
        }
        // line 79
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 79,  169 => 77,  165 => 74,  151 => 65,  145 => 62,  133 => 57,  125 => 56,  117 => 55,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  92 => 50,  89 => 49,  85 => 48,  78 => 43,  74 => 42,  70 => 41,  66 => 40,  62 => 39,  58 => 38,  54 => 37,  50 => 36,  45 => 33,  43 => 32,  38 => 29,  34 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Manufacturer\\Blocks\\View\\addresses.html.twig");
    }
}
