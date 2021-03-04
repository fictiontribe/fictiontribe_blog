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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/category.htm */
class __TwigTemplate_ee8f1efb49bc28dcf33cc18aa6182da313f536716d3d66986a70a42293a45dd0 extends \Twig\Template
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
        $tags = array("partial" => 1, "if" => 10, "page" => 22);
        $filters = array("media" => 11, "theme" => 13, "escape" => 16);
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
        echo "    <body>

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
        // line 10
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "extras", [], "any", false, false, true, 10)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "featuredimage", [], "any", false, false, true, 10)) {
            echo " 
         <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"";
            // line 11
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "extras", [], "any", false, false, true, 11)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "featuredimage", [], "any", false, false, true, 11), 11, $this->source));
            echo "\"> 
          ";
        } else {
            // line 13
            echo "         <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background.jpg");
            echo "\">
          ";
        }
        // line 14
        echo " 
            <div id=\"headlines\">
                <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</h1>
                <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</h2> 
            </div>
        </div>

        <div class=\"body-bg pt-5\">
          ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "        </div>
      
        </div>
        <!-- Footer -->
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  120 => 27,  114 => 23,  112 => 22,  104 => 17,  100 => 16,  96 => 14,  90 => 13,  85 => 11,  81 => 10,  76 => 7,  72 => 6,  66 => 2,  62 => 1,);
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
         <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"{{ viewBag.extras[0].featuredimage | media }}\"> 
          {% else %}
         <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"{{ 'assets/images/background.jpg'|theme }}\">
          {% endif %} 
            <div id=\"headlines\">
                <h1>{{ category.name }}</h1>
                <h2>{{this.page.description}}</h2> 
            </div>
        </div>

        <div class=\"body-bg pt-5\">
          {% page %}
        </div>
      
        </div>
        <!-- Footer -->
        {% partial 'site/footer' %}
    

    </body>
</html>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/category.htm", "");
    }
}
