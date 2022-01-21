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

/* basel/template/extension/module/invitereferrals.twig */
class __TwigTemplate_fe1d1dba67100cb9f0ff2f2a4c92df7b96495c1eb5c344cc0da229295b8a49a5 extends \Twig\Template
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
        echo "
<script type=\"text/javascript\">
    var ir = ir || function(){(window.ir.q = window.ir.q || []).push(arguments)};
    var invite_referrals = window.invite_referrals || {}; (function() {
    invite_referrals.auth = { bid_e :'";
        // line 5
        echo ($context["encryptedKey"] ?? null);
        echo "',
                            bid : '";
        // line 6
        echo ($context["brandID"] ?? null);
        echo "', 
                            sso_key : '";
        // line 7
        echo ($context["sso_key"] ?? null);
        echo "',
                            t : '420', 
                            rt: '";
        // line 9
        echo ($context["rt"] ?? null);
        echo "',
                            email : '";
        // line 10
        echo ($context["email"] ?? null);
        echo "',
                            mobile: '";
        // line 11
        echo ($context["mobile"] ?? null);
        echo "', userParams : {'fname': '";
        echo ($context["name"] ?? null);
        echo "'}};    
                            invite_referrals.async = false;
    var script = document.createElement('script');
    script.src = \"//cdn.invitereferrals.com/js/invite-referrals-1.0.js\";
    var entry = document.getElementsByTagName('script')[0];entry.parentNode.insertBefore(script, entry); })();

    if('";
        // line 17
        echo ($context["current_page"] ?? null);
        echo "' == 'checkout/success'){
        ir('track',{ orderID: '";
        // line 18
        echo ($context["order_id"] ?? null);
        echo "', event: 'sale', email: '";
        echo ($context["email"] ?? null);
        echo "', fname: '";
        echo ($context["name"] ?? null);
        echo "', mobile:'";
        echo ($context["mobile"] ?? null);
        echo "', purchaseValue: '";
        echo ($context["total"] ?? null);
        echo "'});
    }
</script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/invitereferrals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  75 => 17,  64 => 11,  60 => 10,  56 => 9,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/invitereferrals.twig", "");
    }
}
