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

/* basel/template/extension/module/basel_content.twig */
class __TwigTemplate_3d63ea240ab8de21a23cc9c427820a32696754f55047f9da261d2e47a64fd747 extends \Twig\Template
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
        if (($context["block_full_width"] ?? null)) {
            // line 2
            echo "</div>
";
        }
        // line 4
        echo "<div class=\"widget cm_module\" style=\"";
        echo ($context["module_margins"] ?? null);
        echo "\">
";
        // line 5
        if (($context["block_title"] ?? null)) {
            // line 6
            echo "<!-- Block Title -->
<div class=\"widget-title\">
";
            // line 8
            if (($context["title_preline"] ?? null)) {
                echo "<p class=\"pre-line\">";
                echo ($context["title_preline"] ?? null);
                echo "</p>";
            }
            // line 9
            if (($context["title"] ?? null)) {
                // line 10
                echo "<p class=\"main-title\"><span>";
                echo ($context["title"] ?? null);
                echo "</span></p>
<p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
";
            }
            // line 13
            if (($context["title_subline"] ?? null)) {
                // line 14
                echo "<p class=\"sub-line\"><span>";
                echo ($context["title_subline"] ?? null);
                echo "</span></p>
";
            }
            // line 16
            echo "</div>
<img src=\"/image/catalog/basket/slider/9d49929147fe232e.jpg\" with=\"100%\">
<p>&nbsp;</p>
";
        }
        // line 20
        echo "
<div class=\"cm_block_wrapper\">
";
        // line 22
        if (($context["bg_video"] ?? null)) {
            echo "<div class=\"vid-holder\"></div>";
        }
        // line 23
        echo "<div class=\"cm_block ";
        echo ($context["module"] ?? null);
        echo "\" style=\"";
        echo ($context["block_style"] ?? null);
        echo ";\">
<div class=\"";
        // line 24
        if (( !($context["content_full_width"] ?? null) && ($context["block_full_width"] ?? null))) {
            echo "container";
        }
        echo "\">
";
        // line 25
        if (($context["columns"] ?? null)) {
            // line 26
            echo "<div class=\"cm_content\" style=\"";
            echo ($context["content_style"] ?? null);
            echo ";\">
<div class=\"row ";
            // line 27
            if (($context["content_no_margin"] ?? null)) {
                echo "marginless";
            }
            echo "\">
";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 29
                echo "<div class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "column_class", [], "any", false, false, false, 29);
                echo " type-";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 29);
                echo " cm_column ";
                if (($context["equal_height"] ?? null)) {
                    echo "eq_height";
                }
                echo "\">    
";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 30) == "img")) {
                    // line 31
                    echo "    ";
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "data2", [], "any", false, false, false, 31)) {
                        // line 32
                        echo "    <!-- Banner type -->
    <div class=\"banner_wrap\">
    <div class=\"zoom_image_wrap\"><img class=\"zoom_image\" src=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data2", [], "any", false, false, false, 34);
                        echo "\" alt=\"\" /></div>
    <div class=\"effect-holder\"></div>
    <div class=\"banner_overlay\">
        <div class=\"cm_item_wrapper ";
                        // line 37
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "data5", [], "any", false, false, false, 37)) {
                            echo "pointer\" onclick=\"location.href='";
                            echo twig_get_attribute($this->env, $this->source, $context["column"], "data5", [], "any", false, false, false, 37);
                            echo "';";
                        }
                        echo "\">
            <div class=\"cm_item ";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data7", [], "any", false, false, false, 38);
                        echo "\">
                ";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data1", [], "any", false, false, false, 39);
                        echo "
            </div>
        </div>
    </div>
    </div>
    ";
                    }
                    // line 45
                    echo "    ";
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "data4", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "    <div class=\"banner_wrap\">
    <div class=\"zoom_image_wrap\"><img class=\"zoom_image\" src=\"";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data4", [], "any", false, false, false, 47);
                        echo "\" alt=\"\" /></div>
    <div class=\"effect-holder\"></div>
    <div class=\"banner_overlay\">
        <div class=\"cm_item_wrapper ";
                        // line 50
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "data6", [], "any", false, false, false, 50)) {
                            echo "pointer\" onclick=\"location.href='";
                            echo twig_get_attribute($this->env, $this->source, $context["column"], "data6", [], "any", false, false, false, 50);
                            echo "';";
                        }
                        echo "\">
            <div class=\"cm_item ";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data8", [], "any", false, false, false, 51);
                        echo "\">
                ";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data3", [], "any", false, false, false, 52);
                        echo "
            </div>
        </div>
    </div>
    </div>
    ";
                    }
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 58
$context["column"], "type", [], "any", false, false, false, 58) == "tm")) {
                    // line 59
                    echo "    <!-- Testimonial type -->
    ";
                    // line 60
                    if (($context["testimonials"] ?? null)) {
                        // line 61
                        echo "    <div class=\"grid-holder ";
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data8", [], "any", false, false, false, 61);
                        echo " tm_module grid";
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "data7", [], "any", false, false, false, 61);
                        echo "\">
    ";
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                            // line 63
                            echo "    <div class=\"item single-testimonial\">
        <div class=\"testimonial-wrap\">
        ";
                            // line 65
                            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 65)) {
                                // line 66
                                echo "        <p><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 66);
                                echo "\" alt=\"\"/></p>
        ";
                            }
                            // line 68
                            echo "        <p>";
                            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "description", [], "any", false, false, false, 68);
                            echo "</p>
        <p><b>";
                            // line 69
                            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 69);
                            echo "</b>";
                            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "org", [], "any", false, false, false, 69)) {
                                echo " - ";
                                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "org", [], "any", false, false, false, 69);
                            }
                            echo "</p> 
        </div>    
    </div>
    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "    </div>
    ";
                    } else {
                        // line 75
                        echo "    No testimonials found
    ";
                    }
                } else {
                    // line 78
                    echo "    <!-- HTML/Newsletter type -->
    <div class=\"cm_item_wrapper\">
        <div class=\"cm_item ";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "data7", [], "any", false, false, false, 80);
                    echo "\">
            ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "data1", [], "any", false, false, false, 81);
                    echo "
        </div>
    </div>
