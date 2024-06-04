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

/* base1.html.twig */
class __TwigTemplate_d6737c845f2aac2fa6084b2d6330ba77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Home | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta
      name=\"description\"
      content=\"Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective.\"
    />
    <meta name=\"author\" content=\"phoenixcoded\" />

    <!-- [Favicon] icon -->
    <link rel=\"icon\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/favicon.svg\" type=\"image/x-icon\" />

    <!-- map-vector css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/plugins/jsvectormap.min.css"), "html", null, true);
        yield "\">
    <!-- [Google Font : Public Sans] icon -->
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap\" rel=\"stylesheet\">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/tabler-icons.min.css"), "html", null, true);
        yield "\" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/feather.css"), "html", null, true);
        yield "\" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome.css"), "html", null, true);
        yield "\" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/material.css"), "html", null, true);
        yield "\" >
    <!-- [Template CSS Files] -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" id=\"main-style-link\" >
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-preset.css"), "html", null, true);
        yield "\" >

  </head>

\t<body data-pc-preset=\"preset-1\" data-pc-sidebar-theme=\"light\" data-pc-sidebar-caption=\"true\" data-pc-direction=\"ltr\" data-pc-theme=\"light\">\t
\t\t\t
\t\t\t\t\t";
        // line 39
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 40
        yield "\t\t\t\t
\t\t\t
\t\t    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/jsvectormap.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/world.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/world-merc.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/dashboard-default.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- [Page Specific JS] end -->
\t\t\t<!-- Required Js -->
\t\t\t<script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/popper.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/simplebar.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fonts/custom-font.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pcoded.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/feather.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script>layout_change('light');</script>
\t\t\t
\t\t\t<script>layout_sidebar_change('light');</script>
\t\t\t
\t\t\t<script>change_box_container('false');</script>\t\t\t
\t\t
\t\t\t<script>layout_caption_change('true');</script>\t\t\t
\t\t\t
\t\t\t<script>layout_rtl_change('false');</script>\t\t\t
\t\t\t
\t\t\t<script>preset_change(\"preset-1\");</script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base1.html.twig";
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
        return array (  181 => 39,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  128 => 46,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  108 => 40,  106 => 39,  97 => 33,  93 => 32,  88 => 30,  83 => 28,  78 => 26,  73 => 24,  65 => 19,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Home | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta
      name=\"description\"
      content=\"Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective.\"
    />
    <meta name=\"author\" content=\"phoenixcoded\" />

    <!-- [Favicon] icon -->
    <link rel=\"icon\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/favicon.svg\" type=\"image/x-icon\" />

    <!-- map-vector css -->
    <link rel=\"stylesheet\" href=\"{{ asset('/css/plugins/jsvectormap.min.css') }}\">
    <!-- [Google Font : Public Sans] icon -->
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap\" rel=\"stylesheet\">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/tabler-icons.min.css') }}\" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/feather.css') }}\" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/fontawesome.css') }}\" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/material.css') }}\" >
    <!-- [Template CSS Files] -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" id=\"main-style-link\" >
    <link rel=\"stylesheet\" href=\"{{ asset('css/style-preset.css') }}\" >

  </head>

\t<body data-pc-preset=\"preset-1\" data-pc-sidebar-theme=\"light\" data-pc-sidebar-caption=\"true\" data-pc-direction=\"ltr\" data-pc-theme=\"light\">\t
\t\t\t
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t
\t\t\t
\t\t    <script src=\"{{asset('js/plugins/apexcharts.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/jsvectormap.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/world.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/world-merc.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/pages/dashboard-default.js') }}\"></script>
\t\t\t<!-- [Page Specific JS] end -->
\t\t\t<!-- Required Js -->
\t\t\t<script src=\"{{asset('js/plugins/popper.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/simplebar.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/fonts/custom-font.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/pcoded.js') }}\"></script>
\t\t\t<script src=\"{{asset('js/plugins/feather.min.js') }}\"></script>

\t\t\t<script>layout_change('light');</script>
\t\t\t
\t\t\t<script>layout_sidebar_change('light');</script>
\t\t\t
\t\t\t<script>change_box_container('false');</script>\t\t\t
\t\t
\t\t\t<script>layout_caption_change('true');</script>\t\t\t
\t\t\t
\t\t\t<script>layout_rtl_change('false');</script>\t\t\t
\t\t\t
\t\t\t<script>preset_change(\"preset-1\");</script>
    </body>
</html>
", "base1.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/base1.html.twig");
    }
}
