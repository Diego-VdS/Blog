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
use Twig\TemplateWrapper;

/* login/login.html.twig */
class __TwigTemplate_94e53c767a9a58dede3290736eade690 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card shadow-lg p-4\" style=\"max-width: 400px; width: 100%;\">
        <div class=\"card-body\">
        
            ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            yield "                <h2 class=\"text-center mb-4\">Signed in allready</h2>
            ";
        }
        // line 13
        yield "            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            yield "                <h2 class=\"text-center mb-4\">Sign In</h2>
            ";
        }
        // line 16
        yield "
            ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            yield "</div>
            ";
        }
        // line 20
        yield "
            ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "                <div class=\"alert alert-info text-center\">
                    You are logged in as <strong>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            yield "</strong>.
                    <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-sm btn-outline-danger\">Logout</a>
                </div>
            ";
        }
        // line 27
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            yield "
            <form method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"username\" class=\"form-label\">Email</label>
                    <input type=\"email\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
            yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                </div>

                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Password</label>
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">

                <div class=\"d-grid\">
                    <button class=\"btn btn-primary btn-lg\" type=\"submit\">Sign in</button>
                </div>
            </form>
                        ";
        }
        // line 47
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  177 => 47,  167 => 40,  156 => 32,  150 => 28,  148 => 27,  142 => 24,  138 => 23,  135 => 22,  133 => 21,  130 => 20,  124 => 18,  122 => 17,  119 => 16,  115 => 14,  112 => 13,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center vh-100\">
    <div class=\"card shadow-lg p-4\" style=\"max-width: 400px; width: 100%;\">
        <div class=\"card-body\">
        
            {% if app.user %}
                <h2 class=\"text-center mb-4\">Signed in allready</h2>
            {% endif %}
            {% if not app.user %}
                <h2 class=\"text-center mb-4\">Sign In</h2>
            {% endif %}

            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"alert alert-info text-center\">
                    You are logged in as <strong>{{ app.user.userIdentifier }}</strong>.
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm btn-outline-danger\">Logout</a>
                </div>
            {% endif %}
{% if not app.user %}

            <form method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"username\" class=\"form-label\">Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                </div>

                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Password</label>
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"d-grid\">
                    <button class=\"btn btn-primary btn-lg\" type=\"submit\">Sign in</button>
                </div>
            </form>
                        {% endif %}

        </div>
    </div>
</div>
{% endblock %}
", "login/login.html.twig", "C:\\Users\\diego\\OneDrive\\Bureaublad\\blog\\templates\\login\\login.html.twig");
    }
}
