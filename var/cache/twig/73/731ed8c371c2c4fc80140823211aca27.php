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

/* navigation.html.twig */
class __TwigTemplate_6d44f870919ad3639e1e32eccdd9ab8f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <style>
            .btn-outline-secondary a:hover {
            color: white !important; 
        }
    </style>
</head>
<body class=\"bg-light\">
    <div class=\"container my-5 p-4 rounded\">
        <h1 class=\"text-center text-white bg-purple p-4 rounded shadow-sm mb-4\" style=\"background-color: #6f42c1;\">FILMOTECA</h1>
        <div class=\"d-flex justify-content-center mb-3\">
            <button class=\"btn me-2\" style=\"background-color: #6f42c1; color: white;\" >Se connecter</button>
            <input type=\"text\" class=\"form-control w-25 me-2\" placeholder=\"Search...\">

            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/home/home\" class=\"text-decoration-none text-secondary\">Accueil</a>
            </button>
            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/films/list\" class=\"text-decoration-none text-secondary\">Liste des films</a>
            </button>
            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/contact\" class=\"text-decoration-none text-secondary\">Contact</a>
            </button>
        </div>
    </div>
</body>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <style>
            .btn-outline-secondary a:hover {
            color: white !important; 
        }
    </style>
</head>
<body class=\"bg-light\">
    <div class=\"container my-5 p-4 rounded\">
        <h1 class=\"text-center text-white bg-purple p-4 rounded shadow-sm mb-4\" style=\"background-color: #6f42c1;\">FILMOTECA</h1>
        <div class=\"d-flex justify-content-center mb-3\">
            <button class=\"btn me-2\" style=\"background-color: #6f42c1; color: white;\" >Se connecter</button>
            <input type=\"text\" class=\"form-control w-25 me-2\" placeholder=\"Search...\">

            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/home/home\" class=\"text-decoration-none text-secondary\">Accueil</a>
            </button>
            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/films/list\" class=\"text-decoration-none text-secondary\">Liste des films</a>
            </button>
            <button class=\"btn btn-outline-secondary me-2\">
                <a href=\"/contact\" class=\"text-decoration-none text-secondary\">Contact</a>
            </button>
        </div>
    </div>
</body>
", "navigation.html.twig", "/var/www/filmoteca/src/views/navigation.html.twig");
    }
}
