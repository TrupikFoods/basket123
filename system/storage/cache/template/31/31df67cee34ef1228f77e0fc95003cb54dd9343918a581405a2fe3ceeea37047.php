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

/* basel/template/affiliate/login.twig */
class __TwigTemplate_cc5e0423aef1ed8dbfbae6a6e5c162ad55063cb948c10c12e2f644f1ad8921d6 extends \Twig\Template
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
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " no-min-height\">
    ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <div class=\"login-area\">
      <div class=\"row\">
        <div class=\"col-sm-6 left\">
            <h2><i class=\"icon-login\"></i>";
        // line 24
        echo ($context["text_returning_affiliate"] ?? null);
        echo "</h2>
            
            ";
        // line 26
        if (($context["success"] ?? null)) {
            // line 27
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
            ";
        }
        // line 29
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
            ";
        }
        // line 32
        echo "  
            <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-vertical\">
              <div class=\"form-group required\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 36
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group required\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 39
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <a href=\"";
        // line 40
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"label-link pull-right\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                <input type=\"password\" name=\"password\" value=\"";
        // line 41
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              </div>
              <input type=\"submit\" value=\"";
        // line 43
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-outline btn-block\" />
              ";
        // line 44
        if (($context["redirect"] ?? null)) {
            // line 45
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 47
        echo "            </form>
          </div>
          
          <div class=\"col-sm-6 right\">
            <h2>";
        // line 51
        echo ($context["text_new_affiliate"] ?? null);
        echo "</h2>
            <div class=\"margin-b20\">";
        // line 52
        echo ($context["text_description"] ?? null);
        echo "</div>
            <a class=\"btn btn-primary\" href=\"";
        // line 53
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
        </div>
       </div>
      </div>
     ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 58
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 60
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 60,  201 => 58,  197 => 57,  188 => 53,  184 => 52,  180 => 51,  174 => 47,  168 => 45,  166 => 44,  162 => 43,  155 => 41,  149 => 40,  145 => 39,  137 => 36,  133 => 35,  128 => 33,  125 => 32,  119 => 30,  116 => 29,  110 => 27,  108 => 26,  103 => 24,  95 => 19,  91 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/affiliate/login.twig", "");
    }
}
