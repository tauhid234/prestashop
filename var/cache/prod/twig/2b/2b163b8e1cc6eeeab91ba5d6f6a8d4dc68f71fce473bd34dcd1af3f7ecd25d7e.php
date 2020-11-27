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

/* @PrestaShop/Admin/Module/Includes/card_notification_update.html.twig */
class __TwigTemplate_26f7a090f7ba3653ab63522792d9ae04064c0eccca11a816e4c8d1c3b2a08cff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card_list.html.twig", "@PrestaShop/Admin/Module/Includes/card_notification_update.html.twig", 25);
        $this->blocks = [
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_addon_version($context, array $blocks = [])
    {
        // line 31
        echo "  v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "database", []), "version", []), "html", null, true);
        echo " <i class=\"material-icons\" style=\"font-size: 10px; \">arrow_forward</i> v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "version_available", []), "html", null, true);
    }

    // line 35
    public function block_addon_description($context, array $blocks = [])
    {
        // line 36
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", [], "any", false, true), "changeLog", [], "any", true, true)) {
            // line 37
            echo "    <ul>";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "changeLog", [])));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 39
                echo "        <li><b>";
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 41
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </ul>";
        } else {
            // line 47
            echo "    <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided", [], "Admin.Modules.Notification"), "html", null, true);
            echo "</i>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_notification_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  82 => 45,  76 => 43,  69 => 41,  65 => 40,  61 => 39,  57 => 38,  55 => 37,  53 => 36,  50 => 35,  43 => 31,  40 => 30,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_notification_update.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\card_notification_update.html.twig");
    }
}
