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

/* listeFilms.html.twig */
class __TwigTemplate_184f89e590bc86f929badc567a02f3f8 extends Template
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
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "listeFilms.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des films";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container my-4\">
        <h1 class=\"mb-3\">Liste des films</h1>
        <button class=\"btn me-2 mb-4\" style=\"background-color: #6f42c1;\" ><a href=\"/films/create\" class=\"text-decoration-none text-white\"> Ajouter un film </a></button>

        <table class=\"table table-bordered table-striped table-hover shadow-sm\">
            <thead class=\"table-secondary\" style=\"background-color: #e6d8f5;\">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 21
            yield "                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["film"], "deleted_at", [], "any", false, false, false, 21))) {
                // line 22
                yield "                        <tr>
                            <td>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 23), "html", null, true);
                yield " </td>
                            <td ><a href =\"/films/read?id=";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "\" style=\"text-decoration: none; color: #6f42c1; font-weight: bold;\" >";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                            <td>";
                // line 25
                (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 25))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 25), "html", null, true)) : (yield "N/A"));
                yield "</td>
                            <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "type", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 29
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </tbody>
        </table>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "listeFilms.html.twig";
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
        return array (  122 => 30,  116 => 29,  110 => 26,  106 => 25,  100 => 24,  96 => 23,  93 => 22,  90 => 21,  86 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des films{% endblock %}

{% block content %}
    <div class=\"container my-4\">
        <h1 class=\"mb-3\">Liste des films</h1>
        <button class=\"btn me-2 mb-4\" style=\"background-color: #6f42c1;\" ><a href=\"/films/create\" class=\"text-decoration-none text-white\"> Ajouter un film </a></button>

        <table class=\"table table-bordered table-striped table-hover shadow-sm\">
            <thead class=\"table-secondary\" style=\"background-color: #e6d8f5;\">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                {% for film in movies %}
                    {% if film.deleted_at is null %}
                        <tr>
                            <td>{{ film.id }} </td>
                            <td ><a href =\"/films/read?id={{ film.id }}\" style=\"text-decoration: none; color: #6f42c1; font-weight: bold;\" >{{ film.title }}</td>
                            <td>{{ film.year is not null ? film.year : 'N/A' }}</td>
                            <td>{{ film.type }}</td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "listeFilms.html.twig", "/var/www/filmoteca/src/views/listeFilms.html.twig");
    }
}
