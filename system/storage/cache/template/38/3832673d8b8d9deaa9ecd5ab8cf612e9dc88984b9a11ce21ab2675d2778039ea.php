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

/* extension/module/basel_layerslider.twig */
class __TwigTemplate_d1016d0602c8ae87d96ff1104d81f5ccb778f375c930daa0cc27529ae87b56d5 extends \Twig\Template
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
        if (($context["contrast_color"] ?? null)) {
            // line 3
            echo "<style>
.slide-preview-wrapper .btn-contrast, 
.slide-preview-wrapper a.btn-contrast, 
.slide-preview-wrapper .btn-contrast-outline:hover {
\tbackground-color:";
            // line 7
            echo ($context["contrast_color"] ?? null);
            echo ";
}
.slide-preview-wrapper .btn-contrast-outline {
\tborder-color:";
            // line 10
            echo ($context["contrast_color"] ?? null);
            echo ";
\tcolor:";
            // line 11
            echo ($context["contrast_color"] ?? null);
            echo ";
}
</style>
";
        }
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"";
        // line 16
        if (($context["fullwidth"] ?? null)) {
            echo "fullwidth";
        }
        echo "\">
 <div class=\"page-header\">
  <div class=\"container-fluid\">
  <div class=\"pull-right\">
  ";
        // line 20
        if (($context["has_module_id"] ?? null)) {
            // line 21
            echo "  <a class=\"btn btn-success\" onclick=\"\$('#save').val('stay');\$('#form-layerslider').submit();\">";
            echo ($context["button_save_stay"] ?? null);
            echo "</a>
  ";
        }
        // line 23
        echo "  <button type=\"submit\" form=\"form-layerslider\" class=\"btn btn-primary\">";
        echo ($context["button_save"] ?? null);
        echo "</button>
  <a href=\"";
        // line 24
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_cancel"] ?? null);
        echo "</a>
  </div>
  
      \t<h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      \t<ul class=\"breadcrumb\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 30
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "       </ul>
      </div>
     </div>

    <div class=\"container-fluid\">
    
    <!-- Notification messages -->
    ";
        // line 39
        if (($context["error_warning"] ?? null)) {
            // line 40
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 44
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 45
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 49
        echo "    
     <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 52
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        
        <form action=\"";
        // line 56
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layerslider\" class=\"\">
        <input type=\"hidden\" name=\"save\" id=\"save\" value=\"0\">
          
        <!-- Tab Headings -->
        <ul class=\"nav nav-tabs master\" role=\"tablist\">
        <li role=\"presentation\" ";
        // line 61
        if ( !($context["has_module_id"] ?? null)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#home\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-cog\"></i> ";
        echo ($context["text_general_settings"] ?? null);
        echo "</a></li>
        <li role=\"presentation\"><a href=\"#fonts\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-font\"></i> ";
        // line 62
        echo ($context["text_google_fonts"] ?? null);
        echo "</a></li>
        <li role=\"presentation\" ";
        // line 63
        if (($context["has_module_id"] ?? null)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#slides\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-bars\"></i> ";
        echo ($context["text_slides"] ?? null);
        echo "</a></li>
        </ul>
        
        <!-- Tab content -->
        <div class=\"tab-content\">
        <!-- General Settings -->
        <div role=\"tabpanel\" class=\"tab-pane ";
        // line 69
        if ( !($context["has_module_id"] ?? null)) {
            echo "active";
        }
        echo "\" id=\"home\">
        
        <div class=\"form-horizontal\">
        
        <div class=\"form-group\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10 pull-left-2\">
              <h3 class=\"first\">";
        // line 76
        echo ($context["h3_module_settings"] ?? null);
        echo "</h3>
            </div>
          </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 80
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 83
        if (($context["status"] ?? null)) {
            // line 84
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 87
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 88
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 90
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 94
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input name=\"name\" id=\"input-name\" class=\"form-control\" value=\"";
        // line 96
        echo ($context["name"] ?? null);
        echo "\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 100
        echo ($context["text_preview_language"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"lang\" id=\"input-lang\" class=\"form-control\">
               ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 104
            echo "                ";
            if ((($context["lang"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104))) {
                // line 105
                echo "\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 105);
                echo "</option>
                ";
            } else {
                // line 107
                echo "\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 107);
                echo "</option>
                ";
            }
            // line 109
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10 pull-left-2\">
              <h3>";
        // line 116
        echo ($context["h3_slideshow_sizing"] ?? null);
        echo "</h3>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 120
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input name=\"width\" id=\"input-width\" class=\"form-control\" value=\"";
        // line 122
        echo ($context["width"] ?? null);
        echo "\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 126
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input name=\"height\" id=\"input-height\" class=\"form-control\" value=\"";
        // line 128
        echo ($context["height"] ?? null);
        echo "\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 132
        echo ($context["entry_minheight"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input name=\"minheight\" id=\"input-minheight\" class=\"form-control\" value=\"";
        // line 134
        echo ($context["minheight"] ?? null);
        echo "\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 138
        echo ($context["entry_fullwidth"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"fullwidth\" id=\"input-fullwidth\" class=\"form-control\">
                ";
        // line 141
        if (($context["fullwidth"] ?? null)) {
            // line 142
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 143
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 145
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 146
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 148
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-margin_bottom\">";
        // line 153
        echo ($context["entry_margin_bottom"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input name=\"margin_bottom\" id=\"input-margin_bottom\" class=\"form-control\" value=\"";
        // line 155
        echo ($context["margin_bottom"] ?? null);
        echo "\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-10 pull-left-2\">
              <h3>";
        // line 162
        echo ($context["h3_slide_navigation"] ?? null);
        echo "</h3>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 167
        echo ($context["text_slide_transition"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"slide_transition\" class=\"form-control\">
                
                ";
        // line 171
        if ((($context["slide_transition"] ?? null) == "basic")) {
            // line 172
            echo "\t\t\t\t<option value=\"basic\" selected=\"selected\">Basic</option>
                ";
        } else {
            // line 174
            echo "\t\t\t\t<option value=\"basic\">Basic</option>
                ";
        }
        // line 176
        echo "                
                ";
        // line 177
        if ((($context["slide_transition"] ?? null) == "fade")) {
            // line 178
            echo "\t\t\t\t<option value=\"fade\" selected=\"selected\">Fade</option>
                ";
        } else {
            // line 180
            echo "\t\t\t\t<option value=\"fade\">Fade</option>
                ";
        }
        // line 182
        echo "                
                ";
        // line 183
        if ((($context["slide_transition"] ?? null) == "wave")) {
            // line 184
            echo "\t\t\t\t<option value=\"wave\" selected=\"selected\">Wave</option>
                ";
        } else {
            // line 186
            echo "\t\t\t\t<option value=\"wave\">Wave</option>
                ";
        }
        // line 188
        echo "                
                ";
        // line 189
        if ((($context["slide_transition"] ?? null) == "flow")) {
            // line 190
            echo "\t\t\t\t<option value=\"flow\" selected=\"selected\">Flow</option>
                ";
        } else {
            // line 192
            echo "\t\t\t\t<option value=\"flow\">Flow</option>
                ";
        }
        // line 194
        echo "                
                ";
        // line 195
        if ((($context["slide_transition"] ?? null) == "stack")) {
            // line 196
            echo "\t\t\t\t<option value=\"stack\" selected=\"selected\">Stack</option>
                ";
        } else {
            // line 198
            echo "\t\t\t\t<option value=\"stack\">Stack</option>
                ";
        }
        // line 200
        echo "                
                ";
        // line 201
        if ((($context["slide_transition"] ?? null) == "scale")) {
            // line 202
            echo "\t\t\t\t<option value=\"scale\" selected=\"selected\">Scale</option>
                ";
        } else {
            // line 204
            echo "\t\t\t\t<option value=\"scale\">Scale</option>
                ";
        }
        // line 206
        echo "                
                </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 212
        echo ($context["entry_speed"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"speed\" value=\"";
        // line 214
        echo ((($context["speed"] ?? null)) ? (($context["speed"] ?? null)) : ("20"));
        echo "\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 219
        echo ($context["entry_loop"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"loop\" class=\"form-control\">
                ";
        // line 222
        if (($context["loop"] ?? null)) {
            // line 223
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 224
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 226
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 227
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 229
        echo "              </select>
            </div>
          </div>
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 235
        echo ($context["text_nav_buttons"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"nav_buttons\" class=\"form-control\">
                
                ";
        // line 239
        if ((($context["nav_buttons"] ?? null) == "0")) {
            // line 240
            echo "\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 242
            echo "\t\t\t\t<option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 244
        echo "                
                ";
        // line 245
        if ((($context["nav_buttons"] ?? null) == "simple-arrows")) {
            // line 246
            echo "\t\t\t\t<option value=\"simple-arrows\" selected=\"selected\">";
            echo ($context["text_simple_arrows"] ?? null);
            echo "</option>
                ";
        } else {
            // line 248
            echo "\t\t\t\t<option value=\"simple-arrows\">";
            echo ($context["text_simple_arrows"] ?? null);
            echo "</option>
                ";
        }
        // line 250
        echo "                
                ";
        // line 251
        if ((($context["nav_buttons"] ?? null) == "circle-arrows")) {
            // line 252
            echo "\t\t\t\t<option value=\"circle-arrows\" selected=\"selected\">";
            echo ($context["text_circle_arrows"] ?? null);
            echo "</option>
                ";
        } else {
            // line 254
            echo "\t\t\t\t<option value=\"circle-arrows\">";
            echo ($context["text_circle_arrows"] ?? null);
            echo "</option>
                ";
        }
        // line 256
        echo "                
              </select>
            </div>
          </div>
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 263
        echo ($context["text_nav_bullets"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"nav_bullets\" class=\"form-control\">
                ";
        // line 266
        if (($context["nav_bullets"] ?? null)) {
            // line 267
            echo "\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 268
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 270
            echo "\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 271
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 273
        echo "              </select>
            </div>
          </div>
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 279
        echo ($context["text_nav_timer_bar"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"nav_timer_bar\" class=\"form-control\">
                ";
        // line 282
        if (($context["nav_timer_bar"] ?? null)) {
            // line 283
            echo "\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 284
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 286
            echo "\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 287
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 289
        echo "              </select>
            </div>
          </div>

          
          </div>
          
        </div>
        
        <!-- Google Fonts -->
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"fonts\">
        
                ";
        // line 301
        echo ($context["fonts_help_block"] ?? null);
        echo "<br />

               
                
        <table id=\"fonts\" class=\"g_fonts\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 308
        echo ($context["text_import"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 309
        echo ($context["text_name"] ?? null);
        echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
            ";
        // line 314
        $context["g_font_row"] = 1;
        // line 315
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["g_fonts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g_font"]) {
            // line 316
            echo "              <tr id=\"g_font-row";
            echo ($context["g_font_row"] ?? null);
            echo "\">
             
                <td class=\"text-left\">
                <input type=\"text\" class=\"form-control\" name=\"g_fonts[";
            // line 319
            echo ($context["g_font_row"] ?? null);
            echo "][import]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["g_font"], "import", [], "any", false, false, false, 319)) ? (twig_get_attribute($this->env, $this->source, $context["g_font"], "import", [], "any", false, false, false, 319)) : (""));
            echo "\" />
                </td>
                
                <td class=\"text-left\">
                <input type=\"text\" class=\"form-control\" name=\"g_fonts[";
            // line 323
            echo ($context["g_font_row"] ?? null);
            echo "][name]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 323)) ? (twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 323)) : (""));
            echo "\" />
                </td>

                <td class=\"text-right action\"><button type=\"button\" onclick=\"\$('#g_font-row";
            // line 326
            echo ($context["g_font_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
            ";
            // line 328
            $context["g_font_row"] = (($context["g_font_row"] ?? null) + 1);
            // line 329
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g_font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"2\"></td>
                <td class=\"text-left action\"><button type=\"button\" onclick=\"addFont();\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </div>
        
        <!-- Slides -->
        
        <div role=\"tabpanel\" class=\"tab-pane ";
        // line 342
        if (($context["has_module_id"] ?? null)) {
            echo "active";
        }
        echo "\" id=\"slides\">
         
      \t\t<ul class=\"nav nav-pills\" id=\"section\">
                ";
        // line 345
        $context["section_row"] = 1;
        // line 346
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 347
            echo "        \t\t<li><a href=\"#tab-section-";
            echo ($context["section_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-times-circle\" onclick=\"\$('a[href=\\'#tab-section-";
            echo ($context["section_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-section-";
            echo ($context["section_row"] ?? null);
            echo "').remove(); \$('#section a:first').tab('show');\"></i><i class=\"fa fa-image\"></i> ";
            echo ($context["tab_section"] ?? null);
            echo " ";
            echo ($context["section_row"] ?? null);
            echo "</a></li>
        \t\t";
            // line 348
            $context["section_row"] = (($context["section_row"] ?? null) + 1);
            // line 349
            echo "        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "        \t\t<li id=\"section-add\"><a onclick=\"addSlide();\">";
        echo ($context["text_add_section"] ?? null);
        echo " <i class=\"fa fa-long-arrow-right\"></i></a></li> 
        \t</ul>
        
      \t
        <div class=\"row\">
      \t<div class=\"col-sm-12\">
        
        <div class=\"tab-content first\">
        
        ";
        // line 359
        $context["section_row"] = 1;
        // line 360
        echo "       
      \t";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 362
            echo "           
\t\t<div class=\"tab-pane\" id=\"tab-section-";
            // line 363
            echo ($context["section_row"] ?? null);
            echo "\">
\t\t<div class=\"tab-content\">
          
          <h2>";
            // line 366
            echo ($context["text_slide_settings"] ?? null);
            echo "</h2>
          <div class=\"well\">
          <div class=\"row\">
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 371
            echo ($context["text_sort_order"] ?? null);
            echo "</label>
       \t  <input type=\"text\" class=\"form-control\" name=\"sections[";
            // line 372
            echo ($context["section_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "sort_order", [], "any", false, false, false, 372)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "sort_order", [], "any", false, false, false, 372)) : (($context["section_row"] ?? null)));
            echo "\" />
          </div> <!-- form-group ends -->
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 376
            echo ($context["text_slide_duration"] ?? null);
            echo "</label>
       \t  <input type=\"text\" class=\"form-control\" name=\"sections[";
            // line 377
            echo ($context["section_row"] ?? null);
            echo "][duration]\" id=\"duration";
            echo ($context["section_row"] ?? null);
            echo "\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "duration", [], "any", false, false, false, 377)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "duration", [], "any", false, false, false, 377)) : ("6"));
            echo "\" />
          </div> <!-- form-group ends -->
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 381
            echo ($context["text_slide_kenburn"] ?? null);
            echo "</label>
        <select name=\"sections[";
            // line 382
            echo ($context["section_row"] ?? null);
            echo "][slide_kenburn]\" class=\"form-control\">
        ";
            // line 383
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slide_kenburns"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["slide_kenburn"]) {
                // line 384
                echo "        <option value=\"";
                echo $context["key"];
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["section"], "slide_kenburn", [], "any", false, false, false, 384) == $context["key"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $context["slide_kenburn"];
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slide_kenburn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "        </select>
          </div> <!-- form-group ends -->
          
          </div> <!-- row ends -->
          
          
          <div class=\"row\">
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 395
            echo ($context["text_bg_color"] ?? null);
            echo "</label>
          <div class=\"input-group colorpicker-element\" id=\"bg_color_";
            // line 396
            echo ($context["section_row"] ?? null);
            echo "\">
          <input class=\"form-control\" name=\"sections[";
            // line 397
            echo ($context["section_row"] ?? null);
            echo "][bg_color]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 397)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 397)) : (""));
            echo "\" /><span class=\"input-group-addon\"><i></i></span>
          </div>
          </div> <!-- form-group ends -->
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 402
            echo ($context["text_link_target"] ?? null);
            echo "</label>
       \t  <input type=\"text\" class=\"form-control\" name=\"sections[";
            // line 403
            echo ($context["section_row"] ?? null);
            echo "][link]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "link", [], "any", false, false, false, 403)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "link", [], "any", false, false, false, 403)) : (""));
            echo "\" />
          </div> <!-- form-group ends -->
          
          <div class=\"form-group col-sm-4\">
          <label>";
            // line 407
            echo ($context["text_button_target"] ?? null);
            echo "</label>
          
          <select name=\"sections[";
            // line 409
            echo ($context["section_row"] ?? null);
            echo "][link_new_window]\" class=\"form-control\">
        ";
            // line 410
            if (twig_get_attribute($this->env, $this->source, $context["section"], "link_new_window", [], "any", false, false, false, 410)) {
                // line 411
                echo "\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
        <option value=\"0\">";
                // line 412
                echo ($context["text_disabled"] ?? null);
                echo "</option>
        ";
            } else {
                // line 414
                echo "        <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
        <option value=\"0\" selected=\"selected\">";
                // line 415
                echo ($context["text_disabled"] ?? null);
                echo "</option>
        ";
            }
            // line 417
            echo "        </select>
          </div> <!-- form-group ends -->
          
          </div> <!-- row ends -->
          
          </div> <!-- well ends -->
          

          
          <h2>";
            // line 426
            echo ($context["text_slide_preview"] ?? null);
            echo "</h2>
          
          <div class=\"slide-preview-wrapper\">

          <div class=\"slide-preview s";
            // line 430
            echo ($context["section_row"] ?? null);
            echo "\" style=\"
          background-image:url('";
            // line 431
            if (twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 431)) {
                echo ($context["base_url"] ?? null);
                echo "image/";
                echo twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 431);
            }
            echo "');
          background-color:";
            // line 432
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 432)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "bg_color", [], "any", false, false, false, 432)) : (""));
            echo " ;
          width:";
            // line 433
            echo ((($context["width"] ?? null)) ? (($context["width"] ?? null)) : ("1140"));
            echo "px;
          \">
                    
          <div class=\"slide-preview-inner\" style=\"width:";
            // line 436
            echo ((($context["width"] ?? null)) ? (($context["width"] ?? null)) : ("1140"));
            echo "px;height:";
            echo ((($context["height"] ?? null)) ? (($context["height"] ?? null)) : ("500"));
            echo "px\">
          
          
          ";
            // line 439
            $context["group_row"] = 0;
            // line 440
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 440)) {
                // line 441
                echo "                        
            ";
                // line 442
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 442));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 443
                    echo "            
            <!-- Text layer -->
            
           <div class=\"preview-layer-holder s";
                    // line 446
                    echo ($context["section_row"] ?? null);
                    echo " g";
                    echo ($context["group_row"] ?? null);
                    echo "\" style=\"
           top:";
                    // line 447
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 447)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["group_row"] ?? null)] ?? null) : null), "top", [], "any", false, false, false, 447)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang"] ?? null)] ?? null) : null)) ? ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 447)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["group_row"] ?? null)] ?? null) : null), "top", [], "any", false, false, false, 447)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang"] ?? null)] ?? null) : null)) : (""));
                    echo "px;
           left:";
                    // line 448
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 448)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["group_row"] ?? null)] ?? null) : null), "left", [], "any", false, false, false, 448)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang"] ?? null)] ?? null) : null)) ? ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 448)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["group_row"] ?? null)] ?? null) : null), "left", [], "any", false, false, false, 448)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang"] ?? null)] ?? null) : null)) : (""));
                    echo "px;
           \">
           
            <div class=\"preview_single_layer s";
                    // line 451
                    echo ($context["section_row"] ?? null);
                    echo " g";
                    echo ($context["group_row"] ?? null);
                    echo " layer-edit-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo " 
\t\t\t";
                    // line 452
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 452)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 452) == "button")) {
                        // line 453
                        echo "            ";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 453)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["group_row"] ?? null)] ?? null) : null), "button_class", [], "any", false, false, false, 453);
                        echo "
            ";
                    }
                    // line 455
                    echo "            \" onclick=\"layerNavigate(";
                    echo ($context["section_row"] ?? null);
                    echo ", ";
                    echo ($context["group_row"] ?? null);
                    echo ");\" style=\"
            
            z-index:";
                    // line 457
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 457)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["group_row"] ?? null)] ?? null) : null), "sort_order", [], "any", false, false, false, 457)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 457)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["group_row"] ?? null)] ?? null) : null), "sort_order", [], "any", false, false, false, 457)) : ("auto"));
                    echo ";
            
            ";
                    // line 459
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 459)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 459) == "text")) {
                        // line 460
                        echo "            font-family:";
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 460)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["group_row"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 460)) ? (twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 460)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["group_row"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 460)) : (""));
                        echo ";
            font-weight:";
                        // line 461
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 461)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["group_row"] ?? null)] ?? null) : null), "fontweight", [], "any", false, false, false, 461)) ? (twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 461)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["group_row"] ?? null)] ?? null) : null), "fontweight", [], "any", false, false, false, 461)) : (""));
                        echo ";
            font-size:";
                        // line 462
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 462)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["group_row"] ?? null)] ?? null) : null), "fontsize", [], "any", false, false, false, 462)) ? (twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 462)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["group_row"] ?? null)] ?? null) : null), "fontsize", [], "any", false, false, false, 462)) : (""));
                        echo ";
            color:";
                        // line 463
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 463)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["group_row"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 463)) ? (twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 463)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["group_row"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 463)) : (""));
                        echo ";
            background-color:";
                        // line 464
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 464)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["group_row"] ?? null)] ?? null) : null), "bg", [], "any", false, false, false, 464)) ? (twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 464)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["group_row"] ?? null)] ?? null) : null), "bg", [], "any", false, false, false, 464)) : (""));
                        echo ";
            padding:";
                        // line 465
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 465)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["group_row"] ?? null)] ?? null) : null), "padding", [], "any", false, false, false, 465)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 465)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["group_row"] ?? null)] ?? null) : null), "padding", [], "any", false, false, false, 465)) : (""));
                        echo ";
            border-radius:";
                        // line 466
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 466)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["group_row"] ?? null)] ?? null) : null), "radius", [], "any", false, false, false, 466)) ? (twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 466)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["group_row"] ?? null)] ?? null) : null), "radius", [], "any", false, false, false, 466)) : (""));
                        echo ";
            ";
                        // line 467
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 467)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["group_row"] ?? null)] ?? null) : null), "customcss", [], "any", false, false, false, 467)) ? (twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 467)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["group_row"] ?? null)] ?? null) : null), "customcss", [], "any", false, false, false, 467)) : (""));
                        echo "
            ";
                    }
                    // line 469
                    echo "            \">
            
