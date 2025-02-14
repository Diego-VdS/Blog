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

/* blog/add.html.twig */
class __TwigTemplate_ffb14b0335220339efc614cc0184b602 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/add.html.twig", 1);
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

        yield "Add a New Blog Post";
        
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
        yield "
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
<a class=\"custom-nav\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\">Mijn Blog</a>
        <div class=\"navbar-collapse\" id=\"navbarNav\">
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
    <div class=\"card shadow-lg\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Voeg een Nieuw Blogbericht Toe</h2>
        </div>
        <div class=\"card-body\">
            ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "true"]]);
        yield "

            <div class=\"mb-3\">
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titel"]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Schrijf een titel"]]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Inhoud"]);
        yield "
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "rows" => "5", "placeholder" => "Schrijf hier je inhoud..."]]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'errors');
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i> Opslaan</button>
            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\" class=\"btn btn-secondary\"><i class=\"fas fa-arrow-left\"></i> Alle Posts</a>

            ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
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
        return "blog/add.html.twig";
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
        return array (  193 => 52,  188 => 50,  181 => 46,  177 => 45,  173 => 44,  166 => 40,  162 => 39,  158 => 38,  152 => 35,  140 => 25,  134 => 23,  128 => 21,  122 => 18,  119 => 17,  116 => 16,  114 => 15,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add a New Blog Post{% endblock %}

{% block body %}

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
<a class=\"custom-nav\" href=\"{{ path('blog_mainpage') }}\">Mijn Blog</a>
        <div class=\"navbar-collapse\" id=\"navbarNav\">
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
    <div class=\"card shadow-lg\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Voeg een Nieuw Blogbericht Toe</h2>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'true'}}) }}

            <div class=\"mb-3\">
                {{ form_label(form.title, 'Titel', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Schrijf een titel'}}) }}
                {{ form_errors(form.title) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.description, 'Inhoud', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '5', 'placeholder': 'Schrijf hier je inhoud...'}}) }}
                {{ form_errors(form.description) }}
            </div>

            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i> Opslaan</button>
            <a href=\"{{ path('blog_mainpage') }}\" class=\"btn btn-secondary\"><i class=\"fas fa-arrow-left\"></i> Alle Posts</a>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "blog/add.html.twig", "C:\\Users\\diego\\OneDrive\\Bureaublad\\blog\\templates\\blog\\add.html.twig");
    }
}
