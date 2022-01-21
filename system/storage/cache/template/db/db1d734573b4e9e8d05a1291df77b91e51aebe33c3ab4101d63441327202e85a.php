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

/* basel/template/extension/quickcheckout/register.twig */
class __TwigTemplate_63edea27dfc6e91a828c638a0c803cdde660a8ee8838b6eb68baa2f9f5c936c4 extends \Twig\Template
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
        echo "<br />
<div style=\"overflow:auto;\">
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 4
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 8
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t<input type=\"password\" name=\"confirm\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-xs-12\" style=\"clear:both;border-bottom:1px solid #dddddd;margin:10px 0px;\">
\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["field_newsletter"] ?? null), "required", [], "any", false, false, false, 12)) {
            // line 13
            echo "\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" checked=\"checked\" />
\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 14
($context["field_newsletter"] ?? null), "display", [], "any", false, false, false, 14)) {
            // line 15
            echo "\t  ";
            if (twig_get_attribute($this->env, $this->source, ($context["field_newsletter"] ?? null), "default", [], "any", false, false, false, 15)) {
                echo " 
\t  <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" checked=\"checked\" />
\t  ";
            } else {
                // line 17
                echo "   
\t  <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
\t  ";
            }
            // line 20
            echo "\t  <label for=\"newsletter\">";
            echo ($context["entry_newsletter"] ?? null);
            echo "</label><br />
\t";
        } else {
            // line 21
            echo "   
    <input type=\"checkbox name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" />
\t";
        }
        // line 24
        echo "\t";
        if (($context["text_agree"] ?? null)) {
            // line 25
            echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agree-reg\" />
\t<label for=\"agree-reg\">";
            // line 26
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t";
        }
        // line 27
        echo " 
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  92 => 26,  89 => 25,  86 => 24,  81 => 21,  75 => 20,  70 => 17,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/register.twig", "");
    }
}