\t\t\t<div class=\"html_decode_area\">
            ";
                    // line 472
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 472)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 472) == "text")) {
                        // line 473
                        echo "            ";
                        echo (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 473)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 473)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["lang"] ?? null)] ?? null) : null)) ? ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 473)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 473)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[($context["lang"] ?? null)] ?? null) : null)) : (""));
                        echo "
            ";
                    }
                    // line 475
                    echo "            
            ";
                    // line 476
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 476)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 476) == "button")) {
                        // line 477
                        echo "            <span>";
                        echo (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 477)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 477)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[($context["lang"] ?? null)] ?? null) : null)) ? ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 477)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 477)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[($context["lang"] ?? null)] ?? null) : null)) : (""));
                        echo "</span>
            ";
                    }
                    // line 479
                    echo "\t\t\t</div>
            
            ";
                    // line 481
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 481)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 481) == "image")) {
                        // line 482
                        echo "            <img src=\"";
                        if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 482)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 482)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[($context["lang"] ?? null)] ?? null) : null)) {
                            echo ($context["base_url"] ?? null);
                            echo "image/";
                            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 482)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 482)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[($context["lang"] ?? null)] ?? null) : null);
                        } else {
                            echo ($context["placeholder"] ?? null);
                        }
                        echo "\" alt=\"\" title=\"\" />
            ";
                    }
                    // line 483
                    echo " 
            
            </div>
            
           </div>
                        
            ";
                    // line 489
                    $context["group_row"] = (($context["group_row"] ?? null) + 1);
                    // line 490
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  <!-- foreach groups ends -->
            ";
            }
            // line 491
            echo " 
            
              
            </div> <!-- Slide preview inner ends -->
          </div> <!-- Slide preview ends -->
          </div> <!-- Slide preview wrapper ends -->
          
          <div class=\"slide-toolbar\">
          <div class=\"row\">
          <div class=\"col-sm-6\">
          <div>
       \t  <a id=\"thumb-image";
            // line 502
            echo ($context["section_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"btn btn-default\"><i class=\"fa fa-arrows-alt\"></i> ";
            echo ($context["text_change_slide_bg"] ?? null);
            echo "</a>
        <input type=\"hidden\" name=\"sections[";
            // line 503
            echo ($context["section_row"] ?? null);
            echo "][thumb_image]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 503)) ? (twig_get_attribute($this->env, $this->source, $context["section"], "thumb_image", [], "any", false, false, false, 503)) : (""));
            echo "\" id=\"input-image";
            echo ($context["section_row"] ?? null);
            echo "\" />
          </div>
          </div>
          
          <div class=\"col-sm-6 text-right\">
          <a class=\"btn btn-default\" onclick=\"addLayer(";
            // line 508
            echo ($context["section_row"] ?? null);
            echo ", 'text');\"><i class=\"fa fa-font\"></i> ";
            echo ($context["text_add_text_layer"] ?? null);
            echo "</a>
          <a class=\"btn btn-default\" onclick=\"addLayer(";
            // line 509
            echo ($context["section_row"] ?? null);
            echo ", 'button');\"><i class=\"fa fa-hand-o-up\"></i> ";
            echo ($context["text_add_button_layer"] ?? null);
            echo "</a>
          <a class=\"btn btn-default\" onclick=\"addLayer(";
            // line 510
            echo ($context["section_row"] ?? null);
            echo ", 'image');\"><i class=\"fa fa-image\"></i> ";
            echo ($context["text_add_image_layer"] ?? null);
            echo "</a>
          </div>
          </div> <!-- row ends -->
          </div>
          
          
          
\t\t<div class=\"layer-wrapper\">
        
        
        
          <div id=\"groups-";
            // line 521
            echo ($context["section_row"] ?? null);
            echo "\" class=\"layer-holder\">
          
          <div class=\"layer-table-header\">
          <div class=\"layer-table-cell icons\">
          <b class=\"pull-right\"><span>";
            // line 525
            echo ($context["text_layer_sort_order"] ?? null);
            echo "</span><span>";
            echo ($context["text_layer_parallax"] ?? null);
            echo "</span></b>
          <b>";
            // line 526
            echo ($context["text_layer_list"] ?? null);
            echo "</b>
          </div>
          <div class=\"layer-table-cell slider\"><b>";
            // line 528
            echo ($context["text_layer_in"] ?? null);
            echo "</b><b class=\"pull-right\">";
            echo ($context["text_layer_out"] ?? null);
            echo "</b></div>
          </div>
          
          ";
            // line 531
            $context["group_row"] = 0;
            // line 532
            echo "           ";
            if (twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 532)) {
                // line 533
                echo "

          \t";
                // line 535
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 535));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 536
                    echo "\t\t\t
            <div id=\"group-row-s";
                    // line 537
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" class=\"single-layer row";
                    echo ($context["group_row"] ?? null);
                    echo "\">
            
            <div class=\"main\">
          
          <div class=\"panel panel-default \">
  \t\t\t
            <div class=\"panel-heading\"><h3 class=\"panel-title\">";
                    // line 543
                    echo ($context["text_layer_settings"] ?? null);
                    echo "</h3></div>
  \t\t\t
            <div class=\"panel-body\">
            <input type=\"hidden\" name=\"sections[";
                    // line 546
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][type]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 546)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 546)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 546)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 546)) : ("text"));
                    echo "\" />\t
            

            
                <div id=\"language-s";
                    // line 550
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\">
                  <ul class=\"nav nav-tabs\" id=\"language";
                    // line 551
                    echo ($context["section_row"] ?? null);
                    echo "\">
                    ";
                    // line 552
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 553
                        echo "                    <li><a href=\"#tab-section-s";
                        echo ($context["section_row"] ?? null);
                        echo "-g";
                        echo ($context["group_row"] ?? null);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 553);
                        echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
                        // line 554
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 554);
                        echo "/";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 554);
                        echo ".png\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 554);
                        echo "\" /></a></li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 556
                    echo "                  </ul>
                 </div>
               <div class=\"tab-content\">
                ";
                    // line 559
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 560
                        echo "                <div class=\"tab-pane fade\" id=\"tab-section-s";
                        echo ($context["section_row"] ?? null);
                        echo "-g";
                        echo ($context["group_row"] ?? null);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 560);
                        echo "\">
                  
                  <h4>";
                        // line 562
                        echo ($context["text_layer_content"] ?? null);
                        echo "</h4>
                  <div class=\"row\">
                  <div class=\"col-sm-12\">
                  
                  ";
                        // line 566
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 566)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 566) == "text")) {
                            // line 567
                            echo "                  <div class=\"form-group\">
                  <textarea class=\"form-control custom-control\" name=\"sections[";
                            // line 568
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][description][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 568);
                            echo "]\" id=\"description-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 568);
                            echo "\">";
                            echo (((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = twig_get_attribute($this->env, $this->source, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 568)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 568)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 568)] ?? null) : null)) ? ((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 568)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 568)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 568)] ?? null) : null)) : (""));
                            echo "</textarea>
                 </div>
                 ";
                        }
                        // line 571
                        echo "                 
                 ";
                        // line 572
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 572)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 572) == "button")) {
                            // line 573
                            echo "                  <div class=\"form-group\">
                  <label>";
                            // line 574
                            echo ($context["text_button_text"] ?? null);
                            echo "</label>
                  <input class=\"form-control\" name=\"sections[";
                            // line 575
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][description][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 575);
                            echo "]\" id=\"button_text-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 575);
                            echo "\" value=\"";
                            echo (((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 575)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 575)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 575)] ?? null) : null)) ? ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 575)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[($context["group_row"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 575)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 575)] ?? null) : null)) : (""));
                            echo "\" />
                 </div>
                 ";
                        }
                        // line 578
                        echo "                 
                 ";
                        // line 579
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 579)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 579) == "image")) {
                            // line 580
                            echo "                 <div class=\"well\">
                 <div class=\"image_holder\">
                  <a href=\"\" id=\"thumb-image-s";
                            // line 582
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582);
                            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                <img src=\"";
                            // line 583
                            if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 583)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 583)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[($context["lang"] ?? null)] ?? null) : null)) {
                                echo ($context["base_url"] ?? null);
                                echo "image/";
                                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = twig_get_attribute($this->env, $this->source, (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 583)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 583)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 583)] ?? null) : null);
                            } else {
                                echo ($context["placeholder"] ?? null);
                            }
                            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                            echo ($context["placeholder"] ?? null);
                            echo "\" />
                </a>
                <input type=\"hidden\" name=\"sections[";
                            // line 585
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][image][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 585);
                            echo "]\" value=\"";
                            echo (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = twig_get_attribute($this->env, $this->source, (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 585)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 585)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 585)] ?? null) : null)) ? ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = twig_get_attribute($this->env, $this->source, (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 585)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[($context["group_row"] ?? null)] ?? null) : null), "image", [], "any", false, false, false, 585)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 585)] ?? null) : null)) : (""));
                            echo "\" id=\"input-image-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 585);
                            echo "\" />
                </div>
                </div>
                ";
                        }
                        // line 589
                        echo "                
                </div>
                </div> <!-- Row ends -->
                
                <h4>";
                        // line 593
                        echo ($context["text_layer_position"] ?? null);
                        echo "</h4>
                <div class=\"row border_bottom\">
            \t<div class=\"form-group col-sm-6\">
                <label>";
                        // line 596
                        echo ($context["text_offset_left"] ?? null);
                        echo "</label>
                <input class=\"form-control\" name=\"sections[";
                        // line 597
                        echo ($context["section_row"] ?? null);
                        echo "][groups][";
                        echo ($context["group_row"] ?? null);
                        echo "][left][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 597);
                        echo "]\" id=\"left-s";
                        echo ($context["section_row"] ?? null);
                        echo "-g";
                        echo ($context["group_row"] ?? null);
                        echo "-l";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 597);
                        echo "\" value=\"";
                        echo (((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = twig_get_attribute($this->env, $this->source, (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 597)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[($context["group_row"] ?? null)] ?? null) : null), "left", [], "any", false, false, false, 597)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 597)] ?? null) : null)) ? ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = twig_get_attribute($this->env, $this->source, (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 597)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[($context["group_row"] ?? null)] ?? null) : null), "left", [], "any", false, false, false, 597)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 597)] ?? null) : null)) : (""));
                        echo "\" />\t
            \t</div>
                
            \t<div class=\"form-group col-sm-6\">
                <label>";
                        // line 601
                        echo ($context["text_offset_top"] ?? null);
                        echo "</label>
                <input class=\"form-control\" name=\"sections[";
                        // line 602
                        echo ($context["section_row"] ?? null);
                        echo "][groups][";
                        echo ($context["group_row"] ?? null);
                        echo "][top][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 602);
                        echo "]\" id=\"top-s";
                        echo ($context["section_row"] ?? null);
                        echo "-g";
                        echo ($context["group_row"] ?? null);
                        echo "-l";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 602);
                        echo "\" value=\"";
                        echo (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = twig_get_attribute($this->env, $this->source, (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 602)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[($context["group_row"] ?? null)] ?? null) : null), "top", [], "any", false, false, false, 602)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 602)] ?? null) : null)) ? ((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = twig_get_attribute($this->env, $this->source, (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 602)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[($context["group_row"] ?? null)] ?? null) : null), "top", [], "any", false, false, false, 602)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 602)] ?? null) : null)) : (""));
                        echo "\" />\t
            \t</div>
            \t</div> <!-- Row ends -->
                 
                </div> <!-- tab-pane ends -->
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 607
                    echo " <!-- Foreach language ends -->
                </div>
                
                ";
                    // line 610
                    if ((twig_get_attribute($this->env, $this->source, (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 610)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 610) == "image")) {
                        // line 611
                        echo "                <h4>";
                        echo ($context["text_heading_minheight"] ?? null);
                        echo "</h4>
                <div class=\"row border_bottom\">
            \t<div class=\"form-group col-sm-12\">
                <label>";
                        // line 614
                        echo ($context["text_layer_minheight"] ?? null);
                        echo "</label>
                <input class=\"form-control\" name=\"sections[";
                        // line 615
                        echo ($context["section_row"] ?? null);
                        echo "][groups][";
                        echo ($context["group_row"] ?? null);
                        echo "][minheight]\" value=\"";
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 615)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[($context["group_row"] ?? null)] ?? null) : null), "minheight", [], "any", false, false, false, 615)) ? (twig_get_attribute($this->env, $this->source, (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 615)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[($context["group_row"] ?? null)] ?? null) : null), "minheight", [], "any", false, false, false, 615)) : ("0"));
                        echo "\" />\t
            \t</div>
                </div>
                ";
                    }
                    // line 619
                    echo "            
