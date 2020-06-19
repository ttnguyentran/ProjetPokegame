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

/* capture/capture.html.twig */
class __TwigTemplate_4d6dd04fb3a414a832602552dbca7d94918229da8a995781a10fd64fe8123b03 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "capture/capture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "capture/capture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "capture/capture.html.twig", 1);
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

        echo "Prêt à capturer ?";
        
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
        echo "    <h3>Prêt à capturer ce Pokémon ?</h3>
\t
\t<div class=\"card\" style=\"width: 80%;margin: auto\">
\t\t<div class=\"card-body\">
\t\t\t<p><span class=\"app-bold\">Pokémon : </span>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom_pokemon"]) || array_key_exists("nom_pokemon", $context) ? $context["nom_pokemon"] : (function () { throw new RuntimeError('Variable "nom_pokemon" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Sexe : </span>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["sexe"]) || array_key_exists("sexe", $context) ? $context["sexe"] : (function () { throw new RuntimeError('Variable "sexe" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p><span class=\"app-bold\">Niveau : </span>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t
\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<button type=\"submit\" class=\"btn\" style=\"font-weight: bold; color: red\">Capturer</button>
\t\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
\t\t\t
\t\t\t</br>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("capture_poke_dispo_index");
        echo "\">Annuler</a>
\t\t\t
\t\t</div>
\t</div>\t
\t
\t
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "capture/capture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  112 => 16,  107 => 14,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prêt à capturer ?{% endblock %}

{% block body %}
    <h3>Prêt à capturer ce Pokémon ?</h3>
\t
\t<div class=\"card\" style=\"width: 80%;margin: auto\">
\t\t<div class=\"card-body\">
\t\t\t<p><span class=\"app-bold\">Pokémon : </span>{{ nom_pokemon }}</p>
\t\t\t<p><span class=\"app-bold\">Sexe : </span>{{ sexe }}</p>
\t\t\t<p><span class=\"app-bold\">Niveau : </span>{{ niveau }}</p>
\t\t\t
\t\t\t{{ form_start(form) }}
\t\t\t\t<button type=\"submit\" class=\"btn\" style=\"font-weight: bold; color: red\">Capturer</button>
\t\t\t{{ form_end(form) }}
\t\t\t
\t\t\t</br>
\t\t\t<a href=\"{{ path('capture_poke_dispo_index') }}\">Annuler</a>
\t\t\t
\t\t</div>
\t</div>\t
\t
\t
\t
{% endblock %}", "capture/capture.html.twig", "C:\\Users\\tthan\\ProjetPokegame\\templates\\capture\\capture.html.twig");
    }
}
