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

/* extension/basel/question_form.twig */
class __TwigTemplate_016eec94fe4ca95f77379e69a8c6f651969c898694384f0a3d9a3a66657e73c0 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-question\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
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
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-question\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 29
        echo ($context["entry_author"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 31
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_author"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_author"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 41
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 42
        if (($context["error_email"] ?? null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 49
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 51
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 52
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 53
        if (($context["error_product"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 60
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 62
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
              ";
        // line 63
        if (($context["error_text"] ?? null)) {
            // line 64
            echo "              <span class=\"text-danger\">";
            echo ($context["error_text"] ?? null);
            echo "</span>
              ";
        }
        // line 66
        echo "            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 70
        echo ($context["entry_answer"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"answer\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 72
        echo ($context["entry_answer"] ?? null);
        echo "\" id=\"input-answer\" class=\"form-control\">";
        echo ($context["answer"] ?? null);
        echo "</textarea>
            </div>
          </div>
          

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 78
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 81
        if (($context["status"] ?? null)) {
            // line 82
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 83
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        } else {
            // line 85
            echo "                <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 86
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        }
        // line 88
        echo "              </select>
            </div>
          </div>
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 94
        echo ($context["entry_notify_help"] ?? null);
        echo "\">";
        echo ($context["entry_notify"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"notify\" id=\"input-notify\" class=\"form-control\">
                ";
        // line 97
        if (($context["notify"] ?? null)) {
            // line 98
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 99
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        } else {
            // line 101
            echo "                <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 102
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        }
        // line 104
        echo "              </select>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 116
        echo ($context["token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
";
        // line 134
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/basel/question_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 134,  309 => 116,  295 => 104,  290 => 102,  285 => 101,  280 => 99,  275 => 98,  273 => 97,  265 => 94,  257 => 88,  252 => 86,  247 => 85,  242 => 83,  237 => 82,  235 => 81,  229 => 78,  218 => 72,  213 => 70,  207 => 66,  201 => 64,  199 => 63,  193 => 62,  188 => 60,  182 => 56,  176 => 54,  174 => 53,  170 => 52,  164 => 51,  157 => 49,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/question_form.twig", "");
    }
}
