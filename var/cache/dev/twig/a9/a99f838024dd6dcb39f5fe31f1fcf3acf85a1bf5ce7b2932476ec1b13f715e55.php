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

/* account/order.html.twig */
class __TwigTemplate_a340280a8216203823b90d8eb047c63809b1b1a3d53151d8bc507fc951981478 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo " Mes commandes - La Boutique Française ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\"> Ajouter une adresse </a><br/>
    <h1> Mes commandes </h1>
    C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.<br>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"> Retour </a>

    ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 11, $this->source); })())) == 0)) {
            // line 12
            echo "        <hr>
        <p class=\"text-center\">
        Vous n'avez pas encore passé de commande sur la Boutique Française.
        </p>
        ";
        } else {
            // line 17
            echo "            <table class=\"table mt-4\">
                <thead>
                    <tr>
                    <th scope=\"col\">Référence</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Passée le</th>
                    <th scope=\"col\">Produit(s)</th>
                    <th scope=\"col\">Total</th>
                    </tr>
                </thead>
                </tbody>
           
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 30
                echo "              <tr>
                <td><span class=\"badge badge-secondary\"> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 31), "html", null, true);
                echo " </span> </td>
                <td>
                ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 33) == 1)) {
                    // line 34
                    echo "                    Paiement accepté
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 35
$context["order"], "state", [], "any", false, false, false, 35) == 2)) {
                    // line 36
                    echo "                    Préparation en cours
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["order"], "state", [], "any", false, false, false, 37) == 3)) {
                    // line 38
                    echo "                    Livraison en cours
                ";
                }
                // line 40
                echo "
                </td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
                echo "</td>
                <td> ";
                // line 43
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 43)), "html", null, true);
                echo " </td>
                <td> ";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 44) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 44)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                <td class=\"text-right\"><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Voir ma commande </a></td>
             </tr>
              
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </tbody>
          </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  167 => 45,  163 => 44,  159 => 43,  155 => 42,  151 => 40,  147 => 38,  145 => 37,  142 => 36,  140 => 35,  137 => 34,  135 => 33,  130 => 31,  127 => 30,  123 => 29,  109 => 17,  102 => 12,  100 => 11,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Mes commandes - La Boutique Française {% endblock %}

{% block content %}
    <a href=\"{{ path('account_address_add') }}\" class=\"btn btn-info btn-sm float-right\"> Ajouter une adresse </a><br/>
    <h1> Mes commandes </h1>
    C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.<br>
    <a href=\"{{ path('account')}}\"> Retour </a>

    {% if orders|length == 0 %}
        <hr>
        <p class=\"text-center\">
        Vous n'avez pas encore passé de commande sur la Boutique Française.
        </p>
        {% else %}
            <table class=\"table mt-4\">
                <thead>
                    <tr>
                    <th scope=\"col\">Référence</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Passée le</th>
                    <th scope=\"col\">Produit(s)</th>
                    <th scope=\"col\">Total</th>
                    </tr>
                </thead>
                </tbody>
           
            {% for order in orders %}
              <tr>
                <td><span class=\"badge badge-secondary\"> {{ order.reference }} </span> </td>
                <td>
                {% if order.state == 1 %}
                    Paiement accepté
                {% elseif order.state == 2 %}
                    Préparation en cours
                {% elseif order.state == 3 %}
                    Livraison en cours
                {% endif %}

                </td>
                <td>{{ order.createdAt|date('d/m/Y')}}</td>
                <td> {{ order.orderDetails|length}} </td>
                <td> {{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2,',','.') }} €</td>
                <td class=\"text-right\"><a href=\"{{ path('account_order_show',{ 'reference' : order.reference })}}\">Voir ma commande </a></td>
             </tr>
              
            {% endfor %}
          </tbody>
          </table>
    {% endif %}
{% endblock %}", "account/order.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/account/order.html.twig");
    }
}
