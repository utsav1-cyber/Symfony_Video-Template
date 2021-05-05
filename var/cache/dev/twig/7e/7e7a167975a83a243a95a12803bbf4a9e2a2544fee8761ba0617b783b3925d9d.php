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

/* front/includes/_menu.html.twig */
class __TwigTemplate_036719a4cdf187aaae0701099e865a71740d0316e739c5fc23c36a7bbdda84b5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_menu.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"index.php\">Awesome Videos</a></h5>

    <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"search_results.php\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
    </form>

    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Funny</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Scary</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Unbelievable</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Inspirational</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Motivating</a>
        <a class=\"p-2 text-dark\" href=\"admin/my_profile.html.twig\">My account</a>
    </nav>
    <a class=\"btn btn-outline-primary mr-2\" href=\"pricing.php\">Sign up</a>
    <a class=\"btn btn-outline-primary\" href=\"login.php\">Sign in</a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\"><a href=\"index.php\">Awesome Videos</a></h5>

    <form method=\"POST\" class=\"form-inline my-0 mr-md-auto\" action=\"search_results.php\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"video title\" aria-label=\"Search video\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search video</button>
    </form>

    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Funny</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Scary</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Unbelievable</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Inspirational</a>
        <a class=\"p-2 text-dark\" href=\"videolist.php\">Motivating</a>
        <a class=\"p-2 text-dark\" href=\"admin/my_profile.html.twig\">My account</a>
    </nav>
    <a class=\"btn btn-outline-primary mr-2\" href=\"pricing.php\">Sign up</a>
    <a class=\"btn btn-outline-primary\" href=\"login.php\">Sign in</a>
</div>", "front/includes/_menu.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\front\\includes\\_menu.html.twig");
    }
}