\t\t\t";
                    // line 620
                    if (((twig_get_attribute($this->env, $this->source, (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 620)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 620) == "text") || (twig_get_attribute($this->env, $this->source, (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 620)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 620) == "button"))) {
                        // line 621
                        echo "              <h4>";
                        echo ($context["text_layer_style"] ?? null);
                        echo "</h4>
              
              ";
                        // line 623
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 623)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 623) == "button")) {
                            // line 624
                            echo "              <div class=\"row\">
              <div class=\"form-group col-sm-12\">
                <label>";
                            // line 626
                            echo ($context["text_button_class"] ?? null);
                            echo "</label>
                <select name=\"sections[";
                            // line 627
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][button_class]\" id=\"button_class-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" class=\"form-control\">
                ";
                            // line 628
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["button_classes"] ?? null));
                            foreach ($context['_seq'] as $context["key"] => $context["button_class"]) {
                                echo "  
                <option value=\"";
                                // line 629
                                echo $context["key"];
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 629)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[($context["group_row"] ?? null)] ?? null) : null), "button_class", [], "any", false, false, false, 629) == $context["key"])) {
                                    echo "selected=\"selected\"";
                                }
                                echo ">
                ";
                                // line 630
                                echo $context["button_class"];
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['button_class'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 631
                            echo "  
                </select>
                </div>
              </div>
              <div class=\"row\">
              <div class=\"form-group col-sm-6\">
                <label>";
                            // line 637
                            echo ($context["text_button_href"] ?? null);
                            echo "</label>
                <input class=\"form-control\" name=\"sections[";
                            // line 638
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][button_href]\" id=\"button_href-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 638)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[($context["group_row"] ?? null)] ?? null) : null), "button_href", [], "any", false, false, false, 638)) ? (twig_get_attribute($this->env, $this->source, (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 638)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[($context["group_row"] ?? null)] ?? null) : null), "button_href", [], "any", false, false, false, 638)) : (""));
                            echo "\" />
                </div>
                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 641
                            echo ($context["text_button_target"] ?? null);
                            echo "</label>
                
                
                <select name=\"sections[";
                            // line 644
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][button_target]\" class=\"form-control\">
                ";
                            // line 645
                            if (twig_get_attribute($this->env, $this->source, (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 645)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[($context["group_row"] ?? null)] ?? null) : null), "button_target", [], "any", false, false, false, 645)) {
                                // line 646
                                echo "                <option value=\"1\" selected=\"selected\">";
                                echo ($context["text_enabled"] ?? null);
                                echo "</option>
                <option value=\"0\">";
                                // line 647
                                echo ($context["text_disabled"] ?? null);
                                echo "</option>
                ";
                            } else {
                                // line 649
                                echo "                <option value=\"1\">";
                                echo ($context["text_enabled"] ?? null);
                                echo "</option>
                <option value=\"0\" selected=\"selected\">";
                                // line 650
                                echo ($context["text_disabled"] ?? null);
                                echo "</option>
                ";
                            }
                            // line 652
                            echo "                </select>
                
                </div>
              </div>
              
              ";
                        }
                        // line 658
                        echo "              
              
              ";
                        // line 660
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 660)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 660) == "text")) {
                            // line 661
                            echo "              
              <div class=\"row\">
                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 664
                            echo ($context["text_font_family"] ?? null);
                            echo "</label>
                <select name=\"sections[";
                            // line 665
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][font]\" id=\"font-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" class=\"form-control\">
                <option disabled style=\"font-weight:bold\">";
                            // line 666
                            echo ($context["text_system_fonts"] ?? null);
                            echo "</option>
                
                ";
                            // line 668
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["system_fonts"] ?? null));
                            foreach ($context['_seq'] as $context["key"] => $context["system_font"]) {
                                echo "  
                <option value=\"";
                                // line 669
                                echo $context["key"];
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 669)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[($context["group_row"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 669) == $context["key"])) {
                                    echo "selected=\"selected\"";
                                }
                                echo ">
                ";
                                // line 670
                                echo $context["system_font"];
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['system_font'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 672
                            echo "                
                <option disabled style=\"font-weight:bold\">";
                            // line 673
                            echo ($context["text_google_fonts"] ?? null);
                            echo "</option>
                
                ";
                            // line 675
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["g_fonts"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["g_font"]) {
                                echo "  
                <option value=\"";
                                // line 676
                                echo twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 676);
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 676)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[($context["group_row"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 676) == twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 676))) {
                                    echo "selected=\"selected\"";
                                }
                                echo ">
                ";
                                // line 677
                                echo twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 677);
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g_font'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 679
                            echo "                
                ";
                            // line 680
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["basel_fonts"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["basel_font"]) {
                                echo "  
                <option value=\"";
                                // line 681
                                echo twig_get_attribute($this->env, $this->source, $context["basel_font"], "name", [], "any", false, false, false, 681);
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 681)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[($context["group_row"] ?? null)] ?? null) : null), "font", [], "any", false, false, false, 681) == twig_get_attribute($this->env, $this->source, $context["basel_font"], "name", [], "any", false, false, false, 681))) {
                                    echo "selected=\"selected\"";
                                }
                                echo ">
                ";
                                // line 682
                                echo twig_get_attribute($this->env, $this->source, $context["basel_font"], "name", [], "any", false, false, false, 682);
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['basel_font'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 684
                            echo "                
              </select>
                </div>
                
                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 689
                            echo ($context["text_font_weight"] ?? null);
                            echo "</label>
                <select name=\"sections[";
                            // line 690
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][fontweight]\" id=\"font-weight-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" class=\"form-control\">
                
                ";
                            // line 692
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["fontweights"] ?? null));
                            foreach ($context['_seq'] as $context["key"] => $context["fontweight"]) {
                                echo "  
                <option value=\"";
                                // line 693
                                echo $context["key"];
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 693)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[($context["group_row"] ?? null)] ?? null) : null), "fontweight", [], "any", false, false, false, 693) == $context["key"])) {
                                    echo "selected=\"selected\"";
                                }
                                echo ">
                ";
                                // line 694
                                echo $context["fontweight"];
                                echo "</option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fontweight'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 696
                            echo "                
                </select>
                </div>
                                
                </div> <!-- Row ends -->
                
                
                
                <div class=\"row\">
                
                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 707
                            echo ($context["text_font_size"] ?? null);
                            echo "</label>
                <input class=\"form-control\" name=\"sections[";
                            // line 708
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][fontsize]\" id=\"fontsize-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 708)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283[($context["group_row"] ?? null)] ?? null) : null), "fontsize", [], "any", false, false, false, 708)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 708)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[($context["group_row"] ?? null)] ?? null) : null), "fontsize", [], "any", false, false, false, 708)) : (""));
                            echo "\" />
            \t</div>

                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 712
                            echo ($context["text_color"] ?? null);
                            echo "</label>
                <div class=\"input-group\" id=\"color-s";
                            // line 713
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\">
                <input class=\"form-control\" name=\"sections[";
                            // line 714
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][color]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 714)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[($context["group_row"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 714)) ? (twig_get_attribute($this->env, $this->source, (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 714)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[($context["group_row"] ?? null)] ?? null) : null), "color", [], "any", false, false, false, 714)) : (""));
                            echo "\" /><span class=\"input-group-addon\"><i></i></span>
                </div>
            \t</div>

               </div> <!-- Row ends -->
               
               
               <div class=\"row\">
               
               <div class=\"form-group col-sm-6\">
                <label>";
                            // line 724
                            echo ($context["text_background"] ?? null);
                            echo "</label>
                <div class=\"input-group\" id=\"bg-s";
                            // line 725
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\">
                <input class=\"form-control\" name=\"sections[";
                            // line 726
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][bg]\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 726)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[($context["group_row"] ?? null)] ?? null) : null), "bg", [], "any", false, false, false, 726)) ? (twig_get_attribute($this->env, $this->source, (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 726)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[($context["group_row"] ?? null)] ?? null) : null), "bg", [], "any", false, false, false, 726)) : (""));
                            echo "\" /><span class=\"input-group-addon\"><i></i></span>
                </div>
            \t</div>

                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 731
                            echo ($context["text_padding"] ?? null);
                            echo "</label>
                <input class=\"form-control\" name=\"sections[";
                            // line 732
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][padding]\" id=\"padding-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 732)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416[($context["group_row"] ?? null)] ?? null) : null), "padding", [], "any", false, false, false, 732)) ? (twig_get_attribute($this->env, $this->source, (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 732)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[($context["group_row"] ?? null)] ?? null) : null), "padding", [], "any", false, false, false, 732)) : (""));
                            echo "\" />
            \t</div>
                
               </div> <!-- Row ends -->
               
               <div class=\"row border_bottom\">

                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 740
                            echo ($context["text_border_radius"] ?? null);
                            echo "</label>
                <input class=\"form-control\" name=\"sections[";
                            // line 741
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][radius]\" id=\"radius-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\" value=\"";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 741)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[($context["group_row"] ?? null)] ?? null) : null), "radius", [], "any", false, false, false, 741)) ? (twig_get_attribute($this->env, $this->source, (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 741)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[($context["group_row"] ?? null)] ?? null) : null), "radius", [], "any", false, false, false, 741)) : (""));
                            echo "\" />
            \t</div>
                
                <div class=\"form-group col-sm-6\">
                <label>";
                            // line 745
                            echo ($context["text_custom_css"] ?? null);
                            echo "</label>
                <textarea class=\"form-control\" name=\"sections[";
                            // line 746
                            echo ($context["section_row"] ?? null);
                            echo "][groups][";
                            echo ($context["group_row"] ?? null);
                            echo "][customcss]\" id=\"customcss-s";
                            echo ($context["section_row"] ?? null);
                            echo "-g";
                            echo ($context["group_row"] ?? null);
                            echo "\">";
                            echo ((twig_get_attribute($this->env, $this->source, (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 746)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[($context["group_row"] ?? null)] ?? null) : null), "customcss", [], "any", false, false, false, 746)) ? (twig_get_attribute($this->env, $this->source, (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 746)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[($context["group_row"] ?? null)] ?? null) : null), "customcss", [], "any", false, false, false, 746)) : (""));
                            echo "</textarea>
            \t</div>
