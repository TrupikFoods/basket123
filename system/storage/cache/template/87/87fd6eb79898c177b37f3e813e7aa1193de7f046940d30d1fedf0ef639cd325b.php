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

/* basel/template/common/headers/header2.twig */
class __TwigTemplate_19dcee970b31d6f603a4d4dfd756f8e255b0e1b61cf89850fe43c6be4007bdae extends \Twig\Template
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
        echo "<div class=\"header-wrapper header2 fixed-header-possible\">

";
        // line 3
        if (($context["top_line_style"] ?? null)) {
            // line 4
            echo "<div class=\"top_line\">
  <div class=\"container ";
            // line 5
            echo ($context["top_line_width"] ?? null);
            echo "\">
  \t<div class=\"table\">
        <div class=\"table-cell left sm-text-center xs-text-center\">
            <div class=\"promo-message\">";
            // line 8
            echo ($context["promo_message"] ?? null);
            echo "</div>
        </div>
        <div class=\"table-cell text-right hidden-xs hidden-sm\">
            <div class=\"links\">
            <ul>
            ";
            // line 13
            $this->loadTemplate("basel/template/common/static_links.twig", "basel/template/common/headers/header2.twig", 13)->display($context);
            // line 14
            echo "            </ul>
            ";
            // line 15
            if (($context["lang_curr_title"] ?? null)) {
                // line 16
                echo "            <div class=\"setting-ul\">
            <div class=\"setting-li dropdown-wrapper from-left lang-curr-trigger nowrap\"><a>
            <span>";
                // line 18
                echo ($context["lang_curr_title"] ?? null);
                echo "</span>
            </a>
            <div class=\"dropdown-content dropdown-right lang-curr-wrapper\">
            ";
                // line 21
                echo ($context["language"] ?? null);
                echo "
            ";
                // line 22
                echo ($context["currency"] ?? null);
                echo "
            </div>
            </div>
            </div>
            ";
            }
            // line 27
            echo "            </div>
        </div>
    </div> <!-- .table ends -->
  </div> <!-- .container ends -->
</div> <!-- .top_line ends -->
";
        }
        // line 33
        echo "<span class=\"table header-main sticky-header-placeholder\">&nbsp;</span>
<div class=\"sticky-header outer-container header-style\">
  <div class=\"container ";
        // line 35
        echo ($context["main_header_width"] ?? null);
        echo "\">
    <div class=\"table header-main ";
        // line 36
        echo ($context["main_menu_align"] ?? null);
        echo "\">
    
    <div class=\"table-cell text-left w20 logo\">
    \t";
        // line 39
        if (($context["logo"] ?? null)) {
            // line 40
            echo "        <div id=\"logo\">
    \t<a href=\"";
            // line 41
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" /></a>
        </div>
    \t";
        }
        // line 44
        echo "    </div>
    
    ";
        // line 46
        if (($context["primary_menu"] ?? null)) {
            // line 47
            echo "    <div class=\"table-cell text-center w60 menu-cell hidden-xs hidden-sm\">
        <div class=\"main-menu\">
            <ul class=\"categories\">
              ";
            // line 50
            if ((($context["primary_menu"] ?? null) == "oc")) {
                // line 51
                echo "                <!-- Default menu -->
                ";
                // line 52
                echo ($context["default_menu"] ?? null);
                echo "
              ";
            } elseif (            // line 53
(isset($context["primary_menu"]) || array_key_exists("primary_menu", $context))) {
                echo " 
                <!-- Mega menu -->
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["primary_menu_desktop"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                    // line 56
                    echo "                ";
                    $this->loadTemplate("basel/template/common/menus/mega_menu.twig", "basel/template/common/headers/header2.twig", 56)->display($context);
                    // line 57
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "              ";
            }
            // line 59
            echo "            </ul>
        </div>
    </div>
    ";
        }
        // line 63
        echo "    
    <div class=\"table-cell w20 shortcuts text-right\"> 
       
       <div class=\"font-zero\">
        
        ";
        // line 68
        if (($context["header_search"] ?? null)) {
            // line 69
            echo "        <div class=\"icon-element\">
        <div class=\"dropdown-wrapper-click from-top hidden-sx hidden-sm hidden-xs\">
        <a class=\"shortcut-wrapper search-trigger from-top clicker\">
        <i class=\"icon-magnifier icon\"></i>
        </a>
        <div class=\"dropdown-content dropdown-right\">
        <div class=\"search-dropdown-holder\">
        <div class=\"search-holder\">
        ";
            // line 77
            echo ($context["basel_search"] ?? null);
            echo "
        </div>
        </div>
        </div>
        </div>
        </div>
        ";
        }
        // line 84
        echo "        
        <div class=\"icon-element is_wishlist\">
        <a class=\"shortcut-wrapper wishlist\" href=\"";
        // line 86
        echo ($context["wishlist"] ?? null);
        echo "\">
        <div class=\"wishlist-hover\"><i class=\"icon-heart icon\"></i><span class=\"counter wishlist-counter\">";
        // line 87
        echo ($context["wishlist_counter"] ?? null);
        echo "</span></div>
        </a>
        </div>
        
        <div class=\"icon-element catalog_hide\">
        <div id=\"cart\" class=\"dropdown-wrapper from-top\">
        <a href=\"";
        // line 93
        echo ($context["shopping_cart"] ?? null);
        echo "\" class=\"shortcut-wrapper cart\">
        <i id=\"cart-icon\" class=\"global-cart icon\"></i> <span id=\"cart-total\" class=\"nowrap\">
        <span class=\"counter cart-total-items\">";
        // line 95
        echo ($context["cart_items"] ?? null);
        echo "</span> <span class=\"slash hidden-md hidden-sm hidden-xs\">/</span>&nbsp;<b class=\"cart-total-amount hidden-sm hidden-xs\">";
        echo ($context["cart_amount"] ?? null);
        echo "</b>
        </span>
        </a>
        <div class=\"dropdown-content dropdown-right hidden-sm hidden-xs\">
        ";
        // line 99
        echo ($context["cart"] ?? null);
        echo "
        </div>
\t\t</div>
        </div>
        
        <div class=\"icon-element\">
        <a class=\"shortcut-wrapper menu-trigger hidden-md hidden-lg\">
        <i class=\"icon-line-menu icon\"></i>
        </a>
        </div>
        
       </div>
        
    </div>
    
    </div> <!-- .table.header_main ends -->
  </div> <!-- .container ends -->
</div> <!-- .sticky ends -->

</div> <!-- .header_wrapper ends -->";
    }

    public function getTemplateName()
    {
        return "basel/template/common/headers/header2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 99,  247 => 95,  242 => 93,  233 => 87,  229 => 86,  225 => 84,  215 => 77,  205 => 69,  203 => 68,  196 => 63,  190 => 59,  187 => 58,  173 => 57,  170 => 56,  153 => 55,  148 => 53,  144 => 52,  141 => 51,  139 => 50,  134 => 47,  132 => 46,  128 => 44,  116 => 41,  113 => 40,  111 => 39,  105 => 36,  101 => 35,  97 => 33,  89 => 27,  81 => 22,  77 => 21,  71 => 18,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  52 => 8,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/headers/header2.twig", "/var/www/html/catalog/view/theme/basel/template/common/headers/header2.twig");
    }
}
