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

/* main/homepage.html.twig */
class __TwigTemplate_3d962a401132c5e6c9554db45a33c2cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " StarShop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<h1><strong>Hello World!</strong></h1>

<div>
    <p> Nous possédons une flotte de ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 7, $this->source); })())), "html", null, true);
        yield " vaisseaux spaciaux !</p>
    ";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ships"]) || array_key_exists("ships", $context) ? $context["ships"] : (function () { throw new RuntimeError('Variable "ships" does not exist.', 8, $this->source); })())) > 400)) {
            // line 9
            yield "     <p>
         C'est une flotte considérable !
     </p>
    ";
        }
        // line 13
        yield "</div>

<div>
    <table>
        <tr>
            <th> Name</th>
            <td> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
        </tr>

        <tr>
            <th> Class</th>
            <td> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 24, $this->source); })()), "class", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
        </tr>

        <tr>
            <th> Captain</th>
            <td> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 29, $this->source); })()), "captain", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th> Status</th>
            <td> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["myShip"]) || array_key_exists("myShip", $context) ? $context["myShip"] : (function () { throw new RuntimeError('Variable "myShip" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
        </tr>
    </table>
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
        return "main/homepage.html.twig";
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
        return array (  149 => 33,  142 => 29,  134 => 24,  126 => 19,  118 => 13,  112 => 9,  110 => 8,  106 => 7,  101 => 4,  88 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%  extends 'base.html.twig' %}
{%  block title %}{{  parent() }} StarShop{%  endblock %}
{%  block body %}
<h1><strong>Hello World!</strong></h1>

<div>
    <p> Nous possédons une flotte de {{ ships|length }} vaisseaux spaciaux !</p>
    {%  if ships|length > 400 %}
     <p>
         C'est une flotte considérable !
     </p>
    {% endif %}
</div>

<div>
    <table>
        <tr>
            <th> Name</th>
            <td> {{ myShip.name }}</td>
        </tr>

        <tr>
            <th> Class</th>
            <td> {{ myShip.class }}</td>
        </tr>

        <tr>
            <th> Captain</th>
            <td> {{ myShip.captain }}</td>
        </tr>
        <tr>
            <th> Status</th>
            <td> {{ myShip.status }}</td>
        </tr>
    </table>
</div>
{% endblock %}
", "main/homepage.html.twig", "C:\\Users\\andre\\Documents\\S4\\Archi Log\\TD1\\starshop\\templates\\main\\homepage.html.twig");
    }
}
