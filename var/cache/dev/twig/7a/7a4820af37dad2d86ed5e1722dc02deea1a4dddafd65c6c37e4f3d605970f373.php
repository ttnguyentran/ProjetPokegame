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

/* ref_pokemon_type/index.html.twig */
class __TwigTemplate_30d213f0e40837ff1be7708944f31e4ed6c0e1b5de54642bdbbee345b4f6523e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ref_pokemon_type/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ref_pokemon_type/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ref_pokemon_type/index.html.twig", 1);
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

        echo "RefPokemonType index";
        
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
        echo "    <h1>RefPokemonType index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Type2</th>
                <th>Nom</th>
                <th>Evolution</th>
                <th>Starter</th>
                <th>TypeCourbeNiveau</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ref_pokemon_types"]) || array_key_exists("ref_pokemon_types", $context) ? $context["ref_pokemon_types"] : (function () { throw new RuntimeError('Variable "ref_pokemon_types" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ref_pokemon_type"]) {
            // line 23
            echo "            <tr>
                <td>
                    <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo ".png'>
                </td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "type2", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "evolution", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 31
            echo ((twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "starter", [], "any", false, false, false, 31)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "typeCourbeNiveau", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"row  justify-content-center\">
                        <div class=\"md-5\">
                            <button type=\"button\" onclick=\"location.href='";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ref_pokemon_type_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA; \">Detail</button>
                        </div>
                        <div class=\"md-2\">

                        </div>
                        <div class=\"md-5\">
                            <button type=\"button\" onclick=\"location.href='";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ref_pokemon_type_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ref_pokemon_type"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA;\" >Editer</button>
                        </div>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref_pokemon_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ref_pokemon_type_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ref_pokemon_type/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  176 => 52,  167 => 48,  156 => 42,  147 => 36,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  111 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RefPokemonType index{% endblock %}

{% block body %}
    <h1>RefPokemonType index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Type2</th>
                <th>Nom</th>
                <th>Evolution</th>
                <th>Starter</th>
                <th>TypeCourbeNiveau</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ref_pokemon_type in ref_pokemon_types %}
            <tr>
                <td>
                    <img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ ref_pokemon_type.id }}.png'>
                </td>
                <td>{{ ref_pokemon_type.id }}</td>
                <td>{{ ref_pokemon_type.type2 }}</td>
                <td>{{ ref_pokemon_type.nom }}</td>
                <td>{{ ref_pokemon_type.evolution ? 'Yes' : 'No' }}</td>
                <td>{{ ref_pokemon_type.starter ? 'Yes' : 'No' }}</td>
                <td>{{ ref_pokemon_type.typeCourbeNiveau }}</td>
                <td>
                    <div class=\"row  justify-content-center\">
                        <div class=\"md-5\">
                            <button type=\"button\" onclick=\"location.href='{{ path('ref_pokemon_type_show', {'id': ref_pokemon_type.id}) }}'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA; \">Detail</button>
                        </div>
                        <div class=\"md-2\">

                        </div>
                        <div class=\"md-5\">
                            <button type=\"button\" onclick=\"location.href='{{ path('ref_pokemon_type_edit', {'id': ref_pokemon_type.id}) }}'\" class=\"btn btn-primary btn-lg\" style=\"color:#3B4CCA;\" >Editer</button>
                        </div>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('ref_pokemon_type_new') }}\">Create new</a>
{% endblock %}
", "ref_pokemon_type/index.html.twig", "C:\\Users\\tthan\\webtp6\\templates\\ref_pokemon_type\\index.html.twig");
    }
}
