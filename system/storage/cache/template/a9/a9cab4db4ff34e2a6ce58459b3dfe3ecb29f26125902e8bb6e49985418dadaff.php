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

/* basel/template/product/quickview.twig */
class __TwigTemplate_62dcb7fa699a5578d0657c9a8c199b99049e907ba0bd0ab0d664e1afb2d00505 extends \Twig\Template
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
        echo "<div class=\"table product-info quickview-info hidden-xs\" style=\"height:";
        echo ($context["img_h"] ?? null);
        echo "px; width:980px;\">
     
     <div class=\"table-cell left\" style=\"padding-bottom:0;\">
     
     ";
        // line 5
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 6
            echo "     <div class=\"image-area\" id=\"gallery\" style=\"position:relative;\">
            
        ";
            // line 8
            if (($context["thumb"] ?? null)) {
                // line 9
                echo "        <div class=\"main-image qv_image carousel\" style=\"width:";
                echo ($context["img_w"] ?? null);
                echo "px;\">
        <img src=\"";
                // line 10
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
        
        ";
                // line 12
                if (($context["images"] ?? null)) {
                    // line 13
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 14
                        echo "        <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 14);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" />
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "        
        </div>
        ";
            }
            // line 20
            echo "            
     </div> <!-- .table-cell.left ends -->
     ";
        }
        // line 23
        echo "      
     </div> <!-- .image-area ends -->

    <div class=\"table-cell w100 right\">
\t<div class=\"inner\">
    
    <div class=\"product-h1\">
    <h1>";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
    
    ";
        // line 33
        if ((($context["review_status"] ?? null) && (($context["review_qty"] ?? null) > 0))) {
            // line 34
            echo "    <div class=\"rating\">
    <span class=\"rating_stars rating r";
            // line 35
            echo ($context["rating"] ?? null);
            echo "\">
    <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
    </span>
    </div>
    <span class=\"review_link\">(<a class=\"hover_uline to_reviews\" href=\"";
            // line 39
            echo ($context["product_href"] ?? null);
            echo "\">";
            echo ($context["reviews"] ?? null);
            echo "</a>)</span>
\t";
        }
        // line 41
        echo "
    ";
        // line 42
        if (($context["price"] ?? null)) {
            // line 43
            echo "      <ul class=\"list-unstyled price\">
        ";
            // line 44
            if ( !($context["special"] ?? null)) {
                // line 45
                echo "        <li><span class=\"live-price\">";
                echo ($context["price"] ?? null);
                echo "<span></li>
        ";
            } else {
                // line 47
                echo "        <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span><span class=\"live-price-new\">";
                echo ($context["special"] ?? null);
                echo "<span></li>
        ";
            }
            // line 49
            echo "      </ul>
        
        ";
            // line 51
            if (($context["discounts"] ?? null)) {
                // line 52
                echo "        <p class=\"discount\">
        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 54
                    echo "        <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 54);
                    echo ($context["text_discount"] ?? null);
                    echo "<i class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 54);
                    echo "</i></span>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </p>
        ";
            }
            // line 58
            echo "      
      ";
        }
        // line 59
        echo " <!-- if price ends -->
      
      
      ";
        // line 62
        if ((($context["meta_description_status"] ?? null) && ($context["meta_description"] ?? null))) {
            // line 63
            echo "      <p class=\"meta_description\">";
            echo ($context["meta_description"] ?? null);
            echo "</p>
      ";
        }
        // line 65
        echo "      
      <div id=\"product\">
            
