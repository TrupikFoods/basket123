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

/* basel/template/extension/module/basel_products.twig */
class __TwigTemplate_ab7c5695b2fdca15603fbd63b2eff142e960eb88d3cda8635225e4b5174fcb6f extends \Twig\Template
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
        echo "<div class=\"widget module";
        echo ($context["module"] ?? null);
        echo " ";
        if ((($context["columns"] ?? null) != "list")) {
            echo " grid";
        }
        if (($context["contrast"] ?? null)) {
            echo " contrast-bg";
        }
        if ((($context["carousel"] ?? null) && (($context["rows"] ?? null) > 1))) {
            echo "  multiple-rows";
        }
        echo "\" ";
        if (($context["use_margin"] ?? null)) {
            echo "style=\"margin-bottom: ";
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
            if (($context["title"] ?? null)) {
                echo " 
<p class=\"main-title\"><span>";
                // line 7
                echo ($context["title"] ?? null);
                echo "</span></p>
<p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
";
            }
            // line 10
            if (($context["title_subline"] ?? null)) {
                // line 11
                echo "<p class=\"sub-line\"><span>";
                echo ($context["title_subline"] ?? null);
                echo "</span></p>
";
            }
            // line 13
            echo "</div>
";
        }
        // line 15
        if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
            // line 16
            echo "<!-- Tabs -->
<ul id=\"tabs-";
            // line 17
            echo ($context["module"] ?? null);
            echo "\" class=\"nav nav-tabs ";
            echo ($context["tabstyle"] ?? null);
            echo "\" data-tabs=\"tabs\" style=\"\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["keyTab"] => $context["tab"]) {
                // line 19
                echo "        ";
                if (($context["keyTab"] == 0)) {
                    // line 20
                    echo "        <li class=\"active\"><a href=\"#tab";
                    echo ($context["module"] ?? null);
                    echo $context["keyTab"];
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 20);
                    echo "</a></li>
        ";
                } else {
                    // line 22
                    echo "        <li><a href=\"#tab";
                    echo ($context["module"] ?? null);
                    echo $context["keyTab"];
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 22);
                    echo "</a></li>
        ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyTab'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</ul>
";
        }
        // line 27
        echo "<div class=\"tab-content has-carousel ";
        if ( !($context["carousel"] ?? null)) {
            echo "overflow-hidden";
        }
        echo "\">
<!-- Product Group(s) -->
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 30
            echo "<div class=\"tab-pane";
            if (($context["key"] == 0)) {
                echo " active in";
            }
            echo " fade\" id=\"tab";
            echo ($context["module"] ?? null);
            echo $context["key"];
            echo "\">
    <div class=\"grid-holder grid";
            // line 31
            echo ($context["columns"] ?? null);
            echo " prod_module";
            echo ($context["module"] ?? null);
            if (($context["carousel"] ?? null)) {
                echo " carousel";
            }
            if ((($context["carousel_a"] ?? null) && (($context["rows"] ?? null) > 1))) {
                echo " sticky-arrows";
            }
            echo "\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "            <div class=\"item single-product\">
            <div class=\"image\"";
                // line 34
                if ((($context["columns"] ?? null) == "list")) {
                    echo " style=\"width:";
                    echo ($context["img_width"] ?? null);
                    echo "px\"";
                }
                echo ">
                <a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                echo "\">
                <img src=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" />
                ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                <img class=\"thumb2\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 38);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                    echo "\" />
                ";
                }
                // line 40
                echo "                </a>
            ";
                // line 41
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41) && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41)) && twig_get_attribute($this->env, $this->source, $context["product"], "sale_badge", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "                <div class=\"sale-counter id";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 42);
                    echo "\"></div>
\t\t\t\t<span class=\"badge sale_badge\"><i>";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sale_badge", [], "any", false, false, false, 43);
                    echo "</i></span>
            ";
                }
                // line 45
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "new_label", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                <span class=\"badge new_badge\"><i>";
                    echo ($context["basel_text_new"] ?? null);
                    echo "</i></span>
            ";
                }
                // line 48
                echo "\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48) < 1) && ($context["stock_badge_status"] ?? null))) {
                    // line 49
                    echo "\t\t\t\t<span class=\"badge out_of_stock_badge\"><i>";
                    echo ($context["basel_text_out_of_stock"] ?? null);
                    echo "</i></span>
