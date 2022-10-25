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

/* account/order_show.html.twig */
class __TwigTemplate_764f296b10c6dc21d31661736a7045bc9208239447b3832cd17a4afdfdc3ba97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo " Ma commande - La Boutique Française ";
        
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
    <h1> Ma commande </h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\"> Retour </a>
    <hr>
    <strong> Statut de la commande : </strong>
     <td>
                ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 1)) {
            // line 13
            echo "                    Paiement accepté
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14) == 2)) {
            // line 15
            echo "                    Préparation en cours
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "state", [], "any", false, false, false, 16) == 3)) {
            // line 17
            echo "                    Livraison en cours
                ";
        }
        // line 19
        echo "
                </td>
                <br>
    <strong>Commande passée le : </strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo " <br/>
    <strong>Référence de ma commande : </strong> <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "reference", [], "any", false, false, false, 23), "html", null, true);
        echo " </small><br/>
    <strong>Transporteur choisi : </strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "carriername", [], "any", false, false, false, 24), "html", null, true);
        echo "
    <hr>
    <strong> Détails: </strong>

    <table class=\"table mt-4\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix Unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>

  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "orderDetails", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "    <tr>
      <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "html", null, true);
            echo " </td>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tbody>
</table>

 <div class=\"text-right\">
    <strong> Sous-total :</strong>";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "getTotal", [], "any", false, false, false, 51) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong> Livraison :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "carrierprice", [], "any", false, false, false, 52) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong> Total : </strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "carrierPrice", [], "any", false, false, false, 53) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "getTotal", [], "any", false, false, false, 53)) / 100), 2, ",", "."), "html", null, true);
        echo " €
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 53,  186 => 52,  182 => 51,  176 => 47,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  152 => 40,  148 => 39,  130 => 24,  126 => 23,  122 => 22,  117 => 19,  113 => 17,  111 => 16,  108 => 15,  106 => 14,  103 => 13,  101 => 12,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Ma commande - La Boutique Française {% endblock %}

{% block content %}
    <a href=\"{{ path('account_address_add') }}\" class=\"btn btn-info btn-sm float-right\"> Ajouter une adresse </a><br/>
    <h1> Ma commande </h1>
    <a href=\"{{ path('account_order')}}\"> Retour </a>
    <hr>
    <strong> Statut de la commande : </strong>
     <td>
                {% if order.state == 1 %}
                    Paiement accepté
                {% elseif order.state == 2 %}
                    Préparation en cours
                {% elseif order.state == 3 %}
                    Livraison en cours
                {% endif %}

                </td>
                <br>
    <strong>Commande passée le : </strong> {{ order.createdAt|date('d/m/Y')}} <br/>
    <strong>Référence de ma commande : </strong> <small> {{ order.reference}} </small><br/>
    <strong>Transporteur choisi : </strong> {{ order.carriername}}
    <hr>
    <strong> Détails: </strong>

    <table class=\"table mt-4\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix Unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>

  {% for product in order.orderDetails %}
    <tr>
      <td> {{ product.product }} </td>
      <td>{{ product.quantity }}</td>
      <td>{{ (product.price / 100)|number_format(2, ',','.') }} €</td>
      <td>{{ (product.total / 100)|number_format(2, ',','.') }} €</td>
    </tr>
    {% endfor %}
  </tbody>
</table>

 <div class=\"text-right\">
    <strong> Sous-total :</strong>{{ (order.getTotal / 100)|number_format(2, ',','.') }} €<br>
    <strong> Livraison :</strong> {{ (order.carrierprice / 100)|number_format(2, ',','.') }} €<br>
    <strong> Total : </strong> {{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2,',','.') }} €
</div>
{% endblock %}", "account/order_show.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/account/order_show.html.twig");
    }
}
