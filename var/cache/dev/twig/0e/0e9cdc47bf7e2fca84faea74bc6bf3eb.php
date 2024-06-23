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

/* includes/navbar.html.twig */
class __TwigTemplate_bf85f2a4e5dd5431fead22888e286ae0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        yield "<header class=\"pc-header\">
  <div class=\"header-wrapper\"> <!-- [Mobile Media Block] start -->
<div class=\"me-auto pc-mob-drp\">
  <ul class=\"list-unstyled\">
    <!-- ======= Menu collapse Icon ===== -->
    <li class=\"pc-h-item pc-sidebar-collapse\">
      <a href=\"#\" class=\"pc-head-link ms-0\" id=\"sidebar-hide\">
        <i class=\"ti ti-menu-2\"></i>
      </a>
    </li>
    <li class=\"pc-h-item pc-sidebar-popup\">
      <a href=\"#\" class=\"pc-head-link ms-0\" id=\"mobile-collapse\">
        <i class=\"ti ti-menu-2\"></i>
      </a>
    </li>
    <li class=\"dropdown pc-h-item d-inline-flex d-md-none\">
      <a class=\"pc-head-link dropdown-toggle arrow-none m-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-magnifying-glass\"></i>
      </a>
      <div class=\"dropdown-menu pc-h-dropdown drp-search\">
        <form class=\"px-3\">
          <div class=\"mb-0 d-flex align-items-center\">
            <input type=\"search\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" />
            <button class=\"btn btn-light-secondary btn-search\">Search</button>
          </div>
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class=\"ms-auto\">
  <ul class=\"list-unstyled\">
    
    <li class=\"dropdown pc-h-item\">
      <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-sun-dim\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('dark')\">
          <i class=\"ph-duotone ph-moon\"></i>
          <span>Dark</span>
        </a>
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('light')\">
          <i class=\"ph-duotone ph-sun-dim\"></i>
          <span>Light</span>
        </a>
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change_default()\">
          <i class=\"ph-duotone ph-cpu\"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    
    <li class=\"dropdown pc-h-item\">
      <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-diamonds-four\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
        <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"dropdown-item\">
          <i class=\"ph-duotone ph-user\"></i>
          <span>Mon profile</span>
        </a>
        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">
          <i class=\"ph-duotone ph-power\"></i>
          <span>Se déconnecter</span>
        </a>
      </div>
    </li>
  </ul>
</div> </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
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
        return array (  115 => 67,  108 => 63,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pc-header\">
  <div class=\"header-wrapper\"> <!-- [Mobile Media Block] start -->
<div class=\"me-auto pc-mob-drp\">
  <ul class=\"list-unstyled\">
    <!-- ======= Menu collapse Icon ===== -->
    <li class=\"pc-h-item pc-sidebar-collapse\">
      <a href=\"#\" class=\"pc-head-link ms-0\" id=\"sidebar-hide\">
        <i class=\"ti ti-menu-2\"></i>
      </a>
    </li>
    <li class=\"pc-h-item pc-sidebar-popup\">
      <a href=\"#\" class=\"pc-head-link ms-0\" id=\"mobile-collapse\">
        <i class=\"ti ti-menu-2\"></i>
      </a>
    </li>
    <li class=\"dropdown pc-h-item d-inline-flex d-md-none\">
      <a class=\"pc-head-link dropdown-toggle arrow-none m-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-magnifying-glass\"></i>
      </a>
      <div class=\"dropdown-menu pc-h-dropdown drp-search\">
        <form class=\"px-3\">
          <div class=\"mb-0 d-flex align-items-center\">
            <input type=\"search\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" />
            <button class=\"btn btn-light-secondary btn-search\">Search</button>
          </div>
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class=\"ms-auto\">
  <ul class=\"list-unstyled\">
    
    <li class=\"dropdown pc-h-item\">
      <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-sun-dim\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('dark')\">
          <i class=\"ph-duotone ph-moon\"></i>
          <span>Dark</span>
        </a>
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change('light')\">
          <i class=\"ph-duotone ph-sun-dim\"></i>
          <span>Light</span>
        </a>
        <a href=\"#!\" class=\"dropdown-item\" onclick=\"layout_change_default()\">
          <i class=\"ph-duotone ph-cpu\"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    
    <li class=\"dropdown pc-h-item\">
      <a class=\"pc-head-link dropdown-toggle arrow-none me-0\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
        aria-haspopup=\"false\" aria-expanded=\"false\">
        <i class=\"ph-duotone ph-diamonds-four\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-end pc-h-dropdown\">
        <a href=\"{{path('app_profile')}}\" class=\"dropdown-item\">
          <i class=\"ph-duotone ph-user\"></i>
          <span>Mon profile</span>
        </a>
        <a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">
          <i class=\"ph-duotone ph-power\"></i>
          <span>Se déconnecter</span>
        </a>
      </div>
    </li>
  </ul>
</div> </div>
</header>", "includes/navbar.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/includes/navbar.html.twig");
    }
}
