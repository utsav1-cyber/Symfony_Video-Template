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

/* front/includes/_footer_links.html.twig */
class __TwigTemplate_7bec90dc8693d4d492ebabddf3d083cd2fa13cc28337fbda4b862b335a0437d2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_footer_links.html.twig"));

        // line 1
        echo "<footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_footer_links.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2018</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Live streaming</a></li>
                <li><a class=\"text-muted\" href=\"#\">Video player</a></li>
                <li><a class=\"text-muted\" href=\"#\">Monetization</a></li>
                <li><a class=\"text-muted\" href=\"#\">Hosting</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Analytics</a></li>
                <li><a class=\"text-muted\" href=\"#\">Speed test</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Help center</a></li>
                <li><a class=\"text-muted\" href=\"#\">Blog</a></li>
                <li><a class=\"text-muted\" href=\"#\">Guidelines</a></li>
                <li><a class=\"text-muted\" href=\"#\">Developers</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Contact</a></li>
                <li><a class=\"text-muted\" href=\"#\">Jobs</a></li>
                <li><a class=\"text-muted\" href=\"#\">Partners</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>", "front/includes/_footer_links.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\front\\includes\\_footer_links.html.twig");
    }
}
