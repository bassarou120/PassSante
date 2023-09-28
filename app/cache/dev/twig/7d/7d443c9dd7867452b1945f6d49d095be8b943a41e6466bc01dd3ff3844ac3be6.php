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

/* GestionBundle:Macros:html.html.twig */
class __TwigTemplate_a7cfe7e90728de2dd1102106ba72ac3d3e2099bef62647befabea4315f4041eb extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionBundle:Macros:html.html.twig"));

        // line 26
        echo "


";
        // line 59
        echo "
";
        // line 79
        echo "


";
        // line 115
        echo "


";
        // line 124
        echo "



";
        // line 195
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_button($__label__ = null, $__attributes__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            // line 2
            echo "
    ";
            // line 3
            ob_start();
            // line 4
            echo "
        <button 

            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                // line 8
                echo "
                ";
                // line 9
                if (twig_test_iterable($context["val"])) {
                    // line 10
                    echo "
                ";
                    // line 11
                    $context["val"] = twig_join_filter($context["val"], " ");
                    // line 12
                    echo "
                ";
                }
                // line 14
                echo "
                ";
                // line 15
                echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\"

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo ">

            ";
            // line 19
            echo twig_call_macro($macros["_self"], "macro_text", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
            echo "

        </button>

    ";
            $___internal_9aeeedbe5d9c984dcc8d9c0e006d76c0626ab5754ea1d2a656ef014f18bf4376_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 3
            echo twig_spaceless($___internal_9aeeedbe5d9c984dcc8d9c0e006d76c0626ab5754ea1d2a656ef014f18bf4376_);
            // line 24
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_table_row($__label__ = null, $__options__ = [], $__translate_domain__ = "admin", $__params__ = [], $___raw__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "options" => $__options__,
            "translate_domain" => $__translate_domain__,
            "params" => $__params__,
            "_raw" => $___raw__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_row"));

            // line 30
            echo "    ";
            $context["tag"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "tag", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "tag", [], "any", false, false, false, 30), "th")) : ("th"));
            // line 31
            echo "    ";
            $context["action"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "action", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "action", [], "any", false, false, false, 31), false)) : (false));
            // line 32
            echo "    ";
            $context["translate_domain"] = (((isset($context["translate_domain"]) || array_key_exists("translate_domain", $context))) ? (_twig_default_filter((isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 32, $this->source); })()), "admin")) : ("admin"));
            // line 33
            echo "   
    ";
            // line 34
            if (twig_test_iterable((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "        ";
                $context["labels"] = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 35, $this->source); })());
                // line 36
                echo "    ";
            } else {
                // line 37
                echo "         ";
                $context["labels"] = twig_split_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 37, $this->source); })()), " ", 1);
                // line 38
                echo "    ";
            }
            // line 39
            echo "    ";
            $context["params"] = (((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 39, $this->source); })()), [])) : ([]));
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["_label"]) {
                // line 41
                echo "    

     <";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 43, $this->source); })()), "html", null, true);
                echo ">
    ";
                // line 44
                if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 44, $this->source); })())) {
                    // line 45
                    echo "
       ";
                    // line 46
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["_label"], (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 46, $this->source); })()), (isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 46, $this->source); })()));
                    echo "

    ";
                } else {
                    // line 49
                    echo "
        ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["_label"], (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 50, $this->source); })()), (isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 50, $this->source); })())), "html", null, true);
                    echo "

    ";
                }
                // line 53
                echo "     </";
                echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 53, $this->source); })()), "html", null, true);
                echo ">
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "     ";
            if ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "     <th>";
                echo twig_call_macro($macros["_self"], "macro_text", ["admin.row_action"], 56, $context, $this->getSourceContext());
                echo "</th>
     ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 60
    public function macro_text($__label__ = null, $__translate_domain__ = "admin", $__params__ = [], $___raw__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "translate_domain" => $__translate_domain__,
            "params" => $__params__,
            "_raw" => $___raw__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "text"));

            // line 61
            echo "
    ";
            // line 62
            $context["translate_domain"] = (((isset($context["translate_domain"]) || array_key_exists("translate_domain", $context))) ? (_twig_default_filter((isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 62, $this->source); })()), "admin")) : ("admin"));
            // line 63
            echo "
    ";
            // line 64
            $context["params"] = (((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 64, $this->source); })()), [])) : ([]));
            // line 65
            echo "
    

    ";
            // line 68
            if ((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "
        ";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 70, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 70, $this->source); })()), (isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 70, $this->source); })()));
                echo "

    ";
            } else {
                // line 73
                echo "
        ";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 74, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 74, $this->source); })()), (isset($context["translate_domain"]) || array_key_exists("translate_domain", $context) ? $context["translate_domain"] : (function () { throw new RuntimeError('Variable "translate_domain" does not exist.', 74, $this->source); })())), "html", null, true);
                echo "

    ";
            }
            // line 77
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_button_link($__label__ = null, $__route__ = null, $__route_params__ = [], $__attributes__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "route" => $__route__,
            "route_params" => $__route_params__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_link"));

            // line 83
            echo "
    ";
            // line 84
            ob_start();
            // line 85
            echo "
        ";
            // line 86
            $context["_url"] = "#";
            // line 87
            echo "
        ";
            // line 88
            if ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 88, $this->source); })())) {
                // line 89
                echo "
            ";
                // line 90
                $context["_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 90, $this->source); })()), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 90, $this->source); })()));
                // line 91
                echo "
        ";
            }
            // line 93
            echo "
        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["_url"]) || array_key_exists("_url", $context) ? $context["_url"] : (function () { throw new RuntimeError('Variable "_url" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\"

            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["attr"] => $context["val"]) {
                // line 97
                echo "
                ";
                // line 98
                if (twig_test_iterable($context["val"])) {
                    // line 99
                    echo "
                ";
                    // line 100
                    $context["val"] = twig_join_filter($context["val"], " ");
                    // line 101
                    echo "
                ";
                }
                // line 103
                echo "
                ";
                // line 104
                echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\"

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attr'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo ">

            ";
            // line 108
            echo twig_call_macro($macros["_self"], "macro_text", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 108, $this->source); })())], 108, $context, $this->getSourceContext());
            echo "

        </a>

    ";
            $___internal_c0d81e96a3e02049c177fb9b35fa740b9aa03cfc13fcf0172299b581a5b0a055_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo twig_spaceless($___internal_c0d81e96a3e02049c177fb9b35fa740b9aa03cfc13fcf0172299b581a5b0a055_);
            // line 113
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 118
    public function macro_button_links($__labels__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "labels" => $__labels__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_links"));

            // line 119
            echo "    
    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 121
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_button_link", [twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["label"], "route", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["label"], "route_params", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["label"], "attributes", [], "any", false, false, false, 121)], 121, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 128
    public function macro_fichier($__fichier__ = null, $__with_link__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fichier" => $__fichier__,
            "with_link" => $__with_link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "fichier"));

            // line 129
            echo "
    

    ";
            // line 132
            $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["fichier"] ?? null), "vars", [], "any", true, true, false, 132)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fichier"]) || array_key_exists("fichier", $context) ? $context["fichier"] : (function () { throw new RuntimeError('Variable "fichier" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132)) : (null));
            // line 133
            echo "
    ";
            // line 134
            $context["with_link"] = (((isset($context["with_link"]) || array_key_exists("with_link", $context))) ? ((isset($context["with_link"]) || array_key_exists("with_link", $context) ? $context["with_link"] : (function () { throw new RuntimeError('Variable "with_link" does not exist.', 134, $this->source); })())) : (false));
            // line 135
            echo "
    ";
            // line 136
            $context["is_link"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()), "path", [], "any", false, false, false, 136) == "__external__"));
            // line 137
            echo "
    ";
            // line 138
            $context["alt_input_attr"] = ((((isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new RuntimeError('Variable "is_link" does not exist.', 138, $this->source); })()) === false)) ? (["attr" => ["class" => "hide input-alt"]]) : (["attr" => ["class" => "input-alt"]]));
            // line 139
            echo "


    ";
            // line 142
            if ((isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new RuntimeError('Variable "is_link" does not exist.', 142, $this->source); })())) {
                // line 143
                echo "
        ";
                // line 144
                $context["file_url"] = twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 144, $this->source); })()), "alt", [], "any", false, false, false, 144);
                // line 145
                echo "
    ";
            } else {
                // line 147
                echo "
        ";
                // line 148
                $context["file_url"] = ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 148, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parametre_fichier_show", ["fichier" => twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148)])) : (null));
                // line 149
                echo "
    ";
            }
            // line 151
            echo "
   

    ";
            // line 154
            $context["file_attr"] = ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()), "path", [], "any", false, false, false, 154) != "__external__"))) ? (["data" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()), "attr" => ["class" => "filestyle", "data-placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()), "alt", [], "any", false, false, false, 154), "data-fileUrl" => (isset($context["file_url"]) || array_key_exists("file_url", $context) ? $context["file_url"] : (function () { throw new RuntimeError('Variable "file_url" does not exist.', 154, $this->source); })()), "data-buttonText" => "Modifier"]]) : (["attr" => ["class" => "filestyle", "data-placeholder" => "Aucun fichier", "data-buttonText" => "Choisir"]]));
            // line 155
            echo "
 

    

    <div class=\"prototype_file even pointer row\" style=\"margin-bottom: 5px\">

         <div class=\"col-md-6\"> 

            ";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fichier"]) || array_key_exists("fichier", $context) ? $context["fichier"] : (function () { throw new RuntimeError('Variable "fichier" does not exist.', 164, $this->source); })()), "title", [], "any", false, false, false, 164), 'widget');
            echo "

        </div>

        <div class=\"col-md-4\"> 

            ";
            // line 170
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fichier"]) || array_key_exists("fichier", $context) ? $context["fichier"] : (function () { throw new RuntimeError('Variable "fichier" does not exist.', 170, $this->source); })()), "file", [], "any", false, false, false, 170), 'widget', (isset($context["file_attr"]) || array_key_exists("file_attr", $context) ? $context["file_attr"] : (function () { throw new RuntimeError('Variable "file_attr" does not exist.', 170, $this->source); })()));
            echo "

        </div>

        <div class=\"col-md-2 del-col ";
            // line 174
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 174, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174))) {
                echo "has-file";
            }
            echo "\">

            ";
            // line 176
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 176, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, false, 176))) {
                // line 177
                echo "
                 <a href=\"#\" data-href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parametre_fichier_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-remove\"></i>

                    <span class=\"hide\">Supprimer</span>

                 </a>

            ";
            }
            // line 185
            echo "


        </div>

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
        return "GestionBundle:Macros:html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 185,  598 => 178,  595 => 177,  593 => 176,  586 => 174,  579 => 170,  570 => 164,  559 => 155,  557 => 154,  552 => 151,  548 => 149,  546 => 148,  543 => 147,  539 => 145,  537 => 144,  534 => 143,  532 => 142,  527 => 139,  525 => 138,  522 => 137,  520 => 136,  517 => 135,  515 => 134,  512 => 133,  510 => 132,  505 => 129,  488 => 128,  469 => 121,  465 => 120,  462 => 119,  446 => 118,  433 => 113,  431 => 84,  423 => 108,  419 => 106,  408 => 104,  405 => 103,  401 => 101,  399 => 100,  396 => 99,  394 => 98,  391 => 97,  387 => 96,  382 => 94,  379 => 93,  375 => 91,  373 => 90,  370 => 89,  368 => 88,  365 => 87,  363 => 86,  360 => 85,  358 => 84,  355 => 83,  336 => 82,  323 => 77,  317 => 74,  314 => 73,  308 => 70,  305 => 69,  303 => 68,  298 => 65,  296 => 64,  293 => 63,  291 => 62,  288 => 61,  269 => 60,  253 => 56,  250 => 55,  241 => 53,  235 => 50,  232 => 49,  226 => 46,  223 => 45,  221 => 44,  217 => 43,  213 => 41,  208 => 40,  205 => 39,  202 => 38,  199 => 37,  196 => 36,  193 => 35,  191 => 34,  188 => 33,  185 => 32,  182 => 31,  179 => 30,  159 => 29,  146 => 24,  144 => 3,  136 => 19,  132 => 17,  121 => 15,  118 => 14,  114 => 12,  112 => 11,  109 => 10,  107 => 9,  104 => 8,  100 => 7,  95 => 4,  93 => 3,  90 => 2,  73 => 1,  65 => 195,  59 => 124,  54 => 115,  49 => 79,  46 => 59,  41 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro button(label, attributes={}) %}

    {% apply spaceless %}

        <button 

            {% for attr, val in attributes %}

                {% if val is iterable %}

                {% set val = val|join(' ') %}

                {% endif %}

                {{ attr }}=\"{{ val }}\"

            {% endfor %}>

            {{ _self.text(label) }}

        </button>

    {% endapply %}

