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

/* SiteBundle:Default:base.html.twig */
class __TwigTemplate_d0c0dd0161f7e65b67e3bfa62de551a4cdaecded13a23a102a9b579c170add60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_class' => [$this, 'block_html_class'],
            'css' => [$this, 'block_css'],
            'div_page' => [$this, 'block_div_page'],
            'site_header_class' => [$this, 'block_site_header_class'],
            'banner_content' => [$this, 'block_banner_content'],
            'content' => [$this, 'block_content'],
            'footerdescript' => [$this, 'block_footerdescript'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:base.html.twig"));

        // line 1
        $context["lang"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1);
        // line 2
        echo "


<!DOCTYPE html>

<html class=\"";
        // line 7
        $this->displayBlock('html_class', $context, $blocks);
        echo "\">



<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-175657114-1\"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }

        gtag('js', new Date());



        gtag('config', 'UA-175657114-1');

    </script>



    <meta charset=\"utf-8\" />

    <title>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 35, $this->source); })()), "home.title")) : ("home.title"))), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"Site officiel du Pass Santé\">

    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,200;1,400;1,500&display=swap\" rel=\"stylesheet\">

    <!-- Google Fonts -->

    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,700,800\" rel=\"stylesheet\">

    <link rel=\"shortcut Icon\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />

    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,700&amp;subset=latin-ext\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">

    <meta name=\"author\" content=\"MCM\">

    <meta name=\"viewport\"

        content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no\">


    <!-- Bootstrap & Styles -->

    <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/block_grid_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/jquery.circliful.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/slicknav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/video-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <style>

        @media (max-width: 1024px) {

            .mc_embed_signup_mobile {

                display: block;

                margin-bottom: 10px;

            }

        }


        @media (min-width: 1400px) {

            .slider-image-wrapper {
                position: relative;
                overflow: hidden;
                height: 600px;
            }


            .slider-image-wrapper img {
                position: absolute;
                margin-left: -674.5px;
                left: 50%;
            }

        }


      .form-id-block-wrapper input::placeholder {
            font-size: 13px;
        }


    </style>



    ";
        // line 132
        $this->displayBlock('css', $context, $blocks);
        // line 133
        echo "


    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v2/js/modernizr.js"), "html", null, true);
        echo "\"></script>

    <script>

        const current_url = \"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "uri", [], "any", false, false, false, 140), "html", null, true);
        echo "\";

        const upload_url = \"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads"), "html", null, true);
        echo "\";

    </script>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

    <script>

        \$(document).ready(function () {

            \$('.js-scrollTo').on('click', function () { // Au clic sur un élément

                var page = \$(this).attr('href'); // Page cible

                var speed = 2000; // Durée de l'animation (en ms)

                \$('html, body').animate({ scrollTop: \$(page).offset().top }, speed); // Go

                return false;

            });

        });

    </script>



    <!--Start of Tawk.to Script-->

    <!-- <script type=\"text/javascript\">

        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

        (function(){

        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];

        s1.async=true;

        s1.src='https://embed.tawk.to/5f574d5f4704467e89ed0771/1ehmipovq';

        s1.charset='UTF-8';

        s1.setAttribute('crossorigin','*');

        s0.parentNode.insertBefore(s1,s0);

        })();

    </script> -->

    <!--End of Tawk.to Script-->



</head>



