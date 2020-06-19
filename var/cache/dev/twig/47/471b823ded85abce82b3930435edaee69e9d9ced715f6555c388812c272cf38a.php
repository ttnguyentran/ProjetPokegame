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

/* pokemon/mypokemon.html.twig */
class __TwigTemplate_ac6eab6ff6e9825a81b2f116582d45b57208fbb79cbef0d96793aee605e8bd58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/mypokemon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/mypokemon.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/mypokemon.html.twig", 1);
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

        echo "My Pokemons";
        
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
        <div class=\"card-body\">
            <h5 class=\"card-title\">Liste de mes pokemons</h5>
            <table class=\"table table-striped\">
                <thead>
                <th></th>
                <th><center>Nom</center></th>
                <th><center>Sexe</center></th>
                <th><center>Niveau</center></th>
                <th><center>Détails</center></th>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "                        <tr>
                            <td>
                                <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id_espece", [], "array", false, false, false, 21), "html", null, true);
            echo ".png'>
                            </td>
                            <td><center>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "nom", [], "array", false, false, false, 23), "html", null, true);
            echo "</center></td>
                            <td><center>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sexe", [], "array", false, false, false, 24), "html", null, true);
            echo "</center></td>
                            <td><center>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "niveau", [], "array", false, false, false, 25), "html", null, true);
            echo "</center></td>

                            <td>
                                <div class=\"row  justify-content-center\">
                                    <div class=\"md-5\">
                                        <button type=\"button\" onclick=\"location.href='";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_pokemon_show", ["idp" => twig_get_attribute($this->env, $this->source, $context["row"], "idp", [], "any", false, false, false, 30)]), "html", null, true);
            echo "'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA; \">Detail</button>
                                    </div>
                                    <div class=\"md-2\">

                                    </div>
                                    <div class=\"md-5\">
                                        <button type=\"button\" onclick=\"location.href='";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_pokemon_edit", ["idp" => twig_get_attribute($this->env, $this->source, $context["row"], "idp", [], "any", false, false, false, 36)]), "html", null, true);
            echo "'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA;\" >Editer</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                    <tr>
                        <td colspan=\"9\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/mypokemon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 46,  152 => 42,  141 => 36,  132 => 30,  124 => 25,  120 => 24,  116 => 23,  111 => 21,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Pokemons{% endblock %}

{% block body %}
    <div class=\"card\" style=\"width: 80%;margin: auto\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Liste de mes pokemons</h5>
            <table class=\"table table-striped\">
                <thead>
                <th></th>
                <th><center>Nom</center></th>
                <th><center>Sexe</center></th>
                <th><center>Niveau</center></th>
                <th><center>Détails</center></th>
                </thead>
                <tbody>
                {% for row in pokemons %}
                        <tr>
                            <td>
                                <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ row['id_espece'] }}.png'>
                            </td>
                            <td><center>{{row['nom']}}</center></td>
                            <td><center>{{row['sexe']}}</center></td>
                            <td><center>{{row['niveau']}}</center></td>

                            <td>
                                <div class=\"row  justify-content-center\">
                                    <div class=\"md-5\">
                                        <button type=\"button\" onclick=\"location.href='{{ path('my_pokemon_show', {'idp': row.idp}) }}'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA; \">Detail</button>
                                    </div>
                                    <div class=\"md-2\">

                                    </div>
                                    <div class=\"md-5\">
                                        <button type=\"button\" onclick=\"location.href='{{ path('my_pokemon_edit', {'idp': row.idp}) }}'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA;\" >Editer</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\">no records found</td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "pokemon/mypokemon.html.twig", "C:\\Users\\tthan\\webtp6\\templates\\pokemon\\mypokemon.html.twig");
    }
}
