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

/* SiteBundle:Default:menu.html.twig */
class __TwigTemplate_077916c2ced2c3b45b41014f05e176aad588470693d7451b5d0b528d07d73950 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:menu.html.twig"));

        // line 1
        echo "<!-- Top Bar-->

";
        // line 3
        $macros["__internal_0d1805e9a95d99db3a55146838f947db8cab3ef7798a25b7e7e9f2bd5ae6a1b1"] = $this->macros["__internal_0d1805e9a95d99db3a55146838f947db8cab3ef7798a25b7e7e9f2bd5ae6a1b1"] = $this->loadTemplate("SiteBundle:Default:macro.html.twig", "SiteBundle:Default:menu.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"top\">

    <div class=\"row\">

        <div class=\"container\">

            ";
        // line 11
        echo twig_call_macro($macros["__internal_0d1805e9a95d99db3a55146838f947db8cab3ef7798a25b7e7e9f2bd5ae6a1b1"], "macro_form_id_pin", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 11, $this->source); })()), true], 11, $context, $this->getSourceContext());
        echo "

            <div class=\"col-md-3 col-xs-12\">

                <div class=\"logo\">

                    <a href=\"index.html\"><img alt=\"\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/logo.png"), "html", null, true);
        echo "\"></a>

                </div>

            </div>

            

            <div class=\"col-md-9 col-xs-12\">

                <ul class=\"nav nav-pills pull-right\">

                    ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "
                    <li class=\"\"> <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-sm btn-new\"><i

                                class=\"fa fa-user\"></i> ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.login"), "html", null, true);
            echo "</a>

                    </li>
";
            // line 42
            echo "
                    ";
        } else {
            // line 50
            echo "                    <li class=\"\"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("psm_logout");
            echo "\" class=\"btn btn-sm btn-new\"><i

                                class=\"fa fa-user\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.logout"), "html", null, true);
            echo "</a>

                    </li>

                    ";
        }
        // line 57
        echo "                    <li> <a href=\"http://play.google.com/store/apps/details?id=com.mcm.psm\" class=\"btn btn-sm\" 
                    style=\"background-color:rgb(17, 150, 17);color:#fff\"><i

                                class=\"fa fa-google-play\"></i> PSM APP </a></li>

                    <li> 
                    <a id=\"js-pharmagarde\" href=\"https://www.abidjan.net/sante/pharmacies/\"

                            class=\"btn btn-sm btn-default image-clignote \">

                            <i class=\" fa fa-medkit\" aria-hidden=\"true\"></i>

                            ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.pharmacie_garde"), "html", null, true);
        echo "</a>

                    </li>

                    <li>

                        ";
        // line 75
        $context["lang"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 75), "locale", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 75), "locale", [], "any", false, false, false, 75), "FR")) : ("FR"));
        // line 76
        echo "
                        ";
        // line 77
        $context["langs"] = [0 => "fr", 1 => "en", 2 => "es"];
        // line 78
        echo "
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"btnLang\" data-toggle=\"dropdown\"

                            aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\"><i class=\"fa fa-globe\"></i>

                            ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " <span class=\"caret\"></span></a>



                        <ul class=\"dropdown-menu dropdown-lang\" aria-labelledby=\"btnLang\">

                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) || array_key_exists("langs", $context) ? $context["langs"] : (function () { throw new RuntimeError('Variable "langs" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["_lang"]) {
            // line 90
            echo "
                            <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage", ["_locale" => $context["_lang"]]), "html", null, true);
            echo "\"

                                    style=\"display:block;padding:5px 10px\" ";
            // line 93
            if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 93, $this->source); })()) == $context["_lang"])) {
                echo "class=\"active\"

                                    ";
            }
            // line 95
            echo ">";
            echo twig_escape_filter($this->env, $context["_lang"], "html", null, true);
            echo "</a></li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                        </ul>

                    </li>

                    <!-- <li> <a id=\"js-pharmagarde\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-sm btn-default \">

                            <i class=\" fa fa-medkit\" aria-hidden=\"true\"></i> Devenir Partenaire </a>

                    </li> -->

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- End of Top Bar-->



<!-- Main Menu -->

