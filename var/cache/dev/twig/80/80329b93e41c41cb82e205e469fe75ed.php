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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
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
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-information-tab\" data-bs-toggle=\"pill\" href=\"#user-set-information\" role=\"tab\" aria-controls=\"user-set-information\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-clipboard-text m-r-10\"></i>Documents personnelles</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-account-tab\" data-bs-toggle=\"pill\" href=\"#user-set-account\" role=\"tab\" aria-controls=\"user-set-account\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ph-duotone ph-notebook m-r-10\"></i>Documents contractuels</span>
                            </a>
                            <a class=\"nav-link list-group-item list-group-item-action\" id=\"user-set-passwort-tab\" data-bs-toggle=\"pill\" href=\"#user-set-passwort\" role=\"tab\" aria-controls=\"user-set-passwort\" aria-selected=\"false\">
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modifier les informations</span>
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
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "lastName", [], "any", false, false, false, 52)) {
            // line 53
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "lastName", [], "any", false, false, false, 53), "html", null, true);
            yield "
                                            ";
        } else {
            // line 55
            yield "                                                Non renseigné
                                            ";
        }
        // line 57
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Prénom</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "firstName", [], "any", false, false, false, 62)) {
            // line 63
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "firstName", [], "any", false, false, false, 63), "html", null, true);
            yield "
                                            ";
        } else {
            // line 65
            yield "                                                Non renseigné
                                            ";
        }
        // line 67
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
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "dateBirth", [], "any", false, false, false, 76)) {
            // line 77
            yield "                                                ";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "dateBirth", [], "any", false, false, false, 77)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "dateBirth", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "
                                            ";
        } else {
            // line 79
            yield "                                                Non renseigné
                                            ";
        }
        // line 81
        yield "                                            
                                            </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Phone</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "Phone", [], "any", false, false, false, 87)) {
            // line 88
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "Phone", [], "any", false, false, false, 88), "html", null, true);
            yield "
                                            ";
        } else {
            // line 90
            yield "                                                Non renseigné
                                            ";
        }
        // line 92
        yield "                                            </p>
                                        </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item px-0\">
                                        <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Email</p>
                                            <p class=\"mb-0\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                             <p class=\"mb-1 text-muted\">Address</p>
                                        <p class=\"mb-0\">
                                        ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "Address", [], "any", false, false, false, 105)) {
            // line 106
            yield "                                                 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "Address", [], "any", false, false, false, 106), "html", null, true);
            yield "
                                            ";
        } else {
            // line 108
            yield "                                                Non renseigné
                                            ";
        }
        // line 110
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
        // line 127
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, false, 127)) {
            // line 128
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), "html", null, true);
            yield "
                                            ";
        } else {
            // line 130
            yield "                                                Non renseigné
                                            ";
        }
        // line 132
        yield "                                             </p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p class=\"mb-1 text-muted\">Adresse personnelle</p>
                                            <p class=\"mb-0\">
                                            ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "Phone", [], "any", false, false, false, 137)) {
            // line 138
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "Phone", [], "any", false, false, false, 138), "html", null, true);
            yield "
                                            ";
        } else {
            // line 140
            yield "                                                Non renseigné
                                            ";
        }
        // line 142
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
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "Phone", [], "any", false, false, false, 151)) {
            // line 152
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "Phone", [], "any", false, false, false, 152), "html", null, true);
            yield "
                                            ";
        } else {
            // line 154
            yield "                                                Non renseigné
                                            ";
        }
        // line 156
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
        // line 175
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "email", [], "any", false, false, false, 175)) {
            // line 176
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "email", [], "any", false, false, false, 176), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 178
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 180
        yield "                                                    </p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                <p class=\"mb-1 text-muted\">Phone</p>
                                                    <p class=\"mb-0\">
                                                    ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "Phone", [], "any", false, false, false, 185)) {
            // line 186
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "Phone", [], "any", false, false, false, 186), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 188
            yield "                                                        Non renseigné
                                                    ";
        }
        // line 190
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
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 199, $this->source); })()), 'form_start');
        yield "
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 200, $this->source); })()), 'widget');
        yield "
                                <button class=\"btn\">Upload</button>
                            ";
        // line 202
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 202, $this->source); })()), 'form_end');
        yield "
                              <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5> Promesse d'embauche </h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 208
        if ((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 208, $this->source); })())) {
            // line 209
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["embauchedocs"]) || array_key_exists("embauchedocs", $context) ? $context["embauchedocs"] : (function () { throw new RuntimeError('Variable "embauchedocs" does not exist.', 209, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 210
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
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 221))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 221), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 221), "html", null, true);
                yield ")</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                            <button class=\"btn btn-link-primary avtar avtar-xs\"> <a href=\"";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 227))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "                                    ";
        }
        // line 233
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Contrats de travail</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 240
        if ((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 240, $this->source); })())) {
            // line 241
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contratdocs"]) || array_key_exists("contratdocs", $context) ? $context["contratdocs"] : (function () { throw new RuntimeError('Variable "contratdocs" does not exist.', 241, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 242
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
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 251))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 251), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 251), "html", null, true);
                yield ")</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 256))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            yield "                                    ";
        }
        // line 261
        yield "                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Fiches de paie</h5>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 268
        if ((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 268, $this->source); })())) {
            // line 269
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paiedocs"]) || array_key_exists("paiedocs", $context) ? $context["paiedocs"] : (function () { throw new RuntimeError('Variable "paiedocs" does not exist.', 269, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 270
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
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 279))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 279), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 279), "html", null, true);
                yield ")</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex-shrink-0\">
                                           <button class=\"btn btn-link-primary\"> <a href=\"";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/documents/" . CoreExtension::getAttribute($this->env, $this->source, $context["document"], "fileName", [], "any", false, false, false, 284))), "html", null, true);
                yield "\"><i class=\"ti ti-cloud-upload\"></i></a></button>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "                                ";
        }
        // line 289
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
        // line 302
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), 'form_start');
        yield "
                                        <li class=\"list-group-item pt-0 px-0\">
                                            <div class=\"row mb-0\">
                                            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                                                >Email <span class=\"text-danger\">*</span>
                                            </label>
                                            <div class=\"col-md-8 col-sm-12\">
                                                 ";
        // line 309
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "email", [], "any", false, false, false, 309), 'row');
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
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "password", [], "any", false, false, false, 319), 'row');
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
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "firstName", [], "any", false, false, false, 329), 'row');
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
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "lastName", [], "any", false, false, false, 339), 'row');
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
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "dateBirth", [], "any", false, false, false, 350), 'row');
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
        // line 360
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "Phone", [], "any", false, false, false, 360), 'row');
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
        // line 370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "Address", [], "any", false, false, false, 370), 'row');
        yield "
                                            </div>
                                            </div>
                                        </li>
                                        <div class=\"container\">
                                            <div class=\"p-3\">
                                                <div class=\"text-center\">
                                                    <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 377, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                                                </div>
                                            </div>
                                        </div>
                                         ";
        // line 382
        yield "                                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), 'form_end');
        yield "
                                       
                                    </ul>
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
        return array (  674 => 382,  667 => 377,  657 => 370,  644 => 360,  631 => 350,  617 => 339,  604 => 329,  591 => 319,  578 => 309,  568 => 302,  553 => 289,  550 => 288,  540 => 284,  528 => 279,  517 => 270,  512 => 269,  510 => 268,  501 => 261,  498 => 260,  488 => 256,  476 => 251,  465 => 242,  460 => 241,  458 => 240,  449 => 233,  446 => 232,  435 => 227,  422 => 221,  409 => 210,  404 => 209,  402 => 208,  393 => 202,  388 => 200,  384 => 199,  373 => 190,  369 => 188,  363 => 186,  361 => 185,  354 => 180,  350 => 178,  344 => 176,  342 => 175,  321 => 156,  317 => 154,  311 => 152,  309 => 151,  298 => 142,  294 => 140,  288 => 138,  286 => 137,  279 => 132,  275 => 130,  269 => 128,  267 => 127,  248 => 110,  244 => 108,  238 => 106,  236 => 105,  228 => 100,  218 => 92,  214 => 90,  208 => 88,  206 => 87,  198 => 81,  194 => 79,  188 => 77,  186 => 76,  175 => 67,  171 => 65,  165 => 63,  163 => 62,  156 => 57,  152 => 55,  146 => 53,  144 => 52,  104 => 15,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
                                <h5 class=\"mb-5\">{{user.email}}</h5>
                                
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
                            <span class=\"f-w-500\"><i class=\"ti ti-settings m-r-10\"></i>Modifier les informations</span>
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
                    </div>
                </div>
        </div>
    </div>
{% endblock %}

", "user/show.html.twig", "/Users/hantour/template_dashboard/templates/user/show.html.twig");
    }
}
