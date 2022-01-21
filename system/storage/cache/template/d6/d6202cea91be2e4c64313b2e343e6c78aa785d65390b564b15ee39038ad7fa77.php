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

/* basel/template/extension/quickcheckout/cart.twig */
class __TwigTemplate_c5974208459bbe4519b33a2e055ca19e730d2e39e410edb2ab2dd9e983b83242 extends \Twig\Template
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
        echo "<table class=\"quickcheckout-cart\">
  <thead>
\t<tr>
\t  <td class=\"image\">";
        // line 4
        echo ($context["column_image"] ?? null);
        echo "</td>
\t  <td class=\"name\">";
        // line 5
        echo ($context["column_name"] ?? null);
        echo "</td>
\t  <td class=\"quantity\">";
        // line 6
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t  <td class=\"price1 hidden-xs hidden-sm\">";
        // line 7
        echo ($context["column_price"] ?? null);
        echo "</td>
\t  <td class=\"total text-right\">";
        // line 8
        echo ($context["column_total"] ?? null);
        echo "</td>
\t</tr>
  </thead>
  ";
        // line 11
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 12
            echo "\t<tbody>
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "        <tr>
          <td class=\"image\">";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    echo " 
            <a href=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" /></a>
            ";
                }
                // line 17
                echo "</td>
          <td class=\"name\"><a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "</a>
            <div>
              ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
              <small>";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                    echo "</small><br />
\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 23)) {
                    echo " 
\t\t\t  <br />
\t\t\t  <small>";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 25);
                    echo "</small>
\t\t\t  ";
                }
                // line 27
                echo "\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27)) {
                    echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                    // line 29
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29);
                    echo "</small>
\t\t\t  ";
                }
                // line 31
                echo "            </div></td>
          <td class=\"quantity\">";
                // line 32
                if (($context["edit_cart"] ?? null)) {
                    echo " 
\t\t    <div class=\"qty-block\">
\t\t      <input type=\"text\" name=\"quantity[";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 34);
                    echo "]\" size=\"1\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34);
                    echo "\" class=\"form-control\" />
\t\t\t  
\t\t\t\t<a data-toggle=\"tooltip\" title=\"";
                    // line 36
                    echo ($context["button_update"] ?? null);
                    echo "\" class=\"button-update\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t<a data-toggle=\"tooltip\" title=\"";
                    // line 37
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"button-remove\" data-remove=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 37);
                    echo "\"><i class=\"fa fa-times-circle\"></i></a>
\t\t\t  
\t\t\t</div>
\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\tx&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                    echo " 
\t\t\t";
                }
                // line 42
                echo "</td>
\t\t  <td class=\"price1 hidden-xs hidden-sm\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
                echo "</td>
          <td class=\"total text-right\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                echo " 
        <tr>
          <td class=\"image\"></td>
          <td class=\"name\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 50);
                echo "</td>
          <td class=\"quantity\">x&nbsp;1</td>
\t\t  <td class=\"price1\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 52);
                echo "</td>
          <td class=\"total\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 53);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo " 
\t</tbody>
  ";
        }
        // line 58
        echo "</table>

<table class=\"table table-bordered total-list margin-b0\">
\t<tbody>
\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            echo " 
\t\t<tr>
\t\t  <td class=\"text-left\" colspan=\"4\"><b>";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 64);
            echo ":</b></td>
\t\t  <td class=\"text-right\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 65);
            echo "</td>
\t\t</tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo " 
\t</tbody>
 </table>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 67,  240 => 65,  236 => 64,  229 => 62,  223 => 58,  218 => 55,  209 => 53,  205 => 52,  200 => 50,  191 => 47,  182 => 44,  178 => 43,  175 => 42,  169 => 41,  160 => 37,  156 => 36,  149 => 34,  144 => 32,  141 => 31,  134 => 29,  128 => 27,  123 => 25,  117 => 23,  107 => 21,  101 => 20,  94 => 18,  91 => 17,  80 => 16,  76 => 15,  73 => 14,  69 => 13,  66 => 12,  64 => 11,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/cart.twig", "");
    }
}