<div class=\"main_menu\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-8\">

                <nav id=\"desktop-menu\">

                    <ul class=\"sf-menu\" id=\"navigation\">

                        <li class=\"current\"> <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.home"), "html", null, true);
        echo "</a>

                        </li>

                        <li> <a href=\"#\">";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.pass"), "html", null, true);
        echo "</a>

                            <ul>

                                <li>

                                    <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.presentation"), "html", null, true);
        echo "</a>

                                </li>

                                <li>

                                    <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.hiw"), "html", null, true);
        echo "</a>

                                </li>

                                <li>

                                    <a class=\"js-scrollTo\"

                                        href=\"#section-parteners\">";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.partners"), "html", null, true);
        echo "</a>

                                </li>

                                <li>

                                    <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_distrib");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.distrib"), "html", null, true);
        echo "</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a class=\"js-scrollTo\" href=\"#contact-section\">";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.contact"), "html", null, true);
        echo "</a>

                        </li>

                        <li> <a href=\"#\">COVID-19 <span class=\"down-badge-color-2 main-badge\">Urgence</span>

                            </a>

                            <ul>

                                ";
        // line 194
        echo "
                                <li>

                                    <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_sensibilisation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.sensibilisation"), "html", null, true);
        echo "

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li> <a href=\"https://blog.pass-sante.net/\">Le Blog PSM</a>

                        </li>

                        <li> <a href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_faq");
        echo "\">FAQ</a> 

                        </li>

                    </ul>

                </nav>

            </div>



            <div class=\"col-sm-12 col-md-4 form-id-block-wrapper\">

               ";
        // line 225
        echo twig_call_macro($macros["__internal_0d1805e9a95d99db3a55146838f947db8cab3ef7798a25b7e7e9f2bd5ae6a1b1"], "macro_form_id_pin", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 225, $this->source); })())], 225, $context, $this->getSourceContext());
        echo "

            </div>



        </div>

    </div>

</div>

<!-- End of Main Menu -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 225,  334 => 211,  315 => 197,  310 => 194,  297 => 177,  282 => 167,  273 => 161,  260 => 153,  249 => 147,  240 => 141,  231 => 137,  194 => 103,  187 => 98,  177 => 95,  171 => 93,  166 => 91,  163 => 90,  159 => 89,  150 => 83,  143 => 78,  141 => 77,  138 => 76,  136 => 75,  127 => 69,  113 => 57,  105 => 52,  99 => 50,  95 => 42,  89 => 33,  84 => 31,  81 => 30,  79 => 29,  64 => 17,  55 => 11,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Top Bar-->

{% from 'SiteBundle:Default:macro.html.twig' import form_id_pin %}

