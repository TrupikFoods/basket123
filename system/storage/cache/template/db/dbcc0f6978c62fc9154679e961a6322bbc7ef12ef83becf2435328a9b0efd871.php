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

/* basel/template/product/compare.twig */
class __TwigTemplate_de66b5eca7ade73b7e45dbf0f3aff779cc72fb098327cec1633234eec42d9869 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "      <div class=\"table-responsive compare-table\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 28
            echo (1 + twig_length_filter($this->env, ($context["products"] ?? null)));
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody class=\"text-center\">
          <tr>
            <td>";
            // line 33
            echo ($context["button_remove"] ?? null);
            echo "</td>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 35
                echo "            <td class=\"remove\">
            <a href=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 36);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"product-remove\"></a>
            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "          </tr>
          <tr>
            <td>";
            // line 41
            echo ($context["text_name"] ?? null);
            echo "</td>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "            <td class=\"text-center product\">
              ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "              <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 45);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
                    echo "\" class=\"margin-b15\" /></br>
              ";
                }
                // line 47
                echo "              
              <a href=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "</a>
              
              ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "              <br /><span class=\"compare-price\">
              ";
                    // line 52
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                        echo "
              ";
                    } else {
                        // line 55
                        echo "              <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                        echo "</span> <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55);
                        echo "</span>
              ";
                    }
                    // line 57
                    echo "              </span>
              ";
                }
                // line 59
                echo "              
              <input type=\"button\" value=\"";
                // line 60
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm catalog_hide\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 60);
                echo "');\" />
              
              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "          </tr>
          
          <tr>
            <td>";
            // line 67
            echo ($context["text_model"] ?? null);
            echo "</td>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 69);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "          </tr>
          <tr>
            <td>";
            // line 73
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 75
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 75);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "          </tr>
          <tr>
            <td>";
            // line 79
            echo ($context["text_availability"] ?? null);
            echo "</td>
            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 81);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "          </tr>
          ";
            // line 84
            if (($context["review_status"] ?? null)) {
                // line 85
                echo "          <tr>
            <td>";
                // line 86
                echo ($context["text_rating"] ?? null);
                echo "</td>
            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 88
                    echo "            <td>
             <div class=\"rating\">
             <span class=\"rating_stars rating r";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90);
                    echo "\">
             <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
             </span>
             </div>
              ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 94);
                    echo "
              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "          </tr>
          ";
            }
            // line 99
            echo "          <tr>
            <td>";
            // line 100
            echo ($context["text_summary"] ?? null);
            echo "</td>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "            <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 102);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "          </tr>
          <tr>
            <td>";
            // line 106
            echo ($context["text_weight"] ?? null);
            echo "</td>
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 108);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "          </tr>
          <tr>
            <td>";
            // line 112
            echo ($context["text_dimension"] ?? null);
            echo "</td>
            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 114);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 114);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 114);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "          </tr>
        </tbody>
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 119
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 121
                echo (1 + twig_length_filter($this->env, ($context["products"] ?? null)));
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 121);
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 124));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 125
                    echo "        <tbody class=\"text-center\">
          <tr>
            <td>";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 127);
                    echo "</td>
            ";
                    // line 128
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 129
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 129)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 130
                            echo "            <td>";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 130)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
            ";
                        } else {
                            // line 132
                            echo "            <td></td>
            ";
                        }
                        // line 134
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "       </table>
      </div>
      ";
        } else {
            // line 142
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 144
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 145
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 147
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 147,  481 => 145,  476 => 144,  470 => 142,  465 => 139,  459 => 138,  451 => 135,  445 => 134,  441 => 132,  435 => 130,  432 => 129,  428 => 128,  424 => 127,  420 => 125,  416 => 124,  408 => 121,  404 => 119,  400 => 118,  396 => 116,  383 => 114,  379 => 113,  375 => 112,  371 => 110,  362 => 108,  358 => 107,  354 => 106,  350 => 104,  341 => 102,  337 => 101,  333 => 100,  330 => 99,  326 => 97,  317 => 94,  310 => 90,  306 => 88,  302 => 87,  298 => 86,  295 => 85,  293 => 84,  290 => 83,  281 => 81,  277 => 80,  273 => 79,  269 => 77,  260 => 75,  256 => 74,  252 => 73,  248 => 71,  239 => 69,  235 => 68,  231 => 67,  226 => 64,  212 => 60,  209 => 59,  205 => 57,  197 => 55,  191 => 53,  189 => 52,  186 => 51,  184 => 50,  177 => 48,  174 => 47,  164 => 45,  162 => 44,  159 => 43,  155 => 42,  151 => 41,  147 => 39,  136 => 36,  133 => 35,  129 => 34,  125 => 33,  115 => 28,  109 => 24,  107 => 23,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/compare.twig", "");
    }
}
