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

/* modules/Productos/templates/Productos.html.twig */
class __TwigTemplate_ae7309d349ecbd94483a1b366826af23 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("Productos/Productos"), "html", null, true);
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
    <img src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/rastreologo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarTogglerDemo01\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio\">HOME</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Brindamos\">BRINDAMOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Permisos\">PERMISOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Servicios\">SERVICIOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Productos\">PRODUCTOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Plataformas\">PLATAFORMAS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio#Conntacto\">CONTACTO</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"/argos-rastreo/inicio\">BOLSA DE TRABAJO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>
<div class=\"Background\">
<br><br><br>
  <div id=\"Productos\">
    <p class=\"TituloInicial\">Productos</p>
    <p class=\"Subtitulo\">Linea CCTV Móvil</p>
    <div class=\"Secciones\">
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">Cámara bullet</p>
        <img src=\"";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto3.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"Cámara-bullet\"><br>
        <p class=\"ProductosTexto\">Adopta diseño compacto micro-dimensionado, que minimiza la interferencia contra actividades en curso.</p>
        <p class=\"ProductosTexto\">Teniendo en cuenta los requisitos estéticos, la cámara es completamente negra.</p>
        <p class=\"ProductosTexto\"><strong>Características: </strong></p>
        <p class=\"ProductosTexto\"><strong>Lente ojo 2.8 mm DWDR </strong></p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">Cámara domo</p>
        <img src=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto2.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"Cámara-domo\"><br>
        <p class=\"ProductosTexto\">Cámara de seguridad diseñada especialmente para DVR Móvil, cuenta con una resolución de 2 Megapíxeles 
          (1920x1080) lo que nos brinda una gran calidad de imagen. Visión de 83 grados con su lente de 3.6mm.</p>
        <p class=\"ProductosTexto\">Ademas cuenta con un indice de protección IP67.</p>
        <p class=\"ProductosTexto\"><strong>Características: </strong></p>
        <p class=\"ProductosTexto\"><strong>Leds IR </strong></p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">Cámara Saxxon​</p>
        <img src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto1.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"Cámara-Saxxon\"><br>
        <p class=\"ProductosTexto\">Es una Mini cámara de Video Vigilancia, con una muy Alta Resolución.<br>
        Este equipo se instala fácilmente en cualquier lugar pasando inadvertida gracias a su tamaño.</p>
        <p class=\"ProductosTexto\"><strong>Características: </strong></p>
        <p class=\"ProductosTexto\"><strong>resolución 1080P colores bien definidos un lente fijo PIN HOLE de 3.7 mm </strong></p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">DVR Móvil​</p>
        <img src=\"";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto8.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"DVR-Móvil\"><br>
        <p class=\"ProductosTexto\">Video grabadora móvil. Ofrece reducir el ancho de banda de transmisión y el almacenamiento. 
          Puede admitir la grabación en tiempo real y detección de rostros. Enviá toda la información a través de red de datos o inalámbrica.</p>
        <p class=\"ProductosTexto\"><strong>Características: </strong></p>
        <p class=\"ProductosTexto\"><strong>Tecnología H.265 Definición 1080 3G/4G/WIFI </strong></p>
      </div>
    </div><br>
    <p class=\"Subtitulo\">Línea GPS y Satelital</p>
    <div class=\"Secciones\">
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">CelloTrack</p>
        <img src=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto7.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"CelloTrack\"><br>
        <p class=\"ProductosTexto\">La línea de productos CelloTrack está diseñada para el seguimiento avanzado de activos con monitoreo remoto, 
          que cuenta con una funcionalidad mejorada, robustez y facilidad de instalación. </p>
        <p class=\"ProductosTexto\">La unidad es IP67 resistente a la intemperie (-20° C a +45° C).</p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">CR300B</p>
        <img src=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto6.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"CR300B\"><br>
        <p class=\"ProductosTexto\">Dispositivo GPS con comunicación 3G para rastreo gps de vehículos.</p>
        <p class=\"ProductosTexto\">Su tamaño compacto, lo hace ideal para aplicaciones de gestión de flotas y seguridad</p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">Eco4Ligth-S​</p>
        <img src=\"";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto5.png"), "html", null, true);
        echo "\" width=\"40%\" alt=\"Eco4Ligth-S\"><br>
        <p class=\"ProductosTexto\">Dispositivo rastreador GPS compacto, diseñado para rastreo de vehículos y monitoreo 
          de eventos ademas de proveer información acerca de la localización del vehículo.</p>
        <p class=\"ProductosTexto\">(Velocidad, Historial de viajes, Consumo y Nivel de combustible, etc.)</p>
      </div>
      <div class=\"contenido\">
        <p class=\"ProductosTitulos\">Skywave​</p>
        <img src=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto4.png"), "html", null, true);
        echo "\" width=\"40%\" alt=Skywave​\"><br>
        <p class=\"ProductosTexto\">Dispositivo de rastreo GPS de modo dual para uso con satélites y redes celulares nacionales e internacionales.</p>
        <p class=\"ProductosTexto\">Las entradas para varios sensores permiten que los datos sean recogidos sin importar donde se encuentre.</p>      
      </div>
    </div><br>
  </div>

</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "modules/Productos/templates/Productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 121,  175 => 114,  166 => 108,  156 => 101,  142 => 90,  131 => 82,  119 => 73,  108 => 65,  64 => 24,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/Productos/templates/Productos.html.twig", "/var/www/Tracksys/modules/Productos/templates/Productos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2, "file_url" => 24);

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
