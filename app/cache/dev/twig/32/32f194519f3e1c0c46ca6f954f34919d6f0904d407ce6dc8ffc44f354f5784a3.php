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

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_3f91af0087d4f2f2cd999aead10a9c6536082d27a1acf65d5e08536ec271b9b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'banner_content' => [$this, 'block_banner_content'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "SiteBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent = $this->loadTemplate("SiteBundle:Default:base.html.twig", "SiteBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "
<style>

    .dropdown-lang li:hover a {

        background-color: #ff0000;

        color: #fff;

    }



    @media (max-width: 767px) {

        #mc_embed_signup input.btn-pass-id {

            border-radius: 2em !important;

            margin-top: -2px !important;

        }

    }



    @media (max-width: 1024px) {

        .top .nav-pills {

            float: none !important;

        }



        #mc_embed_signup {

            z-index: 999

        }

    }

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_banner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner_content"));

        // line 54
        echo "
";
        // line 55
        $this->loadTemplate("SiteBundle:Default:slider.html.twig", "SiteBundle:Default:index.html.twig", 55)->display($context);
        // line 56
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "


";
        // line 65
        $this->loadTemplate("SiteBundle:Default:presentation.html.twig", "SiteBundle:Default:index.html.twig", 65)->display($context);
        // line 66
        echo "


";
        // line 74
        echo "


";
        // line 77
        $this->loadTemplate("SiteBundle:Default:video_popup.html.twig", "SiteBundle:Default:index.html.twig", 77)->display($context);
        // line 78
        echo "


<div class=\"row\">

    <div class=\"container\">

        <div class=\"section-title margin-b30\">

            <h2><span>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.titl0"), "html", null, true);
        echo "</span>

                ";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.title"), "html", null, true);
        echo "

            </h2>

        </div>

    </div>

</div>

<div class=\"plane\">

    <section class=\"plans-one\">

        ";
        // line 103
        $this->loadTemplate("SiteBundle:Default:innovation.html.twig", "SiteBundle:Default:index.html.twig", 103)->display($context);
        // line 104
        echo "
    </section>

</div>



<div class=\"row\">

    <div class=\"container\">

        <div class=\"section-title margin-b30\">

            <h2><span>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.parteners.titl0"), "html", null, true);
        echo "</span>

                ";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.parteners.title"), "html", null, true);
        echo "

            </h2>

        </div>

    </div>

</div>

<div class=\"fist-tab-word-non\">

    <div class=\"container\">

        <h2 class=\"host-plans-title-non-index\">

            <div class=\"row justify-content-center\">

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/logo_oif1.png\" class=\"img-fluid\" style=\"width: 100%;\" /></small>

                    </a>

                </div>

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/PNUD_Logo-Bleu-Tagline_Noir.png\" class=\"img-fluid\"

                                style=\"width: 20%;\"></small>

                    </a>

                </div>

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/Logo AccLab.jpg\" class=\"img-fluid\" style=\"width: 100%;\"></small>

                    </a>

                </div>

            </div>

    </div>

</div>



<section class=\"section_sapce section-partenaires section-padding\" id=\"partenaires\">

    ";
        // line 179
        $this->loadTemplate("SiteBundle:Default:parteners.html.twig", "SiteBundle:Default:index.html.twig", 179)->display($context);
        // line 180
        echo "
</section>



<section class=\" section_sapce section_primary cover-image\" id=\"contact-section\"

    data-image-src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/subbanners/4.jpg"), "html", null, true);
        echo "\">

    <div class=\"section-title \">

        <h2>";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.contact.title");
        echo "</h2>

    </div>

</section>

<!-- Support -->

<div class=\"needsupport section_sapce bg_gray\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-12\">



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature\">

                        <i class=\"fa fa-headphones fa-3x text_primary square-border-icon\"></i>

                        <h3>8H-18H</h3>

                        <p> +225 54 63 16 53 / +225 69 86 11 34</p>

                    </div>

                </div>



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature\">

                        <i class=\"fa fa-envelope-open fa-3x text_primary square-border-icon\"></i>

                        <h3>Email </h3>

                        <p>info@santemousso.net</p>

                    </div>

                </div>



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature relative\">

                        <i class=\"fa fa-map-marker fa-3x text_primary square-border-icon\"></i>

                        <h3>Lieu</h3>

                        <p>Abidjan, Marcory Sainte Thérèse</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- End of Support -->



<section class=\"contact section_sapce2\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-6 col-md-8\">

                <div class=\"contactForm row m0\">

                    <div class=\"contactForm\">

                        <div class=\"row\">

                            <div class=\"successMessage alert alert-success alert-dismissible fade in margin-top-30\"

                                role=\"alert\" style=\"display: none\">

                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><i

                                        class=\"fa fa-times\"></i></button>

                                <strong>Well done !</strong> Thank You! We will contact you shortly.

                            </div>

                        </div>

                        <br>

                        ";
        // line 297
        echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("SiteBundle:Default:contact"));
        echo "

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 297,  297 => 191,  290 => 187,  281 => 180,  279 => 179,  216 => 119,  211 => 117,  196 => 104,  194 => 103,  177 => 89,  172 => 87,  161 => 78,  159 => 77,  154 => 74,  149 => 66,  147 => 65,  142 => 62,  135 => 61,  127 => 56,  125 => 55,  122 => 54,  115 => 53,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'SiteBundle:Default:base.html.twig' %}