\t\t\t
               </div> <!-- Row ends -->
               ";
                        }
                        // line 750
                        echo " <!-- layer type text ends -->
               ";
                    }
                    // line 752
                    echo "               
               <h4>";
                    // line 753
                    echo ($context["text_animation_in"] ?? null);
                    echo "</h4>
               
               <div class=\"row\">
                
                <div class=\"form-group col-sm-6\">
                <label>";
                    // line 758
                    echo ($context["text_effect"] ?? null);
                    echo "</label>
                <select name=\"sections[";
                    // line 759
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][transitionin]\" id=\"transitionin-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" class=\"form-control\">
                ";
                    // line 760
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["transitions"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["transition"]) {
                        // line 761
                        echo "                <option value=\"";
                        echo $context["key"];
                        echo "\" 
                ";
                        // line 762
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 762)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[($context["group_row"] ?? null)] ?? null) : null), "transitionin", [], "any", false, false, false, 762) == $context["key"])) {
                            echo "selected=\"selected\"";
                        }
                        echo ">
                ";
                        // line 763
                        echo $context["transition"];
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['transition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 765
                    echo "                
                </select>
        
                </div>
                
                <div class=\"form-group col-sm-6\">
                <label>";
                    // line 771
                    echo ($context["text_easing"] ?? null);
                    echo "</label>
                <select name=\"sections[";
                    // line 772
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][easingin]\" id=\"ease-in-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" class=\"form-control\">
                ";
                    // line 773
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["easings"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["easing"]) {
                        // line 774
                        echo "                <option value=\"";
                        echo $context["key"];
                        echo "\" 
                ";
                        // line 775
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 775)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[($context["group_row"] ?? null)] ?? null) : null), "easingin", [], "any", false, false, false, 775) == $context["key"])) {
                            echo "selected=\"selected\"";
                        }
                        echo ">
                ";
                        // line 776
                        echo $context["easing"];
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['easing'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 778
                    echo "                
                </select>
                </div>
                
               </div> <!-- Row ends -->
               
               <div class=\"row border_bottom\">
               
               <div class=\"form-group col-sm-6\">
                <label>";
                    // line 787
                    echo ($context["text_duration"] ?? null);
                    echo "</label>
                <input class=\"form-control\" name=\"sections[";
                    // line 788
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][durationin]\" id=\"durationin-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 788)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[($context["group_row"] ?? null)] ?? null) : null), "durationin", [], "any", false, false, false, 788)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 788)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[($context["group_row"] ?? null)] ?? null) : null), "durationin", [], "any", false, false, false, 788)) : (""));
                    echo "\" />
            \t</div>
                
               </div> <!-- Row ends -->
               
               
               
               <h4>";
                    // line 795
                    echo ($context["text_animation_out"] ?? null);
                    echo "</h4>
               
               <div class=\"row\">
                
                <div class=\"form-group col-sm-6\">
                <label>";
                    // line 800
                    echo ($context["text_effect"] ?? null);
                    echo "</label>
                <select name=\"sections[";
                    // line 801
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][transitionout]\" class=\"form-control\">
                
                ";
                    // line 803
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["transitions"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["transition"]) {
                        // line 804
                        echo "                <option value=\"";
                        echo $context["key"];
                        echo "\" 
                ";
                        // line 805
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 805)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df[($context["group_row"] ?? null)] ?? null) : null), "transitionout", [], "any", false, false, false, 805) == $context["key"])) {
                            echo "selected=\"selected\"";
                        }
                        echo ">
                ";
                        // line 806
                        echo $context["transition"];
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['transition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 808
                    echo "                </select>
                </div>
                
                <div class=\"form-group col-sm-6\">
                <label>";
                    // line 812
                    echo ($context["text_easing"] ?? null);
                    echo "</label>
                <select name=\"sections[";
                    // line 813
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][easingout]\" class=\"form-control\">
                ";
                    // line 814
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["easings"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["easing"]) {
                        // line 815
                        echo "                <option value=\"";
                        echo $context["key"];
                        echo "\" 
                ";
                        // line 816
                        if ((twig_get_attribute($this->env, $this->source, (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 816)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4[($context["group_row"] ?? null)] ?? null) : null), "easingout", [], "any", false, false, false, 816) == $context["key"])) {
                            echo "selected=\"selected\"";
                        }
                        echo ">
                ";
                        // line 817
                        echo $context["easing"];
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['easing'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 819
                    echo "                
                </select>
                </div>
                
               </div> <!-- Row ends -->
               
               <div class=\"row\">
               
               <div class=\"form-group col-sm-6\">
                <label>";
                    // line 828
                    echo ($context["text_duration"] ?? null);
                    echo "</label>
                <input class=\"form-control\" name=\"sections[";
                    // line 829
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][durationout]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 829)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[($context["group_row"] ?? null)] ?? null) : null), "durationout", [], "any", false, false, false, 829)) ? (twig_get_attribute($this->env, $this->source, (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 829)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[($context["group_row"] ?? null)] ?? null) : null), "durationout", [], "any", false, false, false, 829)) : (""));
                    echo "\" />
            \t</div>
                
               </div> <!-- Row ends -->
                
               
               </div>
               </div> 
               </div>
               
               <div class=\"layer-list\">
               <div class=\"layer-bar\">
               
               <div class=\"layer-table-cell icons\">
               <a class=\"icon selector\" onclick=\"layerNavigate(";
                    // line 843
                    echo ($context["section_row"] ?? null);
                    echo ", ";
                    echo ($context["group_row"] ?? null);
                    echo ");\"></a>
               <div class=\"icon ";
                    // line 844
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 844)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e[($context["group_row"] ?? null)] ?? null) : null), "type", [], "any", false, false, false, 844);
                    echo "\"></div>
               <a class=\"icon remove\" onclick=\"removeLayer(";
                    // line 845
                    echo ($context["section_row"] ?? null);
                    echo ", ";
                    echo ($context["group_row"] ?? null);
                    echo ");\"><i class=\"fa fa-times-circle\"></i></a>
               <div class=\"sort_holder\">
               <input class=\"form-control\" name=\"sections[";
                    // line 847
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 847)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7[($context["group_row"] ?? null)] ?? null) : null), "sort_order", [], "any", false, false, false, 847)) ? (twig_get_attribute($this->env, $this->source, (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 847)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[($context["group_row"] ?? null)] ?? null) : null), "sort_order", [], "any", false, false, false, 847)) : ("0"));
                    echo "\" id=\"sort_order";
                    echo ($context["section_row"] ?? null);
                    echo ($context["group_row"] ?? null);
                    echo "\" />
               <input class=\"form-control\" name=\"sections[";
                    // line 848
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][p_index]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 848)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd[($context["group_row"] ?? null)] ?? null) : null), "p_index", [], "any", false, false, false, 848)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 848)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e[($context["group_row"] ?? null)] ?? null) : null), "p_index", [], "any", false, false, false, 848)) : ("0"));
                    echo "\" id=\"p_index";
                    echo ($context["section_row"] ?? null);
                    echo ($context["group_row"] ?? null);
                    echo "\" />
               </div>
               
               </div>
               
               
                
                <div class=\"layer-table-cell field first\">
                <input class=\"form-control\" data-index=\"0\" style=\"width:60px;display:inline-block\" name=\"sections[";
                    // line 856
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][start]\" id=\"start-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 856)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1[($context["group_row"] ?? null)] ?? null) : null), "start", [], "any", false, false, false, 856)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 856)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[($context["group_row"] ?? null)] ?? null) : null), "start", [], "any", false, false, false, 856)) : ("0"));
                    echo "\" />
                </div>
                
                <div class=\"layer-table-cell slider\">
                <div id=\"slider-s";
                    // line 860
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\"></div>
                </div>
                
                <div class=\"layer-table-cell field last\">
               <input class=\"form-control\" data-index=\"1\" style=\"width:60px;display:inline-block\" name=\"sections[";
                    // line 864
                    echo ($context["section_row"] ?? null);
                    echo "][groups][";
                    echo ($context["group_row"] ?? null);
                    echo "][end]\" id=\"end-s";
                    echo ($context["section_row"] ?? null);
                    echo "-g";
                    echo ($context["group_row"] ?? null);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 864)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf[($context["group_row"] ?? null)] ?? null) : null), "end", [], "any", false, false, false, 864)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 864)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b[($context["group_row"] ?? null)] ?? null) : null), "end", [], "any", false, false, false, 864)) : ("6000"));
                    echo "\" />
               </div>
               
               
               </div> <!-- layer-bar ends -->
               </div>
               
          \t\t";
                    // line 871
                    $context["group_row"] = (($context["group_row"] ?? null) + 1);
                    // line 872
                    echo "                
                </div> <!-- class single-layer ends -->
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 874
                echo " <!-- foreach groups ends -->
              ";
            }
            // line 876
            echo "
          \t</div> <!-- id groups- ends -->
           </div> <!-- layer-wrapper ends -->
            
         </div> <!-- tab-content ends -->
      \t";
            // line 881
            $context["section_row"] = (($context["section_row"] ?? null) + 1);
            // line 882
            echo "      \t</div>
      \t
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 885
        echo " <!-- foreach sections ends -->
      
       </div>
      </div> 
    </div>
  </div> 
