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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig */
class __TwigTemplate_47e10f12506f6b247c7b1d6bec2e483047aba1eac9fd292525c59944cd75f8dd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = [])
    {
        // line 27
        if ($this->getAttribute(($context["routeKeywords"] ?? null), ($context["idRoute"] ?? null), [], "array", true, true)) {
            // line 28
            $context["formattedKeywords"] = [];
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["routeKeywords"] ?? null), ($context["idRoute"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["keyword"] => $context["value"]) {
                // line 30
                ob_start();
                // line 31
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                if ($this->getAttribute($context["value"], "param", [], "array", true, true)) {
                    echo "*";
                }
                $context["formattedKeyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 34
                $context["formattedKeywords"] = twig_array_merge(($context["formattedKeywords"] ?? null), [0 => ($context["formattedKeyword"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyword'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Keywords: %keywords%", ["%keywords%" => twig_join_filter(($context["formattedKeywords"] ?? null), ", ")], "Admin.Shopparameters.Feature"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 37,  53 => 34,  47 => 31,  45 => 30,  41 => 29,  39 => 28,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\keyword.html.twig");
    }
}
