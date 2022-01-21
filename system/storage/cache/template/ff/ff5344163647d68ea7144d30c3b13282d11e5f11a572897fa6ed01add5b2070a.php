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

/* basel/template/product/product.twig */
class __TwigTemplate_2579faec644b143855e1e4d57b9f37b9b72d4dd265aaf53442e72f63417ff933 extends \Twig\Template
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

";
        // line 3
        if ((($context["product_layout"] ?? null) != "full-width")) {
            // line 4
            echo "<style>
.product-page .image-area {
\t";
            // line 6
            if (((($context["product_layout"] ?? null) == "images-left") && ($context["images"] ?? null))) {
                echo " 
\t\twidth: ";
                // line 7
                echo ((($context["img_w"] ?? null) + ($context["img_a_w"] ?? null)) + 20);
                echo "px;
\t";
            } else {
                // line 9
                echo "\t\twidth: ";
                echo ($context["img_w"] ?? null);
                echo "px;
\t";
            }
            // line 11
            echo "}
.product-page .main-image {
\twidth:";
            // line 13
            echo ($context["img_w"] ?? null);
            echo "px;\t
}
.product-page .image-additional {
\t";
            // line 16
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 17
                echo ($context["img_a_w"] ?? null);
                echo "px;
\t\theight: ";
                // line 18
                echo ($context["img_h"] ?? null);
                echo "px;
\t";
            } else {
                // line 20
                echo "\t\twidth: ";
                echo ($context["img_w"] ?? null);
                echo "px;
\t";
            }
            // line 22
            echo "}
.product-page .image-additional.has-arrows {
\t";
            // line 24
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\theight: ";
                // line 25
                echo (($context["img_h"] ?? null) - 40);
                echo "px;
\t";
            }
            // line 27
            echo "}
@media (min-width: 992px) and (max-width: 1199px) {
.product-page .image-area {
\t";
            // line 30
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 31
                echo (((($context["img_w"] ?? null) + ($context["img_a_w"] ?? null)) / 1.25) + 20);
                echo "px;
\t";
            } else {
                // line 33
                echo "\t\twidth: ";
                echo (($context["img_w"] ?? null) / 1.25);
                echo "px;
\t";
            }
            // line 35
            echo "}
.product-page .main-image {
\twidth:";
            // line 37
            echo (($context["img_w"] ?? null) / 1.25);
            echo "px;\t
}
.product-page .image-additional {
\t";
            // line 40
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 41
                echo (($context["img_a_w"] ?? null) / 1.25);
                echo "px;
\t\theight: ";
                // line 42
                echo (($context["img_h"] ?? null) / 1.25);
                echo "px;
\t";
            } else {
                // line 44
                echo "\t\twidth: ";
                echo (($context["img_w"] ?? null) / 1.25);
                echo "px;
\t";
            }
            // line 46
            echo "}
}
</style>
";
        }
        // line 50
        echo "
<ul class=\"breadcrumb\">
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 53
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 53);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 53);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </ul>

