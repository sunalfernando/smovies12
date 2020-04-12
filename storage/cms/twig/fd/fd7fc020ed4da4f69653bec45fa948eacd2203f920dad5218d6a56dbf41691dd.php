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

/* F:\website\smovies/themes/smovies/pages/movies.htm */
class __TwigTemplate_237e42948adc80b36e4b3388020a2dde0f54fd5370b327d6e865d8d0a5692aec extends \Twig\Template
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
        echo "<!-- One -->
    \t\t\t<section id=\"One\" class=\"wrapper style3\">
    \t\t\t\t
    \t\t\t</section>

\t\t<!-- Two -->
\t\t\t<section style=\" box-shadow: 100px;  \" id=\"one\" class=\"wrapper style2\">
                    <div class=\"row\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "                ";
            ob_start();
            // line 17
            echo "                ";
            if ($context["record"]) {
                // line 18
                echo "                  <div class=\"flip-card\">

                  <div class=\" rounded flip-card-inner\">
                    <div class=\" rounded flip-card-front \">
                      <img class=\"rounded\" style=\" box-shadow: 50px 50px inner;\" src=\"";
                // line 22
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), 200, 300]);
                echo "\" alt=\"Avatar\">
                    </div>
                    <div class=\" rounded flip-card-back\">
                        <div class=\" rounded card-img-overlay bg-text\">
                            <span style=\"float: right;\" class=\"badge badge-pill badge-primary\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "year", [], "any", false, false, false, 26), "html", null, true);
                echo "</span>
                            <span style=\"float: left;\" class=\"badge badge-dark\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "quality", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                            <a href=\"";
                // line 28
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 28)]);
                echo "\">
                            <h2>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</h2></a> 
                        <a class=\"text-white\" href=\"";
                // line 30
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 30)]);
                echo "\"><p>";
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 30), 100]);
                echo "</p> </a>
                        </div>
                        <img style=\" filter: blur(8px); -webkit-filter: blur(8px);\" src=\"";
                // line 32
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32), 200, 300]);
                echo "\">
                        
                      
                    </div>
                  </div>
                </div>  
                ";
            }
            // line 39
            echo "              ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 40
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "          
              </div>
              
            </section>";
    }

    public function getTemplateName()
    {
        return "F:\\website\\smovies/themes/smovies/pages/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  115 => 39,  105 => 32,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  75 => 22,  69 => 18,  66 => 17,  63 => 16,  59 => 15,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
<!-- One -->
    \t\t\t<section id=\"One\" class=\"wrapper style3\">
    \t\t\t\t
    \t\t\t</section>

\t\t<!-- Two -->
\t\t\t<section style=\" box-shadow: 100px;  \" id=\"one\" class=\"wrapper style2\">
                    <div class=\"row\">
                {% for record in records %}
                {% spaceless %}
                {% if record %}
                  <div class=\"flip-card\">

                  <div class=\" rounded flip-card-inner\">
                    <div class=\" rounded flip-card-front \">
                      <img class=\"rounded\" style=\" box-shadow: 50px 50px inner;\" src=\"{{ record.poster.path| resize(200, 300) }}\" alt=\"Avatar\">
                    </div>
                    <div class=\" rounded flip-card-back\">
                        <div class=\" rounded card-img-overlay bg-text\">
                            <span style=\"float: right;\" class=\"badge badge-pill badge-primary\">{{ record.year}}</span>
                            <span style=\"float: left;\" class=\"badge badge-dark\">{{record.quality}}</span>
                            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                            <h2>{{ record.name }}</h2></a> 
                        <a class=\"text-white\" href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"><p>{{ html_limit(record.description,100)|raw}}</p> </a>
                        </div>
                        <img style=\" filter: blur(8px); -webkit-filter: blur(8px);\" src=\"{{record.poster.path | resize(200, 300)}}\">
                        
                      
                    </div>
                  </div>
                </div>  
                {% endif %}
              {% endspaceless %}
              {% endfor %}          
              </div>
              
            </section>", "F:\\website\\smovies/themes/smovies/pages/movies.htm", "");
    }
}
