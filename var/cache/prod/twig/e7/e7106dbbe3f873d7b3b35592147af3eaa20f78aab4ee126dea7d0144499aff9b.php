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

/* order/add.html.twig */
class __TwigTemplate_3f2fb6212a922c66cc5647f8d62c988f1293280552b3e9d2311a02e3bf4cbd39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Récapitulatif de votre commande- La Boutique Française";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <h2> Mon récapitulatif</h2>
    <p> Vérifiez vos informations avant de payer votre commande. </p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
    <strong>Mon adresse de livraison</strong><br>
        <div class=\"form-check mt-4\">
        ";
        // line 17
        echo ($context["delivery"] ?? null);
        echo "
        </div>

          <hr>

        <div class=\"form-check\">
            <strong>Mon transporteur</strong><br>
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</br>
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</br>
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 26) / 100), 2, ",", "."), "html", null, true);
        echo " €
        </div>
     
        </div>

         <div class=\"col-md-6\">
            <div class=\"text-center\"> 
             <b>Ma commande</b><br>
            </div>
           
            <div class=\"order-summary\">
                 ";
        // line 37
        $context["total"] = null;
        // line 38
        echo "                 ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 39
            echo "                <div class=\"row ";
            if (($context["key"] > 0)) {
                echo " mt-2 ";
            }
            echo " \">
                    <div class=\"col-2 my-auto\">
                        <img src=\"/uploads/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "illustration", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"img-fluid\" width=\"50\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo " </br>
                        <small> 
                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "subtitle", [], "any", false, false, false, 46), "html", null, true);
            echo " <br>
                           x ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo " 
                        </small>
                    </div>
                    <div class=\"col-2\">
                   ";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>
                </div>
                  ";
            // line 54
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
            // line 55
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
            <hr>
            <strong>Sous-Total : ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " €</strong> <br>
            <strong>Livraison : ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 59) / 100), 2, ",", "."), "html", null, true);
        echo " € </strong>
            <hr>
            <strong>Total : ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €  </strong>
             <a  class=\"btn btn-success btn-block\" id=\"checkout-button\">Payer | ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 62) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>

";
    }

    // line 68
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    <script type=\"text/javascript\">
           
           var stripe = Stripe('pk_test_51L5nbvKiccnN4QcxuB04T9szaUqD3PLTfSKTV9FHTrrZ9DGFlI9LYSzXohcv38csDGbimC9KZFuT7WBfxLQIQOAP00WijoU2XH');
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\",function () {
        
        // Call your backend to create the VerificationSession
        fetch(\"/commande/create-session/";
        // line 76
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {
            method: \"POST\",
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(session) {
            if(session.error == 'order'){
                //redirection
                window.location.replace('";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "')
            } else {
            return stripe.redirectToCheckout({sessionId: session.id});
                }
        })
        .then(function(result) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using `error.message`.
        if (result.error) {
            alert(result.error.message);
        }
        })
        .catch(function (error) {
            console.error(\"Error:\" , error);
            });
        });
        
    </script>
";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 85,  202 => 76,  193 => 69,  189 => 68,  180 => 62,  176 => 61,  171 => 59,  167 => 58,  163 => 56,  157 => 55,  155 => 54,  149 => 51,  142 => 47,  138 => 46,  133 => 44,  125 => 41,  117 => 39,  112 => 38,  110 => 37,  96 => 26,  92 => 25,  88 => 24,  78 => 17,  69 => 10,  65 => 9,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/order/add.html.twig");
    }
}
