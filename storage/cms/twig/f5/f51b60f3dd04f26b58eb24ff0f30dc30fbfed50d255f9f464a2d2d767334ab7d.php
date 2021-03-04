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

/* /Applications/MAMP/htdocs/articles/plugins/pollozen/nextprevpost/components/nextprev/default.htm */
class __TwigTemplate_2e8f56407701f91b2f62dcde7bc72d7b441565bd293362a6c5f61c80929ce97e extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 7);
        $filters = array("escape" => 9, "time_diff" => 12, "date" => 14, "strftime" => 14);
        $functions = array("date" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'time_diff', 'date', 'strftime'],
                ['date']
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
        $context["prev"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prevPost", [], "any", false, false, true, 1);
        // line 2
        $context["next"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "nextPost", [], "any", false, false, true, 2);
        // line 3
        echo "<div class=\"container\">

    <div id=\"next-prev\" class=\"row\">
        <div class=\"prev-post col-sm-6\">
    ";
        // line 7
        if (($context["prev"] ?? null)) {
            // line 8
            echo "            <span class=\"small-title\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Previous</span>
            <h4><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a></h4>
           <!--  <span class=\"small\">
                ";
            // line 11
            if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 11)) > twig_date_converter($this->env, "-7days"))) {
                // line 12
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 12), 12, $this->source)]);
                echo "
                ";
            } else {
                // line 14
                echo "                    <time datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 14), 14, $this->source), "Y-m-dTH:i:sP"), "html", null, true);
                echo "\"> <i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> ";
                echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 14), 14, $this->source), "%A"]);
                echo ", ";
                echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 14), 14, $this->source), "%e %B %Y"]);
                echo "</time>
                ";
            }
            // line 16
            echo "
                <meta itemprop=\"datePublished\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["prev"] ?? null), "published_at", [], "any", false, false, true, 17), 17, $this->source), "Y-m-dTH:i:sZ"), "html", null, true);
            echo "\"/>
            </span> -->
    ";
        }
        // line 20
        echo "        </div>
        <div class=\"next-post col-sm-6 text-end\">
    ";
        // line 22
        if (($context["next"] ?? null)) {
            // line 23
            echo "            <span class=\"small-title\">Next <i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></span>
            <h4><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</a></h4>
          <!--   <span class=\"small\">
                ";
            // line 26
            if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 26)) > twig_date_converter($this->env, "-7days"))) {
                // line 27
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 27), 27, $this->source)]);
                echo "
                ";
            } else {
                // line 29
                echo "                    <time datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 29), 29, $this->source), "Y-m-dTH:i:sP"), "html", null, true);
                echo "\"> <i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> ";
                echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 29), 29, $this->source), "%A"]);
                echo ", ";
                echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 29), 29, $this->source), "%e %B %Y"]);
                echo "</time>
                ";
            }
            // line 31
            echo "                <meta itemprop=\"datePublished\" content=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["next"] ?? null), "published_at", [], "any", false, false, true, 31), 31, $this->source), "Y-m-dTH:i:sZ"), "html", null, true);
            echo "\"/>
            </span> -->
    ";
        }
        // line 34
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/plugins/pollozen/nextprevpost/components/nextprev/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  149 => 31,  139 => 29,  133 => 27,  131 => 26,  122 => 24,  119 => 23,  117 => 22,  113 => 20,  107 => 17,  104 => 16,  94 => 14,  88 => 12,  86 => 11,  77 => 9,  74 => 8,  72 => 7,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set prev = __SELF__.prevPost %}
{% set next = __SELF__.nextPost %}
<div class=\"container\">

    <div id=\"next-prev\" class=\"row\">
        <div class=\"prev-post col-sm-6\">
    {% if prev %}
            <span class=\"small-title\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i> Previous</span>
            <h4><a href=\"{{prev.url}}\" title=\"{{ prev.title }}\">{{ prev.title }}</a></h4>
           <!--  <span class=\"small\">
                {% if date(prev.published_at) > date('-7days') %}
                    {{ prev.published_at | time_diff }}
                {% else %}
                    <time datetime=\"{{ prev.published_at|date('Y-m-d\\TH:i:sP') }}\"> <i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> {{ prev.published_at | strftime('%A') }}, {{ prev.published_at | strftime('%e %B %Y') }}</time>
                {% endif %}

                <meta itemprop=\"datePublished\" content=\"{{ prev.published_at|date('Y-m-dTH:i:sZ') }}\"/>
            </span> -->
    {% endif %}
        </div>
        <div class=\"next-post col-sm-6 text-end\">
    {% if next %}
            <span class=\"small-title\">Next <i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></span>
            <h4><a href=\"{{next.url}}\" title=\"{{ next.title }}\">{{ next.title }}</a></h4>
          <!--   <span class=\"small\">
                {% if date(next.published_at) > date('-7days') %}
                    {{ next.published_at | time_diff }}
                {% else %}
                    <time datetime=\"{{ next.published_at|date('Y-m-d\\TH:i:sP') }}\"> <i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i> {{ next.published_at | strftime('%A') }}, {{ next.published_at | strftime('%e %B %Y') }}</time>
                {% endif %}
                <meta itemprop=\"datePublished\" content=\"{{ next.published_at|date('Y-m-dTH:i:sZ') }}\"/>
            </span> -->
    {% endif %}
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/articles/plugins/pollozen/nextprevpost/components/nextprev/default.htm", "");
    }
}
