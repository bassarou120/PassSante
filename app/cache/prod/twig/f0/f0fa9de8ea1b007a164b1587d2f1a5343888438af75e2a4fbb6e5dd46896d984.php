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

/* SiteBundle:Default:fields-contact.html.twig */
class __TwigTemplate_98d517c660142f88291ad216b126149e9d6b09be60482b93be1710c86b96bf69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_label' => [$this, 'block_form_label'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'form_row' => [$this, 'block_form_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:fields-contact.html.twig"));

        // line 1
        $this->displayBlock('form_label', $context, $blocks);
        // line 22
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 39
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 65
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 2
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 2, $this->source); })()) === false)) {
            // line 3
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 3, $this->source); })())) {
                // line 4
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 4, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })())]);
            }
            // line 8
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()))) {
                // line 9
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()));
            }
            // line 11
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 12, $this->source); })())), "html", null, true);
            echo "
    ";
            // line 13
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "    <span class=\"required\">
        *
    </span>
    ";
            }
            // line 18
            echo "</label>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 23
        ob_start();
        // line 24
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "text")) : ("text"));
        // line 25
        echo "<input
    class=\"form-control name ";
        // line 26
        if ((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 26, $this->source); })())) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (($context["attrname"] == "class")) {
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo "\"
    type=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 32
        ob_start();
        // line 33
        echo "<textarea class=\"form-control \" rows=\"4\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
\t\t";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "
\t</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 40
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 40, $this->source); })()) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 40, $this->source); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new RuntimeError('Variable "empty_value_in_choices" does not exist.', 40, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 40, $this->source); })()))) {
            // line 41
            $context["required"] = false;
        }
        echo "<div class=\"mb-3\">
    <select
        class=\"form-control name ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (($context["attrname"] == "class")) {
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
        ";
        // line 44
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 44, $this->source); })())) {
            echo " multiple=\"multiple\" ";
        }
        echo ">";
        // line 45
        if ( !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "<option value=\"\" ";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 46, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 46, $this->source); })())))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 47
            ((((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 47, $this->source); })()) != "")) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 47, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 47, $this->source); })())), "html", null, true))) : (print ("")));
            echo "
        </option>";
        }
        // line 50
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 50, $this->source); })())) > 0)) {
            // line 51
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 51, $this->source); })());
            // line 52
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 53
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 53, $this->source); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 53, $this->source); })())))) {
                // line 54
                echo "<option disabled=\"disabled\">
            ";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "
        </option>";
            }
        }
        // line 59
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 59, $this->source); })());
        // line 60
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 61
        echo "</select>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 67
        echo "<!--<div class=\"col-md-6\">-->";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'label');
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'widget');
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'errors');
        // line 71
        echo "<!--</div>-->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:fields-contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  283 => 71,  281 => 70,  279 => 69,  277 => 68,  275 => 67,  268 => 65,  260 => 61,  258 => 60,  256 => 59,  250 => 55,  247 => 54,  245 => 53,  243 => 52,  241 => 51,  239 => 50,  234 => 47,  227 => 46,  225 => 45,  218 => 44,  205 => 43,  199 => 41,  197 => 40,  190 => 39,  179 => 34,  174 => 33,  172 => 32,  165 => 31,  147 => 27,  132 => 26,  129 => 25,  127 => 24,  125 => 23,  118 => 22,  110 => 18,  104 => 14,  102 => 13,  98 => 12,  82 => 11,  79 => 9,  77 => 8,  74 => 4,  72 => 3,  70 => 2,  63 => 1,  56 => 65,  54 => 39,  52 => 31,  49 => 30,  47 => 22,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block form_label -%}
{% if label is not same as(false) %}
{%- if not compound -%}
{% set label_attr = label_attr|merge({'for': id}) %}

{%- endif -%}

{%- if label is empty -%}
{% set label = name|humanize %}
{%- endif -%}
<label {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
    {{ label|trans({}, translation_domain) }}
    {% if required %}
    <span class=\"required\">
        *
    </span>
    {% endif %}
</label>
{%- endif -%}
{%- endblock form_label -%}

{% block form_widget_simple %}
{% spaceless %}
{% set type = type|default('text') %}
<input
    class=\"form-control name {% if attr %}{% for attrname, attrvalue in attr %}{% if attrname == 'class' %}{{attrvalue}}{% endif %}{% endfor %}{% endif %}\"
    type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %} value=\"{{ value }}\" {% endif %} />
{% endspaceless %}
{% endblock form_widget_simple %}

{% block textarea_widget %}
{% spaceless %}
<textarea class=\"form-control \" rows=\"4\" {{ block('widget_attributes') }}>
\t\t{{ value }}
\t</textarea>
{% endspaceless %}
{% endblock textarea_widget %}

{%- block choice_widget_collapsed -%}
{%- if required and empty_value is none and not empty_value_in_choices and not multiple -%}
{% set required = false %}{%- endif -%}<div class=\"mb-3\">
    <select
        class=\"form-control name {% for attrname, attrvalue in attr %}{% if attrname == 'class' %}{{attrvalue}}{% endif %}{% endfor %}\"
        {{ block('widget_attributes') }} {% if multiple %} multiple=\"multiple\" {% endif %}>
        {%- if empty_value is not none -%}
        <option value=\"\" {% if required and value is empty %} selected=\"selected\" {% endif %}>
            {{ empty_value != '' ? empty_value|trans({}, translation_domain) }}
        </option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
        {% set options = preferred_choices %}
        {{- block('choice_widget_options') -}}
        {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">
            {{ separator }}
        </option>
        {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
</div>
{%- endblock choice_widget_collapsed -%}

{%- block form_row -%}

<!--<div class=\"col-md-6\">-->
{{- form_label(form) -}}
{{- form_widget(form) -}}
{{- form_errors(form) -}}
<!--</div>-->

{%- endblock form_row -%}", "SiteBundle:Default:fields-contact.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/fields-contact.html.twig");
    }
}
