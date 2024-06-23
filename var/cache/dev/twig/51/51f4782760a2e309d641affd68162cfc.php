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

/* pdf/dashboard.html.twig */
class __TwigTemplate_4de223038220657b4c81909c63416640 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Dashboard PDF</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .content h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .content p {
            margin: 0;
            padding: 0;
        }
        .users table {
            width: 100%;
            border-collapse: collapse;
        }
        .users th, .users td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .users th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>Dashboard Report</h1>
        </div>
        <div class=\"content\">
            <h2>Summary</h2>
            <p>Total Users: ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numTotalUsers"]) || array_key_exists("numTotalUsers", $context) ? $context["numTotalUsers"] : (function () { throw new RuntimeError('Variable "numTotalUsers" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</p>
            <p>Operations Realized: ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationRealise"]) || array_key_exists("numOperationRealise", $context) ? $context["numOperationRealise"] : (function () { throw new RuntimeError('Variable "numOperationRealise" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "</p>
            <p>Operations in Progress: ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationEnCours"]) || array_key_exists("numOperationEnCours", $context) ? $context["numOperationEnCours"] : (function () { throw new RuntimeError('Variable "numOperationEnCours" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pdf/dashboard.html.twig";
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
        return array (  104 => 53,  100 => 52,  96 => 51,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Dashboard PDF</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .content h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .content p {
            margin: 0;
            padding: 0;
        }
        .users table {
            width: 100%;
            border-collapse: collapse;
        }
        .users th, .users td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .users th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>Dashboard Report</h1>
        </div>
        <div class=\"content\">
            <h2>Summary</h2>
            <p>Total Users: {{ numTotalUsers }}</p>
            <p>Operations Realized: {{ numOperationRealise }}</p>
            <p>Operations in Progress: {{ numOperationEnCours }}</p>
        </div>
    </div>
</body>
</html>", "pdf/dashboard.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/pdf/dashboard.html.twig");
    }
}
