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

/* home/index.html.twig */
class __TwigTemplate_453edaeb263ea3ceb51b365dd6e614e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Dashboard";
        
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
        yield "      <div class=\"pc-content\">
        <!-- [ Main Content ] start -->
        <div class=\"row\">
        ";
        // line 10
        yield "          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Opérations réalisées</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationRealise"]) || array_key_exists("numOperationRealise", $context) ? $context["numOperationRealise"] : (function () { throw new RuntimeError('Variable "numOperationRealise" does not exist.', 16, $this->source); })()), "html", null, true);
        yield " opérations</h3>
                  <span class=\"badge bg-light-success ms-2\"></span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-5.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Opérations en cours</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationEnCours"]) || array_key_exists("numOperationEnCours", $context) ? $context["numOperationEnCours"] : (function () { throw new RuntimeError('Variable "numOperationEnCours" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "  opérations</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden \">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Activations terminées</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\" f-w-300 d-flex align-items-center m-b-0\">x activations</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Activation à venir</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">x activations</h3>
                </div>
              </div>
            </div>
          </div>
        ";
        // line 56
        yield "

          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Nombre d'employés</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numTotalUsers"]) || array_key_exists("numTotalUsers", $context) ? $context["numTotalUsers"] : (function () { throw new RuntimeError('Variable "numTotalUsers" does not exist.', 64, $this->source); })()), "html", null, true);
        yield " employés</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-xl-8\">
            <div class=\"card table-card\">
              <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Derniers employés </h5>
                <div class=\"dropdown\">
                  <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ><i class=\"material-icons-two-tone f-18\">more_vert</i></a>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Voir tout</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body py-2 px-0\">
                <div class=\"table-responsive\">
                  <table class=\"table table-hover table-borderless table-sm mb-0\">
                    <tbody>
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["FourLastestUser"]) || array_key_exists("FourLastestUser", $context) ? $context["FourLastestUser"] : (function () { throw new RuntimeError('Variable "FourLastestUser" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 85
            yield "                      <tr>
                        <td>
                          <div class=\"d-inline-block align-middle\">
                            <img src=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/avatar-1.jpg"), "html", null, true);
            yield "\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width:40px;\">
                            <div class=\"d-inline-block\">
                              <h6 class=\"m-b-0\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 90), "html", null, true);
            yield "</h6>
                              <p class=\"m-b-0\">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> <td>";
            // line 95
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 95)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td></p></td>
                        <td class=\"text-end\">
                          <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                          <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                        </td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          ";
        // line 164
        yield "          ";
        // line 191
        yield "        </div>
        <!-- [ Main Content ] end -->
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
        return "home/index.html.twig";
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
        return array (  228 => 191,  226 => 164,  216 => 102,  203 => 95,  195 => 90,  190 => 88,  185 => 85,  181 => 84,  158 => 64,  148 => 56,  118 => 28,  103 => 16,  95 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
      <div class=\"pc-content\">
        <!-- [ Main Content ] start -->
        <div class=\"row\">
        {# KPI operation et activation #}
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Opérations réalisées</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">{{ numOperationRealise }} opérations</h3>
                  <span class=\"badge bg-light-success ms-2\"></span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-5.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Opérations en cours</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">{{ numOperationEnCours }}  opérations</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden \">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Activations terminées</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\" f-w-300 d-flex align-items-center m-b-0\">x activations</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Activation à venir</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">x activations</h3>
                </div>
              </div>
            </div>
          </div>
        {# Fin KPI operation et activation #}


          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Nombre d'employés</h5>
                <div class=\"d-flex align-items-center mt-3\">
                  <h3 class=\"text-white f-w-300 d-flex align-items-center m-b-0\">{{numTotalUsers}} employés</h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-xl-8\">
            <div class=\"card table-card\">
              <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Derniers employés </h5>
                <div class=\"dropdown\">
                  <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ><i class=\"material-icons-two-tone f-18\">more_vert</i></a>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Voir tout</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body py-2 px-0\">
                <div class=\"table-responsive\">
                  <table class=\"table table-hover table-borderless table-sm mb-0\">
                    <tbody>
                    {% for user in FourLastestUser %}
                      <tr>
                        <td>
                          <div class=\"d-inline-block align-middle\">
                            <img src=\"{{asset('images/user/avatar-1.jpg')}}\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width:40px;\">
                            <div class=\"d-inline-block\">
                              <h6 class=\"m-b-0\">{{ user.email }}</h6>
                              <p class=\"m-b-0\">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> <td>{{ user.createdAt ? user.createdAt|date('Y-m-d') : '' }}</td></p></td>
                        <td class=\"text-end\">
                          <button class=\"btn avtar avtar-xs btn-light-danger\"><i class=\"ti ti-x\"></i></button>
                          <button class=\"btn avtar avtar-xs btn-light-success\"><i class=\"ti ti-check\"></i></button>
                        </td>
                      </tr>
                    {% endfor %}
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          {# <div class=\"col-md-6 col-xl-4\">
            <div class=\"card statistics-card-1 overflow-hidden \">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-7.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <div class=\"d-flex align-items-center\">
                  <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-facebook.svg\" alt=\"img\" class=\"img-fluid\" >
                  <div class=\"flex-grow-1 ms-3\">
                    <p class=\"mb-0 text-muted\">Total Likes</p>
                    <div class=\"d-inline-flex align-items-center\">
                      <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                      <span class=\"badge bg-success ms-2\">+7.2%</span>
                    </div>
                  </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                  <div class=\"col-6\">
                    <p class=\"mb-0 text-muted\">Target</p>
                    <h5 class=\"mb-0\">35,098</h5>
                  </div>
                  <div class=\"col-6 border-start\">
                    <p class=\"mb-0 text-muted\">Duration</p>
                    <h5 class=\"mb-0\">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"card statistics-card-1 overflow-hidden \">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-8.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <div class=\"d-flex align-items-center\">
                  <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-google.svg\" alt=\"img\" class=\"img-fluid\" >
                  <div class=\"flex-grow-1 ms-3\">
                    <p class=\"mb-0 text-muted\">Total Likes</p>
                    <div class=\"d-inline-flex align-items-center\">
                      <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                      <span class=\"badge bg-success ms-2\">+5.9%</span>
                    </div>
                  </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                  <div class=\"col-6\">
                    <p class=\"mb-0 text-muted\">Target</p>
                    <h5 class=\"mb-0\">35,098</h5>
                  </div>
                  <div class=\"col-6 border-start\">
                    <p class=\"mb-0 text-muted\">Duration</p>
                    <h5 class=\"mb-0\">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div> #}
          {# <div class=\"col-md-12 col-xl-4\">
            <div class=\"card statistics-card-1 overflow-hidden \">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-9.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <div class=\"d-flex align-items-center\">
                  <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-twitter.svg\" alt=\"img\" class=\"img-fluid\" >
                  <div class=\"flex-grow-1 ms-3\">
                    <p class=\"mb-0 text-muted\">Total Likes</p>
                    <div class=\"d-inline-flex align-items-center\">
                      <h5 class=\"f-w-300 d-flex align-items-center m-b-0\">12,281</h5>
                      <span class=\"badge bg-success ms-2\">+6.2%</span>
                    </div>
                  </div>
                </div>
                <div class=\"row g-3 mt-5 text-center\">
                  <div class=\"col-6\">
                    <p class=\"mb-0 text-muted\">Target</p>
                    <h5 class=\"mb-0\">35,098</h5>
                  </div>
                  <div class=\"col-6 border-start\">
                    <p class=\"mb-0 text-muted\">Duration</p>
                    <h5 class=\"mb-0\">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div> #}
        </div>
        <!-- [ Main Content ] end -->
      </div>

{% endblock %}
", "home/index.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/home/index.html.twig");
    }
}
