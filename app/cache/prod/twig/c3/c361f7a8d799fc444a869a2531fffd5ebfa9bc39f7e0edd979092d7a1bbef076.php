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

/* SiteBundle:Default:footer.html.twig */
class __TwigTemplate_8fc792e88ab6ecdd8b5dfb06490b46b34da5b60f41fe063cb29ed5b79a66baef extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"row bg_white copyright\">
        <div class=\"container\">
            <div class=\" padding-t30 clearfix\">
                <div class=\"col-sm-6\">
                    <h4>Suivez nous</h4>
                    <div class=\"social-links\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>

                    </div>
                </div>
                <div class=\"col-sm-6 text-right\">
                    <h4>Mode de Paiement</h4>
                    <ul class=\"list-inline payment-icons\">
                        <li><i class=\"fa fa-cc-mastercard fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-visa fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-discover fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-paypal fa-3x\"></i></li>
                        <li><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/om.jpg"), "html", null, true);
        echo "\"></li>
                        <li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/mtn.jpg"), "html", null, true);
        echo "\"></li>
                        <li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/mm.jpg"), "html", null, true);
        echo "\"></li>

                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class=\"copyright text-center\">Copyright © 2020 MCM</p>
    </div>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  65 => 21,  61 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"row bg_white copyright\">
        <div class=\"container\">
            <div class=\" padding-t30 clearfix\">
                <div class=\"col-sm-6\">
                    <h4>Suivez nous</h4>
                    <div class=\"social-links\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>

                    </div>
                </div>
                <div class=\"col-sm-6 text-right\">
                    <h4>Mode de Paiement</h4>
                    <ul class=\"list-inline payment-icons\">
                        <li><i class=\"fa fa-cc-mastercard fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-visa fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-discover fa-3x\"></i></li>
                        <li><i class=\"fa fa-cc-paypal fa-3x\"></i></li>
                        <li><img src=\"{{ asset('bundles/site/v3/images/om.jpg')}}\"></li>
                        <li><img src=\"{{ asset('bundles/site/v3/images/mtn.jpg')}}\"></li>
                        <li><img src=\"{{ asset('bundles/site/v3/images/mm.jpg')}}\"></li>

                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class=\"copyright text-center\">Copyright © 2020 MCM</p>
    </div>
</footer>", "SiteBundle:Default:footer.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/footer.html.twig");
    }
}
