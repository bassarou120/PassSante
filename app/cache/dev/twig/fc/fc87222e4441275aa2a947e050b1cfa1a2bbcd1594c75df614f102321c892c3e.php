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

/* SiteBundle:Default:presentation.html.twig */
class __TwigTemplate_2e71f8d9f9f2f0ed215dd6698f1929e01d02083f5414f68c1b51461f2b0392b4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:presentation.html.twig"));

        // line 1
        echo "<section class=\"our-services section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section0.title"), "html", null, true);
        echo "</h2> <br><br><br>
            <p>
                ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section0.content");
        echo "
            </p>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service firt-block orng-box-icon wow fadeInUp\">
                    <span class=\"fa fa-question fa-spin-hover\"></span>
                    <h6>
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section1.title"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section1.description"), "html", null, true);
        echo ":
                    ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section1.content");
        echo "
                </div>
            </div>

            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service firt-block orgwani-box-icon\">
                    <span class=\"fa fa-qrcode fa-spin-hover\"></span>
                    <h6>
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section2.title"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section2.content");
        echo "
                </div>
            </div>
        </div>
        <div class=\"row \">
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service second-block  blue-box-icon wow fadeInUp\">
                    <span class=\"fa fa-check fa-spin-hover\"></span>
                    <h6>
                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section3.title"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section3.content");
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service second-block green-box-icon\">
                    <span class=\"fa fa-heart fa-spin-hover\"></span>
                    <h6>
                        ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section4.title"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.section4.n_content");
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  113 => 45,  103 => 38,  98 => 36,  86 => 27,  81 => 25,  70 => 17,  66 => 16,  61 => 14,  50 => 6,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"our-services section-padding\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2>{{ 'home.section.presentation.section0.title' | trans }}</h2> <br><br><br>
            <p>
                {{ 'home.section.presentation.section0.content' | trans | raw }}
            </p>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service firt-block orng-box-icon wow fadeInUp\">
                    <span class=\"fa fa-question fa-spin-hover\"></span>
                    <h6>
                        {{ 'home.section.presentation.section1.title' | trans }}
                    </h6>
                    {{ 'home.section.presentation.section1.description' | trans }}:
                    {{ 'home.section.presentation.section1.content' | trans | raw }}
                </div>
            </div>

            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service firt-block orgwani-box-icon\">
                    <span class=\"fa fa-qrcode fa-spin-hover\"></span>
                    <h6>
                        {{ 'home.section.presentation.section2.title' | trans }}
                    </h6>
                    {{ 'home.section.presentation.section2.content' | trans | raw }}
                </div>
            </div>
        </div>
        <div class=\"row \">
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service second-block  blue-box-icon wow fadeInUp\">
                    <span class=\"fa fa-check fa-spin-hover\"></span>
                    <h6>
                        {{ 'home.section.presentation.section3.title' | trans }}
                    </h6>
                    {{ 'home.section.presentation.section3.content' | trans | raw }}
                </div>
            </div>
            <div class=\"col-md-6 col-12 col-xs-12\">
                <div class=\"box-service second-block green-box-icon\">
                    <span class=\"fa fa-heart fa-spin-hover\"></span>
                    <h6>
                        {{ 'home.section.presentation.section4.title' | trans }}
                    </h6>
                    {{ 'home.section.presentation.section4.n_content' | trans | raw }}
                </div>
            </div>
        </div>
    </div>
</section>", "SiteBundle:Default:presentation.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/presentation.html.twig");
    }
}
