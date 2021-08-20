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

/* sistema/menuPrincipal.html.twig */
class __TwigTemplate_563289444322f5ca7dac0cb14f932b7daf9490031440cc3c78b124a288763e94 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/menuPrincipal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/menuPrincipal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sistema/menuPrincipal.html.twig", 1);
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

        echo "Registro Digital - Inicio";
        
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
<div class=\" goma container-fluid \" >
    <div  class = \"text-center\">
        <h1 class=\"text-center d-inline \" style = \"color: gray; opacity: 0.5;\"> Home</h1>
        <img class=\"img-fluid iconoHome\" style=\"margin-bottom: 15px;\" width= \"45\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon.png"), "html", null, true);
        echo "\" />
    </div>

    ";
        // line 14
        echo "    <div class = \"media p-3\">
        <div class=\"container info-div\">
            <div class=\"info-title text-center\">
                <i class=\"color-unraf-light fas fa-graduation-cap i-width\"></i>
                <h2 class=\"color-unraf-light d-inline\">Últimos/as graduados/as cargadas</h2>
            </div>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduado"]) {
            // line 21
            echo "            <div class=\"card border-info m-3 cartas\">
                <div class=\"card-body\">
                    <div>
                        <b style=\"color:#306086\">Nombre y apellido:</b>
                        <p class=\"card-text\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "apellido", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Documento de identidad (tipo y Nº):</b>
                        <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "tipoDocumentoIdentidad", [], "any", false, false, false, 29), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "documentoIdentidad", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Lugar de nacimiento:</b>
                        <p class=\"card-text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "ciudad", [], "any", false, false, false, 33), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "provincia", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"card-footer text-right  border-info\">
                    <small class=\"text-muted\">Cargado el día: ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "fechaCreacion", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</small>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>

        <div class=\"container info-div\">
            <div class=\"info-title text-center\">
                <i class=\"color-unraf-yellow fas fa-graduation-cap i-width\"></i>
                <h2 class=\"color-unraf-yellow d-inline\">Últimas titulaciones cargadas</h2>
            </div>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["egresado"]) {
            // line 49
            echo "            <div class=\"card border-warning m-3 cartas\">
                <div class=\"card-body\">
                    <div>
                        <b style=\"color:#306086\">Nombre y apellido:</b>
                        <p class=\"card-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "nombre", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "apellido", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Documento de identidad (tipo y Nº):</b>
                        <p class=\"card-text\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "tipoDocumentoIdentidad", [], "any", false, false, false, 57), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "dni", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Lugar de nacimiento:</b>
                        <p class=\"card-text\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "ciudad", [], "any", false, false, false, 61), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "provincia", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"card-footer text-right  border-warning\">
                    <small class=\"text-muted\">Cargado el día: ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "fechaCreacion", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
            echo "</small>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['egresado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </div>
    </div>

</div>
<br>
<br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sistema/menuPrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 69,  202 => 65,  193 => 61,  184 => 57,  175 => 53,  169 => 49,  165 => 48,  156 => 41,  146 => 37,  137 => 33,  128 => 29,  119 => 25,  113 => 21,  109 => 20,  101 => 14,  95 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Inicio{% endblock %}

{% block body %}
{{parent()}}
<div class=\" goma container-fluid \" >
    <div  class = \"text-center\">
        <h1 class=\"text-center d-inline \" style = \"color: gray; opacity: 0.5;\"> Home</h1>
        <img class=\"img-fluid iconoHome\" style=\"margin-bottom: 15px;\" width= \"45\" src=\"{{asset('img/icon.png')}}\" />
    </div>

    {# DIV DE TABLAS #}
    <div class = \"media p-3\">
        <div class=\"container info-div\">
            <div class=\"info-title text-center\">
                <i class=\"color-unraf-light fas fa-graduation-cap i-width\"></i>
                <h2 class=\"color-unraf-light d-inline\">Últimos/as graduados/as cargadas</h2>
            </div>
            {% for graduado in graduados %}
            <div class=\"card border-info m-3 cartas\">
                <div class=\"card-body\">
                    <div>
                        <b style=\"color:#306086\">Nombre y apellido:</b>
                        <p class=\"card-text\">{{graduado.nombre}} {{graduado.apellido}}</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Documento de identidad (tipo y Nº):</b>
                        <p class=\"card-text\">{{graduado.tipoDocumentoIdentidad}} - {{graduado.documentoIdentidad}}</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Lugar de nacimiento:</b>
                        <p class=\"card-text\">{{graduado.ciudad}} - {{graduado.provincia}}</p>
                    </div>
                </div>
                <div class=\"card-footer text-right  border-info\">
                    <small class=\"text-muted\">Cargado el día: {{graduado.fechaCreacion|date(\"d/m/Y\")}}</small>
                </div>
            </div>
            {% endfor %}
        </div>

        <div class=\"container info-div\">
            <div class=\"info-title text-center\">
                <i class=\"color-unraf-yellow fas fa-graduation-cap i-width\"></i>
                <h2 class=\"color-unraf-yellow d-inline\">Últimas titulaciones cargadas</h2>
            </div>
            {% for egresado in egresados %}
            <div class=\"card border-warning m-3 cartas\">
                <div class=\"card-body\">
                    <div>
                        <b style=\"color:#306086\">Nombre y apellido:</b>
                        <p class=\"card-text\">{{egresado.nombre}} {{egresado.apellido}}</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Documento de identidad (tipo y Nº):</b>
                        <p class=\"card-text\">{{egresado.tipoDocumentoIdentidad}} - {{egresado.dni}}</p>
                    </div>
                    <div class = \"mt-2\">
                        <b style=\"color:#306086\">Lugar de nacimiento:</b>
                        <p class=\"card-text\">{{egresado.ciudad}} - {{egresado.provincia}}</p>
                    </div>
                </div>
                <div class=\"card-footer text-right  border-warning\">
                    <small class=\"text-muted\">Cargado el día: {{egresado.fechaCreacion|date(\"d/m/Y\")}}</small>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

</div>
<br>
<br>

{% endblock %}
", "sistema/menuPrincipal.html.twig", "/var/www/html/RegistroDigital/templates/sistema/menuPrincipal.html.twig");
    }
}
