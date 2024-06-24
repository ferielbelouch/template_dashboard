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

/* profile/index.html.twig */
class __TwigTemplate_ce4cf6536920927195861209d5a5f96f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        yield "Profile";
        
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
        yield "    <div class=\"col-sm-12\">
        <div class=\"row\">
                <div class=\"col-lg-5 col-xxl-3\">
                    <div class=\"card overflow-hidden\">
                        <div class=\"card-body position-relative\">
                            <div class=\"text-center mt-3\">
                                <div class=\"chat-avtar d-inline-flex mx-auto\">
                                    <img class=\"rounded-circle img-fluid wid-90 img-thumbnail\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"User image\" />
                                </div>
                                <h5 class=\"mb-5\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
        yield "</h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">86</h5>
                                        <small class=\"text-muted\">Opéraions</small>
                                    </div>
                                    <div class=\"col-4 border border-top-0 border-bottom-0\">
                                        <h5 class=\"mb-0\">5</h5>
                                        <small class=\"text-muted\">Objectifs</small>
                                    </div>
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">4</h5>
                                        <small class=\"text-muted\">Activations</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"nav flex-column nav-pills list-group list-group-flush account-pills mb-0\"
                            id=\"user-set-tab\"
                            role=\"tablist\"
                            aria-orientation=\"vertical\">
                            <a class=\"nav-link list-group-item list-group-item-action active\" id=\"user-set-profile-tab\" data-bs-toggle=\"pill\" href=\"#user-set-profile\" role=\"tab\" aria-controls=\"user-set-profile\" aria-selected=\"true\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-user-circle m-r-10\"></i>Informations générales</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-information-tab\" data-bs-toggle=\"pill\" href=\"#user-set-information\" role=\"tab\" aria-controls=\"user-set-information\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-clipboard-text m-r-10\"></i>Documents personnelles</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-account-tab\" data-bs-toggle=\"pill\" href=\"#user-set-account\" role=\"tab\" aria-controls=\"user-set-account\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-notebook m-r-10\"></i>Documents contractuels</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-edit-info-tab\" data-bs-toggle=\"pill\" href=\"#user-set-edit-info\" role=\"tab\" aria-controls=\"user-set-edit-info\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modification information</span>
                            </a>
                            ";
        // line 51
        yield "                        </div>
                        </div>
                    </div>
                <div class=\"col-lg-7 col-xxl-9\">
                    <div class=\"tab-content\" id=\"user-set-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"user-set-profile\" role=\"tabpanel\" aria-labelledby=\"user-set-profile-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Informations personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item px-0 pt-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Nom </p>
                                            <p class=\"mb-0\">
                                            ";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "lastName", [], "any", false, false, false, 68)) {
            // line 69
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69), "html", null, true);
            yield "
                                            ";
        } else {
            // line 71
            yield "                                                Non renseigné
                                            ";
        }
        // line 73
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "firstName", [], "any", false, false, false, 78)) {
            // line 79
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "firstName", [], "any", false, false, false, 79), "html", null, true);
            yield "
                                            ";
        } else {
            // line 81
            yield "                                                Non renseigné
                                            ";
        }
        // line 83
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Date de naissance</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "dateBirth", [], "any", false, false, false, 92)) {
            // line 93
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "dateBirth", [], "any", false, false, false, 93), "html", null, true);
            yield "
                                            ";
        } else {
            // line 95
            yield "                                                Non renseigné
                                            ";
        }
        // line 97
        yield "                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "Phone", [], "any", false, false, false, 103)) {
            // line 104
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "Phone", [], "any", false, false, false, 104), "html", null, true);
            yield "
                                            ";
        } else {
            // line 106
            yield "                                                Non renseigné
                                            ";
        }
        // line 108
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "email", [], "any", false, false, false, 116), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "Address", [], "any", false, false, false, 121)) {
            // line 122
            yield "                                                 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "Address", [], "any", false, false, false, 122), "html", null, true);
            yield "
                                            ";
        } else {
            // line 124
            yield "                                                Non renseigné
                                            ";
        }
        // line 126
        yield "                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Coordonnées personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item px-0 pt-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email personnelle </p>
                                            <p class=\"mb-0\">
                                            ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "email", [], "any", false, false, false, 143)) {
            // line 144
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "email", [], "any", false, false, false, 144), "html", null, true);
            yield "
                                            ";
        } else {
            // line 146
            yield "                                                Non renseigné
                                            ";
        }
        // line 148
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "Phone", [], "any", false, false, false, 153)) {
            // line 154
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "Phone", [], "any", false, false, false, 154), "html", null, true);
            yield "
                                            ";
        } else {
            // line 156
            yield "                                                Non renseigné
                                            ";
        }
        // line 158
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "Phone", [], "any", false, false, false, 167)) {
            // line 168
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "Phone", [], "any", false, false, false, 168), "html", null, true);
            yield "
                                            ";
        } else {
            // line 170
            yield "                                                Non renseigné
                                            ";
        }
        // line 172
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Coordonnées professionnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0 pt-0\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <p class=\"mb-1 text-muted\">Email professionnelle </p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 191
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191), "email", [], "any", false, false, false, 191)) {
            // line 192
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "email", [], "any", false, false, false, 192), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 194
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 196
        yield "                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "Phone", [], "any", false, false, false, 201)) {
            // line 202
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202), "Phone", [], "any", false, false, false, 202), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 204
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 206
        yield "                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-information\" role=\"tabpanel\" aria-labelledby=\"user-set-information-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Documents personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Pièce d'identité</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-facebook\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Passeport </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-danger\">Télécharger</button>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-linkedin\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Sécurité sociale</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">Télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-account\" role=\"tabpanel\" aria-labelledby=\"user-set-account-tab\">
                            ";
        // line 275
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), 'widget');
        yield "
                                <button class=\"btn\">Upload</button>
                            ";
        // line 278
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), 'form_end');
        yield "
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 284
        if ((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 284, $this->source); })())) {
            // line 285
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 285, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 286
                yield "                                    <div class=\"d-flex align-items-center mb-2\">
                                    
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">
                                                        <a href=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 297))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 297), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 297), "html", null, true);
                yield ")</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary avtar avtar-xs\"> <a href=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 303))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            yield "                                    ";
        }
        // line 309
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 316
        if ((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 316, $this->source); })())) {
            // line 317
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 317, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 318
                yield "                                        <div class=\"d-flex align-items-center mb-2\">
                                            <div class=\"flex-grow-1 me-3\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avtar avtar-xs btn-light-twitter\">
                                                            <i class=\"fas fa-file-alt f-16\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1 ms-3\">
                                                        <a href=\"";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 327))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 327), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 327), "html", null, true);
                yield ")</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 332))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            yield "                                    ";
        }
        // line 337
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 344
        if ((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 344, $this->source); })())) {
            // line 345
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 345, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 346
                yield "                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <a href=\"";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 355))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 355), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 355), "html", null, true);
                yield ")</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                           <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 360
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 360))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            yield "                                ";
        }
        // line 365
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-edit-info\" role=\"tabpanel\" aria-labelledby=\"user-set-edit-info-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Modifier les informations</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    ";
        // line 375
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 375, $this->source); })()), 'form_start');
        yield "
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 382, $this->source); })()), "email", [], "any", false, false, false, 382), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Mot de passe <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 392, $this->source); })()), "password", [], "any", false, false, false, 392), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Prénom 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 402, $this->source); })()), "firstName", [], "any", false, false, false, 402), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Nom
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 412, $this->source); })()), "lastName", [], "any", false, false, false, 412), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>

                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Date de naissance 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 423
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 423, $this->source); })()), "dateBirth", [], "any", false, false, false, 423), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Numéro de téléphone  
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 433
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 433, $this->source); })()), "Phone", [], "any", false, false, false, 433), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Adresse 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 443
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 443, $this->source); })()), "Address", [], "any", false, false, false, 443), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 450, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                                                </div>
                                            </div>
                                        </div>
                                         ";
        // line 455
        yield "                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 455, $this->source); })()), 'form_end');
        yield "
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ";
        // line 509
        yield "                    </div>
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
        return "profile/index.html.twig";
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
        return array (  756 => 509,  746 => 455,  739 => 450,  729 => 443,  716 => 433,  703 => 423,  689 => 412,  676 => 402,  663 => 392,  650 => 382,  640 => 375,  628 => 365,  625 => 364,  615 => 360,  603 => 355,  592 => 346,  587 => 345,  585 => 344,  576 => 337,  573 => 336,  563 => 332,  551 => 327,  540 => 318,  535 => 317,  533 => 316,  524 => 309,  521 => 308,  510 => 303,  497 => 297,  484 => 286,  479 => 285,  477 => 284,  468 => 278,  463 => 276,  459 => 275,  388 => 206,  384 => 204,  378 => 202,  376 => 201,  369 => 196,  365 => 194,  359 => 192,  357 => 191,  336 => 172,  332 => 170,  326 => 168,  324 => 167,  313 => 158,  309 => 156,  303 => 154,  301 => 153,  294 => 148,  290 => 146,  284 => 144,  282 => 143,  263 => 126,  259 => 124,  253 => 122,  251 => 121,  243 => 116,  233 => 108,  229 => 106,  223 => 104,  221 => 103,  213 => 97,  209 => 95,  203 => 93,  201 => 92,  190 => 83,  186 => 81,  180 => 79,  178 => 78,  171 => 73,  167 => 71,  161 => 69,  159 => 68,  140 => 51,  104 => 15,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
    <div class=\"col-sm-12\">
        <div class=\"row\">
                <div class=\"col-lg-5 col-xxl-3\">
                    <div class=\"card overflow-hidden\">
                        <div class=\"card-body position-relative\">
                            <div class=\"text-center mt-3\">
                                <div class=\"chat-avtar d-inline-flex mx-auto\">
                                    <img class=\"rounded-circle img-fluid wid-90 img-thumbnail\" src=\"{{ asset('images/user/avatar-1.jpg')}}\" alt=\"User image\" />
                                </div>
                                <h5 class=\"mb-5\">{{app.user.email}}</h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">86</h5>
                                        <small class=\"text-muted\">Opéraions</small>
                                    </div>
                                    <div class=\"col-4 border border-top-0 border-bottom-0\">
                                        <h5 class=\"mb-0\">5</h5>
                                        <small class=\"text-muted\">Objectifs</small>
                                    </div>
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">4</h5>
                                        <small class=\"text-muted\">Activations</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"nav flex-column nav-pills list-group list-group-flush account-pills mb-0\"
                            id=\"user-set-tab\"
                            role=\"tablist\"
                            aria-orientation=\"vertical\">
                            <a class=\"nav-link list-group-item list-group-item-action active\" id=\"user-set-profile-tab\" data-bs-toggle=\"pill\" href=\"#user-set-profile\" role=\"tab\" aria-controls=\"user-set-profile\" aria-selected=\"true\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-user-circle m-r-10\"></i>Informations générales</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-information-tab\" data-bs-toggle=\"pill\" href=\"#user-set-information\" role=\"tab\" aria-controls=\"user-set-information\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-clipboard-text m-r-10\"></i>Documents personnelles</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-account-tab\" data-bs-toggle=\"pill\" href=\"#user-set-account\" role=\"tab\" aria-controls=\"user-set-account\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-notebook m-r-10\"></i>Documents contractuels</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-edit-info-tab\" data-bs-toggle=\"pill\" href=\"#user-set-edit-info\" role=\"tab\" aria-controls=\"user-set-edit-info\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modification information</span>
                            </a>
                            {# <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-passwort-tab\" data-bs-toggle=\"pill\" href=\"#user-set-passwort\" role=\"tab\" aria-controls=\"user-set-passwort\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-key m-r-10\"></i>Modification mot de passe</span>
                            </a> #}
                        </div>
                        </div>
                    </div>
                <div class=\"col-lg-7 col-xxl-9\">
                    <div class=\"tab-content\" id=\"user-set-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"user-set-profile\" role=\"tabpanel\" aria-labelledby=\"user-set-profile-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Informations personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item px-0 pt-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Nom </p>
                                            <p class=\"mb-0\">
                                            {% if app.user.lastName %}
                                                {{app.user.lastName}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            {% if app.user.firstName %}
                                                {{ app.user.firstName }}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Date de naissance</p>
                                            <p class=\"mb-0\">
                                            {% if app.user.dateBirth %}
                                                {{ app.user.dateBirth }}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            {% if app.user.Phone %}
                                                {{app.user.Phone}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">{{app.user.email}}</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        {% if app.user.Address %}
                                                 {{app.user.Address}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Coordonnées personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item px-0 pt-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email personnelle </p>
                                            <p class=\"mb-0\">
                                            {% if app.user.email %}
                                                {{app.user.email}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            {% if app.user.Phone %}
                                                {{ app.user.Phone }}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            {% if app.user.Phone %}
                                                {{app.user.Phone}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Coordonnées professionnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0 pt-0\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <p class=\"mb-1 text-muted\">Email professionnelle </p>
                                                    <p class=\"mb-0\">
                                                    {% if app.user.email %}
                                                        {{app.user.email}}
                                                    {% else %}
                                                        Non renseigné
                                                    {% endif %}
                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    {% if app.user.Phone %}
                                                        {{app.user.Phone}}
                                                    {% else %}
                                                        Non renseigné
                                                    {% endif %}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-information\" role=\"tabpanel\" aria-labelledby=\"user-set-information-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Documents personnelles</h5>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Pièce d'identité</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-facebook\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Passeport </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-danger\">Télécharger</button>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-linkedin\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">Sécurité sociale</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">Télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-account\" role=\"tabpanel\" aria-labelledby=\"user-set-account-tab\">
                            {{ form_start(form) }}
                                {{ form_widget(form) }}
                                <button class=\"btn\">Upload</button>
                            {{ form_end(form) }}
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
                                </div>
                                <div class=\"card-body\">
                                {% if embauchedocs %}
                                    {% for document in embauchedocs %}
                                    <div class=\"d-flex align-items-center mb-2\">
                                    
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"mb-0\">
                                                        <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\">{{ document.name }} ({{ document.category }})</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary avtar avtar-xs\"> <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    
                                    </div>
                                    {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
                                </div>
                                <div class=\"card-body\">
                                    {% if contratdocs %}
                                    {% for document in contratdocs %}
                                        <div class=\"d-flex align-items-center mb-2\">
                                            <div class=\"flex-grow-1 me-3\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avtar avtar-xs btn-light-twitter\">
                                                            <i class=\"fas fa-file-alt f-16\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1 ms-3\">
                                                        <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\">{{ document.name }} ({{ document.category }})</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <button class=\"btn btn-link-primary\"> <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                            </div>
                                        </div>
                                    {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
                                </div>
                                <div class=\"card-body\">
                                {% if paiedocs %}
                                {% for document in paiedocs %}
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <div class=\"flex-grow-1 me-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-shrink-0\">
                                                    <div class=\"avtar avtar-xs btn-light-twitter\">
                                                        <i class=\"fas fa-file-alt f-16\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\">{{ document.name }} ({{ document.category }})</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                           <button class=\"btn btn-link-primary\"> <a href=\"{{ asset('uploads/documents/' ~ document.fileName) }}\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    </div>
                                {% endfor %}
                                {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-edit-info\" role=\"tabpanel\" aria-labelledby=\"user-set-edit-info-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Modifier les informations</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    {{ form_start(forms) }}
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.email) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Mot de passe <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.password) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Prénom 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.firstName) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Nom
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.lastName) }}
                                            </div>
                                            </div>
                                        </li>

                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Date de naissance 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.dateBirth) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Numéro de téléphone  
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.Phone) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Adresse 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(forms.Address) }}
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
                                    {{ form_end(forms) }}
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {# <div class=\"tab-pane fade\" id=\"user-set-passwort\" role=\"tabpanel\" aria-labelledby=\"user-set-passwort-tab\">
                            <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Change Password</h5>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item pt-0 px-0\">
                                    <div class=\"row mb-0\">
                                    <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                        >Current Password <span class=\"text-danger\">*</span>
                                    </label>
                                    <div class=\"col-md-8 col-sm-12\">
                                        <input type=\"password\" class=\"form-control\" />
                                        <div class=\"form-text\"> Forgot password? <a href=\"#\" class=\"link-primary\">Click here</a> </div>
                                    </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item px-0\">
                                    <div class=\"row mb-0\">
                                    <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                        >New Password <span class=\"text-danger\">*</span></label
                                    >
                                    <div class=\"col-md-8 col-sm-12\">
                                        <input type=\"password\" class=\"form-control\" />
                                    </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item pb-0 px-0\">
                                    <div class=\"row mb-0\">
                                    <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                        >Confirm Password <span class=\"text-danger\">*</span></label
                                    >
                                    <div class=\"col-md-8 col-sm-12\">
                                        <input type=\"password\" class=\"form-control\" />
                                    </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-body text-end\">
                                <div class=\"btn btn-outline-secondary me-2\">Cancel</div>
                                <div class=\"btn btn-primary\">Change Password</div>
                            </div>
                            </div>
                        </div> #}
                    </div>
                </div>
        </div>
    </div>
{% endblock %}
", "profile/index.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/profile/index.html.twig");
    }
}
