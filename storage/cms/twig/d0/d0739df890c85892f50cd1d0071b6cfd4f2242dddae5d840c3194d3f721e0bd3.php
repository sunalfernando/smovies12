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

/* /home/smovies12.tk/public_html/themes/smovies/layouts/Main.htm */
class __TwigTemplate_342543d6798954edfe8f0f5ae9e7f3cf433c45d19c2a85ba36b2cc4595dc5c30 extends \Twig\Template
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
        echo "<html>
\t<head>
\t\t<title>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-lightbox.css");
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/lightbox.css");
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Modak&display=swap\" rel=\"stylesheet\">

\t</head>
\t<body>
\t\t<!-- Nav -->
\t\t<nav class=\" bg-transparent navbar fixed-top navbar-expand-lg navbar-light\">
\t\t  <a class=\"navbar-brand\" style=\"font-family: 'Modak', cursive; font-size: 30px; color: white;\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("smovies");
        echo "\"><img id=\"logo\" class=\"invert\" src=\"";
        echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png"), 100, 50]);
        echo "\"></a>
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t  </button>
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t    <ul class=\"links navbar-nav\">
\t\t\t      <li style=\"border-radius: 50px;\" class=\"nav-item btn ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) == "smovies")) {
            echo " active btn-outline-light bg-dark ";
        }
        echo "\">
\t\t\t        <a style=\"color: white;\" class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("smovies");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t      </li>
\t\t      <li style=\"border-radius: 50px;\" class=\"nav-item btn ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == "movies")) {
            echo " active btn-outline-light bg-dark ";
        }
        echo "\">
\t\t        <a style=\"color: white;\" class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a>
\t\t      </li>
\t\t    </ul>
  </div>
</nav>
\t\t\t
\t\t";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "\t

\t\t<!-- Footer -->
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-envelope-o\"><span class=\"label\">Email</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; Untitled. All rights reserved.
\t\t\t\t</div>
\t\t\t</footer>

\t\t<!-- Scripts -->
\t\t\t<script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrollex.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/skel.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/util.js");
        echo "\"></script>
\t\t\t<script defer src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lightbox.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-lightbox.min.js");
        echo "\"></script>
\t\t\t<script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t
\t\t\t<script>
// Open the Modal
function openModal() {
  document.getElementById(\"myModal\").style.display = \"block\";
}

// Close the Modal
function closeModal() {
  document.getElementById(\"myModal\").style.display = \"none\";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides\");
  var dots = document.getElementsByClassName(\"demo\");
  var captionText = document.getElementById(\"caption\");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex-1].style.display = \"block\";
  dots[slideIndex-1].className += \" active\";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

\t\t\t<script>

      // Scrolling Effect

      \$(window).on(\"scroll\", function() {
            if(\$(window).scrollTop()) {
                  \$('nav').addClass('navbar-dark bg-black');
                  \$('#logo').addClass('invert')
                  \$('nav').removeClass('bg-transparent bg-trans');

            }

            else {
                  \$('nav').removeClass('navbar-dark bg-black');
                  \$('nav').addClass('bg-transparent bg-trans');
            }
      })
\t\t\t</script>
\t\t\t

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/smovies12.tk/public_html/themes/smovies/layouts/Main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  103 => 32,  94 => 26,  88 => 25,  83 => 23,  77 => 22,  66 => 16,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>{{ this.page.title }}</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap-lightbox.css'|theme}}\" />
\t\t<link rel=\"stylesheet\" href=\"{{'assets/css/lightbox.css'|theme}}\" />
\t\t<link rel=\"stylesheet\" href=\"{{'assets/css/main.css'|theme}}\" />
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Modak&display=swap\" rel=\"stylesheet\">

\t</head>
\t<body>
\t\t<!-- Nav -->
\t\t<nav class=\" bg-transparent navbar fixed-top navbar-expand-lg navbar-light\">
\t\t  <a class=\"navbar-brand\" style=\"font-family: 'Modak', cursive; font-size: 30px; color: white;\" href=\"{{'smovies'|page}}\"><img id=\"logo\" class=\"invert\" src=\"{{'assets/images/logo.png'|theme | resize(100,50)}}\"></a>
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t    <span class=\"navbar-toggler-icon\"></span>
\t\t  </button>
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t    <ul class=\"links navbar-nav\">
\t\t\t      <li style=\"border-radius: 50px;\" class=\"nav-item btn {% if this.page.id == 'smovies' %} active btn-outline-light bg-dark {% endif %}\">
\t\t\t        <a style=\"color: white;\" class=\"nav-link\" href=\"{{'smovies'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t      </li>
\t\t      <li style=\"border-radius: 50px;\" class=\"nav-item btn {% if this.page.id == 'movies' %} active btn-outline-light bg-dark {% endif %}\">
\t\t        <a style=\"color: white;\" class=\"nav-link\" href=\"{{'movies'|page}}\">Movies</a>
\t\t      </li>
\t\t    </ul>
  </div>
</nav>
\t\t\t
\t\t{% page %}\t

\t\t<!-- Footer -->
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-envelope-o\"><span class=\"label\">Email</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; Untitled. All rights reserved.
\t\t\t\t</div>
\t\t\t</footer>

\t\t<!-- Scripts -->
\t\t\t<script src=\"{{'assets/js/jquery.min.js'|theme}}\"></script>
\t\t\t<script src=\"{{'assets/js/jquery.scrollex.min.js'|theme}}\"></script>
\t\t\t<script src=\"{{'assets/js/skel.min.js'|theme}}\"></script>
\t\t\t<script src=\"{{'assets/js/util.js'|theme}}\"></script>
\t\t\t<script defer src=\"{{'assets/js/lightbox.js'|theme}}\"></script>
\t\t\t<script src=\"{{'assets/js/bootstrap-lightbox.min.js'|theme}}\"></script>
\t\t\t<script src=\"{{'assets/js/main.js'|theme}}\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t
\t\t\t<script>
// Open the Modal
function openModal() {
  document.getElementById(\"myModal\").style.display = \"block\";
}

// Close the Modal
function closeModal() {
  document.getElementById(\"myModal\").style.display = \"none\";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides\");
  var dots = document.getElementsByClassName(\"demo\");
  var captionText = document.getElementById(\"caption\");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex-1].style.display = \"block\";
  dots[slideIndex-1].className += \" active\";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

\t\t\t<script>

      // Scrolling Effect

      \$(window).on(\"scroll\", function() {
            if(\$(window).scrollTop()) {
                  \$('nav').addClass('navbar-dark bg-black');
                  \$('#logo').addClass('invert')
                  \$('nav').removeClass('bg-transparent bg-trans');

            }

            else {
                  \$('nav').removeClass('navbar-dark bg-black');
                  \$('nav').addClass('bg-transparent bg-trans');
            }
      })
\t\t\t</script>
\t\t\t

\t</body>
</html>", "/home/smovies12.tk/public_html/themes/smovies/layouts/Main.htm", "");
    }
}
