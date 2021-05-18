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
";
        // line 17
        echo "
<div class=\" goma container-fluid\" >
    <div  class = \"text-center\">
        <h1 class=\"text-center d-inline \" style = \"color: gray; opacity: 0.5;\"> Home</h1>
        <img class=\"img-fluid iconoHome\" style=\"margin-bottom: 15px;\" width= \"45\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon.png"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 24
        echo "    <div class=\"container info-div\" id = \"\">

        <div class=\"info-title text-left\">
            <i class=\"color-unraf-light fas fa-graduation-cap i-width\"></i>
            <h2 class=\"color-unraf-light d-inline\">Últimos/as graduados/as cargadas</h2>
        </div>
        
        
        ";
        // line 33
        echo "        <table style=\"text-left\" class=\"table table-hover\">

            ";
        // line 36
        echo "            <thead class=\"table-head color-unraf-light\">
                <tr>
                    <th scope=\"col\">Nombre y apellido</th>
                    <th scope=\"col\">DNI</th>
                    <th scope=\"col\">Nacimiento</th>
                </tr>
            </thead>

            ";
        // line 45
        echo "            <tbody class=\"table-body color-unraf-yellow\">

                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graduados"]) || array_key_exists("graduados", $context) ? $context["graduados"] : (function () { throw new RuntimeError('Variable "graduados" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["graduado"]) {
            // line 48
            echo "                    <tr>
                        ";
            // line 50
            echo "                        <th>
                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "nombre", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "apellido", [], "any", false, false, false, 51), "html", null, true);
            echo "
                        </th>

                        ";
            // line 55
            echo "                        <th>
                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "documentoIdentidad", [], "any", false, false, false, 56), "html", null, true);
            echo "
                        </th>

                        ";
            // line 60
            echo "                        <th>
                            ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "ciudad", [], "any", false, false, false, 61), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["graduado"], "provincia", [], "any", false, false, false, 61), "html", null, true);
            echo ")
                        </th>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['graduado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            </tbody>

        </table>   
        
    </div>

    ";
        // line 74
        echo "    <div class=\"container info-div\" id = \"\">

        <div class=\"info-title text-left\">
            <i class=\"color-unraf-light fas fa-book i-width\"></i>
            <h2 class=\"color-unraf-light d-inline\">Últimas titulaciones de egresados/as cargadas</h2>
        </div>
        
        
        ";
        // line 83
        echo "        <table style=\"text-left\" class=\"table table-hover\">

            ";
        // line 86
        echo "            <thead class=\"table-head color-unraf-light\">
                <tr>
                    <th scope=\"col\">Nombre y apellido</th>
                    <th scope=\"col\">DNI</th>
                    <th scope=\"col\">Nacimiento</th>
                </tr>
            </thead>

            ";
        // line 95
        echo "            <tbody class=\"table-body color-unraf-yellow\">

                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["egresados"]) || array_key_exists("egresados", $context) ? $context["egresados"] : (function () { throw new RuntimeError('Variable "egresados" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["egresado"]) {
            // line 98
            echo "                    <tr>
                        ";
            // line 100
            echo "                        <th>
                            ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "nombre", [], "any", false, false, false, 101), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "apellido", [], "any", false, false, false, 101), "html", null, true);
            echo "
                        </th>

                        ";
            // line 105
            echo "                        <th>
                            ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "dni", [], "any", false, false, false, 106), "html", null, true);
            echo "
                        </th>

                        ";
            // line 110
            echo "                        <th>
                            ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "ciudad", [], "any", false, false, false, 111), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["egresado"], "provincia", [], "any", false, false, false, 111), "html", null, true);
            echo ")
                        </th>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['egresado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
            </tbody>

        </table>   
        
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
        return array (  254 => 116,  241 => 111,  238 => 110,  232 => 106,  229 => 105,  221 => 101,  218 => 100,  215 => 98,  211 => 97,  207 => 95,  197 => 86,  193 => 83,  183 => 74,  174 => 66,  161 => 61,  158 => 60,  152 => 56,  149 => 55,  141 => 51,  138 => 50,  135 => 48,  131 => 47,  127 => 45,  117 => 36,  113 => 33,  103 => 24,  98 => 21,  92 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Inicio{% endblock %}

{% block body %}
{{parent()}}
{# <div class = \"container mt-5 text-center\">
    <h1> Menu Principal</h1>
    <h2> Estaba testeando una cosita </h2>
    <div class = \"container mt-5\" id = \"divHover\">
        <div class = \"container m-5\" id= \"divBotones\">
            <a href = \"#\" class = \"btn btn-outline-primary m-5\">Uno</a>
            <a href = \"#\" class = \"btn btn-outline-primary m-5\">Dos</a>
        </div>
    </div>
</div> #}

<div class=\" goma container-fluid\" >
    <div  class = \"text-center\">
        <h1 class=\"text-center d-inline \" style = \"color: gray; opacity: 0.5;\"> Home</h1>
        <img class=\"img-fluid iconoHome\" style=\"margin-bottom: 15px;\" width= \"45\" src=\"{{asset('img/icon.png')}}\" />
    </div>
    {# DIV Información #}
    <div class=\"container info-div\" id = \"\">

        <div class=\"info-title text-left\">
            <i class=\"color-unraf-light fas fa-graduation-cap i-width\"></i>
            <h2 class=\"color-unraf-light d-inline\">Últimos/as graduados/as cargadas</h2>
        </div>
        
        
        {# EGRESADOS Tabla #}
        <table style=\"text-left\" class=\"table table-hover\">

            {# EGRESADO Head #}
            <thead class=\"table-head color-unraf-light\">
                <tr>
                    <th scope=\"col\">Nombre y apellido</th>
                    <th scope=\"col\">DNI</th>
                    <th scope=\"col\">Nacimiento</th>
                </tr>
            </thead>

            {# EGRESADO Body #}
            <tbody class=\"table-body color-unraf-yellow\">

                {% for graduado in graduados %}
                    <tr>
                        {# EGRESADO Nombre #}
                        <th>
                            {{graduado.nombre}} {{graduado.apellido}}
                        </th>

                        {# EGRESADO Dni #}
                        <th>
                            {{graduado.documentoIdentidad}}
                        </th>

                        {# EGRESADO Lugar de nacimiento #}
                        <th>
                            {{graduado.ciudad}} ({{graduado.provincia}})
                        </th>
                    </tr>

                {% endfor %}

            </tbody>

        </table>   
        
    </div>

    {# DIV Información #}
    <div class=\"container info-div\" id = \"\">

        <div class=\"info-title text-left\">
            <i class=\"color-unraf-light fas fa-book i-width\"></i>
            <h2 class=\"color-unraf-light d-inline\">Últimas titulaciones de egresados/as cargadas</h2>
        </div>
        
        
        {# EGRESADOS Tabla #}
        <table style=\"text-left\" class=\"table table-hover\">

            {# EGRESADO Head #}
            <thead class=\"table-head color-unraf-light\">
                <tr>
                    <th scope=\"col\">Nombre y apellido</th>
                    <th scope=\"col\">DNI</th>
                    <th scope=\"col\">Nacimiento</th>
                </tr>
            </thead>

            {# EGRESADO Body #}
            <tbody class=\"table-body color-unraf-yellow\">

                {% for egresado in egresados %}
                    <tr>
                        {# EGRESADO Nombre #}
                        <th>
                            {{egresado.nombre}} {{egresado.apellido}}
                        </th>

                        {# EGRESADO Dni #}
                        <th>
                            {{egresado.dni}}
                        </th>

                        {# EGRESADO Lugar de nacimiento #}
                        <th>
                            {{egresado.ciudad}} ({{egresado.provincia}})
                        </th>
                    </tr>

                {% endfor %}

            </tbody>

        </table>   
        
    </div>
    

</div>
<br>
<br>

{% endblock %}
", "sistema/menuPrincipal.html.twig", "/var/www/html/RegistroDigital/templates/sistema/menuPrincipal.html.twig");
    }
}
