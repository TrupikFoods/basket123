<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basel/template/extension/quickcheckout/confirm.twig */
class __TwigTemplate_020c95db59cb7b5b590b8f56ebb4465212f533f2bb86d459409486a5c4af9771 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !($context["redirect"] ?? null)) {
            echo " 
  ";
            // line 2
            if (($context["confirmation_page"] ?? null)) {
                echo " 
\t<div class=\"table\">
\t  <table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                // line 7
                echo ($context["column_name"] ?? null);
                echo "</td>

\t\t\t<td class=\"text-right\">";
                // line 9
                echo ($context["column_price"] ?? null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 10
                echo ($context["column_total"] ?? null);
                echo "</td>
\t\t  </tr>
\t\t</thead>
\t\t<tbody>
\t\t  ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 16);
                    echo " x <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "</a>
\t\t\t  <br /><small>(";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 17);
                    echo ")</small>
\t\t\t  ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
\t\t\t  <br />
\t\t\t  &nbsp;<small>- ";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                        echo "</small>
\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo " 
\t\t\t  ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22)) {
                        echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                        // line 24
                        echo ($context["text_recurring"] ?? null);
                        echo "</span> <small>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24);
                        echo "</small>
\t\t\t  ";
                    }
                    // line 25
                    echo "</td>

\t\t\t<td class=\"text-right\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 28);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 33);
                    echo "</td>

\t\t\t<td class=\"text-right\">";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 36);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo " 
\t\t</tbody>
\t\t<tfoot>
\t\t  ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td colspan=\"2\" class=\"text-right\"><strong>";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 43);
                    echo ":</strong></td>
\t\t\t<td class=\"text-right\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 44);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo " 
\t\t</tfoot>
\t  </table>
\t</div>
  ";
            }
            // line 51
            echo "  <div class=\"payment\">";
            echo ($context["payment"] ?? null);
            echo "</div>
  <a class=\"btn btn-default pull-left\" href=\"";
            // line 52
            echo ($context["back"] ?? null);
            echo "\">";
            echo ($context["button_back"] ?? null);
            echo "</a>
  
  <script type=\"text/javascript\"><!--
  ";
            // line 55
            if ((($context["payment_target"] ?? null) && ($context["auto_submit"] ?? null))) {
                echo " 
  \$('.payment').find('";
                // line 56
                echo ($context["payment_target"] ?? null);
                echo "').trigger('click');
  
  setTimeout(function() {
\t  \$('#quickcheckoutconfirm').show();
\t  \$('#payment').show();
\t  \$('.fa-spinner').remove();
  }, 4000);
  ";
            }
            // line 63
            echo " 
  //--></script> 
";
        } else {
            // line 65
            echo "   
<script type=\"text/javascript\"><!--
location = '";
            // line 67
            echo ($context["redirect"] ?? null);
            echo "';
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 67,  224 => 65,  219 => 63,  208 => 56,  204 => 55,  196 => 52,  191 => 51,  184 => 46,  175 => 44,  171 => 43,  164 => 41,  159 => 38,  150 => 36,  146 => 35,  141 => 33,  133 => 31,  124 => 28,  120 => 27,  116 => 25,  109 => 24,  104 => 22,  101 => 21,  91 => 20,  84 => 18,  80 => 17,  72 => 16,  65 => 14,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/confirm.twig", "");
    }
}
