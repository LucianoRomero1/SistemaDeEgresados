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
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row mt-3\">
        <div class = \"col-sm-7 media\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "buscar", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Buscar por apellido o por DNI"]]);
        echo "  
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "Buscar", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "btn btn-buscar d-inline"]]);
        echo "  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datosPersonalesGraduado");
        echo "\">Nuevo graduado/a</a>
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de graduados/as cargadas: ";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 21, $this->source); })())), "html", null, true);
        echo " </b>
    </div>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 36, $this->source); })()));
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
            // line 37
            echo "                <tr>
                    <th class = \"pl-3\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "apellido", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "nombre", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    ";
            // line 41
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 42
                echo "                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDatosPersonalesGraduado", ["id" => twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar titulos obtenidos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarImagenGraduado", ["id" => twig_get_attribute($this->env, $this->source, $context["graduado"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar imagen TED\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"#\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td> 
                    ";
            } else {
                // line 48
                echo " 
                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-edit mb-3\" style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-graduate mb-3\"   style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"#\"><i class=\"fas fa-file-alt mb-3\" style = \"font-size: 20px; color: grey\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"#\"><i class=\" fas fa-trash\"   style = \"font-size: 20px; color:grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>  
                    ";
            }
            // line 55
            echo "   
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
        // line 58
        echo "        </tbody>

    </table> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src= \"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteEgresado.js"), "html", null, true);
        echo "\"></script> 
<script src = \"";
        // line 66
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
        return array (  247 => 66,  243 => 65,  239 => 64,  229 => 63,  215 => 58,  199 => 55,  189 => 48,  183 => 46,  177 => 43,  174 => 42,  172 => 41,  168 => 40,  164 => 39,  160 => 38,  157 => 37,  140 => 36,  124 => 23,  119 => 21,  111 => 16,  104 => 12,  100 => 11,  94 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Ver Graduados/as{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container-fluid\">
    {{ form_start(form, {'enctype':'multipart/form-data'})}}
    <div class = \"container row mt-3\">
        <div class = \"col-sm-7 media\">
            {{ form_widget(form.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Buscar por apellido o por DNI'} }) }}  
            {{ form_widget(form.Buscar, {attr: {class: 'btn btn-buscar d-inline'} }) }}  
        </div>
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-2\">
            <a class = \"btn form-control campoForm nueva\" style = \"background-color: #; color: white;\" href = \"{{path('datosPersonalesGraduado')}}\">Nuevo graduado/a</a>
        </div>
    </div>
    <hr>
    <div class = \"m-3\">
        <b style = \"color: #0F9FA8;\">Cantidad de graduados/as cargadas: {{graduados|length}} </b>
    </div>
    {{ form_end(form) }}
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
                    {% if  is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"{{path('modificarDatosPersonalesGraduado', {'id': graduado.id})}}\"><i class=\"fas fa-user-edit mb-3\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"Modificar datos personales\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-graduate mb-3\"  data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"Modificar titulos obtenidos\" style = \"font-size: 20px;color: #0F9FA8;\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"{{path('modificarImagenGraduado', {'id': graduado.id})}}\"><i class=\"fas fa-file-alt mb-3\"  data-toggle=\"tooltip\" data-placement=\"right\" data-html=\"true\" title=\"Modificar imagen TED\" style = \"font-size: 20px; color: #FEB413;\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"#\"><i class=\" fas fa-trash text-danger\" style = \"font-size: 20px;\"></i></a></td> 
                    {% else %} 
                    <td style=\"text-align: center;\">
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-edit mb-3\" style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                        <a class =\"btn grow\" href=\"#\"><i class=\"fas fa-user-graduate mb-3\"   style = \"font-size: 20px;color: grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a>
                    </td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" href=\"#\"><i class=\"fas fa-file-alt mb-3\" style = \"font-size: 20px; color: grey\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>
                    <td style=\"text-align: center;\"><a class =\"btn grow\" onclick=\"#\"><i class=\" fas fa-trash\"   style = \"font-size: 20px; color:grey;\" data-toggle=\"tooltip\" data-placement=\"left\" data-html=\"true\" title=\"No tiene el rol necesario para esta acción\"></i></a></td>  
                    {% endif %}   
                </tr>
            {% endfor %}
        </tbody>

    </table> 
</div>
{% endblock %}
{% block  javascripts %}
{{parent()}}
<script src= \"{{asset('js/deleteEgresado.js')}}\"></script> 
<script src = \"{{asset('js/popup.js')}}\"></script>
{% endblock %}
", "graduado/verGraduados.html.twig", "/var/www/html/RegistroDigital/templates/graduado/verGraduados.html.twig");
    }
}
