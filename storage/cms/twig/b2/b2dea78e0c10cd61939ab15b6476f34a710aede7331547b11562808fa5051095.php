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

/* /Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/404.htm */
class __TwigTemplate_3327e86f2bb7cc3ece31d9196b298069b74520befcbc59ba40a24a9db1453c89 extends \Twig\Template
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
        $tags = array("partial" => 1);
        $filters = array("theme" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "   <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/scss/style.css");
        echo "\">
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
        <div id=\"swup\" class=\"four-oh-four\">

       
 <!--          <a href=\"https://fictiontribe.com/\">
            <img class=\"logostyle\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/mainlogo.png");
        echo "\" alt=\"Fiction Tribe\">
          </a> -->
          
        <div class=\"flexcontainer\">

          <div class=\"follow\" style=\"background-color: gold;\"></div>
          
           
        <div class=\"logo-wrap\">
        <button id=\"animatedButton\" onClick=\"ga('send', 'event', 'Animated Logo', 'Click', 'Video Version');\">
          
          <svg class=\"logosvg\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1000 1000\" >

              <clipPath id=\"clipping\" transform=\"scale(1 1)\">
                <polygon id=\"f\" points=\"662.890 992.400, 660.370 990.810, 513.080 915.500, 509.080 913.410, 509.080 809.210, 506.750 807.910, 409.520 759.630, 357.320 733.690, 353.600 731.900, 353.600 734.830, 353.250 849.640, 353.190 911.340, 353.100 947.860, 353.100 992.400, 352.000 992.400, 349.590 990.760, 208.380 919.560, 198.660 914.620, 198.660 912.100, 198.600 895.220, 198.410 819.380, 198.300 777.580, 198.230 702.290, 198.230 658.550, 195.150 653.550, 45.890 579.400, 43.450 575.660, 43.330 554.910, 42.830 489.000, 42.190 404.590, 41.890 380.240, 41.570 377.810, 41.570 370.620, 44.370 371.220, 85.300 392.000, 195.500 447.870, 197.770 448.870, 197.990 445.110, 198.100 304.770, 198.150 171.340, 198.150 101.340, 198.100 85.570, 198.660 85.570, 201.240 87.100, 252.410 112.700, 660.000 316.580, 662.750 318.050, 662.750 526.270, 353.000 371.700, 353.000 374.890, 353.440 443.800, 353.700 521.850, 356.260 526.070, 408.930 552.350, 506.330 601.000, 508.870 605.000, 508.920 622.160, 508.990 680.280, 509.120 778.540, 509.120 809.090, 591.540 767.920, 660.930 733.230, 663.440 732.230, 663.440 989.950, 662.890 992.400\" />
              </clipPath> 

              <path id=\"f-n-t\"  d=\"M967.37,370.79l-151.64,76V241.1l-152,75.83c-.79-.43-1.71-.95-2.66-1.42L253.49,111.59Q227.9,98.8,202.32,86c-.89-.45-1.72-1-2.58-1.53h-.56c0,5.25,0,10.51,0,15.77q0,35,0,70,0,66.72-.05,133.43,0,70.17-.11,140.34c0,1.16-.13,2.33-.22,3.76-1-.43-1.64-.68-2.27-1q-55.11-27.92-110.2-55.86-20.46-10.38-40.93-20.74a12,12,0,0,0-2.8-.61v7.2a20.22,20.22,0,0,1,.32,2.43c.12,8.11.24,16.23.3,24.35q.35,42.19.64,84.41.24,32.92.49,65.87c0,6.91.2,13.83.12,20.75,0,2,.76,2.91,2.44,3.74q74.64,37.06,149.26,74.15a4.73,4.73,0,0,1,3.08,5c-.11,14.58,0,29.16,0,43.74q0,37.63.07,75.29,0,20.9.11,41.8.09,37.92.19,75.84L199.7,911v2.52l9.72,4.94q70.58,35.6,141.16,71.2a20.08,20.08,0,0,1,2.41,1.64h1.11q0-22.27,0-44.54,0-18.27.09-36.52,0-30.85.06-61.7.15-57.41.35-114.81v-2.93c1.47.71,2.6,1.24,3.72,1.79l52.2,25.94,97.23,48.28c.25.12.48.26.72.39v1.52l1.43-.72.19.1V912.34l4,2.08,147.29,75.32.69.39v3.18l153.63-70.69V653.45L968.37,576.3ZM508.8,600.58l-153-75.82-1.33-154.3L661.77,524.09Z\" style=\"fill:#fff\"/>



              <foreignObject x=\"1\" y=\"1\" width=\"1000\" height=\"1000\" clip-path=\"url(#clipping)\">
                          <video id=\"svgVideo\" muted autoplay width=\"500\" height=\"500\" loop=\"true\" poster=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/video/static.gif");
        echo "\">
                              <source src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/video/4.mp4");
        echo "\" type=\"video/mp4\">
                          </video>
                  </foreignObject>


                  <clipPath id=\"clipTops\" transform=\"scale(1 1)\">
                <polygon class=\"caps\"  points=\"661.04 317.7 815.65 240.54 352.69 8.29 198.88 85.3 198.97 86.19 661.04 317.7\" />
                <polygon class=\"caps\"  points=\"353.23 523.45 506.6 446.64 661.03 523.99 507.5 600.46 353.23 523.45\" />
                <polygon class=\"caps\"  points=\"197.95 445.89 197.95 291.55 43.19 368.85 197.82 447.83 198.05 446.7 197.95 445.89\" />
                <polygon class=\"caps\"  points=\"815.67 292.44 815.67 445.89 815.33 445.89 815.75 446.1 969.92 370.18 815.67 292.44\" />
              </clipPath> 

              <foreignObject x=\"1\" y=\"1\" width=\"1000\" height=\"1000\" clip-path=\"url(#clipTops)\">
                          <img class=\"bg-image\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/bg-images/5.jpg");
        echo "\" alt=\"\">
                  </foreignObject>
              <polygon id=\"t\" points=\"968.37 576.3 967.37 370.79 815.73 446.77 815.73 241.1 661.1 318.23 661.4 524.11 509.46 600.24 508.46 808.75 661.71 731.29 662.1 993.31 815.73 922.62 815.73 653.45 968.37 576.3\" style=\"fill:#e2dd1e\"/>
              <polygon id=\"hover-t\" points=\"968.37 576.3 967.37 370.79 815.73 446.77 815.73 241.1 661.1 318.23 661.4 524.11 509.46 600.24 508.46 808.75 661.71 731.29 662.1 993.31 815.73 922.62 815.73 653.45 968.37 576.3\" style=\"fill:transparent\"/>
              <polygon id=\"hover-f\" points=\"662.890 992.400, 660.370 990.810, 513.080 915.500, 509.080 913.410, 509.080 809.210, 506.750 807.910, 409.520 759.630, 357.320 733.690, 353.600 731.900, 353.600 734.830, 353.250 849.640, 353.190 911.340, 353.100 947.860, 353.100 992.400, 352.000 992.400, 349.590 990.760, 208.380 919.560, 198.660 914.620, 198.660 912.100, 198.600 895.220, 198.410 819.380, 198.300 777.580, 198.230 702.290, 198.230 658.550, 195.150 653.550, 45.890 579.400, 43.450 575.660, 43.330 554.910, 42.830 489.000, 42.190 404.590, 41.890 380.240, 41.570 377.810, 41.570 370.620, 44.370 371.220, 85.300 392.000, 195.500 447.870, 197.770 448.870, 197.990 445.110, 198.100 304.770, 198.150 171.340, 198.150 101.340, 198.100 85.570, 198.660 85.570, 201.240 87.100, 252.410 112.700, 660.000 316.580, 662.750 318.050, 662.750 526.270, 353.000 371.700, 353.000 374.890, 353.440 443.800, 353.700 521.850, 356.260 526.070, 408.930 552.350, 506.330 601.000, 508.870 605.000, 508.920 622.160, 508.990 680.280, 509.120 778.540, 509.120 809.090, 591.540 767.920, 660.930 733.230, 663.440 732.230, 663.440 989.950, 662.890 992.400\"  style=\"fill:transparent\" />


           </svg> 
           <img class=\"word-mark\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/img/word-mark.svg");
        echo "\" alt=\"Fiction Tribe\">
          <div class=\"click-box\">
            <h1>404</h1>
          </div>
          <div>
            <h2>Page not found</h2>
          </div>
              
        </button>               
        
        <!-- Non Chrome or Firefox Fallback -->
        <div class=\"fallback\">
          <img class=\"fallback-img\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/static-img/1.svg");
        echo "\" alt=\"Fiction Tribe\" onClick=\"ga('send', 'event', 'Animated Logo', 'Click', 'Static Version');\">
          <!--  <div class=\"click-box\">
            <h6 class=\"clicker\"><b>CLICK TO EXPLORE</b></h6>
          </div> -->
        </div>
          
        </div>

          
        </div>
        


        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" class=\"svg-filters\" style=\"height: 0; position: absolute;\"> 
          <defs>
            <filter id=\"glitch\">
              <feTurbulence id=\"feturbulence\" type=\"fractalNoise\" baseFrequency=\"0.000001\" numOctaves=\"1\" result=\"warp\"></feTurbulence>
              <feOffset dx=\"0\" dy=\"0\" result=\"warpOffset\"></feOffset>
              <feDisplacementMap xChannelSelector=\"R\" yChannelSelector=\"G\" scale=\"30\" in=\"SourceGraphic\" in2=\"warpOffset\"></feDisplacementMap>
            </filter>
          </defs>
        </svg>

        

       
        </div>
         <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
        


        <!-- Footer -->
        ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js\"></script>
        <script src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/gsap-business-green/minified/MorphSVGPlugin.min.js");
        echo "\"></script>
      
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
        <script src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/404/js/scripts.js");
        echo "\"></script>
        


    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 105,  198 => 102,  195 => 101,  191 => 100,  156 => 68,  141 => 56,  130 => 48,  114 => 35,  110 => 34,  85 => 12,  78 => 7,  74 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
   <link rel=\"stylesheet\" href=\"{{ 'assets/404/scss/style.css'|theme }}\">
    <body>
        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
        <div id=\"swup\" class=\"four-oh-four\">

       
 <!--          <a href=\"https://fictiontribe.com/\">
            <img class=\"logostyle\" src=\"{{ 'assets/404/mainlogo.png'|theme }}\" alt=\"Fiction Tribe\">
          </a> -->
          
        <div class=\"flexcontainer\">

          <div class=\"follow\" style=\"background-color: gold;\"></div>
          
           
        <div class=\"logo-wrap\">
        <button id=\"animatedButton\" onClick=\"ga('send', 'event', 'Animated Logo', 'Click', 'Video Version');\">
          
          <svg class=\"logosvg\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1000 1000\" >

              <clipPath id=\"clipping\" transform=\"scale(1 1)\">
                <polygon id=\"f\" points=\"662.890 992.400, 660.370 990.810, 513.080 915.500, 509.080 913.410, 509.080 809.210, 506.750 807.910, 409.520 759.630, 357.320 733.690, 353.600 731.900, 353.600 734.830, 353.250 849.640, 353.190 911.340, 353.100 947.860, 353.100 992.400, 352.000 992.400, 349.590 990.760, 208.380 919.560, 198.660 914.620, 198.660 912.100, 198.600 895.220, 198.410 819.380, 198.300 777.580, 198.230 702.290, 198.230 658.550, 195.150 653.550, 45.890 579.400, 43.450 575.660, 43.330 554.910, 42.830 489.000, 42.190 404.590, 41.890 380.240, 41.570 377.810, 41.570 370.620, 44.370 371.220, 85.300 392.000, 195.500 447.870, 197.770 448.870, 197.990 445.110, 198.100 304.770, 198.150 171.340, 198.150 101.340, 198.100 85.570, 198.660 85.570, 201.240 87.100, 252.410 112.700, 660.000 316.580, 662.750 318.050, 662.750 526.270, 353.000 371.700, 353.000 374.890, 353.440 443.800, 353.700 521.850, 356.260 526.070, 408.930 552.350, 506.330 601.000, 508.870 605.000, 508.920 622.160, 508.990 680.280, 509.120 778.540, 509.120 809.090, 591.540 767.920, 660.930 733.230, 663.440 732.230, 663.440 989.950, 662.890 992.400\" />
              </clipPath> 

              <path id=\"f-n-t\"  d=\"M967.37,370.79l-151.64,76V241.1l-152,75.83c-.79-.43-1.71-.95-2.66-1.42L253.49,111.59Q227.9,98.8,202.32,86c-.89-.45-1.72-1-2.58-1.53h-.56c0,5.25,0,10.51,0,15.77q0,35,0,70,0,66.72-.05,133.43,0,70.17-.11,140.34c0,1.16-.13,2.33-.22,3.76-1-.43-1.64-.68-2.27-1q-55.11-27.92-110.2-55.86-20.46-10.38-40.93-20.74a12,12,0,0,0-2.8-.61v7.2a20.22,20.22,0,0,1,.32,2.43c.12,8.11.24,16.23.3,24.35q.35,42.19.64,84.41.24,32.92.49,65.87c0,6.91.2,13.83.12,20.75,0,2,.76,2.91,2.44,3.74q74.64,37.06,149.26,74.15a4.73,4.73,0,0,1,3.08,5c-.11,14.58,0,29.16,0,43.74q0,37.63.07,75.29,0,20.9.11,41.8.09,37.92.19,75.84L199.7,911v2.52l9.72,4.94q70.58,35.6,141.16,71.2a20.08,20.08,0,0,1,2.41,1.64h1.11q0-22.27,0-44.54,0-18.27.09-36.52,0-30.85.06-61.7.15-57.41.35-114.81v-2.93c1.47.71,2.6,1.24,3.72,1.79l52.2,25.94,97.23,48.28c.25.12.48.26.72.39v1.52l1.43-.72.19.1V912.34l4,2.08,147.29,75.32.69.39v3.18l153.63-70.69V653.45L968.37,576.3ZM508.8,600.58l-153-75.82-1.33-154.3L661.77,524.09Z\" style=\"fill:#fff\"/>



              <foreignObject x=\"1\" y=\"1\" width=\"1000\" height=\"1000\" clip-path=\"url(#clipping)\">
                          <video id=\"svgVideo\" muted autoplay width=\"500\" height=\"500\" loop=\"true\" poster=\"{{ 'assets/404/video/static.gif'|theme }}\">
                              <source src=\"{{ 'assets/404/video/4.mp4'|theme }}\" type=\"video/mp4\">
                          </video>
                  </foreignObject>


                  <clipPath id=\"clipTops\" transform=\"scale(1 1)\">
                <polygon class=\"caps\"  points=\"661.04 317.7 815.65 240.54 352.69 8.29 198.88 85.3 198.97 86.19 661.04 317.7\" />
                <polygon class=\"caps\"  points=\"353.23 523.45 506.6 446.64 661.03 523.99 507.5 600.46 353.23 523.45\" />
                <polygon class=\"caps\"  points=\"197.95 445.89 197.95 291.55 43.19 368.85 197.82 447.83 198.05 446.7 197.95 445.89\" />
                <polygon class=\"caps\"  points=\"815.67 292.44 815.67 445.89 815.33 445.89 815.75 446.1 969.92 370.18 815.67 292.44\" />
              </clipPath> 

              <foreignObject x=\"1\" y=\"1\" width=\"1000\" height=\"1000\" clip-path=\"url(#clipTops)\">
                          <img class=\"bg-image\" src=\"{{ 'assets/404/bg-images/5.jpg'|theme }}\" alt=\"\">
                  </foreignObject>
              <polygon id=\"t\" points=\"968.37 576.3 967.37 370.79 815.73 446.77 815.73 241.1 661.1 318.23 661.4 524.11 509.46 600.24 508.46 808.75 661.71 731.29 662.1 993.31 815.73 922.62 815.73 653.45 968.37 576.3\" style=\"fill:#e2dd1e\"/>
              <polygon id=\"hover-t\" points=\"968.37 576.3 967.37 370.79 815.73 446.77 815.73 241.1 661.1 318.23 661.4 524.11 509.46 600.24 508.46 808.75 661.71 731.29 662.1 993.31 815.73 922.62 815.73 653.45 968.37 576.3\" style=\"fill:transparent\"/>
              <polygon id=\"hover-f\" points=\"662.890 992.400, 660.370 990.810, 513.080 915.500, 509.080 913.410, 509.080 809.210, 506.750 807.910, 409.520 759.630, 357.320 733.690, 353.600 731.900, 353.600 734.830, 353.250 849.640, 353.190 911.340, 353.100 947.860, 353.100 992.400, 352.000 992.400, 349.590 990.760, 208.380 919.560, 198.660 914.620, 198.660 912.100, 198.600 895.220, 198.410 819.380, 198.300 777.580, 198.230 702.290, 198.230 658.550, 195.150 653.550, 45.890 579.400, 43.450 575.660, 43.330 554.910, 42.830 489.000, 42.190 404.590, 41.890 380.240, 41.570 377.810, 41.570 370.620, 44.370 371.220, 85.300 392.000, 195.500 447.870, 197.770 448.870, 197.990 445.110, 198.100 304.770, 198.150 171.340, 198.150 101.340, 198.100 85.570, 198.660 85.570, 201.240 87.100, 252.410 112.700, 660.000 316.580, 662.750 318.050, 662.750 526.270, 353.000 371.700, 353.000 374.890, 353.440 443.800, 353.700 521.850, 356.260 526.070, 408.930 552.350, 506.330 601.000, 508.870 605.000, 508.920 622.160, 508.990 680.280, 509.120 778.540, 509.120 809.090, 591.540 767.920, 660.930 733.230, 663.440 732.230, 663.440 989.950, 662.890 992.400\"  style=\"fill:transparent\" />


           </svg> 
           <img class=\"word-mark\" src=\"{{ 'assets/404/img/word-mark.svg'|theme }}\" alt=\"Fiction Tribe\">
          <div class=\"click-box\">
            <h1>404</h1>
          </div>
          <div>
            <h2>Page not found</h2>
          </div>
              
        </button>               
        
        <!-- Non Chrome or Firefox Fallback -->
        <div class=\"fallback\">
          <img class=\"fallback-img\" src=\"{{ 'assets/404/static-img/1.svg'|theme }}\" alt=\"Fiction Tribe\" onClick=\"ga('send', 'event', 'Animated Logo', 'Click', 'Static Version');\">
          <!--  <div class=\"click-box\">
            <h6 class=\"clicker\"><b>CLICK TO EXPLORE</b></h6>
          </div> -->
        </div>
          
        </div>

          
        </div>
        


        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" class=\"svg-filters\" style=\"height: 0; position: absolute;\"> 
          <defs>
            <filter id=\"glitch\">
              <feTurbulence id=\"feturbulence\" type=\"fractalNoise\" baseFrequency=\"0.000001\" numOctaves=\"1\" result=\"warp\"></feTurbulence>
              <feOffset dx=\"0\" dy=\"0\" result=\"warpOffset\"></feOffset>
              <feDisplacementMap xChannelSelector=\"R\" yChannelSelector=\"G\" scale=\"30\" in=\"SourceGraphic\" in2=\"warpOffset\"></feDisplacementMap>
            </filter>
          </defs>
        </svg>

        

       
        </div>
         <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script> -->
        


        <!-- Footer -->
        {% partial 'site/footer' %}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js\"></script>
        <script src=\"{{ 'assets/404/gsap-business-green/minified/MorphSVGPlugin.min.js'|theme }}\"></script>
      
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
        <script src=\"{{ 'assets/404/js/scripts.js'|theme }}\"></script>
        


    </body>
</html>", "/Applications/MAMP/htdocs/articles/themes/fictiontribe/layouts/404.htm", "");
    }
}
