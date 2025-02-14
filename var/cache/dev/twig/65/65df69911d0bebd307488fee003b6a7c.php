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

/* blog/index.html.twig */
class __TwigTemplate_7c185d8b6c1bef35c19a43b66c571eb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        yield "Blog Overview";
        
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
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\">Mijn Blog</a>
        <div class=\"navbar-collapse\" id=\"navbarNav\">
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 18
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
                // line 19
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_add");
                yield "\">Toevoegen</a>
                        </li>
                    ";
            }
            // line 22
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Uitloggen</a>
                ";
        } else {
            // line 24
            yield "                    <a class=\"nav-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Inloggen</a>
                ";
        }
        // line 26
        yield "            </ul>
        </div>
    </div>
</nav>

<div class=\"container my-4\">
    <h1 class=\"text-center mb-4\">Blogberichten</h1>
    ";
        // line 33
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "        <div class=\"alert alert-info\" role=\"alert\">
            Geen berichten beschikbaar.
        </div>
    ";
        } else {
            // line 38
            yield "        <div class=\"row\">
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 40
                yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card position-relative\">
                        <div class=\"card-body\">
                            <p class=\"text-muted text-center\">
                                Gepubliceerd op ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 44), "F j, Y"), "html", null, true);
                yield " 
                            </p>
                            <h5 class=\"card-title\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 46))), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 47), 0, 200), "html", null, true);
                yield "...</p>
                            <a href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Lees verder</a>

                            ";
                // line 50
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 51
                    yield "                                <div class=\"position-absolute top-0 end-0 p-2\">
                                    <a href=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    yield "\" class=\"btn btn-warning btn-sm\" title=\"Edit\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <form action=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" method=\"POST\" class=\"d-inline-block\" onsubmit=\"return confirm('Bent u zeker dat u deze Post wilt verwijderen?')\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Delete\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                }
                // line 62
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "        </div>
    ";
        }
        // line 68
        yield "</div>
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
        return "blog/index.html.twig";
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
        return array (  223 => 68,  219 => 66,  210 => 62,  200 => 55,  194 => 52,  191 => 51,  189 => 50,  184 => 48,  180 => 47,  176 => 46,  171 => 44,  165 => 40,  161 => 39,  158 => 38,  152 => 34,  150 => 33,  141 => 26,  135 => 24,  129 => 22,  123 => 19,  120 => 18,  117 => 17,  115 => 16,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog Overview{% endblock %}

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

<div class=\"container my-4\">
    <h1 class=\"text-center mb-4\">Blogberichten</h1>
    {% if posts is empty %}
        <div class=\"alert alert-info\" role=\"alert\">
            Geen berichten beschikbaar.
        </div>
    {% else %}
        <div class=\"row\">
            {% for post in posts %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card position-relative\">
                        <div class=\"card-body\">
                            <p class=\"text-muted text-center\">
                                Gepubliceerd op {{ post.createdAt|date('F j, Y') }} 
                            </p>
                            <h5 class=\"card-title\">{{ post.title|upper|trim }}</h5>
                            <p class=\"card-text\">{{ post.description|slice(0, 200) }}...</p>
                            <a href=\"{{ path('blog_show', {id: post.id}) }}\" class=\"btn btn-primary\">Lees verder</a>

                            {% if is_granted('ROLE_ADMIN') %}
                                <div class=\"position-absolute top-0 end-0 p-2\">
                                    <a href=\"{{ path('blog_edit', {id: post.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Edit\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <form action=\"{{ path('blog_delete', {id: post.id}) }}\" method=\"POST\" class=\"d-inline-block\" onsubmit=\"return confirm('Bent u zeker dat u deze Post wilt verwijderen?')\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Delete\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\diego\\OneDrive\\Bureaublad\\blog\\templates\\blog\\index.html.twig");
    }
}
