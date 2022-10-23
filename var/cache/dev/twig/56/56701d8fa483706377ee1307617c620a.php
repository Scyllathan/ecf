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

/* branch/_branch-perms.html.twig */
class __TwigTemplate_aab08f78c47a6426dfd46e7d67ba027d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch/_branch-perms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "branch/_branch-perms.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["branch"] ?? null), "installForm", [], "any", true, true, false, 1)) {
            // line 2
            echo "    <div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
        <div class=\"col-12\">
            <div class=\"bg-light yellow-border rounded mt-1 mb-2 mb-sm-3 p-3 pb-0\">
                <div class=\"row\">
                    <div class=\" d-flex justify-content-end\">
                        <p data-bs-toggle=\"collapse\" data-bs-target=\"#";
            // line 7
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), [" " => ""]), "html", null, true);
            echo "\" aria-expanded=\"false\"
                           aria-controls=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" onclick=\"plusMinusChange()\">
                            Permissions
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\"
                                 class=\"bi bi-plus-circle plus\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\"
                                 class=\"bi bi-dash-circle minus\" style=\"display: none\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z\"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class=\"row collapse\" id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), [" " => ""]), "html", null, true);
            echo "\">
                    <div class=\"col-12 col-md-6\">
                        ";
            // line 25
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25))) {
                // line 26
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 26, $this->source); })()), "installForm", [], "any", false, false, false, 26), 'form_start');
                echo "
                            ";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 27, $this->source); })()), "installForm", [], "any", false, false, false, 27), "membersRead", [], "any", false, false, false, 27), 'row');
                echo "
                            ";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 28, $this->source); })()), "installForm", [], "any", false, false, false, 28), "membersWrite", [], "any", false, false, false, 28), 'row');
                echo "
                            ";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 29, $this->source); })()), "installForm", [], "any", false, false, false, 29), "membersAdd", [], "any", false, false, false, 29), 'row');
                echo "
                            ";
                // line 30
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 30, $this->source); })()), "installForm", [], "any", false, false, false, 30), "membersProductsAdd", [], "any", false, false, false, 30), 'row');
                echo "
                            ";
                // line 31
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 31, $this->source); })()), "installForm", [], "any", false, false, false, 31), "membersPaymentSchedulesRead", [], "any", false, false, false, 31), 'row');
                echo "
                        ";
            } else {
                // line 33
                echo "                            <form class=\"mb-3\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersRead\"
                                           ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 36, $this->source); })()), "installPerm", [], "any", false, false, false, 36), "membersRead", [], "any", false, false, false, 36)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersRead\">membersRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersWrite\"
                                           ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 41, $this->source); })()), "installPerm", [], "any", false, false, false, 41), "membersWrite", [], "any", false, false, false, 41)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersWrite\">membersWrite</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersAdd\"
                                           ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 46, $this->source); })()), "installPerm", [], "any", false, false, false, 46), "membersAdd", [], "any", false, false, false, 46)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersAdd\">membersAdd</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersProductsAdd\"
                                           ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 51, $this->source); })()), "installPerm", [], "any", false, false, false, 51), "membersProductsAdd", [], "any", false, false, false, 51)) {
                    echo "checked";
                }
                // line 52
                echo "                                           disabled>
                                    <label class=\"form-check-label\" for=\"membersProductsAdd\">membersProductsAdd</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersPaymentSchedulesRead\"
                                           ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 57, $this->source); })()), "installPerm", [], "any", false, false, false, 57), "membersPaymentSchedulesRead", [], "any", false, false, false, 57)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersPaymentSchedulesRead\">membersPaymentSchedulesRead</label>
                                </div>
                            </form>
                        ";
            }
            // line 62
            echo "                    </div>
                    <div class=\"col-12 col-md-6 mb-2\">
                        ";
            // line 64
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "roles", [], "any", false, false, false, 64))) {
                // line 65
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 65, $this->source); })()), "installForm", [], "any", false, false, false, 65), "membersStatisticRead", [], "any", false, false, false, 65), 'row');
                echo "
                            ";
                // line 66
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 66, $this->source); })()), "installForm", [], "any", false, false, false, 66), "membersSubscriptionRead", [], "any", false, false, false, 66), 'row');
                echo "
                            ";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 67, $this->source); })()), "installForm", [], "any", false, false, false, 67), "membersSchedulesRead", [], "any", false, false, false, 67), 'row');
                echo "
                            ";
                // line 68
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 68, $this->source); })()), "installForm", [], "any", false, false, false, 68), "membersSchedulesWrite", [], "any", false, false, false, 68), 'row');
                echo "
                            ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 69, $this->source); })()), "installForm", [], "any", false, false, false, 69), "paymentDayRead", [], "any", false, false, false, 69), 'row');
                echo "
                            ";
                // line 70
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 70, $this->source); })()), "installForm", [], "any", false, false, false, 70), 'form_end');
                echo "
                        ";
            } else {
                // line 72
                echo "                            <form class=\"mb-3\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersStatisticRead\"
                                           ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 75, $this->source); })()), "installPerm", [], "any", false, false, false, 75), "membersStatisticRead", [], "any", false, false, false, 75)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersStatisticRead\">membersStatisticRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSubscriptionRead\"
                                           ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 80, $this->source); })()), "installPerm", [], "any", false, false, false, 80), "membersSubscriptionRead", [], "any", false, false, false, 80)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersSubscriptionRead\">membersSubscriptionRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSchedulesRead\"
                                           ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 85, $this->source); })()), "installPerm", [], "any", false, false, false, 85), "membersSchedulesRead", [], "any", false, false, false, 85)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"membersSchedulesRead\">membersSchedulesRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSchedulesWrite\"
                                           ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 90, $this->source); })()), "installPerm", [], "any", false, false, false, 90), "membersSchedulesWrite", [], "any", false, false, false, 90)) {
                    echo "checked";
                }
                // line 91
                echo "                                           disabled>
                                    <label class=\"form-check-label\" for=\"membersSchedulesWrite\">membersSchedulesWrite</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"paymentDayRead\"
                                           ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["branch"]) || array_key_exists("branch", $context) ? $context["branch"] : (function () { throw new RuntimeError('Variable "branch" does not exist.', 96, $this->source); })()), "installPerm", [], "any", false, false, false, 96), "paymentDayRead", [], "any", false, false, false, 96)) {
                    echo "checked";
                }
                echo " disabled>
                                    <label class=\"form-check-label\" for=\"paymentDayRead\">paymentDayRead</label>
                                </div>
                            </form>
                        ";
            }
            // line 101
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "branch/_branch-perms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 101,  241 => 96,  234 => 91,  230 => 90,  220 => 85,  210 => 80,  200 => 75,  195 => 72,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  174 => 66,  169 => 65,  167 => 64,  163 => 62,  153 => 57,  146 => 52,  142 => 51,  132 => 46,  122 => 41,  112 => 36,  107 => 33,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  79 => 25,  74 => 23,  56 => 8,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if branch.installForm is defined %}
    <div class=\"row d-flex justify-content-center gx-5 px-sm-5\">
        <div class=\"col-12\">
            <div class=\"bg-light yellow-border rounded mt-1 mb-2 mb-sm-3 p-3 pb-0\">
                <div class=\"row\">
                    <div class=\" d-flex justify-content-end\">
                        <p data-bs-toggle=\"collapse\" data-bs-target=\"#{{ branch.name|replace({' ': ''}) }}\" aria-expanded=\"false\"
                           aria-controls=\"{{ branch.name }}\" onclick=\"plusMinusChange()\">
                            Permissions
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\"
                                 class=\"bi bi-plus-circle plus\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\"
                                 class=\"bi bi-dash-circle minus\" style=\"display: none\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z\"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class=\"row collapse\" id=\"{{ branch.name|replace({' ': ''}) }}\">
                    <div class=\"col-12 col-md-6\">
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            {{ form_start(branch.installForm) }}
                            {{ form_row(branch.installForm.membersRead) }}
                            {{ form_row(branch.installForm.membersWrite) }}
                            {{ form_row(branch.installForm.membersAdd) }}
                            {{ form_row(branch.installForm.membersProductsAdd) }}
                            {{ form_row(branch.installForm.membersPaymentSchedulesRead) }}
                        {% else %}
                            <form class=\"mb-3\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersRead\"
                                           {% if branch.installPerm.membersRead %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersRead\">membersRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersWrite\"
                                           {% if branch.installPerm.membersWrite %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersWrite\">membersWrite</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersAdd\"
                                           {% if branch.installPerm.membersAdd %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersAdd\">membersAdd</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersProductsAdd\"
                                           {% if branch.installPerm.membersProductsAdd %}checked{% endif %}
                                           disabled>
                                    <label class=\"form-check-label\" for=\"membersProductsAdd\">membersProductsAdd</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersPaymentSchedulesRead\"
                                           {% if branch.installPerm.membersPaymentSchedulesRead%}checked{%endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersPaymentSchedulesRead\">membersPaymentSchedulesRead</label>
                                </div>
                            </form>
                        {% endif %}
                    </div>
                    <div class=\"col-12 col-md-6 mb-2\">
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            {{ form_row(branch.installForm.membersStatisticRead) }}
                            {{ form_row(branch.installForm.membersSubscriptionRead) }}
                            {{ form_row(branch.installForm.membersSchedulesRead) }}
                            {{ form_row(branch.installForm.membersSchedulesWrite) }}
                            {{ form_row(branch.installForm.paymentDayRead) }}
                            {{ form_end(branch.installForm) }}
                        {% else %}
                            <form class=\"mb-3\">
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersStatisticRead\"
                                           {% if branch.installPerm.membersStatisticRead %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersStatisticRead\">membersStatisticRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSubscriptionRead\"
                                           {% if branch.installPerm.membersSubscriptionRead %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersSubscriptionRead\">membersSubscriptionRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSchedulesRead\"
                                           {% if branch.installPerm.membersSchedulesRead %}checked{% endif %} disabled>
                                    <label class=\"form-check-label\" for=\"membersSchedulesRead\">membersSchedulesRead</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"membersSchedulesWrite\"
                                           {% if branch.installPerm.membersSchedulesWrite %}checked{% endif %}
                                           disabled>
                                    <label class=\"form-check-label\" for=\"membersSchedulesWrite\">membersSchedulesWrite</label>
                                </div>
                                <div class=\"form-check form-switch\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"paymentDayRead\"
                                           {% if branch.installPerm.paymentDayRead %}checked{%endif %} disabled>
                                    <label class=\"form-check-label\" for=\"paymentDayRead\">paymentDayRead</label>
                                </div>
                            </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}", "branch/_branch-perms.html.twig", "C:\\xampp\\apps\\ecf\\templates\\branch\\_branch-perms.html.twig");
    }
}
