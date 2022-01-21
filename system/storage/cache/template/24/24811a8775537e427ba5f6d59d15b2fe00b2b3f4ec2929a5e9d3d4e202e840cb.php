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

/* basel/template/information/contact.twig */
class __TwigTemplate_815b7ce9f6aee3d091d3bd4031c7eed77c646030e6359575677ff59aa2a6e34a extends \Twig\Template
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
        if (((($context["basel_map_lat"] ?? null) && ($context["basel_map_lon"] ?? null)) && (($context["basel_map_style"] ?? null) == "full_width"))) {
            // line 4
            echo "<div id=\"gmap\" class=\"map-full-width\">
    <div class=\"address-holder col-sm-5 col-md-4 col-lg-3\">
    <h3 class=\"contrast-heading\">";
            // line 6
            echo ($context["store"] ?? null);
            echo "</h3>
    <p>";
            // line 7
            echo ($context["address"] ?? null);
            echo "</p>
    <a class=\"uline_link to_form\">";
            // line 8
            echo ($context["heading_title"] ?? null);
            echo "</a>
    </div>
</div>
";
        }
        // line 12
        echo "    
    <div class=\"container\">
    
        <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
  
  <div class=\"row\">
  
    ";
        // line 23
        if (((($context["basel_map_lat"] ?? null) && ($context["basel_map_lon"] ?? null)) && (($context["basel_map_style"] ?? null) == "inline"))) {
            // line 24
            echo "    <div id=\"gmap\" class=\"col-sm-12 map-inline\"></div>
    ";
        }
        // line 26
        echo "  
  ";
        // line 27
        echo ($context["column_left"] ?? null);
        echo "
    
    ";
        // line 29
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 31
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 32
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 35
            echo "    ";
        }
        // line 36
        echo "    
    <div id=\"content\" class=\"";
        // line 37
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 38
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 39
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      <div class=\"row\">
        
      <div class=\"col-sm-6 left-side\">
      \t<h3 class=\"lined-title lg margin-b35\"><span><b>";
        // line 44
        echo ($context["text_contact"] ?? null);
        echo "</b></span></h3>
        <form action=\"";
        // line 45
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-vertical\">

        <div class=\"row\">
        
        <div class=\"form-group col-sm-6 required\">
        <label for=\"input-name\">";
        // line 50
        echo ($context["entry_name"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"name\" value=\"";
        // line 51
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
        ";
        // line 52
        if (($context["error_name"] ?? null)) {
            // line 53
            echo "        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
        ";
        }
        // line 55
        echo "        </div>
        
        <div class=\"form-group col-sm-6 required\">
        <label for=\"input-email\">";
        // line 58
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 59
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
        ";
        // line 60
        if (($context["error_email"] ?? null)) {
            // line 61
            echo "        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
        ";
        }
        // line 63
        echo "        </div>
        
        </div>

        
        <div class=\"form-group required\">
        <label for=\"input-enquiry\">";
        // line 69
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
        <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 70
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
        ";
        // line 71
        if (($context["error_enquiry"] ?? null)) {
            // line 72
            echo "        <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
        ";
        }
        // line 74
        echo "        </div>
\t\t
        ";
        // line 76
        echo ($context["captcha"] ?? null);
        echo "
        
        <div class=\"form-group margin-b50\">
        <input class=\"btn btn-contrast\" type=\"submit\" value=\"";
        // line 79
        echo ($context["button_submit"] ?? null);
        echo "\" />
        </div>
        


        </form>
      </div>
      
      <div class=\"col-sm-6 right-side\">
       <h3 class=\"lined-title lg margin-b30\"><span><b>";
        // line 88
        echo ($context["heading_title"] ?? null);
        echo "</b></span></h3>
       
       ";
        // line 90
        if (($context["image"] ?? null)) {
            // line 91
            echo "       <div class=\"contact-image margin-b25\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" /></div>
       ";
        }
        // line 93
        echo "       
           <div class=\"grid-holder margin-b20\">
           
           ";
        // line 96
        if (($context["open"] ?? null)) {
            // line 97
            echo "           <div class=\"item\">
           <p class=\"contact-detail\">
           <i class=\"icon-clock icon\"></i>
           ";
            // line 100
            echo ($context["open"] ?? null);
            echo "
           </p>
           </div>
           ";
        }
        // line 104
        echo "
           <div class=\"item\">
           <p class=\"contact-detail\">
           <i class=\"icon-cursor icon\"></i>
           ";
        // line 108
        echo ($context["address"] ?? null);
        echo "
            ";
        // line 109
        if (($context["geocode"] ?? null)) {
            // line 110
            echo "            <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
            ";
        }
        // line 112
        echo "           </p>
           </div>
           
           <div class=\"item\">
           <p class=\"contact-detail\">
           <i class=\"icon-phone icon\"></i>
           ";
        // line 118
        echo ($context["telephone"] ?? null);
        echo "
           ";
        // line 119
        if (($context["fax"] ?? null)) {
            // line 120
            echo "           <br />";
            echo ($context["text_fax"] ?? null);
            echo ": ";
            echo ($context["fax"] ?? null);
            echo "
           ";
        }
        // line 122
        echo "           </p>
           </div>
           
           </div>
           
        ";
        // line 127
        if (($context["comment"] ?? null)) {
            // line 128
            echo "        <div class=\"margin-b45\">
        <h3 class=\"lined-title lg margin-b20\"><span><b>";
            // line 129
            echo ($context["text_comment"] ?? null);
            echo "</b></span></h3>
        ";
            // line 130
            echo ($context["comment"] ?? null);
            echo "
        </div>
        ";
        }
        // line 132
        echo "        
        
        ";
        // line 134
        if (($context["locations"] ?? null)) {
            // line 135
            echo "      <h3 class=\"lined-title lg margin-b15\"><span><b>";
            echo ($context["text_store"] ?? null);
            echo "</b></span></h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["location"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locations"]) {
                // line 138
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 140
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "location_id", [], "any", false, false, false, 140);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 140);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 142
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "location_id", [], "any", false, false, false, 142);
                echo "\">
            <div class=\"panel-body\">
              
              
             
                
                ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "image", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                <div class=\"contact-image margin-b25\">
                <img src=\"";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "image", [], "any", false, false, false, 150);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 150);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 150);
                    echo "\" />
                </div>
                ";
                }
                // line 153
                echo "                
                ";
                // line 154
                if (twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "comment", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "                <b>";
                    echo ($context["text_comment"] ?? null);
                    echo "</b><br />
                ";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "comment", [], "any", false, false, false, 156);
                    echo "<br /><br /><br />
                ";
                }
                // line 158
                echo "                
                <div class=\"grid-holder margin-b20\">

                <div class=\"item\">
                <p class=\"contact-detail\">
                <i class=\"icon-cursor icon\"></i>
                ";
                // line 164
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 164);
                echo "<br />
                ";
                // line 165
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "address", [], "any", false, false, false, 165);
                echo "
                ";
                // line 166
                if (twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "geocode", [], "any", false, false, false, 166)) {
                    // line 167
                    echo "                <br /><a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "geocode", [], "any", false, false, false, 167));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                ";
                }
                // line 169
                echo "                </p>
                </div>
                
                <div class=\"item\">
                <p class=\"contact-detail\">
                <i class=\"icon-phone icon\"></i>
                ";
                // line 175
                echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "telephone", [], "any", false, false, false, 175);
                echo "
                ";
                // line 176
                if (twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "fax", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "                <br />";
                    echo ($context["text_fax"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "fax", [], "any", false, false, false, 177);
                    echo "
                ";
                }
                // line 179
                echo "                </p>
                </div>
                
                ";
                // line 182
                if (twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "open", [], "any", false, false, false, 182)) {
                    // line 183
                    echo "                <div class=\"item\">
                <p class=\"contact-detail\">
                <i class=\"icon-clock icon\"></i>
                  ";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "open", [], "any", false, false, false, 186);
                    echo "
                </p>
                </div>
                ";
                }
                // line 190
                echo "                
                
              </div>

            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "      </div>
      ";
        }
        // line 200
        echo "      
      
       
       
      </div> <!-- .col-sm-6 ends -->
      
      </div> <!-- .row ends -->
      
      
      
      
      
      ";
        // line 212
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 213
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 216
        if (($context["basel_map_style"] ?? null)) {
            // line 217
            echo "<script>
\t\$(document).ready(function() {
\t\tnew Maplace({
\t\t\tlocations: [
\t\t\t\t{
\t\t\t\t\tlat: ";
            // line 222
            echo ($context["basel_map_lat"] ?? null);
            echo ",
\t\t\t\t\tlon: ";
            // line 223
            echo ($context["basel_map_lon"] ?? null);
            echo ",
\t\t\t\t}
\t\t\t],
\t\t\tcontrols_on_map: true,
\t\t\tstart: 1,
\t\t\tmap_options: {
\t\t\t\tzoom: 15,
\t\t\t\tscrollwheel: false}
\t\t}).Load();
\t\t
\t\t";
            // line 233
            if (((($context["basel_map_lat"] ?? null) && ($context["basel_map_lon"] ?? null)) && (($context["basel_map_style"] ?? null) == "full_width"))) {
                // line 234
                echo "\t\t\$('body').addClass('full-width-map');
\t\t";
            }
            // line 236
            echo "\t\t 
\t});
</script>
";
        }
        // line 240
        echo "

