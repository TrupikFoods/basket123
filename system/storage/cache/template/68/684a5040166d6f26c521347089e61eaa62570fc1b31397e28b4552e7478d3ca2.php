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

/* basel/template/product/search.twig */
class __TwigTemplate_5e68d3e15911d0ce176b2c0cb300cf9d86d4813e348e3eed64e738858e24056c extends \Twig\Template
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
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  
  <div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    
    <div id=\"content\" class=\"";
        // line 20
        echo ($context["class"] ?? null);
        echo "\">
    
    ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      
      <h1 id=\"page-title\">";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      <legend>";
        // line 26
        echo ($context["entry_search"] ?? null);
        echo "</legend>
          
      <div class=\"row\">
        <div class=\"col-sm-6 margin-b10\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 30
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-6 margin-b10\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 34
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 36
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 36) == ($context["category_id"] ?? null))) {
                // line 37
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 37);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 37);
                echo "</option>
                ";
            } else {
                // line 39
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 39);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 39);
                echo "</option>
                ";
            }
            // line 41
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 42
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 42) == ($context["category_id"] ?? null))) {
                    // line 43
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 43);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 43);
                    echo "</option>
                    ";
                } else {
                    // line 45
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 45);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 45);
                    echo "</option>
                    ";
                }
                // line 47
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 48
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 48) == ($context["category_id"] ?? null))) {
                        // line 49
                        echo "                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 49);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        echo "</option>
                            ";
                    } else {
                        // line 51
                        echo "                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 51);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 51);
                        echo "</option>
                            ";
                    }
                    // line 53
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "          </select>
        </div>
        </div>
        <div class=\"form-group\">
          
        <label class=\"checkbox-inline\">
          ";
        // line 62
        if (($context["description"] ?? null)) {
            // line 63
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 65
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 67
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
       <label class=\"checkbox-inline\">
            ";
        // line 69
        if (($context["sub_category"] ?? null)) {
            // line 70
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 72
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 74
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
      </div>
      
      <input type=\"button\" value=\"";
        // line 77
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary margin-b30\" />
      
      ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "      <div id=\"product-view\" class=\"grid\">
      
      <div class=\"table filter\">
      
      \t<div class=\"table-cell nowrap hidden-sm hidden-md hidden-lg\"><a class=\"filter-trigger-btn\"></a></div>
          
          <div class=\"table-cell nowrap hidden-xs\">
          <a id=\"grid-view\" class=\"view-icon grid\" data-toggle=\"tooltip\" data-title=\"";
            // line 87
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></a>
          <a id=\"list-view\" class=\"view-icon list\" data-toggle=\"tooltip\" data-title=\"";
            // line 88
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></a>
          </div>
          
          <div class=\"table-cell w100\">
          <a href=\"";
            // line 92
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"hidden-xs\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
          </div>
          
          <div class=\"table-cell nowrap text-right\">
          <div class=\"sort-select\">
          <span class=\"hidden-xs\">";
            // line 97
            echo ($context["text_sort"] ?? null);
            echo "</span>
          <select id=\"input-sort\" class=\"form-control input-sm inline\" onchange=\"location = this.value;\">
            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 100
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 100) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 101
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 101);
                    echo "\" selected=\"selected\"> ";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 101);
                    echo "</option>
            ";
                } else {
                    // line 103
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 103);
                    echo "\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 103);
                    echo "</option>
            ";
                }
                // line 105
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "          </select>
          </div>
          </div>
          
          <div class=\"table-cell nowrap text-right hidden-xs hidden-sm\">
          <span>";
            // line 111
            echo ($context["text_limit"] ?? null);
            echo "</span>
          <select id=\"input-limit\" class=\"form-control input-sm inline\" onchange=\"location = this.value;\">
            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 114
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 114) == ($context["limit"] ?? null))) {
                    // line 115
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 115);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 115);
                    echo "</option>
            ";
                } else {
                    // line 117
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 117);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 117);
                    echo "</option>
            ";
                }
                // line 119
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "          </select>
          </div>
      
      </div>
      
      <div class=\"grid-holder product-holder grid";
            // line 125
            echo ($context["basel_prod_grid"] ?? null);
            echo "\">
        ";
            // line 126
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
                // line 127
                echo "        ";
                $this->loadTemplate("basel/template/product/single_product.twig", "basel/template/product/search.twig", 127)->display($context);
                // line 128
                echo "        ";
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
            // line 129
            echo "      </div>
      </div> <!-- #product-view ends -->
      
      <div class=\"row pagination-holder\">
        <div class=\"col-sm-6 xs-text-center\">";
            // line 133
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right xs-text-center\"><span class=\"pagination-text\">";
            // line 134
            echo ($context["results"] ?? null);
            echo "</span></div>
      </div>
      
      ";
        } else {
            // line 138
            echo "      \t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 140
        echo "      
      ";
        // line 141
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 142
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>-->
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 191
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 191,  443 => 142,  439 => 141,  436 => 140,  430 => 138,  423 => 134,  419 => 133,  413 => 129,  399 => 128,  396 => 127,  379 => 126,  375 => 125,  368 => 120,  362 => 119,  354 => 117,  346 => 115,  343 => 114,  339 => 113,  334 => 111,  327 => 106,  321 => 105,  313 => 103,  305 => 101,  302 => 100,  298 => 99,  293 => 97,  283 => 92,  276 => 88,  272 => 87,  263 => 80,  261 => 79,  256 => 77,  249 => 74,  245 => 72,  241 => 70,  239 => 69,  233 => 67,  229 => 65,  225 => 63,  223 => 62,  215 => 56,  209 => 55,  203 => 54,  197 => 53,  189 => 51,  181 => 49,  178 => 48,  173 => 47,  165 => 45,  157 => 43,  154 => 42,  149 => 41,  141 => 39,  133 => 37,  130 => 36,  126 => 35,  122 => 34,  113 => 30,  106 => 26,  101 => 24,  96 => 22,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  68 => 12,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/search.twig", "");
    }
}
