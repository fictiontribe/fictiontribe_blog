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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/header.htm */
class __TwigTemplate_f2cd694e87f7744570fa0e883cf8f9f1a19e3d231102149883f37c08b34c0e5e extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("page" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Nav -->

<nav id=\"layout-nav\" class=\"navbar fixed-top navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
     <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Fiction Tribe Articles</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
     <!--  <div class=\"navbar-nav\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
        <a class=\"nav-link\" href=\"#\">Features</a>
        <a class=\"nav-link\" href=\"#\">Pricing</a>
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
      </div> -->
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->

<nav id=\"layout-nav\" class=\"navbar fixed-top navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
     <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Fiction Tribe Articles</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
     <!--  <div class=\"navbar-nav\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
        <a class=\"nav-link\" href=\"#\">Features</a>
        <a class=\"nav-link\" href=\"#\">Pricing</a>
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
      </div> -->
    </div>
  </div>
</nav>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/header.htm", "");
    }
}
