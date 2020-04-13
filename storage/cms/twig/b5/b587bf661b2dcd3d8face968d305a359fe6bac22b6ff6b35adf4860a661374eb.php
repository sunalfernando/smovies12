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

/* /home/smovies12.tk/public_html/themes/smovies/pages/movie-single.htm */
class __TwigTemplate_331ab93b914ed29ea72433939cf8e54b7c1cd567f7ef208d068b674656901791 extends \Twig\Template
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
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<div class=\"bg-movies\"> <img style=\"width: 100%;\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cover", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
            echo "\"></div>
 
<section>
<div class=\"justify-content-md-center clearfix bg-light\">
\t<img src=\"";
            // line 10
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), 200, 300]);
            echo "\" style=\"margin:20px;\" class=\"float-left img-thumbnail border-secondary
\t<div style=\"padding-top:20px;\" class=\"container-fluid\">
    <h1 class=\"badge badge-success\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, false, 12), "html", null, true);
            echo "</h1>
    <h1 class=\"badge badge-success\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "quality", [], "any", false, false, false, 13), "html", null, true);
            echo "</h1>
\t\t<div class=\"col-md-12\"><h5>";
            // line 14
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 14);
            echo "</h5></div>
      <div>
        <small>Genres: </small>
         ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 18
                echo "          <a href=\"/genres/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 18), "html", null, true);
                echo "\"><small class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 18), "html", null, true);
                echo "</small></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      <br>
\t\t \t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "\t\t \t\t
\t  \t<div class=\"grid\">
\t    <img class=\"hover-shadow float-left img-thumbnail img-item border-dark\" style=\"margin-right: 5px;\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
  </div>
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">Trailer Area</h1>
    <p class=\"lead\">Jumbo helper text</p>
    <hr class=\"my-2\">
    <p>More info</p>
    <p class=\"lead\">
      <a class=\"btn btn-primary btn-lg\" href=\"Jumbo action link\" role=\"button\">Jumbo action name</a>
    </p>
  </div>
</section>


";
        } else {
            // line 42
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/smovies12.tk/public_html/themes/smovies/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  110 => 27,  101 => 24,  94 => 22,  90 => 20,  79 => 18,  75 => 17,  69 => 14,  65 => 13,  61 => 12,  56 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<div class=\"bg-movies\"> <img style=\"width: 100%;\" src=\"{{record.cover.path}}\"></div>
 
<section>
<div class=\"justify-content-md-center clearfix bg-light\">
\t<img src=\"{{record.poster.path|resize(200,300)}}\" style=\"margin:20px;\" class=\"float-left img-thumbnail border-secondary
\t<div style=\"padding-top:20px;\" class=\"container-fluid\">
    <h1 class=\"badge badge-success\">{{record.year}}</h1>
    <h1 class=\"badge badge-success\">{{record.quality}}</h1>
\t\t<div class=\"col-md-12\"><h5>{{record.description|raw}}</h5></div>
      <div>
        <small>Genres: </small>
         {% for genre in record.genres %}
          <a href=\"/genres/{{genre.slug}}\"><small class=\"badge badge-secondary\">{{genre.genre_title}}</small></a>
    {% endfor %}
      </div>
      <br>
\t\t \t{% for image in record.gallery %}\t\t \t\t
\t  \t<div class=\"grid\">
\t    <img class=\"hover-shadow float-left img-thumbnail img-item border-dark\" style=\"margin-right: 5px;\" src=\"{{image.path}}\">
\t\t</div>
\t\t{% endfor %}

  </div>
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">Trailer Area</h1>
    <p class=\"lead\">Jumbo helper text</p>
    <hr class=\"my-2\">
    <p>More info</p>
    <p class=\"lead\">
      <a class=\"btn btn-primary btn-lg\" href=\"Jumbo action link\" role=\"button\">Jumbo action name</a>
    </p>
  </div>
</section>


{% else %}
    {{ notFoundMessage }}
{% endif %}", "/home/smovies12.tk/public_html/themes/smovies/pages/movie-single.htm", "");
    }
}
