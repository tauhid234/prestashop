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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig */
class __TwigTemplate_dfd33972199031e6fbf25612c3bee7daeeb2c2e290356d878dc0306b7cd12a8e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_info' => [$this, 'block_backup_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('backup_info', $context, $blocks);
    }

    public function block_backup_info($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"alert alert-info\" role=\"alert\">";
        // line 28
        if (($context["isHostMode"] ?? null)) {
            // line 29
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</h4>
      <p>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you need to restore a database backup, we invite you to subscribe to a [1][2]technical support plan[/2][/1].", ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<a class=\"_blank\" href=\"https://addons.prestashop.com/support/16298-support-essentiel-plan.html\">", "[/2]" => "</a>"], "Admin.Advparameters.Notification");
            echo "</p>
      <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Our team will take care of restoring your database safely.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <br>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Why can't I restore it by myself?", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>
      <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your shop is hosted by PrestaShop. Although you can create backup files here below, there are core settings you cannot access for security reasons, like the database management. Thus, only our team can proceed to a restoration.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</p>";
        } else {
            // line 36
            echo "      <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to restore a database backup in 10 easy steps", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</h4>
      <ol class=\"mb-0\">
        <li>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please ask your hosting provider for \"phpMyAdmin\" access to your database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connect to \"phpMyAdmin\" and select your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("At the top of the screen, please select the \"Import\" tab", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Browse\" button and select the backup file from your hard drive.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "</li>
        <li>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check the maximum filesize allowed (e.g. Max: 16MB)", [], "Admin.Advparameters.Help"), "html", null, true);
            echo " <br>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If your backup file exceeds this limit, contact your hosting provider for assistance. ", [], "Admin.Advparameters.Help"), "html", null, true);
            echo "
        </li>
        <li>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the \"Go\" button and please wait patiently for the import process to conclude. This may take several minutes.", [], "Admin.Advparameters.Help"), "html", null, true);
            echo " <br></li>
      </ol>";
        }
        // line 53
        echo "  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  109 => 50,  104 => 48,  101 => 47,  97 => 45,  93 => 44,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  63 => 36,  59 => 34,  55 => 33,  50 => 31,  46 => 30,  41 => 29,  39 => 28,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\Blocks\\backup_info.html.twig");
    }
}
