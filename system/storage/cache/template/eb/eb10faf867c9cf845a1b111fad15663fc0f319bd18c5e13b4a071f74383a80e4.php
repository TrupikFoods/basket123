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

/* basel/template/common/header.twig */
class __TwigTemplate_f72d34021c2f6927f6c3d864d95ed11780417e75d38f8269e8fb9745e8e9d495 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />";
        }
        // line 15
        if (($context["keywords"] ?? null)) {
            echo "<meta name=\"keywords\" content= \"";
            echo ($context["keywords"] ?? null);
            echo "\" />";
        }
        // line 16
        echo "<!-- Load essential resources -->
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/slick.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/basel_common.js\"></script>
<!-- Main stylesheet -->
<link href=\"catalog/view/theme/basel/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<!-- Mandatory Theme Settings CSS -->
<style id=\"basel-mandatory-css\">";
        // line 25
        echo ($context["basel_mandatory_css"] ?? null);
        echo "</style>
<!-- Plugin Stylesheet(s) -->
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 31
            echo "<link href=\"catalog/view/theme/basel/stylesheet/rtl.css\" rel=\"stylesheet\">
";
        }
        // line 33
        echo "<!-- Pluing scripts(s) -->
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 35
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<!-- Page specific meta information -->
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 39) == "image")) {
                // line 40
                echo "<meta property=\"og:image\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
                echo "\" />
";
            } else {
                // line 42
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 42);
                echo "\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 42);
                echo "\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<!-- Analytic tools -->
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 47
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        if (($context["basel_styles_status"] ?? null)) {
            // line 50
            echo "<!-- Custom Color Scheme -->
<style id=\"basel-color-scheme\">";
            // line 51
            echo ($context["basel_styles_cache"] ?? null);
            echo ";</style>
";
        }
        // line 53
        if (($context["basel_typo_status"] ?? null)) {
            // line 54
            echo "<!-- Custom Fonts -->
<style id=\"basel-fonts\">";
            // line 55
            echo ($context["basel_fonts_cache"] ?? null);
            echo "</style>
";
        }
        // line 57
        if (($context["basel_custom_css_status"] ?? null)) {
            // line 58
            echo "<!-- Custom CSS -->
<style id=\"basel-custom-css\">
";
            // line 60
            echo ($context["basel_custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 63
        if (($context["basel_custom_js_status"] ?? null)) {
            // line 64
            echo "<!-- Custom Javascript -->
<script>
";
            // line 66
            echo ($context["basel_custom_js"] ?? null);
            echo "
</script>
";
        }
        // line 69
        echo "</head>
<body class=\"";
        // line 70
        echo ($context["class"] ?? null);
        echo ($context["basel_body_class"] ?? null);
        echo "\">
";
        // line 71
        $this->loadTemplate("basel/template/common/mobile-nav.twig", "basel/template/common/header.twig", 71)->display($context);
        // line 72
        echo "<div class=\"outer-container main-wrapper\">
";
        // line 73
        if (($context["notification_status"] ?? null)) {
            // line 74
            echo "<div class=\"top_notificaiton\">
  <div class=\"container";
            // line 75
            if (($context["top_promo_close"] ?? null)) {
                echo " has-close";
            }
            echo " ";
            echo ($context["top_promo_width"] ?? null);
            echo " ";
            echo ($context["top_promo_align"] ?? null);
            echo "\">
    <div class=\"table\">
    <div class=\"table-cell w100\"><div class=\"ellipsis-wrap\">";
            // line 77
            echo ($context["top_promo_text"] ?? null);
            echo "</div></div>
    ";
            // line 78
            if (($context["top_promo_close"] ?? null)) {
                // line 79
                echo "    <div class=\"table-cell text-right\">
    <a onClick=\"addCookie('basel_top_promo', 1, 30);\$(this).closest('.top_notificaiton').slideUp();\" class=\"top_promo_close\">&times;</a>
    </div>
    ";
            }
            // line 83
            echo "    </div>
  </div>
</div>
";
        }
        // line 87
        $this->loadTemplate((("basel/template/common/headers/" . ($context["basel_header"] ?? null)) . ".twig"), "basel/template/common/header.twig", 87)->display($context);
        // line 88
        echo "<!-- breadcrumb -->
<div class=\"breadcrumb-holder\">
<div class=\"container\">
<span id=\"title-holder\">&nbsp;</span>
<div class=\"links-holder\">
<a class=\"basel-back-btn\" onClick=\"history.go(-1); return false;\"><i></i></a><span>&nbsp;</span>
</div>
</div>
</div>
<div class=\"container\">
";
        // line 98
        echo ($context["position_top"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  275 => 88,  273 => 87,  267 => 83,  261 => 79,  259 => 78,  255 => 77,  244 => 75,  241 => 74,  239 => 73,  236 => 72,  234 => 71,  229 => 70,  226 => 69,  220 => 66,  216 => 64,  214 => 63,  208 => 60,  204 => 58,  202 => 57,  197 => 55,  194 => 54,  192 => 53,  187 => 51,  184 => 50,  182 => 49,  174 => 47,  170 => 46,  167 => 45,  155 => 42,  149 => 40,  147 => 39,  143 => 38,  140 => 37,  131 => 35,  127 => 34,  124 => 33,  120 => 31,  118 => 30,  105 => 28,  101 => 27,  96 => 25,  85 => 16,  79 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/header.twig", "");
    }
}
