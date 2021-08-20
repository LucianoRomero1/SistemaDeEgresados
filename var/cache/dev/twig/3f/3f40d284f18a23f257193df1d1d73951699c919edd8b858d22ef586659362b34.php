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

/* egresado/altaDatosAdministrativos.html.twig */
class __TwigTemplate_c7f04ba2ba18643fbb2694fd2b47962a4a05d10cb4fb24b2cd85c43e91dd6b63 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/altaDatosAdministrativos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "egresado/altaDatosAdministrativos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "egresado/altaDatosAdministrativos.html.twig", 1);
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

        echo "Registro Digital - Alta Datos Administrativos ";
        
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
<h1 class = \"text-center\">Alta datos administrativos</h1> 
<div class =\"container \" id = \"divFormulario\">
    
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-4\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "nombreRector", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre rector/a"]]);
        echo "
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), "apellidoRector", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido rector/a"]]);
        echo "
            
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "nombreSecretario", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nombre secretario/a"]]);
        echo "
            
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "apellidoSecretario", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Apellido secretario/a"]]);
        echo "
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 33, $this->source); })()), "nroResolucionAprob", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº aprobación UNRaf"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "nroResolucionME", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº ME"]]);
        echo " 
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "nroExpediente", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº expediente"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), "nroResolucionRectoral", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº rectoral"]]);
        echo "
        </div>
        <div class = \"col-sm-3\"></div>   
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 51, $this->source); })()), "nroDiploma", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº diploma"]]);
        echo " 
        </div>
        <div class = \"col-sm-3\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), "nroAnalitico", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº analítico"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), "nroRevalida", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº reválida"]]);
        echo "
        </div>
    </div>
    <br>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-center\">Fecha de entrega de la documentación</h6>
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 65, $this->source); })()), "fechaEntrega", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control camposEstandar", "style" => "cursor: text;"]]);
        echo "
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <br>
    <div class = \"container mt-4 text-center\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 71, $this->source); })()), "Siguiente", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "btn btn-outline-info btn-lg"]]);
        echo "
    </div>
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
</div>
<br>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "egresado/altaDatosAdministrativos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 73,  195 => 71,  186 => 65,  175 => 57,  169 => 54,  163 => 51,  154 => 45,  148 => 42,  139 => 36,  133 => 33,  125 => 28,  117 => 23,  108 => 17,  101 => 13,  95 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Alta Datos Administrativos {% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\">Alta datos administrativos</h1> 
<div class =\"container \" id = \"divFormulario\">
    
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-4\">
            {{ form_widget(formulario.nombreRector, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre rector/a'}})}}
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            {{ form_widget(formulario.apellidoRector, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido rector/a'}})}}
            
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-4\">
            {{ form_widget(formulario.nombreSecretario, {attr: {class: 'form-control camposEstandar', placeholder: 'Nombre secretario/a'}})}}
            
        </div>
        <div class = \"col-sm-1\"></div>
        <div class = \"col-sm-4\">
            {{ form_widget(formulario.apellidoSecretario, {attr: {class: 'form-control camposEstandar', placeholder: 'Apellido secretario/a'}})}}
        </div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroResolucionAprob, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº aprobación UNRaf'}})}}
        </div>
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroResolucionME, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº ME'}})}} 
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroExpediente, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº expediente'}})}}
        </div>
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroResolucionRectoral, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº rectoral'}})}}
        </div>
        <div class = \"col-sm-3\"></div>   
    </div>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroDiploma, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº diploma'}})}} 
        </div>
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroAnalitico, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº analítico'}})}}
        </div>
        <div class = \"col-sm-3\">
            {{ form_widget(formulario.nroRevalida, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº reválida'}})}}
        </div>
    </div>
    <br>
    <div class = \"row mt-4 justify-content-center\">
        <div class = \"col-sm-3\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-center\">Fecha de entrega de la documentación</h6>
            {{ form_widget(formulario.fechaEntrega, {attr: {class: 'form-control camposEstandar', style: 'cursor: text;'}})}}
        </div>
        <div class = \"col-sm-3\"></div>
    </div>
    <br>
    <div class = \"container mt-4 text-center\">
        {{ form_widget(formulario.Siguiente, {attr: {class: 'btn btn-outline-info btn-lg'}})}}
    </div>
    {{ form_end(formulario) }}
</div>
<br>
<br>
{% endblock %}", "egresado/altaDatosAdministrativos.html.twig", "/var/www/html/RegistroDigital/templates/egresado/altaDatosAdministrativos.html.twig");
    }
}
