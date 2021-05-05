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

/* admin/categories.html.twig */
class __TwigTemplate_000f20aa57a2488d9ee1138c905279990bfa3b5139b16bbbd65936e0c84a604e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'customstylesheets' => [$this, 'block_customstylesheets'],
            'mainadmin' => [$this, 'block_mainadmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/categories.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_customstylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customstylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("customstylesheets", $context, $blocks);
        echo "
    <style>
        .fa-ul>li {
            margin-top: 15px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 13
        echo "    <h2>Categories list</h2>

    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_category");
        echo "\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                 href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.php\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                        href=\"#\">delete</a></li>
            <li><i class=\"fa-li fa fa-arrow-right\"></i>For adults <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                          href=\"#\">delete</a></li>
            <ul class=\"fa-ul text-left\">
                <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                           href=\"#\">delete</a></li>
            </ul>
        </ul>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Scary <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                 href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Unbelievable <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                        href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Inspirational <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                         href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Motivating <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                      href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Surprising <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                      href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Sad</li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                       href=\"#\">delete</a></li>
            <ul class=\"fa-ul text-left\">
                <li><i class=\"fa-li fa fa-arrow-right\"></i>Boring <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                          href=\"#\">delete</a></li>
            </ul>
        </ul>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Relaxing <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                    href=\"#\">delete</a></li>
    </ul>

    <form action=\"#\" method=\"POST\">
        <div class=\"col-md-4 mb-3\">
            <label for=\"validationServer01\">Add new category</label>
            <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
                   required>
            <br>
            <label for=\"inlineFormCustomSelect\">Parent:</label>
            <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">--For adults</option>
                <option value=\"1\">----For 60+</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
            </select>
            <div class=\"invalid-feedback\">
                Category already exists!
            </div>
            <button class=\"btn btn-primary mt-3\" type=\"submit\">Add</button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  82 => 13,  75 => 12,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block customstylesheets %}
    {{parent()}}
    <style>
        .fa-ul>li {
            margin-top: 15px;
        }
    </style>
{% endblock %}

{% block mainadmin %}
    <h2>Categories list</h2>

    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"{{path('edit_category')}}\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                 href=\"#\">delete</a></li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.php\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                                        href=\"#\">delete</a></li>
            <li><i class=\"fa-li fa fa-arrow-right\"></i>For adults <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                          href=\"#\">delete</a></li>
            <ul class=\"fa-ul text-left\">
                <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                           href=\"#\">delete</a></li>
            </ul>
        </ul>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Scary <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                 href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Unbelievable <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                        href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Inspirational <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                         href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Motivating <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                      href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Surprising <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                      href=\"#\">delete</a></li>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Sad</li>
        <ul class=\"fa-ul text-left\">
            <li><i class=\"fa-li fa fa-arrow-right\"></i>Strange <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                       href=\"#\">delete</a></li>
            <ul class=\"fa-ul text-left\">
                <li><i class=\"fa-li fa fa-arrow-right\"></i>Boring <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                          href=\"#\">delete</a></li>
            </ul>
        </ul>
        <li><i class=\"fa-li fa fa-arrow-right\"></i>Relaxing <a href=\"#\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                    href=\"#\">delete</a></li>
    </ul>

    <form action=\"#\" method=\"POST\">
        <div class=\"col-md-4 mb-3\">
            <label for=\"validationServer01\">Add new category</label>
            <input type=\"text\" class=\"form-control is-invalid\" id=\"validationServer01\" placeholder=\"Category name\" value=\"Funny\"
                   required>
            <br>
            <label for=\"inlineFormCustomSelect\">Parent:</label>
            <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\">
                <option value=\"1\">Funny</option>
                <option value=\"1\">--For kids</option>
                <option value=\"1\">--For adults</option>
                <option value=\"1\">----For 60+</option>
                <option value=\"2\">Scary</option>
                <option value=\"3\">Motivating</option>
            </select>
            <div class=\"invalid-feedback\">
                Category already exists!
            </div>
            <button class=\"btn btn-primary mt-3\" type=\"submit\">Add</button>
        </div>
    </form>
{% endblock %}




", "admin/categories.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\categories.html.twig");
    }
}
