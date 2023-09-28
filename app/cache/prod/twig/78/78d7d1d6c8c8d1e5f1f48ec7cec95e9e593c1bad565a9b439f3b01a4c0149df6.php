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

/* SiteBundle:Default:contact.html.twig */
class __TwigTemplate_21e25c2ee35e24b81c00b2ef82044d5afe9d7c1d1bef2e0d08adf46e48c81416 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:contact.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "SiteBundle:Default:fields-contact.html.twig"]);
        // line 2
        echo "<form method=\"POST\" id=\"contact-form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_contact");
        echo "\">
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "_token", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "session", [], "any", false, false, false, 4), "flashBag", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 6
                echo "    ";
                if (twig_in_filter($context["type"], [0 => "contact.warning", 1 => "contact.success"])) {
                    // line 7
                    echo "    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $context["type"], ".")), "html", null, true);
                    echo "\">
        ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                    echo "
    </div>
    ";
                }
                // line 11
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"row\">
        <div class=\"form-row\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'row');
        echo "
        </div>
        <div class=\"form-row\">
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "sujet", [], "any", false, false, false, 21), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "categorie", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "message", [], "any", false, false, false, 27), 'row');
        echo "
        </div>
        <div class=\"float-right font-alt-1\">
            <button class=\"btnsubmit btn btn-block btn-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.btn.send"), "html", null, true);
        echo "</button>
        </div>
    </div>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  114 => 27,  108 => 24,  102 => 21,  96 => 18,  90 => 15,  86 => 13,  80 => 12,  74 => 11,  68 => 8,  63 => 7,  60 => 6,  55 => 5,  51 => 4,  47 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'SiteBundle:Default:fields-contact.html.twig' %}
<form method=\"POST\" id=\"contact-form\" action=\"{{ path('site_contact') }}\">
    {{ form_row(form._token) }}
    {% for type, flash_messages in app.session.flashBag.all %}
    {% for flash_message in flash_messages %}
    {% if type in ['contact.warning', 'contact.success'] %}
    <div class=\"alert alert-{{ type|split('.')|last }}\">
        {{ flash_message }}
    </div>
    {% endif %}
    {% endfor %}
    {% endfor %}
    <div class=\"row\">
        <div class=\"form-row\">
            {{ form_row(form.nom) }}
        </div>
        <div class=\"form-row\">
            {{ form_row(form.email) }}
        </div>
        <div class=\"form-group\">
            {{ form_row(form.sujet) }}
        </div>
        <div class=\"form-group\">
            {{ form_row(form.categorie) }}
        </div>
        <div class=\"form-group\">
            {{ form_row(form.message) }}
        </div>
        <div class=\"float-right font-alt-1\">
            <button class=\"btnsubmit btn btn-block btn-primary\">{{ 'home.btn.send' | trans }}</button>
        </div>
    </div>
</form>", "SiteBundle:Default:contact.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/contact.html.twig");
    }
}
