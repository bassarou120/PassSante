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

/* SiteBundle:Default:slider.html.twig */
class __TwigTemplate_89d1c171f8de609bad26b1caea1b44fe59fb77306f0e09bb08216b9042d304e1 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:slider.html.twig"));

        // line 1
        echo "<!-- Slider -->

<div class=\"slidercontainer\">

    <div id=\"mainslider\" class=\"owl-carousel\">



        <div class=\"slider-image-wrapper\">

            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/site/v3/images/slider/" . (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 11, $this->source); })())) . "/1.jpg")), "html", null, true);
        echo "\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">



            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/site/v3/images/slider/" . (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 23, $this->source); })())) . "/2.jpg")), "html", null, true);
        echo "\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">

            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/site/v3/images/slider/" . (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 33, $this->source); })())) . "/3.jpg")), "html", null, true);
        echo "\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">



            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/site/v3/images/slider/" . (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 45, $this->source); })())) . "/4.jpg")), "html", null, true);
        echo "\" alt=\"\" 

                />

        </div>



    </div>

</div>

<!-- End of Slider -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 45,  80 => 33,  67 => 23,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Slider -->

<div class=\"slidercontainer\">

    <div id=\"mainslider\" class=\"owl-carousel\">



        <div class=\"slider-image-wrapper\">

            <img src=\"{{ asset('bundles/site/v3/images/slider/' ~ lang ~ '/1.jpg')}}\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">



            <img src=\"{{ asset('bundles/site/v3/images/slider/' ~ lang ~ '/2.jpg')}}\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">

            <img src=\"{{ asset('bundles/site/v3/images/slider/' ~ lang ~ '/3.jpg')}}\" alt=\"\" 

                />

        </div>



        <div class=\"slider-image-wrapper\">



            <img src=\"{{ asset('bundles/site/v3/images/slider/' ~ lang ~ '/4.jpg')}}\" alt=\"\" 

                />

        </div>



    </div>

</div>

<!-- End of Slider -->

", "SiteBundle:Default:slider.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/slider.html.twig");
    }
}
