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

/* user/show.html.twig */
class __TwigTemplate_45d258c05d643874c02871e6552f7ad1 extends Template
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
        // line 68
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 68);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
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

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        yield "    <div class=\"col-sm-12\">
        <div class=\"row\">
                <div class=\"col-lg-5 col-xxl-3\">
                    <div class=\"card overflow-hidden\">
                        <div class=\"card-body position-relative\">
                            <div class=\"text-center mt-3\">
                                <div class=\"chat-avtar d-inline-flex mx-auto\">
                                    
                                        <img class=\"rounded-circle img-fluid wid-90 img-thumbnail\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"User image\" />
                                 
                                     
                                    <i class=\"chat-badge bg-success me-2 mb-2\"></i>
                                </div>
                                <h5 class=\"mb-5\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), "html", null, true);
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
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-key m-r-10\"></i>Modifier les informations</span>
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
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "lastName", [], "any", false, false, false, 136)) {
            // line 137
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "lastName", [], "any", false, false, false, 137), "html", null, true);
            yield "
                                            ";
        } else {
            // line 139
            yield "                                                Non renseigné
                                            ";
        }
        // line 141
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "firstName", [], "any", false, false, false, 146)) {
            // line 147
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "firstName", [], "any", false, false, false, 147), "html", null, true);
            yield "
                                            ";
        } else {
            // line 149
            yield "                                                Non renseigné
                                            ";
        }
        // line 151
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
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 160, $this->source); })()), "dateBirth", [], "any", false, false, false, 160)) {
            // line 161
            yield "                                                ";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "dateBirth", [], "any", false, false, false, 161)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "dateBirth", [], "any", false, false, false, 161), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "
                                            ";
        } else {
            // line 163
            yield "                                                Non renseigné
                                            ";
        }
        // line 165
        yield "                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 171
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "Phone", [], "any", false, false, false, 171)) {
            // line 172
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "Phone", [], "any", false, false, false, 172), "html", null, true);
            yield "
                                            ";
        } else {
            // line 174
            yield "                                                Non renseigné
                                            ";
        }
        // line 176
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 184, $this->source); })()), "email", [], "any", false, false, false, 184), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        ";
        // line 189
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "Address", [], "any", false, false, false, 189)) {
            // line 190
            yield "                                                 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "Address", [], "any", false, false, false, 190), "html", null, true);
            yield "
                                            ";
        } else {
            // line 192
            yield "                                                Non renseigné
                                            ";
        }
        // line 194
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
        // line 211
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 211, $this->source); })()), "email", [], "any", false, false, false, 211)) {
            // line 212
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 212, $this->source); })()), "email", [], "any", false, false, false, 212), "html", null, true);
            yield "
                                            ";
        } else {
            // line 214
            yield "                                                Non renseigné
                                            ";
        }
        // line 216
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 221
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 221, $this->source); })()), "Phone", [], "any", false, false, false, 221)) {
            // line 222
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "Phone", [], "any", false, false, false, 222), "html", null, true);
            yield "
                                            ";
        } else {
            // line 224
            yield "                                                Non renseigné
                                            ";
        }
        // line 226
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
        // line 235
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 235, $this->source); })()), "Phone", [], "any", false, false, false, 235)) {
            // line 236
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 236, $this->source); })()), "Phone", [], "any", false, false, false, 236), "html", null, true);
            yield "
                                            ";
        } else {
            // line 238
            yield "                                                Non renseigné
                                            ";
        }
        // line 240
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
        // line 259
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 259, $this->source); })()), "email", [], "any", false, false, false, 259)) {
            // line 260
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 260, $this->source); })()), "email", [], "any", false, false, false, 260), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 262
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 264
        yield "                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 269
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 269, $this->source); })()), "Phone", [], "any", false, false, false, 269)) {
            // line 270
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 270, $this->source); })()), "Phone", [], "any", false, false, false, 270), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 272
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 274
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
        // line 343
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 343, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 344, $this->source); })()), 'widget');
        yield "
                                <button class=\"btn\">Upload</button>
                            ";
        // line 346
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 346, $this->source); })()), 'form_end');
        yield "
                              <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 352
        if ((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 352, $this->source); })())) {
            // line 353
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 353, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 354
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
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 365))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 365), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 365), "html", null, true);
                yield ")</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary avtar avtar-xs\"> <a href=\"";
                // line 371
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 371))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            yield "                                    ";
        }
        // line 377
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 384
        if ((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 384, $this->source); })())) {
            // line 385
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 385, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 386
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
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 395))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 395), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 395), "html", null, true);
                yield ")</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 400))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "                                    ";
        }
        // line 405
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 412
        if ((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 412, $this->source); })())) {
            // line 413
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 413, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 414
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
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 423))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 423), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 423), "html", null, true);
                yield ")</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                           <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 428))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            yield "                                ";
        }
        // line 433
        yield "                                </div>
                            </div>


                        </div>
                        <div class=\"tab-pane fade\" id=\"user-set-passwort\" role=\"tabpanel\" aria-labelledby=\"user-set-passwort-tab\">
                            
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Modifier les informations</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    ";
        // line 446
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), 'form_start');
        yield "
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 453
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "email", [], "any", false, false, false, 453), 'row');
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
        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "password", [], "any", false, false, false, 463), 'row');
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
        // line 473
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "firstName", [], "any", false, false, false, 473), 'row');
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
        // line 483
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "lastName", [], "any", false, false, false, 483), 'row');
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
        // line 494
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "dateBirth", [], "any", false, false, false, 494), 'row');
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
        // line 504
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "Phone", [], "any", false, false, false, 504), 'row');
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
        // line 514
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 514, $this->source); })()), "Address", [], "any", false, false, false, 514), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 521, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                                                </div>
                                            </div>
                                        </div>
                                         ";
        // line 526
        yield "                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), 'form_end');
        yield "
                                       
                                    </ul>
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
        return "user/show.html.twig";
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
        return array (  751 => 526,  744 => 521,  734 => 514,  721 => 504,  708 => 494,  694 => 483,  681 => 473,  668 => 463,  655 => 453,  645 => 446,  630 => 433,  627 => 432,  617 => 428,  605 => 423,  594 => 414,  589 => 413,  587 => 412,  578 => 405,  575 => 404,  565 => 400,  553 => 395,  542 => 386,  537 => 385,  535 => 384,  526 => 377,  523 => 376,  512 => 371,  499 => 365,  486 => 354,  481 => 353,  479 => 352,  470 => 346,  465 => 344,  461 => 343,  390 => 274,  386 => 272,  380 => 270,  378 => 269,  371 => 264,  367 => 262,  361 => 260,  359 => 259,  338 => 240,  334 => 238,  328 => 236,  326 => 235,  315 => 226,  311 => 224,  305 => 222,  303 => 221,  296 => 216,  292 => 214,  286 => 212,  284 => 211,  265 => 194,  261 => 192,  255 => 190,  253 => 189,  245 => 184,  235 => 176,  231 => 174,  225 => 172,  223 => 171,  215 => 165,  211 => 163,  205 => 161,  203 => 160,  192 => 151,  188 => 149,  182 => 147,  180 => 146,  173 => 141,  169 => 139,  163 => 137,  161 => 136,  108 => 86,  100 => 81,  90 => 73,  80 => 72,  60 => 70,  37 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
    <h1>User</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ user.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ user.lastName }}</td>
            </tr>
            <tr>
                <th>DateBirth</th>
                <td>{{ user.dateBirth ? user.dateBirth|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Photo de profil</th>
                <td>{{ asset('images/UserUpload/' ~ user.imageFile) }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ user.CreatedAt ? user.CreatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ user.UpdatedAt ? user.UpdatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ user.Phone }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ user.Address }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_user_index') }}\">back to list</a>

    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>

    {{ include('user/_delete_form.html.twig') }}
{% endblock %} #}

{% extends 'base.html.twig' %}

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
                                <h5 class=\"mb-5\">{{user.email}}</h5>
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
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-key m-r-10\"></i>Modifier les informations</span>
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
                                            {% if user.lastName %}
                                                {{user.lastName}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            {% if user.firstName %}
                                                {{ user.firstName }}
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
                                            {% if user.dateBirth %}
                                                {{ user.dateBirth ? user.dateBirth|date('Y-m-d') : '' }}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            {% if user.Phone %}
                                                {{user.Phone}}
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
                                            <p class=\"mb-0\">{{ user.email }}</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        {% if user.Address %}
                                                 {{user.Address}}
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
                                            {% if user.email %}
                                                {{user.email}}
                                            {% else %}
                                                Non renseigné
                                            {% endif %}
                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            {% if user.Phone %}
                                                {{ user.Phone }}
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
                                            {% if user.Phone %}
                                                {{user.Phone}}
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
                                                    {% if user.email %}
                                                        {{user.email}}
                                                    {% else %}
                                                        Non renseigné
                                                    {% endif %}
                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    {% if user.Phone %}
                                                        {{user.Phone}}
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
                          {{ form_start(forms) }}
                                {{ form_widget(forms) }}
                                <button class=\"btn\">Upload</button>
                            {{ form_end(forms) }}
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
                        <div class=\"tab-pane fade\" id=\"user-set-passwort\" role=\"tabpanel\" aria-labelledby=\"user-set-passwort-tab\">
                            
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Modifier les informations</h5>
                                </div>
                                <div class=\"card-body\">
                                    <ul class=\"list-group list-group-flush\">
                                    {{ form_start(form) }}
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.email) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Mot de passe <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.password) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Prénom 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.firstName) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Nom
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.lastName) }}
                                            </div>
                                            </div>
                                        </li>

                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Date de naissance 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.dateBirth) }}
                                            </div>
                                            </div>
                                        </li>
                                         <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Numéro de téléphone  
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.Phone) }}
                                            </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Adresse 
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 {{ form_row(form.Address) }}
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

", "user/show.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/user/show.html.twig");
    }
}
