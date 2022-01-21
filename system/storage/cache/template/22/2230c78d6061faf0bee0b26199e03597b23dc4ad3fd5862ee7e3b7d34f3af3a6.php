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

/* basel/template/common/footer.twig */
class __TwigTemplate_5069994ae329741e92d946156678a54d33a973b1c0ba3b48eafad19e18fd3ea0 extends \Twig\Template
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
        echo "<div class=\"container\">
";
        // line 2
        echo ($context["position_bottom_half"] ?? null);
        echo "
</div>
<div class=\"container\">
";
        // line 5
        echo ($context["position_bottom"] ?? null);
        echo "
</div>
<div id=\"footer\">
<div class=\"container\">
";
        // line 9
        if ((($context["footer_block_1"] ?? null) && (($context["footer_block_1"] ?? null) != "<p><br></p>"))) {
            // line 10
            echo "<div class=\"footer-top-block\">
";
            // line 11
            echo ($context["footer_block_1"] ?? null);
            echo "
</div>
";
        }
        // line 14
        echo "<div class=\"row links-holder\">
<div class=\"col-xs-12 col-sm-8\">
  <div class=\"row\">
  ";
        // line 17
        if (($context["custom_links"] ?? null)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["basel_footer_columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 19
                echo "    <div class=\"footer-column col-xs-12 col-sm-6 ";
                echo ($context["basel_columns_count"] ?? null);
                echo " eq_height\">
      ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "        <h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 21);
                    echo "</h5>
      ";
                }
                // line 23
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "links", [], "any", true, true, false, 23)) {
                    // line 24
                    echo "      <ul class=\"list-unstyled\">
      ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 26
                        echo "      <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 26);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 26);
                        echo "</a></li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "      </ul>
      ";
                }
                // line 30
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  ";
        } else {
            // line 33
            echo "      ";
            if (($context["informations"] ?? null)) {
                // line 34
                echo "      <div class=\"footer-column col-xs-12 col-sm-4 eq_height\">
        <h5>";
                // line 35
                echo ($context["text_information"] ?? null);
                echo "</h5>
        <ul class=\"list-unstyled\">
          ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 38
                    echo "          <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 38);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 38);
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "          <li><a href=\"";
                echo ($context["contact"] ?? null);
                echo "\">";
                echo ($context["text_contact"] ?? null);
                echo "</a></li>
        </ul>
      </div>
      ";
            }
            // line 44
            echo "      <div class=\"footer-column col-xs-12 col-sm-4 eq_height\">
        <h5>";
            // line 45
            echo ($context["text_extra"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 47
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 48
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 49
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 50
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 51
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>
        </ul>
      </div>
      <div class=\"footer-column col-xs-12 col-sm-4 eq_height\">
        <h5>";
            // line 55
            echo ($context["text_account"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 57
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 58
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 59
            echo ($context["return"] ?? null);
            echo "\">";
            echo ($context["text_return"] ?? null);
            echo "</a></li>
          <li class=\"is_wishlist\"><a href=\"";
            // line 60
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 61
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>
        </ul>
      </div>
 ";
        }
        // line 65
        echo "</div><!-- .row ends -->
</div><!-- .col-md-8 ends -->
<div class=\"footer-column col-xs-12 col-sm-4\">
<div class=\"footer-custom-wrapper\">
";
        // line 69
        if ((isset($context["footer_block_title"]) || array_key_exists("footer_block_title", $context))) {
            // line 70
            echo "<h5>";
            echo ($context["footer_block_title"] ?? null);
            echo "</h5>
";
        }
        // line 72
        if ((($context["footer_block_2"] ?? null) && (($context["footer_block_2"] ?? null) != "<p><br></p>"))) {
            // line 73
            echo "<div class=\"custom_block\">";
            echo ($context["footer_block_2"] ?? null);
            echo "</div>
";
        }
        // line 75
        if ((isset($context["footer_infoline_1"]) || array_key_exists("footer_infoline_1", $context))) {
            // line 76
            echo "<p class=\"infoline\">";
            echo ($context["footer_infoline_1"] ?? null);
            echo "</p>
";
        }
        // line 78
        if ((isset($context["footer_infoline_2"]) || array_key_exists("footer_infoline_2", $context))) {
            // line 79
            echo "<p class=\"infoline\">";
            echo ($context["footer_infoline_2"] ?? null);
            echo "</p>
";
        }
        // line 81
        if ((isset($context["footer_infoline_3"]) || array_key_exists("footer_infoline_3", $context))) {
            // line 82
            echo "<p class=\"infoline\">";
            echo ($context["footer_infoline_3"] ?? null);
            echo "</p>
";
        }
        // line 84
        if (($context["payment_img"] ?? null)) {
            // line 85
            echo "<img class=\"payment_img\" src=\"";
            echo ($context["payment_img"] ?? null);
            echo "\" alt=\"\" />
";
        }
        // line 87
        echo "</div>
</div>
</div><!-- .row ends -->
";
        // line 90
        if (($context["basel_copyright"] ?? null)) {
            // line 91
            echo "<div class=\"footer-copyright\">";
            echo ($context["basel_copyright"] ?? null);
            echo "</div>
";
        }
        // line 93
        echo "</div>
</div>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/basel/js/lightgallery/css/lightgallery.css\" rel=\"stylesheet\" />
<script src=\"catalog/view/theme/basel/js/jquery.matchHeight.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/countdown.js\"></script>
<script src=\"catalog/view/theme/basel/js/live_search.js\"></script>
<script src=\"catalog/view/theme/basel/js/featherlight.js\"></script>
";
        // line 101
        if (($context["view_popup"] ?? null)) {
            // line 102
            echo "<!-- Popup -->
<script>
\$(document).ready(function() {
if (\$(window).width() > ";
            // line 105
            echo ($context["popup_width_limit"] ?? null);
            echo ") {
setTimeout(function() {
\$.featherlight({ajax: 'index.php?route=extension/basel/basel_features/basel_popup', variant:'popup-wrapper'});
}, ";
            // line 108
            echo ($context["popup_delay"] ?? null);
            echo ");
}
});
</script>
";
        }
        // line 113
        if (($context["sticky_columns"] ?? null)) {
            // line 114
            echo "<!-- Sticky columns -->
<script>
if (\$(window).width() > 767) {
\$('#column-left, #column-right').theiaStickySidebar({containerSelector:\$(this).closest('.row'),additionalMarginTop:";
            // line 117
            echo ($context["sticky_columns_offset"] ?? null);
            echo "});
}
</script>
";
        }
        // line 121
        if (($context["view_cookie_bar"] ?? null)) {
            // line 122
            echo "<!-- Cookie bar -->
<div class=\"basel_cookie_bar\">
<div class=\"table\">
<div class=\"table-cell w100\">";
            // line 125
            echo ($context["basel_cookie_info"] ?? null);
            echo "</div>
<div class=\"table-cell button-cell\">
<a class=\"btn btn-tiny btn-light-outline\" onclick=\"\$(this).parent().parent().parent().fadeOut(400);\">";
            // line 127
            echo ($context["basel_cookie_btn_close"] ?? null);
            echo "</a>
";
            // line 128
            if ((isset($context["href_more_info"]) || array_key_exists("href_more_info", $context))) {
                // line 129
                echo "<a class=\"more-info anim-underline light\" href=\"";
                echo ($context["href_more_info"] ?? null);
                echo "\">";
                echo ($context["basel_cookie_btn_more_info"] ?? null);
                echo "</a>
";
            }
            // line 131
            echo "</div>
</div>
</div>
";
        }
        // line 135
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
BASEL VERSION ";
        // line 138
        echo ($context["basel_version"] ?? null);
        echo " - OPENCART VERSION 3 (";
        echo ($context["VERSION"] ?? null);
        echo ") 
//-->
</div><!-- .outer-container ends -->
<a class=\"scroll-to-top primary-bg-color hidden-sm hidden-xs\" onclick=\"\$('html, body').animate({scrollTop:0});\"><i class=\"icon-arrow-right\"></i></a>
<div id=\"featherlight-holder\"></div>
</body></html>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 138,  383 => 135,  377 => 131,  369 => 129,  367 => 128,  363 => 127,  358 => 125,  353 => 122,  351 => 121,  344 => 117,  339 => 114,  337 => 113,  329 => 108,  323 => 105,  318 => 102,  316 => 101,  306 => 93,  300 => 91,  298 => 90,  293 => 87,  287 => 85,  285 => 84,  279 => 82,  277 => 81,  271 => 79,  269 => 78,  263 => 76,  261 => 75,  255 => 73,  253 => 72,  247 => 70,  245 => 69,  239 => 65,  230 => 61,  224 => 60,  218 => 59,  212 => 58,  206 => 57,  201 => 55,  192 => 51,  186 => 50,  180 => 49,  174 => 48,  168 => 47,  163 => 45,  160 => 44,  150 => 40,  139 => 38,  135 => 37,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  114 => 30,  110 => 28,  99 => 26,  95 => 25,  92 => 24,  89 => 23,  83 => 21,  81 => 20,  76 => 19,  71 => 18,  69 => 17,  64 => 14,  58 => 11,  55 => 10,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/footer.twig", "");
    }
}
