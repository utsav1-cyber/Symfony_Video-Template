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

/* admin/my_profile.html.twig */
class __TwigTemplate_28cc420f99d9de0065bf58b590373a3227b30112cd055a88e17b82f3fcc187a8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        // line 1
        echo "<?php include('includes/_header.php'); ?>

<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"#\">delete account</a></small></h2>
<p class=\"text-left\">My plan - Pro. <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\"
        href=\"#\">cancel plan</a></p>
<p class=\"text-left\">My plan - Free. <a href=\"../front/payment.html.twig\">get paid plan</a></p>

<form class=\"mt-5\" method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"vimeoapikey\">Vimeo API key</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"vimeoapikey\" placeholder=\"Enter api key\">
        <div class=\"invalid-feedback\">
            Please provide api key
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"name\" placeholder=\"Your name\">
        <div class=\"invalid-feedback\">
            Please provide your name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"lastname\">Last name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"lastname\" placeholder=\"Your last name\">
        <div class=\"invalid-feedback\">
            Please provide your last name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email address</label>
        <input required type=\"email\" class=\"form-control is-invalid\" id=\"email\" placeholder=\"Enter email\">
        <div class=\"invalid-feedback\">
            Please provide valid email address
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password\" placeholder=\"Password\">
        <div class=\"invalid-feedback\">
            Please provide password (min. 6 characters)
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password_confirmation\">Confirm password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password_confirmation\" placeholder=\"Confirm password\">
        <div class=\"invalid-feedback\">
            Please provide valid password confirmation
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
</form>

<?php include('includes/_footer.php'); ?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/my_profile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include('includes/_header.php'); ?>

<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"#\">delete account</a></small></h2>
<p class=\"text-left\">My plan - Pro. <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\"
        href=\"#\">cancel plan</a></p>
<p class=\"text-left\">My plan - Free. <a href=\"../front/payment.html.twig\">get paid plan</a></p>

<form class=\"mt-5\" method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"vimeoapikey\">Vimeo API key</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"vimeoapikey\" placeholder=\"Enter api key\">
        <div class=\"invalid-feedback\">
            Please provide api key
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"name\" placeholder=\"Your name\">
        <div class=\"invalid-feedback\">
            Please provide your name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"lastname\">Last name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"lastname\" placeholder=\"Your last name\">
        <div class=\"invalid-feedback\">
            Please provide your last name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email address</label>
        <input required type=\"email\" class=\"form-control is-invalid\" id=\"email\" placeholder=\"Enter email\">
        <div class=\"invalid-feedback\">
            Please provide valid email address
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password\" placeholder=\"Password\">
        <div class=\"invalid-feedback\">
            Please provide password (min. 6 characters)
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password_confirmation\">Confirm password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password_confirmation\" placeholder=\"Confirm password\">
        <div class=\"invalid-feedback\">
            Please provide valid password confirmation
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
</form>

<?php include('includes/_footer.php'); ?>", "admin/my_profile.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\my_profile.html.twig");
    }
}
