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

/* user/index.html.twig */
class __TwigTemplate_60c8f135b13c494cc1fa6b16c921b11b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Liste des employés";
        
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
        yield "    <h1>Liste des employés</h1>

    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf");
        yield "\" class=\"btn btn-primary\">Télécharger la liste en PDF</a>
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">Nouveau  employé</a>

    <div class=\"card-body\">
        <div class=\"dt-responsive\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher dans le tableau...\" class=\"form-control mb-3\">
            <table id=\"dom-jqry\" class=\"table table-striped table-bordered nowrap\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>DateBirth</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            yield "                    <tr>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 35
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 36
                yield "                            ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 37
                    yield "                                Utilisateur
                            ";
                } elseif ((                // line 38
$context["role"] == "ROLE_ANIMATEUR")) {
                    // line 39
                    yield "                                Animateur
                            ";
                } elseif ((                // line 40
$context["role"] == "ROLE_SUPERVISEUR")) {
                    // line 41
                    yield "                                Superviseur
                            ";
                } elseif ((                // line 42
$context["role"] == "ROLE_CHEF_PROJET")) {
                    // line 43
                    yield "                                Chef de projet
                            ";
                } elseif ((                // line 44
$context["role"] == "ROLE_ADMIN")) {
                    // line 45
                    yield "                                Administrateur
                            ";
                }
                // line 47
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                        </td>
                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                        <td>";
            // line 51
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateBirth", [], "any", false, false, false, 51)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateBirth", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "Phone", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "Address", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td>
                            <button class=\"btn avtar avtar-xs btn-light-success\"><a style=\"text-decoration: none;color:inherit;\" href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\"><i class=\"ti ti-eye\"></i></a></button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            yield "                    <tr>
                        <td colspan=\"13\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#search\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#dom-jqry tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
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
        return "user/index.html.twig";
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
        return array (  244 => 69,  234 => 68,  219 => 63,  210 => 59,  201 => 55,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  177 => 48,  171 => 47,  167 => 45,  165 => 44,  162 => 43,  160 => 42,  157 => 41,  155 => 40,  152 => 39,  150 => 38,  147 => 37,  144 => 36,  139 => 35,  134 => 32,  130 => 31,  127 => 30,  122 => 29,  99 => 9,  95 => 8,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des employés{% endblock %}

{% block body %}
    <h1>Liste des employés</h1>

    <a href=\"{{ path('generate_pdf') }}\" class=\"btn btn-primary\">Télécharger la liste en PDF</a>
    <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary\">Nouveau  employé</a>

    <div class=\"card-body\">
        <div class=\"dt-responsive\">
            <input type=\"text\" id=\"search\" placeholder=\"Rechercher dans le tableau...\" class=\"form-control mb-3\">
            <table id=\"dom-jqry\" class=\"table table-striped table-bordered nowrap\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>DateBirth</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            {# On boucle sur les rôles #}
                        {% for role in user.roles %}
                            {% if role == \"ROLE_USER\" %}
                                Utilisateur
                            {% elseif role == \"ROLE_ANIMATEUR\" %}
                                Animateur
                            {% elseif role == \"ROLE_SUPERVISEUR\" %}
                                Superviseur
                            {% elseif role == \"ROLE_CHEF_PROJET\" %}
                                Chef de projet
                            {% elseif role == \"ROLE_ADMIN\" %}
                                Administrateur
                            {% endif %}
                        {% endfor %}
                        </td>
                        <td>{{ user.firstName }}</td>
                        <td>{{ user.lastName }}</td>
                        <td>{{ user.dateBirth ? user.dateBirth|date('Y-m-d') : '' }}</td>
                        <td>{{ user.Phone }}</td>
                        <td>{{ user.Address }}</td>
                        <td>
                            <button class=\"btn avtar avtar-xs btn-light-success\"><a style=\"text-decoration: none;color:inherit;\" href=\"{{ path('app_user_show', {'id': user.id}) }}\"><i class=\"ti ti-eye\"></i></a></button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"13\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#search\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#dom-jqry tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
{% endblock %}", "user/index.html.twig", "/Users/hantour/template_dashboard/templates/user/index.html.twig");
    }
}
