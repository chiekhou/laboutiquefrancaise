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

/* order/index.html.twig */
class __TwigTemplate_267bfa818e5cb5e5b393548e4c4070bebdcd1a697ee28e6cec4dc51908715548 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2> Je passe ma commande </h2>
    <p> Choisissez vos préférences avant de passer votre commande sur la Boutique Française. </p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
                     ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 13), 'label', ["label" => "Choisissez votre adresse de livraison"]);
        echo "
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\" > Ajouter une nouvelle adresse</a>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "                ";
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br>"]);
        echo "
          
        </div>

         <div class=\"col-md-6\">
            <div class=\"text-center\"> 
             <b> Récapitulatif de ma commande</b><br>
             <p>Retrouvez le récapitulatif de vos produits.</p>
            </div>
           
            <div class=\"order-summary\">
                 ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 29
            echo "                <div class=\"row ";
            if (($context["key"] > 0)) {
                echo " mt-2 ";
            }
            echo " \">
                    <div class=\"col-2 my-auto\">
                        <img src=\"/uploads/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "illustration", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"img-fluid\" width=\"50\">
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo " </br>
                        <small> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "subtitle", [], "any", false, false, false, 35), "html", null, true);
            echo " </small>
                    </div>
                    <div class=\"col-2\">
                      x ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
             
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  130 => 38,  124 => 35,  120 => 34,  112 => 31,  104 => 29,  100 => 28,  85 => 17,  80 => 15,  76 => 14,  72 => 13,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/order/index.html.twig");
    }
}
