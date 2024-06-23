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
      <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf_dashboard");
        yield "\" class=\"btn btn-primary\">Télécharger la liste en PDF</a>
        <!-- [ Main Content ] start -->
        <div class=\"row\">
        ";
        // line 11
        yield "          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Opérations réalisées</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\"f-w-300 m-b-0\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationRealise"]) || array_key_exists("numOperationRealise", $context) ? $context["numOperationRealise"] : (function () { throw new RuntimeError('Variable "numOperationRealise" does not exist.', 17, $this->source); })()), "html", null, true);
        yield " </h3>
                  <span class=\"badge bg-light-success ms-2\"></span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3 text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-5.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Opérations en cours</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\"text-white f-w-300 m-b-0\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numOperationEnCours"]) || array_key_exists("numOperationEnCours", $context) ? $context["numOperationEnCours"] : (function () { throw new RuntimeError('Variable "numOperationEnCours" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                 <h5 class=\"mb-4\">Activations terminées</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\" f-w-300 m-b-0\">x </h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3 text-center\">
              <div class=\"card-body text-center\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Activation à venir</h5>
                <div class=\"mt-3\">
                  <h3 class=\"text-white f-w-300 m-b-0\">x </h3>
                </div>
              </div>
            </div>
          </div>
        ";
        // line 57
        yield " 

          <div class=\"col-md-6 col-xl-5\">
            <div class=\"card\">
              <div class=\"card-body\">
                <div class=\"d-flex align-items-center justify-content-between mb-5\">
                  <h5>Your team performance</h5>
                </div>
                <div class=\"text-center\" id=\"performance-chart\" style=\"min-height: 168.7px;\"><div id=\"apexchartshxbi5jp2\" class=\"apexcharts-canvas apexchartshxbi5jp2 apexcharts-theme-light\" style=\"width: 395px; height: 168.7px;\"><svg id=\"SvgjsSvg4217\" width=\"395\" height=\"168.70000000000002\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\"><foreignObject x=\"0\" y=\"0\" width=\"395\" height=\"168.70000000000002\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\"></div></foreignObject><g id=\"SvgjsG4219\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(115.5, 0)\"><defs id=\"SvgjsDefs4218\"><clipPath id=\"gridRectMaskhxbi5jp2\"><rect id=\"SvgjsRect4220\" width=\"172\" height=\"200\" x=\"-4\" y=\"-6\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskhxbi5jp2\"></clipPath><clipPath id=\"nonForecastMaskhxbi5jp2\"></clipPath><clipPath id=\"gridRectMarkerMaskhxbi5jp2\"><rect id=\"SvgjsRect4221\" width=\"170\" height=\"192\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath></defs><g id=\"SvgjsG4222\" class=\"apexcharts-pie\"><g id=\"SvgjsG4223\" transform=\"translate(0, 0) scale(1)\"><circle id=\"SvgjsCircle4224\" r=\"48.73414634146342\" cx=\"83\" cy=\"83\" fill=\"transparent\"></circle><g id=\"SvgjsG4225\" class=\"apexcharts-slices\"><g id=\"SvgjsG4226\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Totalxincome\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath4227\" d=\"M 83 8.024390243902431 A 74.97560975609757 74.97560975609757 0 0 1 152.65059601748334 110.75133389060723 L 128.2728874113642 101.0383670288947 A 48.73414634146342 48.73414634146342 0 0 0 83 34.26585365853658 L 83 8.024390243902431 z \" fill=\"rgba(4,169,245,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-0\" index=\"0\" j=\"0\" data:angle=\"111.72413793103448\" data:startAngle=\"0\" data:strokeWidth=\"2\" data:value=\"27\" data:pathOrig=\"M 83 8.024390243902431 A 74.97560975609757 74.97560975609757 0 0 1 152.65059601748334 110.75133389060723 L 128.2728874113642 101.0383670288947 A 48.73414634146342 48.73414634146342 0 0 0 83 34.26585365853658 L 83 8.024390243902431 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4228\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Totalxrent\" rel=\"2\" data:realIndex=\"1\"><path id=\"SvgjsPath4229\" d=\"M 152.65059601748334 110.75133389060723 A 74.97560975609757 74.97560975609757 0 0 1 49.08245592701636 149.86510496780699 L 60.95359635256064 126.46231822907453 A 48.73414634146342 48.73414634146342 0 0 0 128.2728874113642 101.0383670288947 L 152.65059601748334 110.75133389060723 z \" fill=\"rgba(244,194,43,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-1\" index=\"0\" j=\"1\" data:angle=\"95.17241379310343\" data:startAngle=\"111.72413793103448\" data:strokeWidth=\"2\" data:value=\"23\" data:pathOrig=\"M 152.65059601748334 110.75133389060723 A 74.97560975609757 74.97560975609757 0 0 1 49.08245592701636 149.86510496780699 L 60.95359635256064 126.46231822907453 A 48.73414634146342 48.73414634146342 0 0 0 128.2728874113642 101.0383670288947 L 152.65059601748334 110.75133389060723 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4230\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Download\" rel=\"3\" data:realIndex=\"2\"><path id=\"SvgjsPath4231\" d=\"M 49.08245592701636 149.86510496780699 A 74.97560975609757 74.97560975609757 0 0 1 12.39291940337155 57.781311931033244 L 37.1053976121915 66.6078527551716 A 48.73414634146342 48.73414634146342 0 0 0 60.95359635256064 126.46231822907453 L 49.08245592701636 149.86510496780699 z \" fill=\"rgba(29,233,182,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-2\" index=\"0\" j=\"2\" data:angle=\"82.75862068965517\" data:startAngle=\"206.8965517241379\" data:strokeWidth=\"2\" data:value=\"20\" data:pathOrig=\"M 49.08245592701636 149.86510496780699 A 74.97560975609757 74.97560975609757 0 0 1 12.39291940337155 57.781311931033244 L 37.1053976121915 66.6078527551716 A 48.73414634146342 48.73414634146342 0 0 0 60.95359635256064 126.46231822907453 L 49.08245592701636 149.86510496780699 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4232\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Views\" rel=\"4\" data:realIndex=\"3\"><path id=\"SvgjsPath4233\" d=\"M 12.39291940337155 57.781311931033244 A 74.97560975609757 74.97560975609757 0 0 1 82.98691428757708 8.024391385846258 L 82.9914942869251 34.265854400800066 A 48.73414634146342 48.73414634146342 0 0 0 37.1053976121915 66.6078527551716 L 12.39291940337155 57.781311931033244 z \" fill=\"rgba(4,169,245,0.3)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-3\" index=\"0\" j=\"3\" data:angle=\"70.34482758620692\" data:startAngle=\"289.6551724137931\" data:strokeWidth=\"2\" data:value=\"17\" data:pathOrig=\"M 12.39291940337155 57.781311931033244 A 74.97560975609757 74.97560975609757 0 0 1 82.98691428757708 8.024391385846258 L 82.9914942869251 34.265854400800066 A 48.73414634146342 48.73414634146342 0 0 0 37.1053976121915 66.6078527551716 L 12.39291940337155 57.781311931033244 z \" stroke=\"#ffffff\"></path></g></g></g><g id=\"SvgjsG4234\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"><text id=\"SvgjsText4235\" font-family=\"Helvetica, Arial, sans-serif\" x=\"83\" y=\"73\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"16px\" font-weight=\"600\" fill=\"#04a9f5\" class=\"apexcharts-text apexcharts-datalabel-label\" style=\"font-family: Helvetica, Arial, sans-serif;\"></text><text id=\"SvgjsText4236\" font-family=\"Helvetica, Arial, sans-serif\" x=\"83\" y=\"109\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"20px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-datalabel-value\" style=\"font-family: Helvetica, Arial, sans-serif;\"></text></g></g><line id=\"SvgjsLine4237\" x1=\"0\" y1=\"0\" x2=\"166\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine4238\" x1=\"0\" y1=\"0\" x2=\"166\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(4, 169, 245);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(244, 194, 43);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 3;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(29, 233, 182);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 4;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(4, 169, 245);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div></div></div>
                <div class=\"text-center mt-4\">
                  <div class=\"d-inline-flex align-items-center m-1\">
                    <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-primary f-12\"></i> Completed </p>
                  </div>
                  <div class=\"d-inline-flex align-items-center m-1\">
                    <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-secondary f-12\"></i> Percentage </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"card\">
              <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Graph opération </h5>
                <div class=\"dropdown\">
                  <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ><i class=\"material-icons-two-tone f-18\">more_vert</i></a>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Voir tout</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body\">
                <div class=\"tab-content\" id=\"myTabContent\">
                  <div class=\"tab-pane show active\" id=\"analytics-tab-1-pane\" role=\"tabpanel\" aria-labelledby=\"analytics-tab-1\" tabindex=\"0\">
                    <div id=\"overview-chart-1\" style=\"min-height: 245px;\">
                      <div id=\"apexchartsry2s4bd\" class=\"apexcharts-canvas apexchartsry2s4bd apexcharts-theme-light\" style=\"width: 486px; height: 230px;\">
                        <svg id=\"SvgjsSvg7760\" width=\"486\" height=\"230\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg apexcharts-zoomable\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\">
                          <foreignObject x=\"0\" y=\"0\" width=\"486\" height=\"230\">
                            <div class=\"apexcharts-legend apexcharts-align-center apx-legend-position-bottom\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"inset: auto 0px 1px; position: absolute; max-height: 115px;\">
                              <div class=\"apexcharts-legend-series\" rel=\"1\" seriesname=\"Thisxmonth\" data:collapsed=\"false\" style=\"margin: 2px 5px;\">
                                <span class=\"apexcharts-legend-marker\" rel=\"1\" data:collapsed=\"false\" style=\"background: rgb(13, 110, 253) !important; color: rgb(13, 110, 253); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span>
                                <span class=\"apexcharts-legend-text\" rel=\"1\" i=\"0\" data:default-text=\"This%20month\" data:collapsed=\"false\" style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">This month</span>
                              </div>
                              <div class=\"apexcharts-legend-series\" rel=\"2\" seriesname=\"Lastxmonth\" data:collapsed=\"false\" style=\"margin: 2px 5px;\">
                                <span class=\"apexcharts-legend-marker\" rel=\"2\" data:collapsed=\"false\" style=\"background: rgb(116, 136, 146) !important; color: rgb(116, 136, 146); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span>
                                <span class=\"apexcharts-legend-text\" rel=\"2\" i=\"1\" data:default-text=\"Last%20month\" data:collapsed=\"false\" style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Last month</span>
                              </div>
                            </div>
                          <style type=\"text/css\">
                            .apexcharts-legend {
                              display: flex;
                              overflow: auto;
                              padding: 0 10px;
                            }
                            .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                              flex-wrap: wrap
                            }
                            .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                              flex-direction: column;
                              bottom: 0;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                              justify-content: flex-start;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                              justify-content: center;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                              justify-content: flex-end;
                            }
                            .apexcharts-legend-series {
                              cursor: pointer;
                              line-height: normal;
                            }
                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
                              display: flex;
                              align-items: center;
                            }
                            .apexcharts-legend-text {
                              position: relative;
                              font-size: 14px;
                            }
                            .apexcharts-legend-text *, .apexcharts-legend-marker * {
                              pointer-events: none;
                            }
                            .apexcharts-legend-marker {
                              position: relative;
                              display: inline-block;
                              cursor: pointer;
                              margin-right: 3px;
                              border-style: solid;
                            }

                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                              display: inline-block;
                            }
                            .apexcharts-legend-series.apexcharts-no-click {
                              cursor: auto;
                            }
                            .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                              display: none !important;
                            }
                            .apexcharts-inactive-legend {
                              opacity: 0.45;
                            }
                          </style>
                        </foreignObject><rect id=\"SvgjsRect7765\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG7831\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(9.2421875, 0)\"><g id=\"SvgjsG7832\" class=\"apexcharts-yaxis-texts-g\"><text id=\"SvgjsText7834\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"31.6\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7835\">90</tspan><title>90</title></text><text id=\"SvgjsText7837\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"55.65800000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7838\">80</tspan><title>80</title></text><text id=\"SvgjsText7840\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"79.71600000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7841\">70</tspan><title>70</title></text><text id=\"SvgjsText7843\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"103.77400000000002\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7844\">60</tspan><title>60</title></text><text id=\"SvgjsText7846\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"127.83200000000002\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7847\">50</tspan><title>50</title></text><text id=\"SvgjsText7849\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"151.89000000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7850\">40</tspan><title>40</title></text><text id=\"SvgjsText7852\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"175.948\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7853\">30</tspan><title>30</title></text></g></g><g id=\"SvgjsG7762\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(39.2421875, 30)\"><defs id=\"SvgjsDefs7761\"><clipPath id=\"gridRectMaskry2s4bd\"><rect id=\"SvgjsRect7767\" width=\"442.7578125\" height=\"156.348\" x=\"-4\" y=\"-6\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskry2s4bd\"></clipPath><clipPath id=\"nonForecastMaskry2s4bd\"></clipPath><clipPath id=\"gridRectMarkerMaskry2s4bd\"><rect id=\"SvgjsRect7768\" width=\"440.7578125\" height=\"148.348\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath></defs><line id=\"SvgjsLine7766\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"144.348\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"144.348\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG7778\" class=\"apexcharts-grid\"><g id=\"SvgjsG7779\" class=\"apexcharts-gridlines-horizontal\"><line id=\"SvgjsLine7783\" x1=\"0\" y1=\"24.058000000000003\" x2=\"436.7578125\" y2=\"24.058000000000003\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7784\" x1=\"0\" y1=\"48.11600000000001\" x2=\"436.7578125\" y2=\"48.11600000000001\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7785\" x1=\"0\" y1=\"72.174\" x2=\"436.7578125\" y2=\"72.174\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7786\" x1=\"0\" y1=\"96.23200000000001\" x2=\"436.7578125\" y2=\"96.23200000000001\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7787\" x1=\"0\" y1=\"120.29000000000002\" x2=\"436.7578125\" y2=\"120.29000000000002\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG7780\" class=\"apexcharts-gridlines-vertical\"></g><line id=\"SvgjsLine7790\" x1=\"0\" y1=\"144.348\" x2=\"436.7578125\" y2=\"144.348\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine7789\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"144.348\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG7781\" class=\"apexcharts-grid-borders\"><line id=\"SvgjsLine7782\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7788\" x1=\"0\" y1=\"144.348\" x2=\"436.7578125\" y2=\"144.348\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG7769\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG7770\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"Thisxmonth\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath7773\" d=\"M 0 144.348 L 39.70525568181819 72.174 L 79.41051136363637 120.29 L 119.11576704545455 48.115999999999985 L 158.82102272727275 96.232 L 198.5262784090909 0 L 238.2315340909091 96.232 L 277.9367897727273 84.203 L 317.6420454545455 108.26100000000001 L 357.3473011363636 72.174 L 397.0525568181818 96.232 L 436.7578125 60.14499999999998\" fill=\"none\" fill-opacity=\"1\" stroke=\"rgba(13,110,253,0.85)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMaskry2s4bd)\" pathTo=\"M 0 144.348 L 39.70525568181819 72.174 L 79.41051136363637 120.29 L 119.11576704545455 48.115999999999985 L 158.82102272727275 96.232 L 198.5262784090909 0 L 238.2315340909091 96.232 L 277.9367897727273 84.203 L 317.6420454545455 108.26100000000001 L 357.3473011363636 72.174 L 397.0525568181818 96.232 L 436.7578125 60.14499999999998\" pathFrom=\"M -1 216.52200000000002 L -1 216.52200000000002 L 39.70525568181819 216.52200000000002 L 79.41051136363637 216.52200000000002 L 119.11576704545455 216.52200000000002 L 158.82102272727275 216.52200000000002 L 198.5262784090909 216.52200000000002 L 238.2315340909091 216.52200000000002 L 277.9367897727273 216.52200000000002 L 317.6420454545455 216.52200000000002 L 357.3473011363636 216.52200000000002 L 397.0525568181818 216.52200000000002 L 436.7578125 216.52200000000002\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG7771\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle7857\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w4xgjswuvj no-pointer-events\" stroke=\"#ffffff\" fill=\"#0d6efd\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG7774\" class=\"apexcharts-series\" zIndex=\"1\" seriesName=\"Lastxmonth\" data:longestSeries=\"true\" rel=\"2\" data:realIndex=\"1\"><path id=\"SvgjsPath7777\" d=\"M 0 96.232 L 39.70525568181819 84.203 L 79.41051136363637 108.26100000000001 L 119.11576704545455 72.174 L 158.82102272727275 96.232 L 198.5262784090909 60.14499999999998 L 238.2315340909091 144.348 L 277.9367897727273 72.174 L 317.6420454545455 120.29 L 357.3473011363636 48.115999999999985 L 397.0525568181818 96.232 L 436.7578125 0\" fill=\"none\" fill-opacity=\"1\" stroke=\"rgba(116,136,146,0.85)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"1\" clip-path=\"url(#gridRectMaskry2s4bd)\" pathTo=\"M 0 96.232 L 39.70525568181819 84.203 L 79.41051136363637 108.26100000000001 L 119.11576704545455 72.174 L 158.82102272727275 96.232 L 198.5262784090909 60.14499999999998 L 238.2315340909091 144.348 L 277.9367897727273 72.174 L 317.6420454545455 120.29 L 357.3473011363636 48.115999999999985 L 397.0525568181818 96.232 L 436.7578125 0\" pathFrom=\"M -1 216.52200000000002 L -1 216.52200000000002 L 39.70525568181819 216.52200000000002 L 79.41051136363637 216.52200000000002 L 119.11576704545455 216.52200000000002 L 158.82102272727275 216.52200000000002 L 198.5262784090909 216.52200000000002 L 238.2315340909091 216.52200000000002 L 277.9367897727273 216.52200000000002 L 317.6420454545455 216.52200000000002 L 357.3473011363636 216.52200000000002 L 397.0525568181818 216.52200000000002 L 436.7578125 216.52200000000002\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG7775\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"1\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle7858\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker wll5eouo4 no-pointer-events\" stroke=\"#ffffff\" fill=\"#748892\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG7772\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g><g id=\"SvgjsG7776\" class=\"apexcharts-datalabels\" data:realIndex=\"1\"></g></g><line id=\"SvgjsLine7791\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine7792\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG7793\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG7794\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, -4)\"><text id=\"SvgjsText7796\" font-family=\"Helvetica, Arial, sans-serif\" x=\"0\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7797\">1</tspan><title>1</title></text><text id=\"SvgjsText7799\" font-family=\"Helvetica, Arial, sans-serif\" x=\"39.70525568181817\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7800\">2</tspan><title>2</title></text><text id=\"SvgjsText7802\" font-family=\"Helvetica, Arial, sans-serif\" x=\"79.41051136363635\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7803\">3</tspan><title>3</title></text><text id=\"SvgjsText7805\" font-family=\"Helvetica, Arial, sans-serif\" x=\"119.11576704545453\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7806\">4</tspan><title>4</title></text><text id=\"SvgjsText7808\" font-family=\"Helvetica, Arial, sans-serif\" x=\"158.82102272727272\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7809\">5</tspan><title>5</title></text><text id=\"SvgjsText7811\" font-family=\"Helvetica, Arial, sans-serif\" x=\"198.5262784090909\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7812\">6</tspan><title>6</title></text><text id=\"SvgjsText7814\" font-family=\"Helvetica, Arial, sans-serif\" x=\"238.2315340909091\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7815\">7</tspan><title>7</title></text><text id=\"SvgjsText7817\" font-family=\"Helvetica, Arial, sans-serif\" x=\"277.9367897727273\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7818\">8</tspan><title>8</title></text><text id=\"SvgjsText7820\" font-family=\"Helvetica, Arial, sans-serif\" x=\"317.6420454545455\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7821\">9</tspan><title>9</title></text><text id=\"SvgjsText7823\" font-family=\"Helvetica, Arial, sans-serif\" x=\"357.3473011363637\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7824\">10</tspan><title>10</title></text><text id=\"SvgjsText7826\" font-family=\"Helvetica, Arial, sans-serif\" x=\"397.05255681818187\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7827\">11</tspan><title>11</title></text><text id=\"SvgjsText7829\" font-family=\"Helvetica, Arial, sans-serif\" x=\"436.75781250000006\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7830\">12</tspan><title>12</title></text></g></g><g id=\"SvgjsG7854\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG7855\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG7856\" class=\"apexcharts-point-annotations\"></g><rect id=\"SvgjsRect7859\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\" class=\"apexcharts-zoom-rect\"></rect><rect id=\"SvgjsRect7860\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\" class=\"apexcharts-selection-rect\"></rect></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-light\"><div class=\"apexcharts-tooltip-title\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(13, 110, 253);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(116, 136, 146);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light\"><div class=\"apexcharts-xaxistooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
                  </div>
                  <div class=\"tab-pane\" id=\"analytics-tab-2-pane\" role=\"tabpanel\" aria-labelledby=\"analytics-tab-2\" tabindex=\"0\">
                    <div id=\"overview-chart-2\" style=\"min-height: 245px;\"><div id=\"apexchartsbdkjvav5k\" class=\"apexcharts-canvas apexchartsbdkjvav5k\" style=\"width: 0px; height: 230px;\"><svg id=\"SvgjsSvg5803\" width=\"0\" height=\"230\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\"><foreignObject x=\"0\" y=\"0\" width=\"0\" height=\"230\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\"></div></foreignObject><g id=\"SvgjsG5805\" class=\"apexcharts-inner apexcharts-graphical\"><defs id=\"SvgjsDefs5804\"></defs></g></svg></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class=\"col-md-12 col-xl-12\">
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
              <div class=\"card-body py-4 px-0\">
                <div class=\"table-responsive\">
                  <table class=\"table table-hover table-borderless table-sm mb-0\">
                    <tbody>
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["FourLastestUser"]) || array_key_exists("FourLastestUser", $context) ? $context["FourLastestUser"] : (function () { throw new RuntimeError('Variable "FourLastestUser" does not exist.', 189, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 190
            yield "                      <tr>
                        <td>
                          <div class=\"d-inline-block align-middle\">
                            <img src=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/avatar-1.jpg"), "html", null, true);
            yield "\" alt=\"user image\" class=\"img-radius align-top m-r-15\" style=\"width:40px;\">
                            <div class=\"d-inline-block\">
                              <h6 class=\"m-b-0\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 195), "html", null, true);
            yield "</h6>
                              <p class=\"m-b-0\">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td><p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> <td>";
            // line 200
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 200)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 200), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td></p></td>
                        <td class=\"text-end\">
                          <button class=\"btn avtar avtar-xs btn-light-danger\"><a style=\"text-decoration: none;color:inherit;\" href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\"><i class=\"ti ti-x\"></i></a></button>
                          <button class=\"btn avtar avtar-xs btn-light-success\"><a style=\"text-decoration: none;color:inherit;\" href=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 203)]), "html", null, true);
            yield "\"><i class=\"ti ti-eye\"></i></a></button>
                        </td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        return array (  327 => 207,  317 => 203,  313 => 202,  308 => 200,  300 => 195,  295 => 193,  290 => 190,  286 => 189,  152 => 57,  122 => 29,  107 => 17,  99 => 11,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
      <div class=\"pc-content\">
      <a href=\"{{ path('generate_pdf_dashboard') }}\" class=\"btn btn-primary\">Télécharger la liste en PDF</a>
        <!-- [ Main Content ] start -->
        <div class=\"row\">
        {# KPI operation et activation #}
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4\">Opérations réalisées</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\"f-w-300 m-b-0\">{{ numOperationRealise }} </h3>
                  <span class=\"badge bg-light-success ms-2\"></span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden bg-brand-color-3 text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-5.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Opérations en cours</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\"text-white f-w-300 m-b-0\">{{ numOperationEnCours }}  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden text-center\">
              <div class=\"card-body\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                 <h5 class=\"mb-4\">Activations terminées</h5>
                <div class=\"mt-3 text-center\">
                  <h3 class=\" f-w-300 m-b-0\">x </h3>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <div class=\"card statistics-card-1 overflow-hidden  bg-brand-color-3 text-center\">
              <div class=\"card-body text-center\">
                <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                <h5 class=\"mb-4 text-white\">Activation à venir</h5>
                <div class=\"mt-3\">
                  <h3 class=\"text-white f-w-300 m-b-0\">x </h3>
                </div>
              </div>
            </div>
          </div>
        {# Fin KPI operation et activation #}
 

          <div class=\"col-md-6 col-xl-5\">
            <div class=\"card\">
              <div class=\"card-body\">
                <div class=\"d-flex align-items-center justify-content-between mb-5\">
                  <h5>Your team performance</h5>
                </div>
                <div class=\"text-center\" id=\"performance-chart\" style=\"min-height: 168.7px;\"><div id=\"apexchartshxbi5jp2\" class=\"apexcharts-canvas apexchartshxbi5jp2 apexcharts-theme-light\" style=\"width: 395px; height: 168.7px;\"><svg id=\"SvgjsSvg4217\" width=\"395\" height=\"168.70000000000002\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\"><foreignObject x=\"0\" y=\"0\" width=\"395\" height=\"168.70000000000002\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\"></div></foreignObject><g id=\"SvgjsG4219\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(115.5, 0)\"><defs id=\"SvgjsDefs4218\"><clipPath id=\"gridRectMaskhxbi5jp2\"><rect id=\"SvgjsRect4220\" width=\"172\" height=\"200\" x=\"-4\" y=\"-6\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskhxbi5jp2\"></clipPath><clipPath id=\"nonForecastMaskhxbi5jp2\"></clipPath><clipPath id=\"gridRectMarkerMaskhxbi5jp2\"><rect id=\"SvgjsRect4221\" width=\"170\" height=\"192\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath></defs><g id=\"SvgjsG4222\" class=\"apexcharts-pie\"><g id=\"SvgjsG4223\" transform=\"translate(0, 0) scale(1)\"><circle id=\"SvgjsCircle4224\" r=\"48.73414634146342\" cx=\"83\" cy=\"83\" fill=\"transparent\"></circle><g id=\"SvgjsG4225\" class=\"apexcharts-slices\"><g id=\"SvgjsG4226\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Totalxincome\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath4227\" d=\"M 83 8.024390243902431 A 74.97560975609757 74.97560975609757 0 0 1 152.65059601748334 110.75133389060723 L 128.2728874113642 101.0383670288947 A 48.73414634146342 48.73414634146342 0 0 0 83 34.26585365853658 L 83 8.024390243902431 z \" fill=\"rgba(4,169,245,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-0\" index=\"0\" j=\"0\" data:angle=\"111.72413793103448\" data:startAngle=\"0\" data:strokeWidth=\"2\" data:value=\"27\" data:pathOrig=\"M 83 8.024390243902431 A 74.97560975609757 74.97560975609757 0 0 1 152.65059601748334 110.75133389060723 L 128.2728874113642 101.0383670288947 A 48.73414634146342 48.73414634146342 0 0 0 83 34.26585365853658 L 83 8.024390243902431 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4228\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Totalxrent\" rel=\"2\" data:realIndex=\"1\"><path id=\"SvgjsPath4229\" d=\"M 152.65059601748334 110.75133389060723 A 74.97560975609757 74.97560975609757 0 0 1 49.08245592701636 149.86510496780699 L 60.95359635256064 126.46231822907453 A 48.73414634146342 48.73414634146342 0 0 0 128.2728874113642 101.0383670288947 L 152.65059601748334 110.75133389060723 z \" fill=\"rgba(244,194,43,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-1\" index=\"0\" j=\"1\" data:angle=\"95.17241379310343\" data:startAngle=\"111.72413793103448\" data:strokeWidth=\"2\" data:value=\"23\" data:pathOrig=\"M 152.65059601748334 110.75133389060723 A 74.97560975609757 74.97560975609757 0 0 1 49.08245592701636 149.86510496780699 L 60.95359635256064 126.46231822907453 A 48.73414634146342 48.73414634146342 0 0 0 128.2728874113642 101.0383670288947 L 152.65059601748334 110.75133389060723 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4230\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Download\" rel=\"3\" data:realIndex=\"2\"><path id=\"SvgjsPath4231\" d=\"M 49.08245592701636 149.86510496780699 A 74.97560975609757 74.97560975609757 0 0 1 12.39291940337155 57.781311931033244 L 37.1053976121915 66.6078527551716 A 48.73414634146342 48.73414634146342 0 0 0 60.95359635256064 126.46231822907453 L 49.08245592701636 149.86510496780699 z \" fill=\"rgba(29,233,182,1)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-2\" index=\"0\" j=\"2\" data:angle=\"82.75862068965517\" data:startAngle=\"206.8965517241379\" data:strokeWidth=\"2\" data:value=\"20\" data:pathOrig=\"M 49.08245592701636 149.86510496780699 A 74.97560975609757 74.97560975609757 0 0 1 12.39291940337155 57.781311931033244 L 37.1053976121915 66.6078527551716 A 48.73414634146342 48.73414634146342 0 0 0 60.95359635256064 126.46231822907453 L 49.08245592701636 149.86510496780699 z \" stroke=\"#ffffff\"></path></g><g id=\"SvgjsG4232\" class=\"apexcharts-series apexcharts-pie-series\" seriesName=\"Views\" rel=\"4\" data:realIndex=\"3\"><path id=\"SvgjsPath4233\" d=\"M 12.39291940337155 57.781311931033244 A 74.97560975609757 74.97560975609757 0 0 1 82.98691428757708 8.024391385846258 L 82.9914942869251 34.265854400800066 A 48.73414634146342 48.73414634146342 0 0 0 37.1053976121915 66.6078527551716 L 12.39291940337155 57.781311931033244 z \" fill=\"rgba(4,169,245,0.3)\" fill-opacity=\"1 1 1 0.3\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-pie-area apexcharts-donut-slice-3\" index=\"0\" j=\"3\" data:angle=\"70.34482758620692\" data:startAngle=\"289.6551724137931\" data:strokeWidth=\"2\" data:value=\"17\" data:pathOrig=\"M 12.39291940337155 57.781311931033244 A 74.97560975609757 74.97560975609757 0 0 1 82.98691428757708 8.024391385846258 L 82.9914942869251 34.265854400800066 A 48.73414634146342 48.73414634146342 0 0 0 37.1053976121915 66.6078527551716 L 12.39291940337155 57.781311931033244 z \" stroke=\"#ffffff\"></path></g></g></g><g id=\"SvgjsG4234\" class=\"apexcharts-datalabels-group\" transform=\"translate(0, 0) scale(1)\"><text id=\"SvgjsText4235\" font-family=\"Helvetica, Arial, sans-serif\" x=\"83\" y=\"73\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"16px\" font-weight=\"600\" fill=\"#04a9f5\" class=\"apexcharts-text apexcharts-datalabel-label\" style=\"font-family: Helvetica, Arial, sans-serif;\"></text><text id=\"SvgjsText4236\" font-family=\"Helvetica, Arial, sans-serif\" x=\"83\" y=\"109\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"20px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-datalabel-value\" style=\"font-family: Helvetica, Arial, sans-serif;\"></text></g></g><line id=\"SvgjsLine4237\" x1=\"0\" y1=\"0\" x2=\"166\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine4238\" x1=\"0\" y1=\"0\" x2=\"166\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-dark\"><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(4, 169, 245);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(244, 194, 43);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 3;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(29, 233, 182);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 4;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(4, 169, 245);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div></div></div>
                <div class=\"text-center mt-4\">
                  <div class=\"d-inline-flex align-items-center m-1\">
                    <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-primary f-12\"></i> Completed </p>
                  </div>
                  <div class=\"d-inline-flex align-items-center m-1\">
                    <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-secondary f-12\"></i> Percentage </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"card\">
              <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                <h5>Graph opération </h5>
                <div class=\"dropdown\">
                  <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" ><i class=\"material-icons-two-tone f-18\">more_vert</i></a>
                  <div class=\"dropdown-menu dropdown-menu-end\">
                    <a class=\"dropdown-item\" href=\"#\">Voir tout</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body\">
                <div class=\"tab-content\" id=\"myTabContent\">
                  <div class=\"tab-pane show active\" id=\"analytics-tab-1-pane\" role=\"tabpanel\" aria-labelledby=\"analytics-tab-1\" tabindex=\"0\">
                    <div id=\"overview-chart-1\" style=\"min-height: 245px;\">
                      <div id=\"apexchartsry2s4bd\" class=\"apexcharts-canvas apexchartsry2s4bd apexcharts-theme-light\" style=\"width: 486px; height: 230px;\">
                        <svg id=\"SvgjsSvg7760\" width=\"486\" height=\"230\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg apexcharts-zoomable\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\">
                          <foreignObject x=\"0\" y=\"0\" width=\"486\" height=\"230\">
                            <div class=\"apexcharts-legend apexcharts-align-center apx-legend-position-bottom\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"inset: auto 0px 1px; position: absolute; max-height: 115px;\">
                              <div class=\"apexcharts-legend-series\" rel=\"1\" seriesname=\"Thisxmonth\" data:collapsed=\"false\" style=\"margin: 2px 5px;\">
                                <span class=\"apexcharts-legend-marker\" rel=\"1\" data:collapsed=\"false\" style=\"background: rgb(13, 110, 253) !important; color: rgb(13, 110, 253); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span>
                                <span class=\"apexcharts-legend-text\" rel=\"1\" i=\"0\" data:default-text=\"This%20month\" data:collapsed=\"false\" style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">This month</span>
                              </div>
                              <div class=\"apexcharts-legend-series\" rel=\"2\" seriesname=\"Lastxmonth\" data:collapsed=\"false\" style=\"margin: 2px 5px;\">
                                <span class=\"apexcharts-legend-marker\" rel=\"2\" data:collapsed=\"false\" style=\"background: rgb(116, 136, 146) !important; color: rgb(116, 136, 146); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span>
                                <span class=\"apexcharts-legend-text\" rel=\"2\" i=\"1\" data:default-text=\"Last%20month\" data:collapsed=\"false\" style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Last month</span>
                              </div>
                            </div>
                          <style type=\"text/css\">
                            .apexcharts-legend {
                              display: flex;
                              overflow: auto;
                              padding: 0 10px;
                            }
                            .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                              flex-wrap: wrap
                            }
                            .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                              flex-direction: column;
                              bottom: 0;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                              justify-content: flex-start;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                              justify-content: center;
                            }
                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                              justify-content: flex-end;
                            }
                            .apexcharts-legend-series {
                              cursor: pointer;
                              line-height: normal;
                            }
                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
                              display: flex;
                              align-items: center;
                            }
                            .apexcharts-legend-text {
                              position: relative;
                              font-size: 14px;
                            }
                            .apexcharts-legend-text *, .apexcharts-legend-marker * {
                              pointer-events: none;
                            }
                            .apexcharts-legend-marker {
                              position: relative;
                              display: inline-block;
                              cursor: pointer;
                              margin-right: 3px;
                              border-style: solid;
                            }

                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                              display: inline-block;
                            }
                            .apexcharts-legend-series.apexcharts-no-click {
                              cursor: auto;
                            }
                            .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                              display: none !important;
                            }
                            .apexcharts-inactive-legend {
                              opacity: 0.45;
                            }
                          </style>
                        </foreignObject><rect id=\"SvgjsRect7765\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\"></rect><g id=\"SvgjsG7831\" class=\"apexcharts-yaxis\" rel=\"0\" transform=\"translate(9.2421875, 0)\"><g id=\"SvgjsG7832\" class=\"apexcharts-yaxis-texts-g\"><text id=\"SvgjsText7834\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"31.6\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7835\">90</tspan><title>90</title></text><text id=\"SvgjsText7837\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"55.65800000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7838\">80</tspan><title>80</title></text><text id=\"SvgjsText7840\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"79.71600000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7841\">70</tspan><title>70</title></text><text id=\"SvgjsText7843\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"103.77400000000002\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7844\">60</tspan><title>60</title></text><text id=\"SvgjsText7846\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"127.83200000000002\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7847\">50</tspan><title>50</title></text><text id=\"SvgjsText7849\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"151.89000000000001\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7850\">40</tspan><title>40</title></text><text id=\"SvgjsText7852\" font-family=\"Helvetica, Arial, sans-serif\" x=\"20\" y=\"175.948\" text-anchor=\"end\" dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7853\">30</tspan><title>30</title></text></g></g><g id=\"SvgjsG7762\" class=\"apexcharts-inner apexcharts-graphical\" transform=\"translate(39.2421875, 30)\"><defs id=\"SvgjsDefs7761\"><clipPath id=\"gridRectMaskry2s4bd\"><rect id=\"SvgjsRect7767\" width=\"442.7578125\" height=\"156.348\" x=\"-4\" y=\"-6\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath><clipPath id=\"forecastMaskry2s4bd\"></clipPath><clipPath id=\"nonForecastMaskry2s4bd\"></clipPath><clipPath id=\"gridRectMarkerMaskry2s4bd\"><rect id=\"SvgjsRect7768\" width=\"440.7578125\" height=\"148.348\" x=\"-2\" y=\"-2\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect></clipPath></defs><line id=\"SvgjsLine7766\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"144.348\" stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\" class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\" height=\"144.348\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\" stroke-width=\"1\"></line><g id=\"SvgjsG7778\" class=\"apexcharts-grid\"><g id=\"SvgjsG7779\" class=\"apexcharts-gridlines-horizontal\"><line id=\"SvgjsLine7783\" x1=\"0\" y1=\"24.058000000000003\" x2=\"436.7578125\" y2=\"24.058000000000003\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7784\" x1=\"0\" y1=\"48.11600000000001\" x2=\"436.7578125\" y2=\"48.11600000000001\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7785\" x1=\"0\" y1=\"72.174\" x2=\"436.7578125\" y2=\"72.174\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7786\" x1=\"0\" y1=\"96.23200000000001\" x2=\"436.7578125\" y2=\"96.23200000000001\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7787\" x1=\"0\" y1=\"120.29000000000002\" x2=\"436.7578125\" y2=\"120.29000000000002\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG7780\" class=\"apexcharts-gridlines-vertical\"></g><line id=\"SvgjsLine7790\" x1=\"0\" y1=\"144.348\" x2=\"436.7578125\" y2=\"144.348\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line><line id=\"SvgjsLine7789\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"144.348\" stroke=\"transparent\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"></line></g><g id=\"SvgjsG7781\" class=\"apexcharts-grid-borders\"><line id=\"SvgjsLine7782\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line><line id=\"SvgjsLine7788\" x1=\"0\" y1=\"144.348\" x2=\"436.7578125\" y2=\"144.348\" stroke=\"#e0e0e0\" stroke-dasharray=\"4\" stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line></g><g id=\"SvgjsG7769\" class=\"apexcharts-line-series apexcharts-plot-series\"><g id=\"SvgjsG7770\" class=\"apexcharts-series\" zIndex=\"0\" seriesName=\"Thisxmonth\" data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\"><path id=\"SvgjsPath7773\" d=\"M 0 144.348 L 39.70525568181819 72.174 L 79.41051136363637 120.29 L 119.11576704545455 48.115999999999985 L 158.82102272727275 96.232 L 198.5262784090909 0 L 238.2315340909091 96.232 L 277.9367897727273 84.203 L 317.6420454545455 108.26100000000001 L 357.3473011363636 72.174 L 397.0525568181818 96.232 L 436.7578125 60.14499999999998\" fill=\"none\" fill-opacity=\"1\" stroke=\"rgba(13,110,253,0.85)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"0\" clip-path=\"url(#gridRectMaskry2s4bd)\" pathTo=\"M 0 144.348 L 39.70525568181819 72.174 L 79.41051136363637 120.29 L 119.11576704545455 48.115999999999985 L 158.82102272727275 96.232 L 198.5262784090909 0 L 238.2315340909091 96.232 L 277.9367897727273 84.203 L 317.6420454545455 108.26100000000001 L 357.3473011363636 72.174 L 397.0525568181818 96.232 L 436.7578125 60.14499999999998\" pathFrom=\"M -1 216.52200000000002 L -1 216.52200000000002 L 39.70525568181819 216.52200000000002 L 79.41051136363637 216.52200000000002 L 119.11576704545455 216.52200000000002 L 158.82102272727275 216.52200000000002 L 198.5262784090909 216.52200000000002 L 238.2315340909091 216.52200000000002 L 277.9367897727273 216.52200000000002 L 317.6420454545455 216.52200000000002 L 357.3473011363636 216.52200000000002 L 397.0525568181818 216.52200000000002 L 436.7578125 216.52200000000002\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG7771\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"0\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle7857\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker w4xgjswuvj no-pointer-events\" stroke=\"#ffffff\" fill=\"#0d6efd\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG7774\" class=\"apexcharts-series\" zIndex=\"1\" seriesName=\"Lastxmonth\" data:longestSeries=\"true\" rel=\"2\" data:realIndex=\"1\"><path id=\"SvgjsPath7777\" d=\"M 0 96.232 L 39.70525568181819 84.203 L 79.41051136363637 108.26100000000001 L 119.11576704545455 72.174 L 158.82102272727275 96.232 L 198.5262784090909 60.14499999999998 L 238.2315340909091 144.348 L 277.9367897727273 72.174 L 317.6420454545455 120.29 L 357.3473011363636 48.115999999999985 L 397.0525568181818 96.232 L 436.7578125 0\" fill=\"none\" fill-opacity=\"1\" stroke=\"rgba(116,136,146,0.85)\" stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\" stroke-dasharray=\"0\" class=\"apexcharts-line\" index=\"1\" clip-path=\"url(#gridRectMaskry2s4bd)\" pathTo=\"M 0 96.232 L 39.70525568181819 84.203 L 79.41051136363637 108.26100000000001 L 119.11576704545455 72.174 L 158.82102272727275 96.232 L 198.5262784090909 60.14499999999998 L 238.2315340909091 144.348 L 277.9367897727273 72.174 L 317.6420454545455 120.29 L 357.3473011363636 48.115999999999985 L 397.0525568181818 96.232 L 436.7578125 0\" pathFrom=\"M -1 216.52200000000002 L -1 216.52200000000002 L 39.70525568181819 216.52200000000002 L 79.41051136363637 216.52200000000002 L 119.11576704545455 216.52200000000002 L 158.82102272727275 216.52200000000002 L 198.5262784090909 216.52200000000002 L 238.2315340909091 216.52200000000002 L 277.9367897727273 216.52200000000002 L 317.6420454545455 216.52200000000002 L 357.3473011363636 216.52200000000002 L 397.0525568181818 216.52200000000002 L 436.7578125 216.52200000000002\" fill-rule=\"evenodd\"></path><g id=\"SvgjsG7775\" class=\"apexcharts-series-markers-wrap apexcharts-hidden-element-shown\" data:realIndex=\"1\"><g class=\"apexcharts-series-markers\"><circle id=\"SvgjsCircle7858\" r=\"0\" cx=\"0\" cy=\"0\" class=\"apexcharts-marker wll5eouo4 no-pointer-events\" stroke=\"#ffffff\" fill=\"#748892\" fill-opacity=\"1\" stroke-width=\"2\" stroke-opacity=\"0.9\" default-marker-size=\"0\"></circle></g></g></g><g id=\"SvgjsG7772\" class=\"apexcharts-datalabels\" data:realIndex=\"0\"></g><g id=\"SvgjsG7776\" class=\"apexcharts-datalabels\" data:realIndex=\"1\"></g></g><line id=\"SvgjsLine7791\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line><line id=\"SvgjsLine7792\" x1=\"0\" y1=\"0\" x2=\"436.7578125\" y2=\"0\" stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs-hidden\"></line><g id=\"SvgjsG7793\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\"><g id=\"SvgjsG7794\" class=\"apexcharts-xaxis-texts-g\" transform=\"translate(0, -4)\"><text id=\"SvgjsText7796\" font-family=\"Helvetica, Arial, sans-serif\" x=\"0\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7797\">1</tspan><title>1</title></text><text id=\"SvgjsText7799\" font-family=\"Helvetica, Arial, sans-serif\" x=\"39.70525568181817\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7800\">2</tspan><title>2</title></text><text id=\"SvgjsText7802\" font-family=\"Helvetica, Arial, sans-serif\" x=\"79.41051136363635\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7803\">3</tspan><title>3</title></text><text id=\"SvgjsText7805\" font-family=\"Helvetica, Arial, sans-serif\" x=\"119.11576704545453\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7806\">4</tspan><title>4</title></text><text id=\"SvgjsText7808\" font-family=\"Helvetica, Arial, sans-serif\" x=\"158.82102272727272\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7809\">5</tspan><title>5</title></text><text id=\"SvgjsText7811\" font-family=\"Helvetica, Arial, sans-serif\" x=\"198.5262784090909\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7812\">6</tspan><title>6</title></text><text id=\"SvgjsText7814\" font-family=\"Helvetica, Arial, sans-serif\" x=\"238.2315340909091\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7815\">7</tspan><title>7</title></text><text id=\"SvgjsText7817\" font-family=\"Helvetica, Arial, sans-serif\" x=\"277.9367897727273\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7818\">8</tspan><title>8</title></text><text id=\"SvgjsText7820\" font-family=\"Helvetica, Arial, sans-serif\" x=\"317.6420454545455\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7821\">9</tspan><title>9</title></text><text id=\"SvgjsText7823\" font-family=\"Helvetica, Arial, sans-serif\" x=\"357.3473011363637\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7824\">10</tspan><title>10</title></text><text id=\"SvgjsText7826\" font-family=\"Helvetica, Arial, sans-serif\" x=\"397.05255681818187\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7827\">11</tspan><title>11</title></text><text id=\"SvgjsText7829\" font-family=\"Helvetica, Arial, sans-serif\" x=\"436.75781250000006\" y=\"173.348\" text-anchor=\"middle\" dominant-baseline=\"auto\" font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\" class=\"apexcharts-text apexcharts-xaxis-label \" style=\"font-family: Helvetica, Arial, sans-serif;\"><tspan id=\"SvgjsTspan7830\">12</tspan><title>12</title></text></g></g><g id=\"SvgjsG7854\" class=\"apexcharts-yaxis-annotations\"></g><g id=\"SvgjsG7855\" class=\"apexcharts-xaxis-annotations\"></g><g id=\"SvgjsG7856\" class=\"apexcharts-point-annotations\"></g><rect id=\"SvgjsRect7859\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\" class=\"apexcharts-zoom-rect\"></rect><rect id=\"SvgjsRect7860\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fefefe\" class=\"apexcharts-selection-rect\"></rect></g></svg><div class=\"apexcharts-tooltip apexcharts-theme-light\"><div class=\"apexcharts-tooltip-title\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(13, 110, 253);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div><div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span class=\"apexcharts-tooltip-marker\" style=\"background-color: rgb(116, 136, 146);\"></span><div class=\"apexcharts-tooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><div class=\"apexcharts-tooltip-y-group\"><span class=\"apexcharts-tooltip-text-y-label\"></span><span class=\"apexcharts-tooltip-text-y-value\"></span></div><div class=\"apexcharts-tooltip-goals-group\"><span class=\"apexcharts-tooltip-text-goals-label\"></span><span class=\"apexcharts-tooltip-text-goals-value\"></span></div><div class=\"apexcharts-tooltip-z-group\"><span class=\"apexcharts-tooltip-text-z-label\"></span><span class=\"apexcharts-tooltip-text-z-value\"></span></div></div></div></div><div class=\"apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light\"><div class=\"apexcharts-xaxistooltip-text\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div></div><div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light\"><div class=\"apexcharts-yaxistooltip-text\"></div></div></div></div>
                  </div>
                  <div class=\"tab-pane\" id=\"analytics-tab-2-pane\" role=\"tabpanel\" aria-labelledby=\"analytics-tab-2\" tabindex=\"0\">
                    <div id=\"overview-chart-2\" style=\"min-height: 245px;\"><div id=\"apexchartsbdkjvav5k\" class=\"apexcharts-canvas apexchartsbdkjvav5k\" style=\"width: 0px; height: 230px;\"><svg id=\"SvgjsSvg5803\" width=\"0\" height=\"230\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" class=\"apexcharts-svg\" xmlns:data=\"ApexChartsNS\" transform=\"translate(0, 0)\" style=\"background: transparent;\"><foreignObject x=\"0\" y=\"0\" width=\"0\" height=\"230\"><div class=\"apexcharts-legend\" xmlns=\"http://www.w3.org/1999/xhtml\"></div></foreignObject><g id=\"SvgjsG5805\" class=\"apexcharts-inner apexcharts-graphical\"><defs id=\"SvgjsDefs5804\"></defs></g></svg></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class=\"col-md-12 col-xl-12\">
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
              <div class=\"card-body py-4 px-0\">
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
                          <button class=\"btn avtar avtar-xs btn-light-danger\"><a style=\"text-decoration: none;color:inherit;\" href=\"{{ path('app_user_delete', {'id': user.id}) }}\"><i class=\"ti ti-x\"></i></a></button>
                          <button class=\"btn avtar avtar-xs btn-light-success\"><a style=\"text-decoration: none;color:inherit;\" href=\"{{ path('app_user_show', {'id': user.id}) }}\"><i class=\"ti ti-eye\"></i></a></button>
                        </td>
                      </tr>
                    {% endfor %}
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>

{% endblock %}
", "home/index.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/home/index.html.twig");
    }
}
