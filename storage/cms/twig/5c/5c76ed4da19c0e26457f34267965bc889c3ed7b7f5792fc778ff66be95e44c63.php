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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/footer.htm */
class __TwigTemplate_1895719f34e254ab9c539910e8d8a77637bce37254ca53da0717d5193d82e4b0 extends \Twig\Template
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
        $tags = array("framework" => 42, "scripts" => 43);
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'scripts'],
                ['theme'],
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
        echo "<footer id=\"layout-footer\">
<div id=\"footer\" class=\"mt-5\">
    <div class=\"container\">
     
        <div class=\"row\">
            <div class=\"col-6 col-md-9 col-lg-10\">
              <a href=\"https://fictiontribe.com/\">
                  <img class=\"logo\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fictiontribe-logo-white.png");
        echo "\" alt=\"Fiction Tribe\">
              </a>
            </div>
            <div class=\" col-lg-2 col-md-3 col-sm-6 ms-auto  col-6\">
                <div id=\"contact-info\">
                   <a href=\"https://www.google.com/maps/place/The+Glass+Lab/@45.5101118,-122.6645032,17z/data=!3m1!4b1!4m5!3m4!1s0x54950a735f9c9369:0xf3afb20907cd199f!8m2!3d45.5101118!4d-122.6623145\" target=\"_blank\"> The Glass Lab<br>
    \t\t\t\t\t350 SE Mill St.<br>
    \t\t\t\t\tPortland, OR 97214<br>
    \t\t\t\t\tSuite 8<br></a>
\t\t\t\t\t   <span class=\"appleLinksWhite\">503.954.2268</span><p></p>
\t\t\t\t      </div>
\t\t\t\t
\t\t\t
        </div>
    </div>
</div>
 </footer>

<!-- Scripts -->
<script
  src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
  integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
  crossorigin=\"anonymous\"></script>
 <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/lazyload.js");
        echo "\"></script> 
<script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/dist/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/swup/SwupScrollPlugin.min.js");
        echo "\"></script> 
<script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/swup/SwupJsPlugin.min.js");
        echo "\"></script> 
 <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/swup/swup.js");
        echo "\"></script> 
 <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/gsap-business-green/minified/gsap.min.js");
        echo "\"></script> 
<script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/paroller/dist/jquery.paroller.min.js");
        echo "\"></script>
 <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/scripts.js");
        echo "\"></script> 
<!-- <script src=\"https://unpkg.com/jarallax@1/dist/jarallax.min.js\"></script> -->
<!-- <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>  -->
";
        // line 42
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  138 => 42,  134 => 41,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"layout-footer\">
<div id=\"footer\" class=\"mt-5\">
    <div class=\"container\">
     
        <div class=\"row\">
            <div class=\"col-6 col-md-9 col-lg-10\">
              <a href=\"https://fictiontribe.com/\">
                  <img class=\"logo\" src=\"{{ 'assets/images/fictiontribe-logo-white.png'|theme }}\" alt=\"Fiction Tribe\">
              </a>
            </div>
            <div class=\" col-lg-2 col-md-3 col-sm-6 ms-auto  col-6\">
                <div id=\"contact-info\">
                   <a href=\"https://www.google.com/maps/place/The+Glass+Lab/@45.5101118,-122.6645032,17z/data=!3m1!4b1!4m5!3m4!1s0x54950a735f9c9369:0xf3afb20907cd199f!8m2!3d45.5101118!4d-122.6623145\" target=\"_blank\"> The Glass Lab<br>
    \t\t\t\t\t350 SE Mill St.<br>
    \t\t\t\t\tPortland, OR 97214<br>
    \t\t\t\t\tSuite 8<br></a>
\t\t\t\t\t   <span class=\"appleLinksWhite\">503.954.2268</span><p></p>
\t\t\t\t      </div>
\t\t\t\t
\t\t\t
        </div>
    </div>
</div>
 </footer>

<!-- Scripts -->
<script
  src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
  integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\"
  crossorigin=\"anonymous\"></script>
 <script src=\"{{ 'assets/javascript/lazyload.js'|theme }}\"></script> 
<script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
<script src=\"{{ 'assets/bootstrap5/dist/js/bootstrap.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/swup/SwupScrollPlugin.min.js'|theme }}\"></script> 
<script src=\"{{ 'assets/swup/SwupJsPlugin.min.js'|theme }}\"></script> 
 <script src=\"{{ 'assets/swup/swup.js'|theme }}\"></script> 
 <script src=\"{{ 'assets/gsap-business-green/minified/gsap.min.js'|theme }}\"></script> 
<script src=\"{{ 'assets/javascript/paroller/dist/jquery.paroller.min.js'|theme }}\"></script>
 <script src=\"{{ 'assets/javascript/scripts.js'|theme }}\"></script> 
<!-- <script src=\"https://unpkg.com/jarallax@1/dist/jarallax.min.js\"></script> -->
<!-- <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>  -->
{% framework extras %}
{% scripts %}", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/partials/site/footer.htm", "");
    }
}
