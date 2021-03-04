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

/* /Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_bbfd54d0fbe506d28d9f8236fec2af6ea56af005b3022b6f06ac5cac1580a031 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 9);
        $filters = array("escape" => 6, "join" => 10, "map" => 10, "trans" => 12, "date" => 13, "raw" => 23, "page" => 34);
        $functions = array("str_limit" => 23, "range" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'join', 'map', 'trans', 'date', 'raw', 'page'],
                ['str_limit', 'range']
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<ul class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "         <li class=\"mt-3\">
            <h3><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</a></h3>

            <p class=\"info\">
                ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 9), "count", [], "any", false, false, true, 9)) {
                // line 10
                echo "                    ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 10), 10, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 10), 10, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 10), 10, $this->source)) . "</a>"); }), ", ");
                // line 11
                echo "
                    ";
                // line 12
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 13
$context["post"], "published_at", [], "any", false, false, true, 13), 13, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>                 // line 14
($context["categoryLinks"] ?? null)]]);
                // line 15
                echo "
                ";
            } else {
                // line 17
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 18
$context["post"], "published_at", [], "any", false, false, true, 18), 18, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 19
                echo "
                ";
            }
            // line 21
            echo "            </p>

            <p class=\"excerpt\">";
            // line 23
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 23), 23, $this->source), 75]);
            echo "</p>
            <hr>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</ul>

";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 31) > 1)) {
            // line 32
            echo "    <ul class=\"pagination\">
        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 33) > 1)) {
                // line 34
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 34), "baseFileName", [], "any", false, false, true, 34), 34, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 34) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 34) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 37)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 38
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 38) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 39
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "baseFileName", [], "any", false, false, true, 39), 39, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 39) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 39, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 43) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 43))) {
                // line 44
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 44), "baseFileName", [], "any", false, false, true, 44), 44, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 44) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 44) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 46
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 46,  175 => 44,  173 => 43,  170 => 42,  159 => 39,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 33,  136 => 32,  134 => 31,  130 => 29,  121 => 27,  112 => 23,  108 => 21,  104 => 19,  102 => 18,  100 => 17,  96 => 15,  94 => 14,  93 => 13,  92 => 12,  89 => 11,  86 => 10,  84 => 9,  76 => 6,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}

<ul class=\"post-list\">
    {% for post in posts %}
         <li class=\"mt-3\">
            <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>

            <p class=\"info\">
                {% if post.categories.count %}
                    {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                        categories: categoryLinks
                    }) }}
                {% else %}
                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                    }) }}
                {% endif %}
            </p>

            <p class=\"excerpt\">{{ str_limit(post.summary|raw, 75) }}</p>
            <hr>
        </li>
    {% else %}
        <li class=\"no-data\">{{ __SELF__.noPostsMessage }}</li>
    {% endfor %}
</ul>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
", "/Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
