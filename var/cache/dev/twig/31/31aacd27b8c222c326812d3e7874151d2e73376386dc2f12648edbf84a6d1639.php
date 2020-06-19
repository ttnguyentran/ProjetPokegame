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

/* pokemon/entrainement_success.html.twig */
class __TwigTemplate_1d5c348eed83ebbab10d62ecb0b9a80844a00a6402470524088b56b7f2e6ca17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/entrainement_success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/entrainement_success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/entrainement_success.html.twig", 1);
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

        echo "Résultat Entraînement";
        
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
        echo "    <h1>Pokemon : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Nom</th>
            <th>Type de courbe</th>
            <th>Xp gagné</th>
            <th>Xp actuel</th>
            <th>Niveau</th>
            <th>Prochain niveau dans</th>
            <th>Derniere Chasse</th>
            <th>Dernier Entrainement</th>

        </tr>
        <tr>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["typecourbe"]) || array_key_exists("typecourbe", $context) ? $context["typecourbe"] : (function () { throw new RuntimeError('Variable "typecourbe" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["xpgagne"]) || array_key_exists("xpgagne", $context) ? $context["xpgagne"] : (function () { throw new RuntimeError('Variable "xpgagne" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 25, $this->source); })()), "xp", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 26, $this->source); })()), "niveau", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["nextLevel"]) || array_key_exists("nextLevel", $context) ? $context["nextLevel"] : (function () { throw new RuntimeError('Variable "nextLevel" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</td>
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 28, $this->source); })()), "derniereChasse", [], "any", false, false, false, 28)) {
            // line 29
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 29, $this->source); })()), "derniereChasse", [], "any", false, false, false, 29), "full", "full", "", null, "gregorian", "en"), "html", null, true);
            echo "</td>
            ";
        }
        // line 31
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 31, $this->source); })()), "dernierEntrainement", [], "any", false, false, false, 31)) {
            // line 32
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 32, $this->source); })()), "dernierEntrainement", [], "any", false, false, false, 32), "full", "full", "", null, "gregorian", "en"), "html", null, true);
            echo "</td>
            ";
        }
        // line 34
        echo "        </tr>
        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/entrainement_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  143 => 32,  140 => 31,  134 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultat Entraînement{% endblock %}

{% block body %}
    <h1>Pokemon : {{ pokemon.nom }}</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Nom</th>
            <th>Type de courbe</th>
            <th>Xp gagné</th>
            <th>Xp actuel</th>
            <th>Niveau</th>
            <th>Prochain niveau dans</th>
            <th>Derniere Chasse</th>
            <th>Dernier Entrainement</th>

        </tr>
        <tr>
            <td>{{ pokemon.nom }}</td>
            <td>{{ typecourbe }}</td>
            <td>{{ xpgagne }}</td>
            <td>{{ pokemon.xp }}</td>
            <td>{{ pokemon.niveau }}</td>
            <td>{{ nextLevel }}</td>
            {% if pokemon.derniereChasse %}
                <td>{{ pokemon.derniereChasse|format_datetime('full', 'full', locale='en') }}</td>
            {% endif %}
            {% if pokemon.dernierEntrainement %}
                <td>{{ pokemon.dernierEntrainement|format_datetime('full', 'full', locale='en') }}</td>
            {% endif %}
        </tr>
        </tbody>
    </table>

{% endblock %}", "pokemon/entrainement_success.html.twig", "C:\\Users\\tthan\\ProjetPokegame\\templates\\pokemon\\entrainement_success.html.twig");
    }
}
