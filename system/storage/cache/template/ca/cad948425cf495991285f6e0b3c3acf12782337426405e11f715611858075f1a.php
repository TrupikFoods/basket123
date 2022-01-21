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

/* basel/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_fd64aa56973d621a8b80cca2d9bfedfc061f802a0dbfe1f31e6847e03c6dcad5 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 13
            echo "    ";
        } else {
            echo "   
    ";
            // line 14
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t  <!-- Start -->
\t  <div id=\"warning-messages\"></div>
\t  <div id=\"success-messages\"></div>

\t  ";
        // line 23
        if (($context["html_header"] ?? null)) {
            echo " 
\t  ";
            // line 24
            echo ($context["html_header"] ?? null);
            echo " 
\t  ";
        }
        // line 25
        echo " 

\t  <div id=\"quickcheckout-countdown\"></div>

\t  <div id=\"quickcheckoutconfirm\">
\t\t<div id=\"quickcheckout-disable\">
\t\t  ";
        // line 31
        if (( !($context["logged"] ?? null) && ($context["login_module"] ?? null))) {
            echo " 
\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t<div id=\"checkout\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
            // line 34
            echo ($context["text_checkout_option"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
            // line 35
            echo ($context["login"] ?? null);
            echo "</div>
\t\t\t</div>
\t\t\t<div class=\"or\">";
            // line 37
            echo ($context["text_or"] ?? null);
            echo "</div>
\t\t  </div>
\t\t  ";
        }
        // line 39
        echo " 
\t\t  <div class=\"quickcheckoutleft\">
\t\t\t<div id=\"payment-address\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
        // line 42
        echo (( !($context["logged"] ?? null)) ? (($context["text_checkout_account"] ?? null)) : (($context["text_checkout_payment_address"] ?? null)));
        echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
        // line 43
        echo ((($context["guest"] ?? null)) ? (($context["guest"] ?? null)) : (($context["payment_address"] ?? null)));
        echo "</div>
\t\t\t</div>
\t\t\t";
        // line 45
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t<div id=\"shipping-address\">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 47
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\">";
            // line 48
            echo ((($context["shipping_address"] ?? null)) ? (($context["shipping_address"] ?? null)) : (""));
            echo "</div>
\t\t\t</div>
\t\t\t";
        }
        // line 50
        echo " 
\t\t  </div>
\t\t  <div class=\"quickcheckoutright\">
\t\t\t";
        // line 53
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t<div id=\"shipping-method\"";
            // line 54
            echo (( !($context["shipping_module"] ?? null)) ? (" style=\"display:none;\"") : (""));
            echo ">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
            // line 55
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</div>
\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "\t\t\t<div id=\"payment-method\"";
        echo (( !($context["payment_module"] ?? null)) ? (" style=\"display:none;\"") : (""));
        echo ">
\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
        // line 60
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</div>
\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 64
        if ((($context["quickcheckout_layout"] ?? null) == "2")) {
            // line 65
            echo "\t\t\t<div class=\"totals-slip\">
\t\t\t  ";
            // line 66
            if (($context["cart_module"] ?? null)) {
                echo " 
\t\t\t  <div id=\"cart1\">
\t\t\t\t<div class=\"quickcheckout-content cart-content\"></div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 71
            echo "\t\t\t  ";
            if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                echo " 
\t\t\t  <div id=\"voucher\">
\t\t\t\t<div>";
                // line 73
                echo ($context["voucher"] ?? null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 76
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 78
        echo "\t\t\t
\t\t  </div>
\t\t  
\t\t  
\t\t  ";
        // line 82
        if (((($context["quickcheckout_layout"] ?? null) == "1") || (($context["quickcheckout_layout"] ?? null) == "3"))) {
            // line 83
            echo "\t\t\t<div class=\"quickcheckoutleft cart-module-holder\">
\t\t\t<div class=\"totals-slip\">
\t\t\t  ";
            // line 85
            if (($context["cart_module"] ?? null)) {
                echo " 
\t\t\t  <div id=\"cart1\">
\t\t\t\t<div class=\"quickcheckout-content cart-content\"></div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 90
            echo "\t\t\t  ";
            if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                echo " 
\t\t\t  <div id=\"voucher\">
\t\t\t\t<div>";
                // line 92
                echo ($context["voucher"] ?? null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 95
            echo "\t\t\t</div>
\t\t\t
\t\t\t<div id=\"terms\">
\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 98
            echo ($context["terms"] ?? null);
            echo "</div>
\t\t    </div>
\t\t\t
\t\t\t</div>
\t\t";
        }
        // line 103
        echo "\t\t  
\t\t  
\t\t  <div style=\"clear: both;\"></div>
\t\t</div><!-- Close Quick Checkout Disable Div -->
\t\t
\t\t";
        // line 108
        if ((($context["quickcheckout_layout"] ?? null) == "2")) {
            // line 109
            echo "\t\t<div class=\"quickcheckoutmid\">
\t\t<div id=\"terms\">
\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 111
            echo ($context["terms"] ?? null);
            echo "</div>
\t\t</div> 
\t\t</div>
\t\t";
        }
        // line 115
        echo "\t  
\t  
\t  </div><!-- Close QuickCheckoutConfirm div -->

\t  ";
        // line 119
        if (($context["html_footer"] ?? null)) {
            // line 120
            echo "\t  ";
            echo ($context["html_footer"] ?? null);
            echo "
\t  ";
        }
        // line 122
        echo "\t  <!-- End -->
\t";
        // line 123
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 124
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 127
        if (($context["custom_css"] ?? null)) {
            // line 128
            echo "<style type=\"text/css\">
";
            // line 129
            echo ($context["custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 131
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 133
        if ((($context["countdown"] ?? null) && ($context["countdown_end"] ?? null))) {
            echo " 
\$('#quickcheckout-countdown').countdown({
\ttimezone: ";
            // line 135
            echo ($context["timezone"] ?? null);
            echo " ,
\tuntil: new Date('";
            // line 136
            echo ($context["countdown_end"] ?? null);
            echo "'),
    layout: '";
            // line 137
            echo twig_escape_filter($this->env, ($context["countdown_before"] ?? null));
            echo "<b>";
            echo ($context["countdown_timer"] ?? null);
            echo "</b>{desc}',
    description: '";
            // line 138
            echo twig_escape_filter($this->env, ($context["countdown_after"] ?? null));
            echo "'
});
";
        }
        // line 140
        echo " 
";
        // line 141
        if (($context["load_screen"] ?? null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 144
            echo ($context["text_please_wait"] ?? null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 162
        echo " 

";
        // line 164
        if ( !($context["logged"] ?? null)) {
            // line 165
            echo "\t";
            if (($context["save_data"] ?? null)) {
                // line 166
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 177
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 181
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 195
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 199
                echo " 
\t\t});
\t});
\t";
            }
            // line 202
            echo " 
\t
\t";
            // line 204
            if (($context["login_module"] ?? null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 234
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 238
                echo " 
\t\t});
\t});
\t";
            }
            // line 241
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 271
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 279
            echo " 
\t\t\t\t";
            // line 280
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 288
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 290
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 298
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 300
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 303
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 307
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 339
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 349
            echo " 
\t\t\t\t";
            // line 350
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 356
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 360
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 372
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 379
            echo "\t\t\t}
\t\t},
\t\t";
            // line 381
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 385
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 417
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 427
            echo " 
\t\t\t\t";
            // line 428
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 434
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 439
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 443
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 456
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 485
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 495
            echo " 
\t\t\t\t";
            // line 496
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 502
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 504
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 506
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 509
            echo "\t\t\t}
\t\t},
\t\t";
            // line 511
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 515
            echo " 
\t});
}

";
            // line 519
            if (($context["shipping_required"] ?? null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 548
                if (($context["text_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 558
                echo " 
\t\t\t\t";
                // line 559
                if (($context["highlight_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 565
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 570
                if (($context["debug"] ?? null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 574
                echo " 
\t});
}
";
            }
            // line 577
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 588
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 599
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 602
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 606
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 608
        echo " 
\t\t},
\t\t";
        // line 610
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 614
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 626
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 629
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 633
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 635
        echo " 
\t\t},
\t\t";
        // line 637
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 641
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 676
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 680
        echo " 
\t});
}

// Shipping Method
";
        // line 685
        if (($context["shipping_required"] ?? null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 700
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 703
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 707
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 711
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 723
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 726
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 730
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 734
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 769
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 773
            echo " 
\t\t});
\t}
";
        }
        // line 776
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 809
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 813
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 824
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 827
            if (($context["slide_effect"] ?? null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 829
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 831
            echo " 
\t\t\t
\t\t\t\t";
            // line 833
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 835
                echo ($context["text_please_wait"] ?? null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 848
            echo " 
\t\t\t";
        }
        // line 850
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 852
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t";
            // line 853
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 855
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 859
            if ( !($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\t";
                // line 860
                if (($context["slide_effect"] ?? null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 862
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 864
                echo " 
\t\t\t\t";
            } else {
                // line 865
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 868
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 872
            if (($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 874
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 880
        echo "\t\t},
\t\t";
        // line 881
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 885
        echo " 
\t});
}

// Load cart
";
        // line 890
        if (($context["cart_module"] ?? null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 899
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 902
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t\tloadHeaderCart();

\t\t},
\t\t";
            // line 908
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 912
            echo " 
\t});
}

\t";
            // line 916
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 920
            echo " 
";
        }
        // line 921
        echo " 

function loadHeaderCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\$('.cart-total-items').html( json['total_items'] );
\t\t\t\$('.cart-total-amount').html( json['total_amount'] );
\t\t\t\$('#cart-content').load('index.php?route=common/cart/info #cart-content > *');
\t\t\t}
\t\t},
\t});
}

";
        // line 942
        if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 974
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 978
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 980
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 984
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 986
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 988
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 995
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1001
                echo " 
\t\t\t";
            }
            // line 1002
            echo " 
\t\t\t
\t\t\t";
            // line 1004
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1006
            echo " 
\t\t},
\t\t";
            // line 1008
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1012
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1046
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1050
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1052
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1056
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1058
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1060
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1067
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1073
                echo " 
\t\t\t";
            }
            // line 1075
            echo "\t\t\t
\t\t\t";
            // line 1076
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1078
            echo " 
\t\t},
\t\t";
            // line 1080
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1084
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1118
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1122
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1124
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1128
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1130
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1132
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1139
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1145
                echo " 
\t\t\t";
            }
            // line 1147
            echo "\t\t\t
\t\t\t";
            // line 1148
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1150
            echo " 
\t\t},
\t\t";
            // line 1152
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1156
            echo " 
\t});
});
";
        }
        // line 1160
        echo "
";
        // line 1161
        if (($context["shipping_required"] ?? null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1163
            if ( !($context["logged"] ?? null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1169
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1175
            echo " 
});
";
        }
        // line 1178
        echo "
";
        // line 1179
        if (($context["highlight_error"] ?? null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1190
        echo " 

";
        // line 1192
        if (($context["edit_cart"] ?? null)) {
            echo " 
\$(document).on('click', '.button-update', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t
\t\t\t\$('.cart-total-items').html( json['total_items'] );
\t\t\t\$('.cart-total-amount').html( json['total_amount'] );
\t\t\t\$('#cart-content').load('index.php?route=common/cart/info #cart-content > *');
\t\t\t
\t\t\t\t";
            // line 1212
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1216
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1218
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1222
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1224
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1226
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1233
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1239
                echo " 
\t\t\t\t";
            }
            // line 1240
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1242
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1244
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1247
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1251
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1270
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1274
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1276
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1280
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1282
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1284
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1291
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1297
                echo " 
\t\t\t\t";
            }
            // line 1299
            echo "\t\t\t\t
\t\t\t\t";
            // line 1300
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1302
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1305
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1309
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1315
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm'
});

\$('.datetime').datetimepicker();
//--></script>
";
        // line 1326
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2116 => 1326,  2103 => 1315,  2095 => 1309,  2087 => 1305,  2082 => 1302,  2076 => 1300,  2073 => 1299,  2069 => 1297,  2059 => 1291,  2050 => 1284,  2045 => 1282,  2039 => 1280,  2033 => 1276,  2027 => 1274,  2020 => 1270,  1999 => 1251,  1991 => 1247,  1986 => 1244,  1980 => 1242,  1976 => 1240,  1972 => 1239,  1962 => 1233,  1953 => 1226,  1948 => 1224,  1942 => 1222,  1936 => 1218,  1930 => 1216,  1923 => 1212,  1900 => 1192,  1896 => 1190,  1881 => 1179,  1878 => 1178,  1873 => 1175,  1864 => 1169,  1854 => 1163,  1849 => 1161,  1846 => 1160,  1840 => 1156,  1832 => 1152,  1828 => 1150,  1822 => 1148,  1819 => 1147,  1815 => 1145,  1805 => 1139,  1796 => 1132,  1791 => 1130,  1785 => 1128,  1779 => 1124,  1773 => 1122,  1766 => 1118,  1730 => 1084,  1722 => 1080,  1718 => 1078,  1712 => 1076,  1709 => 1075,  1705 => 1073,  1695 => 1067,  1686 => 1060,  1681 => 1058,  1675 => 1056,  1669 => 1052,  1663 => 1050,  1656 => 1046,  1620 => 1012,  1612 => 1008,  1608 => 1006,  1602 => 1004,  1598 => 1002,  1594 => 1001,  1584 => 995,  1575 => 988,  1570 => 986,  1564 => 984,  1558 => 980,  1552 => 978,  1545 => 974,  1510 => 942,  1487 => 921,  1483 => 920,  1475 => 916,  1469 => 912,  1461 => 908,  1452 => 902,  1446 => 899,  1434 => 890,  1427 => 885,  1419 => 881,  1416 => 880,  1408 => 874,  1402 => 872,  1394 => 868,  1389 => 865,  1385 => 864,  1380 => 862,  1374 => 860,  1370 => 859,  1364 => 855,  1358 => 853,  1354 => 852,  1350 => 850,  1346 => 848,  1329 => 835,  1324 => 833,  1320 => 831,  1315 => 829,  1309 => 827,  1303 => 824,  1290 => 813,  1282 => 809,  1247 => 776,  1241 => 773,  1233 => 769,  1196 => 734,  1188 => 730,  1181 => 726,  1175 => 723,  1161 => 711,  1153 => 707,  1146 => 703,  1140 => 700,  1122 => 685,  1115 => 680,  1107 => 676,  1070 => 641,  1062 => 637,  1058 => 635,  1052 => 633,  1045 => 629,  1039 => 626,  1025 => 614,  1017 => 610,  1013 => 608,  1007 => 606,  1000 => 602,  994 => 599,  981 => 588,  967 => 577,  961 => 574,  953 => 570,  946 => 565,  936 => 559,  933 => 558,  919 => 548,  887 => 519,  881 => 515,  873 => 511,  869 => 509,  864 => 506,  858 => 504,  854 => 502,  844 => 496,  841 => 495,  827 => 485,  796 => 456,  780 => 443,  772 => 439,  765 => 434,  755 => 428,  752 => 427,  738 => 417,  704 => 385,  696 => 381,  692 => 379,  683 => 372,  667 => 360,  661 => 356,  651 => 350,  648 => 349,  634 => 339,  600 => 307,  592 => 303,  587 => 300,  582 => 298,  570 => 290,  566 => 288,  554 => 280,  551 => 279,  539 => 271,  507 => 241,  501 => 238,  493 => 234,  460 => 204,  456 => 202,  450 => 199,  442 => 195,  426 => 181,  418 => 177,  405 => 166,  402 => 165,  400 => 164,  396 => 162,  374 => 144,  368 => 141,  365 => 140,  359 => 138,  353 => 137,  349 => 136,  345 => 135,  340 => 133,  336 => 131,  330 => 129,  327 => 128,  325 => 127,  319 => 124,  315 => 123,  312 => 122,  306 => 120,  304 => 119,  298 => 115,  291 => 111,  287 => 109,  285 => 108,  278 => 103,  270 => 98,  265 => 95,  259 => 92,  253 => 90,  245 => 85,  241 => 83,  239 => 82,  233 => 78,  229 => 76,  223 => 73,  217 => 71,  209 => 66,  206 => 65,  204 => 64,  197 => 60,  192 => 59,  185 => 55,  181 => 54,  177 => 53,  172 => 50,  166 => 48,  162 => 47,  157 => 45,  152 => 43,  148 => 42,  143 => 39,  137 => 37,  132 => 35,  128 => 34,  122 => 31,  114 => 25,  109 => 24,  105 => 23,  97 => 18,  93 => 17,  88 => 16,  85 => 15,  83 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/checkout.twig", "");
    }
}
