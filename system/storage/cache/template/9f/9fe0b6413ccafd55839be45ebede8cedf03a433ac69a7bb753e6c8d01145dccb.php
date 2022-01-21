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

/* basel/template/extension/module/basel_carousel.twig */
class __TwigTemplate_1e1368e2bdce21031886317805318695879399e27877048cfbb9530379e16b0f extends \Twig\Template
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
        echo "<div class=\"widget carousel-widget grid";
        if (($context["contrast"] ?? null)) {
            echo " contrast-bg";
        }
        echo "\" ";
        if (($context["use_margin"] ?? null)) {
            echo " style=\"margin-bottom:";
            echo ($context["margin"] ?? null);
            echo "\"";
        }
        echo ">
";
        // line 2
        if (($context["block_title"] ?? null)) {
            // line 3
            echo "<!-- Block Title -->
<div class=\"widget-title\">
    ";
            // line 5
            if (($context["title_preline"] ?? null)) {
                echo "<p class=\"pre-line\">";
                echo ($context["title_preline"] ?? null);
                echo "</p>";
            }
            // line 6
            echo "    ";
            if (($context["title"] ?? null)) {
                // line 7
                echo "        <p class=\"main-title\"><span>";
                echo ($context["title"] ?? null);
                echo "</span></p>
        <p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
    ";
            }
            // line 10
            echo "    ";
            if (($context["title_subline"] ?? null)) {
                // line 11
                echo "    <p class=\"sub-line\"><span>";
                echo ($context["title_subline"] ?? null);
                echo "</span></p>
    ";
            }
            // line 13
            echo "</div>
";
        }
        // line 15
        echo "<div class=\"grid-holder carousel carousel_module module";
        echo ($context["module"] ?? null);
        echo "\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 17
            echo "    <div class=\"item text-center\">
    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 18)) {
                // line 19
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 19);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19);
                echo "\" class=\"display-inline-block\" /></a>
    ";
            } else {
                // line 21
                echo "        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
                echo "\" class=\"display-inline-block\" />
    ";
            }
            // line 23
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div> <!-- .grid-holder ends -->
<div class=\"clearfix\"></div>
</div>
<script><!--
\$('.grid-holder.carousel_module.module";
        // line 29
        echo ($context["module"] ?? null);
        echo "').slick({
";
        // line 30
        if (($context["carousel_a"] ?? null)) {
            // line 31
            echo "prevArrow: \"<a class=\\\"arrow-left icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right icon-arrow-right\\\"></a>\",
";
        } else {
            // line 34
            echo "arrows: false,
";
        }
        // line 36
        if (($context["carousel_b"] ?? null)) {
            // line 37
            echo "dots:true,
";
        }
        // line 39
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 40
            echo "rtl: true,
";
        }
        // line 42
        if (($context["autoplay"] ?? null)) {
            // line 43
            echo "autoplay:true,
autoplaySpeed:";
            // line 44
            echo ($context["autoplay"] ?? null);
            echo ",
";
        }
        // line 46
        echo "respondTo:'min',
slidesToScroll:1,
rows:";
        // line 48
        echo ($context["rows"] ?? null);
        echo ",
";
        // line 49
        if ((($context["columns"] ?? null) == "6")) {
            // line 50
            echo "slidesToShow:6,responsive:[{breakpoint:1100,settings:{slidesToShow:5,slidesToScroll:5}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
        } elseif ((        // line 51
($context["columns"] ?? null) == "5")) {
            // line 52
            echo "slidesToShow:5,responsive:[{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
        } elseif ((        // line 53
($context["columns"] ?? null) == "4")) {
            // line 54
            echo "slidesToShow:4,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
        } elseif ((        // line 55
($context["columns"] ?? null) == "3")) {
            // line 56
            echo "slidesToShow:3,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
        } elseif ((        // line 57
($context["columns"] ?? null) == "2")) {
            // line 58
            echo "slidesToShow:2,responsive:[
";
        } elseif (((        // line 59
($context["columns"] ?? null) == "1") || (($context["columns"] ?? null) == "list"))) {
            // line 60
            echo "adaptiveHeight:true,slidesToShow:1,slidesToScroll:1,responsive:[
";
        }
        // line 62
        echo "{breakpoint:420,settings:{slidesToShow:2}}
]
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/basel_carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 62,  202 => 60,  200 => 59,  197 => 58,  195 => 57,  192 => 56,  190 => 55,  187 => 54,  185 => 53,  182 => 52,  180 => 51,  177 => 50,  175 => 49,  171 => 48,  167 => 46,  162 => 44,  159 => 43,  157 => 42,  153 => 40,  151 => 39,  147 => 37,  145 => 36,  141 => 34,  136 => 31,  134 => 30,  130 => 29,  124 => 25,  117 => 23,  109 => 21,  99 => 19,  97 => 18,  94 => 17,  90 => 16,  85 => 15,  81 => 13,  75 => 11,  72 => 10,  65 => 7,  62 => 6,  56 => 5,  52 => 3,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/basel_carousel.twig", "");
    }
}
