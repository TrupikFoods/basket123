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

/* basel/template/extension/module/content_widgets/unsubscribe_btn.twig */
class __TwigTemplate_ad362e276298ef7bd9b6dd5d4ec0d5506d636448f6ff963c62835cd2b4b683b2 extends \Twig\Template
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
        echo "<span class=\"unsubscribe\"><a onclick=\"unsubscribe(";
        echo ($context["module"] ?? null);
        echo ");\">";
        echo ($context["basel_unsubscribe_btn"] ?? null);
        echo "</a></span>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/content_widgets/unsubscribe_btn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/content_widgets/unsubscribe_btn.twig", "");
    }
}
