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

/* filter/_branch-filter.html.twig */
class __TwigTemplate_ad3320b3c7ff7dfc689251a93198c1c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_branch-filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_branch-filter.html.twig"));

        // line 1
        echo "<div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 mb-3\">
                    <div class=\"mb-3\">
                        <input type=\"text\" id=\"branchResearch\" placeholder=\"Id de la structure\"
                               class=\"form-control\" onkeyup=\"branchIdFilter()\">
                    </div>
                    <div>
                        <button type=\"button\" class=\"btn btn-warning me-2\"
                                onclick=\"activeStatus()\">Actif</button>
                        <button type=\"button\" class=\"btn btn-warning me-2\"
                                onclick=\"inactiveStatus()\">Inactif</button>
                        <button type=\"button\" class=\"btn btn-warning\"
                                onclick=\"allStatus()\">Toutes</button>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 mb-3 d-flex flex-md-column align-items-end\">
                    <div>
                        ";
        // line 21
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_client_grants", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" role=\"button\" class=\"btn btn-warning\"
                               onclick=\"\">Ouvrir l'accès à un nouveau club</a>
                        ";
        }
        // line 25
        echo "                    </div>
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
        return "filter/_branch-filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  67 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 mb-3\">
                    <div class=\"mb-3\">
                        <input type=\"text\" id=\"branchResearch\" placeholder=\"Id de la structure\"
                               class=\"form-control\" onkeyup=\"branchIdFilter()\">
                    </div>
                    <div>
                        <button type=\"button\" class=\"btn btn-warning me-2\"
                                onclick=\"activeStatus()\">Actif</button>
                        <button type=\"button\" class=\"btn btn-warning me-2\"
                                onclick=\"inactiveStatus()\">Inactif</button>
                        <button type=\"button\" class=\"btn btn-warning\"
                                onclick=\"allStatus()\">Toutes</button>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 mb-3 d-flex flex-md-column align-items-end\">
                    <div>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            <a href=\"{{ path('app_new_client_grants', { 'id': client.id }) }}\" role=\"button\" class=\"btn btn-warning\"
                               onclick=\"\">Ouvrir l'accès à un nouveau club</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "filter/_branch-filter.html.twig", "C:\\xampp\\apps\\ecf\\templates\\filter\\_branch-filter.html.twig");
    }
}
