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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig */
class __TwigTemplate_3c65e4335be55f99e3e131e66877479c3ecdc50d9197b7266f3db0e46491d31a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'backup_download_file' => [$this, 'block_backup_download_file'],
            'backup_alerts' => [$this, 'block_backup_alerts'],
            'backup_listing' => [$this, 'block_backup_listing'],
            'backup_options' => [$this, 'block_backup_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        $this->displayBlock('backup_download_file', $context, $blocks);
        // line 36
        $this->displayBlock('backup_alerts', $context, $blocks);
        // line 50
        $this->displayBlock('backup_listing', $context, $blocks);
        // line 58
        $this->displayBlock('backup_options', $context, $blocks);
    }

    // line 30
    public function block_backup_download_file($context, array $blocks = [])
    {
        // line 31
        if (($context["hasDownloadFile"] ?? null)) {
            // line 32
            $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/download_file.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 32)->display($context);
        }
    }

    // line 36
    public function block_backup_alerts($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 39)->display($context);
        // line 40
        echo "      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\">";
        // line 45
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 45)->display($context);
        // line 46
        echo "      </div>
    </div>";
    }

    // line 50
    public function block_backup_listing($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 53)->display(twig_array_merge($context, ["grid" => ($context["backupGrid"] ?? null)]));
        // line 54
        echo "      </div>
    </div>";
    }

    // line 58
    public function block_backup_options($context, array $blocks = [])
    {
        // line 59
        echo "    <div class=\"row\">
      <div class=\"col\">";
        // line 61
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", 61)->display($context);
        // line 62
        echo "      </div>
    </div>";
    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        // line 68
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/backup.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 71,  122 => 70,  117 => 68,  114 => 67,  109 => 62,  107 => 61,  104 => 59,  101 => 58,  96 => 54,  94 => 53,  91 => 51,  88 => 50,  83 => 46,  81 => 45,  75 => 40,  73 => 39,  70 => 37,  67 => 36,  62 => 32,  60 => 31,  57 => 30,  53 => 58,  51 => 50,  49 => 36,  47 => 30,  44 => 29,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\index.html.twig");
    }
}
