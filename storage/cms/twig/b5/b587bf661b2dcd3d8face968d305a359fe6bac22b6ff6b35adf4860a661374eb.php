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
  <div class=\"card bg-dark text-white float-left\" style=\"max-width: 200px; max-height: 300px; margin: 10px;\">
  <img class=\"card-img\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"\">
</div>
\t<div style=\"padding-top:20px;\" class=\"container-fluid\">
    <h1 class=\"badge badge-success\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>
    <h1 class=\"badge badge-success\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "quality", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>
\t\t<div class=\"col-md-12\"><h5>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 16);
            echo "</h5></div>
        <small>Genres: </small>
         ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 19
                echo "          <a href=\"/genres/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 19), "html", null, true);
                echo "\"><small class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 19), "html", null, true);
                echo "</small></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      <br>
\t\t \t<div>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "\t\t \t\t
        <div class=\"grid\">
        <img class=\"hover-shadow float-left img-thumbnail img-item border-dark\" style=\"margin-right: 5px;\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
      </div>
      
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      </div>
       </div>

  </div>
  ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "trailer", [], "any", false, false, false, 33)) {
                // line 34
                echo "  <div class=\"jumbotron\">
    <h1 class=\"display-3\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
                echo " Trailer</h1>
    ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "trailer", [], "any", false, false, false, 36);
                echo "
  </div>
  ";
            } else {
                // line 39
                echo "  <div class=\"jumbotron\">
    <h1 class=\"display-3\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
                echo " Trailer not Available</h1>
  </div>
  ";
            }
            // line 43
            echo "</section>
";
        } else {
            // line 45
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
        return array (  146 => 45,  142 => 43,  136 => 40,  133 => 39,  127 => 36,  123 => 35,  120 => 34,  118 => 33,  112 => 29,  102 => 25,  95 => 23,  91 => 21,  80 => 19,  76 => 18,  71 => 16,  67 => 15,  63 => 14,  57 => 11,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  <div class=\"card bg-dark text-white float-left\" style=\"max-width: 200px; max-height: 300px; margin: 10px;\">
  <img class=\"card-img\" src=\"{{record.poster.path}}\" alt=\"\">
</div>
\t<div style=\"padding-top:20px;\" class=\"container-fluid\">
    <h1 class=\"badge badge-success\">{{record.year}}</h1>
    <h1 class=\"badge badge-success\">{{record.quality}}</h1>
\t\t<div class=\"col-md-12\"><h5>{{record.description|raw}}</h5></div>
        <small>Genres: </small>
         {% for genre in record.genres %}
          <a href=\"/genres/{{genre.slug}}\"><small class=\"badge badge-secondary\">{{genre.genre_title}}</small></a>
    {% endfor %}
      <br>
\t\t \t<div>
        {% for image in record.gallery %}\t\t \t\t
        <div class=\"grid\">
        <img class=\"hover-shadow float-left img-thumbnail img-item border-dark\" style=\"margin-right: 5px;\" src=\"{{image.path}}\">
      </div>
      
      {% endfor %}
      </div>
       </div>

  </div>
  {% if record.trailer %}
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">{{record.name}} Trailer</h1>
    {{record.trailer|raw}}
  </div>
  {% else %}
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">{{record.name}} Trailer not Available</h1>
  </div>
  {% endif %}
</section>
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/home/smovies12.tk/public_html/themes/smovies/pages/movie-single.htm", "");
    }
}
