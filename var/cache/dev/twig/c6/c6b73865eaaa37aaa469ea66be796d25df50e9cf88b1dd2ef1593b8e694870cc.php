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

/* pokemon/show.html.twig */
class __TwigTemplate_0833a10d4db785c95a9d6e7833807f719f87883aa66241054de3bed3a03c38a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pokemon";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"card\" style=\"width: 80%;margin: auto\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title\">Fiche détaillée</h5>
\t\t\t<p><span class=\"app-bold\">Numéro de Pokédex : </span>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["espece"]) || array_key_exists("espece", $context) ? $context["espece"] : (function () { throw new RuntimeError('Variable "espece" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Nom : </span>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Sexe : </span>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Niveau : </span>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Types :</span></p>
\t\t\t<ul>
\t\t\t\t<li>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type1"]) || array_key_exists("type1", $context) ? $context["type1"] : (function () { throw new RuntimeError('Variable "type1" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["type2"]) || array_key_exists("type2", $context) ? $context["type2"] : (function () { throw new RuntimeError('Variable "type2" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</li>
\t\t\t</ul>
\t\t\t<p><span class=\"app-bold\">Est en vente : </span>";
        // line 18
        echo (((isset($context["estEnVente"]) || array_key_exists("estEnVente", $context) ? $context["estEnVente"] : (function () { throw new RuntimeError('Variable "estEnVente" does not exist.', 18, $this->source); })())) ? ("Yes") : ("No"));
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Prix : </span>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Dernier entrainement : </span>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dernierEntrainement"]) || array_key_exists("dernierEntrainement", $context) ? $context["dernierEntrainement"] : (function () { throw new RuntimeError('Variable "dernierEntrainement" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Dernière chasse : </span>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["derniereChasse"]) || array_key_exists("derniereChasse", $context) ? $context["derniereChasse"] : (function () { throw new RuntimeError('Variable "derniereChasse" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_train", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">Entraîner</a>
\t\t\t\t<span>&emsp;&emsp;</span>
\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_sell", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">Mettre en vente</a>
\t\t\t\t<span>&emsp;&emsp;</span>
\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_index");
        echo "\">Retour</a>
\t\t\t</p>
\t\t\t
\t\t</div>
\t</div>\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 27,  142 => 25,  137 => 23,  132 => 21,  128 => 20,  124 => 19,  120 => 18,  115 => 16,  111 => 15,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pokemon{% endblock %}

{% block body %}
    <div class=\"card\" style=\"width: 80%;margin: auto\">
\t\t<div class=\"card-body\">
\t\t\t<h5 class=\"card-title\">Fiche détaillée</h5>
\t\t\t<p><span class=\"app-bold\">Numéro de Pokédex : </span>{{ espece.id }}</p>
\t\t\t<p><span class=\"app-bold\">Nom : </span>{{ nom }}</p>
\t\t\t<p><span class=\"app-bold\">Sexe : </span>{{ sexe }}</p>
\t\t\t<p><span class=\"app-bold\">Niveau : </span>{{ niveau }}</p>
\t\t\t<p><span class=\"app-bold\">Types :</span></p>
\t\t\t<ul>
\t\t\t\t<li>{{ type1 }}</li>
\t\t\t\t<li>{{ type2 }}</li>
\t\t\t</ul>
\t\t\t<p><span class=\"app-bold\">Est en vente : </span>{{ estEnVente ? 'Yes' : 'No' }}</p>
\t\t\t<p><span class=\"app-bold\">Prix : </span>{{ prix }}</p>
\t\t\t<p><span class=\"app-bold\">Dernier entrainement : </span>{{ dernierEntrainement }}</p>
\t\t\t<p><span class=\"app-bold\">Dernière chasse : </span>{{ derniereChasse }}</p>
\t\t\t<p>
\t\t\t\t<a href=\"{{ path('pokemon_train', {'id': pokemon.id}) }}\">Entraîner</a>
\t\t\t\t<span>&emsp;&emsp;</span>
\t\t\t\t<a href=\"{{ path('pokemon_sell', {'id': pokemon.id}) }}\">Mettre en vente</a>
\t\t\t\t<span>&emsp;&emsp;</span>
\t\t\t\t<a href=\"{{ path('pokemon_index') }}\">Retour</a>
\t\t\t</p>
\t\t\t
\t\t</div>
\t</div>\t

{% endblock %}
", "pokemon/show.html.twig", "C:\\Users\\tthan\\ProjetPokegame\\templates\\pokemon\\show.html.twig");
    }
}
