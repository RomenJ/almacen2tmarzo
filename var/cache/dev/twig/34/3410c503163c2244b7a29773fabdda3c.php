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

/* home/index.html.twig */
class __TwigTemplate_c2f121f355bcc22bd47ee2e1ee3e15c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
   
   ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "         <h6> Usuario registrado : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo " </h6>
       ";
            // line 16
            echo "

    ";
            // line 18
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 19
                echo "        
          <h5> Bienvenid@ Jefe </h5>
              <h6><a href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</h6></a> 
          <h6><a href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objetosalmacen_new");
                echo "\">Crear nuevo objeto de almacén</h6></a>     
          
     ";
            }
            // line 25
            echo "   ";
            // line 26
            echo "      
   <h5> Bienvenid@ Trabajador </h5>
     <h6><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</h6></a>
     <h6><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registroentrada_index");
            echo "\"></h6>Entrada de objetos </a>    
     
     <h6><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registrosalida_index");
            echo "\"></h6>Salida de objetos </a>     

     ";
        } else {
            // line 34
            echo "      <h6><b>Usuario no registrado </b></h6>  

      <ul>
          ";
            // line 39
            echo "        <li>REGISTRO <code><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> registro</a></code></li>
        <li>LOGIN <code><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> login</a></code></li>
            
    </ul>
       ";
        }
        // line 44
        echo "
  ";
        // line 46
        echo "
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Ubicacion</th>
                <th>Entrada en almacen</th>
                <th>Salida en almacen</th>
 
            </tr>
        </thead>
        <tbody>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetosalmacens"]) || array_key_exists("objetosalmacens", $context) ? $context["objetosalmacens"] : (function () { throw new RuntimeError('Variable "objetosalmacens" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["objetosalmacen"]) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "descripcion", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "cantidad", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "ubicacion", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "entradaalmacen", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "entradaalmacen", [], "any", false, false, false, 66), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "salidaalmacen", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objetosalmacen"], "salidaalmacen", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
           
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetosalmacen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>


</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 75,  218 => 71,  209 => 67,  205 => 66,  201 => 65,  197 => 64,  193 => 63,  189 => 62,  186 => 61,  181 => 60,  165 => 46,  162 => 44,  155 => 40,  150 => 39,  145 => 34,  139 => 31,  134 => 29,  130 => 28,  126 => 26,  124 => 25,  118 => 22,  114 => 21,  110 => 19,  108 => 18,  104 => 16,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
   
   {% if app.user %}
         <h6> Usuario registrado : {{ app.user.username }} </h6>
       {#       <li>Mida el dolor de la sesión <code><a href=\"{{ path('app_evamax_index') }}\"> Realizar Evamax</a></code></li>      #}


    {% if is_granted('ROLE_ADMIN') %}
        
          <h5> Bienvenid@ Jefe </h5>
              <h6><a href=\"{{ path('app_logout') }}\">Logout</h6></a> 
          <h6><a href=\"{{ path('app_objetosalmacen_new') }}\">Crear nuevo objeto de almacén</h6></a>     
          
     {% endif %}
   {# <li>Hola {{ app.user }}\"></li>  #}
      
   <h5> Bienvenid@ Trabajador </h5>
     <h6><a href=\"{{ path('app_logout') }}\">Logout</h6></a>
     <h6><a href=\"{{ path('app_registroentrada_index') }}\"></h6>Entrada de objetos </a>    
     
     <h6><a href=\"{{ path('app_registrosalida_index') }}\"></h6>Salida de objetos </a>     

     {% else %}
      <h6><b>Usuario no registrado </b></h6>  

      <ul>
          {# <li>REGISTRO <code><a href=\"{{ path('app_register') }}\"> registro</a></code></li>
        <li>LOGIN <code><a href=\"{{ path('app_login') }}\"> login</a></code></li> #}
        <li>REGISTRO <code><a href=\"{{ path('app_register') }}\"> registro</a></code></li>
        <li>LOGIN <code><a href=\"{{ path('app_login') }}\"> login</a></code></li>
            
    </ul>
       {% endif %}

  {#bloque de contenido de objetos  #}

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Ubicacion</th>
                <th>Entrada en almacen</th>
                <th>Salida en almacen</th>
 
            </tr>
        </thead>
        <tbody>
        {% for objetosalmacen in objetosalmacens %}
            <tr>
                <td>{{ objetosalmacen.id }}</td>
                <td>{{ objetosalmacen.descripcion }}</td>
                <td>{{ objetosalmacen.cantidad }}</td>
                <td>{{ objetosalmacen.ubicacion }}</td>
                <td>{{ objetosalmacen.entradaalmacen ? objetosalmacen.entradaalmacen|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ objetosalmacen.salidaalmacen ? objetosalmacen.salidaalmacen|date('Y-m-d H:i:s') : '' }}</td>
           
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>


</div>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\master-php\\SymfonyExamenAlmacen5 Romen J Martin\\templates\\home\\index.html.twig");
    }
}