</div>
          

      
     </form>
   </div>
  </div>
 </div>
<br />

<!-- Google Fonts -->
<script type=\"text/javascript\"><!--
var deleted_layers = 0;

var g_font_row = ";
        // line 905
        echo ($context["g_font_row"] ?? null);
        echo ";
function addFont() {
\thtml  = '<tr id=\"g_font-row' + g_font_row + '\">';
\thtml += '<td class=\"text-left\">';
\thtml += '<input type=\"text\" name=\"g_fonts[' + g_font_row + '][import]\" class=\"form-control\"/>';\t
\thtml += '</td>';
\thtml += '<td class=\"text-left\">';
\thtml += '<input type=\"text\" name=\"g_fonts[' + g_font_row + '][name]\" class=\"form-control\"/>';\t
\thtml += '</td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#g_font-row' + g_font_row  + '\\').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t\$('#fonts tbody').append(html);
\tg_font_row++;
}
//--></script>


<script type=\"text/javascript\"><!--
var section_row = ";
        // line 923
        echo ($context["section_row"] ?? null);
        echo ";

function addSlide() {\t
\tgroup_row = 0;
   \thtml  = '<div class=\"tab-pane\" id=\"tab-section-' + section_row + '\">';
\thtml += '<div class=\"tab-content\">';
\thtml += '<h2>";
        // line 929
        echo ($context["text_slide_settings"] ?? null);
        echo "</h2>';
\thtml += '<div class=\"well\">';
\t
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 934
        echo ($context["text_sort_order"] ?? null);
        echo "</label>';
    html += '<input type=\"text\" class=\"form-control\" name=\"sections[' + section_row + '][sort_order]\" value=\"' + section_row + '\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 938
        echo ($context["text_slide_duration"] ?? null);
        echo "</label>';
    html += '<input type=\"text\" class=\"form-control\" id=\"duration' + section_row + '\" name=\"sections[' + section_row + '][duration]\" value=\"6\" />';
\thtml += '</div>';

\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 943
        echo ($context["text_slide_kenburn"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][slide_kenburn]\" class=\"form-control\">';
\t";
        // line 945
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_kenburns"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["slide_kenburn"]) {
            // line 946
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["slide_kenburn"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['slide_kenburn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 948
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\t
\thtml += '<div class=\"row\">';
\t
\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 955
        echo ($context["text_bg_color"] ?? null);
        echo "</label>';
\thtml += '<div class=\"input-group colorpicker-element\" id=\"bg_color_' + section_row + '\">';
    html += '<input class=\"form-control\" name=\"sections[' + section_row + '][bg_color]\" /><span class=\"input-group-addon\"><i></i></span>';
\thtml += '</div>';
\thtml += '</div>';
\t\t  
\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 962
        echo ($context["text_link_target"] ?? null);
        echo "</label>';
    html += '<input type=\"text\" class=\"form-control\" name=\"sections[' + section_row + '][link]\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-4\">';
\thtml += '<label>";
        // line 966
        echo ($context["text_button_target"] ?? null);
        echo "</label>';
\thtml += '<select class=\"form-control\" name=\"sections[' + section_row + '][link_new_window]\">';
\thtml += '<option value=\"1\">";
        // line 968
        echo ($context["text_enabled"] ?? null);
        echo "</option>';
\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 969
        echo ($context["text_disabled"] ?? null);
        echo "</option>';
\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<h2>";
        // line 975
        echo ($context["text_slide_preview"] ?? null);
        echo "</h2>';
\thtml += '<div class=\"slide-preview-wrapper\">';
\thtml += '<div class=\"slide-preview s' + section_row + '\">';
\thtml += '<div class=\"slide-preview-inner\" style=\"width:' + \$('#input-width').val() + 'px; height:' + \$('#input-height').val() + 'px; \">';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"slide-toolbar\">';
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"col-sm-6\">';
\thtml += '<div>';
\thtml += '<a id=\"thumb-image' + section_row + '\" data-toggle=\"image\" class=\"btn btn-default\"><i class=\"fa fa-arrows-alt\"></i> ";
        // line 986
        echo ($context["text_change_slide_bg"] ?? null);
        echo "</a>';
\thtml += '<input type=\"hidden\" id=\"input-image' + section_row + '\" name=\"sections[' + section_row + '][thumb_image]\" />';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"col-sm-6 text-right\">';
\thtml += '<a class=\"btn btn-default\" onclick=\"addLayer(' + section_row + ', \\'text\\''+');\"><i class=\"fa fa-font\"></i> ";
        // line 991
        echo ($context["text_add_text_layer"] ?? null);
        echo "</a> ';
\thtml += '<a class=\"btn btn-default\" onclick=\"addLayer(' + section_row + ', \\'button\\''+');\"><i class=\"fa fa-hand-o-up\"></i> ";
        // line 992
        echo ($context["text_add_button_layer"] ?? null);
        echo "</a> ';
\thtml += '<a class=\"btn btn-default\" onclick=\"addLayer(' + section_row + ', \\'image\\''+');\"><i class=\"fa fa-image\"></i> ";
        // line 993
        echo ($context["text_add_image_layer"] ?? null);
        echo "</a>';
    html += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"layer-wrapper\">';
\thtml += '<div id=\"groups-' + section_row + '\" class=\"layer-holder\">';
\thtml += '<div class=\"layer-table-header\">';
\thtml += '<div class=\"layer-table-cell icons\"><b class=\"pull-right\"><span>";
        // line 1000
        echo ($context["text_layer_sort_order"] ?? null);
        echo "</span><span>";
        echo ($context["text_layer_parallax"] ?? null);
        echo "</span></b><b>";
        echo ($context["text_layer_list"] ?? null);
        echo "</b></div>';
\thtml += '<div class=\"layer-table-cell slider\"><b>";
        // line 1001
        echo ($context["text_layer_in"] ?? null);
        echo "</b><span class=\"pull-right\"><b>";
        echo ($context["text_layer_out"] ?? null);
        echo "</b></span></div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\t
\t\$('.tab-content.first').append(html);
\t\t
\t\$('#section-add').before('<li><a href=\"#tab-section-' + section_row + '\" data-toggle=\"tab\"><i class=\"fa fa-times-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-section-' + section_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-section-' + section_row + '\\').remove(); \$(\\'#section a:first\\').tab(\\'show\\');\"></i> </i><i class=\"fa fa-image\"></i> ";
        // line 1010
        echo ($context["tab_section"] ?? null);
        echo " ' + section_row + '</a></li>');


\t\$('#section a[href=\\'#tab-section-' + section_row + '\\']').tab('show');
\t
\taddSlideScripts(section_row);
\t
\tsection_row++;
}
//--></script>

<script type=\"text/javascript\"><!--
function addLayer(section_row, layer_type) {
\tgroup_row = (\$('#groups-' + section_row + ' .single-layer').length) + (deleted_layers);
\tsort_order = \$('#groups-' + section_row + ' .single-layer').length + 1;

\thtml  = '<div id=\"group-row-s' + section_row + '-g' + group_row + '\" class=\"single-layer row' + group_row + '\">';
\thtml += '<div class=\"main\">';
\thtml += '<div class=\"panel panel-default\">';
\thtml += '<div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 1029
        echo ($context["text_layer_settings"] ?? null);
        echo "</h3></div>';
\thtml += '<div class=\"panel-body\">';
\thtml += '<input type=\"hidden\" name=\"sections[' + section_row + '][groups][' + group_row + '][type]\" value=\"' + layer_type + '\"/>';
\thtml += '<div id=\"language-s' + section_row + '-g' + group_row + '\">';
\thtml += '<ul class=\"nav nav-tabs\" id=\"language' + section_row + '\">';
\t";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1035
            echo "\thtml += '<li><a href=\"#tab-section-s' + section_row + '-g' + group_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1035);
            echo "\" data-toggle=\"tab\">';
\thtml += '<img src=\"language/";
            // line 1036
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1036);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1036);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1036);
            echo "\" />'
\thtml += '</a></li>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1039
        echo "    html += '</ul>';
\thtml += '</div>';
\thtml += '<div class=\"tab-content\">';
\t";
        // line 1042
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1043
            echo "\thtml += '<div class=\"tab-pane\" id=\"tab-section-s' + section_row + '-g' + group_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1043);
            echo "\">';
\thtml += '<h4>";
            // line 1044
            echo ($context["text_layer_content"] ?? null);
            echo "</h4>';
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"col-sm-12\">';
\tif (layer_type == 'text') { 
\thtml += '<div class=\"form-group\">';
\thtml += '<textarea class=\"form-control custom-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][description][";
            // line 1049
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1049);
            echo "]\" id=\"description-s' + section_row + '-g' + group_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1049);
            echo "\" >Layer Caption</textarea>';
\thtml += '</div>';
\t}
\tif (layer_type == 'button') { 
\thtml += '<div class=\"form-group\">';
\thtml += '<label>";
            // line 1054
            echo ($context["text_button_text"] ?? null);
            echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][description][";
            // line 1055
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1055);
            echo "]\" id=\"button_text-s' + section_row + '-g' + group_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1055);
            echo "\" value=\"button text\" />';
\thtml += '</div>';
\t}
\tif (layer_type == 'image') { 
\thtml += '<div class=\"well\">';
\thtml += '<div class=\"image_holder\">';
\thtml += '<a href=\"\" id=\"thumb-image-s' + section_row + '-g' + group_row + '-";
            // line 1061
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1061);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>';
\thtml += '<input type=\"hidden\" name=\"sections[' + section_row + '][groups][' + group_row + '][image][";
            // line 1062
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1062);
            echo "]\" id=\"input-image-s' + section_row + '-g' + group_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1062);
            echo "\" value=\"cache/no_image-100x100.png\" />';
