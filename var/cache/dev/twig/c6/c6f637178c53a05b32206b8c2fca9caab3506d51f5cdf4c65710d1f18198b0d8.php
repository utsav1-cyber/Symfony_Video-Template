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

/* admin/videos.html.twig */
class __TwigTemplate_860676166e6761679753b68688ee9be616a5167175ee22de0dc604baf2e5c301 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/videos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 4
        echo "    <h2>Videos / My liked videos</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
            <thead>
            <tr>
                <th>#</th>
                <th>Video name</th>
                <th>Link</th>
                <th>Category</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach(range(1,10) as \$v): ?>
            <tr>
                <td><?=\$v?></td>
                <td>Video name</td>
                <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
                <td>
                    <form action=\"#\" method=\"POST\">
                        <select onchange=\"this.form.submit();\">
                            <option selected>Parent...</option>
                            <option value=\"1\">Funny</option>
                            <option value=\"1\">--For kids</option>
                            <option value=\"1\">----For adults</option>
                            <option value=\"2\">Scary</option>
                            <option value=\"3\">Motivating</option>
                        </select>
                    </form>
                </td>
                <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_customjavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 45
        echo "<script>
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  105 => 44,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block mainadmin %}
    <h2>Videos / My liked videos</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
            <thead>
            <tr>
                <th>#</th>
                <th>Video name</th>
                <th>Link</th>
                <th>Category</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach(range(1,10) as \$v): ?>
            <tr>
                <td><?=\$v?></td>
                <td>Video name</td>
                <td><a target=\"_blank\" href=\"http://vimeo.com\">go to video</a></td>
                <td>
                    <form action=\"#\" method=\"POST\">
                        <select onchange=\"this.form.submit();\">
                            <option selected>Parent...</option>
                            <option value=\"1\">Funny</option>
                            <option value=\"1\">--For kids</option>
                            <option value=\"1\">----For adults</option>
                            <option value=\"2\">Scary</option>
                            <option value=\"3\">Motivating</option>
                        </select>
                    </form>
                </td>
                <td><a href=\"#\" onclick=\"delete_video(event,2);\"><i class=\"fas fa-trash\"></i></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

{% endblock %}

{% block customjavascripts %}
<script>
    function delete_video(e,video_id)
    {
        e.preventDefault();
        if(confirm('Are you sure?')) 
        {
            console.log(id);
            // delete video from vimeo
            // window.location.href = 'clear database record with Symfony';
        }
    }
</script>
{% endblock %}

", "admin/videos.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\videos.html.twig");
    }
}
