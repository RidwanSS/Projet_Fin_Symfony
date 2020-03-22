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

/* produit/index.html.twig */
class __TwigTemplate_333a02001217e9555e8c4a322d7082a3046d3afad2ce219ded79841405662078 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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

        echo "Produits";
        
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
        echo "
    <br/>

    <h1 style=\"display:flex; justify-content:center; text-decoration: underline; font-family: Tahoma\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.titre"), "html", null, true);
        echo "
    </h1>

    <br/>

    ";
        // line 15
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        <p style=\"font-size: 20px; font-family: Tahoma\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.there_is", ["nb" => twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 16, $this->source); })()))]), "html", null, true);
            echo " :</p>
        <br/>
        <table class=\"table\" style=\"font-family: Tahoma;\">
            <thread>
                <tr>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.image"), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.nom"), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.quantite"), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.prix"), "html", null, true);
            echo "</th>
                </tr>
            </thread>
            <tbody>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["un_produit"]) {
                // line 29
                echo "                    <tr>
                        <td>
                            ";
                // line 31
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["un_produit"], "image", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["un_produit"], "image", [], "any", false, false, false, 32))), "html", null, true);
                    echo "\">
                            ";
                }
                // line 34
                echo "                        </td>
                        <td>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mon_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "qte", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "prix", [], "any", false, false, false, 41), "html", null, true);
                echo "€</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 47
            echo "        <p style=\"font-size: 20px; font-family: Tahoma\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.rien"), "html", null, true);
            echo "</p>
    ";
        }
        // line 49
        echo "
    <br/>
    <div style=\"background-color: darkgrey; height: 3px;\"></div>
    <br/>

    <h2 style=\"display:flex; justify-content:center; text-decoration: underline; font-family: Tahoma\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.add"), "html", null, true);
        echo "</h2>
    <br/>
    <div style=\"font-family: Tahoma\">
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_produit_new"]) || array_key_exists("form_produit_new", $context) ? $context["form_produit_new"] : (function () { throw new RuntimeError('Variable "form_produit_new" does not exist.', 57, $this->source); })()), 'form');
        echo "
    </div>

    <br/>
    <br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 57,  193 => 54,  186 => 49,  180 => 47,  175 => 44,  166 => 41,  162 => 40,  156 => 37,  152 => 36,  148 => 34,  142 => 32,  140 => 31,  136 => 29,  132 => 28,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  104 => 16,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits{% endblock %}

{% block body %}

    <br/>

    <h1 style=\"display:flex; justify-content:center; text-decoration: underline; font-family: Tahoma\">
        {{ 'produit.titre' |trans }}
    </h1>

    <br/>

    {% if produits is not empty %}
        <p style=\"font-size: 20px; font-family: Tahoma\">{{ 'produit.there_is' |trans({'nb' :produits|length}) }} :</p>
        <br/>
        <table class=\"table\" style=\"font-family: Tahoma;\">
            <thread>
                <tr>
                    <th>{{'produit.image'|trans}}</th>
                    <th>{{'produit.nom'|trans}}</th>
                    <th>{{'produit.quantite'|trans}}</th>
                    <th>{{'produit.prix'|trans}}</th>
                </tr>
            </thread>
            <tbody>
                {% for un_produit in produits %}
                    <tr>
                        <td>
                            {% if un_produit.image is not null %}
                                <img src=\"{{ asset('uploads/' ~ un_produit.image) }}\">
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('mon_produit', {'id': un_produit.id}) }}\">
                            {{ un_produit.nom }}
                            </a>
                        </td>
                        <td>{{ un_produit.qte }}</td>
                        <td>{{ un_produit.prix }}€</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p style=\"font-size: 20px; font-family: Tahoma\">{{'produit.rien' |trans}}</p>
    {% endif %}

    <br/>
    <div style=\"background-color: darkgrey; height: 3px;\"></div>
    <br/>

    <h2 style=\"display:flex; justify-content:center; text-decoration: underline; font-family: Tahoma\">{{ 'produit.add' |trans }}</h2>
    <br/>
    <div style=\"font-family: Tahoma\">
        {{ form(form_produit_new) }}
    </div>

    <br/>
    <br/>
{% endblock %}
", "produit/index.html.twig", "/Users/ridwan/Desktop/Symfony/ProjetFin/templates/produit/index.html.twig");
    }
}
