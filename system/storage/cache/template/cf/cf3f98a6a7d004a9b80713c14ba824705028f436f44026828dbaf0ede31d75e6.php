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

/* sale/return_form.twig */
class __TwigTemplate_33e0aeeabb3f47b50fdd460349a4d1346126741ad731c7045ca67d674f638e32 extends \Twig\Template
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
      <button type=\"submit\" form=\"form-return\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
      <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a> </div>
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
            echo "      <li><a href=\"";
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
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
        ";
        // line 29
        if (($context["return_id"] ?? null)) {
            // line 30
            echo "        <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
        ";
        }
        // line 32
        echo "      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab-general\">
          <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-return\" class=\"form-horizontal\">
            <fieldset>
              <legend>";
        // line 37
        echo ($context["text_order"] ?? null);
        echo "</legend>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 39
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"order_id\" value=\"";
        // line 41
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                  ";
        // line 42
        if (($context["error_order_id"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
                  ";
        }
        // line 45
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 48
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 51
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer\">";
        // line 59
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 61
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 62
        echo ($context["customer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 66
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 68
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                  ";
        // line 69
        if (($context["error_firstname"] ?? null)) {
            // line 70
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                  ";
        }
        // line 72
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 75
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 77
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                  ";
        // line 78
        if (($context["error_lastname"] ?? null)) {
            // line 79
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                  ";
        }
        // line 81
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 84
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 86
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 87
        if (($context["error_email"] ?? null)) {
            // line 88
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 90
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 93
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 95
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 96
        if (($context["error_telephone"] ?? null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 99
        echo "                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 103
        echo ($context["text_product"] ?? null);
        echo "</legend>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"";
        // line 107
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 108
        echo ($context["product_id"] ?? null);
        echo "\" />
                  ";
        // line 109
        if (($context["error_product"] ?? null)) {
            // line 110
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
                  ";
        }
        // line 112
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 115
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 117
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                  ";
        // line 118
        if (($context["error_model"] ?? null)) {
            // line 119
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 123
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 125
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-reason\">";
        // line 129
        echo ($context["entry_return_reason"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_reason_id\" id=\"input-return-reason\" class=\"form-control\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 133
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 133) == ($context["return_reason_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 134);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 134);
                echo "</option>
                    ";
            } else {
                // line 136
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 136);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 136);
                echo "</option>
                    ";
            }
            // line 138
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-opened\">";
        // line 143
        echo ($context["entry_opened"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"opened\" id=\"input-opened\" class=\"form-control\">
                    ";
        // line 146
        if (($context["opened"] ?? null)) {
            // line 147
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_opened"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 148
            echo ($context["text_unopened"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 150
            echo "                    <option value=\"1\">";
            echo ($context["text_opened"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 151
            echo ($context["text_unopened"] ?? null);
            echo "</option>
                    ";
        }
        // line 153
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 157
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 159
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-action\">";
        // line 163
        echo ($context["entry_return_action"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_action_id\" id=\"input-return-action\" class=\"form-control\">
                    <option value=\"0\"></option>
                    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_action"]) {
            // line 168
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 168) == ($context["return_action_id"] ?? null))) {
                // line 169
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 169);
                echo "\" selected=\"selected\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["return_action"], "name", [], "any", false, false, false, 169);
                echo "</option>
                    ";
            } else {
                // line 171
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 171);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_action"], "name", [], "any", false, false, false, 171);
                echo "</option>
                    ";
            }
            // line 173
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                  </select>
                </div>
              </div>
              ";
        // line 177
        if ( !($context["return_id"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-status\">";
            // line 179
            echo ($context["entry_return_status"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-control\">
                    ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
                // line 183
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 183) == ($context["return_status_id"] ?? null))) {
                    // line 184
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 184);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 184);
                    echo "</option>
                    ";
                } else {
                    // line 186
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 186);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 186);
                    echo "</option>
                    ";
                }
                // line 188
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                  </select>
                </div>
              </div>
              ";
        }
        // line 193
        echo "            </fieldset>
          </form>
        </div>
        ";
        // line 196
        if (($context["return_id"] ?? null)) {
            // line 197
            echo "        <div class=\"tab-pane\" id=\"tab-history\">
          <fieldset>
            <legend>";
            // line 199
            echo ($context["text_history"] ?? null);
            echo "</legend>
            <div id=\"history\"></div>
          </fieldset>
          <br />
          <fieldset>
            <legend>";
            // line 204
            echo ($context["text_history_add"] ?? null);
            echo "</legend>
            <form class=\"form-horizontal\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-return-status\">";
            // line 207
            echo ($context["entry_return_status"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-control\">
                    ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
                // line 211
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 211) == ($context["return_status_id"] ?? null))) {
                    // line 212
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 212);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 212);
                    echo "</option>
                    ";
                } else {
                    // line 214
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 214);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 214);
                    echo "</option>
                    ";
                }
                // line 216
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
            // line 221
            echo ($context["entry_notify"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-history-comment\">";
            // line 227
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" id=\"input-history-comment\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 233
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_history_add"] ?? null);
            echo "</button>
              </div>
            </form>
          </fieldset>
        </div>
        ";
        }
        // line 239
        echo "      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 246
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['customer_group'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\tfirstname: item['firstname'],
\t\t\t\t\t\tlastname: item['lastname'],
\t\t\t\t\t\temail: item['email'],
\t\t\t\t\t\ttelephone: item['telephone']\t\t\t
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customer\\']').val(item['label']);
\t\t\$('input[name=\\'customer_id\\']').val(item['value']);
\t\t\$('input[name=\\'firstname\\']').val(item['firstname']);
\t\t\$('input[name=\\'lastname\\']').val(item['lastname']);
\t\t\$('input[name=\\'email\\']').val(item['email']);
\t\t\$('input[name=\\'telephone\\']').val(item['telephone']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 277
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id'],
\t\t\t\t\t\tmodel: item['model']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t
\t\t\$('input[name=\\'model\\']').val(item['model']);\t
\t}
});

\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=sale/return/history&user_token=";
        // line 303
        echo ($context["user_token"] ?? null);
        echo "&return_id=";
        echo ($context["return_id"] ?? null);
        echo "');

\$('#button-history').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=sale/return/addhistory&user_token=";
        // line 309
        echo ($context["user_token"] ?? null);
        echo "&return_id=";
        echo ($context["return_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'return_status_id=' + encodeURIComponent(\$('#tab-history select[name=\\'return_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');\t
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');\t
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\tif (json['error']) {
\t\t\t\t \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').load('index.php?route=sale/return/history&user_token=";
        // line 327
        echo ($context["user_token"] ?? null);
        echo "&return_id=";
        echo ($context["return_id"] ?? null);
        echo "');
\t\t\t\t
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#tab-history textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t}
\t});
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 339
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 343
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 343,  756 => 339,  739 => 327,  716 => 309,  705 => 303,  676 => 277,  642 => 246,  633 => 239,  622 => 233,  613 => 227,  604 => 221,  598 => 217,  592 => 216,  584 => 214,  576 => 212,  573 => 211,  569 => 210,  563 => 207,  557 => 204,  549 => 199,  545 => 197,  543 => 196,  538 => 193,  532 => 189,  526 => 188,  518 => 186,  510 => 184,  507 => 183,  503 => 182,  497 => 179,  494 => 178,  492 => 177,  487 => 174,  481 => 173,  473 => 171,  465 => 169,  462 => 168,  458 => 167,  451 => 163,  442 => 159,  437 => 157,  431 => 153,  426 => 151,  421 => 150,  416 => 148,  411 => 147,  409 => 146,  403 => 143,  397 => 139,  391 => 138,  383 => 136,  376 => 134,  371 => 133,  367 => 132,  361 => 129,  352 => 125,  347 => 123,  342 => 120,  336 => 119,  334 => 118,  328 => 117,  323 => 115,  318 => 112,  312 => 110,  310 => 109,  306 => 108,  300 => 107,  293 => 105,  288 => 103,  282 => 99,  276 => 97,  274 => 96,  268 => 95,  263 => 93,  258 => 90,  252 => 88,  250 => 87,  244 => 86,  239 => 84,  234 => 81,  228 => 79,  226 => 78,  220 => 77,  215 => 75,  210 => 72,  204 => 70,  202 => 69,  196 => 68,  191 => 66,  184 => 62,  178 => 61,  173 => 59,  160 => 51,  154 => 48,  149 => 45,  143 => 43,  141 => 42,  135 => 41,  130 => 39,  125 => 37,  120 => 35,  115 => 32,  109 => 30,  107 => 29,  103 => 28,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/return_form.twig", "");
    }
}
