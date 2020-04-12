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

/* F:\website\smovies/themes/smovies/pages/smovies.htm */
class __TwigTemplate_d422d7e1395fa87fe9726f7469a1dcccccdbd952c25e60de979cee9004889726 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "

<!-- Banner -->
\t\t\t<section style=\"overflow: hidden;\" class=\"banner full\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "\t\t\t\t<article>
\t\t\t\t\t";
            // line 13
            ob_start();
            // line 14
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 15
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "cover", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\" alt=\"\" />
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t";
                // line 18
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 18), 100]);
                echo "
\t\t\t\t\t\t\t<h2>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t    ";
            }
            // line 24
            echo "\t\t            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 25
            echo "\t\t\t\t\t        
\t\t\t    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t\t\t        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t
\t\t\t</section>
\t\t<!-- One -->
\t\t\t<section style=\" box-shadow: 100px;\t\" id=\"one\" class=\"wrapper style2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t  \t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 35
            echo "\t\t\t  \t";
            ob_start();
            // line 36
            echo "\t\t\t  \t";
            if ($context["record"]) {
                // line 37
                echo "\t\t\t      <div class=\"flip-card\">

\t\t\t\t  <div class=\" rounded flip-card-inner\">
\t\t\t\t    <div class=\" rounded flip-card-front \">
\t\t\t\t      <img class=\"rounded\" style=\" box-shadow: 50px 50px inner;\" src=\"";
                // line 41
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 41), "path", [], "any", false, false, false, 41), 200, 300]);
                echo "\" alt=\"Avatar\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\" rounded flip-card-back\">
\t\t\t\t    \t<div class=\" rounded card-img-overlay bg-text\">
\t\t\t\t    \t\t<span style=\"float: right;\" class=\"badge badge-pill badge-primary\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "year", [], "any", false, false, false, 45), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<span style=\"float: left;\" class=\"badge badge-dark\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "quality", [], "any", false, false, false, 46), "html", null, true);
                echo "</span>
\t\t\t\t    \t\t<a href=\"";
                // line 47
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 47)]);
                echo "\">
\t\t\t\t    \t\t<h2>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 48), "html", null, true);
                echo "</h2></a> 
\t\t\t\t      \t<a class=\"text-white\" href=\"";
                // line 49
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 49)]);
                echo "\"><p>";
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 49), 100]);
                echo "</p> </a>
\t\t\t\t    \t</div>
\t\t\t\t    \t<img style=\" filter: blur(8px); -webkit-filter: blur(8px);\" src=\"";
                // line 51
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 51), "path", [], "any", false, false, false, 51), 200, 300]);
                echo "\">
\t\t\t\t    \t
\t\t\t\t      
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 58
            echo "\t\t\t  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t    
\t\t\t  </div>
\t\t\t  
\t\t\t</section>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\smovies/themes/smovies/pages/smovies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  168 => 58,  158 => 51,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  128 => 41,  122 => 37,  119 => 36,  116 => 35,  112 => 34,  105 => 29,  96 => 27,  90 => 25,  87 => 24,  79 => 19,  75 => 18,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  55 => 11,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<!-- Banner -->
\t\t\t<section style=\"overflow: hidden;\" class=\"banner full\">
\t\t\t\t{% for record in records %}
\t\t\t\t<article>
\t\t\t\t\t{% spaceless %}
                {% if detailsPage %}
\t\t\t\t\t<img src=\"{{ record.cover.path }}\" alt=\"\" />
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t{{html_limit(record.description,100)|raw}}
\t\t\t\t\t\t\t<h2>{{record.name}}</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t    {% endif %}
\t\t            {% endspaceless %}
\t\t\t\t\t        
\t\t\t    {% else %}
\t\t\t        <li class=\"no-data\">{{ noRecordsMessage }}</li>
\t\t\t    {% endfor %}
\t\t\t\t
\t\t\t</section>
\t\t<!-- One -->
\t\t\t<section style=\" box-shadow: 100px;\t\" id=\"one\" class=\"wrapper style2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t  \t{% for record in records %}
\t\t\t  \t{% spaceless %}
\t\t\t  \t{% if record %}
\t\t\t      <div class=\"flip-card\">

\t\t\t\t  <div class=\" rounded flip-card-inner\">
\t\t\t\t    <div class=\" rounded flip-card-front \">
\t\t\t\t      <img class=\"rounded\" style=\" box-shadow: 50px 50px inner;\" src=\"{{ record.poster.path| resize(200, 300) }}\" alt=\"Avatar\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\" rounded flip-card-back\">
\t\t\t\t    \t<div class=\" rounded card-img-overlay bg-text\">
\t\t\t\t    \t\t<span style=\"float: right;\" class=\"badge badge-pill badge-primary\">{{ record.year}}</span>
\t\t\t\t    \t\t<span style=\"float: left;\" class=\"badge badge-dark\">{{record.quality}}</span>
\t\t\t\t    \t\t<a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
\t\t\t\t    \t\t<h2>{{ record.name }}</h2></a> 
\t\t\t\t      \t<a class=\"text-white\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"><p>{{ html_limit(record.description,100)|raw}}</p> </a>
\t\t\t\t    \t</div>
\t\t\t\t    \t<img style=\" filter: blur(8px); -webkit-filter: blur(8px);\" src=\"{{record.poster.path | resize(200, 300)}}\">
\t\t\t\t    \t
\t\t\t\t      
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>\t
\t\t\t\t{% endif %}
\t\t\t  {% endspaceless %}
\t\t\t  {% endfor %}\t\t    
\t\t\t  </div>
\t\t\t  
\t\t\t</section>", "F:\\website\\smovies/themes/smovies/pages/smovies.htm", "");
    }
}
