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

/* client/_client.html.twig */
class __TwigTemplate_5930b81ed5c589b7f064491a3900088c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client.html.twig"));

        // line 1
        echo "<div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-3\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
                    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 6, $this->source); })()), "logoUrl", [], "any", false, false, false, 6)) {
            // line 7
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 7, $this->source); })()), "logoUrl", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"logo\"
                             width=\"100\" height=\"100\">
                    ";
        } else {
            // line 10
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../images/logo-100x100.png"), "html", null, true);
            echo "\" alt=\"logo\">
                    ";
        }
        // line 12
        echo "                </div>
                <div class=\"col mb-2\">
                    <p class=\"mb-1\" id=\"clientId\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <h1 class=\"mb-1 h4 font-title\"><b>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</b></h1>
                    <a href=\"http://";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"row my-2\">
                <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 20, $this->source); })()), "shortDescription", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
            </div>
            <div class=\"row mt-2\">
                <div class=\"col\">
                    ";
        // line 24
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24))) {
            // line 25
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 25, $this->source); })()), 'form');
            echo "
                    ";
        } else {
            // line 27
            echo "                        <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"client_active\"
                                   ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "active", [], "any", false, false, false, 29)) {
                echo "checked";
            }
            echo " disabled>
                            <label class=\"form-check-label\" for=\"client_active\">Active</label>
                        </div>
                    ";
        }
        // line 33
        echo "                </div>
                ";
        // line 34
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "roles", [], "any", false, false, false, 34))) {
            // line 35
            echo "                <div class=\"col d-flex justify-content-end\">
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_more_about", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" role=\"button\" class=\"btn
                    btn-warning\">Plus
                        d'informations</a>
                </div>
                ";
        }
        // line 41
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  122 => 36,  119 => 35,  117 => 34,  114 => 33,  105 => 29,  101 => 27,  95 => 25,  93 => 24,  86 => 20,  77 => 16,  73 => 15,  69 => 14,  65 => 12,  59 => 10,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-3\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
            <div class=\"row\">
                <div class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
                    {% if client.logoUrl %}
                        <img src=\"{{ client.logoUrl }}\" alt=\"logo\"
                             width=\"100\" height=\"100\">
                    {% else %}
                        <img src=\"{{ asset('../../images/logo-100x100.png') }}\" alt=\"logo\">
                    {% endif %}
                </div>
                <div class=\"col mb-2\">
                    <p class=\"mb-1\" id=\"clientId\">{{ client.id }}</p>
                    <h1 class=\"mb-1 h4 font-title\"><b>{{ client.name }}</b></h1>
                    <a href=\"http://{{ client.url }}\" target=\"_blank\">{{ client.url }}</a>
                </div>
            </div>
            <div class=\"row my-2\">
                <p>{{ client.shortDescription }}</p>
            </div>
            <div class=\"row mt-2\">
                <div class=\"col\">
                    {% if 'ROLE_ADMIN' in app.user.roles %}
                        {{ form(clientForm) }}
                    {% else %}
                        <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"client_active\"
                                   {% if client.active %}checked{% endif %} disabled>
                            <label class=\"form-check-label\" for=\"client_active\">Active</label>
                        </div>
                    {% endif %}
                </div>
                {% if 'ROLE_ADMIN' in app.user.roles %}
                <div class=\"col d-flex justify-content-end\">
                    <a href=\"{{ path('app_more_about', { 'id': client.id }) }}\" role=\"button\" class=\"btn
                    btn-warning\">Plus
                        d'informations</a>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>", "client/_client.html.twig", "C:\\xampp\\apps\\ecf\\templates\\client\\_client.html.twig");
    }
}
