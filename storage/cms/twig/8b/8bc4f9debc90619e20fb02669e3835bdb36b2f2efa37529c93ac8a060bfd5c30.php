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

/* /Applications/MAMP/htdocs/articles/plugins/anandpatel/seoextension/components/cmspage/default.htm */
class __TwigTemplate_9c92ecab6ccefd7a22e91b3454fe50e2eca3b18a7ad362767e14acc6c39f2fbc extends \Twig\Template
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
        $tags = array("if" => 1, "placeholder" => 2);
        $filters = array("escape" => 9, "generateTitle" => 13, "generateCanonicalUrl" => 27, "raw" => 32, "otherMetaTags" => 32);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'placeholder'],
                ['escape', 'generateTitle', 'generateCanonicalUrl', 'raw', 'otherMetaTags'],
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
        if (($context["hasBlog"] ?? null)) {
            // line 2
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 5
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 8)) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 12)) {
                // line 13
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 13), 13, $this->source)]);
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 16)) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">

";
            }
            // line 20
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 20)) {
                // line 21
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 24)) {
                // line 25
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 27
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
                echo "
    ";
            }
            // line 29
            echo "
    <meta name=\"robots\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">

    ";
            // line 32
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
            echo "

    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 34)) {
                // line 35
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 38)) {
                // line 39
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 42)) {
                // line 43
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 46)) {
                // line 47
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 50)) {
                // line 51
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 53
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/plugins/anandpatel/seoextension/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 53,  196 => 51,  194 => 50,  191 => 49,  185 => 47,  183 => 46,  180 => 45,  174 => 43,  172 => 42,  169 => 41,  163 => 39,  161 => 38,  158 => 37,  152 => 35,  150 => 34,  145 => 32,  138 => 30,  135 => 29,  129 => 27,  123 => 25,  121 => 24,  118 => 23,  112 => 21,  109 => 20,  102 => 17,  100 => 16,  97 => 15,  91 => 13,  89 => 12,  86 => 11,  80 => 9,  78 => 8,  75 => 7,  71 => 5,  69 => 2,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if hasBlog %}
    {% placeholder meta default %}

    {% endplaceholder %}

{% else %}

    {% if __SELF__.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
    {% endif %}

    {% if __SELF__.seo_title %}
        <title>{{__SELF__.seo_title | generateTitle}}</title>
    {% endif %}

    {% if __SELF__.seo_description %}
        <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">

{% endif %}
    {% if __SELF__.seo_keywords %}
        <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
    {% endif %}

    {% if __SELF__.canonical_url %}
        <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {% if __SELF__.ogTitle %}
        <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
    {% endif %}

    {% if __SELF__.ogUrl %}
        <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
    {% endif %}

    {% if __SELF__.ogSiteName %}
        <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
    {% endif %}

    {% if __SELF__.ogDescription %}
        <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
    {% endif %}

    {% if __SELF__.ogFbAppId %}
        <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
    {% endif %}

{% endif %}
", "/Applications/MAMP/htdocs/articles/plugins/anandpatel/seoextension/components/cmspage/default.htm", "");
    }
}
