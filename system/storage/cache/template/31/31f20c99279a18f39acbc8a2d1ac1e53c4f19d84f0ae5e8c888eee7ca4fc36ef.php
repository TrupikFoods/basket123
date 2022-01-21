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

/* extension/basel/question_list.twig */
class __TwigTemplate_468f1d329c7e844e662dd7554fde893e552adbd8a82843310e1aa86bcc7e2796 extends \Twig\Template
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
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-question').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-product\">";
        // line 37
        echo ($context["entry_product"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_product\" value=\"";
        // line 38
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-author\">";
        // line 41
        echo ($context["entry_author"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 42
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 47
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 50
        if (($context["filter_status"] ?? null)) {
            // line 51
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 52
            echo ($context["text_no"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 54
            echo "                  <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_no"] ?? null);
            echo "</option>
                  ";
        }
        // line 57
        echo "                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 60
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 62
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 67
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
                
        <form action=\"";
        // line 72
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-question\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead style=\"white-space:nowrap\">
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">
                  ";
        // line 79
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 80
            echo "                    <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 82
            echo "                    <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                    ";
        }
        // line 84
        echo "                  </td>
                  <td class=\"text-left\">
\t\t\t\t  \t";
        // line 86
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 87
            echo "                    <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 89
            echo "                    <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        }
        // line 91
        echo "                  </td>
                  <td class=\"text-left\" style=\"width:45%\">";
        // line 92
        echo ($context["column_text"] ?? null);
        echo "</td>
                  <td class=\"text-left\">
\t\t\t\t  ";
        // line 94
        if ((($context["sort"] ?? null) == "r.date_added")) {
            // line 95
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 97
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 99
        echo "                    </td>
                    <td class=\"text-left\">
\t\t\t\t\t";
        // line 101
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 102
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 104
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 106
        echo "                    </td>
                    <td class=\"text-left\">";
        // line 107
        echo ($context["column_info"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 108
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 112
        if (($context["questions"] ?? null)) {
            // line 113
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 114
                echo "                <tr>
                  <td class=\"text-center\">
                  ";
                // line 116
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["question"], "question_id", [], "any", false, false, false, 116), ($context["selected"] ?? null))) {
                    // line 117
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["question"], "question_id", [], "any", false, false, false, 117);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 119
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["question"], "question_id", [], "any", false, false, false, 119);
                    echo "\" />
                    ";
                }
                // line 121
                echo "                    </td>
                  <td class=\"text-left\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 122);
                echo "</td>
                  <td class=\"text-left\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["question"], "author", [], "any", false, false, false, 123);
                echo "<br /><small>(";
                echo twig_get_attribute($this->env, $this->source, $context["question"], "email", [], "any", false, false, false, 123);
                echo ")</small></td>
                  <td class=\"text-left\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["question"], "text", [], "any", false, false, false, 124);
                echo "</td>
                  <td class=\"text-left\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["question"], "date_added", [], "any", false, false, false, 125);
                echo "</td>
                  <td class=\"text-left\">
                  ";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["question"], "status", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "            \t  <span class=\"label label-success\" style=\"font-size:100%;\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</span>
            \t  ";
                } else {
                    // line 130
                    echo "                  <span class=\"label label-danger\" style=\"font-size:100%;\">";
                    echo ($context["text_no"] ?? null);
                    echo "</span>
            \t  ";
                }
                // line 132
                echo "                  </td>
                  <td class=\"text-left\" style=\"white-space:nowrap;\">
                  ";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "                  <span class=\"label label-success\" style=\"font-size:100%;\">";
                    echo ($context["text_answered"] ?? null);
                    echo "</span>
                  ";
                } else {
                    // line 137
                    echo "                  <span class=\"label label-danger\" style=\"font-size:100%;\">";
                    echo ($context["text_not_answered"] ?? null);
                    echo "</span>
                  ";
                }
                // line 139
                echo "                  </td>
                  <td class=\"text-right\"><a href=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["question"], "edit", [], "any", false, false, false, 140);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                ";
        } else {
            // line 144
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 145
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 148
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 153
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 154
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=extension/basel/question&user_token=";
        // line 161
        echo ($context["token"] ?? null);
        echo "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script></div>
";
        // line 195
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/basel/question_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 195,  448 => 161,  438 => 154,  434 => 153,  427 => 148,  421 => 145,  418 => 144,  415 => 143,  404 => 140,  401 => 139,  395 => 137,  389 => 135,  387 => 134,  383 => 132,  377 => 130,  371 => 128,  369 => 127,  364 => 125,  360 => 124,  354 => 123,  350 => 122,  347 => 121,  341 => 119,  335 => 117,  333 => 116,  329 => 114,  324 => 113,  322 => 112,  315 => 108,  311 => 107,  308 => 106,  300 => 104,  290 => 102,  288 => 101,  284 => 99,  276 => 97,  266 => 95,  264 => 94,  259 => 92,  256 => 91,  248 => 89,  238 => 87,  236 => 86,  232 => 84,  224 => 82,  214 => 80,  212 => 79,  202 => 72,  194 => 67,  184 => 62,  179 => 60,  174 => 57,  169 => 55,  164 => 54,  159 => 52,  154 => 51,  152 => 50,  146 => 47,  136 => 42,  132 => 41,  124 => 38,  120 => 37,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/question_list.twig", "");
    }
}
