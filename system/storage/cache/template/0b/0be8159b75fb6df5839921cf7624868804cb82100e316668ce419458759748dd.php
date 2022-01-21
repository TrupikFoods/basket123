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

/* basel/template/extension/module/account.twig */
class __TwigTemplate_acc187a0c41218dbd2217e13c7a4a2111d71447272159af09d63560cc1ba1a19 extends \Twig\Template
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
        echo "<div class=\"widget bordered-list\">
<b class=\"bordered-list-title invert\">";
        // line 2
        echo ($context["text_account"] ?? null);
        echo "</b>
  ";
        // line 3
        if ( !($context["logged"] ?? null)) {
            // line 4
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 6
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 7
        if (($context["logged"] ?? null)) {
            // line 8
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 10
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a><a href=\"";
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["reward"] ?? null);
        echo "\">";
        echo ($context["text_reward"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 11
        if (($context["logged"] ?? null)) {
            // line 12
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 14,  124 => 12,  122 => 11,  83 => 10,  71 => 8,  69 => 7,  62 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/account.twig", "");
    }
}
