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

/* /home/smovies12.tk/public_html/themes/smovies/pages/genres.htm */
class __TwigTemplate_372d89f593053ff9e4734dfba6bde4db3e0868266ca0718fbcab4464b792bca5 extends \Twig\Template
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
        // line 1
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
<section>
\t<div style=\"margin-top: 10%;\"class=\"jumbotron clearfix\">
\t\t";
        // line 7
        if (($context["record"] ?? null)) {
            // line 8
            echo "\t\t    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, false, 8), "html", null, true);
            echo " Movies</h2>

\t\t    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movies", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 11
                echo "              <div class=\"card text-white bg-primary mb-3 float-left\" style=\" margin-right: 10px; max-width: 18rem;\">
\t\t\t  <div style=\"z-index: 1\" class=\"rounded card-img-overlay\">
\t\t\t  \t<a style=\"color: white; text-shadow: 4px 4px 8px black\" href=\"/movie-single/";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 13), "html", null, true);
                echo "\"><h5 class=\"card-header card-img-overlay\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "</h5></a>
\t\t\t  \t

\t\t\t  </div>
\t\t\t  <img class=\"card-img\" style=\" filter: blur(0.7px);\" src=\"";
                // line 17
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "poster", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), 200, 200]);
                echo "\">
\t\t\t</div>
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
\t\t";
        } else {
            // line 22
            echo "\t\t    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
\t\t";
        }
        // line 24
        echo "
\t</div>

</section>";
    }

    public function getTemplateName()
    {
        return "/home/smovies12.tk/public_html/themes/smovies/pages/genres.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  86 => 22,  82 => 20,  73 => 17,  64 => 13,  60 => 11,  56 => 10,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

<section>
\t<div style=\"margin-top: 10%;\"class=\"jumbotron clearfix\">
\t\t{% if record %}
\t\t    <h2>{{ attribute(record, displayColumn) }} Movies</h2>

\t\t    {% for movie in record.movies %}
              <div class=\"card text-white bg-primary mb-3 float-left\" style=\" margin-right: 10px; max-width: 18rem;\">
\t\t\t  <div style=\"z-index: 1\" class=\"rounded card-img-overlay\">
\t\t\t  \t<a style=\"color: white; text-shadow: 4px 4px 8px black\" href=\"/movie-single/{{movie.slug}}\"><h5 class=\"card-header card-img-overlay\">{{movie.name}}</h5></a>
\t\t\t  \t

\t\t\t  </div>
\t\t\t  <img class=\"card-img\" style=\" filter: blur(0.7px);\" src=\"{{movie.poster.path|resize(200,200)}}\">
\t\t\t</div>
    \t\t{% endfor %}

\t\t{% else %}
\t\t    {{ notFoundMessage }}
\t\t{% endif %}

\t</div>

</section>", "/home/smovies12.tk/public_html/themes/smovies/pages/genres.htm", "");
    }
}
