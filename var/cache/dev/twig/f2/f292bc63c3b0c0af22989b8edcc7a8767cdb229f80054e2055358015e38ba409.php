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

/* front/payment.html.twig */
class __TwigTemplate_e462d7fff3b92c428834bec7e32300da574319488f8bd479e83b106eadf83f4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/payment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row mt-5\">
        <div class=\"col-md-4 order-md-2 mb-4\">
            <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                <span class=\"text-muted\">Your cart</span>
                <span class=\"badge badge-secondary badge-pill\">1</span>
            </h4>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                    <div>
                        <h6 class=\"my-0\">Pro plan</h6>
                    </div>
                    <span class=\"text-muted\">\$15</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between bg-light\">
                    <div class=\"text-success\">
                        <h6 class=\"my-0\">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class=\"text-success\">-\$0</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between\">
                    <span>Total (USD)</span>
                    <strong>\$15</strong>
                </li>
            </ul>
        </div>

        <div class=\"col-md-8 order-md-1\">

            <h4 class=\"mb-3\">Pay with PayPal <small>or get other <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        echo "\">plan</a></small></h4>
            <hr class=\"mb-4\">
            <a href=\"https://paypal.com\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Continue to checkout</a>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
    <div class=\"row mt-5\">
        <div class=\"col-md-4 order-md-2 mb-4\">
            <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                <span class=\"text-muted\">Your cart</span>
                <span class=\"badge badge-secondary badge-pill\">1</span>
            </h4>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                    <div>
                        <h6 class=\"my-0\">Pro plan</h6>
                    </div>
                    <span class=\"text-muted\">\$15</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between bg-light\">
                    <div class=\"text-success\">
                        <h6 class=\"my-0\">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class=\"text-success\">-\$0</span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between\">
                    <span>Total (USD)</span>
                    <strong>\$15</strong>
                </li>
            </ul>
        </div>

        <div class=\"col-md-8 order-md-1\">

            <h4 class=\"mb-3\">Pay with PayPal <small>or get other <a href=\"{{path('pricing')}}\">plan</a></small></h4>
            <hr class=\"mb-4\">
            <a href=\"https://paypal.com\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Continue to checkout</a>

        </div>
    </div>
{% endblock %}
", "front/payment.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\front\\payment.html.twig");
    }
}
