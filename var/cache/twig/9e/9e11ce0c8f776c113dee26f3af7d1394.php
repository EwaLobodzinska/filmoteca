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

/* read.html.twig */
class __TwigTemplate_5ee187678f72e7280d9e4f18bfa9f604 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "read.html.twig", 1);
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
        if (($context["message"] ?? null)) {
            // line 7
            yield "<div class=\"alert alert-success\">
    ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "
</div>
";
        }
        // line 11
        yield "
    <div class=\"container my-5\">
        <h1>Film</h1>
<div class=\"container shadow-sm p-4 rounded bg-white\">
    
    ";
        // line 16
        if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "deleted_at", [], "any", false, false, false, 16))) {
            // line 17
            yield "        <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> ID: </strong>
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Titre: </strong>
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Année: </strong>
                ";
            // line 28
            (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 28))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 28), "html", null, true)) : (yield "N/A"));
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Type: </strong>
                ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 32), "html", null, true);
            yield "<p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Synopsis: </strong>
                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Réalisateur: </strong>
                ";
            // line 40
            (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 40))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 40), "html", null, true)) : (yield "Inconnu"));
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Créé le: </strong>
                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "createdAt", [], "any", false, false, false, 44), "format", ["d/m/Y H:i"], "method", false, false, false, 44), "html", null, true);
            yield "</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Derniere modification: </strong>
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "updatedAt", [], "any", false, false, false, 48), "format", ["d/m/Y H:i"], "method", false, false, false, 48), "html", null, true);
            yield "</p>
            </li>
        </ul>
    ";
        } else {
            // line 52
            yield "        <p class=\"text-danger\">Ce film a été supprimé.</p>
    ";
        }
        // line 54
        yield "</div>
        <table class=\"table table-borderless text-center bg-none\">
            <tbody >
                <tr>
                    <td>
                        <a href=\"/films/update?id=";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\" class=\"btn\" style=\"background-color: #6f42c1; color: white;\">Modifier un film</a>
                    </td>
                    <td>
                        <a href=\"/films/delete?id=";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 62), "html", null, true);
        yield "\" class=\"btn \" style=\"background-color: #6f42c1; color: white;\">Supprimer un film</a>
                    </td>
                </tr>
            </tbody>
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
        return "read.html.twig";
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
        return array (  168 => 62,  162 => 59,  155 => 54,  151 => 52,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  90 => 17,  88 => 16,  81 => 11,  75 => 8,  72 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des films{% endblock %}

{% block content %}
{% if message %}
<div class=\"alert alert-success\">
    {{ message }}
</div>
{% endif %}

    <div class=\"container my-5\">
        <h1>Film</h1>
<div class=\"container shadow-sm p-4 rounded bg-white\">
    
    {% if film.deleted_at is null %}
        <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> ID: </strong>
                {{ film.id }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Titre: </strong>
                {{ film.title }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Année: </strong>
                {{ film.year is not null ? film.year : 'N/A' }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Type: </strong>
                {{ film.type }}<p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Synopsis: </strong>
                {{ film.synopsis }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Réalisateur: </strong>
                {{ film.director is not null ? film.director : 'Inconnu' }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Créé le: </strong>
                {{ film.createdAt.format('d/m/Y H:i') }}</p>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <p><strong class=\"fw-bold mb-0 fs-5\"> Derniere modification: </strong>
                {{ film.updatedAt.format('d/m/Y H:i') }}</p>
            </li>
        </ul>
    {% else %}
        <p class=\"text-danger\">Ce film a été supprimé.</p>
    {% endif %}
</div>
        <table class=\"table table-borderless text-center bg-none\">
            <tbody >
                <tr>
                    <td>
                        <a href=\"/films/update?id={{ film.id }}\" class=\"btn\" style=\"background-color: #6f42c1; color: white;\">Modifier un film</a>
                    </td>
                    <td>
                        <a href=\"/films/delete?id={{ film.id }}\" class=\"btn \" style=\"background-color: #6f42c1; color: white;\">Supprimer un film</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
{% endblock %}
", "read.html.twig", "/var/www/filmoteca/src/views/read.html.twig");
    }
}
