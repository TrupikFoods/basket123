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

/* basel/template/common/mobile-nav.twig */
class __TwigTemplate_28eb4e3d6bc15fabfb32297e3daf979cdc581b9c5d2d0153512875baa4486c9d extends \Twig\Template
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
        echo "<div class=\"main-menu-wrapper hidden-md hidden-lg\">
<ul class=\"mobile-top\">
    <li class=\"mobile-lang-curr\"></li>
    ";
        // line 4
        if (($context["header_search"] ?? null)) {
            // line 5
            echo "    <li class=\"search\">
        <div class=\"search-holder-mobile\">
        <input type=\"text\" name=\"search-mobile\" value=\"\" placeholder=\"\" class=\"form-control\" /><a class=\"fa fa-search\"></a>
        </div>
    </li>
    ";
        }
        // line 11
        echo "</ul>
";
        // line 12
        if (($context["primary_menu"] ?? null)) {
            // line 13
            echo "<ul class=\"categories\">
";
            // line 14
            if ((($context["primary_menu"] ?? null) == "oc")) {
                // line 15
                echo "<!-- Default menu -->
";
                // line 16
                echo ($context["default_menu"] ?? null);
                echo "
";
            } elseif (            // line 17
(isset($context["primary_menu"]) || array_key_exists("primary_menu", $context))) {
                // line 18
                echo "<!-- Mega menu -->
";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["primary_menu_mobile"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                    // line 20
                    $this->loadTemplate("basel/template/common/menus/mega_menu.twig", "basel/template/common/mobile-nav.twig", 20)->display($context);
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 23
            echo "</ul>
";
        }
        // line 25
        if (($context["secondary_menu"] ?? null)) {
            // line 26
            echo "<ul class=\"categories\">
    ";
            // line 27
            if ((($context["secondary_menu"] ?? null) == "oc")) {
                // line 28
                echo "        <!-- Default menu -->
        ";
                // line 29
                echo ($context["default_menu"] ?? null);
                echo "
    ";
            } elseif (            // line 30
(isset($context["secondary_menu"]) || array_key_exists("secondary_menu", $context))) {
                // line 31
                echo "        <!-- Mega menu -->
        ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["secondary_menu_mobile"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                    // line 33
                    echo "        \t";
                    $this->loadTemplate("basel/template/common/menus/mega_menu.twig", "basel/template/common/mobile-nav.twig", 33)->display($context);
                    // line 34
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    ";
            }
            // line 36
            echo "</ul>
";
        }
        // line 38
        echo "<ul class=\"categories\">
    ";
        // line 39
        $this->loadTemplate("basel/template/common/static_links.twig", "basel/template/common/mobile-nav.twig", 39)->display($context);
        // line 40
        echo "</ul>
</div>
<span class=\"body-cover menu-closer\"></span>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/mobile-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 40,  173 => 39,  170 => 38,  166 => 36,  163 => 35,  149 => 34,  146 => 33,  129 => 32,  126 => 31,  124 => 30,  120 => 29,  117 => 28,  115 => 27,  112 => 26,  110 => 25,  106 => 23,  91 => 20,  74 => 19,  71 => 18,  69 => 17,  65 => 16,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/mobile-nav.twig", "/var/www/html/catalog/view/theme/basel/template/common/mobile-nav.twig");
    }
}
