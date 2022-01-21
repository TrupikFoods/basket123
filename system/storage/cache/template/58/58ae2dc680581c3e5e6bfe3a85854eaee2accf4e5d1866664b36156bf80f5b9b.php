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

/* basel/template/product/question_list.twig */
class __TwigTemplate_63af15efea32f9a8fd0174b30f2724f272533c009947830faa490d4df3dcffbb extends \Twig\Template
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
        if (($context["questions"] ?? null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 3
                echo "    <div class=\"table\">
    <div class=\"table-cell\"><i class=\"fa fa-comments-o\"></i></div>
    <div class=\"table-cell right\">
    <p class=\"author\"><b>";
                // line 6
                echo ($context["basel_text_question_from"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["question"], "author", [], "any", false, false, false, 6);
                echo "</b> - <span>";
                echo twig_get_attribute($this->env, $this->source, $context["question"], "date_added", [], "any", false, false, false, 6);
                echo "</span></p>
    <p class=\"question\">- ";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["question"], "text", [], "any", false, false, false, 7);
                echo "</p>
    ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "    <p class=\"our-answer\"><b>";
                    echo ($context["basel_text_our_answer"] ?? null);
                    echo "</b></p>
    <p>- ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 10);
                    echo "</p>
    ";
                } else {
                    // line 12
                    echo "    <p class=\"no-answer\"><i>(";
                    echo ($context["basel_text_no_answer"] ?? null);
                    echo ")</i></p>
    ";
                }
                // line 14
                echo "    </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
            if (($context["pagination"] ?? null)) {
                // line 18
                echo "    <div class=\"pagination-holder\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
    ";
            }
        } else {
            // line 21
            echo "\t<p>";
            echo ($context["basel_text_no_questions"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/product/question_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  90 => 18,  87 => 17,  79 => 14,  73 => 12,  68 => 10,  63 => 9,  61 => 8,  57 => 7,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/question_list.twig", "");
    }
}
