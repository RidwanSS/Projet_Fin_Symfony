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

/* panier/index.html.twig */
class __TwigTemplate_b5489615daaa95ebca1e017154c870bf134a71fd0e9fe3b1e37ced94262c70bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pan.panier"), "html", null, true);
        echo "
    </h1>

    ";
        // line 13
        if ( !twig_test_empty((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        <br/>
        <p style=\"font-size: 20px; font-family: Tahoma\" >";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pan.there_is", ["nb" => twig_length_filter($this->env, (isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 15, $this->source); })()))]), "html", null, true);
            echo " :</p>
        <br/>
        <table class=\"table\" style=\"font-family: Tahoma\">
            <thead>
                <tr>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.nom"), "html", null, true);
            echo "</th>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.quantite02"), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.prix"), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.action"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 28
                echo "                    <tr>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "qte01", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 32
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 32), "prix", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, $context["panier"], "qte01", [], "any", false, false, false, 32)), "html", null, true);
                echo "€
                        </td>
                        <td>
                            <!--
                            ";
                // line 36
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panier"], "etat", [], "any", false, false, false, 36), false)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_etat", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\">Acheter</a>
                                ";
                } else {
                    // line 39
                    echo "                                <p> Produit acheté </p>
\t\t\t\t\t\t    ";
                }
                // line 41
                echo "\t\t\t\t\t\t    <br>                            
                                                    ******* Bouton pour acheter le produit ********* 
                            -->
                            <button  style=\"background-color:red ; border-radius:5px; height: 38px;\" onmouseover=\"this.style.background='brown';this.style.color='white';\" onmouseout=\"this.style.background='red';this.style.color='white';\">
                                <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" style=\"color:white; text-decoration:none;\"  >
                                    ";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("produit.delete"), "html", null, true);
                echo "
                                </a>
                            </button>
                            
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </tbody>
        </table>

        ";
            // line 56
            $context["total_paniers"] = 0;
            // line 57
            echo "
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 59
                echo "            ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panier"], "etat", [], "any", false, false, false, 59), false)) {
                    // line 60
                    echo "                ";
                    $context["total_paniers"] = ((isset($context["total_paniers"]) || array_key_exists("total_paniers", $context) ? $context["total_paniers"] : (function () { throw new RuntimeError('Variable "total_paniers" does not exist.', 60, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 60), "prix", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["panier"], "qte01", [], "any", false, false, false, 60)));
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
        <br/>

        <p style=\"font-size:20px; font-family: Tahoma\">";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pan.montant"), "html", null, true);
            echo " : <strong>";
            echo twig_escape_filter($this->env, (isset($context["total_paniers"]) || array_key_exists("total_paniers", $context) ? $context["total_paniers"] : (function () { throw new RuntimeError('Variable "total_paniers" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "€</strong></p>

    ";
        } else {
            // line 68
            echo " 
        <br/>
        <p style=\"font-size:20px; font-family: Tahoma\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pan.rien"), "html", null, true);
            echo "</p>
    ";
        }
        // line 71
        echo " 

    <br/>
    <br/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 71,  236 => 70,  232 => 68,  224 => 66,  219 => 63,  213 => 62,  210 => 61,  207 => 60,  204 => 59,  200 => 58,  197 => 57,  195 => 56,  190 => 53,  177 => 46,  173 => 45,  167 => 41,  163 => 39,  157 => 37,  155 => 36,  148 => 32,  143 => 30,  139 => 29,  136 => 28,  132 => 27,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  105 => 15,  102 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <br/>

    <h1 style=\"display:flex; justify-content:center; text-decoration: underline; font-family: Tahoma\">
        {{'pan.panier'|trans}}
    </h1>

    {% if paniers is not empty %}
        <br/>
        <p style=\"font-size: 20px; font-family: Tahoma\" >{{ 'pan.there_is' |trans({'nb' :paniers|length}) }} :</p>
        <br/>
        <table class=\"table\" style=\"font-family: Tahoma\">
            <thead>
                <tr>
                    <th>{{'produit.nom'|trans}}</th>
                    <th>{{'produit.quantite02'|trans}}</th>
                    <th>{{'produit.prix'|trans}}</th>
                    <th>{{'produit.action'|trans}}</th>
                </tr>
            </thead>
            <tbody>
                {% for panier in paniers %}
                    <tr>
                        <td>{{panier.produit.nom}}</td>
                        <td>{{panier.qte01}}</td>
                        <td>
                            {{panier.produit.prix * panier.qte01}}€
                        </td>
                        <td>
                            <!--
                            {% if panier.etat == false %}
\t\t\t\t\t\t\t    <a href=\"{{path('panier_etat', {'id':panier.id})}}\">Acheter</a>
                                {% else %}
                                <p> Produit acheté </p>
\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t    <br>                            
                                                    ******* Bouton pour acheter le produit ********* 
                            -->
                            <button  style=\"background-color:red ; border-radius:5px; height: 38px;\" onmouseover=\"this.style.background='brown';this.style.color='white';\" onmouseout=\"this.style.background='red';this.style.color='white';\">
                                <a href=\"{{ path('delete_panier', {'id': panier.id}) }}\" style=\"color:white; text-decoration:none;\"  >
                                    {{'produit.delete' |trans}}
                                </a>
                            </button>
                            
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        {% set total_paniers = 0 %}

        {% for panier in paniers %}
            {% if panier.etat == false %}
                {% set total_paniers = total_paniers + (panier.produit.prix * panier.qte01) %}
            {% endif %}
        {% endfor %}

        <br/>

        <p style=\"font-size:20px; font-family: Tahoma\">{{'pan.montant'|trans}} : <strong>{{ total_paniers }}€</strong></p>

    {% else %} 
        <br/>
        <p style=\"font-size:20px; font-family: Tahoma\">{{'pan.rien'|trans}}</p>
    {% endif %} 

    <br/>
    <br/>
{% endblock %}", "panier/index.html.twig", "/Users/ridwan/Desktop/Symfony/ProjetFin/templates/panier/index.html.twig");
    }
}
