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

/* /Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_0f13a90a22714d7cc0e7c2b232460b1aa897c903c473f67edff7ab548822821e extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 6, "for" => 7);
        $filters = array("escape" => 8, "theme" => 11, "raw" => 61, "join" => 67, "map" => 67, "trans" => 69, "date" => 70);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'theme', 'raw', 'join', 'map', 'trans', 'date'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "
    

    <div id=\"hero\">
      ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 6), "count", [], "any", false, false, true, 6)) {
            echo "  
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "         ";
        } else {
            echo "   
          <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fictiontribe-logo-white.png");
            echo "\">
        ";
        }
        // line 12
        echo "    
          <div id=\"headlines\">
            <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h1>

            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getField", [0 => "subtitle"], "method", false, false, true, 16)) {
            // line 17
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getField", [0 => "subtitle"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</h2> 
            ";
        }
        // line 18
        echo "   
          </div>
    </div>
    
  
    </div>
<div class=\"body-bg\">
    <article>
        <div id=\"attributation-bar\">
                    <div id=\"author-avatar\">
                       <img class=\"avatar\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 28), "getAvatarThumb", [0 => 60], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\" />
                        </div>
                    <div id=\"author-info\">
                        
                        <span class=\"author-name\">";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 32), "first_name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 32), "last_name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</span>
                        <br>
                        <span class=\"author-title\">Chief Operating Officer</span>
                        <br>
                        <span class=\"time-stamp\">Feb 25, 2021</span>
                    </div>
                    <div id=\"social-links\">
                        <a href=\"https://twitter.com/fictiontribe\" target=\"_blank\">
                            <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/twitter_black.svg");
        echo "\" border=\"0\" width=\"30\" height=\"30\" alt=\"Twitter\"></a>
                        <a href=\"https://www.facebook.com/thefictiontribe\" target=\"_blank\">
                            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/facebook_black.svg");
        echo "\" border=\"0\" width=\"30\" height=\"30\" alt=\"Facebook\"></a>
                        <a href=\"https://www.youtube.com/channel/UCgUDPbWwQAz3Dq_8jTSggfw\" target=\"_blank\">
                            <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/youtube_black.sv");
        echo "g\" border=\"0\" width=\"30\" height=\"30\" alt=\"YouTube\"></a>
                        <a href=\"https://www.linkedin.com/company/the-fiction-tribe\" target=\"_blank\">
                            <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/linkedin_black.s");
        echo "vg\" border=\"0\" width=\"30\" height=\"30\" alt=\"LinkedIN\"></a>
                        <a href=\"https://instagram.com/fictiontribe/\" target=\"_blank\">
                            <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/instagram_black.sv");
        echo "g\" border=\"0\" width=\"30\" height=\"30\" alt=\"Instagram\"></a>
                        <a href=\"https://www.pinterest.com/thefictiontribe/\" target=\"_blank\" alt=\"Pintrest\">
                            <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social/pintrest_black.svg");
        echo "\" border=\"0\" width=\"30\" height=\"30\"></a>
                    </div>
                    <div class=\"brclear\"></div>
            </div>
        <div class=\"container\">
            <div class=\"row\">
                

                <div class=\"col-lg-9 order-lg-1\">
                    <div id=\"article-body\">
                    
                        ";
        // line 61
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 61), 61, $this->source);
        echo "

                        <p><strong>Need a hand making engaging content that meets your clients' needs when and where they are? Hit us up at the Fiction Tribe. We're happy to help <a href=\"mailto:Talk@fictiontribe.com\">(Talk@fictiontribe.com)</a></strong></p>

                            <p class=\"info\">
                                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 66), "count", [], "any", false, false, true, 66)) {
            // line 67
            echo "                                    ";
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 67), 67, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 67), 67, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 67), 67, $this->source)) . "</a>"); }), ", ");
            // line 68
            echo "
                                    ";
            // line 69
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 70
($context["post"] ?? null), "published_at", [], "any", false, false, true, 70), 70, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>             // line 71
($context["categoryLinks"] ?? null)]]);
            // line 72
            echo "
                                ";
        } else {
            // line 74
            echo "                                    ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 75
($context["post"] ?? null), "published_at", [], "any", false, false, true, 75), 75, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 76
            echo "
                                ";
        }
        // line 78
        echo "                            </p>
                    </div>
                        
                </div>

                <div id=\"sidebar\" class=\"col-lg-3 order-lg-12\">
                    <h4>About Fiction&nbsp;Tribe</h4>
                    <span class=\"detail\">We focus on moving from marketing products to making the case for outcomes, always letting real time data drive results. Maximizing MarTech platform investments, creating smart interactive content that increases engagement, and driving leads is our specialty.</span>
                </div>
                    
            </div>
        </div>
    </article>    

</div>

";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 78,  213 => 76,  211 => 75,  209 => 74,  205 => 72,  203 => 71,  202 => 70,  201 => 69,  198 => 68,  195 => 67,  193 => 66,  185 => 61,  171 => 50,  166 => 48,  161 => 46,  156 => 44,  151 => 42,  146 => 40,  133 => 32,  126 => 28,  114 => 18,  108 => 17,  106 => 16,  101 => 14,  97 => 12,  92 => 11,  87 => 10,  78 => 8,  74 => 7,  70 => 6,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

    

    <div id=\"hero\">
      {% if post.featured_images.count %}  
        {% for image in post.featured_images %}
            <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"{{ image.path }}\">
        {% endfor %}
         {% else %}   
          <div class=\"parallax lazy\" id=\"masthead-image\" data-src=\"{{ 'assets/images/fictiontribe-logo-white.png'|theme }}\">
        {% endif %}    
          <div id=\"headlines\">
            <h1>{{post.title}}</h1>

            {% if post.getField('subtitle') %}
                <h2>{{ post.getField('subtitle')}}</h2> 
            {% endif %}   
          </div>
    </div>
    
  
    </div>
<div class=\"body-bg\">
    <article>
        <div id=\"attributation-bar\">
                    <div id=\"author-avatar\">
                       <img class=\"avatar\" src=\"{{ post.user.getAvatarThumb(60) }}\" />
                        </div>
                    <div id=\"author-info\">
                        
                        <span class=\"author-name\">{{ post.user.first_name }} {{ post.user.last_name }}</span>
                        <br>
                        <span class=\"author-title\">Chief Operating Officer</span>
                        <br>
                        <span class=\"time-stamp\">Feb 25, 2021</span>
                    </div>
                    <div id=\"social-links\">
                        <a href=\"https://twitter.com/fictiontribe\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/social/twitter_black.svg'|theme }}\" border=\"0\" width=\"30\" height=\"30\" alt=\"Twitter\"></a>
                        <a href=\"https://www.facebook.com/thefictiontribe\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/social/facebook_black.svg'|theme }}\" border=\"0\" width=\"30\" height=\"30\" alt=\"Facebook\"></a>
                        <a href=\"https://www.youtube.com/channel/UCgUDPbWwQAz3Dq_8jTSggfw\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/social/youtube_black.sv'|theme }}g\" border=\"0\" width=\"30\" height=\"30\" alt=\"YouTube\"></a>
                        <a href=\"https://www.linkedin.com/company/the-fiction-tribe\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/social/linkedin_black.s'|theme }}vg\" border=\"0\" width=\"30\" height=\"30\" alt=\"LinkedIN\"></a>
                        <a href=\"https://instagram.com/fictiontribe/\" target=\"_blank\">
                            <img src=\"{{ 'assets/images/social/instagram_black.sv'|theme }}g\" border=\"0\" width=\"30\" height=\"30\" alt=\"Instagram\"></a>
                        <a href=\"https://www.pinterest.com/thefictiontribe/\" target=\"_blank\" alt=\"Pintrest\">
                            <img src=\"{{ 'assets/images/social/pintrest_black.svg'|theme }}\" border=\"0\" width=\"30\" height=\"30\"></a>
                    </div>
                    <div class=\"brclear\"></div>
            </div>
        <div class=\"container\">
            <div class=\"row\">
                

                <div class=\"col-lg-9 order-lg-1\">
                    <div id=\"article-body\">
                    
                        {{ post.content_html | raw }}

                        <p><strong>Need a hand making engaging content that meets your clients' needs when and where they are? Hit us up at the Fiction Tribe. We're happy to help <a href=\"mailto:Talk@fictiontribe.com\">(Talk@fictiontribe.com)</a></strong></p>

                            <p class=\"info\">
                                {% if post.categories.count %}
                                    {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                                    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                                        categories: categoryLinks
                                    }) }}
                                {% else %}
                                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                        date: post.published_at | date('rainlab.blog::lang.post.date_format'|trans)
                                    }) }}
                                {% endif %}
                            </p>
                    </div>
                        
                </div>

                <div id=\"sidebar\" class=\"col-lg-3 order-lg-12\">
                    <h4>About Fiction&nbsp;Tribe</h4>
                    <span class=\"detail\">We focus on moving from marketing products to making the case for outcomes, always letting real time data drive results. Maximizing MarTech platform investments, creating smart interactive content that increases engagement, and driving leads is our specialty.</span>
                </div>
                    
            </div>
        </div>
    </article>    

</div>

", "/Applications/MAMP/htdocs/articles/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
