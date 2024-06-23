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

/* activation/index.html.twig */
class __TwigTemplate_40c0f2c585152661b170a5d2e91944d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activation/index.html.twig", 1);
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

        yield "Activation index";
        
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
        yield "    <h1>Activation index</h1>

    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activation_new");
        yield "\" class=\"btn btn-primary\">Nouvelle activation</a>

    <div class=\"card-body\">
        <div class=\"dt-responsive\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher dans le tableau...\" class=\"form-control mb-3\">
            <table id=\"dom-jqry\" class=\"table table-striped table-bordered nowrap\">
                <thead>
                    <tr>
                         <th>Id</th>
                        <th>Objectif</th>
                        <th>Date</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activations"]) || array_key_exists("activations", $context) ? $context["activations"] : (function () { throw new RuntimeError('Variable "activations" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activation"]) {
            // line 24
            yield "                    <tr>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "objectif", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            ((CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "date", [], "any", false, false, false, 27)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "date", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                        <td>
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">show</a>
                            <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activation"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"><i class=\"ti ti-pencil\"></i></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                    <tr>
                        <td colspan=\"13\">Pas d'activation trouvée !</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </tbody>
            </table>
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
        return "activation/index.html.twig";
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
        return array (  155 => 38,  146 => 34,  137 => 30,  133 => 29,  128 => 27,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activation index{% endblock %}

{% block body %}
    <h1>Activation index</h1>

    <a href=\"{{ path('app_activation_new') }}\" class=\"btn btn-primary\">Nouvelle activation</a>

    <div class=\"card-body\">
        <div class=\"dt-responsive\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher dans le tableau...\" class=\"form-control mb-3\">
            <table id=\"dom-jqry\" class=\"table table-striped table-bordered nowrap\">
                <thead>
                    <tr>
                         <th>Id</th>
                        <th>Objectif</th>
                        <th>Date</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for activation in activations %}
                    <tr>
                        <td>{{ activation.id }}</td>
                        <td>{{ activation.objectif }}</td>
                        <td>{{ activation.date ? activation.date|date('Y-m-d H:i:s') : '' }}</td>
                        <td>
                            <a href=\"{{ path('app_activation_show', {'id': activation.id}) }}\">show</a>
                            <a href=\"{{ path('app_activation_edit', {'id': activation.id}) }}\"><i class=\"ti ti-pencil\"></i></a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"13\">Pas d'activation trouvée !</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}
", "activation/index.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/activation/index.html.twig");
    }
}
