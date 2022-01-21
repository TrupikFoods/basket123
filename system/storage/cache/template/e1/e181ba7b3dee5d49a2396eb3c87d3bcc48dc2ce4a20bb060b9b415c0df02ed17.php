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

/* basel/template/extension/module/basel_layerslider.twig */
class __TwigTemplate_1508a60cc63ba97cc41d703214de6a37f1fde40a8134da86e28048467de8ca91 extends \Twig\Template
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
        if (($context["fullwidth"] ?? null)) {
            // line 2
            echo "</div>
";
        }
        // line 4
        echo "<div class=\"widget\" style=\"margin-bottom:";
        echo ($context["margin_bottom"] ?? null);
        echo ";\">
<div id=\"masterslider";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"master-slider widget ";
        echo ($context["nav_buttons"] ?? null);
        echo "\" style=\"min-height:";
        echo ($context["height"] ?? null);
        echo "px\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["section"], "sort_order", [], "any", false, false, false, 7) > 0)) {
                // line 8
                echo "<div class=\"ms-slide ";
                if (twig_get_attribute($this->env, $this->source, $context["section"], "slide_kenburn", [], "any", true, true, false, 8)) {
                    echo " kenburn ";
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "slide_kenburn", [], "any", false, false, false, 8);
                }
                echo "\" data-delay=\"";
                echo twig_get_attribute($this->env, $this->source, $context["section"], "duration", [], "any", false, false, false, 8);
                echo "\" ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 8))) {
                    echo " style=\"background-color:";
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 8);
                    echo "\"";
                }
                echo ">
";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["section"], "is_bg", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 10);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 10);
                    echo "\" class=\"slide-bg\" alt=\"\">
";
                }
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["key"] => $context["group"]) {
                    // line 13
                    if ((twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, false, 13) == "text")) {
                        // line 14
                        echo "<!-- Text layer -->
    <div class=\"ms-layer ms-caption\" style=\"font-family:";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "font", [], "any", false, false, false, 15);
                        echo ";font-weight:";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "fontweight", [], "any", false, false, false, 15);
                        echo ";font-size:";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "fontsize", [], "any", false, false, false, 15);
                        echo ";color:";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "color", [], "any", false, false, false, 15);
                        echo ";";
                        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "bg", [], "any", false, false, false, 15))) {
                            echo "background-color:";
                            echo twig_get_attribute($this->env, $this->source, $context["group"], "bg", [], "any", false, false, false, 15);
                        }
                        echo ";padding:";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "padding", [], "any", false, false, false, 15);
                        echo ";border-radius:";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "radius", [], "any", false, false, false, 15);
                        echo ";white-space:nowrap; ";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "customcss", [], "any", false, false, false, 15);
                        echo ";\"
    data-origin = \"ml\" data-type = \"text\" data-offset-x = \"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "left", [], "any", false, false, false, 16);
                        echo "\" data-offset-y = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "top", [], "any", false, false, false, 16);
                        echo "\" data-parallax = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "p_index", [], "any", false, false, false, 16);
                        echo "\" data-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationin", [], "any", false, false, false, 16);
                        echo "\" data-delay = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "start", [], "any", false, false, false, 16);
                        echo "\" data-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionin", [], "any", false, false, false, 16);
                        echo "\" data-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingin", [], "any", false, false, false, 16);
                        echo "\" data-hide-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionout", [], "any", false, false, false, 16);
                        echo "\" data-hide-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationout", [], "any", false, false, false, 16);
                        echo "\" data-hide-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingout", [], "any", false, false, false, 16);
                        echo "\" data-hide-time = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "end", [], "any", false, false, false, 16);
                        echo "\" > ";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 16);
                        echo "
    </div>
";
                    }
                    // line 19
                    if ((twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, false, 19) == "image")) {
                        // line 20
                        echo "<!-- Image layer -->
    <img src=\"";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "image", [], "any", false, false, false, 21);
                        echo "\" alt=\"\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "image", [], "any", false, false, false, 21);
                        echo "\" class=\"ms-layer image\" 
    ";
                        // line 22
                        if (twig_get_attribute($this->env, $this->source, $context["group"], "minheight", [], "any", true, true, false, 22)) {
                            echo " style=\"min-height:";
                            echo twig_get_attribute($this->env, $this->source, $context["group"], "minheight", [], "any", false, false, false, 22);
                            echo "px\" ";
                        }
                        // line 23
                        echo "    data-origin = \"ml\" data-type = \"image\" data-offset-x = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "left", [], "any", false, false, false, 23);
                        echo "\" data-offset-y = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "top", [], "any", false, false, false, 23);
                        echo "\" data-parallax = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "p_index", [], "any", false, false, false, 23);
                        echo "\" data-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationin", [], "any", false, false, false, 23);
                        echo "\" data-delay = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "start", [], "any", false, false, false, 23);
                        echo "\" data-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionin", [], "any", false, false, false, 23);
                        echo "\" data-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingin", [], "any", false, false, false, 23);
                        echo "\" data-hide-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionout", [], "any", false, false, false, 23);
                        echo "\" data-hide-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationout", [], "any", false, false, false, 23);
                        echo "\" data-hide-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingout", [], "any", false, false, false, 23);
                        echo "\" data-hide-time = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "end", [], "any", false, false, false, 23);
                        echo "\" />
