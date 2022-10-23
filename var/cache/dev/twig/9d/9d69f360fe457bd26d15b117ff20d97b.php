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

/* default/_navbar.html.twig */
class __TwigTemplate_7742f8d6ef4badbe6c87952cf5ecf3af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_navbar.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <nav class=\"navbar fixed-top navbar-warning bg-warning\">
        <div class=\"container-fluid d-flex justify-content-end\">
                <span class=\"mx-3 text-dark d-sm-inline d-none\">Utilisateur connecté : ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "userIdentifier", [], "any", false, false, false, 4), "html", null, true);
            // line 5
            echo "</span>
            ";
            // line 6
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "roles", [], "any", false, false, false, 6))) {
                // line 7
                echo "            <a class=\"text-dark mx-3 text-decoration-none font-title\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_list");
                // line 8
                echo "\"><b>Partenaires</b></a>
            ";
            }
            // line 10
            echo "            <a class=\"text-dark text-decoration-none font-title\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            // line 11
            echo "\"><b>Déconnexion</b></a>
        </div>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  63 => 10,  59 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
    <nav class=\"navbar fixed-top navbar-warning bg-warning\">
        <div class=\"container-fluid d-flex justify-content-end\">
                <span class=\"mx-3 text-dark d-sm-inline d-none\">Utilisateur connecté : {{app.user
                    .userIdentifier}}</span>
            {% if 'ROLE_ADMIN' in app.user.roles %}
            <a class=\"text-dark mx-3 text-decoration-none font-title\" href=\"{{ path('app_client_list')
            }}\"><b>Partenaires</b></a>
            {% endif %}
            <a class=\"text-dark text-decoration-none font-title\" href=\"{{ path('app_logout')
            }}\"><b>Déconnexion</b></a>
        </div>
    </nav>
{% endif %}", "default/_navbar.html.twig", "C:\\xampp\\apps\\ecf\\templates\\default\\_navbar.html.twig");
    }
}