{% endmacro %}



{% macro table_row(label,options={}, translate_domain = 'admin', params = {}, _raw = false) %}
    {% set tag = options.tag|default('th') %}
    {% set action = options.action|default(false) %}
    {% set translate_domain = translate_domain|default('admin') %}
   
    {% if label is iterable %}
        {% set labels = label %}
    {% else %}
         {% set labels = label|split(' ', 1) %}
    {% endif %}
    {% set params = params|default({}) %}
    {% for _label in labels %}
    

     <{{ tag }}>
    {% if _raw %}

       {{ _label | trans(params, translate_domain) | raw }}

    {% else %}

        {{ _label | trans(params, translate_domain)  }}

    {% endif %}
     </{{ tag }}>
     {% endfor %}
     {% if action %}
     <th>{{ _self.text('admin.row_action') }}</th>
     {% endif %}
{% endmacro %}

{% macro text(label, translate_domain = 'admin', params = {}, _raw = false) %}

    {% set translate_domain = translate_domain|default('admin') %}

    {% set params = params|default({}) %}

    

    {% if _raw %}

        {{ label | trans(params, translate_domain) | raw }}

    {% else %}

        {{ label | trans(params, translate_domain)  }}

    {% endif %}

{% endmacro %}



{% macro button_link(label, route, route_params = {}, attributes={}) %}

    {% apply spaceless %}

        {% set _url = '#' %}

        {% if route %}

            {% set _url = path(route, route_params) %}

        {% endif %}

        <a href=\"{{ _url }}\"

            {% for attr, val in attributes %}

                {% if val is iterable %}

                {% set val = val|join(' ') %}

                {% endif %}

                {{ attr }}=\"{{ val }}\"

            {% endfor %}>

            {{ _self.text(label) }}

        </a>

    {% endapply %}

