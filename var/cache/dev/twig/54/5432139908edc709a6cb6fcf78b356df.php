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

/* operation/new.html.twig */
class __TwigTemplate_0225e4003260a33757e76f0a887c83cd extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "operation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "operation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "operation/new.html.twig", 1);
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

        yield "Employés - Creation";
        
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
        yield "    <h1>Nouveau employé</h1>

                            <div class=\"card\">
                                
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Opération <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Chef de projet 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "chefProjet", [], "any", false, false, false, 29), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Url
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "urlAcces", [], "any", false, false, false, 39), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Region
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "region", [], "any", false, false, false, 49), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Employé
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Statut
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>

                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 77, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                                                </div>
                                            </div>
                                        </div>
                                         ";
        // line 82
        yield "                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "
                                       
                                    </ul>
                                </div>
                            </div>

    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">Retourner à la liste</a>
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
        return "operation/new.html.twig";
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
        return array (  201 => 88,  191 => 82,  184 => 77,  173 => 69,  160 => 59,  147 => 49,  134 => 39,  121 => 29,  108 => 19,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employés - Creation{% endblock %}

{% block body %}
    <h1>Nouveau employé</h1>

                            <div class=\"card\">
                                
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    {{ form_start(form) }}
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Opération <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.nom) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Chef de projet 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.chefProjet) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Url
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.urlAcces) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Region
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.region) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Employé
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.user) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Statut
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.statut) }}
                                            </div>
                                            </div>
                                        </li>

                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">{{ button_label|default('Enregistrer') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                         {# <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button> #}
                                    {{ form_end(form) }}
                                       
                                    </ul>
                                </div>
                            </div>

    <a href=\"{{ path('app_user_index') }}\">Retourner à la liste</a>
{% endblock %}
", "operation/new.html.twig", "/Users/hantour/template_dashboard/templates/operation/new.html.twig");
    }
}
