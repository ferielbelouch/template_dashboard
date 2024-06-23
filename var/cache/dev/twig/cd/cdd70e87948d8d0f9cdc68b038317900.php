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

/* includes/sidebar.html.twig */
class __TwigTemplate_f7c59df0765bc182d932f1b364a06b11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        // line 1
        yield "<nav class=\"pc-sidebar\">
  <div class=\"navbar-wrapper\">
    <div class=\"m-header  mb-5\">
      <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"b-brand text-primary\">
        <!-- ========   Change your logo from here   ============ -->
        <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"logo image\" class=\"w-100\" />
      </a>
    </div>
    <div class=\"navbar-content\">
      <ul class=\"pc-navbar\">
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-gauge\"></i>
            </span>
            <span class=\"pc-mtext\">Dashboard</span>
          </a>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operation");
        yield "\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-layout\"></i></span><span class=\"pc-mtext\">Operations</span>
          </a>
        </li>
        <li class=\"pc-item\">
          <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-identification-card\"></i>
            </span>
            <span class=\"pc-mtext\">User</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/sidebar.html.twig";
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
        return array (  82 => 25,  74 => 20,  63 => 12,  54 => 6,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"pc-sidebar\">
  <div class=\"navbar-wrapper\">
    <div class=\"m-header  mb-5\">
      <a href=\"{{ path('app_home')}}\" class=\"b-brand text-primary\">
        <!-- ========   Change your logo from here   ============ -->
        <img src=\"{{ asset('images/logo.png')}}\" alt=\"logo image\" class=\"w-100\" />
      </a>
    </div>
    <div class=\"navbar-content\">
      <ul class=\"pc-navbar\">
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"{{ path('app_home')}}\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-gauge\"></i>
            </span>
            <span class=\"pc-mtext\">Dashboard</span>
          </a>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"{{ path('app_operation')}}\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-layout\"></i></span><span class=\"pc-mtext\">Operations</span>
          </a>
        </li>
        <li class=\"pc-item\">
          <a href=\"{{path('app_user_index')}}\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-identification-card\"></i>
            </span>
            <span class=\"pc-mtext\">User</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>", "includes/sidebar.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/includes/sidebar.html.twig");
    }
}
