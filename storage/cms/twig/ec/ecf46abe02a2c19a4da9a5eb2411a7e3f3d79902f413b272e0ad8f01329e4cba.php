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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/article.htm */
class __TwigTemplate_732af51026c8d51391f8fe41ff671d9a0f711be63358952ffa4123d32b79cdb0 extends \Twig\Template
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
        $tags = array("partial" => 1, "page" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
                [],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
    <body>
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "        </header>
        <div id=\"swup\">

        <!-- Content -->
    
         
          ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 14
        echo "
     
        </div>
        <!-- Footer -->
        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "   
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  92 => 18,  86 => 14,  84 => 13,  76 => 7,  72 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}

    <body>
        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
        <div id=\"swup\">

        <!-- Content -->
    
         
          {% page %}

     
        </div>
        <!-- Footer -->
        {% partial 'site/footer' %}
   
    </body>
</html>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/article.htm", "");
    }
}
