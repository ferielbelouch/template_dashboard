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

/* activation/_form.html.twig */
class __TwigTemplate_c9a5efd0e1b7be1689c9004db1ef3914 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activation/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Objectif <span class=\"text-danger\">*</span>
            </label>
            <div class=\"col-md-8 col-sm-12\">
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "objectif", [], "any", false, false, false, 8), 'row');
        yield "
            </div>
        </div>
    </li>
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Date
            </label>
            <div class=\"col-md-8 col-sm-12\">
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), 'row');
        yield "
            </div>
        </div>
    </li>
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Opération
            </label>
            <div class=\"col-md-8 col-sm-12\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "operation", [], "any", false, false, false, 28), 'row');
        yield "
            </div>
        </div>
    </li>
    <div class=\"container\">
        <div class=\"p-3\">
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" target=\"_blank\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
            </div>
        </div>
    </div>
";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activation/_form.html.twig";
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
        return array (  97 => 39,  90 => 35,  80 => 28,  67 => 18,  54 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Objectif <span class=\"text-danger\">*</span>
            </label>
            <div class=\"col-md-8 col-sm-12\">
            {{ form_row(form.objectif) }}
            </div>
        </div>
    </li>
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Date
            </label>
            <div class=\"col-md-8 col-sm-12\">
                {{ form_row(form.date) }}
            </div>
        </div>
    </li>
    <li class=\"list-group-item pt-0 px-0\">
        <div class=\"row mb-0\">
            <label class=\"col-form-label col-md-4 col-sm-12 text-md-end\"
                >Opération
            </label>
            <div class=\"col-md-8 col-sm-12\">
                {{ form_row(form.operation) }}
            </div>
        </div>
    </li>
    <div class=\"container\">
        <div class=\"p-3\">
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" target=\"_blank\">{{ button_label|default('Save') }}</button>
            </div>
        </div>
    </div>
{{ form_end(form) }}
", "activation/_form.html.twig", "/Users/hantour/template_dashboard/templates/activation/_form.html.twig");
    }
}
