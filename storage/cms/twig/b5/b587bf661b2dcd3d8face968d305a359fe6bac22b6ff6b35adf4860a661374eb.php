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

  <div class=\"card-img-overlay\" style=\"top: 30%; justify-content: center; align-items: center; text-align: center;\">
    <h4 class=\"card-title\">Title</h4>
    <p style=\"font-size: 50px;\" class=\"card-text vid\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"fa fa-play\"></i></p>
    
  </div>
</div>
\t<div style=\"padding-top:20px;\" class=\"container-fluid\">
    <h1 class=\"badge badge-success\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
    <h1 class=\"badge badge-success\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "quality", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
\t\t<div class=\"col-md-12\"><h5>";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 22);
            echo "</h5></div>
        <small>Genres: </small>
         ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 25
                echo "          <a href=\"/genres/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 25), "html", null, true);
                echo "\"><small class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 25), "html", null, true);
                echo "</small></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      <br>
\t\t \t<div>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo "\t\t \t\t
        <div class=\"grid\">
        <img class=\"hover-shadow float-left img-thumbnail img-item border-dark\" style=\"margin-right: 5px;\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
      </div>
      
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "      </div>
       </div>

  </div>
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
            echo " Trailer</h1>
    <iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/PVxprj4YSAM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
  </div>
  
</section>
";
        } else {
            // line 46
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
        return array (  134 => 46,  125 => 40,  118 => 35,  108 => 31,  101 => 29,  97 => 27,  86 => 25,  82 => 24,  77 => 22,  73 => 21,  69 => 20,  57 => 11,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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

  <div class=\"card-img-overlay\" style=\"top: 30%; justify-content: center; align-items: center; text-align: center;\">
    <h4 class=\"card-title\">Title</h4>
    <p style=\"font-size: 50px;\" class=\"card-text vid\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"fa fa-play\"></i></p>
    
  </div>
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
  <div class=\"jumbotron\">
    <h1 class=\"display-3\">{{record.name}} Trailer</h1>
    <iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/PVxprj4YSAM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
  </div>
  
</section>
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/home/smovies12.tk/public_html/themes/smovies/pages/movie-single.htm", "");
    }
}
