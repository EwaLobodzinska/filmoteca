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

/* create.html.twig */
class __TwigTemplate_f875c9c923c4b63580614df8913e0ba8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "create.html.twig", 1);
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
    <form action=\"/films/create\" method=\"POST\" class=\"bg-white p-4 rounded shadow\">
        <fieldset>
            <legend class=\"mb-4\" style=\"color: #6f42c1;\"><b>Ajouter un film</b></legend>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Entrez un titre de film</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Titre de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Entrez une année de film</label>
                <input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" placeholder=\"Année de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Entrez un synopsis de film</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" rows=\"3\" placeholder=\"Synopsis de film\"></textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Entrez un directeur de film</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" placeholder=\"Directeur de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Entrez un genre de film</label>
                <input type=\"text\" id=\"genre\" name=\"type\" class=\"form-control\" placeholder=\"Genre de film\">
            </div>
            <button type=\"submit\" class=\"btn me-2 w-100\" style=\"background-color: #6f42c1;\" ><a href=\"/films/create\" class=\"text-decoration-none text-white\">Ajouter</a></button>
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
        return "create.html.twig";
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
        return array (  81 => 11,  75 => 8,  72 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
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
    <form action=\"/films/create\" method=\"POST\" class=\"bg-white p-4 rounded shadow\">
        <fieldset>
            <legend class=\"mb-4\" style=\"color: #6f42c1;\"><b>Ajouter un film</b></legend>

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Entrez un titre de film</label>
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder=\"Titre de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"year\" class=\"form-label\">Entrez une année de film</label>
                <input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" placeholder=\"Année de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"synopsis\" class=\"form-label\">Entrez un synopsis de film</label>
                <textarea id=\"synopsis\" name=\"synopsis\" class=\"form-control\" rows=\"3\" placeholder=\"Synopsis de film\"></textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"director\" class=\"form-label\">Entrez un directeur de film</label>
                <input type=\"text\" id=\"director\" name=\"director\" class=\"form-control\" placeholder=\"Directeur de film\">
            </div>

            <div class=\"mb-3\">
                <label for=\"type\" class=\"form-label\">Entrez un genre de film</label>
                <input type=\"text\" id=\"genre\" name=\"type\" class=\"form-control\" placeholder=\"Genre de film\">
            </div>
            <button type=\"submit\" class=\"btn me-2 w-100\" style=\"background-color: #6f42c1;\" ><a href=\"/films/create\" class=\"text-decoration-none text-white\">Ajouter</a></button>
        </fieldset>
    </form>
</div>
{% endblock %}
", "create.html.twig", "/var/www/filmoteca/src/views/create.html.twig");
    }
}
