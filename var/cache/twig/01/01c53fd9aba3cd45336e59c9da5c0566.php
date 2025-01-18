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

/* update.html.twig */
class __TwigTemplate_6fa3ad8ab3f52df8185f9702b54016d3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "update.html.twig", 1);
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
        yield "<div class=\"container my-5\">
    <form action=\"/films/update?id=";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\" method=\"POST\" class=\"bg-white p-4 rounded shadow\">
        <fieldset>
            <legend class=\"mb-4\" style=\"color: #6f42c1;\"><b>Modifier un film</b></legend>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Entrez un titre de film</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Entrez une année de film</label>
                <input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Entrez un synopsis de film</label>
                <input type=\"text\" id=\"synopsis\" name=\"synopsis\" class=\"form-control\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "synopsis", [], "any", false, false, false, 23), "html", null, true);
        yield "\"></textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Entrez un directeur de film</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "director", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Entrez un genre de film</label>
                <input type=\"text\" id=\"genre\" name=\"type\" class=\"form-control\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "type", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
            </div>
            <button type=\"submit\" class=\"btn me-2 w-100\" style=\"background-color: #6f42c1;\" ><a href=\"/films/update?id=";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "\" class=\"text-decoration-none text-white\"> Modifier </a></button>
        </fieldset>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "update.html.twig";
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
        return array (  119 => 35,  114 => 33,  106 => 28,  98 => 23,  90 => 18,  82 => 13,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des films{% endblock %}

{% block content %}
<div class=\"container my-5\">
    <form action=\"/films/update?id={{ film.id }}\" method=\"POST\" class=\"bg-white p-4 rounded shadow\">
        <fieldset>
            <legend class=\"mb-4\" style=\"color: #6f42c1;\"><b>Modifier un film</b></legend>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Entrez un titre de film</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"{{ film.title }}\">
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Entrez une année de film</label>
                <input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{ film.year }}\">
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Entrez un synopsis de film</label>
                <input type=\"text\" id=\"synopsis\" name=\"synopsis\" class=\"form-control\" value=\"{{ film.synopsis }}\"></textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Entrez un directeur de film</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" value=\"{{ film.director }}\">
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Entrez un genre de film</label>
                <input type=\"text\" id=\"genre\" name=\"type\" class=\"form-control\" value=\"{{ film.type }}\">
            </div>
            <button type=\"submit\" class=\"btn me-2 w-100\" style=\"background-color: #6f42c1;\" ><a href=\"/films/update?id={{ film.id }}\" class=\"text-decoration-none text-white\"> Modifier </a></button>
        </fieldset>
    </form>
</div>
{% endblock %}
", "update.html.twig", "/var/www/filmoteca/src/views/update.html.twig");
    }
}
