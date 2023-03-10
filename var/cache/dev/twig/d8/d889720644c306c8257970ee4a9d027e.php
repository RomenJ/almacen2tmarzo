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

/* objetosalmacen/show.html.twig */
class __TwigTemplate_1d0f6365ea1cc6b4ba1caf078ed09c4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objetosalmacen/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objetosalmacen/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "objetosalmacen/show.html.twig", 1);
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

        echo "Objetosalmacen";
        
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
        echo "    <h1>Objetosalmacen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 16, $this->source); })()), "descripcion", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 20, $this->source); })()), "cantidad", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ubicacion</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 24, $this->source); })()), "ubicacion", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entradaalmacen</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 28, $this->source); })()), "entradaalmacen", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 28, $this->source); })()), "entradaalmacen", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Salidaalmacen</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 32, $this->source); })()), "salidaalmacen", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 32, $this->source); })()), "salidaalmacen", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objetosalmacen_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objetosalmacen_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["objetosalmacen"]) || array_key_exists("objetosalmacen", $context) ? $context["objetosalmacen"] : (function () { throw new RuntimeError('Variable "objetosalmacen" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "objetosalmacen/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "objetosalmacen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Objetosalmacen{% endblock %}

{% block body %}
    <h1>Objetosalmacen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ objetosalmacen.id }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ objetosalmacen.descripcion }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ objetosalmacen.cantidad }}</td>
            </tr>
            <tr>
                <th>Ubicacion</th>
                <td>{{ objetosalmacen.ubicacion }}</td>
            </tr>
            <tr>
                <th>Entradaalmacen</th>
                <td>{{ objetosalmacen.entradaalmacen ? objetosalmacen.entradaalmacen|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Salidaalmacen</th>
                <td>{{ objetosalmacen.salidaalmacen ? objetosalmacen.salidaalmacen|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_objetosalmacen_index') }}\">back to list</a>

    <a href=\"{{ path('app_objetosalmacen_edit', {'id': objetosalmacen.id}) }}\">edit</a>

    {{ include('objetosalmacen/_delete_form.html.twig') }}
{% endblock %}
", "objetosalmacen/show.html.twig", "C:\\xampp\\htdocs\\master-php\\SymfonyExamenAlmacen5\\templates\\objetosalmacen\\show.html.twig");
    }
}