<div class=\"top\">

    <div class=\"row\">

        <div class=\"container\">

            {{ form_id_pin(form, lang, true) }}

            <div class=\"col-md-3 col-xs-12\">

                <div class=\"logo\">

                    <a href=\"index.html\"><img alt=\"\" src=\"{{ asset('bundles/site/v3/images/logo.png')}}\"></a>

                </div>

            </div>

            

            <div class=\"col-md-9 col-xs-12\">

                <ul class=\"nav nav-pills pull-right\">

                    {% if not app.user %}

                    <li class=\"\"> <a href=\"{{ path(\"fos_user_security_login\") }}\" class=\"btn btn-sm btn-new\"><i

                                class=\"fa fa-user\"></i> {{ 'home.menu.login' | trans }}</a>

                    </li>
{#}
                    <li> <a href=\"{{ path(\"fos_user_registration_register\") }}\" class=\"btn btn-sm btn-default\"><i

                                class=\"fa fa-pencil\"></i> {{ 'home.menu.register' | trans }} </a>

                    </li>#}

                    {% else %}
{#}
                    <li> <a href=\"{{ path(\"fos_user_registration_register\") }}\" class=\"btn btn-sm btn-default\"><i

                                class=\"fa fa-pencil\"></i> {{ 'home.menu.account' | trans }} </a>
                    </li>
#}
                    <li class=\"\"> <a href=\"{{ path(\"psm_logout\") }}\" class=\"btn btn-sm btn-new\"><i

                                class=\"fa fa-user\"></i> {{ 'home.menu.logout' | trans }}</a>

                    </li>

                    {% endif %}
                    <li> <a href=\"http://play.google.com/store/apps/details?id=com.mcm.psm\" class=\"btn btn-sm\" 
                    style=\"background-color:rgb(17, 150, 17);color:#fff\"><i

                                class=\"fa fa-google-play\"></i> PSM APP </a></li>

                    <li> 
                    <a id=\"js-pharmagarde\" href=\"https://www.abidjan.net/sante/pharmacies/\"

                            class=\"btn btn-sm btn-default image-clignote \">

                            <i class=\" fa fa-medkit\" aria-hidden=\"true\"></i>

                            {{ 'home.menu.pharmacie_garde' | trans }}</a>

                    </li>

                    <li>

                        {% set lang = app.request.locale|default('FR') %}

                        {% set langs = ['fr', 'en', 'es'] %}

                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"btnLang\" data-toggle=\"dropdown\"

                            aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\"><i class=\"fa fa-globe\"></i>

                            {{ lang }} <span class=\"caret\"></span></a>



                        <ul class=\"dropdown-menu dropdown-lang\" aria-labelledby=\"btnLang\">

                            {% for _lang in langs %}

                            <li><a href=\"{{ path('homepage', {_locale: _lang}) }}\"

                                    style=\"display:block;padding:5px 10px\" {% if lang == _lang %}class=\"active\"

                                    {% endif %}>{{ _lang }}</a></li>

                            {% endfor %}

                        </ul>

                    </li>

                    <!-- <li> <a id=\"js-pharmagarde\" href=\"{{ path('homepage') }}\" class=\"btn btn-sm btn-default \">

                            <i class=\" fa fa-medkit\" aria-hidden=\"true\"></i> Devenir Partenaire </a>

                    </li> -->

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- End of Top Bar-->



<!-- Main Menu -->

<div class=\"main_menu\">

    <div class=\"row\">

        <div class=\"container\">

            <div class=\"col-sm-8\">

                <nav id=\"desktop-menu\">

                    <ul class=\"sf-menu\" id=\"navigation\">

                        <li class=\"current\"> <a href=\"{{ path('homepage') }}#\">{{ 'home.menu.home' | trans }}</a>

                        </li>

                        <li> <a href=\"#\">{{ 'home.menu.pass' | trans }}</a>

                            <ul>

                                <li>

                                    <a href=\"{{ path('homepage') }}\">{{ 'home.menu.presentation' | trans }}</a>

                                </li>

                                <li>

                                    <a href=\"{{ path('homepage') }}\">{{ 'home.menu.hiw' | trans }}</a>

                                </li>

                                <li>

                                    <a class=\"js-scrollTo\"

                                        href=\"#section-parteners\">{{ 'home.menu.partners' | trans }}</a>

                                </li>

                                <li>

                                    <a href=\"{{ path('site_distrib') }}\">{{ 'home.menu.distrib' | trans }}</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a class=\"js-scrollTo\" href=\"#contact-section\">{{ 'home.menu.contact' | trans }}</a>

                        </li>

                        <li> <a href=\"#\">COVID-19 <span class=\"down-badge-color-2 main-badge\">Urgence</span>

                            </a>

                            <ul>

                                {#<li>

                                    <a href=\"{{ path('gestion_questionnairedepistage_donnee', {id: 6}) }}\">{{ 'home.menu.surveillance' | trans }}

                                    </a>

                                </li>#}

                                <li>

                                    <a href=\"{{ path('home_sensibilisation') }}\">{{ 'home.menu.sensibilisation' | trans }}

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li> <a href=\"https://blog.pass-sante.net/\">Le Blog PSM</a>

                        </li>

                        <li> <a href=\"{{ path('site_faq') }}\">FAQ</a> 

                        </li>

                    </ul>

                </nav>

            </div>



            <div class=\"col-sm-12 col-md-4 form-id-block-wrapper\">

               {{ form_id_pin(form, lang) }}

            </div>



        </div>

    </div>

</div>

<!-- End of Main Menu -->", "SiteBundle:Default:menu.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/menu.html.twig");
    }
}
