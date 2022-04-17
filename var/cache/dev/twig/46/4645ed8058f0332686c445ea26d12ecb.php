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

/* accueil.html.twig */
class __TwigTemplate_e373fca95fa743d380dfecffbbfed9ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        echo "<section id=\"accueil\">
    <div class=\"image-accueil\">
        <img src=\"images/image-accueil.jpg\" alt=\"Vue Tour Eiffel\">
    </div>
    <div class=\"description\">
        <p>Fondé en 2004, le groupe hôtelier Hypnos, compte 7 établissements dans les 4 coins de la France.<br>Destination idéale pour les couples en quête d'un séjour romantique, chaque hôtel est équipé de suite avec spa privatif, et propose des services hauts de gamme.<br>L'atmosphère chic-romantique de nos établissements vous permettra de cultiver la flamme qui anime votre couple. </p>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"accueil\">
    <div class=\"image-accueil\">
        <img src=\"images/image-accueil.jpg\" alt=\"Vue Tour Eiffel\">
    </div>
    <div class=\"description\">
        <p>Fondé en 2004, le groupe hôtelier Hypnos, compte 7 établissements dans les 4 coins de la France.<br>Destination idéale pour les couples en quête d'un séjour romantique, chaque hôtel est équipé de suite avec spa privatif, et propose des services hauts de gamme.<br>L'atmosphère chic-romantique de nos établissements vous permettra de cultiver la flamme qui anime votre couple. </p>
    </div>
</section>", "accueil.html.twig", "H:\\SitesInternet\\HypnosHotels\\templates\\accueil.html.twig");
    }
}
