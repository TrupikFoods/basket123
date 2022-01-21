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

/* basel/template/product/category.twig */
class __TwigTemplate_1a24876657eebbbb8593c92f7c9590bfb8900b09a47246e35e8499a217f31fa1 extends \Twig\Template
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
  
  <div class=\"row\">
  
  ";
        // line 12
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
        echo "    
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "
      
      <h1 id=\"page-title\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      ";
        // line 27
        if (((($context["thumb"] ?? null) && ($context["category_thumb_status"] ?? null)) || ($context["description"] ?? null))) {
            // line 28
            echo "        ";
            if ((($context["thumb"] ?? null) && ($context["category_thumb_status"] ?? null))) {
                // line 29
                echo "        <img class=\"category-main-thumb\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
        ";
            }
            // line 31
            echo "        ";
            if ((($context["description"] ?? null) && (($context["description"] ?? null) != "<p><br></p>"))) {
                // line 32
                echo "        <div class=\"category-description\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 34
            echo "      ";
        }
        // line 35
        echo "      
      ";
        // line 36
        if ((($context["categories"] ?? null) && ($context["category_subs_status"] ?? null))) {
            // line 37
            echo "      <h3 class=\"lined-title\"><span>";
            echo ($context["text_refine"] ?? null);
            echo "</span></h3>
      \t<div class=\"grid-holder categories grid";
            // line 38
            echo ($context["basel_subs_grid"] ?? null);
            echo "\">
        \t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "            <div class=\"item\">
            <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 41);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "\" /></a>
            <a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                echo "</a></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </div>
     ";
        }
        // line 46
        echo "\t      
      ";
        // line 47
        if (($context["products"] ?? null)) {
            // line 48
            echo "      <div id=\"product-view\" class=\"grid\">
      
      <div class=\"table filter\">
      
      \t<div class=\"table-cell nowrap hidden-sm hidden-md hidden-lg\"><a class=\"filter-trigger-btn\"></a></div>
          
          <div class=\"table-cell nowrap hidden-xs\">
          <a id=\"grid-view\" class=\"view-icon grid\" data-toggle=\"tooltip\" data-title=\"";
            // line 55
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></a>
          <a id=\"list-view\" class=\"view-icon list\" data-toggle=\"tooltip\" data-title=\"";
            // line 56
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></a>
          </div>
          
          <div class=\"table-cell w100\">
          <a href=\"";
            // line 60
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"hidden-xs\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
          </div>
          
          <div class=\"table-cell nowrap text-right\">
          <div class=\"sort-select\">
          <span class=\"hidden-xs\">";
            // line 65
            echo ($context["text_sort"] ?? null);
            echo "</span>
          <select id=\"input-sort\" class=\"form-control input-sm inline\" onchange=\"location = this.value;\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 68
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 68) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 69
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 69);
                    echo "\" selected=\"selected\"> ";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 69);
                    echo "</option>
            ";
                } else {
                    // line 71
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 71);
                    echo "\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 71);
                    echo "</option>
            ";
                }
                // line 73
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "          </select>
          </div>
          </div>
          
          <div class=\"table-cell nowrap text-right hidden-xs hidden-sm\">
          <span>";
            // line 79
            echo ($context["text_limit"] ?? null);
            echo "</span>
          <select id=\"input-limit\" class=\"form-control input-sm inline\" onchange=\"location = this.value;\">
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 82
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 82) == ($context["limit"] ?? null))) {
                    // line 83
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 83);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 83);
                    echo "</option>
            ";
                } else {
                    // line 85
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 85);
                    echo "</option>
            ";
                }
                // line 87
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "          </select>
          </div>
      
      </div>
      
      <div class=\"grid-holder product-holder grid";
            // line 93
            echo ($context["basel_prod_grid"] ?? null);
            echo "\">
        ";
            // line 94
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
                // line 95
                echo "        ";
                $this->loadTemplate("basel/template/product/single_product.twig", "basel/template/product/category.twig", 95)->display($context);
                // line 96
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
            // line 97
            echo "      </div>
      </div> <!-- #product-view ends -->
      
      <div class=\"row pagination-holder\">
        <div class=\"col-sm-6 xs-text-center pagination-navigation\">";
            // line 101
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right xs-text-center\"><span class=\"pagination-text\">";
            // line 102
            echo ($context["results"] ?? null);
            echo "</span></div>
      </div>
      
      ";
        }
        // line 106
        echo "      
      ";
        // line 107
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 108
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 110
        echo "      
      ";
        // line 111
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 112
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 114
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "basel/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 114,  369 => 112,  365 => 111,  362 => 110,  356 => 108,  354 => 107,  351 => 106,  344 => 102,  340 => 101,  334 => 97,  320 => 96,  317 => 95,  300 => 94,  296 => 93,  289 => 88,  283 => 87,  275 => 85,  267 => 83,  264 => 82,  260 => 81,  255 => 79,  248 => 74,  242 => 73,  234 => 71,  226 => 69,  223 => 68,  219 => 67,  214 => 65,  204 => 60,  197 => 56,  193 => 55,  184 => 48,  182 => 47,  179 => 46,  175 => 44,  165 => 42,  155 => 41,  152 => 40,  148 => 39,  144 => 38,  139 => 37,  137 => 36,  134 => 35,  131 => 34,  125 => 32,  122 => 31,  112 => 29,  109 => 28,  107 => 27,  102 => 25,  97 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/category.twig", "");
    }
}
