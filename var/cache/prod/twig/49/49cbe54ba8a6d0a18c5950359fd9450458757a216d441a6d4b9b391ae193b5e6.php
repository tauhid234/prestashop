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

/* @Product/ProductPage/Forms/form_seo.html.twig */
class __TwigTemplate_67da6f614c719dc486a863fba6f57db9281ec0af8810af09ee7f79d1ad1fd9e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_tool_serp' => [$this, 'block_product_catalog_tool_serp'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"col-md-12\">

  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Engine Optimization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your ranking and how your product page will appear in search engines results.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>";
        // line 30
        $this->displayBlock('product_catalog_tool_serp', $context, $blocks);
        // line 35
        echo "  
  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", []), 'label');
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", []), 'errors');
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_title", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", []), 'label');
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", []), 'errors');
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "meta_description", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", []), "vars", []), "label", []), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </label>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", []), 'errors');
        echo "
    <div class=\"row\">
      <div class=\"col-md-7\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "link_rewrite", []), 'widget');
        echo "
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset URL", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">";
        // line 76
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 77
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently disabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>";
            // line 78
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To enable it, go to [1]SEO and URLs[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"]);
        } else {
            // line 80
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently enabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>";
            // line 81
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]SEO and URLs[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"]);
        }
        // line 83
        echo "        </p>
        <p class=\"alert-text\">";
        // line 85
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 86
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The \"Force update of friendly URL\" option is currently enabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>";
            // line 88
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]Product Settings[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"]);
        }
        // line 90
        echo "        </p>
      </div>
    </div>
  </div>

  <h2 class=\"mt-4\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirection page", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", []), 'errors');
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "redirect_type", []), 'widget');
        echo "
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", []), 'errors');
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? null), "id_type_redirected", []), 'widget');
        echo "
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "<br>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanent redirection (301) = Permanently display another product or category instead.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "<br>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporary redirection (302) = Temporarily display another product or category instead.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["seoForm"] ?? null), 'rest');
        // line 134
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsSeoStepBottom", ["id_product" => ($context["productId"] ?? null)]);
        echo "
</div>
";
    }

    // line 30
    public function block_product_catalog_tool_serp($context, array $blocks = [])
    {
        // line 31
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is a preview of your search engine result, play with it!", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>";
        // line 33
        echo "    <div id=\"serp-app\"></div>";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 33,  211 => 31,  208 => 30,  201 => 134,  199 => 132,  192 => 126,  189 => 125,  186 => 124,  175 => 115,  173 => 114,  170 => 113,  161 => 107,  159 => 106,  156 => 105,  146 => 98,  141 => 96,  134 => 90,  131 => 88,  127 => 86,  125 => 85,  122 => 83,  119 => 81,  115 => 80,  112 => 78,  108 => 77,  106 => 76,  95 => 67,  89 => 64,  84 => 61,  80 => 59,  75 => 57,  67 => 51,  65 => 50,  63 => 49,  53 => 41,  51 => 40,  49 => 39,  44 => 35,  42 => 30,  39 => 28,  35 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Forms/form_seo.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_seo.html.twig");
    }
}
