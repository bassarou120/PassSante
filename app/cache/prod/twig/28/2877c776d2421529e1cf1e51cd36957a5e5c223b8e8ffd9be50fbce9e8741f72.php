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

/* SiteBundle:Default:macro.html.twig */
class __TwigTemplate_3b98a8501728287a8c3cc4e29517510da39e034aeec65e750146da2994aa4f87 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:macro.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_form_id_pin($__form__ = null, $__lang__ = null, $__mobile__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "lang" => $__lang__,
            "mobile" => $__mobile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_id_pin"));

            // line 2
            echo "    <div class=\"mc_embed_signup ";
            if ((isset($context["mobile"]) || array_key_exists("mobile", $context) ? $context["mobile"] : (function () { throw new RuntimeError('Variable "mobile" does not exist.', 2, $this->source); })())) {
                echo "mc_embed_signup_mobile";
            }
            echo "\">
        <form class=\"form-inline validate\" action=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_profil", ["_locale" => (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 3, $this->source); })()), "pin" =>  -1]), "html", null, true);
            echo "\"
                            method=\"POST\" class=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" target=\"_blank\"
                            novalidate>
                            <div class=\"row no-gutter\">
                                <div class=\"col-sm-8 col-xs-9\">
                                ";
            // line 8
            $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "identifiant", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8);
            // line 9
            echo "                                <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (((isset($context["mobile"]) || array_key_exists("mobile", $context) ? $context["mobile"] : (function () { throw new RuntimeError('Variable "mobile" does not exist.', 9, $this->source); })())) ? (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()) . "_mobile")) : ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()))), "html", null, true);
            echo "\"
                                 name=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "identifiant", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "full_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" 
                                 required=\"";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "identifiant", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "required", [], "any", false, false, false, 11)) ? ("required") : (""));
            echo "\" 
                                 placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "identifiant", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "attr", [], "any", false, false, false, 12), "placeholder", [], "any", false, false, false, 12)), "html", null, true);
            echo "\" tabindex=\"-1\" class=\" form-control\" 
                                 />
                                
                                    
                                </div>
                                <div class=\"col-sm-4 col-xs-3 id_validation\">
                                    <input type=\"submit\" value=\"Valider\" name=\"subscribe\" 
                                        class=\"btn-pass-id mc-embedded-subscribe\">
                                </div>
                            </div>
        </form>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  89 => 11,  85 => 10,  80 => 9,  78 => 8,  70 => 3,  63 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro form_id_pin(form, lang, mobile=false) %}
    <div class=\"mc_embed_signup {%if mobile %}mc_embed_signup_mobile{% endif %}\">
        <form class=\"form-inline validate\" action=\"{{ path('patient_profil', {_locale: lang, pin: -1}) }}\"
                            method=\"POST\" class=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" target=\"_blank\"
                            novalidate>
                            <div class=\"row no-gutter\">
                                <div class=\"col-sm-8 col-xs-9\">
                                {% set id = form.identifiant.vars.id %}
                                <input type=\"text\" id=\"{{ mobile ? id ~ '_mobile': id }}\"
                                 name=\"{{ form.identifiant.vars.full_name }}\" 
                                 required=\"{{ form.identifiant.vars.required ? 'required': '' }}\" 
                                 placeholder=\"{{ form.identifiant.vars.attr.placeholder | trans }}\" tabindex=\"-1\" class=\" form-control\" 
                                 />
                                
                                    
                                </div>
                                <div class=\"col-sm-4 col-xs-3 id_validation\">
                                    <input type=\"submit\" value=\"Valider\" name=\"subscribe\" 
                                        class=\"btn-pass-id mc-embedded-subscribe\">
                                </div>
                            </div>
        </form>
    </div>
{% endmacro %}", "SiteBundle:Default:macro.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/macro.html.twig");
    }
}