<div class=\"container product-layout ";
        // line 57
        echo ($context["product_layout"] ?? null);
        echo "\">
  
  <div class=\"row\">";
        // line 59
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 60
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 61
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 62
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 63
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 64
            echo "    ";
        } else {
            // line 65
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 66
            echo "    ";
        }
        // line 67
        echo "    <div id=\"content\" class=\"product-main no-min-height ";
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 68
        echo ($context["content_top"] ?? null);
        echo "
    
    <div class=\"table product-info product-page\">
     
     <div class=\"table-cell left\">
     
     ";
        // line 74
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 75
            echo "     <div class=\"image-area ";
            if ( !($context["hover_zoom"] ?? null)) {
                echo "hover-zoom-disabled";
            }
            echo "\" id=\"gallery\">
            
        ";
            // line 77
            if (($context["thumb"] ?? null)) {
                // line 78
                echo "        <div class=\"main-image\">
        
        ";
                // line 80
                if (((($context["price"] ?? null) && ($context["special"] ?? null)) && ($context["sale_badge"] ?? null))) {
                    // line 81
                    echo "        <span class=\"badge sale_badge\"><i>";
                    echo ($context["sale_badge"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 83
                echo "        
        ";
                // line 84
                if (($context["is_new"] ?? null)) {
                    // line 85
                    echo "        <span class=\"badge new_badge\"><i>";
                    echo ($context["basel_text_new"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 87
                echo "\t\t
\t\t";
                // line 88
                if (((($context["qty"] ?? null) < 1) && ($context["stock_badge_status"] ?? null))) {
                    // line 89
                    echo "        <span class=\"badge out_of_stock_badge\"><i>";
                    echo ($context["basel_text_out_of_stock"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 91
                echo "
        <a class=\"";
                // line 92
                if ( !($context["images"] ?? null)) {
                    echo "link cloud-zoom";
                }
                echo " ";
                if ((($context["product_layout"] ?? null) == "full-width")) {
                    echo "link";
                } else {
                    echo "cloud-zoom";
                }
                echo "\" id=\"main-image\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" rel=\"position:'inside', showTitle: false\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
        </div>
        ";
            }
            // line 95
            echo "\t\t
        ";
            // line 96
            if (($context["images"] ?? null)) {
                // line 97
                echo "        <ul class=\"image-additional\">
        ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 99
                    echo "        <li>
        <a class=\"link ";
                    // line 100
                    if ((($context["product_layout"] ?? null) != "full-width")) {
                        echo "cloud-zoom-gallery locked";
                    }
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 100);
                    echo "\" rel=\"useZoom: 'main-image', smallImage: '";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb_lg", [], "any", false, false, false, 100);
                    echo "'\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            ";
                if ((($context["thumb"] ?? null) && (($context["product_layout"] ?? null) != "full-width"))) {
                    // line 104
                    echo "            <li><a class=\"link cloud-zoom-gallery locked active\" href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" rel=\"useZoom: 'main-image', smallImage: '";
                    echo ($context["thumb"] ?? null);
                    echo "'\"><img src=\"";
                    echo ($context["thumb_sm"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
            ";
                }
                // line 106
                echo "        </ul>
        ";
            }
            // line 108
            echo "            
     </div> <!-- .table-cell.left ends -->
      
     </div> <!-- .image-area ends -->
     ";
        }
        // line 113
        echo "     
    <div class=\"table-cell w100 right\">
\t<div class=\"inner\">
    
    <div class=\"product-h1\">
    <h1 id=\"page-title\">";
        // line 118
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
    
    ";
        // line 121
        if ((($context["review_status"] ?? null) && (($context["review_qty"] ?? null) > 0))) {
            // line 122
            echo "    <div class=\"rating\">
    <span class=\"rating_stars rating r";
            // line 123
            echo ($context["rating"] ?? null);
            echo "\">
    <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
    </span>
    </div>
    <span class=\"review_link\">(<a class=\"hover_uline to_tabs\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 127
            echo ($context["reviews"] ?? null);
            echo "</a>)</span>
\t";
        }
        // line 129
        echo "
    ";
        // line 130
        if (($context["price"] ?? null)) {
            // line 131
            echo "      <ul class=\"list-unstyled price\">
        ";
            // line 132
            if ( !($context["special"] ?? null)) {
                // line 133
                echo "        <li><span class=\"live-price\">";
                echo ($context["price"] ?? null);
                echo "<span></li>
        ";
            } else {
                // line 135
                echo "        <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span><span class=\"live-price-new\">";
                echo ($context["special"] ?? null);
                echo "<span></li>
        <span id=\"special_countdown\"></span>
        ";
            }
            // line 138
            echo "      </ul>
        
        ";
            // line 140
            if (($context["discounts"] ?? null)) {
                // line 141
                echo "        <p class=\"discount\">
        ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 143
                    echo "        <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 143);
                    echo ($context["text_discount"] ?? null);
                    echo "<i class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 143);
                    echo "</i></span>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "        </p>
        ";
            }
            // line 147
            echo "      
      ";
        }
        // line 148
        echo " <!-- if price ends -->
      
      
      ";
        // line 151
        if ((($context["meta_description_status"] ?? null) && ($context["meta_description"] ?? null))) {
            // line 152
            echo "      <p class=\"meta_description\">";
            echo ($context["meta_description"] ?? null);
            echo "</p>
      ";
        }
        // line 154
        echo "            
      
      <div id=\"product\">
            
            ";
        // line 158
        if (($context["options"] ?? null)) {
            // line 159
            echo "            <div class=\"options\">
            ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 161
                echo "            
            ";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "select")) {
                    // line 163
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 163)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <select name=\"option[";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 169
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 171
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 171);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                        echo "
                ";
                        // line 172
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 172)) {
                            // line 173
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 173);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173);
                            echo ")
                ";
                        }
                        // line 175
                        echo "                </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "              </select>
              </div>
            </div>
            ";
                }
                // line 181
                echo "            
            ";
                // line 182
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "radio")) {
                    // line 183
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell radio-cell name\">
              <label class=\"control-label\">";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</label>
              </div>
              <div class=\"table-cell radio-cell\">
              <div id=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">
                ";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 190
                        echo "                <div class=\"radio";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" />
                    ";
                        // line 193
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 193)) {
                            // line 194
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 194);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 194);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 194);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 194);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 194);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194);
                                echo ")";
                            }
                            echo "\" />
                    ";
                        }
                        // line 196
                        echo "                    <span class=\"name\">
                    ";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                        echo "
                    ";
                        // line 198
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 199);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199);
                            echo ")
                    ";
                        }
                        // line 201
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 209
                echo "            
            ";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 210) == "checkbox")) {
                    // line 211
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 211)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell checkbox-cell name\">
              <label class=\"control-label\">";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
              </div>
              <div class=\"table-cell checkbox-cell\">
              <div id=\"input-option";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\">
                ";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 217));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 218
                        echo "                <div class=\"checkbox";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 218)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 220);
                        echo "\" />
                    ";
                        // line 221
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 221)) {
                            // line 222
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 222);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 222);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 222);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 222);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 222);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222);
                                echo ")";
                            }
                            echo "\" /> 
                    ";
                        }
                        // line 224
                        echo "                    <span class=\"name\">
                    ";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 225);
                        echo "
                    ";
                        // line 226
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 226)) {
                            // line 227
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 227);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 227);
                            echo ")
                    ";
                        }
                        // line 229
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 237
                echo "            
            
            ";
                // line 239
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 239) == "text")) {
                    // line 240
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 240)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 242);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <input type=\"text\" name=\"option[";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 245);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 245);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-control\" />
              </div>
            </div>
            ";
                }
                // line 249
                echo "            
            ";
                // line 250
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 250) == "textarea")) {
                    // line 251
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 251)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <textarea name=\"option[";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 256);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 256);
                    echo "</textarea>
              </div>
            </div>
            ";
                }
                // line 260
                echo "            
            ";
                // line 261
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "file")) {
                    // line 262
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 262)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\">";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 264);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <button type=\"button\" id=\"button-upload";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "\" />
              </div>
            </div>
            ";
                }
                // line 272
                echo "            
            ";
                // line 273
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 273) == "date")) {
                    // line 274
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 274)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 276);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 280);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 287
                echo "            
            ";
                // line 288
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 288) == "datetime")) {
                    // line 289
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 289)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 291);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 295);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 302
                echo "            
            ";
                // line 303
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "time")) {
                    // line 304
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 306);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 310);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 317
                echo "            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo " <!-- foreach option -->
            </div>
            ";
        }
        // line 321
        echo "            
            ";
        // line 322
        if (($context["recurrings"] ?? null)) {
            // line 323
            echo "            <hr>
            <h3>";
            // line 324
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 327
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 329
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 329);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 329);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 335
        echo "            
            <div class=\"form-group buy catalog_hide\">

            <input type=\"number\" step=\"1\" min=\"";
        // line 338
        echo ($context["minimum"] ?? null);
        echo "\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control input-quantity\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 339
        echo ($context["product_id"] ?? null);
        echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 340
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        if (((($context["qty"] ?? null) < 1) && ($context["stock_badge_status"] ?? null))) {
            echo ($context["basel_text_out_of_stock"] ?? null);
        } else {
            echo ($context["button_cart"] ?? null);
        }
        echo "</button>
            </div>
            ";
        // line 342
        if ((($context["minimum"] ?? null) > 1)) {
            // line 343
            echo "            <div class=\"alert alert-sm alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 345
        echo "          
          </div> <!-- #product ends -->


\t<p class=\"info is_wishlist\"><a onclick=\"wishlist.add('";
        // line 349
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"icon-heart\"></i> ";
        echo ($context["button_wishlist"] ?? null);
        echo "</a></p>
\t<p class=\"info is_compare\"><a onclick=\"compare.add('";
        // line 350
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"icon-refresh\"></i> ";
        echo ($context["button_compare"] ?? null);
        echo "</a></p>
    ";
        // line 351
        if (($context["question_status"] ?? null)) {
            // line 352
            echo "    <p class=\"info is_ask\"><a class=\"to_tabs\" onclick=\"\$('a[href=\\'#tab-questions\\']').trigger('click'); return false;\"><i class=\"icon-question\"></i> ";
            echo ($context["basel_button_ask"] ?? null);
            echo "</a></p>
    ";
        }
        // line 354
        echo "    
    <div class=\"clearfix\"></div>
    
    <div class=\"info-holder\">
    
      ";
        // line 359
        if ((($context["price"] ?? null) && ($context["tax"] ?? null))) {
            // line 360
            echo "      <p class=\"info p-tax\"><b>";
            echo ($context["text_tax"] ?? null);
            echo "</b> <span class=\"live-price-tax\">";
            echo ($context["tax"] ?? null);
            echo "</span></p>
      ";
        }
        // line 362
        echo "      
      ";
        // line 363
        if ((($context["price"] ?? null) && ($context["points"] ?? null))) {
            // line 364
            echo "      <p class=\"info\"><b>";
            echo ($context["text_points"] ?? null);
            echo "</b> ";
            echo ($context["points"] ?? null);
            echo "</p>
      ";
        }
        // line 366
        echo "      
      <p class=\"info ";
        // line 367
        if ((($context["qty"] ?? null) > 0)) {
            echo "in_stock";
        }
        echo "\"><b>";
        echo ($context["text_stock"] ?? null);
        echo "</b> ";
        echo ($context["stock"] ?? null);
        echo "</p>
      
      ";
        // line 369
        if (($context["manufacturer"] ?? null)) {
            // line 370
            echo "      <p class=\"info\"><b>";
            echo ($context["text_manufacturer"] ?? null);
            echo "</b> <a class=\"hover_uline\" href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></p>
      ";
        }
        // line 372
        echo "      
      <p class=\"info\"><b>";
        // line 373
        echo ($context["text_model"] ?? null);
        echo "</b> ";
        echo ($context["model"] ?? null);
        echo "</p>
      
      ";
        // line 375
        if (($context["reward"] ?? null)) {
            // line 376
            echo "      <p class=\"info\"><b>";
            echo ($context["text_reward"] ?? null);
            echo "</b> ";
            echo ($context["reward"] ?? null);
            echo "</p>
      ";
        }
        // line 378
        echo "      
      ";
        // line 379
        if (($context["tags"] ?? null)) {
            // line 380
            echo "      <p class=\"info tags\"><b>";
            echo ($context["text_tags"] ?? null);
            echo "</b> &nbsp;<span>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "<a class=\"hover_uline\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 380);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 380);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</span></p>
      ";
        }
        // line 382
        echo "      
      ";
        // line 383
        if (($context["basel_share_btn"] ?? null)) {
            // line 384
            echo "\t\t";
            if ((($context["basel_sharing_style"] ?? null) == "large")) {
                // line 385
                echo "\t\t\t<div class=\"lg-share\">
\t\t\t<div class=\"social-icons round inversed\">
\t\t\t<a class=\"icon facebook fb_share external\" rel=\"nofollow\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t<a class=\"icon twitter twitter_share external\" rel=\"nofollow\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t<a class=\"icon google google_share external\" rel=\"nofollow\"><i class=\"icon-google-plus\"></i></a>
\t\t\t<a class=\"icon pinterest pinterest_share external\" rel=\"nofollow\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t<a class=\"icon vk vk_share external\" rel=\"nofollow\"><i class=\"fa fa-vk\"></i></a>
\t\t\t</div>
\t\t\t</div>
\t\t";
            } else {
                // line 395
                echo "\t\t\t<p class=\"info share\"><b>";
                echo ($context["basel_text_share"] ?? null);
                echo ":</b> 
\t\t\t<a class=\"single_share fb_share external\" rel=\"nofollow\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t<a class=\"single_share twitter_share external\" rel=\"nofollow\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t<a class=\"single_share google_share external\" rel=\"nofollow\"><i class=\"icon-google-plus\"></i></a>
\t\t\t<a class=\"single_share pinterest_share external\" rel=\"nofollow\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t<a class=\"single_share vk_share external\" rel=\"nofollow\"><i class=\"fa fa-vk\"></i></a>
\t\t\t</p>
\t\t ";
            }
            // line 403
            echo "\t  ";
        }
        // line 404
        echo "     
     </div> <!-- .info-holder ends -->
     
\t </div> <!-- .inner ends -->
     </div> <!-- .table-cell.right ends -->
    
    </div> <!-- .product-info ends -->
    
";
        // line 412
        if (($context["full_width_tabs"] ?? null)) {
            // line 413
            echo "</div> <!-- main column ends -->
";
            // line 414
            echo ($context["column_right"] ?? null);
            echo "
</div> <!-- .row ends -->
</div> <!-- .container ends -->    
";
        }
        // line 418
        echo "
";
        // line 419
        if (($context["full_width_tabs"] ?? null)) {
            // line 420
            echo "<div class=\"outer-container product-tabs-wrapper\">
<div class=\"container\">   
";
        } else {
            // line 423
            echo "<div class=\"inline-tabs\"> 
";
        }
        // line 425
        echo "
<!-- Tabs area start -->
<div class=\"row\">
<div class=\"col-sm-12\">
  
  <ul class=\"nav nav-tabs ";
        // line 430
        echo ($context["product_tabs_style"] ?? null);
        echo " main_tabs\">
    <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 431
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
    ";
        // line 432
        if (($context["product_tabs"] ?? null)) {
            // line 433
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 434
                echo "        <li><a href=\"#custom-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 434);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 434);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "    ";
        }
        // line 437
        echo "    ";
        if (($context["attribute_groups"] ?? null)) {
            // line 438
            echo "    <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
    ";
        }
        // line 440
        echo "    ";
        if (($context["review_status"] ?? null)) {
            // line 441
            echo "    <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
    ";
        }
        // line 443
        echo "    ";
        if (($context["question_status"] ?? null)) {
            // line 444
            echo "    <li><a href=\"#tab-questions\" data-toggle=\"tab\">";
            echo ($context["basel_tab_questions"] ?? null);
            echo " (";
            echo ($context["questions_total"] ?? null);
            echo ")</a></li>
    ";
        }
        // line 446
        echo "  </ul>
  
  <div class=\"tab-content\">
    
    <div class=\"tab-pane active\" id=\"tab-description\">
    ";
        // line 451
        echo ($context["description"] ?? null);
        echo "
    </div>
    
    ";
        // line 454
        if (($context["product_tabs"] ?? null)) {
            // line 455
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 456
                echo "    <div class=\"tab-pane\" id=\"custom-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 456);
                echo "\">
    ";
                // line 457
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "description", [], "any", false, false, false, 457);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 460
            echo "    ";
        }
        // line 461
        echo "    
    ";
        // line 462
        if (($context["attribute_groups"] ?? null)) {
            // line 463
            echo "    <div class=\"tab-pane\" id=\"tab-specification\">
      <table class=\"table specification\">
        ";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 466
                echo "        <thead>
          <tr>
            <td colspan=\"2\">";
                // line 468
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 468);
                echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
                // line 472
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 472));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 473
                    echo "          <tr>
            <td class=\"text-left\"><b>";
                    // line 474
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 474);
                    echo "</b></td>
            <td class=\"text-right\">";
                    // line 475
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 475);
                    echo "</td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                echo "        </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 480
            echo "      </table>
    </div>
    ";
        }
        // line 483
        echo "    
    ";
        // line 484
        if (($context["question_status"] ?? null)) {
            // line 485
            echo "    <div class=\"tab-pane\" id=\"tab-questions\">
    ";
            // line 486
            echo ($context["product_questions"] ?? null);
            echo "
    </div>
    ";
        }
        // line 489
        echo "    
    ";
        // line 490
        if (($context["review_status"] ?? null)) {
            // line 491
            echo "    <div class=\"tab-pane\" id=\"tab-review\">
    <div class=\"row\">
    <div class=\"col-sm-6\">
    <h4><b>";
            // line 494
            echo ($context["button_reviews"] ?? null);
            echo "</b></h4>
        
\t\t<div id=\"review\">
\t\t";
            // line 497
            if (($context["seo_reviews"] ?? null)) {
                // line 498
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seo_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 499
                    echo "\t\t<div class=\"table\">
\t\t<div class=\"table-cell\"><i class=\"fa fa-user\"></i></div>
\t\t<div class=\"table-cell right\">
\t\t<p class=\"author\"><b>";
                    // line 502
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 502);
                    echo "</b>  -  ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 502);
                    echo "
\t\t<span class=\"rating\">
\t\t<span class=\"rating_stars rating r";
                    // line 504
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 504);
                    echo "\">