";
                }
                // line 85
                echo "</div>    
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "</div>
</div>
";
        }
        // line 90
        echo "</div>
</div>
</div>
</div>
";
        // line 94
        if (($context["block_full_width"] ?? null)) {
            // line 95
            echo "<div class=\"container\">
";
        }
        // line 97
        if ((($context["para_status"] ?? null) && ($context["bg_img"] ?? null))) {
            // line 98
            echo "<script>
\$(window).load(function(){
\$('.cm_block.";
            // line 100
            echo ($context["module"] ?? null);
            echo "').parallax(\"50%\", 0.";
            echo ($context["para_status"] ?? null);
            echo ");
})
</script>
";
        }
        // line 104
        if (($context["bg_video"] ?? null)) {
            // line 105
            echo "<script>
\$('.vid-holder').tuber({
videoId: '";
            // line 107
            echo ($context["video_id"] ?? null);
            echo "',
isBackground: false
});
</script>
";
        }
        // line 112
        echo "
";
        // line 113
        if (($context["columns"] ?? null)) {
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 115
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 115) == "tm")) {
                    // line 116
                    echo "<script><!--
\$('.grid-holder.tm_module').slick({
adaptiveHeight:true,
dots:true,
";
                    // line 120
                    if ((($context["direction"] ?? null) == "rtl")) {
                        // line 121
                        echo "rtl: true,
";
                    }
                    // line 123
                    echo "arrows: false,
respondTo:'min',
";
                    // line 125
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "data7", [], "any", false, false, false, 125) == "3")) {
                        // line 126
                        echo "slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:960,settings:{slidesToShow:1,slidesToScroll:1}}],
";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 127
$context["column"], "data7", [], "any", false, false, false, 127) == "2")) {
                        // line 128
                        echo "slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:960,settings:{slidesToShow:1,slidesToScroll:1}}]
";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 129
$context["column"], "data7", [], "any", false, false, false, 129) == "1")) {
                        // line 130
                        echo "slidesToShow:1,slidesToScroll:1,responsive:[]
";
                    }
                    // line 132
                    echo "}).parents('.cm_block_wrapper').addClass('has-testimonials');
//--></script>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/basel_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 132,  367 => 130,  365 => 129,  362 => 128,  360 => 127,  357 => 126,  355 => 125,  351 => 123,  347 => 121,  345 => 120,  339 => 116,  337 => 115,  333 => 114,  331 => 113,  328 => 112,  320 => 107,  316 => 105,  314 => 104,  305 => 100,  301 => 98,  299 => 97,  295 => 95,  293 => 94,  287 => 90,  282 => 87,  275 => 85,  268 => 81,  264 => 80,  260 => 78,  255 => 75,  251 => 73,  236 => 69,  231 => 68,  225 => 66,  223 => 65,  219 => 63,  215 => 62,  208 => 61,  206 => 60,  203 => 59,  201 => 58,  192 => 52,  188 => 51,  180 => 50,  174 => 47,  171 => 46,  168 => 45,  159 => 39,  155 => 38,  147 => 37,  141 => 34,  137 => 32,  134 => 31,  132 => 30,  121 => 29,  117 => 28,  111 => 27,  106 => 26,  104 => 25,  98 => 24,  91 => 23,  87 => 22,  83 => 20,  77 => 16,  71 => 14,  69 => 13,  62 => 10,  60 => 9,  54 => 8,  50 => 6,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/basel_content.twig", "");
    }
}
