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

/* admin/edit_category.html.twig */
class __TwigTemplate_9da78582ab59b1362b7750db50264dfbc4bef6f77694c984f0fbd72c309bcb31 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_category.html.twig"));

        // line 1
        echo "<?php include('includes/_header.php'); ?>

<h2>Editing category</h2>

<form action=\"#\" method=\"POST\">
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
    <button class=\"btn btn-primary mt-3\" type=\"submit\">Save</button>

</form>

<?php include('includes/_footer.php'); ?>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_category.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include('includes/_header.php'); ?>

<h2>Editing category</h2>

<form action=\"#\" method=\"POST\">
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
    <button class=\"btn btn-primary mt-3\" type=\"submit\">Save</button>

</form>

<?php include('includes/_footer.php'); ?>
", "admin/edit_category.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\edit_category.html.twig");
    }
}
