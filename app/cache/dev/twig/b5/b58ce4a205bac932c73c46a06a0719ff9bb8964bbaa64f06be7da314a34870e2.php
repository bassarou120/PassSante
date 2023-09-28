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

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d5f72528bca545ea5ca7e9e6174b461c126ca13ab4744e3bf03081d35559ce2e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'title' => [$this, 'block_title'],
            'entete' => [$this, 'block_entete'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 2
        $macros["_html"] = $this->macros["_html"] = $this->loadTemplate("GestionBundle:Macros:html.html.twig", "@FOSUser/Security/login.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("admin/login.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "
        <div>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>

    ";
        }
        // line 12
        echo "


    <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" />

        <div class=\"form-group has-feedback\">

            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"";
        // line 21
        echo twig_call_macro($macros["_html"], "macro_text", ["security.form.placeholder._username"], 21, $context, $this->getSourceContext());
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"off\">

            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>

        </div>

        <div class=\"form-group has-feedback\">

            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 29
        echo twig_call_macro($macros["_html"], "macro_text", ["security.form.placeholder._password"], 29, $context, $this->getSourceContext());
        echo "\" required=\"required\" autocomplete=\"off\" data-toggle=\"password\">

             <span class=\"glyphicon glyphicon-lock form-control-feedback toggle-password hide\" title=\"Montrer\"></span>

        </div>

        <div class=\"row\">

            <div class=\"col-xs-8\">

                <div class=\"checkbox icheck\">

                    <label>

                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "

                    </label>

                </div>

            </div>

            <!-- /.col -->

            <div class=\"col-xs-4\">

                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"submit\" name=\"_submit\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>

            </div>

            <!-- /.col -->

        </div>

    </form>



    <div class=\"social-auth-links text-center\">

        <p>- OU -</p>

        <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-block btn-default btn-flat inscrire\"><i class=\"\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</a>

    </div>

    <!-- /.social-auth-links -->



    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_call_macro($macros["_html"], "macro_text", ["security.password"], 79, $context, $this->getSourceContext());
        echo "</a><br>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_call_macro($macros["_html"], "macro_text", ["security.title"], 86, $context, $this->getSourceContext());
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        echo twig_call_macro($macros["_html"], "macro_text", ["security.login_text"], 87, $context, $this->getSourceContext());
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 87,  186 => 86,  172 => 79,  159 => 71,  140 => 55,  125 => 43,  108 => 29,  95 => 21,  88 => 17,  83 => 15,  78 => 12,  72 => 9,  69 => 8,  67 => 7,  64 => 6,  57 => 5,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/login.html.twig\" %}
{% import 'GestionBundle:Macros:html.html.twig' as _html %}


{% block fos_user_content %}

    {% if error %}

        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>

    {% endif %}



    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

        <div class=\"form-group has-feedback\">

            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"{{ _html.text('security.form.placeholder._username') }}\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"off\">

            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>

        </div>

        <div class=\"form-group has-feedback\">

            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"{{ _html.text('security.form.placeholder._password') }}\" required=\"required\" autocomplete=\"off\" data-toggle=\"password\">

             <span class=\"glyphicon glyphicon-lock form-control-feedback toggle-password hide\" title=\"Montrer\"></span>

        </div>

        <div class=\"row\">

            <div class=\"col-xs-8\">

                <div class=\"checkbox icheck\">

                    <label>

                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}

                    </label>

                </div>

            </div>

            <!-- /.col -->

            <div class=\"col-xs-4\">

                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" id=\"submit\" name=\"_submit\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>

            </div>

            <!-- /.col -->

        </div>

    </form>



    <div class=\"social-auth-links text-center\">

        <p>- OU -</p>

        <a href=\"{{ path(\"fos_user_registration_register\") }}\" class=\"btn btn-block btn-default btn-flat inscrire\"><i class=\"\"></i> {{ 'registration.submit'|trans({}, 'FOSUserBundle') }}</a>

    </div>

    <!-- /.social-auth-links -->



    <a href=\"{{ path(\"fos_user_resetting_request\") }}\">{{ _html.text('security.password') }}</a><br>



{% endblock fos_user_content %}


{% block title %}{{ _html.text('security.title') }}{% endblock %}
{% block entete %}{{ _html.text('security.login_text') }} {% endblock %}", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\UtilisateurBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
