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

/* SCDatetimepickerBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_d3b58385307a43987b48dc93b1ae01d37accef1caefee3d303be82a3833104aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_javascript' => [$this, 'block_form_javascript'],
            'field_javascript' => [$this, 'block_field_javascript'],
            'button_javascript' => [$this, 'block_button_javascript'],
            'collot_datetime_javascript' => [$this, 'block_collot_datetime_javascript'],
            'collot_datetime_javascript_prototype' => [$this, 'block_collot_datetime_javascript_prototype'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('collot_datetime_javascript', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->extensions['SC\DatetimepickerBundle\Twig\Extension\FormExtension']->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_collot_datetime_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collot_datetime_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["pickerOptions"] ?? null), "language", [], "any", true, true, false, 17)) {
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker." . twig_get_attribute($this->env, $this->source, (isset($context["pickerOptions"]) || array_key_exists("pickerOptions", $context) ? $context["pickerOptions"] : (function () { throw new RuntimeError('Variable "pickerOptions" does not exist.', 18, $this->source); })()), "language", [], "any", false, false, false, 18)) . ".js")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        }
        // line 20
        echo "    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 23
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 23, $this->source); })()) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "');
        
            ";
        // line 25
        $this->displayBlock('collot_datetime_javascript_prototype', $context, $blocks);
        // line 42
        echo "        });
    </script>
    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_collot_datetime_javascript_prototype($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collot_datetime_javascript_prototype"));

        // line 26
        echo "
                ";
        // line 27
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 27, $this->source); })()) != "single_text")) {
            // line 28
            echo "                    var \$year = \$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "year", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "');
                    var \$month = \$('#";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "month", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "');
                    var \$day = \$('#";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "day", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                ";
        }
        // line 38
        echo "
                \$field.datetimepicker(";
        // line 39
        echo json_encode((isset($context["pickerOptions"]) || array_key_exists("pickerOptions", $context) ? $context["pickerOptions"] : (function () { throw new RuntimeError('Variable "pickerOptions" does not exist.', 39, $this->source); })()));
        echo ");  

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 39,  204 => 38,  193 => 30,  189 => 29,  184 => 28,  182 => 27,  179 => 26,  172 => 25,  161 => 42,  159 => 25,  151 => 23,  146 => 20,  140 => 18,  138 => 17,  134 => 16,  131 => 15,  129 => 14,  122 => 13,  109 => 11,  96 => 9,  81 => 4,  76 => 3,  74 => 2,  67 => 1,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block form_javascript %}
{% spaceless %}
    {% for child in form %}
        {{ form_javascript(child) }}
    {% endfor %}
{% endspaceless %}
{% endblock form_javascript %}

{% block field_javascript \"\" %}

{% block button_javascript \"\" %}

{% block collot_datetime_javascript %}
{% spaceless %}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js') }}\" charset=\"UTF-8\"></script>
    {% if pickerOptions.language is defined %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker.'~ pickerOptions.language ~'.js') }}\" charset=\"UTF-8\"></script>
    {% endif %}
    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{% if widget != \"single_text\" %}datepicker_{% endif %}{{ id }}');
        
            {% block collot_datetime_javascript_prototype %}

                {% if widget != \"single_text\" %}
                    var \$year = \$('#{{ form.year.vars.id }}');
                    var \$month = \$('#{{ form.month.vars.id }}');
                    var \$day = \$('#{{ form.day.vars.id }}');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                {% endif %}

                \$field.datetimepicker({{ pickerOptions|json_encode|raw }});  

            {% endblock %}
        });
    </script>
    
{% endspaceless %}
{% endblock %}
", "SCDatetimepickerBundle:Form:jquery_layout.html.twig", "C:\\xampp\\htdocs\\PassSante\\vendor\\stephanecollot\\datetimepicker-bundle\\SC\\DatetimepickerBundle/Resources/views/Form/jquery_layout.html.twig");
    }
}
