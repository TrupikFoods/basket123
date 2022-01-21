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

/* basel/template/extension/quickcheckout/terms.twig */
class __TwigTemplate_021ccf2bb4c3aeb775bd53037b67f88123fcefeffe9f80a704bfe3ff72668e5b extends \Twig\Template
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
        echo "<div id=\"payment\" class=\"text-left\" style=\"display:none;\"></div>
<div class=\"terms\">
  <label>";
        // line 3
        if (($context["text_agree"] ?? null)) {
            // line 4
            echo "    ";
            echo ($context["text_agree"] ?? null);
            echo "
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
  ";
        }
        // line 6
        echo "</label>
  <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 7
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  50 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/terms.twig", "");
    }
}
