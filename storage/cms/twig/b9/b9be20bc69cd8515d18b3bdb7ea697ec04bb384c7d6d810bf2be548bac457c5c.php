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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/default.htm */
class __TwigTemplate_da3394de4a42ce0e7782e85c4dcfa69be89776eceaa5b8b78195e66489727458 extends \Twig\Template
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
        $tags = array("partial" => 1, "if" => 11, "page" => 22);
        $filters = array("media" => 12, "theme" => 14, "escape" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if', 'page'],
                ['media', 'theme', 'escape'],
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
        // line 11
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "extras", [], "any", false, false, true, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "featuredimage", [], "any", false, false, true, 11)) {
            echo " 
         <div class=\"mb-5 parallax\" id=\"masthead-image\" data-image-src=\"";
            // line 12
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "extras", [], "any", false, false, true, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "featuredimage", [], "any", false, false, true, 12), 12, $this->source));
            echo "\"> 
          ";
        } else {
            // line 14
            echo "         <div class=\"mb-5 parallax\" id=\"masthead-image\" style=\"background-image: url('";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background.jpg");
            echo "');\">
          ";
        }
        // line 15
        echo " 
            <div id=\"headlines\">
                <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</h1>
                <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "description", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h2>
            </div>
        </div>

        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "       
        </div>
        <!-- Footer -->
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        


    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  119 => 26,  114 => 23,  112 => 22,  105 => 18,  101 => 17,  97 => 15,  91 => 14,  86 => 12,  82 => 11,  76 => 7,  72 => 6,  66 => 2,  62 => 1,);
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
         {% if viewBag.extras[0].featuredimage %} 
         <div class=\"mb-5 parallax\" id=\"masthead-image\" data-image-src=\"{{ viewBag.extras[0].featuredimage | media }}\"> 
          {% else %}
         <div class=\"mb-5 parallax\" id=\"masthead-image\" style=\"background-image: url('{{ 'assets/images/background.jpg'|theme }}');\">
          {% endif %} 
            <div id=\"headlines\">
                <h1>{{this.page.title}}</h1>
                <h2>{{this.page.description}}</h2>
            </div>
        </div>

        {% page %}
       
        </div>
        <!-- Footer -->
        {% partial 'site/footer' %}
        


    </body>
</html>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/default.htm", "");
    }
}