\t\t\t\t";
                    // line 50
                    $context["button_cart"] = ($context["basel_text_out_of_stock"] ?? null);
                    // line 51
                    echo "\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t";
                    $context["button_cart"] = ($context["default_button_cart"] ?? null);
                    // line 53
                    echo "\t\t\t";
                }
                // line 54
                echo "            <a class=\"img-overlay\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\"></a>
            <div class=\"btn-center catalog_hide\"><a class=\"btn btn-light-outline btn-thin\" onclick=\"cart.add('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 55);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</a></div>
            <div class=\"icons-wrapper\">
            <a class=\"icon is-cart catalog_hide\" data-toggle=\"tooltip\" data-placement=\"";
                // line 57
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 57);
                echo "');\"><span class=\"global-cart\"></span></a>
            <a class=\"icon is_wishlist\" data-toggle=\"tooltip\" data-placement=\"";
                // line 58
                echo ($context["tooltip_align"] ?? null);
                echo "\"  data-title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                echo "');\"><span class=\"icon-heart\"></span></a>
            <a class=\"icon is_compare\" onclick=\"compare.add('";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "');\" data-toggle=\"tooltip\" data-placement=\"";
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\"><span class=\"icon-refresh\"></span></a>
            <a class=\"icon is_quickview hidden-xs\" onclick=\"quickview('";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "');\" data-toggle=\"tooltip\" data-placement=\"";
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["basel_button_quickview"] ?? null);
                echo "\"><span class=\"icon-magnifier-add\"></span></a>
            </div> <!-- .icons-wrapper -->
            </div><!-- .image ends -->
            <div class=\"caption\">
            <a class=\"product-name\" href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                echo "</a>
            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 65)) {
                    echo "      
                <div class=\"rating\">
                <span class=\"rating_stars rating r";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 67);
                    echo "\">
                <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
                </span>
                </div>
            ";
                }
                // line 72
                echo "            <div class=\"price-wrapper\">
            ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "            <div class=\"price\">
                ";
                    // line 75
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "                <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                        echo "</span>
                ";
                    } else {
                        // line 78
                        echo "                <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78);
                        echo "</span>
                ";
                    }
                    // line 80
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 81);
                        echo "</span>
                ";
                    }
                    // line 83
                    echo "            </div><!-- .price -->
            ";
                }
                // line 85
                echo "            <p class=\"description\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 85)) {
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 85);
                }
                echo "</p>
            <a class=\"btn catalog_hide ";
                // line 86
                if ((($context["basel_list_style"] ?? null) == "6")) {
                    echo "btn-contrast";
                } else {
                    echo "btn-outline";
                }
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 86);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 86);
                echo "');\"><span class=\"global-cart\"></span>";
                echo ($context["button_cart"] ?? null);
                echo "</a>
            </div><!-- .price-wrapper -->
            <div class=\"plain-links\">
            <a class=\"icon is_wishlist link-hover-color\" onclick=\"wishlist.add('";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                echo "');\"><span class=\"icon-heart\"></span> ";
                echo ($context["button_wishlist"] ?? null);
                echo "</a>
            <a class=\"icon is_compare link-hover-color\" onclick=\"compare.add('";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90);
                echo "');\"><span class=\"icon-refresh\"></span> ";
                echo ($context["button_compare"] ?? null);
                echo "</a>
            <a class=\"icon is_quickview link-hover-color\" onclick=\"quickview('";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo "');\"><span class=\"icon-magnifier-add\"></span> ";
                echo ($context["basel_button_quickview"] ?? null);
                echo "</a>
            </div><!-- .plain-links-->
            </div><!-- .caption-->
            ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "sale_end_date", [], "any", false, false, false, 94) && ($context["countdown_status"] ?? null))) {
                    // line 95
                    echo "            <script>
\t\t\t  \$(function() {
\t\t\t\t\$(\".module";
                    // line 97
                    echo ($context["module"] ?? null);
                    echo " .sale-counter.id";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
                    echo "\").countdown(\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sale_end_date", [], "any", false, false, false, 97);
                    echo "\").on('update.countdown', function(event) {
\t\t\t  var \$this = \$(this).html(event.strftime(''
\t\t\t\t+ '<div>'
\t\t\t\t+ '%D<i>";
                    // line 100
                    echo ($context["basel_text_days"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%H <i>";
                    // line 101
                    echo ($context["basel_text_hours"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%M <i>";
                    // line 102
                    echo ($context["basel_text_mins"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%S <i>";
                    // line 103
                    echo ($context["basel_text_secs"] ?? null);
                    echo "</i></div></div>'));
\t\t\t});
\t\t\t  });
\t\t\t</script>
            ";
                }
                // line 108
                echo "            </div><!-- .single-product ends -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        if (($context["use_button"] ?? null)) {
            // line 114
            echo "<!-- Button -->
<div class=\"widget_bottom_btn ";
            // line 115
            if ((($context["carousel"] ?? null) && ($context["carousel_b"] ?? null))) {
                echo "has-dots";
            }
            echo "\">
<a class=\"btn btn-contrast\" href=\"";
            // line 116
            echo ((($context["link_href"] ?? null)) ? (($context["link_href"] ?? null)) : (""));
            echo "\">";
            echo ($context["link_title"] ?? null);
            echo "</a>
</div>
";
        }
        // line 119
        echo "</div>
<div class=\"clearfix\"></div>
</div>
";
        // line 122
        if (($context["carousel"] ?? null)) {
            // line 123
            echo "<script>
\$('.grid-holder.prod_module";
            // line 124
            echo ($context["module"] ?? null);
            echo "').slick({
";
            // line 125
            if (($context["carousel_a"] ?? null)) {
                // line 126
                echo "prevArrow: \"<a class=\\\"arrow-left icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right icon-arrow-right\\\"></a>\",
";
            } else {
                // line 129
                echo "arrows: false,
";
            }
            // line 131
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 132
                echo "rtl: true,
";
            }
            // line 134
            if (($context["carousel_b"] ?? null)) {
                // line 135
                echo "dots:true,
";
            }
            // line 137
            echo "respondTo:'min',
rows:";
            // line 138
            echo ($context["rows"] ?? null);
            echo ",
";
            // line 139
            if ((($context["columns"] ?? null) == "5")) {
                // line 140
                echo "slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 141
($context["columns"] ?? null) == "4")) {
                // line 142
                echo "slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 143
($context["columns"] ?? null) == "3")) {
                // line 144
                echo "slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 145
($context["columns"] ?? null) == "2")) {
                // line 146
                echo "slidesToShow:2,slidesToScroll:2,responsive:[
";
            } elseif (((            // line 147
($context["columns"] ?? null) == "1") || (($context["columns"] ?? null) == "list"))) {
                // line 148
                echo "adaptiveHeight:true,slidesToShow:1,slidesToScroll:1,responsive:[
";
            }
            // line 150
            if (($context["items_mobile_fw"] ?? null)) {
                // line 151
                echo "{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1}}
";
            }
            // line 153
            echo "]
});
\$('.product-style2 .single-product .icon').attr('data-placement', 'top');
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
";
            // line 157
            if ((($context["carousel_a"] ?? null) && (($context["rows"] ?? null) > 1))) {
                // line 158
                echo "\$(window).load(function() {
var p_c_o = \$('.prod_module";
                // line 159
                echo ($context["module"] ?? null);
                echo "').offset().top;
var p_c_o_b = \$('.prod_module";
                // line 160
                echo ($context["module"] ?? null);
                echo "').offset().top + \$('.prod_module";
                echo ($context["module"] ?? null);
                echo "').outerHeight(true) - 100;
var p_sticky_arrows = function(){
var p_m_o = \$(window).scrollTop() + (\$(window).height()/2);
if (p_m_o > p_c_o && p_m_o < p_c_o_b) {
\$('.prod_module";
                // line 164
                echo ($context["module"] ?? null);
                echo " .slick-arrow').addClass('visible').css('top', p_m_o - p_c_o + 'px');
} else {
\$('.prod_module";
                // line 166
                echo ($context["module"] ?? null);
                echo " .slick-arrow').removeClass('visible');
}
};
\$(window).scroll(function() {p_sticky_arrows();});
});
";
            }
            // line 172
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/basel_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 172,  581 => 166,  576 => 164,  567 => 160,  563 => 159,  560 => 158,  558 => 157,  552 => 153,  548 => 151,  546 => 150,  542 => 148,  540 => 147,  537 => 146,  535 => 145,  532 => 144,  530 => 143,  527 => 142,  525 => 141,  522 => 140,  520 => 139,  516 => 138,  513 => 137,  509 => 135,  507 => 134,  503 => 132,  501 => 131,  497 => 129,  492 => 126,  490 => 125,  486 => 124,  483 => 123,  481 => 122,  476 => 119,  468 => 116,  462 => 115,  459 => 114,  457 => 113,  449 => 110,  442 => 108,  434 => 103,  430 => 102,  426 => 101,  422 => 100,  412 => 97,  408 => 95,  406 => 94,  398 => 91,  392 => 90,  386 => 89,  370 => 86,  363 => 85,  359 => 83,  351 => 81,  348 => 80,  340 => 78,  334 => 76,  332 => 75,  329 => 74,  327 => 73,  324 => 72,  316 => 67,  311 => 65,  305 => 64,  294 => 60,  286 => 59,  278 => 58,  268 => 57,  259 => 55,  254 => 54,  251 => 53,  248 => 52,  245 => 51,  243 => 50,  238 => 49,  235 => 48,  229 => 46,  226 => 45,  221 => 43,  216 => 42,  214 => 41,  211 => 40,  201 => 38,  199 => 37,  191 => 36,  187 => 35,  179 => 34,  176 => 33,  172 => 32,  160 => 31,  150 => 30,  146 => 29,  138 => 27,  134 => 25,  128 => 24,  119 => 22,  110 => 20,  107 => 19,  103 => 18,  97 => 17,  94 => 16,  92 => 15,  88 => 13,  82 => 11,  80 => 10,  74 => 7,  70 => 6,  64 => 5,  60 => 3,  58 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/basel_products.twig", "");
    }
}
