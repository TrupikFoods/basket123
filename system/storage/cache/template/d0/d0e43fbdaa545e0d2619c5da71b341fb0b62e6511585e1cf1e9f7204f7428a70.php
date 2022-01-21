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

/* extension/basel/testimonial_list.twig */
class __TwigTemplate_b1e00b74fad8bf900413b5a4620427ad4c50f9465db1f299b41dee12b4ca7b2b extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
      <a href=\"";
        // line 6
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-testimonial').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">

 \t<form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-testimonial\"> 
      <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td width=\"1\" style=\"align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\" /></td>

            
            <td>";
        // line 42
        echo ($context["column_name"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 43
        echo ($context["column_status"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 44
        echo ($context["column_action"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
        // line 48
        if (($context["testimonials"] ?? null)) {
            // line 49
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 50
                echo "            <tr>
            <td style=\"align: center;\">
            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "selected", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "testimonial_id", [], "any", false, false, false, 53);
                    echo "\" checked=\"checked\" />
            ";
                } else {
                    // line 55
                    echo "            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "testimonial_id", [], "any", false, false, false, 55);
                    echo "\" />
            ";
                }
                // line 57
                echo "            </td>
            <td>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 58);
                echo "</td>
            <td class=\"text-right\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "status", [], "any", false, false, false, 59);
                echo "</td>
            <td class=\"text-right\">
                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["testimonial"], "action", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 62
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 62);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "          ";
        } else {
            // line 68
            echo "            <tr>
            <td class=\"text-center\" colspan=\"4\">";
            // line 69
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
          ";
        }
        // line 72
        echo "        </tbody>
      </table>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/basel/testimonial_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 80,  215 => 72,  209 => 69,  206 => 68,  203 => 67,  195 => 64,  184 => 62,  180 => 61,  175 => 59,  171 => 58,  168 => 57,  162 => 55,  156 => 53,  154 => 52,  150 => 50,  145 => 49,  143 => 48,  136 => 44,  132 => 43,  128 => 42,  117 => 34,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/testimonial_list.twig", "");
    }
}