\t\t<i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
\t\t</span>
\t\t</span>
\t\t</p>
\t\t";
                    // line 509
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 509);
                    echo "
\t\t</div>
\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 513
                echo "\t\t";
                if (($context["pagination"] ?? null)) {
                    // line 514
                    echo "\t\t<div class=\"pagination-holder\">";
                    echo ($context["pagination"] ?? null);
                    echo "</div>
\t\t";
                }
                // line 516
                echo "\t\t";
            } else {
                // line 517
                echo "\t\t<p>";
                echo ($context["text_no_reviews"] ?? null);
                echo "</p>
\t\t";
            }
            // line 519
            echo "\t\t</div>

    </div>
    <div class=\"col-sm-6 right\">
      <form class=\"form-horizontal\" id=\"form-review\">
        
        <h4 id=\"review-notification\"><b>";
            // line 525
            echo ($context["text_write"] ?? null);
            echo "</b></h4>
        ";
            // line 526
            if (($context["review_guest"] ?? null)) {
                // line 527
                echo "        
        <div class=\"form-group required\">
          <div class=\"col-sm-12 rating-stars\">
            <label class=\"control-label\">";
                // line 530
                echo ($context["entry_rating"] ?? null);
                echo "</label>
            
            <input type=\"radio\" value=\"1\" name=\"rating\" id=\"rating1\" />
        \t<label for=\"rating1\"><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"2\" name=\"rating\" id=\"rating2\" />
        \t<label for=\"rating2\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"3\" name=\"rating\" id=\"rating3\" />
        \t<label for=\"rating3\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"4\" name=\"rating\" id=\"rating4\" />
        \t<label for=\"rating4\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"5\" name=\"rating\" id=\"rating5\" />
        \t<label for=\"rating5\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            </div>
        </div>
        
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-name\">";
                // line 551
                echo ($context["entry_name"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"name\" value=\"";
                // line 552
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control grey\" />
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-review\">";
                // line 557
                echo ($context["entry_review"] ?? null);
                echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control grey\"></textarea>
            <small>";
                // line 559
                echo ($context["text_note"] ?? null);
                echo "</small>
          </div>
        </div>
        
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            ";
                // line 565
                echo ($context["captcha"] ?? null);
                echo "
          </div>
        </div>
        
        <div class=\"buttons clearfix\">
          <div class=\"text-right\">
          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 571
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-outline\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
          </div>
        </div>
        ";
            } else {
                // line 575
                echo "        ";
                echo ($context["text_login"] ?? null);
                echo "
        ";
            }
            // line 577
            echo "      </form>
       </div>
      </div>
    </div>
    ";
        }
        // line 581
        echo "<!-- if review-status ends -->
    
  </div> <!-- .tab-content ends -->
</div> <!-- .col-sm-12 ends -->
</div> <!-- .row ends -->
<!-- Tabs area ends -->

";
        // line 588
        if (($context["full_width_tabs"] ?? null)) {
            // line 589
            echo "</div>
";
        }
        // line 591
        echo "</div>
      
      <!-- Related Products -->
      
    ";
        // line 595
        if (($context["full_width_tabs"] ?? null)) {
            // line 596
            echo "    <div class=\"container\">  
    ";
        }
        // line 598
        echo "      
        ";
        // line 599
        if (($context["products"] ?? null)) {
            // line 600
            echo "        <div class=\"widget widget-related\">
        
        <div class=\"widget-title\">
        <p class=\"main-title\"><span>";
            // line 603
            echo ($context["text_related"] ?? null);
            echo "</span></p>
        <p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
        </div>
        
        <div class=\"grid grid-holder related carousel grid";
            // line 607
            echo ($context["basel_rel_prod_grid"] ?? null);
            echo "\">
            ";
            // line 608
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 609
                echo "              ";
                $this->loadTemplate("basel/template/product/single_product.twig", "basel/template/product/product.twig", 609)->display($context);
                // line 610
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 611
            echo "        </div>
        </div>
        ";
        }
        // line 614
        echo "      
      ";
        // line 615
        echo ($context["content_bottom"] ?? null);
        echo "
      
    ";
        // line 617
        if (($context["full_width_tabs"] ?? null)) {
            // line 618
            echo "    </div>  
    ";
        }
        // line 620
        echo "

";
        // line 622
        if ( !($context["full_width_tabs"] ?? null)) {
            // line 623
            echo "</div> <!-- main column ends -->
";
            // line 624
            echo ($context["column_right"] ?? null);
            echo "
</div> <!-- .row ends -->
</div> <!-- .container ends -->
";
        }
        // line 628
        echo "
<script src=\"catalog/view/theme/basel/js/lightgallery/js/lightgallery.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/lightgallery/js/lg-zoom.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/cloudzoom/cloud-zoom.1.0.2.min.js\"></script>
";
        // line 632
        if (($context["basel_price_update"] ?? null)) {
            // line 633
            echo "<script src=\"index.php?route=extension/basel/live_options/js&product_id=";
            echo ($context["product_id"] ?? null);
            echo "\"></script>
";
        }
        // line 635
        echo "
";
        // line 636
        if (($context["products"] ?? null)) {
            // line 637
            echo "<script><!--
\$('.grid-holder.related').slick({
prevArrow: \"<a class=\\\"arrow-left icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right icon-arrow-right\\\"></a>\",
dots:true,
";
            // line 642
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 643
                echo "rtl: true,
";
            }
            // line 645
            echo "respondTo:'min',
";
            // line 646
            if ((($context["basel_rel_prod_grid"] ?? null) == "5")) {
                // line 647
                echo "slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 648
($context["basel_rel_prod_grid"] ?? null) == "4")) {
                // line 649
                echo "slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 650
($context["basel_rel_prod_grid"] ?? null) == "3")) {
                // line 651
                echo "slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 652
($context["basel_rel_prod_grid"] ?? null) == "2")) {
                // line 653
                echo "slidesToShow:2,slidesToScroll:2,responsive:[
";
            }
            // line 655
            if (($context["items_mobile_fw"] ?? null)) {
                // line 656
                echo "{breakpoint:320,settings:{slidesToShow:1,slidesToScroll:1}}
";
            }
            // line 658
            echo "]
});
\$('.product-style2 .single-product .icon').attr('data-placement', 'top');
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
//--></script>
";
        }
        // line 664
        echo "
