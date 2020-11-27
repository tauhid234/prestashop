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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig */
class __TwigTemplate_a02929f5286373beea856d72fcd89e314beed41d9d7f65803b3d84c1a43d444a extends \Twig\Template
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
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "lastConnectionsInformation", []))) {
            // line 27
            echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">access_time</i>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last connections", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "lastConnectionsInformation", [])), "html", null, true);
            echo "</span>
    </h3>
    <div class=\"card-body\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pages viewed", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total time", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Origin", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP Address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "lastConnectionsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["connection"]) {
                // line 47
                echo "          <tr>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "connectionId", []), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "connectionDate", []), "html", null, true);
                echo "</td>
            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "pagesViewed", []), "html", null, true);
                echo "</td>
            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "totalTime", []), "html", null, true);
                echo "</td>
            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "httpReferer", []), "html", null, true);
                echo "</td>
            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["connection"], "ipAddress", []), "html", null, true);
                echo "</td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['connection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
      </table>
    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  102 => 53,  98 => 52,  94 => 51,  90 => 50,  86 => 49,  82 => 48,  79 => 47,  75 => 46,  69 => 42,  65 => 41,  61 => 40,  57 => 39,  53 => 38,  49 => 37,  40 => 31,  36 => 30,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\last_connections.html.twig");
    }
}