<body>

    <!-- Loading-->

    <div class=\"loading animated-middle d-none\">

        <div class=\"loader\">Loading...</div>

    </div>



    <div class=\"page ";
        // line 214
        $this->displayBlock('div_page', $context, $blocks);
        echo "\" id=\"page\">

        <header class=\"site-header  ";
        // line 216
        $this->displayBlock('site_header_class', $context, $blocks);
        echo "\">

            ";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("SiteBundle:Default:menu"));
        echo "

            ";
        // line 220
        $this->displayBlock('banner_content', $context, $blocks);
        // line 221
        echo "
        </header>

        <div role=\"main\" id=\"main\" class=\"main\">

            ";
        // line 226
        $this->displayBlock('content', $context, $blocks);
        // line 227
        echo "
        </div>

        ";
        // line 230
        $this->displayBlock('footerdescript', $context, $blocks);
        // line 231
        echo "
        ";
        // line 232
        $this->loadTemplate("SiteBundle:Default:footer.html.twig", "SiteBundle:Default:base.html.twig", 232)->display($context);
        // line 233
        echo "


        <!--  Back to Top -->

        <a href=\"#top\" id=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

    </div>



  

    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v2/js/particles.min.js", null, false, "v2"), "html", null, true);
        echo "\"></script>

    <!--<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/js/psm.js", null, false, "v2"), "html", null, true);
        echo "\"></script>-->

    <script>

        //new WOW().init();

        if (\$('#particles-js').length) {

            particlesJS.load('particles-js', \"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v2/js/particles.json"), "html", null, true);
        echo "\", function () {

                console.log('particles.js loaded - callback');

            });

        }

    </script>

    <!--  Scripts -->

    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/superfish.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/wow.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/video-popup.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.circliful.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/retina.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/custom.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/js/psm.js"), "html", null, true);
        echo "\"></script>



    ";
        // line 304
        $this->displayBlock('js', $context, $blocks);
        // line 305
        echo "


   <script>

        /*\$(document).ready(function () {

            FastClick.attach(document.body);

            function fix_items() {

                if (Modernizr.mq('(max-width: 1024px)')) {

                    const \$div = \$('.logo').closest('div');

                    const \$wrapper = \$('#mc_embed_signup').detach();

                    \$wrapper.insertBefore(\$div);

                    //\$wrapper.css()

                    \$wrapper.find('input').attr('tabIndex', -1);

                } else {

                    \$('.form-id-block-wrapper').append(\$('#mc_embed_signup'));

                }

            }



            var id;



            fix_items();



            \$(window).resize(function () {

                clearTimeout(id);

                id = setTimeout(fix_items, 0);

            });

        })*/


         //fix_items();


            var id;
            \$(window).resize(function () {

                clearTimeout(id);

                id = setTimeout(fix_items, 0);

            });

        function fix_items() {
            if (Modernizr.mq('(min-width: 1400px)')) {

            } else {

                

            }
        }
        


    </script>



</body>



</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_html_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 214
    public function block_div_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "div_page"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_site_header_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "site_header_class"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 220
    public function block_banner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 226
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 230
    public function block_footerdescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerdescript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 304
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 304,  657 => 230,  645 => 226,  633 => 220,  621 => 216,  609 => 214,  597 => 132,  585 => 7,  494 => 305,  492 => 304,  485 => 300,  480 => 298,  475 => 296,  470 => 294,  465 => 292,  460 => 290,  455 => 288,  450 => 286,  445 => 284,  440 => 282,  435 => 280,  430 => 278,  425 => 276,  420 => 274,  415 => 272,  410 => 270,  405 => 268,  390 => 256,  379 => 248,  374 => 246,  359 => 233,  357 => 232,  354 => 231,  352 => 230,  347 => 227,  345 => 226,  338 => 221,  336 => 220,  331 => 218,  326 => 216,  321 => 214,  246 => 142,  241 => 140,  234 => 136,  229 => 133,  227 => 132,  180 => 88,  175 => 86,  170 => 84,  165 => 82,  160 => 80,  155 => 78,  150 => 76,  145 => 74,  140 => 72,  135 => 70,  130 => 68,  125 => 66,  103 => 47,  88 => 35,  57 => 7,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set lang = app.request.locale %}



<!DOCTYPE html>

<html class=\"{% block html_class %}{% endblock %}\">



