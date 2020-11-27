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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig */
class __TwigTemplate_632155a9c6ebf67abecb55de8f5486455eb7d1a0276a3904e65c22899bf3ceef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'invoice_options' => [$this, 'block_invoice_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", 27);
        // line 29
        $this->displayBlock('invoice_options', $context, $blocks);
    }

    public function block_invoice_options($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"col-xl-10\">";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["invoiceOptionsForm"] ?? null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_process")]);
        echo "
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">settings</i>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
                <div class=\"card-text\">
                    <div class=\"form-group row\">";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable invoices", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, your customers will receive an invoice for the purchase.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_invoices", []), 'errors');
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_invoices", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable tax breakdown", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If required, show the total amount per rate of the corresponding tax.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_tax_breakdown", []), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_tax_breakdown", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 53
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable product image", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adds an image in front of the product name on the invoice", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_product_images", []), 'errors');
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "enable_product_images", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 60
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice prefix", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Freely definable prefix for invoice number (e.g. #IN00001).", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_prefix", []), 'errors');
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_prefix", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add current year to invoice number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "add_current_year", []), 'errors');
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "add_current_year", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset sequential invoice number at the beginning of the year", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "reset_number_annually", []), 'errors');
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "reset_number_annually", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label class=\"form-control-label\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position of the year date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                        </label>
                        <div class=\"col-sm\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "year_position", []), 'errors');
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "year_position", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 94
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice number", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The next invoice will begin with this number, and then increase with each additional invoice. Set to 0 if you want to keep the current number (which is #%number%).", ["%number%" => $this->getAttribute($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "vars", []), "next_invoice_number", [])], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_number", []), 'errors');
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_number", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 101
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Legal free text", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use this field to show additional information on the invoice, below the payment methods summary (like specific legal information).", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "legal_free_text", []), 'errors');
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "legal_free_text", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 108
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Footer text", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This text will appear at the bottom of the invoice, below your company details.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "footer_text", []), 'errors');
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "footer_text", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 115
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice model", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose an invoice model.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_model", []), 'errors');
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "invoice_model", []), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">";
        // line 122
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use the disk as cache for PDF invoices", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Saves memory but slows down the PDF generation.", [], "Admin.Orderscustomers.Help"));
        echo "
                        <div class=\"col-sm\">";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "use_disk_cache", []), 'errors');
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["invoiceOptionsForm"] ?? null), "use_disk_cache", []), 'widget');
        echo "
                        </div>
                    </div>";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["invoiceOptionsForm"] ?? null), 'rest');
        echo "
                </div>
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["invoiceOptionsForm"] ?? null), 'form_end');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 137,  211 => 133,  203 => 128,  198 => 125,  196 => 124,  192 => 122,  186 => 118,  184 => 117,  180 => 115,  174 => 111,  172 => 110,  168 => 108,  162 => 104,  160 => 103,  156 => 101,  150 => 97,  148 => 96,  144 => 94,  138 => 90,  136 => 89,  131 => 86,  124 => 81,  122 => 80,  117 => 77,  110 => 72,  108 => 71,  103 => 68,  96 => 63,  94 => 62,  90 => 60,  84 => 56,  82 => 55,  78 => 53,  72 => 49,  70 => 48,  66 => 46,  60 => 42,  58 => 41,  54 => 39,  47 => 34,  41 => 31,  39 => 30,  33 => 29,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Order\\Invoices\\Blocks\\invoice_options.html.twig");
    }
}