{% block css %}

<style>

    .dropdown-lang li:hover a {

        background-color: #ff0000;

        color: #fff;

    }



    @media (max-width: 767px) {

        #mc_embed_signup input.btn-pass-id {

            border-radius: 2em !important;

            margin-top: -2px !important;

        }

    }



    @media (max-width: 1024px) {

        .top .nav-pills {

            float: none !important;

        }



        #mc_embed_signup {

            z-index: 999

        }

    }

</style>

{% endblock %}

{% block banner_content %}

{% include \"SiteBundle:Default:slider.html.twig\" %}

{% endblock %}



{% block content %}



{% include \"SiteBundle:Default:presentation.html.twig\" %}



{# <section id=\"img_view\" class=\"img_view bg-image section-padding bg-no-position\"

    style=\"background-image: url( '/bundles/site/v3/images/fonction_app.jpg') \">

</section> #}



{% include \"SiteBundle:Default:video_popup.html.twig\" %}



<div class=\"row\">

    <div class=\"container\">

        <div class=\"section-title margin-b30\">

            <h2><span>{{ 'home.section.innovation.titl0' | trans }}</span>

                {{ 'home.section.innovation.title' | trans }}

            </h2>

        </div>

    </div>

</div>

<div class=\"plane\">

    <section class=\"plans-one\">

        {% include \"SiteBundle:Default:innovation.html.twig\" %}

    </section>

</div>



<div class=\"row\">

    <div class=\"container\">

        <div class=\"section-title margin-b30\">

            <h2><span>{{ 'home.section.parteners.titl0' | trans }}</span>

                {{ 'home.section.parteners.title' | trans }}

            </h2>

        </div>

    </div>

</div>

<div class=\"fist-tab-word-non\">

    <div class=\"container\">

        <h2 class=\"host-plans-title-non-index\">

            <div class=\"row justify-content-center\">

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/logo_oif1.png\" class=\"img-fluid\" style=\"width: 100%;\" /></small>

                    </a>

                </div>

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/PNUD_Logo-Bleu-Tagline_Noir.png\" class=\"img-fluid\"

                                style=\"width: 20%;\"></small>

                    </a>

                </div>

                <div class=\"col-3 col-align\">

                    <a class=\"domain-price-non-index\" href=\"#\">

                        <small><img src=\"/uploads/Logo AccLab.jpg\" class=\"img-fluid\" style=\"width: 100%;\"></small>

                    </a>

                </div>

            </div>

    </div>

</div>



<section class=\"section_sapce section-partenaires section-padding\" id=\"partenaires\">

    {% include \"SiteBundle:Default:parteners.html.twig\" %}

</section>



<section class=\" section_sapce section_primary cover-image\" id=\"contact-section\"

    data-image-src=\"{{ asset('bundles/site/v3/images/subbanners/4.jpg') }}\">

    <div class=\"section-title \">

        <h2>{{ 'home.section.contact.title' | trans | raw }}</h2>

    </div>

</section>

<!-- Support -->

<div class=\"needsupport section_sapce bg_gray\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-12\">



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature\">

                        <i class=\"fa fa-headphones fa-3x text_primary square-border-icon\"></i>

                        <h3>8H-18H</h3>

                        <p> +225 54 63 16 53 / +225 69 86 11 34</p>

                    </div>

                </div>



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature\">

                        <i class=\"fa fa-envelope-open fa-3x text_primary square-border-icon\"></i>

                        <h3>Email </h3>

                        <p>info@santemousso.net</p>

                    </div>

                </div>



                <div class=\"col-sm-4 margin-b30\">

                    <div class=\"text-center padding30  main-feature relative\">

                        <i class=\"fa fa-map-marker fa-3x text_primary square-border-icon\"></i>

                        <h3>Lieu</h3>

                        <p>Abidjan, Marcory Sainte Thérèse</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- End of Support -->



<section class=\"contact section_sapce2\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-6 col-md-8\">

                <div class=\"contactForm row m0\">

                    <div class=\"contactForm\">

                        <div class=\"row\">

                            <div class=\"successMessage alert alert-success alert-dismissible fade in margin-top-30\"

                                role=\"alert\" style=\"display: none\">

                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><i

                                        class=\"fa fa-times\"></i></button>

                                <strong>Well done !</strong> Thank You! We will contact you shortly.

                            </div>

                        </div>

                        <br>

                        {{ render(controller('SiteBundle:Default:contact')) }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{% endblock %}", "SiteBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/index.html.twig");
    }
}
