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

/* admin/upload_video.html.twig */
class __TwigTemplate_5cdd841358019c3f455a9bf11c33c3f92c615448a7806330024efaf49b53256b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/upload_video.html.twig"));

        // line 1
        echo "<?php include('includes/_header.php'); ?>

            <h2>Upload a video</h2>

            <form method=\"POST\" action=\"#\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                            <input type=\"file\" name=\"file_data\" class=\"custom-file-input\" id=\"customFile\" onchange=\"console.log(this)\">
                            <label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
                    </div> 
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </form>

<?php include('includes/_footer.php'); ?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/upload_video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php include('includes/_header.php'); ?>

            <h2>Upload a video</h2>

            <form method=\"POST\" action=\"#\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                            <input type=\"file\" name=\"file_data\" class=\"custom-file-input\" id=\"customFile\" onchange=\"console.log(this)\">
                            <label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
                    </div> 
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </form>

<?php include('includes/_footer.php'); ?>", "admin/upload_video.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\admin\\upload_video.html.twig");
    }
}
