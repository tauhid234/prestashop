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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig */
class __TwigTemplate_0e7c03ee2abd2342b41bef02c350cf1d462f1b888982fd9440456bd6ef5cbc3c extends \Twig\Template
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
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Groups", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "groupsInformation", [])), "html", null, true);
        echo "</span>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", []), "updatecustomer" => 1]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "groupsInformation", []))) {
            // line 43
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "groupsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 52
                echo "          <tr>
            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "groupId", []), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminGroups", true, ["id_group" => $this->getAttribute($context["group"], "groupId", []), "viewgroup" => 1]), "html", null, true);
                echo "\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", []), "html", null, true);
                echo "
              </a>
            </td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </tbody>
      </table>";
        } else {
            // line 64
            echo "      <p class=\"text-muted text-center mb-0\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>";
        }
        // line 68
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 68,  107 => 65,  105 => 64,  101 => 61,  91 => 56,  88 => 55,  83 => 53,  80 => 52,  76 => 51,  70 => 47,  66 => 46,  61 => 43,  59 => 42,  51 => 36,  44 => 32,  39 => 30,  35 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\groups.html.twig");
    }
}
