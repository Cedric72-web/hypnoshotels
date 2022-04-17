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

/* navbar.html.twig */
class __TwigTemplate_f7b1299b6f3c3f11c1f3ced14c03f40f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<header>
    <h1>HYPNOS Hôtels</h1>
    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>
    <nav class=\"navbar\">
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#accueil\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#hotels\">
                    Nos hôtels
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#services\">
                    Nos services
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#contact\">
                    Nous contacter
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"../db/inscription.php\">
                    Connexion
                </a>
            </span>
        </div>
    </nav>
    <div class=\"logo\"></div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <h1>HYPNOS Hôtels</h1>
    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>
    <nav class=\"navbar\">
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#accueil\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#hotels\">
                    Nos hôtels
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#services\">
                    Nos services
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#contact\">
                    Nous contacter
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"../db/inscription.php\">
                    Connexion
                </a>
            </span>
        </div>
    </nav>
    <div class=\"logo\"></div>
</header>", "navbar.html.twig", "H:\\SitesInternet\\HypnosHotels\\templates\\navbar.html.twig");
    }
}
