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

/* SiteBundle:Default:parteners.html.twig */
class __TwigTemplate_e1d02c431d1c795ef4531574af0cd3c6e8ac7e8dbd49e6768db63f15fa8e8666 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SiteBundle:Default:parteners.html.twig"));

        // line 1
        echo "<div class=\"container\" id=\"section-parteners\">
    <div class=\"section-title  margin-b50\">
        <h2>";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.section.parteners.label");
        echo "</h2>
    </div>
    <div class=\"section-content text-center\">
        <ul class=\"list-inline list-partners\" data-max-items=\"7\" data-slide=\"li\">
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.sante.gouv.ci\" target=\"_blank\" rel=\"noopener noreferrer\">
                    <img src=\"/uploads/mshp.jpg\" />
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.synamepci.net\" target=\"_blank\">
                    <img src=\"/uploads/logo_synamepci.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://societegenerale.ci/fr/\" target=\"_blank\">
                    <img src=\"/uploads/logo-sgci.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.pass-mut.org/\" target=\"_blank\">
                    <img src=\"/uploads/logo_pass_mu.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <img src=\"/uploads/yellow_startup.jpeg\" />
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://bs.ms/HUKF\" target=\"_blank\">
                    <img src=\"/uploads/logo_mobi_simple_Transparent.png\" />
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"#\">
                    <img src=\"/uploads/espace_sante.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.ong-agis.com\" target=\"_blank\">
                    <img src=\"/uploads/ong_agis.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.jenysas.bj\" target=\"_blank\">
                    <img src=\"/uploads/logo-jeny.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"#\">
                    <img src=\"/uploads/cmcs.jpg\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.mamafrica.net/sante\" target=\"_blank\">
                    <img src=\"/uploads/LOGO MAMAFRICA-FR.jpg\">
                </a>
            </li>
        </ul>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:parteners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\" id=\"section-parteners\">
    <div class=\"section-title  margin-b50\">
        <h2>{{ 'home.section.parteners.label' | trans | raw }}</h2>
    </div>
    <div class=\"section-content text-center\">
        <ul class=\"list-inline list-partners\" data-max-items=\"7\" data-slide=\"li\">
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.sante.gouv.ci\" target=\"_blank\" rel=\"noopener noreferrer\">
                    <img src=\"/uploads/mshp.jpg\" />
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.synamepci.net\" target=\"_blank\">
                    <img src=\"/uploads/logo_synamepci.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://societegenerale.ci/fr/\" target=\"_blank\">
                    <img src=\"/uploads/logo-sgci.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.pass-mut.org/\" target=\"_blank\">
                    <img src=\"/uploads/logo_pass_mu.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <img src=\"/uploads/yellow_startup.jpeg\" />
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://bs.ms/HUKF\" target=\"_blank\">
                    <img src=\"/uploads/logo_mobi_simple_Transparent.png\" />
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"#\">
                    <img src=\"/uploads/espace_sante.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.ong-agis.com\" target=\"_blank\">
                    <img src=\"/uploads/ong_agis.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"http://www.jenysas.bj\" target=\"_blank\">
                    <img src=\"/uploads/logo-jeny.png\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"#\">
                    <img src=\"/uploads/cmcs.jpg\">
                </a>
            </li>
            <li class=\"partner list-inline-item\">
                <a href=\"https://www.mamafrica.net/sante\" target=\"_blank\">
                    <img src=\"/uploads/LOGO MAMAFRICA-FR.jpg\">
                </a>
            </li>
        </ul>
    </div>
</div>", "SiteBundle:Default:parteners.html.twig", "C:\\xampp\\htdocs\\PassSante\\src\\PS\\SiteBundle/Resources/views/Default/parteners.html.twig");
    }
}
