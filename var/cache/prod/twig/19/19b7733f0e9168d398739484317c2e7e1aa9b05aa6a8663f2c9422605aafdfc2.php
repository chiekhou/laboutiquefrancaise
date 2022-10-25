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

/* reset_password/index.html.twig */
class __TwigTemplate_9d7fb9a455b25bc32d13ce7b8d424630907a7899e01ec7e7f59eef7f33bdf425 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mot de passe oublié - La Boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"block-small\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-info\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<form method=\"post\">

    <h1 class=\"h3 mb-3 font-weight-normal\"> Réinitialiser mon mot de passe</h1>
    <label for=\"inputEmail\">Votre email</label>
    <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Votre email\" autocomplete=\"email\" required autofocus>
   
    <button class=\"btn btn-lg btn-info btn-block mt-3\" type=\"submit\">
       Valider
    </button>
     <p class=\"text-center\"> Ou souhaitez-vous <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\"> vous connectez ? <a/></p>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "reset_password/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  74 => 10,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/index.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/reset_password/index.html.twig");
    }
}