{% endmacro %}



{% macro button_links(labels) %}
    
    {% for label in labels %}
        {{ _self.button_link(label.label, label.route, label.route_params, label.attributes) }}
    {% endfor %}
{% endmacro %}




{% macro fichier(fichier,  with_link) %}

    

    {% set value = (fichier.vars is defined ? fichier.vars.value : null) %}

    {% set with_link = with_link is defined ? with_link : false %}

    {% set is_link = value and value.path == '__external__' %}

    {% set alt_input_attr = is_link is same as(false) ? {attr: {class: 'hide input-alt'}}: {attr: {class: 'input-alt'}} %}



    {% if is_link %}

        {% set file_url = value.alt %}

    {% else %}

        {% set file_url = value and value.id ? path('admin_parametre_fichier_show', {fichier: value.id}): null %}

    {% endif %}

   

    {% set file_attr = (value and value.path != '__external__')  ? {data: value, attr: {class: 'filestyle', 'data-placeholder': value.alt, 'data-fileUrl': file_url, 'data-buttonText': 'Modifier'}}:  {attr: {class: 'filestyle', 'data-placeholder': 'Aucun fichier', 'data-buttonText': 'Choisir'}} %}

 

    

    <div class=\"prototype_file even pointer row\" style=\"margin-bottom: 5px\">

         <div class=\"col-md-6\"> 

            {{ form_widget(fichier.title) }}

        </div>

        <div class=\"col-md-4\"> 

            {{ form_widget(fichier.file, file_attr) }}

        </div>

        <div class=\"col-md-2 del-col {% if value and value.id %}has-file{% endif %}\">

            {% if value and value.id %}

                 <a href=\"#\" data-href=\"{{ path('admin_parametre_fichier_delete', {id: value.id}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-remove\"></i>

                    <span class=\"hide\">Supprimer</span>

                 </a>

            {% endif %}



        </div>

    </div>



{% endmacro %}

", "GestionBundle:Macros:html.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\GestionBundle/Resources/views/Macros/html.html.twig");
    }
}
