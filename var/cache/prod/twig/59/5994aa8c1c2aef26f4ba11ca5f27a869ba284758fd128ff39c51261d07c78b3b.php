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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig */
class __TwigTemplate_9dad1c46eb85aec3e5f351c777fb13278a88d2ebe1a12ff4ca6fd0a996feb043 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'webservice_list_notifications' => [$this, 'block_webservice_list_notifications'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Webservice", [], "Admin.Navigation.Menu");
        // line 30
        $context["enableSidebar"] = true;
        // line 31
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_webservice_keys_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new webservice key", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        // line 41
        $this->displayBlock('webservice_list_notifications', $context, $blocks);
        // line 54
        echo "
  <div class=\"row\">
    <div class=\"col\">";
        // line 57
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
    </div>
  </div>

    <div class=\"row justify-content-center\">
      <div class=\"col\">";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_webservice_save_settings"), "attr" => ["class" => "form", "id" => "configuration_form"]]);
        // line 65
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig");
        // line 67
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
    </div>";
    }

    // line 41
    public function block_webservice_list_notifications($context, array $blocks = [])
    {
        // line 42
        if ( !twig_test_empty(($context["configurationWarnings"] ?? null))) {
            // line 43
            echo "      <div class=\"row\">
        <div class=\"col\">
          <div class=\"alert alert-warning\" role=\"alert\">";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["configurationWarnings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 47
                echo "              <p class=\"alert-text\">";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </div>
        </div>
      </div>";
        }
    }

    // line 67
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        // line 77
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/webservice.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 80,  122 => 79,  117 => 77,  114 => 76,  110 => 68,  107 => 67,  100 => 49,  92 => 47,  88 => 46,  84 => 43,  82 => 42,  79 => 41,  72 => 71,  70 => 67,  68 => 65,  66 => 63,  58 => 57,  54 => 54,  52 => 41,  49 => 39,  45 => 26,  43 => 31,  41 => 30,  39 => 29,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Webservice\\index.html.twig");
    }
}