<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-175657114-1\"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }

        gtag('js', new Date());



        gtag('config', 'UA-175657114-1');

    </script>



    <meta charset=\"utf-8\" />

    <title>{{ title | default(\"home.title\") | trans }}</title>

    <meta name=\"description\" content=\"Site officiel du Pass Santé\">

    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,200;1,400;1,500&display=swap\" rel=\"stylesheet\">

    <!-- Google Fonts -->

    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,700,800\" rel=\"stylesheet\">

    <link rel=\"shortcut Icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\" />

    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Raleway:400,700&amp;subset=latin-ext\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">

    <meta name=\"author\" content=\"MCM\">

    <meta name=\"viewport\"

        content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no\">


    <!-- Bootstrap & Styles -->

    <link href=\"{{ asset('bundles/site/v3/css/bootstrap.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/bootstrap-theme.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/block_grid_bootstrap.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/owl.carousel.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/owl.theme.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/animate.min.css') }}\" rel=\"stylesheet\" />

    <link href=\"{{ asset('bundles/site/v3/css/jquery.circliful.css') }}\" rel=\"stylesheet\" />

    <link href=\"{{ asset('bundles/site/v3/css/slicknav.css') }}\" rel=\"stylesheet\" />

    <link href=\"{{ asset('bundles/site/v3/css/video-popup.css') }}\" rel=\"stylesheet\" />

    <link href=\"{{ asset('bundles/site/v3/css/style.css') }}\" rel=\"stylesheet\">

    <link href=\"{{ asset('bundles/site/v3/css/responsive.css')}}\" rel=\"stylesheet\" />

    <style>

        @media (max-width: 1024px) {

            .mc_embed_signup_mobile {

                display: block;

                margin-bottom: 10px;

            }

        }


        @media (min-width: 1400px) {

            .slider-image-wrapper {
                position: relative;
                overflow: hidden;
                height: 600px;
            }


            .slider-image-wrapper img {
                position: absolute;
                margin-left: -674.5px;
                left: 50%;
            }

        }


      .form-id-block-wrapper input::placeholder {
            font-size: 13px;
        }


    </style>



    {% block css %}{% endblock %}



    <script src=\"{{ asset('bundles/site/v2/js/modernizr.js') }}\"></script>

    <script>

        const current_url = \"{{ app.request.uri }}\";

        const upload_url = \"{{ asset('uploads') }}\";

    </script>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>

    <script>

        \$(document).ready(function () {

            \$('.js-scrollTo').on('click', function () { // Au clic sur un élément

                var page = \$(this).attr('href'); // Page cible

                var speed = 2000; // Durée de l'animation (en ms)

                \$('html, body').animate({ scrollTop: \$(page).offset().top }, speed); // Go

                return false;

            });

        });

    </script>



    <!--Start of Tawk.to Script-->

    <!-- <script type=\"text/javascript\">

        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

        (function(){

        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];

        s1.async=true;

        s1.src='https://embed.tawk.to/5f574d5f4704467e89ed0771/1ehmipovq';

        s1.charset='UTF-8';

        s1.setAttribute('crossorigin','*');

        s0.parentNode.insertBefore(s1,s0);

        })();

    </script> -->

    <!--End of Tawk.to Script-->



</head>



<body>

    <!-- Loading-->

    <div class=\"loading animated-middle d-none\">

        <div class=\"loader\">Loading...</div>

    </div>



    <div class=\"page {% block div_page %}{% endblock %}\" id=\"page\">

        <header class=\"site-header  {% block site_header_class %}{% endblock %}\">

            {{ render(controller('SiteBundle:Default:menu')) }}

            {% block banner_content %}{% endblock %}

        </header>

        <div role=\"main\" id=\"main\" class=\"main\">

            {% block content %}{% endblock %}

        </div>

        {% block footerdescript %}{% endblock %}

        {% include 'SiteBundle:Default:footer.html.twig' %}



        <!--  Back to Top -->

        <a href=\"#top\" id=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

    </div>



  

    <script src=\"{{ asset('bundles/site/v2/js/particles.min.js',version='v2') }}\"></script>

    <!--<script src=\"{{ asset('bundles/site/js/psm.js',version='v2') }}\"></script>-->

    <script>

        //new WOW().init();

        if (\$('#particles-js').length) {

            particlesJS.load('particles-js', \"{{ asset('bundles/site/v2/js/particles.json') }}\", function () {

                console.log('particles.js loaded - callback');

            });

        }

    </script>

    <!--  Scripts -->

    <script src=\"{{ asset('bundles/site/v3/js/jquery.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/bootstrap.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/hoverIntent.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/superfish.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/owl.carousel.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/wow.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/video-popup.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.circliful.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/waypoints.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.counterup.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.sticky.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.slicknav.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.slicknav.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/retina.min.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/jquery.parallax-1.1.3.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/custom.js')}}\"></script>

    <script src=\"{{ asset('bundles/site/v3/js/psm.js')}}\"></script>



    {% block js %}{% endblock %}



   <script>

        /*\$(document).ready(function () {

            FastClick.attach(document.body);

            function fix_items() {

                if (Modernizr.mq('(max-width: 1024px)')) {

                    const \$div = \$('.logo').closest('div');

                    const \$wrapper = \$('#mc_embed_signup').detach();

                    \$wrapper.insertBefore(\$div);

                    //\$wrapper.css()

                    \$wrapper.find('input').attr('tabIndex', -1);

                } else {

                    \$('.form-id-block-wrapper').append(\$('#mc_embed_signup'));

                }

            }



            var id;



            fix_items();



            \$(window).resize(function () {

                clearTimeout(id);

                id = setTimeout(fix_items, 0);

            });

        })*/


         //fix_items();


            var id;
            \$(window).resize(function () {

                clearTimeout(id);

                id = setTimeout(fix_items, 0);

            });

        function fix_items() {
            if (Modernizr.mq('(min-width: 1400px)')) {

            } else {

                

            }
        }
        


    </script>



</body>



</html>", "SiteBundle:Default:base.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/base.html.twig");
    }
}
