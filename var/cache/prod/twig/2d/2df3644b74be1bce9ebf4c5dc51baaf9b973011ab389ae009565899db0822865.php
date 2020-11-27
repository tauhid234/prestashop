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

/* @PrestaShop/Admin/Product/Themes/categories_theme.html.twig */
class __TwigTemplate_5e0bdfe2fda118a93da23e40e56f600d9990cc8706750d5b2a7c53b92cc8f65d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
            'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
    }

    // line 25
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 26
        echo "<div";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>
  </div>";
    }

    // line 37
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 38
        echo "<li>";
        // line 39
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 40
        echo "
    <div class=\"radio\">
      <label class=\"category-label\" for=\"form[";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
        echo "
        <input
            type=\"radio\"
            name=\"form[";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "][tree]\"
            value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo "
            class=\"category float-right\"
        >
      </label>
    </div>";
        // line 52
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 53
            echo "      <ul";
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "expanded", []) == false)) {
                echo "style=\"display: none\"";
            }
            echo ">";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                $context["child"] = $context["item"];
                // line 56
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
        // line 60
        echo "  </li>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  155 => 58,  141 => 56,  139 => 55,  122 => 54,  116 => 53,  114 => 52,  105 => 46,  101 => 45,  93 => 42,  89 => 40,  87 => 39,  85 => 38,  82 => 37,  77 => 32,  63 => 30,  46 => 29,  41 => 26,  38 => 25,  34 => 37,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\Themes\\categories_theme.html.twig");
    }
}
