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

/* basel/template/extension/module/category.twig */
class __TwigTemplate_35d9372f7c62066596ec2ae20416d19d3fbec52da24b396f4e45fdb483fb8fc6 extends \Twig\Template
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
        echo "<div class=\"widget\">
<div class=\"widget-title\">
    <p class=\"main-title\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span></p>
    <p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
</div>
<ul class=\"plain-menu cat\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                // line 9
                echo "\t<li class=\"open active\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "</a>
\t";
            } else {
                // line 11
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 11);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                echo "</a> 
\t";
            }
            // line 13
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) {
                // line 14
                echo "      <div class=\"sign\"><i class=\"icon-arrow-right\"></i></div>
      <ul>
\t\t  ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 17
                    echo "\t\t  \t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 18) == ($context["child_id"] ?? null))) {
                            // line 19
                            echo "\t\t\t\t\t<li class=\"open active\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 19);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                            echo "</a>
\t\t\t\t\t";
                        } else {
                            // line 21
                            echo "\t\t\t\t\t<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 21);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                            echo "</a>
\t\t\t\t\t";
                        }
                        // line 23
                        echo "\t\t\t\t\t
\t\t\t<div class=\"sign\"><i class=\"icon-arrow-right\"></i></div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grandchildren", [], "any", false, false, false, 26));
                        foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                            // line 27
                            echo "\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "href", [], "any", false, false, false, 27);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["grandchild"], "name", [], "any", false, false, false, 27);
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "\t\t\t\t\t</ul>
\t\t\t</li>
\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t<li class=\"\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 32);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                        echo "</a></li>
\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "      </ul>
      ";
            }
            // line 37
            echo "   </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</ul>
</div>

<script>        
\t\$('.plain-menu.cat > li').bind().click(function(e) {
\t\$(this).toggleClass(\"open\").find('>ul').stop(true, true).slideToggle(350)
\t.end().siblings().find('>ul').slideUp().parent().removeClass(\"open\");
\te.stopPropagation();
\t});
\t\$('.plain-menu.cat li a').click(function(e) {
\te.stopPropagation();
\t});
\t
\t\$('.plain-menu.cat > li > ul > li').bind().click(function(e) {
\t\$(this).toggleClass(\"open\").find('>ul').stop(true, true).slideToggle(350)
\t.end().siblings().find('>ul').slideUp().parent().removeClass(\"open\");
\te.stopPropagation();
\t});
\t
\t\$('.plain-menu.cat li ul li a').click(function(e) {
\te.stopPropagation();
\t});
\t

\t
</script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  147 => 37,  143 => 35,  137 => 34,  129 => 32,  124 => 29,  113 => 27,  109 => 26,  104 => 23,  96 => 21,  88 => 19,  85 => 18,  82 => 17,  78 => 16,  74 => 14,  71 => 13,  63 => 11,  55 => 9,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/category.twig", "");
    }
}
