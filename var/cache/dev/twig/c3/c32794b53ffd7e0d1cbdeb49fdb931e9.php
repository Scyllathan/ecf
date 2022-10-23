<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* filter/_client-filter.html.twig */
class __TwigTemplate_ad7a41abbb62a45d5d1e2526de2948c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_client-filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_client-filter.html.twig"));

        // line 1
        echo "<div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 mb-3\">
                    <input type=\"text\" id=\"nameResearch\" placeholder=\"Nom du partenaire\"
                           class=\"form-control w-75\" onkeyup=\"filterName()\">
                </div>
                <div class=\"col-12 col-md-6 mb-3 d-flex justify-content-md-end\">
                    <input type=\"text\" id=\"idResearch\" placeholder=\"Identifiant du partenaire\"
                           class=\"form-control w-75\" onkeyup=\"filterId()\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"activeStatus()\">Actif
                    </button>
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"inactiveStatus()\">Inactif
                    </button>
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"allStatus()\">Tous
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "filter/_client-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 mb-3\">
                    <input type=\"text\" id=\"nameResearch\" placeholder=\"Nom du partenaire\"
                           class=\"form-control w-75\" onkeyup=\"filterName()\">
                </div>
                <div class=\"col-12 col-md-6 mb-3 d-flex justify-content-md-end\">
                    <input type=\"text\" id=\"idResearch\" placeholder=\"Identifiant du partenaire\"
                           class=\"form-control w-75\" onkeyup=\"filterId()\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"activeStatus()\">Actif
                    </button>
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"inactiveStatus()\">Inactif
                    </button>
                    <button type=\"button\" class=\"btn btn-warning\"
                            onclick=\"allStatus()\">Tous
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>", "filter/_client-filter.html.twig", "C:\\xampp\\apps\\ecf\\templates\\filter\\_client-filter.html.twig");
    }
}
