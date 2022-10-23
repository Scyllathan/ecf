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

/* client/_client-mini.html.twig */
class __TwigTemplate_b93b9c613c498808f878d104281b0450 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client-mini.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_client-mini.html.twig"));

        // line 1
        echo "<div class=\"col-12 col-lg-6 client\">
    <div class=\"bg-light yellow-border rounded my-2 my-sm-3 px-1 py-2 p-sm-2 h-25 d-flex
                                flex-column
                                justify-content-between\">
        <div class=\"row\">
            <div class=\"col-4 col-sm-3\">
                ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 7, $this->source); })()), "logoUrl", [], "any", false, false, false, 7)) {
            // line 8
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 8, $this->source); })()), "logoUrl", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"logo\"
                         width=\"100\" height=\"100\">
                ";
        } else {
            // line 11
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-100x100.png"), "html", null, true);
            echo "\" alt=\"logo\">
                ";
        }
        // line 13
        echo "            </div>
            <div class=\"col-8 col-sm-9 \">
                <div>
                    <p class=\"id mb-1 ps-2\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                    <p class=\"name mb-1 ps-2\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                    <p class=\"ps-2\"><a href=\"http://";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                                       target=\"_blank\" class=\"mb-1\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 19, $this->source); })()), "url", [], "any", false, false, false, 19), "html", null, true);
        // line 20
        echo "</a></p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <span class=\"d-md-inline d-none\">
                <p class=\"my-1 px-3\">";
        // line 26
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 26, $this->source); })()), "shortDescription", [], "any", false, false, false, 26), 0, 100), "html", null, true);
        echo "
                    ";
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 27, $this->source); })()), "shortDescription", [], "any", false, false, false, 27)) > 100)) {
            echo "...";
        }
        // line 28
        echo "                </p>
            </span>
        </div>
        <div class=\"row\">
            <div class=\"col-4 d-flex justify-content-start\">
                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 33, $this->source); })()), "form", [], "any", false, false, false, 33), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 34, $this->source); })()), "form", [], "any", false, false, false, 34), "active", [], "any", false, false, false, 34), 'row');
        echo "
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 35, $this->source); })()), "form", [], "any", false, false, false, 35), 'form_end');
        echo "
            </div>
            <div class=\"col-8 d-flex justify-content-end\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\" role=\"button\"
                   class=\"btn btn-warning me-1 me-sm-0\">
                    Gérer les clubs
                </a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/_client-mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  116 => 35,  112 => 34,  108 => 33,  101 => 28,  97 => 27,  93 => 26,  85 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 13,  60 => 11,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 col-lg-6 client\">
    <div class=\"bg-light yellow-border rounded my-2 my-sm-3 px-1 py-2 p-sm-2 h-25 d-flex
                                flex-column
                                justify-content-between\">
        <div class=\"row\">
            <div class=\"col-4 col-sm-3\">
                {% if client.logoUrl %}
                    <img src=\"{{ client.logoUrl }}\" alt=\"logo\"
                         width=\"100\" height=\"100\">
                {% else %}
                    <img src=\"{{ asset('images/logo-100x100.png') }}\" alt=\"logo\">
                {% endif %}
            </div>
            <div class=\"col-8 col-sm-9 \">
                <div>
                    <p class=\"id mb-1 ps-2\">{{ client.id }}</p>
                    <p class=\"name mb-1 ps-2\">{{ client.name }}</p>
                    <p class=\"ps-2\"><a href=\"http://{{ client.url }}\"
                                       target=\"_blank\" class=\"mb-1\">{{ client
                            .url }}</a></p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <span class=\"d-md-inline d-none\">
                <p class=\"my-1 px-3\">{{ client.shortDescription[:100] }}
                    {% if client.shortDescription | length > 100 %}...{% endif %}
                </p>
            </span>
        </div>
        <div class=\"row\">
            <div class=\"col-4 d-flex justify-content-start\">
                {{ form_start(client.form) }}
                {{ form_row(client.form.active) }}
                {{ form_end(client.form) }}
            </div>
            <div class=\"col-8 d-flex justify-content-end\">
                <a href=\"{{ path('app_client', { 'id': client.id }) }}\" role=\"button\"
                   class=\"btn btn-warning me-1 me-sm-0\">
                    Gérer les clubs
                </a>
            </div>
        </div>
    </div>
</div>", "client/_client-mini.html.twig", "C:\\xampp\\apps\\ecf\\templates\\client\\_client-mini.html.twig");
    }
}
