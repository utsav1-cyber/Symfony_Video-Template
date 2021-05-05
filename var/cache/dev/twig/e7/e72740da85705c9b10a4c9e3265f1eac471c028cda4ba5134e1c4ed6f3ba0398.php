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
class __TwigTemplate_d6fe85276c0577c6b0cd92420c13046b58990a0ca47e8810abcd3581d68db5e0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        // line 1
        echo "<?php include('includes/_header.php'); ?>

<style>
    .fa-ul>li {
    margin-top: 15px;
}
</style>

<h2>Categories list</h2>

<ul class=\"fa-ul text-left\">
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"edit_category.html.twig\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                             href=\"#\">delete</a></li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.html.twig\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
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
\t    <label for=\"inlineFormCustomSelect\">Parent:</label>
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


<?php include('includes/_footer.php'); ?>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include('includes/_header.php'); ?>

<style>
    .fa-ul>li {
    margin-top: 15px;
}
</style>

<h2>Categories list</h2>

<ul class=\"fa-ul text-left\">
    <li><i class=\"fa-li fa fa-arrow-right\"></i>Funny <a href=\"edit_category.html.twig\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
                                                                                             href=\"#\">delete</a></li>
    <ul class=\"fa-ul text-left\">
        <li><i class=\"fa-li fa fa-arrow-right\"></i>For kids <a href=\"edit_category.html.twig\">edit</a> <a onclick=\"return confirm('Are you sure?');\"
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
\t    <label for=\"inlineFormCustomSelect\">Parent:</label>
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


<?php include('includes/_footer.php'); ?>
", "admin/categories.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\categories.html.twig");
    }
}
