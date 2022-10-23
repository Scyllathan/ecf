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

/* client/more.html.twig */
class __TwigTemplate_361cb65db584a13fcdf8721163a3876d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/more.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/more.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/more.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - Plus d'informations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    <div class=\"container-md mt-5 px-0\">
        <div class=\"mt-5 px-sm-5\">
                <a role=\"button\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"btn btn-warning mt-3\">
                    << Retour
                </a>
        </div>
        <div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-3\">
            <div class=\"col-12\">
                <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
                    <div class=\"row\">
                        <div class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
                            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 17, $this->source); })()), "logoUrl", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "logoUrl", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"logo\"
                                     width=\"100\" height=\"100\">
                            ";
        } else {
            // line 21
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-100x100.png"), "html", null, true);
            echo "\" alt=\"logo\">
                            ";
        }
        // line 23
        echo "                        </div>
                        <div class=\"col\">
                            <p class=\"mb-1\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                            <h1 class=\"mb-1 h4 font-title\"><b>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</b></h1>
                            <a href=\"http://";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 27, $this->source); })()), "url", [], "any", false, false, false, 27), "html", null, true);
        echo "\" target=\"_blank\" class=\"mb-1\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 27, $this->source); })()), "url", [], "any", false, false, false, 27), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                    <div class=\"row\">
                        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 31, $this->source); })()), 'form');
        echo "
                    </div>
                    <div class=\"row\">
                        <p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 34, $this->source); })()), "fullDescription", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"row\">
                        <div>
                            <hr/>
                            <h2 class=\"font-title mb-1 h5\"><b>Contacts</b> :</h2>
                            <ul>
                                <li><u>DPO</u> : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 41, $this->source); })()), "dpo", [], "any", false, false, false, 41), "html", null, true);
        echo "</li>
                                <li><u>Contact technique</u> : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 42, $this->source); })()), "technicalContact", [], "any", false, false, false, 42), "html", null, true);
        echo "</li>
                                <li><u>Contact commercial</u> : ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 43, $this->source); })()), "commercialContact", [], "any", false, false, false, 43), "html", null, true);
        echo "</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div>
                            <hr/>
                            <h2 class=\"mb-1 h5 font-title\"><b>Structures</b> :</h2>
                            <ul>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 52, $this->source); })()), "branches", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 53
            echo "                                    <li class=\"font-title\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo " - Identifiant : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</b></li>
                                    <ul>
                                        <li><u>Manager</u> : ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "managerName", [], "any", false, false, false, 55), "html", null, true);
            echo "</li>
                                        <li><u>Adresse</u> : ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["branch"], "address", [], "any", false, false, false, 56), "html", null, true);
            echo "</li>
                                    </ul>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 59,  193 => 56,  189 => 55,  181 => 53,  177 => 52,  165 => 43,  161 => 42,  157 => 41,  147 => 34,  141 => 31,  132 => 27,  128 => 26,  124 => 25,  120 => 23,  114 => 21,  107 => 18,  105 => 17,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ client.name }} - Plus d'informations{% endblock %}

{% block body %}
    <div class=\"container-md mt-5 px-0\">
        <div class=\"mt-5 px-sm-5\">
                <a role=\"button\" href=\"{{ path('app_client', { 'id': client.id }) }}\" class=\"btn btn-warning mt-3\">
                    << Retour
                </a>
        </div>
        <div class=\"row d-flex justify-content-center gx-5 px-sm-5 mt-3\">
            <div class=\"col-12\">
                <div class=\"bg-light yellow-border rounded my-2 my-sm-3 p-3\">
                    <div class=\"row\">
                        <div class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
                            {% if client.logoUrl %}
                                <img src=\"{{ client.logoUrl }}\" alt=\"logo\"
                                     width=\"100\" height=\"100\">
                            {% else %}
                                <img src=\"{{ asset('images/logo-100x100.png') }}\" alt=\"logo\">
                            {% endif %}
                        </div>
                        <div class=\"col\">
                            <p class=\"mb-1\">{{ client.id }}</p>
                            <h1 class=\"mb-1 h4 font-title\"><b>{{ client.name }}</b></h1>
                            <a href=\"http://{{ client.url }}\" target=\"_blank\" class=\"mb-1\">{{ client.url }}</a>
                        </div>
                    </div>
                    <div class=\"row\">
                        {{ form(clientForm) }}
                    </div>
                    <div class=\"row\">
                        <p>{{ client.fullDescription }}</p>
                    </div>
                    <div class=\"row\">
                        <div>
                            <hr/>
                            <h2 class=\"font-title mb-1 h5\"><b>Contacts</b> :</h2>
                            <ul>
                                <li><u>DPO</u> : {{ client.dpo }}</li>
                                <li><u>Contact technique</u> : {{ client.technicalContact }}</li>
                                <li><u>Contact commercial</u> : {{ client.commercialContact }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div>
                            <hr/>
                            <h2 class=\"mb-1 h5 font-title\"><b>Structures</b> :</h2>
                            <ul>
                                {% for branch in client.branches %}
                                    <li class=\"font-title\"><b>{{ branch.name }} - Identifiant : {{ branch.id }}</b></li>
                                    <ul>
                                        <li><u>Manager</u> : {{ branch.managerName }}</li>
                                        <li><u>Adresse</u> : {{ branch.address }}</li>
                                    </ul>
                                {% endfor %}
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "client/more.html.twig", "C:\\xampp\\apps\\ecf\\templates\\client\\more.html.twig");
    }
}
