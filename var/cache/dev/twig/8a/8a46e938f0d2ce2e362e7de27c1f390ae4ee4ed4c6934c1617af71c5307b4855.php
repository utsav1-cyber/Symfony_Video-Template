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

/* admin/includes/_header.php */
class __TwigTemplate_1f6f16bd6e2e519d9816945ec6435c5c511fb0d006c9fd3093e48a57b8c962ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/_header.php"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"../assets/css/styles.css\">

    <!-- Custom styles for this template -->
    <link href=\"../assets/css/dashboard.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"../assets/css/fontawesome.min.css\">

    <title>Awesome videos - admin panel</title>
</head>

<body class=\"text-center\">
<div class=\"container-fluid\">

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
        <h5 class=\"my-0 mr-md-auto font-weight-normal\">Awesome Videos</h5>
        <a class=\"nav-link active\" href=\"..\"> Go to public site</a>
        <nav class=\"my-2 my-md-0 mr-md-3\">
            <a class=\"p-2 text-dark\">Logged as John Smith</a>
        </nav>
        <a class=\"btn btn-outline-primary\" href=\"#\">Logout</a>
    </div>

        <div class=\"row\">
            <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
                <div class=\"sidebar-sticky\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"my_profile.html.twig\">
                                <span data-feather=\"file\"></span>
                                My profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"categories.html.twig\">
                                <span data-feather=\"file\"></span>
                                Categories
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"videos.html.twig\">
                                <span data-feather=\"shopping-cart\"></span>
                                Videos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"upload_video.html.twig\">
                                <span data-feather=\"shopping-cart\"></span>
                                Upload a video
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"users.html.twig\">
                                <span data-feather=\"users\"></span>
                                Users
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </nav>

            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\"><a href=\"my_profile.html.twig\">Dashboard</a></h1>
                </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/includes/_header.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"../assets/css/styles.css\">

    <!-- Custom styles for this template -->
    <link href=\"../assets/css/dashboard.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"../assets/css/fontawesome.min.css\">

    <title>Awesome videos - admin panel</title>
</head>

<body class=\"text-center\">
<div class=\"container-fluid\">

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
        <h5 class=\"my-0 mr-md-auto font-weight-normal\">Awesome Videos</h5>
        <a class=\"nav-link active\" href=\"..\"> Go to public site</a>
        <nav class=\"my-2 my-md-0 mr-md-3\">
            <a class=\"p-2 text-dark\">Logged as John Smith</a>
        </nav>
        <a class=\"btn btn-outline-primary\" href=\"#\">Logout</a>
    </div>

        <div class=\"row\">
            <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
                <div class=\"sidebar-sticky\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"my_profile.html.twig\">
                                <span data-feather=\"file\"></span>
                                My profile
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"categories.html.twig\">
                                <span data-feather=\"file\"></span>
                                Categories
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"videos.html.twig\">
                                <span data-feather=\"shopping-cart\"></span>
                                Videos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"upload_video.html.twig\">
                                <span data-feather=\"shopping-cart\"></span>
                                Upload a video
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"users.html.twig\">
                                <span data-feather=\"users\"></span>
                                Users
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </nav>

            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
                    <h1 class=\"h2\"><a href=\"my_profile.html.twig\">Dashboard</a></h1>
                </div>", "admin/includes/_header.php", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\includes\\_header.php");
    }
}
