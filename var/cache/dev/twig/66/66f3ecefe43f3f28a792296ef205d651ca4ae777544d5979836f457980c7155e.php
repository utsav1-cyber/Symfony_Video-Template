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

/* admin/users.html.twig */
class __TwigTemplate_8f141af5b865f37f5638b719f4485d43798449ee15af5c6dae8cef423b35767e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        // line 1
        echo "<?php include('includes/_header.php'); ?>
 <h2>Users</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach(range(1,10) as \$v): ?>
            <tr>
            <td><?=\$v?></td>
            <td>Adam</td>
            <td>Smith</td>
            <td>adam@smith.com</td>
            <td><a href=\"#\" onclick=\"return confirm('Are you sure?');\"><i class=\"fas fa-trash\"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>

<?php include('includes/_footer.php'); ?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include('includes/_header.php'); ?>
 <h2>Users</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach(range(1,10) as \$v): ?>
            <tr>
            <td><?=\$v?></td>
            <td>Adam</td>
            <td>Smith</td>
            <td>adam@smith.com</td>
            <td><a href=\"#\" onclick=\"return confirm('Are you sure?');\"><i class=\"fas fa-trash\"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>

<?php include('includes/_footer.php'); ?>", "admin/users.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\users.html.twig");
    }
}
