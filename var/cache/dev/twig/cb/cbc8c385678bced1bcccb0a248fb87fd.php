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

/* branch/_branch.html.twig */
class __TwigTemplate_43e30d8241d8d6f3bfb6312b9042c594 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch/_branch.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch/_branch.html.twig"));

        // line 1
        echo "<div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded mt-2 mt-sm-3 p-3\">
            <div class=\"row mb-2\">
                <div  class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-100x100.png"), "html", null, true);
            echo "\" alt=\"logo\">
                    ";
        }
        // line 12
        echo "                </div>
                <div class=\"col mb-2\">
                    <h2 class=\"mb-1 px-2 h5 font-title\"><b>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</b></h2>
                    <p class=\"mb-1 px-2\"><u>Id de la structure</u> : <span class=\"branchId\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        // line 16
        echo "</span></p>
                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 17, $this->source); })()), "installPerm", [], "any", false, false, false, 17)) {
            // line 18
            echo "                        <p class=\"px-2\"><u>Id des permissions</u> : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 18, $this->source); })()), "installPerm", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "                </div>
            </div>
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["branch"] ?? null), "grantsForm", [], "any", true, true, false, 22)) {
            // line 23
            echo "                <div class=\"row px-2\">
                    ";
            // line 24
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24))) {
                // line 25
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 25, $this->source); })()), "grantsForm", [], "any", false, false, false, 25), 'form_start');
                echo "
                        ";
                // line 26
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 26, $this->source); })()), "grantsForm", [], "any", false, false, false, 26), "active", [], "any", false, false, false, 26), 'row', ["attr" => ["onclick" => "submit()"]]);
                echo "
                        ";
                // line 27
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 27, $this->source); })()), "grantsForm", [], "any", false, false, false, 27), 'form_end', ["render_rest" => false]);
                echo "
                    ";
            } else {
                // line 29
                echo "                        <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"clientGrants_active\"
                                   ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 31, $this->source); })()), "clientGrants", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31)) {
                    echo "checked";
                }
                echo " disabled>
                            <label class=\"form-check-label\" for=\"clientGrants_active\">Active</label>
                        </div>
                    ";
            }
            // line 35
            echo "                </div>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "branch/_branch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  126 => 35,  117 => 31,  113 => 29,  108 => 27,  104 => 26,  99 => 25,  97 => 24,  94 => 23,  92 => 22,  88 => 20,  82 => 18,  80 => 17,  77 => 16,  75 => 15,  69 => 14,  65 => 12,  59 => 10,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
    <div class=\"col-12\">
        <div class=\"bg-light yellow-border rounded mt-2 mt-sm-3 p-3\">
            <div class=\"row mb-2\">
                <div  class=\"col-5 col-lg-2 col-md-3 col-sm-4 mb-2\">
                    {% if client.logoUrl %}
                        <img src=\"{{ client.logoUrl }}\" alt=\"logo\"
                             width=\"100\" height=\"100\">
                    {% else %}
                        <img src=\"{{ asset('images/logo-100x100.png') }}\" alt=\"logo\">
                    {% endif %}
                </div>
                <div class=\"col mb-2\">
                    <h2 class=\"mb-1 px-2 h5 font-title\"><b>{{ client.name }} - {{ branch.name }}</b></h2>
                    <p class=\"mb-1 px-2\"><u>Id de la structure</u> : <span class=\"branchId\">{{ branch.id
                            }}</span></p>
                    {% if branch.installPerm %}
                        <p class=\"px-2\"><u>Id des permissions</u> : {{ branch.installPerm.id }}</p>
                    {% endif %}
                </div>
            </div>
            {% if branch.grantsForm is defined %}
                <div class=\"row px-2\">
                    {% if 'ROLE_ADMIN' in app.user.roles %}
                        {{ form_start(branch.grantsForm) }}
                        {{ form_row(branch.grantsForm.active, { 'attr': {'onclick': 'submit()'} }) }}
                        {{ form_end(branch.grantsForm, {'render_rest': false }) }}
                    {% else %}
                        <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"clientGrants_active\"
                                   {% if branch.clientGrants.active %}checked{% endif %} disabled>
                            <label class=\"form-check-label\" for=\"clientGrants_active\">Active</label>
                        </div>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
</div>", "branch/_branch.html.twig", "C:\\xampp\\apps\\ecf\\templates\\branch\\_branch.html.twig");
    }
}
