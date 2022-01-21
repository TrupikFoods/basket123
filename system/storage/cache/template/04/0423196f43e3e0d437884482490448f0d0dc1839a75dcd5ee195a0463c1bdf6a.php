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

/* extension/basel/product_tabs_list.twig */
class __TwigTemplate_17f6d242951db21f27739958fb2a38cead4d30e8e8e0478253104bc7b71c72bb extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#product_tabs').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
\t    <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding-bottom:0\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                <div class=\"form-group text-right\" style=\"padding-bottom:0;margin-bottom:0;\">
                      <button type=\"button\" class=\"btn btn-primary\" id=\"button-filter\"><i class=\"fa fa-filter\"></i> ";
        // line 40
        echo ($context["button_filter"] ?? null);
        echo "</button>
                </div>
\t          </div>
            </div>
\t\t  </div>
        </div>
\t    <form action=\"";
        // line 46
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"product_tabs\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 52
        if ((($context["sort"] ?? null) == "name")) {
            // line 53
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 55
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 56
        echo "</td>
                  <td class=\"text-right\">";
        // line 57
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 58
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 61
        echo "</td>
\t\t\t\t  <td class=\"text-right\">";
        // line 62
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 63
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 67
        if (($context["product_tabs"] ?? null)) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 69
                echo "                <tr>
                  <td class=\"text-center\">
                  ";
                // line 71
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 71), ($context["selected"] ?? null))) {
                    // line 72
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 72);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 74
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 74);
                    echo "\" />
                    ";
                }
                // line 75
                echo "</td>
                  <td class=\"text-left\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 76);
                echo "</td>
                  <td class=\"text-right\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "sort_order", [], "any", false, false, false, 77);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "status", [], "any", false, false, false, 78);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "edit", [], "any", false, false, false, 79);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
        } else {
            // line 83
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 84
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 87
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 92
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 93
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=extension/basel/product_tabs&user_token=";
        // line 100
        echo ($context["token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/basel/product_tabs/autocomplete&user_token=";
        // line 115
        echo ($context["token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['tab_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
//--></script>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/basel/product_tabs_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 133,  310 => 115,  292 => 100,  282 => 93,  278 => 92,  271 => 87,  265 => 84,  262 => 83,  259 => 82,  248 => 79,  244 => 78,  240 => 77,  236 => 76,  233 => 75,  227 => 74,  221 => 72,  219 => 71,  215 => 69,  210 => 68,  208 => 67,  201 => 63,  197 => 62,  194 => 61,  186 => 60,  176 => 58,  174 => 57,  171 => 56,  163 => 55,  153 => 53,  151 => 52,  142 => 46,  133 => 40,  126 => 38,  122 => 37,  112 => 30,  108 => 28,  100 => 24,  97 => 23,  89 => 19,  87 => 18,  81 => 14,  70 => 12,  66 => 11,  61 => 9,  54 => 7,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/product_tabs_list.twig", "");
    }
}