\thtml += '</div>';
\thtml += '</div>';
\t} 
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<h4>";
            // line 1068
            echo ($context["text_layer_position"] ?? null);
            echo "</h4>';
\thtml += '<div class=\"row border_bottom\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
            // line 1071
            echo ($context["text_offset_left"] ?? null);
            echo "</label>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"sections[' + section_row + '][groups][' + group_row + '][left][";
            // line 1072
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1072);
            echo "]\" id=\"left-s' + section_row + '-g' + group_row + '-l";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1072);
            echo "\" value=\"50\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
            // line 1075
            echo ($context["text_offset_top"] ?? null);
            echo "</label>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"sections[' + section_row + '][groups][' + group_row + '][top][";
            // line 1076
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1076);
            echo "]\" id=\"top-s' + section_row + '-g' + group_row + '-l";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1076);
            echo "\" value=\"50\" />';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1082
        echo "\thtml += '</div>';
    
\tif (layer_type == 'text' || layer_type == 'button') {
\thtml += '<h4>";
        // line 1085
        echo ($context["text_layer_style"] ?? null);
        echo "</h4>';
\tif (layer_type == 'button') {
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-12\">';
\thtml += '<label>";
        // line 1089
        echo ($context["text_button_class"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][button_class]\" id=\"button_class-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1091
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_classes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["button_class"]) {
            // line 1092
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["button_class"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['button_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1094
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1099
        echo ($context["text_button_href"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][button_href]\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1103
        echo ($context["text_button_target"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][button_target]\" class=\"form-control\">';
    html += '<option value=\"0\">";
        // line 1105
        echo ($context["text_disabled"] ?? null);
        echo "</option>';
\thtml += '<option value=\"1\">";
        // line 1106
        echo ($context["text_enabled"] ?? null);
        echo "</option>';
\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\t}
\t
\tif (layer_type == 'text') {
\thtml += '<div class=\"row\">';
\t
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1116
        echo ($context["text_font_family"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][font]\" id=\"font-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\thtml += '<option disabled style=\"font-weight:bold\">";
        // line 1118
        echo ($context["text_system_fonts"] ?? null);
        echo "</option>';
\t";
        // line 1119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["system_fonts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["system_font"]) {
            // line 1120
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["system_font"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['system_font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1122
        echo "\thtml += '<option disabled style=\"font-weight:bold\">";
        echo ($context["text_google_fonts"] ?? null);
        echo "</option>';
\t";
        // line 1123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["g_fonts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["g_font"]) {
            // line 1124
            echo "    html += '<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 1124), "js");
            echo "\">';
\thtml += '";
            // line 1125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g_font"], "name", [], "any", false, false, false, 1125), "js");
            echo "';
\thtml += '</option>';     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['g_font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1128
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["basel_fonts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["basel_font"]) {
            // line 1129
            echo "\thtml += '<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["basel_font"], "name", [], "any", false, false, false, 1129), "js");
            echo "\">';
\thtml += '";
            // line 1130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["basel_font"], "name", [], "any", false, false, false, 1130), "js");
            echo "';
\thtml += '</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['basel_font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1132
        echo "\t
\thtml += '</select>';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1136
        echo ($context["text_font_weight"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][fontweight]\" id=\"font-weight-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fontweights"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["fontweight"]) {
            // line 1139
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["fontweight"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['fontweight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';

\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1147
        echo ($context["text_font_size"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][fontsize]\" id=\"fontsize-s' + section_row + '-g' + group_row + '\" value=\"24px\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1151
        echo ($context["text_color"] ?? null);
        echo "</label>';
\thtml += '<div class=\"input-group\" id=\"color-s' + section_row + '-g' + group_row + '\">';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][color]\" value=\"#222222\" /><span class=\"input-group-addon\"><i></i></span>';
\thtml += '</div>';
\thtml += '</div>';
    html += '</div>';
\t
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1160
        echo ($context["text_background"] ?? null);
        echo "</label>';
\thtml += '<div class=\"input-group\" id=\"bg-s' + section_row + '-g' + group_row + '\">';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][bg]\" value=\"\" /><span class=\"input-group-addon\"><i></i></span>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1166
        echo ($context["text_padding"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" id=\"padding-s' + section_row + '-g' + group_row + '\" name=\"sections[' + section_row + '][groups][' + group_row + '][padding]\" value=\"10px 15px 10px 15px\" />';
\thtml += '</div>';
    html += '</div>';

\thtml += '<div class=\"row border_bottom\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1173
        echo ($context["text_border_radius"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][radius]\" id=\"radius-s' + section_row + '-g' + group_row + '\" value=\"3px 3px 3px 3px\" />';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1177
        echo ($context["text_custom_css"] ?? null);
        echo "</label>';
\thtml += '<textarea class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][customcss]\"/></texarea>';
\thtml += '</div>';
    html += '</div>';
\t}
\t}
\t
\tif (layer_type == 'image') {
\thtml += '<h4>";
        // line 1185
        echo ($context["text_heading_minheight"] ?? null);
        echo "</h4>';
\thtml += '<div class=\"row border_bottom\">';
\thtml += '<div class=\"form-group col-sm-12\">';
\thtml += '<label>";
        // line 1188
        echo ($context["text_layer_minheight"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" type=\"text\" name=\"sections[' + section_row + '][groups][' + group_row + '][minheight]\"  value=\"0\" />';
\thtml += '</div>';
\thtml += '</div>';
\t}

\thtml += '<h4>";
        // line 1194
        echo ($context["text_animation_in"] ?? null);
        echo "</h4>';
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1197
        echo ($context["text_effect"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][transitionin]\" id=\"transitionin-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transitions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["transition"]) {
            // line 1200
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["transition"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['transition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1202
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1205
        echo ($context["text_easing"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][easingin]\" id=\"easingin-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easings"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["easing"]) {
            // line 1208
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["easing"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['easing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1210
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\t
\thtml += '<div class=\"row border_bottom\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1216
        echo ($context["text_duration"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][durationin]\" id=\"durationin-s' + section_row + '-g' + group_row + '\" value=\"500\" />';
\thtml += '</div>';
\thtml += '</div>';

\thtml += '<h4>";
        // line 1221
        echo ($context["text_animation_out"] ?? null);
        echo "</h4>';
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1224
        echo ($context["text_effect"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][transitionout]\" id=\"transitionout-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transitions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["transition"]) {
            // line 1227
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["transition"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['transition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1229
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1232
        echo ($context["text_easing"] ?? null);
        echo "</label>';
\thtml += '<select name=\"sections[' + section_row + '][groups][' + group_row + '][easingout]\" id=\"easingout-s' + section_row + '-g' + group_row + '\" class=\"form-control\">';
\t";
        // line 1234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easings"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["easing"]) {
            // line 1235
            echo "    html += '<option value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["easing"];
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['easing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1237
        echo "\thtml += '</select>';
\thtml += '</div>';
\thtml += '</div>';
\t
\thtml += '<div class=\"row\">';
\thtml += '<div class=\"form-group col-sm-6\">';
\thtml += '<label>";
        // line 1243
        echo ($context["text_duration"] ?? null);
        echo "</label>';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][durationout]\" id=\"durationout-s' + section_row + '-g' + group_row + '\" value=\"500\" />';
\thtml += '</div>';
\thtml += '</div>';
\t
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '<div class=\"layer-list\">';
\thtml += '<div class=\"layer-bar\">';
\thtml += '<div class=\"layer-table-cell icons\">';
\thtml += '<a class=\"icon selector\" onclick=\"layerNavigate(' + section_row + ', ' + group_row + ');\"></a>';
\thtml += '<div class=\"icon ' + layer_type + '\"></div>';
\thtml += '<a class=\"icon remove\" onclick=\"removeLayer(' + section_row + ',' + group_row + ');\"><i class=\"fa fa-times-circle\"></i></a>';\t\t   
\t
\thtml += '<div class=\"sort_holder\">';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][sort_order]\" value=\"' + sort_order + '\" id=\"sort_order' + section_row + group_row + '\" /> ';
\thtml += '<input class=\"form-control\" name=\"sections[' + section_row + '][groups][' + group_row + '][p_index]\" value=\"0\" id=\"p_index' + section_row + group_row + '\" />';
\thtml += '</div>';\t
\t
\thtml += '</div>';
\thtml += '<div class=\"layer-table-cell field first\">';
\thtml += '<input class=\"form-control\" type=\"text\" data-index=\"0\" name=\"sections[' + section_row + '][groups][' + group_row + '][start]\" id=\"start-s' + section_row + '-g' + group_row + '\" value=\"500\" />';
\thtml += '</div>';
\thtml += '<div class=\"layer-table-cell slider\">';
\thtml += '<div id=\"slider-s' + section_row + '-g' + group_row + '\"></div>';
\thtml += '</div>';
\thtml += '<div class=\"layer-table-cell field last\">';
\thtml += '<input class=\"form-control\" type=\"text\" data-index=\"1\" name=\"sections[' + section_row + '][groups][' + group_row + '][end]\" id=\"end-s' + section_row + '-g' + group_row + '\" value=\"' + ( (\$('#duration' + section_row + '').val() * 1000) - 500) + '\" />';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';
\thtml += '</div>';

\t\$('#groups-' + section_row ).append(html);
\t
\t\$('#language-s' + section_row + '-g' + group_row + ' li:first-child a').tab('show');
\t\$('#groups-' + section_row + ' .single-layer').removeClass(\"active\");
\t\$('#group-row-s' + section_row + '-g' + group_row + '').addClass(\"active\");
\t
\tif (layer_type == 'text') {
\tpreview_layer = '<div class=\"preview-layer-holder s' + section_row + ' g' + group_row + '\" style=\"top:50px;left:50px;z-index:' + sort_order + ';\"><div class=\"preview_single_layer s' + section_row + ' g' + group_row + ' layer-edit-s' + section_row + '-g' + group_row +'\" style=\"font-size:24px;color:#222222;padding:10px 15px 10px 15px;border-radius:3px 3px 3px 3px;\" onclick=\"layerNavigate(' + section_row + ',' + group_row + ');\">Layer Caption</div></div>';
\t}
\t
\tif (layer_type == 'button') {
\tpreview_layer = '<div class=\"preview-layer-holder s' + section_row + ' g' + group_row + '\" style=\"top:50px;left:50px;z-index:' + sort_order + ';\"><div class=\"preview_single_layer s' + section_row + ' g' + group_row + ' layer-edit-s' + section_row + '-g' + group_row +' btn btn-link\" style=\"\" onclick=\"layerNavigate(' + section_row + ',' + group_row + ');\"><span>button text</span></div></div>';
\t}
\t
\tif (layer_type == 'image') {
\tpreview_layer = '<div class=\"preview-layer-holder s' + section_row + ' g' + group_row + '\" style=\"top:50px;left:50px;z-index:' + sort_order + ';\"><div class=\"preview_single_layer s' + section_row + ' g' + group_row + ' layer-edit-s' + section_row + '-g' + group_row +'\" style=\"\" onclick=\"layerNavigate(' + section_row + ',' + group_row + ');\"><img src=\"";
        // line 1292
        echo ($context["placeholder"] ?? null);
        echo "\" /></div></div>';
\t}
\t
\t\$('#tab-section-' + section_row + ' .slide-preview-inner').append(preview_layer);
\t
\taddScripts(section_row, group_row);
\t
\tgroup_row++;

}
function addScripts(section_row, group_row){
// Update image
\$('#input-image-s' + section_row + '-g' + group_row + '-";
        // line 1304
        echo ($context["lang"] ?? null);
        echo "').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + ' img').attr(\"src\", (\"";
        // line 1305
        echo ($context["base_url"] ?? null);
        echo "\" + 'image/' + \$(this).val()));
});
// Make layers draggable
\$('.preview-layer-holder.s' + section_row + '.g' + group_row + '').draggable({
stop: function() { 
\$('#left-s' + section_row + '-g' + group_row + '-l";
        // line 1310
        echo ($context["lang"] ?? null);
        echo "').val(Math.round( \$(this).position().left ));
\$('#top-s' + section_row + '-g' + group_row + '-l";
        // line 1311
        echo ($context["lang"] ?? null);
        echo "').val(Math.round( \$(this).position().top ));
}
});
// Change layer position
\$('#left-s' + section_row + '-g' + group_row + '-l";
        // line 1315
        echo ($context["lang"] ?? null);
        echo "').change( function(){
\$('.preview-layer-holder.s' + section_row + '.g' + group_row + '').css(\"left\", \$(this).val() + \"px\");
});
\$('#top-s' + section_row + '-g' + group_row + '-l";
        // line 1318
        echo ($context["lang"] ?? null);
        echo "').change( function(){
\$('.preview-layer-holder.s' + section_row + '.g' + group_row + '').css(\"left\", \$(this).val() + \"px\");
});
// Change z-index
\$('#sort_order' + section_row + group_row + '').change( function(){
\$('.preview-layer-holder.s' + section_row + '.g' + group_row + '').css(\"z-index\", \$(this).val());
});
// Change text
\$('#description-s' + section_row + '-g' + group_row + '-";
        // line 1326
        echo ($context["lang"] ?? null);
        echo "').keyup( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').html( \$(this).val() );
});
\$('#button_text-s' + section_row + '-g' + group_row + '-";
        // line 1329
        echo ($context["lang"] ?? null);
        echo "').keyup( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + ' span').html( \$(this).val() );
});
// Change font-family
\$('#font-s' + section_row + '-g' + group_row + '').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"font-family\", \$(this).val());
});
// Font Size
\$('#fontsize-s' + section_row + '-g' + group_row + '').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"font-size\", \$(this).val()).css(\"height\", \"auto\");
});
// Font Weight
\$('#font-weight-s' + section_row + '-g' + group_row + '').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"font-weight\", \$(this).val());
});
// Color picker
\$('#color-s' + section_row + '-g' + group_row + '').colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"color\", \$('#color-s' + section_row + '-g' + group_row + ' input').val());
});
// Bg Color Picker
\$('#bg-s' + section_row + '-g' + group_row + '').colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"background-color\", \$('#bg-s' + section_row + '-g' + group_row + ' input').val());
});
// Padding
\$('#padding-s' + section_row + '-g' + group_row + '').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"padding\", \$(this).val()).css(\"height\", \"auto\");
});
// Border radius
\$('#radius-s' + section_row + '-g' + group_row + '').change( function(){
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').css(\"border-radius\", \$(this).val());
});
// Timer slider
\$('#slider-s' + section_row + '-g' + group_row + '').slider({
range: true,
min: 0,
max: ( (\$('#duration' + section_row + '').val() * 1000)),
step: 1,
values: [ 500 , ( (\$('#duration' + section_row + '').val() * 1000) - 500) ],
slide: function(event, ui) {
\$('#start-s' + section_row + '-g' + group_row + '').val(ui.values[0]);
\$('#end-s' + section_row + '-g' + group_row + '').val(ui.values[1]);
}
});
\$('#start-s' + section_row + '-g' + group_row + '').change(function() {
var \$this = \$(this);
\$('#slider-s' + section_row + '-g' + group_row + '').slider(\"values\", \$this.data(\"index\"), \$this.val());
});
\$('#end-s' + section_row + '-g' + group_row + '').change(function() {
var \$this = \$(this);
\$('#slider-s' + section_row + '-g' + group_row + '').slider(\"values\", \$this.data(\"index\"), \$this.val());
});
// Change button class
\$('#button_class-s' + section_row + '-g' + group_row + '').change(function() {
var \$this = \$(this);
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').alterClass( 'btn-*' );
\$('.preview_single_layer.s' + section_row + '.g' + group_row + '').addClass( \$this.val() );
});
// Fix Bootstrap Tooltip
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
}


function addSlideScripts(section_row){
// Change layer background image
\$('#input-image' + section_row).change( function(){
\$('.slide-preview.s' + section_row).css('background-image', 'url(\"";
        // line 1400
        echo ($context["base_url"] ?? null);
        echo "/image/' + \$(this).val() + '\")');
});
// Change layer background color
\$('#bg_color_' + section_row).colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.slide-preview.s' + section_row).css(\"background-color\", \$('#bg_color_' + section_row +' input').val());
});


// Fix Bootstrap Tooltip
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
}
\t
function removeLayer(section_row, group_row){
if (\$('#group-row-s' + section_row + '-g' + group_row).hasClass('active')) {
\$('#group-row-s' + section_row + '-g' + group_row).remove();
\$('.preview-layer-holder.s' + section_row + '.g' + group_row).remove();
\$('#groups-' + section_row + ' .single-layer:first').addClass('active');
} else {
\$('#group-row-s' + section_row + '-g' + group_row).remove();
\$('.preview-layer-holder.s' + section_row + '.g' + group_row).remove();
}
deleted_layers++;
}

function layerNavigate(section_row, group_row) {
\$('#groups-' + section_row + ' .single-layer').removeClass(\"active\");
\$('#group-row-s' + section_row + '-g' + group_row + '').addClass(\"active\");
}
//--></script> 


<!-- Scripts -->
<script type=\"text/javascript\"><!--
\$('#section li:first-child a').tab('show');
//--></script>

<script type=\"text/javascript\"><!--
\$('#input-fullwidth').change( function(){
if (\$(this).val() == \"1\") {
\$('#content').addClass('fullwidth');
} else {
\$('#content').removeClass('fullwidth');
}
});
";
        // line 1447
        $context["section_row"] = 1;
        // line 1448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 1449
            echo "\$('#language";
            echo ($context["section_row"] ?? null);
            echo " li:first-child a').tab('show');
\$('#groups-";
            // line 1450
            echo ($context["section_row"] ?? null);
            echo " .single-layer:first').addClass('active');
// Change layer background image
\$(\"#input-image";
            // line 1452
            echo ($context["section_row"] ?? null);
            echo "\").change( function(){
\$('.slide-preview.s";
            // line 1453
            echo ($context["section_row"] ?? null);
            echo "').css('background-image', 'url(\"";
            echo ($context["base_url"] ?? null);
            echo "/image/' + \$(this).val() + '\")');
});
// Change layer background color
\$('#bg_color_";
            // line 1456
            echo ($context["section_row"] ?? null);
            echo "').colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.slide-preview.s";
            // line 1460
            echo ($context["section_row"] ?? null);
            echo "').css(\"background-color\", \$('#bg_color_";
            echo ($context["section_row"] ?? null);
            echo " input').val());
});
";
            // line 1462
            $context["group_row"] = 0;
            // line 1463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 1463));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 1464
                echo "// Make layers draggable
\$(\".preview-layer-holder.s";
                // line 1465
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "\").draggable({
    stop: function() { 
    \$('#left-s";
                // line 1467
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-l";
                echo ($context["lang"] ?? null);
                echo "').val(Math.round( \$(this).position().left ));
\t\$('#top-s";
                // line 1468
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-l";
                echo ($context["lang"] ?? null);
                echo "').val(Math.round( \$(this).position().top ));
    }
});
// Change layer position
\$('#left-s";
                // line 1472
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-l";
                echo ($context["lang"] ?? null);
                echo "').change( function(){
\$('.preview-layer-holder.s";
                // line 1473
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"left\", \$(this).val() + \"px\");
});
\$('#top-s";
                // line 1475
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-l";
                echo ($context["lang"] ?? null);
                echo "').change( function(){
\$('.preview-layer-holder.s";
                // line 1476
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"top\", \$(this).val() + \"px\");
});
// Change image
\$('#input-image-s";
                // line 1479
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-";
                echo ($context["lang"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1480
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo " img').attr(\"src\", (\"";
                echo ($context["base_url"] ?? null);
                echo "\" + 'image/' + \$(this).val()));
});
// Change text
\$('#description-s";
                // line 1483
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-";
                echo ($context["lang"] ?? null);
                echo "').keyup( function(){
\$('.preview_single_layer.s";
                // line 1484
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').html( \$(this).val() );
});
\$('#button_text-s";
                // line 1486
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "-";
                echo ($context["lang"] ?? null);
                echo "').keyup( function(){
\$('.preview_single_layer.s";
                // line 1487
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo " span').html( \$(this).val() );
});
// Change z-index
\$('#sort_order";
                // line 1490
                echo ($context["section_row"] ?? null);
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview-layer-holder.s";
                // line 1491
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"z-index\", \$(this).val());
});
// Change font
\$('#font-s";
                // line 1494
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1495
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"font-family\", \$(this).val());
});
// Color picker
\$('#color-s";
                // line 1498
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.preview_single_layer.s";
                // line 1502
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"color\", \$('#color-s";
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo " input').val());
});
// Bg Color Picker
\$('#bg-s";
                // line 1505
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').colorpicker({
sliders: {
saturation: {maxLeft: 150, maxTop: 150},hue: { maxTop: 150},alpha: { maxTop: 150}}
}).on('changeColor.colorpicker', function(){
\$('.preview_single_layer.s";
                // line 1509
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"background-color\", \$('#bg-s";
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo " input').val());
});
// Font Size
\$('#fontsize-s";
                // line 1512
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1513
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"font-size\", \$(this).val()).css(\"height\", \"auto\");
});
// Font Weight
\$('#font-weight-s";
                // line 1516
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1517
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"font-weight\", \$(this).val());
});
// Padding
\$('#padding-s";
                // line 1520
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1521
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"padding\", \$(this).val()).css(\"height\", \"auto\");
});
// Border radius
\$('#radius-s";
                // line 1524
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').change( function(){
\$('.preview_single_layer.s";
                // line 1525
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').css(\"border-radius\", \$(this).val());
});
// Range Slider


\$(\"#slider-s";
                // line 1530
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").slider({
range: true,
min: 0,
max: (\$('#duration";
                // line 1533
                echo ($context["section_row"] ?? null);
                echo "').val() * 1000),
step: 1,
values: [ ";
                // line 1535
                echo twig_get_attribute($this->env, $this->source, (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 1535)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[($context["group_row"] ?? null)] ?? null) : null), "start", [], "any", false, false, false, 1535);
                echo " , ";
                echo twig_get_attribute($this->env, $this->source, (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = twig_get_attribute($this->env, $this->source, $context["section"], "groups", [], "any", false, false, false, 1535)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[($context["group_row"] ?? null)] ?? null) : null), "end", [], "any", false, false, false, 1535);
                echo " ],
slide: function(event, ui) {
\$('#start-s";
                // line 1537
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').val(ui.values[0]);
\$('#end-s";
                // line 1538
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "').val(ui.values[1]);
}
});
\$(\"#start-s";
                // line 1541
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").change(function() {
var \$this = \$(this);
\$(\"#slider-s";
                // line 1543
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").slider(\"values\", \$this.data(\"index\"), \$this.val());
});
\$(\"#end-s";
                // line 1545
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").change(function() {
var \$this = \$(this);
\$(\"#slider-s";
                // line 1547
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").slider(\"values\", \$this.data(\"index\"), \$this.val());
});
//Change button class
\$(\"#button_class-s";
                // line 1550
                echo ($context["section_row"] ?? null);
                echo "-g";
                echo ($context["group_row"] ?? null);
                echo "\").change(function() {
var \$this = \$(this);
\$('.preview_single_layer.s";
                // line 1552
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').alterClass( 'btn-*' );
\$('.preview_single_layer.s";
                // line 1553
                echo ($context["section_row"] ?? null);
                echo ".g";
                echo ($context["group_row"] ?? null);
                echo "').addClass( \$this.val() );
});

";
                // line 1556
                $context["group_row"] = (($context["group_row"] ?? null) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1558
            echo "
";
            // line 1559
            $context["section_row"] = (($context["section_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1561
        echo "//--></script>
<script type=\"text/javascript\">
// HTML decoder for twig engine
jQuery.fn.decHTML = function() {
  return this.each(function(){
    var me   = jQuery(this);
    var html = me.html();
    me.html(html.replace(/&amp;/g,'&').replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
  });
};
</script>
<script>
\$(document).ready(function(){
  \$(\".html_decode_area\").decHTML();
});
</script>
";
        // line 1577
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/basel_layerslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3703 => 1577,  3685 => 1561,  3679 => 1559,  3676 => 1558,  3670 => 1556,  3662 => 1553,  3656 => 1552,  3649 => 1550,  3641 => 1547,  3634 => 1545,  3627 => 1543,  3620 => 1541,  3612 => 1538,  3606 => 1537,  3599 => 1535,  3594 => 1533,  3586 => 1530,  3576 => 1525,  3570 => 1524,  3562 => 1521,  3556 => 1520,  3548 => 1517,  3542 => 1516,  3534 => 1513,  3528 => 1512,  3516 => 1509,  3507 => 1505,  3495 => 1502,  3486 => 1498,  3478 => 1495,  3472 => 1494,  3464 => 1491,  3459 => 1490,  3451 => 1487,  3443 => 1486,  3436 => 1484,  3428 => 1483,  3418 => 1480,  3410 => 1479,  3402 => 1476,  3394 => 1475,  3387 => 1473,  3379 => 1472,  3368 => 1468,  3360 => 1467,  3353 => 1465,  3350 => 1464,  3346 => 1463,  3344 => 1462,  3337 => 1460,  3330 => 1456,  3322 => 1453,  3318 => 1452,  3313 => 1450,  3308 => 1449,  3304 => 1448,  3302 => 1447,  3252 => 1400,  3178 => 1329,  3172 => 1326,  3161 => 1318,  3155 => 1315,  3148 => 1311,  3144 => 1310,  3136 => 1305,  3132 => 1304,  3117 => 1292,  3065 => 1243,  3057 => 1237,  3046 => 1235,  3042 => 1234,  3037 => 1232,  3032 => 1229,  3021 => 1227,  3017 => 1226,  3012 => 1224,  3006 => 1221,  2998 => 1216,  2990 => 1210,  2979 => 1208,  2975 => 1207,  2970 => 1205,  2965 => 1202,  2954 => 1200,  2950 => 1199,  2945 => 1197,  2939 => 1194,  2930 => 1188,  2924 => 1185,  2913 => 1177,  2906 => 1173,  2896 => 1166,  2887 => 1160,  2875 => 1151,  2868 => 1147,  2860 => 1141,  2849 => 1139,  2845 => 1138,  2840 => 1136,  2834 => 1132,  2825 => 1130,  2820 => 1129,  2815 => 1128,  2806 => 1125,  2801 => 1124,  2797 => 1123,  2792 => 1122,  2781 => 1120,  2777 => 1119,  2773 => 1118,  2768 => 1116,  2755 => 1106,  2751 => 1105,  2746 => 1103,  2739 => 1099,  2732 => 1094,  2721 => 1092,  2717 => 1091,  2712 => 1089,  2705 => 1085,  2700 => 1082,  2686 => 1076,  2682 => 1075,  2674 => 1072,  2670 => 1071,  2664 => 1068,  2653 => 1062,  2645 => 1061,  2634 => 1055,  2630 => 1054,  2620 => 1049,  2612 => 1044,  2607 => 1043,  2603 => 1042,  2598 => 1039,  2585 => 1036,  2580 => 1035,  2576 => 1034,  2568 => 1029,  2546 => 1010,  2532 => 1001,  2524 => 1000,  2514 => 993,  2510 => 992,  2506 => 991,  2498 => 986,  2484 => 975,  2475 => 969,  2471 => 968,  2466 => 966,  2459 => 962,  2449 => 955,  2440 => 948,  2429 => 946,  2425 => 945,  2420 => 943,  2412 => 938,  2405 => 934,  2397 => 929,  2388 => 923,  2367 => 905,  2345 => 885,  2336 => 882,  2334 => 881,  2327 => 876,  2323 => 874,  2315 => 872,  2313 => 871,  2295 => 864,  2286 => 860,  2271 => 856,  2253 => 848,  2242 => 847,  2235 => 845,  2231 => 844,  2225 => 843,  2204 => 829,  2200 => 828,  2189 => 819,  2181 => 817,  2175 => 816,  2170 => 815,  2166 => 814,  2160 => 813,  2156 => 812,  2150 => 808,  2142 => 806,  2136 => 805,  2131 => 804,  2127 => 803,  2120 => 801,  2116 => 800,  2108 => 795,  2090 => 788,  2086 => 787,  2075 => 778,  2067 => 776,  2061 => 775,  2056 => 774,  2052 => 773,  2042 => 772,  2038 => 771,  2030 => 765,  2022 => 763,  2016 => 762,  2011 => 761,  2007 => 760,  1997 => 759,  1993 => 758,  1985 => 753,  1982 => 752,  1978 => 750,  1962 => 746,  1958 => 745,  1943 => 741,  1939 => 740,  1920 => 732,  1916 => 731,  1904 => 726,  1898 => 725,  1894 => 724,  1877 => 714,  1871 => 713,  1867 => 712,  1852 => 708,  1848 => 707,  1835 => 696,  1827 => 694,  1819 => 693,  1813 => 692,  1802 => 690,  1798 => 689,  1791 => 684,  1783 => 682,  1775 => 681,  1769 => 680,  1766 => 679,  1758 => 677,  1750 => 676,  1744 => 675,  1739 => 673,  1736 => 672,  1728 => 670,  1720 => 669,  1714 => 668,  1709 => 666,  1699 => 665,  1695 => 664,  1690 => 661,  1688 => 660,  1684 => 658,  1676 => 652,  1671 => 650,  1666 => 649,  1661 => 647,  1656 => 646,  1654 => 645,  1648 => 644,  1642 => 641,  1628 => 638,  1624 => 637,  1616 => 631,  1608 => 630,  1600 => 629,  1594 => 628,  1584 => 627,  1580 => 626,  1576 => 624,  1574 => 623,  1568 => 621,  1566 => 620,  1563 => 619,  1552 => 615,  1548 => 614,  1541 => 611,  1539 => 610,  1534 => 607,  1510 => 602,  1506 => 601,  1487 => 597,  1483 => 596,  1477 => 593,  1471 => 589,  1452 => 585,  1439 => 583,  1431 => 582,  1427 => 580,  1425 => 579,  1422 => 578,  1404 => 575,  1400 => 574,  1397 => 573,  1395 => 572,  1392 => 571,  1374 => 568,  1371 => 567,  1369 => 566,  1362 => 562,  1352 => 560,  1348 => 559,  1343 => 556,  1331 => 554,  1322 => 553,  1318 => 552,  1314 => 551,  1308 => 550,  1297 => 546,  1291 => 543,  1278 => 537,  1275 => 536,  1271 => 535,  1267 => 533,  1264 => 532,  1262 => 531,  1254 => 528,  1249 => 526,  1243 => 525,  1236 => 521,  1220 => 510,  1214 => 509,  1208 => 508,  1196 => 503,  1190 => 502,  1177 => 491,  1168 => 490,  1166 => 489,  1158 => 483,  1146 => 482,  1144 => 481,  1140 => 479,  1134 => 477,  1132 => 476,  1129 => 475,  1123 => 473,  1121 => 472,  1116 => 469,  1111 => 467,  1107 => 466,  1103 => 465,  1099 => 464,  1095 => 463,  1091 => 462,  1087 => 461,  1082 => 460,  1080 => 459,  1075 => 457,  1067 => 455,  1061 => 453,  1059 => 452,  1049 => 451,  1043 => 448,  1039 => 447,  1033 => 446,  1028 => 443,  1024 => 442,  1021 => 441,  1018 => 440,  1016 => 439,  1008 => 436,  1002 => 433,  998 => 432,  990 => 431,  986 => 430,  979 => 426,  968 => 417,  963 => 415,  958 => 414,  953 => 412,  948 => 411,  946 => 410,  942 => 409,  937 => 407,  928 => 403,  924 => 402,  914 => 397,  910 => 396,  906 => 395,  895 => 386,  880 => 384,  876 => 383,  872 => 382,  868 => 381,  857 => 377,  853 => 376,  844 => 372,  840 => 371,  832 => 366,  826 => 363,  823 => 362,  819 => 361,  816 => 360,  814 => 359,  801 => 350,  795 => 349,  793 => 348,  780 => 347,  775 => 346,  773 => 345,  765 => 342,  751 => 330,  745 => 329,  743 => 328,  738 => 326,  730 => 323,  721 => 319,  714 => 316,  709 => 315,  707 => 314,  699 => 309,  695 => 308,  685 => 301,  671 => 289,  666 => 287,  661 => 286,  656 => 284,  651 => 283,  649 => 282,  643 => 279,  635 => 273,  630 => 271,  625 => 270,  620 => 268,  615 => 267,  613 => 266,  607 => 263,  598 => 256,  592 => 254,  586 => 252,  584 => 251,  581 => 250,  575 => 248,  569 => 246,  567 => 245,  564 => 244,  558 => 242,  552 => 240,  550 => 239,  543 => 235,  535 => 229,  530 => 227,  525 => 226,  520 => 224,  515 => 223,  513 => 222,  507 => 219,  499 => 214,  494 => 212,  486 => 206,  482 => 204,  478 => 202,  476 => 201,  473 => 200,  469 => 198,  465 => 196,  463 => 195,  460 => 194,  456 => 192,  452 => 190,  450 => 189,  447 => 188,  443 => 186,  439 => 184,  437 => 183,  434 => 182,  430 => 180,  426 => 178,  424 => 177,  421 => 176,  417 => 174,  413 => 172,  411 => 171,  404 => 167,  396 => 162,  386 => 155,  381 => 153,  374 => 148,  369 => 146,  364 => 145,  359 => 143,  354 => 142,  352 => 141,  346 => 138,  339 => 134,  334 => 132,  327 => 128,  322 => 126,  315 => 122,  310 => 120,  303 => 116,  295 => 110,  289 => 109,  281 => 107,  273 => 105,  270 => 104,  266 => 103,  260 => 100,  253 => 96,  248 => 94,  242 => 90,  237 => 88,  232 => 87,  227 => 85,  222 => 84,  220 => 83,  214 => 80,  207 => 76,  195 => 69,  182 => 63,  178 => 62,  170 => 61,  162 => 56,  155 => 52,  150 => 49,  142 => 45,  139 => 44,  131 => 40,  129 => 39,  120 => 32,  109 => 30,  105 => 29,  100 => 27,  92 => 24,  87 => 23,  81 => 21,  79 => 20,  70 => 16,  66 => 15,  59 => 11,  55 => 10,  49 => 7,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/basel_layerslider.twig", "");
    }
}
