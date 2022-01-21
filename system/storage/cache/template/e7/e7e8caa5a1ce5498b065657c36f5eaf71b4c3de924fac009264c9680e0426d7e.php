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

/* basel/template/product/single_product.twig */
class __TwigTemplate_2585d2c85ec221a02b7123806b5dd88bb93f664af12f005fd3feea4396fe76fd extends \Twig\Template
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
        echo "<div class=\"item single-product\">
<div class=\"image\" ";
        // line 2
        if ((($context["columns"] ?? null) == "list")) {
            echo "style=\"width:";
            echo ($context["img_width"] ?? null);
            echo "px\"";
        }
        echo ">
    <a href=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 3);
        echo "\">
    <img src=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 4);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4);
        echo "\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4);
        echo "\" />
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2", [], "any", false, false, false, 5)) {
            // line 6
            echo "    <img class=\"thumb2\" src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
            echo "\" />
    ";
        }
        // line 8
        echo "    </a>
";
        // line 9
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 9)) && ($context["salebadge_status"] ?? null))) {
            // line 10
            echo "    <div class=\"sale-counter id";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 10);
            echo "\"></div>
    <span class=\"badge sale_badge\"><i>";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_badge", [], "any", false, false, false, 11);
            echo "</i></span>
";
        }
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "new_label", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <span class=\"badge new_badge\"><i>";
            echo ($context["basel_text_new"] ?? null);
            echo "</i></span>
";
        }
        // line 16
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 16) < 1) && ($context["stock_badge_status"] ?? null))) {
            // line 17
            echo "    <span class=\"badge out_of_stock_badge\"><i>";
            echo ($context["basel_text_out_of_stock"] ?? null);
            echo "</i></span>
    ";
            // line 18
            $context["button_cart"] = ($context["basel_text_out_of_stock"] ?? null);
        } else {
            // line 20
            echo "\t";
            $context["button_cart"] = ($context["default_button_cart"] ?? null);
        }
        // line 22
        echo "<a class=\"img-overlay\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 22);
        echo "\"></a>
<div class=\"btn-center catalog_hide\"><a class=\"btn btn-light-outline btn-thin\" onclick=\"cart.add('";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 23);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 23);
        echo "');\">";
        echo ($context["button_cart"] ?? null);
        echo "</a></div>
<div class=\"icons-wrapper\">
<a class=\"icon is-cart catalog_hide\" data-toggle=\"tooltip\" data-placement=\"";
        // line 25
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" onclick=\"cart.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 25);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 25);
        echo "');\"><span class=\"global-cart\"></span></a>
<a class=\"icon is_wishlist\" data-toggle=\"tooltip\" data-placement=\"";
        // line 26
        echo ($context["tooltip_align"] ?? null);
        echo "\"  data-title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 26);
        echo "');\"><span class=\"icon-heart\"></span></a>
<a class=\"icon is_compare\" onclick=\"compare.add('";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 27);
        echo "');\" data-toggle=\"tooltip\" data-placement=\"";
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><span class=\"icon-refresh\"></span></a>
<a class=\"icon is_quickview hidden-xs\" onclick=\"quickview('";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 28);
        echo "');\" data-toggle=\"tooltip\" data-placement=\"";
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["basel_button_quickview"] ?? null);
        echo "\"><span class=\"icon-magnifier-add\"></span></a>
</div> <!-- .icons-wrapper -->
</div><!-- .image ends -->
<div class=\"caption\">
<a class=\"product-name\" href=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 32);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32);
        echo "</a>
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 33)) {
            echo "      
    <div class=\"rating\">
    <span class=\"rating_stars rating r";
            // line 35
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 35);
            echo "\">
    <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
    </span>
    </div>
";
        }
        // line 40
        echo "<div class=\"price-wrapper\">
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 41)) {
            // line 42
            echo "<div class=\"price\">
    ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 43)) {
                // line 44
                echo "    <span class=\"price-old\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 44);
                echo "</span><span class=\"price-new\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 44);
                echo "</span>
    ";
            } else {
                // line 46
                echo "    <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 46);
                echo "</span>
    ";
            }
            // line 48
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 48)) {
                // line 49
                echo "    <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 49);
                echo "</span>
    ";
            }
            // line 51
            echo "</div><!-- .price -->
";
        }
        // line 53
        echo "<p class=\"description\">";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 53)) {
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 53);
        }
        echo "</p>
<a class=\"btn catalog_hide ";
        // line 54
        if ((($context["basel_list_style"] ?? null) == "6")) {
            echo "btn-contrast";
        } else {
            echo "btn-outline";
        }
        echo "\" onclick=\"cart.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 54);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 54);
        echo "');\"><span class=\"global-cart\"></span>";
        echo ($context["button_cart"] ?? null);
        echo "</a>
</div><!-- .price-wrapper -->
<div class=\"plain-links\">
<a class=\"icon is_wishlist link-hover-color\" onclick=\"wishlist.add('";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 57);
        echo "');\"><span class=\"icon-heart\"></span> ";
        echo ($context["button_wishlist"] ?? null);
        echo "</a>
<a class=\"icon is_compare link-hover-color\" onclick=\"compare.add('";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 58);
        echo "');\"><span class=\"icon-refresh\"></span> ";
        echo ($context["button_compare"] ?? null);
        echo "</a>
<a class=\"icon is_quickview link-hover-color\" onclick=\"quickview('";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 59);
        echo "');\"><span class=\"icon-magnifier-add\"></span> ";
        echo ($context["basel_button_quickview"] ?? null);
        echo "</a>
</div><!-- .plain-links-->
</div><!-- .caption-->
";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_end_date", [], "any", false, false, false, 62) && ($context["countdown_status"] ?? null))) {
            // line 63
            echo "<script>
  \$(function() {
\t\$(\".sale-counter.id";
            // line 65
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 65);
            echo "\").countdown(\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_end_date", [], "any", false, false, false, 65);
            echo "\").on('update.countdown', function(event) {
  var \$this = \$(this).html(event.strftime(''
    + '<div>'
    + '%D<i>";
            // line 68
            echo ($context["basel_text_days"] ?? null);
            echo "</i></div><div>'
    + '%H <i>";
            // line 69
            echo ($context["basel_text_hours"] ?? null);
            echo "</i></div><div>'
    + '%M <i>";
            // line 70
            echo ($context["basel_text_mins"] ?? null);
            echo "</i></div><div>'
    + '%S <i>";
            // line 71
            echo ($context["basel_text_secs"] ?? null);
            echo "</i></div></div>'));
});
});
</script>
";
        }
        // line 76
        echo "</div><!-- .single-product ends -->";
    }

    public function getTemplateName()
    {
        return "basel/template/product/single_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 76,  287 => 71,  283 => 70,  279 => 69,  275 => 68,  267 => 65,  263 => 63,  261 => 62,  253 => 59,  247 => 58,  241 => 57,  225 => 54,  218 => 53,  214 => 51,  206 => 49,  203 => 48,  197 => 46,  189 => 44,  187 => 43,  184 => 42,  182 => 41,  179 => 40,  171 => 35,  166 => 33,  160 => 32,  149 => 28,  141 => 27,  133 => 26,  123 => 25,  114 => 23,  109 => 22,  105 => 20,  102 => 18,  97 => 17,  95 => 16,  89 => 14,  87 => 13,  82 => 11,  77 => 10,  75 => 9,  72 => 8,  62 => 6,  60 => 5,  52 => 4,  48 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/single_product.twig", "/var/www/html/catalog/view/theme/basel/template/product/single_product.twig");
    }
}
