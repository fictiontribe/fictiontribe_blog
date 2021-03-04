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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/head.htm */
class __TwigTemplate_9a8997213af9a6a4d2e26abd5e3b1faafb7c2e6e100876af157e8cc40c486403 extends \Twig\Template
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
        $tags = array("component" => 6, "if" => 10, "for" => 11, "styles" => 43);
        $filters = array("escape" => 8, "theme" => 15, "generateTitle" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if', 'for', 'styles'],
                ['escape', 'theme', 'generateTitle'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        
        ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "        
        <meta name=\"author\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 8), "first_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 8), "last_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo " | Fiction Tribe\">
       
       ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 10), "count", [], "any", false, false, true, 10)) {
            echo "  
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "            <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "         ";
        } else {
            echo "   
          <meta property=\"og:image\" content=\"";
            // line 15
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/background.jpg");
            echo "\">
        ";
        }
        // line 16
        echo " 
        
        <meta name=\"twitter:card\" content=\"summary_large_image\">
        <meta name=\"twitter:site\" content=\"@FictionTribe\">
        <meta name=\"twitter:title\" content=\"";
        // line 20
        echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_title", [], "any", false, false, true, 20), 20, $this->source)]);
        echo "\">
        <meta name=\"twitter:description\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\">
        <meta name=\"twitter:creator\" content=\"@FictionTribe\">
        <meta property=\"og:title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\" />
        <meta property=\"og:url\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "baseFileName", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\" />
        <meta name=\"twitter:domain\" content=\"fictiontribe.com\"/>
        <meta property=\"og:description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "seo_description", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"Fiction Tribe\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("apple-touch-icon.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("favicon-32x32.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("favicon-16x16.png");
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("site.webmanifest");
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <link href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scss/style.css");
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css\"> 
        ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 44
        echo "          
    </head>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  175 => 43,  170 => 41,  165 => 39,  161 => 38,  157 => 37,  153 => 36,  149 => 35,  142 => 31,  134 => 26,  129 => 24,  125 => 23,  120 => 21,  116 => 20,  110 => 16,  105 => 15,  100 => 14,  91 => 12,  87 => 11,  83 => 10,  76 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        
        {% component 'SeoCmsPage' %}
        
        <meta name=\"author\" content=\"{{ post.user.first_name }} {{ post.user.last_name }} | Fiction Tribe\">
       
       {% if post.featured_images.count %}  
        {% for image in post.featured_images %}
            <meta property=\"og:image\" content=\"{{ image.path }}\" />
        {% endfor %}
         {% else %}   
          <meta property=\"og:image\" content=\"{{ 'assets/images/background.jpg'|theme }}\">
        {% endif %} 
        
        <meta name=\"twitter:card\" content=\"summary_large_image\">
        <meta name=\"twitter:site\" content=\"@FictionTribe\">
        <meta name=\"twitter:title\" content=\"{{ post.seo_title | generateTitle}}\">
        <meta name=\"twitter:description\" content=\"{{post.seo_description}}\">
        <meta name=\"twitter:creator\" content=\"@FictionTribe\">
        <meta property=\"og:title\" content=\"{{post.seo_description}}\" />
        <meta property=\"og:url\" content=\"{{ this.page.baseFileName }}\" />
        <meta name=\"twitter:domain\" content=\"fictiontribe.com\"/>
        <meta property=\"og:description\" content=\"{{post.seo_description}}\" />
        <meta property=\"og:site_name\" content=\"Fiction Tribe\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'apple-touch-icon.png'|theme }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'favicon-32x32.png'|theme }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'favicon-16x16.png'|theme }}\">
        <link rel=\"manifest\" href=\"{{ 'site.webmanifest'|theme }}\">
        <link rel=\"mask-icon\" href=\"{{ 'safari-pinned-tab.svg'|theme }}\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <link href=\"{{ 'assets/scss/style.css'|theme }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css\"> 
        {% styles %}
          
    </head>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/head.htm", "");
    }
}
