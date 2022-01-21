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

/* extension/module/invitereferrals.twig */
class __TwigTemplate_9c682eb30832c375f2722ee6751cc9dce6513c677848a1f4d6fd6f6200a2877b extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "cancel", [], "any", false, false, false, 7);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "permission", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_permission"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        } elseif ((twig_length_filter($this->env,         // line 21
($context["error"] ?? null)) > 0)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      <div style=\"margin-left: 12px;\"> <h5> If you are not Register with InviteReferrals then  <a href=\"https://www.invitereferrals.com/campaign/brand/register?utm_source=openCart&utm_medium=plugins&ss=openCart\" class=\"btn btn-primary form-horizontal\"  target=\"_blank\">Click Here to Register</a> </h5></div>
        <form action=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "save", [], "any", false, false, false, 32);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-brandID\">BrandID</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"brandID\" value=\"";
        // line 36
        echo ($context["brandID"] ?? null);
        echo "\" placeholder=\"Enter your BrandID\" id=\"input-brandID\" class=\"form-control\" />
              ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "brandID", [], "any", false, false, false, 37)) {
            // line 38
            echo "              <div class=\"text-danger\">";
            echo ($context["error_brandID"] ?? null);
            echo "</div>
              ";
        }
        // line 40
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-encryptedKey\">Encrypted Key</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"encryptedKey\" value=\"";
        // line 45
        echo ($context["encryptedKey"] ?? null);
        echo "\" placeholder=\"Enter your Encrypted Key\" id=\"input-encryptedKey\" class=\"form-control\" />
              ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "encryptedKey", [], "any", false, false, false, 46)) {
            // line 47
            echo "              <div class=\"text-danger\">";
            echo ($context["error_encryptedKey"] ?? null);
            echo "</div>
              ";
        }
        // line 49
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-secretKey\">Secret Key</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"secretKey\" value=\"";
        // line 54
        echo ($context["secretKey"] ?? null);
        echo "\" placeholder=\"Enter your Secret Key\" id=\"input-secretKey\" class=\"form-control\" />
              ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "secretKey", [], "any", false, false, false, 55)) {
            // line 56
            echo "              <div class=\"text-danger\">";
            echo ($context["error_secretKey"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "            </div>
          </div>
          <input type=\"hidden\"name=\"module_id\" value=\"";
        // line 60
        echo ($context["module_id"] ?? null);
        echo "\" />
           <input type=\"hidden\"name=\"status\" value=\"1\" />
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 67
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/invitereferrals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 67,  173 => 60,  169 => 58,  163 => 56,  161 => 55,  157 => 54,  150 => 49,  144 => 47,  142 => 46,  138 => 45,  131 => 40,  125 => 38,  123 => 37,  119 => 36,  112 => 32,  105 => 28,  101 => 26,  93 => 22,  91 => 21,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/invitereferrals.twig", "");
    }
}
