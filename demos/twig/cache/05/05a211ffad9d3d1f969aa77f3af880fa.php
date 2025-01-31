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

/* index.html.twig */
class __TwigTemplate_9d0e3c25c4907fdeffacf63a6a34850a extends Template
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
            'style' => [$this, 'block_style'],
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 10
        yield "\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 13
        yield from $this->loadTemplate("parts/navbar.html.twig", "index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "\t\t\t<h1>Apprendre Twig</h1>
\t\t</header>

\t\t";
        // line 17
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 20
        yield "
\t\t";
        // line 21
        yield from $this->loadTemplate("parts/footer.html.twig", "index.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
\t\t";
        // line 23
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 28
        yield "\t</body>
</html>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t\t\t<link rel=\"stylesheet\" href=\"/assets/css/main.css\">
\t\t";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "\t\t\t<p>Contenu principal de la page home</p>
\t\t";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "\t\t\t<script>
\t\t\t\tconsole.log('home')
\t\t\t</script>
\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  119 => 24,  112 => 23,  106 => 18,  99 => 17,  93 => 8,  86 => 7,  79 => 28,  77 => 23,  74 => 22,  72 => 21,  69 => 20,  67 => 17,  62 => 14,  60 => 13,  55 => 10,  53 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "/home/paul/depots/framework-php/demos/twig/templates/index.html.twig");
    }
}
