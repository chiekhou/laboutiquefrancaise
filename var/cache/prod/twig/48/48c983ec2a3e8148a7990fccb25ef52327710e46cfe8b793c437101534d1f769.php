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
class __TwigTemplate_c13e4c6a3b788cc26a173a96a5a830bdf7cb33cb00a5648dd4bda7a3ea056598 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Mes commandes - La Boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
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
        return array (  147 => 49,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  121 => 40,  117 => 38,  115 => 37,  112 => 36,  110 => 35,  107 => 34,  105 => 33,  100 => 31,  97 => 30,  93 => 29,  79 => 17,  72 => 12,  70 => 11,  65 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/account/order.html.twig");
    }
}
