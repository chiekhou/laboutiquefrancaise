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

/* security/login.html.twig */
class __TwigTemplate_5a37701d60f5136689d7ac8673241f38bce19cea89f259a926615efcc4d23ae8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se connecter - La Boutique Française ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"block-small\">
<form method=\"post\">
    ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "    <div class=\"alert alert-info\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 21
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Merci de vous connectez</h1>
    <label for=\"inputEmail\">Votre email</label>
    <input type=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Votre email\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Votre mot de passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Votre mot de passe\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

   
    <button class=\"btn btn-lg btn-info btn-block mt-3\" type=\"submit\">
        Se connecter
    </button>
  
     <p class=\"text-center\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        echo "\"> Mot de passe oublié <a/></p>
     <p class=\"text-center\"> Ou <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\"> créer un compte? <a/></p>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  124 => 35,  114 => 28,  107 => 24,  102 => 21,  94 => 18,  91 => 17,  89 => 16,  86 => 15,  77 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/laboutiquefrancaise/templates/security/login.html.twig");
    }
}
