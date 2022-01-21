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

/* basel/template/common/widgets/popup.twig */
class __TwigTemplate_c30f7b7ce385aa23a10d489b728a6a0ee4117432812f099d5b38228dd2157e84 extends \Twig\Template
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
        echo "<div style=\"width:";
        echo ($context["popup_width"] ?? null);
        echo "px;max-width:100%;\">
<div class=\"table popup-window dark_field text-center\" style=\"height:";
        // line 2
        echo ($context["popup_height"] ?? null);
        echo "px;\">

";
        // line 4
        if (($context["img"] ?? null)) {
            // line 5
            echo "<div class=\"table-cell img-cell\">
<img src=\"";
            // line 6
            echo ($context["img"] ?? null);
            echo "\" alt=\"\" />
</div>
";
        }
        // line 9
        echo "
<div class=\"table-cell content-cell w100\">
";
        // line 11
        if ((isset($context["popup_title"]) || array_key_exists("popup_title", $context))) {
            // line 12
            echo "<h2>";
            echo ($context["popup_title"] ?? null);
            echo "</h2>
";
        }
        // line 14
        if ((($context["popup_content_block"] ?? null) && (($context["popup_content_block"] ?? null) != "<p><br></p>"))) {
            // line 15
            echo ($context["popup_content_block"] ?? null);
            echo "
";
        }
        // line 17
        echo "</div>

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/widgets/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  72 => 15,  70 => 14,  64 => 12,  62 => 11,  58 => 9,  52 => 6,  49 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/widgets/popup.twig", "");
    }
}
