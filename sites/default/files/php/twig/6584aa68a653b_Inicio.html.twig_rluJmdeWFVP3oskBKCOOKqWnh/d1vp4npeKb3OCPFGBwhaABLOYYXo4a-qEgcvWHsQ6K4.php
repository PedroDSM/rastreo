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

/* modules/Inicio/templates/Inicio.html.twig */
class __TwigTemplate_6402130e6f450e592e1451f67a9c9449 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("Inicio/Inicio"), "html", null, true);
        echo "

<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <!-- CSS de Bootstrap 5 -->
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!-- JS de Bootstrap 5 (requiere Popper.js) -->
  <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\">
  <title>Argos-Rastreo</title>
</head>
<body>
<header>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">Icono</a>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarTogglerDemo01\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">HOME</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">BRINDAMOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">PERMISOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">SERVICIOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">PRODUCTOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">PLATAFORMAS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">CONTACTO</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#\">BOLSA DE TRABAJO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>

<div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <!-- Fotos -->
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/portada_1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Portada-01\">
    </div>

    <div class=\"carousel-item\">
      <img src=\"";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/portada_2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Portada-02\">
    </div>

    <div class=\"carousel-item\">
      <img src=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/portada_3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Portada-03\">
    </div>
  </div>

  <!-- Controles izquierda - derecha -->
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Anterior</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Siguiente</span>
  </button>

</div>

<div id=\"Brindamos\">

</div>

<div id=\"Permisos\">
  
</div>

<div id=\"Servicios\">
  
</div>

<div id=\"Productos\">
  
</div>

<div id=\"Plataformas\">
  
</div>

<div id=\"Contactos\">
  
</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "modules/Inicio/templates/Inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 70,  109 => 66,  102 => 62,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/Inicio/templates/Inicio.html.twig", "/var/www/Tracksys/modules/Inicio/templates/Inicio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2, "file_url" => 62);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