";
                    }
                    // line 25
                    if ((twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, false, 25) == "button")) {
                        // line 26
                        echo "<!-- Button layer -->
    <a class=\"ms-layer ms-btn ";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "button_class", [], "any", false, false, false, 27);
                        if (twig_get_attribute($this->env, $this->source, $context["group"], "button_target", [], "any", false, false, false, 27)) {
                            echo " external";
                        }
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "button_href", [], "any", false, false, false, 27);
                        echo "\" style=\"white-space:nowrap;\" 
    data-origin = \"ml\" data-type = \"button\" data-offset-x = \"";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "left", [], "any", false, false, false, 28);
                        echo "\" data-offset-y = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "top", [], "any", false, false, false, 28);
                        echo "\" data-parallax = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "p_index", [], "any", false, false, false, 28);
                        echo "\" data-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationin", [], "any", false, false, false, 28);
                        echo "\" data-delay = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "start", [], "any", false, false, false, 28);
                        echo "\" data-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionin", [], "any", false, false, false, 28);
                        echo "\" data-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingin", [], "any", false, false, false, 28);
                        echo "\" data-hide-effect = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "transitionout", [], "any", false, false, false, 28);
                        echo "\" data-hide-duration = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "durationout", [], "any", false, false, false, 28);
                        echo "\" data-hide-ease = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "easingout", [], "any", false, false, false, 28);
                        echo "\" data-hide-time = \"";
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "end", [], "any", false, false, false, 28);
                        echo "\" >
    <span>";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 29);
                        echo "</span></a>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "<!-- foreach groups -->
";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["section"], "link", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "link", [], "any", false, false, false, 33);
                    echo "\" class=\"ls-link ";
                    if (twig_get_attribute($this->env, $this->source, $context["section"], "link_new_window", [], "any", false, false, false, 33)) {
                        echo " external";
                    }
                    echo "\"></a>
";
                }
                // line 35
                echo "</div><!-- .ls-slide ends -->
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<!-- foreach sections ends -->
</div><!-- id masterslider ends -->
</div><!-- .widget -->
<script>
\$(document).ready(function(){
var slider = new MasterSlider();
slider.setup('masterslider";
        // line 43
        echo ($context["module"] ?? null);
        echo "' , {
\twidth:";
        // line 44
        echo ($context["width"] ?? null);
        echo ",
\theight:";
        // line 45
        echo ($context["height"] ?? null);
        echo ",
\tminHeight:";
        // line 46
        echo ($context["minheight"] ?? null);
        echo ",
\tlayout:\"fillwidth\",
\tgrabCursor:false,
\tcenterControls:false,
\tautoplay:true,
\thideLayers:true,
\tinstantStartLayers:true,
\toverPause:false,
\t";
        // line 54
        if (($context["loop"] ?? null)) {
            echo "loop:true,";
        }
        // line 55
        echo "\tspeed:";
        echo ($context["speed"] ?? null);
        echo ",
\tview:\"";
        // line 56
        echo ($context["slide_transition"] ?? null);
        echo "\"
});
";
        // line 58
        if (($context["nav_buttons"] ?? null)) {
            echo "slider.control('arrows' , {autohide:false});";
        }
        // line 59
        if (($context["nav_bullets"] ?? null)) {
            echo "slider.control('bullets' , {autohide:false});";
        }
        // line 60
        if (($context["nav_timer_bar"] ?? null)) {
            echo "slider.control('timebar' , {width:5});";
        }
        // line 61
        echo "setTimeout(\"\$('body').addClass('ms_ready');\", 400);
});
</script>
";
        // line 64
        if (($context["fullwidth"] ?? null)) {
            // line 65
            echo "<div class=\"container\">
";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/basel_layerslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 65,  321 => 64,  316 => 61,  312 => 60,  308 => 59,  304 => 58,  299 => 56,  294 => 55,  290 => 54,  279 => 46,  275 => 45,  271 => 44,  267 => 43,  259 => 37,  251 => 35,  241 => 33,  239 => 32,  236 => 31,  227 => 29,  203 => 28,  194 => 27,  191 => 26,  189 => 25,  163 => 23,  157 => 22,  151 => 21,  148 => 20,  146 => 19,  118 => 16,  97 => 15,  94 => 14,  92 => 13,  88 => 12,  80 => 10,  78 => 9,  62 => 8,  60 => 7,  56 => 6,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/basel_layerslider.twig", "");
    }
}
