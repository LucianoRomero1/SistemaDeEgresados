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

/* graduado/verGraduados.html.twig */
class __TwigTemplate_d92b2b74db9b4bd6b10263c0d0c16f60a95c747d2c2367cb19203d64e3a0f9f3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/verGraduados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/verGraduados.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/verGraduados.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Registro Digital - Ver Graduados/as";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class = \"container-fluid\">
    <div class=\"bordeSombreado  divBuscar\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "buscar", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Buscar por nombre..."]]);
        echo "  
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Buscar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "btn btn-buscar"]]);
        echo " 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Cargar graduado/a </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosPersonalesGraduado");
        echo "\">Nuevo graduado/a</a>
                </div>
            </div>
        </div>
        <br>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\"> Cantidad de graduados/as cargadas: ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 28, $this->source); })())), "html", null, true);
        echo " </b>
        </div>
    </div> 
    <br>
    <table class=\"table table-borderless mt-2\">
            <thead class = \"text-white\" style = \"background-color: #0F9FA8;\">
                    <th>Nº</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th style=\"text-align: center;\">Datos Graduado</th>
                    <th style=\"text-align: center;\">Imagen TED</th>
                    <th style=\"text-align: center;\">Eliminar</th>
                </tr>
            </thead>
        
        <tbody id=\"myTable\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 44, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["graduado"]) {
            // line 45
            echo "                <tr>
                    <th class = \"pl-3\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
            echo "</th>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "apellido", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "nombre", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosPersonalesGraduado", ["id" => twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                        <a class =\"btn grow\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verTitulacionesGraduado", ["id" => twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar titulos obtenidos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarImagenGraduado", ["id" => twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar imagen TED\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"DeleteGraduado(";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo ")\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td> 
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>

    </table> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src= \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteGraduado.js"), "html", null, true);
        echo "\"></script> 
<script src = \"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popup.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/verGraduados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 65,  239 => 64,  235 => 63,  225 => 62,  211 => 57,  194 => 54,  190 => 53,  185 => 51,  181 => 50,  176 => 48,  172 => 47,  168 => 46,  165 => 45,  148 => 44,  129 => 28,  124 => 26,  116 => 21,  107 => 15,  103 => 14,  95 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Graduados/as{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    <div class=\"bordeSombreado  divBuscar\">
        {{ form_start(form, {'enctype':'multipart/form-data'})}}
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h6 class = \"text-center\" style=\"color:#306086\">Búsqueda</h6>
                <div class = \"media\">
                    {{ form_widget(form.buscar, {attr: {class: 'form-control',placeholder: 'Buscar por nombre...'} }) }}  
                    {{ form_widget(form.Buscar, {attr: {class: 'btn btn-buscar'} }) }} 
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 style=\"color:#306086\" class = \"text-center\">Cargar graduado/a </h6>
                <div class = \"text-center\">
                    <a class = \"btn botonCeleste ancho text-white grow text-center\" style = \"\" href = \"{{path('datosPersonalesGraduado')}}\">Nuevo graduado/a</a>
                </div>
            </div>
        </div>
        <br>
        {{ form_end(form) }}
        <div class = \"m-2\">
            <b style = \"color: #0F9FA8;\"> Cantidad de graduados/as cargadas: {{graduados|length}} </b>
        </div>
    </div> 
    <br>
    <table class=\"table table-borderless mt-2\">
            <thead class = \"text-white\" style = \"background-color: #0F9FA8;\">
                    <th>Nº</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th style=\"text-align: center;\">Datos Graduado</th>
                    <th style=\"text-align: center;\">Imagen TED</th>
                    <th style=\"text-align: center;\">Eliminar</th>
                </tr>
            </thead>
        
        <tbody id=\"myTable\">
            {% for graduado in graduados %}
                <tr>
                    <th class = \"pl-3\">{{loop.index}}</th>
                    <td>{{graduado.apellido}}</td>
                    <td>{{graduado.nombre}}</td>
                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"{{path('modificarDatosPersonalesGraduado', {'id': graduado.id})}}\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                        <a class =\"btn grow\" href=\"{{path('verTitulacionesGraduado', {'id': graduado.id})}}\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar titulos obtenidos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('modificarImagenGraduado', {'id': graduado.id})}}\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar imagen TED\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"DeleteGraduado({{graduado.id}})\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td> 
                </tr>
            {% endfor %}
        </tbody>

    </table> 
</div>
{% endblock %}
{% block  javascripts %}
{{parent()}}
<script src= \"{{asset('js/deleteGraduado.js')}}\"></script> 
<script src = \"{{asset('js/popup.js')}}\"></script>
{% endblock %}
", "graduado/verGraduados.html.twig", "/var/www/html/RegistroDigital/templates/graduado/verGraduados.html.twig");
    }
}
