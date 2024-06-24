<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_eff9f2a324b5794c8d9cdd132f891bc5 extends Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"auth-main v1\">
    <div class=\"auth-wrapper\">
        <div class=\"auth-form\">
            <div class=\"card my-5\">
                <div class=\"card-body\">
                    
                        <form method=\"post\">
                          
                           
                            <div class=\"text-center\">
                                <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/authentication/img-auth-login.png"), "html", null, true);
        yield "\" alt=\"images\" class=\"img-fluid mb-3\" />
                                    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            yield "</div>
                                    ";
        }
        // line 21
        yield "
                                    ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "                                        <div class=\"mb-3\">
                                            You are logged in as ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "userIdentifier", [], "any", false, false, false, 24), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                                        </div>
                                    ";
        }
        // line 27
        yield "
                                <h4 class=\"f-w-500 mb-1\">Connectez-vous</h4>
                                <p class=\"mb-3\">Vous n'avez pas de compte ? <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"link-primary ms-1\">Inscrivez-vous !</a></p>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"email\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" class=\"form-control\" id=\"username\" placeholder=\"Email\" required autofocus>
                            </div>
                            
                            <label for=\"password\">Password</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                            >

                            ";
        // line 52
        yield "                            <div class=\"d-grid mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  157 => 52,  151 => 39,  141 => 32,  135 => 29,  131 => 27,  123 => 24,  120 => 23,  118 => 22,  115 => 21,  109 => 19,  107 => 18,  103 => 17,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

<div class=\"auth-main v1\">
    <div class=\"auth-wrapper\">
        <div class=\"auth-form\">
            <div class=\"card my-5\">
                <div class=\"card-body\">
                    
                        <form method=\"post\">
                          
                           
                            <div class=\"text-center\">
                                <img src=\"{{ asset('images/authentication/img-auth-login.png') }}\" alt=\"images\" class=\"img-fluid mb-3\" />
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}

                                    {% if app.user %}
                                        <div class=\"mb-3\">
                                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                        </div>
                                    {% endif %}

                                <h4 class=\"f-w-500 mb-1\">Connectez-vous</h4>
                                <p class=\"mb-3\">Vous n'avez pas de compte ? <a href=\"{{path('app_register')}}\" class=\"link-primary ms-1\">Inscrivez-vous !</a></p>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" class=\"form-control\" id=\"username\" placeholder=\"Email\" required autofocus>
                            </div>
                            
                            <label for=\"password\">Password</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"{{ csrf_token('authenticate') }}\"
                            >

                            {#
                                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                                See https://symfony.com/doc/current/security/remember_me.html

                                <div class=\"checkbox mb-3\">
                                    <label>
                                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                    </label>
                                </div>
                            #}
                            <div class=\"d-grid mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\WELTINFO\\template_dashboard\\templates\\security\\login.html.twig");
    }
}
