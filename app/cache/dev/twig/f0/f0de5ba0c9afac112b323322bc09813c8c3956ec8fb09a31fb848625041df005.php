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

/* SiteBundle:Default:innovation.html.twig */
class __TwigTemplate_694946515f2ad22abce8783c1f642b0fb8265e393d947f0b121daa782596948f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:innovation.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <span class=\"first-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-shield\" aria-hidden=\"true\"></i>
                <!-- <label>Protection anti-DDoS</label> -->
                <label>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.first_circle.title"), "html", null, true);
        echo "</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.first_circle.content.ligne1"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.first_circle.content.ligne2"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.first_circle.content.ligne3"), "html", null, true);
        echo ".
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.first_circle.content.ligne4"), "html", null, true);
        echo "
                </span>
            </em>
        </b>
    </span>
    <span class=\"second-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-qrcode\" aria-hidden=\"true\"></i>
                <label>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.title"), "html", null, true);
        echo "</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne1"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne2"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne3"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne4"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne5"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.second_circle.content.ligne6"), "html", null, true);
        echo "
                </span>
            </em>
        </b>
    </span>
    <span class=\"third-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-child\" aria-hidden=\"true\"></i>
                <label>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.third_circle.title1"), "html", null, true);
        echo "</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.third_circle.content.ligne1"), "html", null, true);
        echo "
                </span>
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <label>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.third_circle.title2"), "html", null, true);
        echo "</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.technique.h1"), "html", null, true);
        echo "
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.technique.label"), "html", null, true);
        echo "
                </span>
            </em>
        </b>
    </span>

    <div class=\"container\">
        <div class=\"row justify-content-left bckbgpadd\">
            <div class=\"col-4 plansshadow\">
                <ul class=\"nav\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"planoneone-tab\" data-toggle=\"tab\" href=\"#planoneone\" role=\"tab\"
                            aria-controls=\"planoneone\" aria-expanded=\"true\">
                            <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                            ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.virsion"), "html", null, true);
        echo "
                            <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i><br>
                            <span class=\"dg-mcm\">Mme Ouattara Corine Maurice <br>
                                ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.pdg"), "html", null, true);
        echo "
                            </span>
                        </a>
                        <div class=\"rviw-wp-st\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <br />
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"customertab\">
                    <div class=\"tab-pane fade show active\" id=\"planoneone\" role=\"tabpanel\"
                        aria-labelledby=\"planoneone-tab\">
                        <span class=\"customer-name\"><b>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.titl0"), "html", null, true);
        echo "</b></span>
                        <!-- <span class=\"includedpans\"><b>trafic illimité</b></span> -->
                        <ul class=\"list-option\">
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                <b>1</b>
                                ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content0"), "html", null, true);
        echo "
                            </li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content1"), "html", null, true);
        echo "</li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content2"), "html", null, true);
        echo "</li>

                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content3"), "html", null, true);
        echo "
                            </li>
                        </ul>
                        <span
                            class=\"customer-name\"><b>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.title1"), "html", null, true);
        echo "</b></span>
                        <!-- <span class=\"includedpans\"><b>trafic illimité</b></span> -->
                        <ul class=\"list-option\">
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> <b>1</b>
                                ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content4"), "html", null, true);
        echo "
                            </li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content5"), "html", null, true);
        echo "</li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.section0.content6"), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class=\"customertab-bottom\">
            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/box.png"), "html", null, true);
        echo "\" alt=\"\" />
            <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.technique.h1"), "html", null, true);
        echo "</span>
            ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.innovation.technique.label"), "html", null, true);
        echo "
        </p>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:innovation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 132,  259 => 131,  255 => 130,  245 => 123,  240 => 121,  234 => 118,  227 => 114,  220 => 110,  214 => 107,  209 => 105,  203 => 102,  195 => 97,  175 => 80,  169 => 77,  152 => 63,  146 => 60,  141 => 58,  135 => 55,  130 => 53,  118 => 44,  112 => 41,  106 => 38,  100 => 35,  94 => 32,  88 => 29,  83 => 27,  71 => 18,  65 => 15,  59 => 12,  53 => 9,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <span class=\"first-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-shield\" aria-hidden=\"true\"></i>
                <!-- <label>Protection anti-DDoS</label> -->
                <label>{{ 'home.section.innovation.first_circle.title' | trans }}</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.first_circle.content.ligne1' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.first_circle.content.ligne2' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.first_circle.content.ligne3' | trans }}.
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.first_circle.content.ligne4' | trans }}
                </span>
            </em>
        </b>
    </span>
    <span class=\"second-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-qrcode\" aria-hidden=\"true\"></i>
                <label>{{ 'home.section.innovation.second_circle.title' | trans }}</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne1' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne2' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne3' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne4' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne5' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.second_circle.content.ligne6' | trans }}
                </span>
            </em>
        </b>
    </span>
    <span class=\"third-cirl wow fadeInUp\">
        <b>
            <em class=\"hockup-mo-tootl\">
                <i class=\"fa fa-child\" aria-hidden=\"true\"></i>
                <label>{{ 'home.section.innovation.third_circle.title1' | trans }}</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.third_circle.content.ligne1' | trans }}
                </span>
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <label>{{ 'home.section.innovation.third_circle.title2' | trans }}</label>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.technique.h1' | trans }}
                </span>
                <span><u class=\"fa fa-check-circle\" aria-hidden=\"true\"></u>
                    {{ 'home.section.innovation.technique.label' | trans }}
                </span>
            </em>
        </b>
    </span>

    <div class=\"container\">
        <div class=\"row justify-content-left bckbgpadd\">
            <div class=\"col-4 plansshadow\">
                <ul class=\"nav\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"planoneone-tab\" data-toggle=\"tab\" href=\"#planoneone\" role=\"tab\"
                            aria-controls=\"planoneone\" aria-expanded=\"true\">
                            <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                            {{ 'home.section.innovation.section0.virsion' | trans }}
                            <i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i><br>
                            <span class=\"dg-mcm\">Mme Ouattara Corine Maurice <br>
                                {{ 'home.section.innovation.section0.pdg' | trans }}
                            </span>
                        </a>
                        <div class=\"rviw-wp-st\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <br />
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"customertab\">
                    <div class=\"tab-pane fade show active\" id=\"planoneone\" role=\"tabpanel\"
                        aria-labelledby=\"planoneone-tab\">
                        <span class=\"customer-name\"><b>{{ 'home.section.innovation.section0.titl0' | trans }}</b></span>
                        <!-- <span class=\"includedpans\"><b>trafic illimité</b></span> -->
                        <ul class=\"list-option\">
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                <b>1</b>
                                {{ 'home.section.innovation.section0.content0' | trans }}
                            </li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                {{ 'home.section.innovation.section0.content1' | trans }}</li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                {{ 'home.section.innovation.section0.content2' | trans }}</li>

                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                {{ 'home.section.innovation.section0.content3' | trans }}
                            </li>
                        </ul>
                        <span
                            class=\"customer-name\"><b>{{ 'home.section.innovation.section0.title1' | trans }}</b></span>
                        <!-- <span class=\"includedpans\"><b>trafic illimité</b></span> -->
                        <ul class=\"list-option\">
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> <b>1</b>
                                {{ 'home.section.innovation.section0.content4' | trans }}
                            </li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                {{ 'home.section.innovation.section0.content5' | trans }}</li>
                            <li><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                                {{ 'home.section.innovation.section0.content6' | trans }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class=\"customertab-bottom\">
            <img src=\"{{ asset('bundles/site/v3/images/box.png') }}\" alt=\"\" />
            <span>{{ 'home.section.innovation.technique.h1' | trans }}</span>
            {{ 'home.section.innovation.technique.label' | trans }}
        </p>
    </div>
</div>", "SiteBundle:Default:innovation.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/innovation.html.twig");
    }
}
