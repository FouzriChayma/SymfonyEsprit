<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* author/showAuthor.html.twig */
class __TwigTemplate_0e805f077136d1cd3b82b01823b7bd15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        // line 1
        echo "
<h1>Details of Authors</h1>

<table border=\"1\" >
    <tr>
        <td>Name</td>
        <td>Picture</td>
        <td>Email</td>
        <td>Books</td>
    </tr>


            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabAuthors"]) || array_key_exists("tabAuthors", $context) ? $context["tabAuthors"] : (function () { throw new RuntimeError('Variable "tabAuthors" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 14
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 14) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()))) {
                // line 15
                echo "    <tr>

        <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 17)), "html", null, true);
                echo "</td>
        <td><img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 18)), "html", null, true);
                echo "\" alt=\"author\" height=\"170px\" width=\"170px\"></td>
        <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
        <td> ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>


    </tr>
            ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/showAuthor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  88 => 25,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h1>Details of Authors</h1>

<table border=\"1\" >
    <tr>
        <td>Name</td>
        <td>Picture</td>
        <td>Email</td>
        <td>Books</td>
    </tr>


            {% for author in tabAuthors %}
            {% if author.id == id %}
    <tr>

        <td>{{author.username|upper}}</td>
        <td><img src=\"{{ asset(author.picture) }}\" alt=\"author\" height=\"170px\" width=\"170px\"></td>
        <td>{{author.email}}</td>
        <td> {{author.nb_books}}</td>


    </tr>
            {% endif %}
            {% endfor %}
</table>
", "author/showAuthor.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\author\\showAuthor.html.twig");
    }
}