<script>
\t\$(document).ready(function() {
\$(\".to_form\").click(function() {
    \$('html, body').animate({
        scrollTop: (\$(\".form-vertical\").offset().top - 200)
    }, 1000);
});
});
</script>

";
        // line 252
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 252,  554 => 240,  548 => 236,  544 => 234,  542 => 233,  529 => 223,  525 => 222,  518 => 217,  516 => 216,  510 => 213,  506 => 212,  492 => 200,  488 => 198,  475 => 190,  468 => 186,  463 => 183,  461 => 182,  456 => 179,  448 => 177,  446 => 176,  442 => 175,  434 => 169,  424 => 167,  422 => 166,  418 => 165,  414 => 164,  406 => 158,  401 => 156,  396 => 155,  394 => 154,  391 => 153,  381 => 150,  378 => 149,  376 => 148,  367 => 142,  360 => 140,  356 => 138,  352 => 137,  346 => 135,  344 => 134,  340 => 132,  334 => 130,  330 => 129,  327 => 128,  325 => 127,  318 => 122,  310 => 120,  308 => 119,  304 => 118,  296 => 112,  286 => 110,  284 => 109,  280 => 108,  274 => 104,  267 => 100,  262 => 97,  260 => 96,  255 => 93,  245 => 91,  243 => 90,  238 => 88,  226 => 79,  220 => 76,  216 => 74,  210 => 72,  208 => 71,  204 => 70,  200 => 69,  192 => 63,  186 => 61,  184 => 60,  180 => 59,  176 => 58,  171 => 55,  165 => 53,  163 => 52,  159 => 51,  155 => 50,  147 => 45,  143 => 44,  135 => 39,  131 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  104 => 29,  99 => 27,  96 => 26,  92 => 24,  90 => 23,  84 => 19,  73 => 17,  69 => 16,  63 => 12,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/information/contact.twig", "");
    }
}
