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
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"User image\" />
                                  
                                     
                                    <i class=\"chat-badge bg-success me-2 mb-2\"></i>
                                </div>
                                <h5 class=\"mb-5\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        yield "</h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">86</h5>
                                        <small class=\"text-muted\">Opéraions</small>
                                    </div>
                                    <div class=\"col-4 border border-top-0 border-bottom-0\">
                                        <h5 class=\"mb-0\">5</h5>
                                        <small class=\"text-muted\">Opérations</small>
                                    </div>
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">4</h5>
                                        <small class=\"text-muted\">Activation</small>
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
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-passwort-tab\" data-bs-toggle=\"pill\" href=\"#user-set-passwort\" role=\"tab\" aria-controls=\"user-set-passwort\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-key m-r-10\"></i>Paramètres</span>
                            </a>
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
                                            ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69)) {
            // line 70
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "lastName", [], "any", false, false, false, 70), "html", null, true);
            yield "
                                            ";
        } else {
            // line 72
            yield "                                                Non renseigné
                                            ";
        }
        // line 74
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "firstName", [], "any", false, false, false, 79)) {
            // line 80
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "firstName", [], "any", false, false, false, 80), "html", null, true);
            yield "
                                            ";
        } else {
            // line 82
            yield "                                                Non renseigné
                                            ";
        }
        // line 84
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
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "dateBirth", [], "any", false, false, false, 93)) {
            // line 94
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "dateBirth", [], "any", false, false, false, 94), "html", null, true);
            yield "
                                            ";
        } else {
            // line 96
            yield "                                                Non renseigné
                                            ";
        }
        // line 98
        yield "                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "Phone", [], "any", false, false, false, 104)) {
            // line 105
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "Phone", [], "any", false, false, false, 105), "html", null, true);
            yield "
                                            ";
        } else {
            // line 107
            yield "                                                Non renseigné
                                            ";
        }
        // line 109
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "email", [], "any", false, false, false, 117), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "Address", [], "any", false, false, false, 122)) {
            // line 123
            yield "                                                 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "Address", [], "any", false, false, false, 123), "html", null, true);
            yield "
                                            ";
        } else {
            // line 125
            yield "                                                Non renseigné
                                            ";
        }
        // line 127
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
        // line 144
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "email", [], "any", false, false, false, 144)) {
            // line 145
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "email", [], "any", false, false, false, 145), "html", null, true);
            yield "
                                            ";
        } else {
            // line 147
            yield "                                                Non renseigné
                                            ";
        }
        // line 149
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 154
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "Phone", [], "any", false, false, false, 154)) {
            // line 155
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "Phone", [], "any", false, false, false, 155), "html", null, true);
            yield "
                                            ";
        } else {
            // line 157
            yield "                                                Non renseigné
                                            ";
        }
        // line 159
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
        // line 168
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "Phone", [], "any", false, false, false, 168)) {
            // line 169
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "Phone", [], "any", false, false, false, 169), "html", null, true);
            yield "
                                            ";
        } else {
            // line 171
            yield "                                                Non renseigné
                                            ";
        }
        // line 173
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
        // line 192
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "email", [], "any", false, false, false, 192)) {
            // line 193
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "email", [], "any", false, false, false, 193), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 195
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 197
        yield "                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 202
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202), "Phone", [], "any", false, false, false, 202)) {
            // line 203
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "Phone", [], "any", false, false, false, 203), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 205
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 207
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
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
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
                                                    <h6 class=\"mb-0\"> Lettre d'embauche</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
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
                                                    <h6 class=\"mb-0\">Contrat stage</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
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
                                                    <h6 class=\"mb-0\">Fiche de paie 2024-2025</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-passwort\" role=\"tabpanel\" aria-labelledby=\"user-set-passwort-tab\">
                            <div class=\"card alert alert-warning p-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                <div class=\"flex-grow-1 me-3\">
                                    <h4 class=\"alert-heading\">Alert!</h4>
                                    <p class=\"mb-2\">Your Password will expire in every 3 months. So change it periodically.</p>
                                    <a href=\"#\" class=\"alert-link\"><u>Do not share your password</u></a>
                                </div>
                                <div class=\"flex-shrink-0\">
                                    <img src=\"../assets/images/application/img-accout-password-alert.png\" alt=\"img\" class=\"img-fluid wid-80\" />
                                </div>
                                </div>
                            </div>
                            </div>
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
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-email\" role=\"tabpanel\" aria-labelledby=\"user-set-email-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Email Settings</h5>
                                </div>
                                <div class=\"card-body\">
                                    <h6 class=\"mb-3\">Setup Email Notification</h6>
                                    <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                        <div>
                                            <p class=\"text-muted mb-0\">Email Notification</p>
                                        </div>
                                        <div class=\"form-check form-switch p-0\">
                                            <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                        <div>
                                            <p class=\"text-muted mb-0\">Send Copy To Personal Email</p>
                                        </div>
                                        <div class=\"form-check form-switch p-0\">
                                            <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Activity Related Emails</h5>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"mb-3\">When to email?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Have new notifications</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">You're sent a direct message</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Someone adds you as a connection</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <hr class=\"my-2 border border-secondary-subtle\" />
                                <h6 class=\"mb-3\">When to escalate emails?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Upon new order</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">New membership approval</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                <div>
                                    <p class=\"text-muted mb-0\">Member registration</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Updates from System Notification</h5>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"mb-3\">Email you with?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">News about PCT-themes products and feature updates</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Tips on getting more out of PCT-themes</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Things you missed since you last logged into PCT-themes</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">News about products and other services</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                <div>
                                    <p class=\"text-muted mb-0\">Tips and Document business products</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-body text-end btn-page\">
                                <div class=\"btn btn-outline-secondary\">Cancel</div>
                                <div class=\"btn btn-primary\">Update Profile</div>
                            </div>
                            </div>
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
        return array (  390 => 207,  386 => 205,  380 => 203,  378 => 202,  371 => 197,  367 => 195,  361 => 193,  359 => 192,  338 => 173,  334 => 171,  328 => 169,  326 => 168,  315 => 159,  311 => 157,  305 => 155,  303 => 154,  296 => 149,  292 => 147,  286 => 145,  284 => 144,  265 => 127,  261 => 125,  255 => 123,  253 => 122,  245 => 117,  235 => 109,  231 => 107,  225 => 105,  223 => 104,  215 => 98,  211 => 96,  205 => 94,  203 => 93,  192 => 84,  188 => 82,  182 => 80,  180 => 79,  173 => 74,  169 => 72,  163 => 70,  161 => 69,  108 => 19,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
                                  
                                     
                                    <i class=\"chat-badge bg-success me-2 mb-2\"></i>
                                </div>
                                <h5 class=\"mb-5\">{{app.user.email}}</h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">86</h5>
                                        <small class=\"text-muted\">Opéraions</small>
                                    </div>
                                    <div class=\"col-4 border border-top-0 border-bottom-0\">
                                        <h5 class=\"mb-0\">5</h5>
                                        <small class=\"text-muted\">Opérations</small>
                                    </div>
                                    <div class=\"col-4\">
                                        <h5 class=\"mb-0\">4</h5>
                                        <small class=\"text-muted\">Activation</small>
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
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-passwort-tab\" data-bs-toggle=\"pill\" href=\"#user-set-passwort\" role=\"tab\" aria-controls=\"user-set-passwort\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-key m-r-10\"></i>Paramètres</span>
                            </a>
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
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
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
                                                    <h6 class=\"mb-0\"> Lettre d'embauche</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
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
                                                    <h6 class=\"mb-0\">Contrat stage</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
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
                                                    <h6 class=\"mb-0\">Fiche de paie 2024-2025</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary\">télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-passwort\" role=\"tabpanel\" aria-labelledby=\"user-set-passwort-tab\">
                            <div class=\"card alert alert-warning p-0\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                <div class=\"flex-grow-1 me-3\">
                                    <h4 class=\"alert-heading\">Alert!</h4>
                                    <p class=\"mb-2\">Your Password will expire in every 3 months. So change it periodically.</p>
                                    <a href=\"#\" class=\"alert-link\"><u>Do not share your password</u></a>
                                </div>
                                <div class=\"flex-shrink-0\">
                                    <img src=\"../assets/images/application/img-accout-password-alert.png\" alt=\"img\" class=\"img-fluid wid-80\" />
                                </div>
                                </div>
                            </div>
                            </div>
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
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-email\" role=\"tabpanel\" aria-labelledby=\"user-set-email-tab\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Email Settings</h5>
                                </div>
                                <div class=\"card-body\">
                                    <h6 class=\"mb-3\">Setup Email Notification</h6>
                                    <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                        <div>
                                            <p class=\"text-muted mb-0\">Email Notification</p>
                                        </div>
                                        <div class=\"form-check form-switch p-0\">
                                            <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                        <div>
                                            <p class=\"text-muted mb-0\">Send Copy To Personal Email</p>
                                        </div>
                                        <div class=\"form-check form-switch p-0\">
                                            <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Activity Related Emails</h5>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"mb-3\">When to email?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Have new notifications</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">You're sent a direct message</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Someone adds you as a connection</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <hr class=\"my-2 border border-secondary-subtle\" />
                                <h6 class=\"mb-3\">When to escalate emails?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Upon new order</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">New membership approval</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                <div>
                                    <p class=\"text-muted mb-0\">Member registration</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>Updates from System Notification</h5>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"mb-3\">Email you with?</h6>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">News about PCT-themes products and feature updates</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Tips on getting more out of PCT-themes</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" checked=\"\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">Things you missed since you last logged into PCT-themes</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-1\">
                                <div>
                                    <p class=\"text-muted mb-0\">News about products and other services</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-0\">
                                <div>
                                    <p class=\"text-muted mb-0\">Tips and Document business products</p>
                                </div>
                                <div class=\"form-check form-switch p-0\">
                                    <input class=\"m-0 form-check-input h5 position-relative\" type=\"checkbox\" role=\"switch\" />
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class=\"card\">
                            <div class=\"card-body text-end btn-page\">
                                <div class=\"btn btn-outline-secondary\">Cancel</div>
                                <div class=\"btn btn-primary\">Update Profile</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
{% endblock %}
", "profile/index.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/profile/index.html.twig");
    }
}
