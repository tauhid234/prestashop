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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_982108db19a026a1497d713e5e006c9da36daacfd95032c928a26684ee0a6abb extends \Twig\Template
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
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", 27);
        // line 28
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download sample csv files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">";
        // line 36
        echo $context["ps"]->getimport_file_sample("Sample Categories file", "categories_import");
        // line 37
        echo $context["ps"]->getimport_file_sample("Sample Products file", "products_import");
        // line 38
        echo $context["ps"]->getimport_file_sample("Sample Combinations file", "combinations_import");
        // line 39
        echo $context["ps"]->getimport_file_sample("Sample Customers file", "customers_import");
        // line 40
        echo $context["ps"]->getimport_file_sample("Sample Addresses file", "addresses_import");
        // line 41
        echo $context["ps"]->getimport_file_sample("Sample Brands file", "manufacturers_import");
        // line 42
        echo $context["ps"]->getimport_file_sample("Sample Suppliers file", "suppliers_import");
        // line 43
        echo $context["ps"]->getimport_file_sample("Sample Aliases file", "alias_import");
        // line 44
        echo $context["ps"]->getimport_file_sample("Sample Store Contacts file", "store_contacts");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 44,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  37 => 31,  32 => 28,  30 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Blocks\\import_sample_files.html.twig");
    }
}
