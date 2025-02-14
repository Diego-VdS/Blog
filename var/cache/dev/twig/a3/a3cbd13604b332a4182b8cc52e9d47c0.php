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

/* blog/show.html.twig */
class __TwigTemplate_e111ac753e3948658921dc5201cef578 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - Blog Post";
        
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
<div class=\"container my-4\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <h1 class=\"text-center display-4\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        yield "</h1>  
            <p class=\"text-muted text-center mb-4\">
                Gepubliceerd op ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "F j, Y"), "html", null, true);
        yield "
            </p>
            <div class=\"card mb-4 shadow-sm\">
                <div class=\"card-body\">
                    <p class=\"card-text\">";
        // line 38
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38);
        yield "</p>
                </div>
            </div>
            <div class=\"mt-4 text-center\">
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_mainpage");
        yield "\" class=\"btn btn-primary btn-lg\">Ga terug</a>
            </div>
            <hr class=\"my-5\">
            <div class=\"mt-4\">
                <h3>Plaats een bericht</h3>
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        yield "   
                            <div class=\"mb-3\">
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "content", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Schrijf je reactie...", "rows" => 5]]);
        // line 57
        yield "
                            </div>
                            <div class=\"form-group text-center\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "submit", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "btn btn-success btn-lg"]]);
        // line 64
        yield "
                            </div>

                        ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
            <hr class=\"my-5\">
            <div class=\"mt-4\">
                ";
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 73, $this->source); })()))) {
            // line 74
            yield "                    <h3>Reacties</h3>
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 76
                yield "                        <div class=\"card mb-3 shadow-sm comment-container\" style=\"position: relative;\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>

                                ";
                // line 80
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 81
                    yield "                                    <!-- Trashcan icon in the top-right corner -->
                                    <form action=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    yield "\" method=\"POST\" onsubmit=\"return confirm('Bent u zeker dat u deze reactie wilt verwijderen?');\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <button type=\"submit\" class=\"btn btn-link text-danger\" style=\"padding: 0; border: none; background: none;\">
                                            <i class=\"fas fa-trash-alt\" style=\"font-size: 20px;\"></i>
                                        </button>
                                    </form>
                                ";
                }
                // line 89
                yield "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "                ";
        }
        // line 93
        yield "            </div>
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
        return "blog/show.html.twig";
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
        return array (  251 => 93,  248 => 92,  240 => 89,  230 => 82,  227 => 81,  225 => 80,  220 => 78,  216 => 76,  212 => 75,  209 => 74,  207 => 73,  198 => 67,  193 => 64,  191 => 60,  186 => 57,  184 => 51,  179 => 49,  169 => 42,  162 => 38,  155 => 34,  150 => 32,  141 => 25,  135 => 23,  129 => 21,  123 => 18,  120 => 17,  117 => 16,  115 => 15,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ post.title }} - Blog Post{% endblock %}

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
<div class=\"container my-4\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <h1 class=\"text-center display-4\">{{ post.title }}</h1>  
            <p class=\"text-muted text-center mb-4\">
                Gepubliceerd op {{ post.createdAt|date('F j, Y') }}
            </p>
            <div class=\"card mb-4 shadow-sm\">
                <div class=\"card-body\">
                    <p class=\"card-text\">{{ post.description|raw }}</p>
                </div>
            </div>
            <div class=\"mt-4 text-center\">
                <a href=\"{{ path('blog_mainpage') }}\" class=\"btn btn-primary btn-lg\">Ga terug</a>
            </div>
            <hr class=\"my-5\">
            <div class=\"mt-4\">
                <h3>Plaats een bericht</h3>
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        {{ form_start(form) }}   
                            <div class=\"mb-3\">
                                {{ form_row(form.content, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Schrijf je reactie...',
                                        'rows': 5
                                    }
                                }) }}
                            </div>
                            <div class=\"form-group text-center\">
                                {{ form_widget(form.submit, {
                                    'attr': {
                                        'class': 'btn btn-success btn-lg'
                                    }
                                }) }}
                            </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
            <hr class=\"my-5\">
            <div class=\"mt-4\">
                {% if comments is not empty %}
                    <h3>Reacties</h3>
                    {% for comment in comments %}
                        <div class=\"card mb-3 shadow-sm comment-container\" style=\"position: relative;\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">{{ comment.content }}</p>

                                {% if is_granted('ROLE_ADMIN') %}
                                    <!-- Trashcan icon in the top-right corner -->
                                    <form action=\"{{ path('comment_delete', {'id': comment.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Bent u zeker dat u deze reactie wilt verwijderen?');\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <button type=\"submit\" class=\"btn btn-link text-danger\" style=\"padding: 0; border: none; background: none;\">
                                            <i class=\"fas fa-trash-alt\" style=\"font-size: 20px;\"></i>
                                        </button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "blog/show.html.twig", "C:\\Users\\diego\\OneDrive\\Bureaublad\\blog\\templates\\blog\\show.html.twig");
    }
}
