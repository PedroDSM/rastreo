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
      <a href=\"#Inicio\"><img src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/rastreologo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarTogglerDemo01\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Inicio\">HOME</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Brindamos\">BRINDAMOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Permisos\">PERMISOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Servicios\">SERVICIOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Productos\">PRODUCTOS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Plataformas\">PLATAFORMAS</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\" href=\"#Contactos\">CONTACTO</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link small-text\">BOLSA DE TRABAJO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>

<div id=\"Inicio\" class=\"carousel slide\" data-bs-ride=\"carousel\">
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
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Inicio\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Anterior</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Inicio\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Siguiente</span>
  </button>

</div>

<div id=\"Brindamos\">
  <div class=\"BrindamosFondo\">
    <p class=\"TituloInicial\">Brindamos</p>
    <div class=\"BrindamosContenido\">
      <div class=\"contenido\">
        <p class=\"BrindamosTitulos\">Asistencia y conectividad</p>
        <img src=\"";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono1.png"), "html", null, true);
        echo "\" width=\"50%\" height=\"50%\" alt=\"Icono-01\">
      </div>
      <div class=\"contenido\">
        <p class=\"BrindamosTitulos\">Ahorro de Insumos básicos</p>
        <img src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono2.png"), "html", null, true);
        echo "\" width=\"43%\" height=\"43%\" alt=\"Icono-02\">
      </div>
      <div class=\"contenido\">
        <p class=\"BrindamosTitulos\">Seguridad y Confianza</p>
        <img src=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono3.png"), "html", null, true);
        echo "\" width=\"45%\" height=\"45%\" alt=\"Icono-03\">
      </div>
    </div><br><br>
  </div>
</div>

<div id=\"Permisos\">
  <div class=\"PermisosFondo\">
    <p class=\"TituloInicial\">Permisos</p>
    <img src=\"";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono_permiso.png"), "html", null, true);
        echo "\" width=\"15%\" alt=\"Icono-Permiso\"><br>
    <p class=\"PermisoSub\">Permiso Estatal Coahuila</p>
    <p class=\"PermisoCont\">SSP/ESP/349/15</p><br>
  </div>
</div>

<div id=\"Servicios\">
  <div class=\"ServiciosFondo\">
    <p class=\"TituloInicial\">Servicios</p>

    <div class=\"ServiciosContenido\">
      <div class=\"contenido\">
        <p class=\"ServiciosTitulos\">CENTRO DE CONTROL Y MONITOREO (CECOM)</p>
        <img src=\"";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono4.png"), "html", null, true);
        echo "\" width=\"35%\" alt=\"Icono-04\"><br>
        <p class=\"ServiciosTexto\">Apoyado con la tecnología más avanzada, se opera 24 horas los 365 días del año.</p>
        <p class=\"ServiciosTexto\">A través de nuestras plataformas de rastreo satelital se ofrece servicios 
          e información en tiempo real y análisis de información histórica de acuerdo 
          a las necesidades de nuestros clientes.</p>
      </div>
      <div class=\"contenido\">
        <p class=\"ServiciosTitulos\">HOSTING DE DVR MÓVIL Y CCTV</p>
        <img src=\"";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono5.png"), "html", null, true);
        echo "\" width=\"35%\" alt=\"Icono-05\"><br>
        <p class=\"ServiciosTexto\">Servidor Argos permite publicar por medio de la aplicación Web datos en vivo. 
          Contamos con servidores protegidos para poder transferir datos, texto e imagen.</p>
      </div>
      <div class=\"contenido\">
        <p class=\"ServiciosTitulos\">INSTALACIÓN DE GPS Y VIDEOVIGILANCIA</p>
        <img src=\"";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono6.png"), "html", null, true);
        echo "\" width=\"35%\" alt=\"Icono-06\"><br>
        <p class=\"ServiciosTexto\">Instalación y mantenimiento de dispositivos de localización satelital (GPS) 
          y sistemas CCTV móvil.</p>
      </div>
    </div>

  </div>
