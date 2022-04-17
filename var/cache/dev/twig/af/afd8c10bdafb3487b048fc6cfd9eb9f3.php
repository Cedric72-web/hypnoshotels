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

/* base.html.twig */
class __TwigTemplate_bea970c0069d766ae9cd721ddbfcf0c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap\" rel=\"stylesheet\"> 
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<header>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "HYPNOS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <h1>HYPNOS Hôtels</h1>
    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>
    <nav class=\"navbar\">
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Nos services
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Nous contacter
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                    Connexion
                </a>
            </span>
        </div>
    </nav>
    <div class=\"logo\"></div>
</header>
";
        // line 58
        echo "<section id=\"accueil\">
    <div class=\"image-accueil\">
        <img src=\"images/image-accueil.jpg\" alt=\"Vue Tour Eiffel\">
    </div>
    <div class=\"description\">
        <p>Fondé en 2004, le groupe hôtelier Hypnos, compte 7 établissements dans les 4 coins de la France.<br>Destination idéale pour les couples en quête d'un séjour romantique, chaque hôtel est équipé de suite avec spa privatif, et propose des services hauts de gamme.<br>L'atmosphère chic-romantique de nos établissements vous permettra de cultiver la flamme qui anime votre couple. </p>
    </div>
</section>
<section id=\"hotels\">
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
</section>
    <script src=\"js/app.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  141 => 49,  109 => 19,  99 => 18,  80 => 14,  69 => 99,  67 => 18,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap\" rel=\"stylesheet\"> 
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <title>{% block title %}HYPNOS{% endblock %}</title>
</head>
<body>
<header>
    {% block body %}
    <h1>HYPNOS Hôtels</h1>
    <div class=\"btn-rond-menu\">
        <div class=\"cont-ligne\">
            <div class=\"ligne-unique\"></div>
        </div>
    </div>
    <nav class=\"navbar\">
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Accueil
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Nos services
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"#\">
                    Nous contacter
                </a>
            </span>
        </div>
        <div class=\"blocs-menu\">
            <span class=\"nav-menu-item\">
                <a href=\"{{ path('app_login') }}\">
                    Connexion
                </a>
            </span>
        </div>
    </nav>
    <div class=\"logo\"></div>
</header>
{#{% block body %}#}
<section id=\"accueil\">
    <div class=\"image-accueil\">
        <img src=\"images/image-accueil.jpg\" alt=\"Vue Tour Eiffel\">
    </div>
    <div class=\"description\">
        <p>Fondé en 2004, le groupe hôtelier Hypnos, compte 7 établissements dans les 4 coins de la France.<br>Destination idéale pour les couples en quête d'un séjour romantique, chaque hôtel est équipé de suite avec spa privatif, et propose des services hauts de gamme.<br>L'atmosphère chic-romantique de nos établissements vous permettra de cultiver la flamme qui anime votre couple. </p>
    </div>
</section>
<section id=\"hotels\">
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
</section>
    <script src=\"js/app.js\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "H:\\SitesInternet\\HypnosHotels\\templates\\base.html.twig");
    }
}
