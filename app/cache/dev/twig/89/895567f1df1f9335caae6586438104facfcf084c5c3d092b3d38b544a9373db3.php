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

/* SiteBundle:Default:video_popup.html.twig */
class __TwigTemplate_9fdf0432614839cf3e25c35a9f37d6ef754acd7d15e4be520139b5c0fec22ff7 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:video_popup.html.twig"));

        // line 1
        echo "<section class=\"content-video subscribe section_sapce2 bg_dark cover-image\"
    data-image-src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/site/v3/images/subbanners/2"), "html", null, true);
        echo ".jpg\">
    <div class=\"container col-sm-12 col-xs-12 col-md-8 center-block text-center\">
        <div class=\"row\">
            <div class=\"section-title\">
                <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.presentation.part_video"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"col-sm-12 col-md-12\">
                <div class=\"pop-video-container\">
                    <a class=\"autoplay\" href=\"https://www.youtube.com/watch?v=Hr8qPpsT2J0\">
                        <i class=\"fa fa-play fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:video_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"content-video subscribe section_sapce2 bg_dark cover-image\"
    data-image-src=\"{{ asset('bundles/site/v3/images/subbanners/2')}}.jpg\">
    <div class=\"container col-sm-12 col-xs-12 col-md-8 center-block text-center\">
        <div class=\"row\">
            <div class=\"section-title\">
                <span>{{'home.section.presentation.part_video'| trans }}</span>
            </div>
            <div class=\"col-sm-12 col-md-12\">
                <div class=\"pop-video-container\">
                    <a class=\"autoplay\" href=\"https://www.youtube.com/watch?v=Hr8qPpsT2J0\">
                        <i class=\"fa fa-play fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>", "SiteBundle:Default:video_popup.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/video_popup.html.twig");
    }
}