\t
\t\t
\t\t";
        // line 70
        if (($context["options"] ?? null)) {
            // line 71
            echo "            <div class=\"options\">
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 73
                echo "            
            ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 74) == "select")) {
                    // line 75
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 75)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 77);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 77);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <select name=\"option[";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 80);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 80);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 81
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 83
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 83);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 83);
                        echo "
                ";
                        // line 84
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 84)) {
                            // line 85
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 85);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 85);
                            echo ")
                ";
                        }
                        // line 87
                        echo "                </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "              </select>
              </div>
            </div>
            ";
                }
                // line 93
                echo "            
            ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 94) == "radio")) {
                    // line 95
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 95)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell radio-cell name\">
              <label class=\"control-label\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 97);
                    echo "</label>
              </div>
              <div class=\"table-cell radio-cell\">
              <div id=\"input-option";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    echo "\">
                ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 102
                        echo "                <div class=\"radio";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 102)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 104);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 104);
                        echo "\" />
                    ";
                        // line 105
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 105)) {
                            // line 106
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 106);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 106);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 106);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 106);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 106);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106);
                                echo ")";
                            }
                            echo "\" />
                    ";
                        }
                        // line 108
                        echo "                    <span class=\"name\">
                    ";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 109);
                        echo "
                    ";
                        // line 110
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110)) {
                            // line 111
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                            echo ")
                    ";
                        }
                        // line 113
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 121
                echo "            
            ";
                // line 122
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "checkbox")) {
                    // line 123
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 123)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell checkbox-cell name\">
              <label class=\"control-label\">";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 125);
                    echo "</label>
              </div>
              <div class=\"table-cell checkbox-cell\">
              <div id=\"input-option";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                    echo "\">
                ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 129));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 130
                        echo "                <div class=\"checkbox";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 130)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 132);
                        echo "\" />
                    ";
                        // line 133
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 133)) {
                            // line 134
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 134);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 134);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 134);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 134);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 134);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134);
                                echo ")";
                            }
                            echo "\" /> 
                    ";
                        }
                        // line 136
                        echo "                    <span class=\"name\">
                    ";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 137);
                        echo "
                    ";
                        // line 138
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 138)) {
                            // line 139
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 139);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 139);
                            echo ")
                    ";
                        }
                        // line 141
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 149
                echo "            
            
            ";
                // line 151
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "text")) {
                    // line 152
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <input type=\"text\" name=\"option[";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 157);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "\" class=\"form-control\" />
              </div>
            </div>
            ";
                }
                // line 161
                echo "            
            ";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "textarea")) {
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
              <textarea name=\"option[";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 168);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 168);
                    echo "</textarea>
              </div>
            </div>
            ";
                }
                // line 172
                echo "            
            ";
                // line 173
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 173) == "file")) {
                    // line 174
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 174)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\">";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <button type=\"button\" id=\"button-upload";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\" />
              </div>
            </div>
            ";
                }
                // line 184
                echo "            
            ";
                // line 185
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "date")) {
                    // line 186
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 192);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 199
                echo "            
            ";
                // line 200
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "datetime")) {
                    // line 201
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 207);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 214
                echo "            
            ";
                // line 215
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "time")) {
                    // line 216
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 222);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 229
                echo "            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo " <!-- foreach option -->
            </div>
            ";
        }
        // line 233
        echo "            
            ";
        // line 234
        if (($context["recurrings"] ?? null)) {
            // line 235
            echo "            <hr>
            <h3>";
            // line 236
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 239
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 241
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 241);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 241);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 247
        echo "\t\t\t
                        
       <div class=\"form-group buy catalog_hide\">

          <input step=\"1\" min=\"";
        // line 251
        echo ($context["minimum"] ?? null);
        echo "\" type=\"number\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" class=\"input-quantity\" id=\"input-quantity\" class=\"form-control\" />
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 252
        echo ($context["product_id"] ?? null);
        echo "\" />

