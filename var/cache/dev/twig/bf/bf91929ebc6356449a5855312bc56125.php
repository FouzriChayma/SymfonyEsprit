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

/* author/list.html.twig */
class __TwigTemplate_a1c9b8614c658851fac1d1da1fb16c7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Liste des auteurs</title>
</head>
<body>
    <h1>Liste des auteurs :</h1>

    ";
        // line 9
        if ((array_key_exists("authors", $context) && (twig_length_filter($this->env, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 9, $this->source); })())) > 0))) {
            // line 10
            echo "        
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 12
                echo "                <p>
                    <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 13)), "html", null, true);
                echo "\" width=\"50\">
                    <h2>";
                // line 14
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 14)), "html", null, true);
                echo "</h2> Son email : (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 14), "html", null, true);
                echo ")
                    <br> a écrit  ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 15), "html", null, true);
                echo " books.
                    <p><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_author", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">details</a></p>
                </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        
    ";
        } else {
            // line 21
            echo "        <p>Aucun auteur trouvé.</p>
    ";
        }
        // line 23
        echo "
    <p> Total d'auteurs : ";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "</p>
    <p>Total de livres de tous les auteurs : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</p>


</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  99 => 24,  96 => 23,  92 => 21,  88 => 19,  79 => 16,  75 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Liste des auteurs</title>
</head>
<body>
    <h1>Liste des auteurs :</h1>

    {% if authors is defined and authors|length > 0 %}
        
            {% for author in authors %}
                <p>
                    <img src=\"{{ asset(author.picture) }}\" width=\"50\">
                    <h2>{{ author.username|upper }}</h2> Son email : ({{ author.email }})
                    <br> a écrit  {{ author.nb_books }} books.
                    <p><a href=\"{{ path('details_author',{'id': author.id}) }}\">details</a></p>
                </p>
            {% endfor %}
        
    {% else %}
        <p>Aucun auteur trouvé.</p>
    {% endif %}

    <p> Total d'auteurs : {{ authors|length }}</p>
    <p>Total de livres de tous les auteurs : {{ totalBooks }}</p>


</body>
</html>
", "author/list.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\author\\list.html.twig");
    }
}
