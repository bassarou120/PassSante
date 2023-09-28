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

/* SCDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_6b4ac3962944f5521295ebb9e49c1010329d71b9cb49929affa19c56dde6eb10 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'collot_datetime_widget' => [$this, 'block_collot_datetime_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:div_layout.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('collot_datetime_widget', $context, $blocks);
        // line 24
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_collot_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collot_datetime_widget"));

        // line 4
        ob_start();
        // line 5
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 5, $this->source); })()) == "single_text")) {
            // line 6
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 9
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 9, $this->source); })()), ["{{ year }}" =>             // line 10
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "year", [], "any", false, false, false, 10), 'widget'), "{{ month }}" =>             // line 11
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "month", [], "any", false, false, false, 11), 'widget'), "{{ day }}" =>             // line 12
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "day", [], "any", false, false, false, 12), 'widget')]);
            // line 13
            echo "

            ";
            // line 15
            $context["attr"] = twig_array_merge(["size" => 10], (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 15, $this->source); })()));
            // line 16
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()));
            // line 17
            echo "            ";
            $context["value"] = "";
            // line 18
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 18, $this->source); })()));
            // line 19
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  96 => 18,  93 => 17,  90 => 16,  88 => 15,  84 => 13,  82 => 12,  81 => 11,  80 => 10,  79 => 9,  74 => 8,  68 => 6,  65 => 5,  63 => 4,  56 => 3,  47 => 24,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block collot_datetime_widget %}
{% spaceless %}
    {% if widget == \"single_text\" %}
        {{ block(\"form_widget_simple\") }}
    {% else %}
        <div {{ block(\"widget_container_attributes\") }}>
            {{ date_pattern|replace({
                \"{{ year }}\":  form_widget(form.year),
                \"{{ month }}\": form_widget(form.month),
                \"{{ day }}\":   form_widget(form.day),
            })|raw }}

            {% set attr = {\"size\": 10}|merge(attr) %}
            {% set id = \"datepicker_\" ~ id %}
            {% set value = '' %}
            {% set full_name = \"datepicker_\" ~ full_name %}
            {{ block(\"hidden_widget\") }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock collot_datetime_widget %}


", "SCDatetimepickerBundle:Form:div_layout.html.twig", "C:\\xampp\\htdocs\\PassSante\\vendor\\stephanecollot\\datetimepicker-bundle\\SC\\DatetimepickerBundle/Resources/views/Form/div_layout.html.twig");
    }
}
