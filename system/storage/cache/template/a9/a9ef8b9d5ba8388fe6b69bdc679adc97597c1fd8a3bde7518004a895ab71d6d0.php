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

/* sale/return_history.twig */
class __TwigTemplate_2deffbf41fb18e60ada65cbbad4c74a02e2019d68fe913a1affd5d01a8ee8d6f extends \Twig\Template
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
        if (($context["error"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\">";
            echo ($context["error"] ?? null);
            echo "</div>
";
        }
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 9
        echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
      <td class=\"text-left\">";
        // line 12
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 13
        echo ($context["column_comment"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 14
        echo ($context["column_status"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 15
        echo ($context["column_notify"] ?? null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        if (($context["histories"] ?? null)) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 21
                echo "    <tr>
      <td class=\"text-left\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 22);
                echo "</td>
      <td class=\"text-left\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 23);
                echo "</td>
      <td class=\"text-left\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 24);
                echo "</td>
      <td class=\"text-left\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["history"], "notify", [], "any", false, false, false, 25);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    <tr>
      <td class=\"text-center\" colspan=\"4\">";
            // line 30
            echo ($context["text_no_results"] ?? null);
            echo "</td>
    </tr>
    ";
        }
        // line 33
        echo "  </tbody>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 36
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 37
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sale/return_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  127 => 36,  122 => 33,  116 => 30,  113 => 29,  110 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  86 => 21,  81 => 20,  79 => 19,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 9,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/return_history.twig", "");
    }
}
