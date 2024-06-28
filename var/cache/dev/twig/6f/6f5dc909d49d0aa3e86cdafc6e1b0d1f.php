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
                               
                            </div>
                        </div>
                        <div class=\"nav flex-column nav-pills list-group list-group-flush account-pills mb-0\"
                            id=\"user-set-tab\"
                            role=\"tablist\"
                            aria-orientation=\"vertical\">
                            <a class=\"nav-link list-group-item list-group-item-action active\" id=\"user-set-profile-tab\" data-bs-toggle=\"pill\" href=\"#user-set-profile\" role=\"tab\" aria-controls=\"user-set-profile\" aria-selected=\"true\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-user-circle m-r-10\"></i>Informations générales</span>
                            </a>
                            
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-account-tab\" data-bs-toggle=\"pill\" href=\"#user-set-account\" role=\"tab\" aria-controls=\"user-set-account\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-notebook m-r-10\"></i>Documents contractuels</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-edit-info-tab\" data-bs-toggle=\"pill\" href=\"#user-set-edit-info\" role=\"tab\" aria-controls=\"user-set-edit-info\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modification information</span>
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
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "lastName", [], "any", false, false, false, 51)) {
            // line 52
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "lastName", [], "any", false, false, false, 52), "html", null, true);
            yield "
                                            ";
        } else {
            // line 54
            yield "                                                Non renseigné
                                            ";
        }
        // line 56
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "firstName", [], "any", false, false, false, 61)) {
            // line 62
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "firstName", [], "any", false, false, false, 62), "html", null, true);
            yield "
                                            ";
        } else {
            // line 64
            yield "                                                Non renseigné
                                            ";
        }
        // line 66
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
        // line 75
        if ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "dateBirth", [], "any", false, false, false, 75), "y-m-d")) {
            // line 76
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "dateBirth", [], "any", false, false, false, 76), "y-m-d"), "html", null, true);
            yield "
                                            ";
        } else {
            // line 78
            yield "                                                Non renseigné
                                            ";
        }
        // line 80
        yield "                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "Phone", [], "any", false, false, false, 86)) {
            // line 87
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "Phone", [], "any", false, false, false, 87), "html", null, true);
            yield "
                                            ";
        } else {
            // line 89
            yield "                                                Non renseigné
                                            ";
        }
        // line 91
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "email", [], "any", false, false, false, 99), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "Address", [], "any", false, false, false, 104)) {
            // line 105
            yield "                                                 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "Address", [], "any", false, false, false, 105), "html", null, true);
            yield "
                                            ";
        } else {
            // line 107
            yield "                                                Non renseigné
                                            ";
        }
        // line 109
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
        // line 126
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "email", [], "any", false, false, false, 126)) {
            // line 127
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "email", [], "any", false, false, false, 127), "html", null, true);
            yield "
                                            ";
        } else {
            // line 129
            yield "                                                Non renseigné
                                            ";
        }
        // line 131
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "Phone", [], "any", false, false, false, 136)) {
            // line 137
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "Phone", [], "any", false, false, false, 137), "html", null, true);
            yield "
                                            ";
        } else {
            // line 139
            yield "                                                Non renseigné
                                            ";
        }
        // line 141
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
        // line 150
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "Phone", [], "any", false, false, false, 150)) {
            // line 151
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "Phone", [], "any", false, false, false, 151), "html", null, true);
            yield "
                                            ";
        } else {
            // line 153
            yield "                                                Non renseigné
                                            ";
        }
        // line 155
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
        // line 174
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "email", [], "any", false, false, false, 174)) {
            // line 175
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "email", [], "any", false, false, false, 175), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 177
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 179
        yield "                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 184
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "Phone", [], "any", false, false, false, 184)) {
            // line 185
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "Phone", [], "any", false, false, false, 185), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 187
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 189
        yield "                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-account\" role=\"tabpanel\" aria-labelledby=\"user-set-account-tab\">
                            ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), 'widget');
        yield "
                                <button class=\"btn\">Upload</button>
                            ";
        // line 201
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form_end');
        yield "
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 207
        if ((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 207, $this->source); })())) {
            // line 208
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 208, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 209
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
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 220))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 220), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 220), "html", null, true);
                yield ")</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary avtar avtar-xs\"> <a href=\"";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 226))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            yield "                                    ";
        }
        // line 232
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 239
        if ((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 239, $this->source); })())) {
            // line 240
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 240, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 241
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
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 250))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 250), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 250), "html", null, true);
                yield ")</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 255))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "                                    ";
        }
        // line 260
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 267
        if ((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 267, $this->source); })())) {
            // line 268
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 268, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 269
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
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 278))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 278), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 278), "html", null, true);
                yield ")</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                           <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 283))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            yield "                                ";
        }
        // line 288
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
        // line 298
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 298, $this->source); })()), 'form_start');
        yield "
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 305, $this->source); })()), "email", [], "any", false, false, false, 305), 'row');
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
        // line 315
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 315, $this->source); })()), "password", [], "any", false, false, false, 315), 'row');
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
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 325, $this->source); })()), "firstName", [], "any", false, false, false, 325), 'row');
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
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 335, $this->source); })()), "lastName", [], "any", false, false, false, 335), 'row');
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
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 346, $this->source); })()), "dateBirth", [], "any", false, false, false, 346), 'row');
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
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 356, $this->source); })()), "Phone", [], "any", false, false, false, 356), 'row');
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
        // line 366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 366, $this->source); })()), "Address", [], "any", false, false, false, 366), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 373, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                                                </div>
                                            </div>
                                        </div>
                                         ";
        // line 378
        yield "                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 378, $this->source); })()), 'form_end');
        yield "
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ";
        // line 432
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
        return array (  680 => 432,  670 => 378,  663 => 373,  653 => 366,  640 => 356,  627 => 346,  613 => 335,  600 => 325,  587 => 315,  574 => 305,  564 => 298,  552 => 288,  549 => 287,  539 => 283,  527 => 278,  516 => 269,  511 => 268,  509 => 267,  500 => 260,  497 => 259,  487 => 255,  475 => 250,  464 => 241,  459 => 240,  457 => 239,  448 => 232,  445 => 231,  434 => 226,  421 => 220,  408 => 209,  403 => 208,  401 => 207,  392 => 201,  387 => 199,  383 => 198,  372 => 189,  368 => 187,  362 => 185,  360 => 184,  353 => 179,  349 => 177,  343 => 175,  341 => 174,  320 => 155,  316 => 153,  310 => 151,  308 => 150,  297 => 141,  293 => 139,  287 => 137,  285 => 136,  278 => 131,  274 => 129,  268 => 127,  266 => 126,  247 => 109,  243 => 107,  237 => 105,  235 => 104,  227 => 99,  217 => 91,  213 => 89,  207 => 87,  205 => 86,  197 => 80,  193 => 78,  187 => 76,  185 => 75,  174 => 66,  170 => 64,  164 => 62,  162 => 61,  155 => 56,  151 => 54,  145 => 52,  143 => 51,  104 => 15,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
                               
                            </div>
                        </div>
                        <div class=\"nav flex-column nav-pills list-group list-group-flush account-pills mb-0\"
                            id=\"user-set-tab\"
                            role=\"tablist\"
                            aria-orientation=\"vertical\">
                            <a class=\"nav-link list-group-item list-group-item-action active\" id=\"user-set-profile-tab\" data-bs-toggle=\"pill\" href=\"#user-set-profile\" role=\"tab\" aria-controls=\"user-set-profile\" aria-selected=\"true\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-user-circle m-r-10\"></i>Informations générales</span>
                            </a>
                            
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-account-tab\" data-bs-toggle=\"pill\" href=\"#user-set-account\" role=\"tab\" aria-controls=\"user-set-account\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-notebook m-r-10\"></i>Documents contractuels</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-edit-info-tab\" data-bs-toggle=\"pill\" href=\"#user-set-edit-info\" role=\"tab\" aria-controls=\"user-set-edit-info\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modification information</span>
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
                                            {% if app.user.dateBirth|date(\"y-m-d\") %}
                                                {{ app.user.dateBirth|date(\"y-m-d\")}}
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
", "profile/index.html.twig", "/Users/hantour/template_dashboard/templates/profile/index.html.twig");
    }
}
