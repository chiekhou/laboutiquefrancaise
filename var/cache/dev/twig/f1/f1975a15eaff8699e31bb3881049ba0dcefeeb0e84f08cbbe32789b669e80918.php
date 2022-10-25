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
class __TwigTemplate_d461eca97dd71f50e3a9f8a80e818ef2617c68a16bcc83a32a9a59b0bca21f0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Récapitulatif de votre commande- La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "
        </div>

          <hr>

        <div class=\"form-check\">
            <strong>Mon transporteur</strong><br>
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</br>
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</br>
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26) / 100), 2, ",", "."), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 38, $this->source); })()));
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
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €</strong> <br>
            <strong>Livraison : ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59) / 100), 2, ",", "."), "html", null, true);
        echo " € </strong>
            <hr>
            <strong>Total : ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €  </strong>
             <a  class=\"btn btn-success btn-block\" id=\"checkout-button\">Payer | ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 69
        echo "    <script type=\"text/javascript\">
           
           var stripe = Stripe('pk_test_51L5nbvKiccnN4QcxuB04T9szaUqD3PLTfSKTV9FHTrrZ9DGFlI9LYSzXohcv38csDGbimC9KZFuT7WBfxLQIQOAP00WijoU2XH');
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\",function () {
        
        // Call your backend to create the VerificationSession
        fetch(\"/commande/create-session/";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 76, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  268 => 85,  256 => 76,  247 => 69,  237 => 68,  222 => 62,  218 => 61,  213 => 59,  209 => 58,  205 => 56,  199 => 55,  197 => 54,  191 => 51,  184 => 47,  180 => 46,  175 => 44,  167 => 41,  159 => 39,  154 => 38,  152 => 37,  138 => 26,  134 => 25,  130 => 24,  120 => 17,  111 => 10,  101 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Récapitulatif de votre commande- La Boutique Française{% endblock %}

{% block content %}
    <h2> Mon récapitulatif</h2>
    <p> Vérifiez vos informations avant de payer votre commande. </p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
    <strong>Mon adresse de livraison</strong><br>
        <div class=\"form-check mt-4\">
        {{ delivery|raw }}
        </div>

          <hr>

        <div class=\"form-check\">
            <strong>Mon transporteur</strong><br>
            {{ carrier.name}}</br>
            {{ carrier.description}}</br>
            {{ (carrier.price / 100)|number_format(2, ',', '.') }} €
        </div>
     
        </div>

         <div class=\"col-md-6\">
            <div class=\"text-center\"> 
             <b>Ma commande</b><br>
            </div>
           
            <div class=\"order-summary\">
                 {% set total = null %}
                 {% for key,product in cart %}
                <div class=\"row {% if key > 0 %} mt-2 {% endif %} \">
                    <div class=\"col-2 my-auto\">
                        <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" class=\"img-fluid\" width=\"50\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        {{ product.product.name }} </br>
                        <small> 
                        {{ product.product.subtitle}} <br>
                           x {{ product.quantity}} 
                        </small>
                    </div>
                    <div class=\"col-2\">
                   {{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €
                    </div>
                </div>
                  {% set total = total + (product.product.price * product.quantity) %}
            {% endfor %}
            </div>
            <hr>
            <strong>Sous-Total : {{ (total / 100)|number_format(2, ',', '.') }} €</strong> <br>
            <strong>Livraison : {{ (carrier.price / 100)|number_format(2, ',', '.') }} € </strong>
            <hr>
            <strong>Total : {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €  </strong>
             <a  class=\"btn btn-success btn-block\" id=\"checkout-button\">Payer | {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €</a>
        </div>
    </div>

{% endblock %}

{% block script %}
    <script type=\"text/javascript\">
           
           var stripe = Stripe('pk_test_51L5nbvKiccnN4QcxuB04T9szaUqD3PLTfSKTV9FHTrrZ9DGFlI9LYSzXohcv38csDGbimC9KZFuT7WBfxLQIQOAP00WijoU2XH');
            var checkoutButton = document.getElementById(\"checkout-button\");
            checkoutButton.addEventListener(\"click\",function () {
        
        // Call your backend to create the VerificationSession
        fetch(\"/commande/create-session/{{ reference }}\", {
            method: \"POST\",
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(session) {
            if(session.error == 'order'){
                //redirection
                window.location.replace('{{ path('order') }}')
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
{% endblock %}
", "order/add.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/order/add.html.twig");
    }
}
