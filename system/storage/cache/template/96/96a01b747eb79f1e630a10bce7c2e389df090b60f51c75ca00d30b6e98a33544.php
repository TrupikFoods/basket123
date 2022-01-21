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

/* extension/basel/panel_tabs/status.twig */
class __TwigTemplate_007708d583bfd6692d6ac3b3b302fcec395f2c4cdc6d9032bb4cfeb59ef0789f extends \Twig\Template
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
        echo "<legend>Status</legend>
<div class=\"form-group\">
<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Main setting to Enable/Disable Basel theme.\">Theme Status</span></label>
    <div class=\"col-sm-10 toggle-btn\">
    <label><input type=\"radio\" name=\"settings[theme_default][theme_default_directory]\" value=\"default\" ";
        // line 5
        if ((($context["theme_default_directory"] ?? null) == "default")) {
            echo "checked=\"checked\"";
        }
        echo " /><span>Disabled</span></label>
    <label><input type=\"radio\" name=\"settings[theme_default][theme_default_directory]\" value=\"basel\" ";
        // line 6
        if ((($context["theme_default_directory"] ?? null) == "basel")) {
            echo "checked=\"checked\"";
        }
        echo " /><span>Enabled</span></label>
    </div>                   
<input type=\"hidden\" name=\"settings[config][config_theme]\" value=\"default\" />
<input type=\"hidden\" name=\"settings[basel_version][basel_theme_version]\" value=\"1.3.1.0\" />
</div>";
    }

    public function getTemplateName()
    {
        return "extension/basel/panel_tabs/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/panel_tabs/status.twig", "/var/www/html/admin/view/template/extension/basel/panel_tabs/status.twig");
    }
}
