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

/* hotels.html.twig */
class __TwigTemplate_b1286b6d5c9eac6c907635542048f60b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotels.html.twig"));

        // line 1
        echo "<section id=\"hotels\">
    <h2>Nos hôtels</h2>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Bordeaux ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Paris ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Lille ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Vannes ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Chamonix ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Nice ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Biarritz ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "hotels.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hotels\">
    <h2>Nos hôtels</h2>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Bordeaux ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Paris ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Lille ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Vannes ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Chamonix ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Nice ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
    <div class=\"image-hotel-card\">
        <p class=\"localisation\">~ Biarritz ~</p>
        <img src=\"images/image-hotel.jpg\" alt=\"\">
    </div>
</section>", "hotels.html.twig", "H:\\SitesInternet\\HypnosHotels\\templates\\hotels.html.twig");
    }
}