";
        // line 665
        if ((($context["sale_end_date"] ?? null) && ($context["product_page_countdown"] ?? null))) {
            // line 666
            echo " <script>
  \$(function() {
\t\$('#special_countdown').countdown('";
            // line 668
            echo ($context["sale_end_date"] ?? null);
            echo "').on('update.countdown', function(event) {
  var \$this = \$(this).html(event.strftime(''
    + '<div class=\\\"special_countdown\\\"></span><p><span class=\\\"icon-clock\\\"></span> ";
            // line 670
            echo ($context["basel_text_offer_ends"] ?? null);
            echo "</p><div>'
    + '%D<i>";
            // line 671
            echo ($context["basel_text_days"] ?? null);
            echo "</i></div><div>'
    + '%H <i>";
            // line 672
            echo ($context["basel_text_hours"] ?? null);
            echo "</i></div><div>'
    + '%M <i>";
            // line 673
            echo ($context["basel_text_mins"] ?? null);
            echo "</i></div><div>'
    + '%S <i>";
            // line 674
            echo ($context["basel_text_secs"] ?? null);
            echo "</i></div></div>'));
});
  });
</script>
";
        }
        // line 679
        echo "
<script><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>

<script><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/basel/basel_features/add_to_cart',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'number\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function(json) {
\t\t\t\$('body').append('<span class=\"basel-spinner ajax-call\"></span>');
\t\t},

\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.table-cell').removeClass('has-error');

\t\t\tif (json.error) {
\t\t\t\t\$('.basel-spinner.ajax-call').remove();
\t\t\t\tif (json.error.option) {
\t\t\t\t\tfor (i in json.error.option) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json.error.option[i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json.error.option[i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json.error.recurring) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\t\tif (json.success_redirect) {
\t\t\t\t\t
\t\t\t\t\tlocation = json.success_redirect;
\t\t\t\t
\t\t\t\t} else if (json.success) {
\t\t\t\t\t
\t\t\t\t\t\$('.table-cell').removeClass('has-error');
\t\t\t\t\t\$('.alert, .popup-note, .basel-spinner.ajax-call, .text-danger').remove();
\t\t\t\t 
\t\t\t\t\thtml = '<div class=\"popup-note\">';
\t\t\t\t\thtml += '<div class=\"inner\">';
\t\t\t\t\thtml += '<a class=\"popup-note-close\" onclick=\"\$(this).parent().parent().remove()\">&times;</a>';
\t\t\t\t\thtml += '<div class=\"table\">';
\t\t\t\t\thtml += '<div class=\"table-cell v-top img\"><img src=\"' + json.image + '\" /></div>';
\t\t\t\t\thtml += '<div class=\"table-cell v-top\">' + json.success + '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\$('body').append(html);
\t\t\t\t\tsetTimeout(function() {\$('.popup-note').hide();}, 8100);
\t\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('.cart-total-items').html( json.total_items );
\t\t\t\t\t\$('.cart-total-amount').html( json.total_amount );
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('#cart-content').load('index.php?route=common/cart/info #cart-content > *');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script>
<script><!--
\$('.date').datetimepicker({
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();
\t\$(\"html,body\").animate({scrollTop:((\$(\"#review\").offset().top)-50)},500);
    \$('#review').fadeOut(50);

    \$('#review').load(this.href);

    \$('#review').fadeIn(500);
\t
});


\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 854
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json.error) {
\t\t\t\t\$('#review-notification').after('<div class=\"alert alert-sm alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json.error + '</div>');
\t\t\t}

\t\t\tif (json.success) {
\t\t\t\t\$('#review-notification').after('<div class=\"alert alert-sm alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json.success + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
";
        // line 883
        if ((($context["product_layout"] ?? null) == "full-width")) {
            // line 884
            echo "// Sticky information
\$('.table-cell.right .inner').theiaStickySidebar({containerSelector:'.product-info'});
";
        }
        // line 887
        echo "
// Reviews/Question scroll link
\$(\".to_tabs\").click(function() {
    \$('html, body').animate({
        scrollTop: (\$(\".main_tabs\").offset().top - 100)
    }, 1000);
});

// Sharing buttons
";
        // line 896
        if (($context["basel_share_btn"] ?? null)) {
            // line 897
            echo "var share_url = encodeURIComponent(window.location.href);
var page_title = '";
            // line 898
            echo ($context["heading_title"] ?? null);
            echo "';
";
            // line 899
            if (($context["thumb"] ?? null)) {
                // line 900
                echo "var thumb = '";
                echo ($context["thumb"] ?? null);
                echo "';
";
            }
            // line 902
            echo "\$('.fb_share').attr(\"href\", 'https://www.facebook.com/sharer/sharer.php?u=' + share_url + '');
\$('.twitter_share').attr(\"href\", 'https://twitter.com/intent/tweet?source=' + share_url + '&text=' + page_title + ': ' + share_url + '');
\$('.google_share').attr(\"href\", 'https://plus.google.com/share?url=' + share_url + '');
\$('.pinterest_share').attr(\"href\", 'http://pinterest.com/pin/create/button/?url=' + share_url + '&media=' + thumb + '&description=' + page_title + '');
\$('.vk_share').attr(\"href\", 'http://vkontakte.ru/share.php?url=' + share_url + '');
";
        }
        // line 908
        echo "});
//--></script>

";
        // line 911
        if ((($context["product_layout"] ?? null) != "full-width")) {
            // line 912
            echo "<script>
\$(document).ready(function() {
\$('.image-additional a.link').click(function (e) {
\tif (\$(this).hasClass(\"locked\")) {
  \t\te.stopImmediatePropagation();
\t}
\t\$('.image-additional a.link.active').removeClass('active');
\t\$(this).addClass('active')
});

";
            // line 922
            if (($context["images"] ?? null)) {
                // line 923
                echo "\$('.cloud-zoom-wrap').click(function (e) {
\te.preventDefault();
\t\$('.image-additional a.link.active').removeClass('locked').trigger('click').addClass('locked');
});
";
            } else {
                // line 928
                echo "\$('.cloud-zoom-wrap').click(function (e) {
\te.preventDefault();
\t\$('#main-image').trigger('click');
});
";
            }
            // line 933
            echo "
\$('.image-additional').slick({
prevArrow: \"<a class=\\\"icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"icon-arrow-right\\\"></a>\",
appendArrows: '.image-additional .slick-list',
arrows:true,
";
            // line 939
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 940
                echo "rtl: true,
";
            }
            // line 942
            echo "infinite:false,
";
            // line 943
            if ((($context["product_layout"] ?? null) == "images-left")) {
                // line 944
                echo "slidesToShow: ";
                echo twig_round((($context["img_h"] ?? null) / ($context["img_a_h"] ?? null)), 0, "floor");
                echo ",
vertical:true,
verticalSwiping:true,
";
            } else {
                // line 948
                echo "slidesToShow: ";
                echo twig_round((($context["img_w"] ?? null) / ($context["img_a_w"] ?? null)));
                echo ",
";
            }
            // line 950
            echo "responsive: [
{
breakpoint: 992,
settings: {
vertical:false,
verticalSwiping:false
}
}]
});\t

});
//--></script>
";
        }
        // line 963
        echo "<script>
\$(document).ready(function() {
// Image Gallery
\$(\"#gallery\").lightGallery({
\tselector: '.link',
\tdownload:false,
\thideBarsDelay:99999
});
});
//--></script>
<script type=\"application/ld+json\">
{
\"@context\": \"http://schema.org\",
\"@type\": \"Product\",
\"image\": [
";
        // line 978
        if (($context["thumb"] ?? null)) {
            // line 979
            echo "\"";
            echo ($context["thumb"] ?? null);
            echo "\"
";
        }
        // line 981
        echo "],
\"description\": \"";
        // line 982
        echo ($context["meta_description"] ?? null);
        echo "\",
";
        // line 983
        if (($context["review_qty"] ?? null)) {
            // line 984
            echo "\"aggregateRating\": {
\"@type\": \"AggregateRating\",
\"ratingValue\": \"";
            // line 986
            echo ($context["rating"] ?? null);
            echo "\",
\"reviewCount\": \"";
            // line 987
            echo ($context["review_qty"] ?? null);
            echo "\"},
";
        }
        // line 989
        echo "\"name\": \"";
        echo ($context["heading_title"] ?? null);
        echo "\",
\"sku\": \"";
        // line 990
        echo ($context["model"] ?? null);
        echo "\",
";
        // line 991
        if (($context["manufacturer"] ?? null)) {
            // line 992
            echo "\"brand\": \"";
            echo ($context["manufacturer"] ?? null);
            echo "\",
";
        }
        // line 994
        echo "\"offers\": {
\"@type\": \"Offer\",
";
        // line 996
        if ((($context["qty"] ?? null) > 0)) {
            // line 997
            echo "\"availability\": \"http://schema.org/InStock\",
";
        } else {
            // line 999
            echo "\"availability\": \"http://schema.org/OutOfStock\",
";
        }
        // line 1001
        if (($context["price"] ?? null)) {
            // line 1002
            if (($context["special"] ?? null)) {
                // line 1003
                echo "\"price\": \"";
                echo ($context["special_snippet"] ?? null);
                echo "\",
";
            } else {
                // line 1005
                echo "\"price\": \"";
                echo ($context["price_snippet"] ?? null);
                echo "\",
";
            }
            // line 1007
            echo "\"priceCurrency\": \"";
            echo ($context["currency_code"] ?? null);
            echo "\"
";
        }
        // line 1009
        echo "}
}
</script>
";
        // line 1012
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2236 => 1012,  2231 => 1009,  2225 => 1007,  2219 => 1005,  2213 => 1003,  2211 => 1002,  2209 => 1001,  2205 => 999,  2201 => 997,  2199 => 996,  2195 => 994,  2189 => 992,  2187 => 991,  2183 => 990,  2178 => 989,  2173 => 987,  2169 => 986,  2165 => 984,  2163 => 983,  2159 => 982,  2156 => 981,  2150 => 979,  2148 => 978,  2131 => 963,  2116 => 950,  2110 => 948,  2102 => 944,  2100 => 943,  2097 => 942,  2093 => 940,  2091 => 939,  2083 => 933,  2076 => 928,  2069 => 923,  2067 => 922,  2055 => 912,  2053 => 911,  2048 => 908,  2040 => 902,  2034 => 900,  2032 => 899,  2028 => 898,  2025 => 897,  2023 => 896,  2012 => 887,  2007 => 884,  2005 => 883,  1973 => 854,  1796 => 679,  1788 => 674,  1784 => 673,  1780 => 672,  1776 => 671,  1772 => 670,  1767 => 668,  1763 => 666,  1761 => 665,  1758 => 664,  1750 => 658,  1746 => 656,  1744 => 655,  1740 => 653,  1738 => 652,  1735 => 651,  1733 => 650,  1730 => 649,  1728 => 648,  1725 => 647,  1723 => 646,  1720 => 645,  1716 => 643,  1714 => 642,  1707 => 637,  1705 => 636,  1702 => 635,  1696 => 633,  1694 => 632,  1688 => 628,  1681 => 624,  1678 => 623,  1676 => 622,  1672 => 620,  1668 => 618,  1666 => 617,  1661 => 615,  1658 => 614,  1653 => 611,  1639 => 610,  1636 => 609,  1619 => 608,  1615 => 607,  1608 => 603,  1603 => 600,  1601 => 599,  1598 => 598,  1594 => 596,  1592 => 595,  1586 => 591,  1582 => 589,  1580 => 588,  1571 => 581,  1564 => 577,  1558 => 575,  1549 => 571,  1540 => 565,  1531 => 559,  1526 => 557,  1518 => 552,  1514 => 551,  1490 => 530,  1485 => 527,  1483 => 526,  1479 => 525,  1471 => 519,  1465 => 517,  1462 => 516,  1456 => 514,  1453 => 513,  1443 => 509,  1435 => 504,  1428 => 502,  1423 => 499,  1418 => 498,  1416 => 497,  1410 => 494,  1405 => 491,  1403 => 490,  1400 => 489,  1394 => 486,  1391 => 485,  1389 => 484,  1386 => 483,  1381 => 480,  1374 => 478,  1365 => 475,  1361 => 474,  1358 => 473,  1354 => 472,  1347 => 468,  1343 => 466,  1339 => 465,  1335 => 463,  1333 => 462,  1330 => 461,  1327 => 460,  1318 => 457,  1313 => 456,  1308 => 455,  1306 => 454,  1300 => 451,  1293 => 446,  1285 => 444,  1282 => 443,  1276 => 441,  1273 => 440,  1267 => 438,  1264 => 437,  1261 => 436,  1250 => 434,  1245 => 433,  1243 => 432,  1239 => 431,  1235 => 430,  1228 => 425,  1224 => 423,  1219 => 420,  1217 => 419,  1214 => 418,  1207 => 414,  1204 => 413,  1202 => 412,  1192 => 404,  1189 => 403,  1177 => 395,  1165 => 385,  1162 => 384,  1160 => 383,  1157 => 382,  1138 => 380,  1136 => 379,  1133 => 378,  1125 => 376,  1123 => 375,  1116 => 373,  1113 => 372,  1103 => 370,  1101 => 369,  1090 => 367,  1087 => 366,  1079 => 364,  1077 => 363,  1074 => 362,  1066 => 360,  1064 => 359,  1057 => 354,  1051 => 352,  1049 => 351,  1043 => 350,  1037 => 349,  1031 => 345,  1025 => 343,  1023 => 342,  1012 => 340,  1008 => 339,  1002 => 338,  997 => 335,  991 => 331,  980 => 329,  976 => 328,  972 => 327,  966 => 324,  963 => 323,  961 => 322,  958 => 321,  953 => 318,  946 => 317,  932 => 310,  923 => 306,  915 => 304,  913 => 303,  910 => 302,  896 => 295,  887 => 291,  879 => 289,  877 => 288,  874 => 287,  860 => 280,  851 => 276,  843 => 274,  841 => 273,  838 => 272,  829 => 268,  821 => 267,  815 => 264,  807 => 262,  805 => 261,  802 => 260,  789 => 256,  781 => 253,  773 => 251,  771 => 250,  768 => 249,  755 => 245,  747 => 242,  739 => 240,  737 => 239,  733 => 237,  727 => 233,  718 => 229,  711 => 227,  709 => 226,  705 => 225,  702 => 224,  680 => 222,  678 => 221,  672 => 220,  664 => 218,  660 => 217,  656 => 216,  650 => 213,  642 => 211,  640 => 210,  637 => 209,  631 => 205,  622 => 201,  615 => 199,  613 => 198,  609 => 197,  606 => 196,  584 => 194,  582 => 193,  576 => 192,  568 => 190,  564 => 189,  560 => 188,  554 => 185,  546 => 183,  544 => 182,  541 => 181,  535 => 177,  528 => 175,  521 => 173,  519 => 172,  512 => 171,  508 => 170,  504 => 169,  498 => 168,  490 => 165,  482 => 163,  480 => 162,  477 => 161,  473 => 160,  470 => 159,  468 => 158,  462 => 154,  456 => 152,  454 => 151,  449 => 148,  445 => 147,  441 => 145,  429 => 143,  425 => 142,  422 => 141,  420 => 140,  416 => 138,  407 => 135,  401 => 133,  399 => 132,  396 => 131,  394 => 130,  391 => 129,  386 => 127,  379 => 123,  376 => 122,  374 => 121,  368 => 118,  361 => 113,  354 => 108,  350 => 106,  336 => 104,  333 => 103,  312 => 100,  309 => 99,  305 => 98,  302 => 97,  300 => 96,  297 => 95,  275 => 92,  272 => 91,  266 => 89,  264 => 88,  261 => 87,  255 => 85,  253 => 84,  250 => 83,  244 => 81,  242 => 80,  238 => 78,  236 => 77,  228 => 75,  226 => 74,  217 => 68,  212 => 67,  209 => 66,  206 => 65,  203 => 64,  200 => 63,  197 => 62,  194 => 61,  192 => 60,  188 => 59,  183 => 57,  179 => 55,  168 => 53,  164 => 52,  160 => 50,  154 => 46,  148 => 44,  143 => 42,  139 => 41,  135 => 40,  129 => 37,  125 => 35,  119 => 33,  114 => 31,  110 => 30,  105 => 27,  100 => 25,  96 => 24,  92 => 22,  86 => 20,  81 => 18,  77 => 17,  73 => 16,  67 => 13,  63 => 11,  57 => 9,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/product.twig", "");
    }
}