</div>

<div id=\"Productos\">
  <div class=\"ProductosFondo\">
    <p class=\"TituloInicial\">Productos</p>
    <div id=\"image-container\" data-mouse-down-at=\"0\" data-prev-percentage=\"0\">
      <img class=\"image-content\" src=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto1.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto1\">
      <img class=\"image-content\" src=\"";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto2.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto2\">
      <img class=\"image-content\" src=\"";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto3.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto3\">
      <img class=\"image-content\" src=\"";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto4.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto4\">
      <img class=\"image-content\" src=\"";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto5.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto5\">
      <img class=\"image-content\" src=\"";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto6.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto6\">
      <img class=\"image-content\" src=\"";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto7.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto7\">
      <img class=\"image-content\" src=\"";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/producto8.png"), "html", null, true);
        echo "\" draggable=\"false\" alt=\"Producto8\">
    </div><br>
    <a class=\"btn btn-primary\" href=\"/argos-rastreo/Productos\">Ver mas &gt; </a><br><br>
  </div>
</div>

<div id=\"Plataformas\">
  <div class=\"PlataformasFondo\">
    <p class=\"TituloInicial\">Plataformas</p>
    <img src=\"";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl("public://images/icono_plataforma.png"), "html", null, true);
        echo "\" class=\"Icono-Plataformas\" alt=\"Icono-Plataformas\"><br>
    <p class=\"PlataformasTexto\">Es un sistema de localización vehicular con cobertura nacional que permite administrar<br> 
    las flotillas optimizando la logística y seguridad de tu empresa. Ofrece la información<br> 
    de ubicación minuto a minuto, monitoreo del comportamiento de la flotilla y reportes<br> 
    con la información obtenida, con el propósito de que se analice y se adapte a las<br> estrategias del negocio.</p>
  </div>
</div>

<div id=\"Contactos\">
  <div class=\"ContactosFondo\">
    <div class=\"ContactosContenedor\">
      <div class=\"ContactosItem1\">
        <iframe class=\"maps-move\" style=\"border:0;\" 
          title=\"\" frameborder=\"0\" 
          src=\"https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m4!2m1!1sC.+Joaqu%C3%ADn+Moreno+Sur+120+LE++Col.+Centro%2C+Torre%C3%B3n.+Coah.!5e0!6i16!5m1!1sen\">
        </iframe>
      </div>
      <div class=\"ContactosItem2\">
        <p><strong>ATENCIÓN A CLIENTES</strong></p>
        <p>Tel. (871) 793 - 6463</p>
        <p>Ext. 4003</p>
        <p>Ext. 4047</p>
        <p>WhatsApp (871) 329 - 2719</p>
        <p>C. &nbsp;JOAQUÍN MORENO 120 SUR,</p>
        <p>COLONIA CENTRÓ. CP. 27000.</p>
        <p>TORREÓN, COAHUILA.</p>
        <p><a class=\"link\" href=\"mailto:atencion.clientes@argos-seguridad.com\">atencion.clientes@argosrastreo.com</a></p>
        <a href=\"https://www.facebook.com/Argosrastreo/\"><i class=\"fab fa-facebook\"></i></a>
        <a href=\"https://www.instagram.com/Argosrastreo/\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"https://api.whatsapp.com/send?phone=528713292719\"><i class=\"fab fa-whatsapp\"></i></a>
        <a href=\"mailto:atencion.clientes@argosrastreo.com\"><i class=\"fas fa-envelope\"></i></a>
      </div>
    </div>
  </div>
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
        return array (  262 => 165,  250 => 156,  246 => 155,  242 => 154,  238 => 153,  234 => 152,  230 => 151,  226 => 150,  222 => 149,  206 => 136,  197 => 130,  186 => 122,  170 => 109,  158 => 100,  151 => 96,  144 => 92,  119 => 70,  112 => 66,  105 => 62,  64 => 24,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/Inicio/templates/Inicio.html.twig", "/var/www/Tracksys/modules/Inicio/templates/Inicio.html.twig");
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