\t\t  <button type=\"button\" id=\"button-cart-quickview\" data-loading-text=\"";
        // line 254
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        if (((($context["qty"] ?? null) < 1) && ($context["stock_badge_status"] ?? null))) {
            echo ($context["basel_text_out_of_stock"] ?? null);
        } else {
            echo ($context["button_cart"] ?? null);
        }
        echo "</button>

          <a href=\"";
        // line 256
        echo ($context["product_href"] ?? null);
        echo "\" class=\"btn btn-outline details\">";
        echo ($context["basel_text_view_details"] ?? null);
        echo "</a>
          
            </div>
            ";
        // line 259
        if ((($context["minimum"] ?? null) > 1)) {
            // line 260
            echo "            <div class=\"alert alert-sm alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 262
        echo "          
          </div><!-- #product ends -->

    
    <div class=\"info-holder\">
    
      ";
        // line 268
        if ((($context["price"] ?? null) && ($context["tax"] ?? null))) {
            // line 269
            echo "\t  <p class=\"info p-tax\"><b>";
            echo ($context["text_tax"] ?? null);
            echo "</b> <span class=\"live-price-tax\">";
            echo ($context["tax"] ?? null);
            echo "</span></p>
      ";
        }
        // line 271
        echo "      
      ";
        // line 272
        if ((($context["price"] ?? null) && ($context["points"] ?? null))) {
            // line 273
            echo "      <p class=\"info\"><b>";
            echo ($context["text_points"] ?? null);
            echo "</b> ";
            echo ($context["points"] ?? null);
            echo "</p>
      ";
        }
        // line 275
        echo "      
      <p class=\"info ";
        // line 276
        if ((($context["qty"] ?? null) > 0)) {
            echo "in_stock\"";
        }
        echo "\"><b>";
        echo ($context["text_stock"] ?? null);
        echo "</b> ";
        echo ($context["stock"] ?? null);
        echo "</p>
      
      ";
        // line 278
        if (($context["manufacturer"] ?? null)) {
            // line 279
            echo "      <p class=\"info\"><b>";
            echo ($context["text_manufacturer"] ?? null);
            echo "</b> <a class=\"hover_uline\" href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></p>
      ";
        }
        // line 281
        echo "      
      <p class=\"info\"><b>";
        // line 282
        echo ($context["text_model"] ?? null);
        echo "</b> ";
        echo ($context["model"] ?? null);
        echo "</p>
      
      ";
        // line 284
        if (($context["reward"] ?? null)) {
            // line 285
            echo "      <p class=\"info\"><b>";
            echo ($context["text_reward"] ?? null);
            echo "</b> ";
            echo ($context["reward"] ?? null);
            echo "</p>
      ";
        }
        // line 287
        echo "      
      
      ";
        // line 289
        if (($context["basel_share_btn"] ?? null)) {
            // line 290
            echo "      <p class=\"info share\"><b>Share:</b> 
        <a class=\"single_share fb_share external\" rel=\"nofollow\"><i class=\"fa fa-facebook\"></i></a>
        <a class=\"single_share twitter_share external\" rel=\"nofollow\"><i class=\"fa fa-twitter\"></i></a>
        <a class=\"single_share google_share external\" rel=\"nofollow\"><i class=\"icon-google-plus\"></i></a>
        <a class=\"single_share pinterest_share external\" rel=\"nofollow\"><i class=\"fa fa-pinterest\"></i></a>
        <a class=\"single_share vk_share external\" rel=\"nofollow\"><i class=\"fa fa-vk\"></i></a>
      </p>
      ";
        }
        // line 298
        echo "     
     </div> <!-- .info-holder ends -->
     
\t </div> <!-- .inner ends -->
     </div> <!-- .table-cell.right ends -->

<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"></script>

<script>
\$('.qv_image').slick({
";
        // line 311
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 312
            echo "rtl: true,
";
        }
        // line 314
        echo "prevArrow: \"<a class=\\\"arrow-left within icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right within icon-arrow-right\\\"></a>\",
arrows:true
});
// Sharing buttons
var share_url = encodeURIComponent('";
        // line 319
        echo ($context["product_href"] ?? null);
        echo "');
var page_title = '";
        // line 320
        echo ($context["heading_title"] ?? null);
        echo "';
";
        // line 321
        if (($context["thumb"] ?? null)) {
            // line 322
            echo "var thumb = '";
            echo ($context["thumb"] ?? null);
            echo "';
";
        }
        // line 324
        echo "\$('.fb_share').attr(\"href\", 'https://www.facebook.com/sharer/sharer.php?u=' + share_url + '');
\$('.twitter_share').attr(\"href\", 'https://twitter.com/intent/tweet?source=' + share_url + '&text=' + page_title + ': ' + share_url + '');
\$('.google_share').attr(\"href\", 'https://plus.google.com/share?url=' + share_url + '');
\$('.pinterest_share').attr(\"href\", 'http://pinterest.com/pin/create/button/?url=' + share_url + '&media=' + thumb + '&description=' + page_title + '');
\$('.vk_share').attr(\"href\", 'http://vkontakte.ru/share.php?url=' + share_url + '');


// Open external links in new tab //
\$('a.external').on('click',function(e){
e.preventDefault();
window.open(\$(this).attr('href'));
});
</script>

";
        // line 338
        if (($context["basel_price_update"] ?? null)) {
            // line 339
            echo "<script src=\"index.php?route=extension/basel/live_options/js&product_id=";
            echo ($context["product_id"] ?? null);
            echo "\"></script>
";
        }
        // line 341
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
\$('#button-cart-quickview').on('click', function() {
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
//--></script>
<script><!--
\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;
\t
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

</div> <!-- .product-info ends -->";
    }

    public function getTemplateName()
    {
        return "basel/template/product/quickview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  945 => 341,  939 => 339,  937 => 338,  921 => 324,  915 => 322,  913 => 321,  909 => 320,  905 => 319,  898 => 314,  894 => 312,  892 => 311,  877 => 298,  867 => 290,  865 => 289,  861 => 287,  853 => 285,  851 => 284,  844 => 282,  841 => 281,  831 => 279,  829 => 278,  818 => 276,  815 => 275,  807 => 273,  805 => 272,  802 => 271,  794 => 269,  792 => 268,  784 => 262,  778 => 260,  776 => 259,  768 => 256,  757 => 254,  752 => 252,  746 => 251,  740 => 247,  734 => 243,  723 => 241,  719 => 240,  715 => 239,  709 => 236,  706 => 235,  704 => 234,  701 => 233,  696 => 230,  689 => 229,  675 => 222,  666 => 218,  658 => 216,  656 => 215,  653 => 214,  639 => 207,  630 => 203,  622 => 201,  620 => 200,  617 => 199,  603 => 192,  594 => 188,  586 => 186,  584 => 185,  581 => 184,  572 => 180,  564 => 179,  558 => 176,  550 => 174,  548 => 173,  545 => 172,  532 => 168,  524 => 165,  516 => 163,  514 => 162,  511 => 161,  498 => 157,  490 => 154,  482 => 152,  480 => 151,  476 => 149,  470 => 145,  461 => 141,  454 => 139,  452 => 138,  448 => 137,  445 => 136,  423 => 134,  421 => 133,  415 => 132,  407 => 130,  403 => 129,  399 => 128,  393 => 125,  385 => 123,  383 => 122,  380 => 121,  374 => 117,  365 => 113,  358 => 111,  356 => 110,  352 => 109,  349 => 108,  327 => 106,  325 => 105,  319 => 104,  311 => 102,  307 => 101,  303 => 100,  297 => 97,  289 => 95,  287 => 94,  284 => 93,  278 => 89,  271 => 87,  264 => 85,  262 => 84,  255 => 83,  251 => 82,  247 => 81,  241 => 80,  233 => 77,  225 => 75,  223 => 74,  220 => 73,  216 => 72,  213 => 71,  211 => 70,  204 => 65,  198 => 63,  196 => 62,  191 => 59,  187 => 58,  183 => 56,  171 => 54,  167 => 53,  164 => 52,  162 => 51,  158 => 49,  150 => 47,  144 => 45,  142 => 44,  139 => 43,  137 => 42,  134 => 41,  127 => 39,  120 => 35,  117 => 34,  115 => 33,  109 => 30,  100 => 23,  95 => 20,  90 => 17,  87 => 16,  74 => 14,  69 => 13,  67 => 12,  58 => 10,  53 => 9,  51 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/quickview.twig", "");
    }
}
