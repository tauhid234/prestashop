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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig */
class __TwigTemplate_05ae2b1f2def09a71bc7098e68c6629ca9afc45782db942ddb3c275fc899f254 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_options_card' => [$this, 'block_backup_options_card'],
            'backup_options_rest' => [$this, 'block_backup_options_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", 27);
        // line 29
        $this->displayBlock('backup_options_card', $context, $blocks);
    }

    public function block_backup_options_card($context, array $blocks = [])
    {
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ignore statistics tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_all", []), 'errors');
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_all", []), 'widget');
        echo "

            <small class=\"form-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter("%prefix%connections, %prefix%connections_page %prefix%connections_source, %prefix%guest, %prefix%statssearch", ["%prefix%" => ($context["dbPrefix"] ?? null)]), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 51
        $context["helpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the backup script will drop your tables prior to restoring data.", [], "Admin.Advparameters.Help");
        // line 52
        $context["helpMessage"] = ((($context["helpMessage"] ?? null) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(ie. \"DROP TABLE IF EXISTS\")", [], "Admin.Advparameters.Help"));
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop existing tables during import", [], "Admin.Advparameters.Feature"), ($context["helpMessage"] ?? null));
        echo "
          <div class=\"col-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_drop_tables", []), 'errors');
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["backupForm"] ?? null), "backup_options", []), "backup_drop_tables", []), 'widget');
        echo "
          </div>
        </div>";
        // line 61
        $this->displayBlock('backup_options_rest', $context, $blocks);
        // line 64
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["backupForm"] ?? null), 'form_end');
    }

    // line 61
    public function block_backup_options_rest($context, array $blocks = [])
    {
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["backupForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 62,  109 => 61,  105 => 72,  99 => 68,  93 => 64,  91 => 61,  86 => 57,  84 => 56,  80 => 54,  78 => 52,  76 => 51,  68 => 45,  65 => 44,  60 => 41,  58 => 40,  54 => 38,  46 => 33,  40 => 30,  34 => 29,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/options.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\Blocks\\options.html.twig");
    }
}
