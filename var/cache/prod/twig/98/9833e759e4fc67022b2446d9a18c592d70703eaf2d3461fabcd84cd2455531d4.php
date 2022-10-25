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
class __TwigTemplate_b5705e35d388e2f9f12bbaf70eb496181ed7b35bee2715669c148d5bc9054eb5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Ma commande - La Boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 12) == 1)) {
            // line 13
            echo "                    Paiement accepté
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
($context["order"] ?? null), "state", [], "any", false, false, false, 14) == 2)) {
            // line 15
            echo "                    Préparation en cours
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 16
($context["order"] ?? null), "state", [], "any", false, false, false, 16) == 3)) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo " <br/>
    <strong>Référence de ma commande : </strong> <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 23), "html", null, true);
        echo " </small><br/>
    <strong>Transporteur choisi : </strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carriername", [], "any", false, false, false, 24), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 39));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 51) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong> Livraison :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprice", [], "any", false, false, false, 52) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
    <strong> Total : </strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 53) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 53)) / 100), 2, ",", "."), "html", null, true);
        echo " €
</div>
";
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
        return array (  160 => 53,  156 => 52,  152 => 51,  146 => 47,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  122 => 40,  118 => 39,  100 => 24,  96 => 23,  92 => 22,  87 => 19,  83 => 17,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  71 => 12,  64 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/account/order_show.html.twig");
    }
}
