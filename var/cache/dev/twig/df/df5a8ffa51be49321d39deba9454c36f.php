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

/* blog/edit.html.twig */
class __TwigTemplate_235275777ac284c3f536f58253d9cb92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/edit.html.twig", 1);
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

        yield "Edit Blog Post";
        
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
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
<a class=\"custom-nav\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\">Mijn Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 17
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
                // line 18
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_add");
                yield "\">Toevoegen</a>
                        </li>
                    ";
            }
            // line 21
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Uitloggen</a>
                ";
        } else {
            // line 23
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Inloggen</a>
                ";
        }
        // line 25
        yield "            </ul>
        </div>
    </div>
</nav>


    <div class=\"container mt-5\">
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"text-center text-primary mb-4\">Bewerk Blog</h1>

            ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                <div class=\"mb-3\">
                    <label for=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "\" class=\"form-label\">Titel</label>
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <div class=\"mb-3\">
                    <label for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\" class=\"form-label\">Inhoud</label>
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Alle Posts
                    </a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-save\"></i> Bewerking Opslaan
                    </button>
                </div>
            ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
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
        return "blog/edit.html.twig";
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
        return array (  188 => 53,  178 => 46,  172 => 43,  168 => 42,  161 => 38,  157 => 37,  152 => 35,  140 => 25,  134 => 23,  128 => 21,  122 => 18,  119 => 17,  116 => 16,  114 => 15,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Blog Post{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
<a class=\"custom-nav\" href=\"{{ path('blog_mainpage') }}\">Mijn Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                {% if app.user %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('blog_add') }}\">Toevoegen</a>
                        </li>
                    {% endif %}
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Uitloggen</a>
                {% else %}
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Inloggen</a>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>


    <div class=\"container mt-5\">
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"text-center text-primary mb-4\">Bewerk Blog</h1>

            {{ form_start(form, {'attr': {'class': 'needs-validation'}}) }}
                <div class=\"mb-3\">
                    <label for=\"{{ form.title.vars.id }}\" class=\"form-label\">Titel</label>
                    {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"mb-3\">
                    <label for=\"{{ form.description.vars.id }}\" class=\"form-label\">Inhoud</label>
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 5}}) }}
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('blog_mainpage') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Alle Posts
                    </a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-save\"></i> Bewerking Opslaan
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "blog/edit.html.twig", "C:\\Users\\diego\\OneDrive\\Bureaublad\\blog\\templates\\blog\\edit.html.twig");
    }
}
