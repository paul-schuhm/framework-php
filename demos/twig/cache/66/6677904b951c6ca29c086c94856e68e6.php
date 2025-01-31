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

/* parts/navbar.html.twig */
class __TwigTemplate_fa65bcbd240078aca2411b54699af00d extends Template
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
        yield "<nav>
\t";
        // line 3
        yield "
\t<ul>
\t\t<li><a href=\"/\">Accueil</a></li>
\t\t<li><a href=\"\">Contact</a></li>
\t\t<li><a href=\"\">A propos</a></li>
        <li><a href=\"/page.php\">Page</a></li>
\t</ul>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "parts/navbar.html.twig", "/home/paul/depots/framework-php/demos/twig/templates/parts/navbar.html.twig");
    }
}
