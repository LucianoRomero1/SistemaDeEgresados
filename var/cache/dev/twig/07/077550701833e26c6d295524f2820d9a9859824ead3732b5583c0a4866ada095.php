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

/* graduado/index.html.twig */
class __TwigTemplate_6f0925bee7b0a70aaa06a225ae2e5452e9e3f96b4991dc5f797b925d0470020d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "graduado/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "graduado/index.html.twig", 1);
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

        echo "Registro Digital - Titulaciones Graduado/a";
        
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
<h1 class = \"text-center\" >Alta datos personales graduado/a</h1>
<div class = \"container\" id = \"divFormulario\"> 
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
    <div class = \"container row mt-3 justify-content-center\">
        <div class = \"col-sm-7\">
            <h6 class = \"text-secondary text-left ml-1  \">Nombre completo del título obtenido por el/la graduado/a</h6> 
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "titulo", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Título obtenido"]]);
        echo "
        </div>
        <div class = \"col-sm-2\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Fecha egreso</h6> 
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "fechaEgreso", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Título obtenido"]]);
        echo "
        </div>            
    </div>
    <div class = \"container row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº resolución ministerial</h6> 
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "nroME", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº ME"]]);
        echo "
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº de resolución UNRaf</h6> 
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "nroUnraf", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control camposEstandar", "placeholder" => "Nº ME"]]);
        echo "
        </div>            
        <div class = \"col-sm-6\"></div>
    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
    <h1 class = \"text-center mt-3 text-info\">Agregar titulación</h1> 
    <div class = \"row justify-content-center\">
        <div class = \"col-sm-6\">
            <ul style=\"list-style:none;\" class=\"titulacion\" data-prototype=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "titulaciones", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "prototype", [], "any", false, false, false, 36), 'widget'), "html_attr");
        echo "\">
                <li data-collection-holder-class=\"titulacion\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formularioTitulacion"]) || array_key_exists("formularioTitulacion", $context) ? $context["formularioTitulacion"] : (function () { throw new RuntimeError('Variable "formularioTitulacion" does not exist.', 37, $this->source); })()), 'widget');
        echo "</li>
                <br>
            </ul>
        </div>
    </div>
    <div class =\"text-center\">
        <button type=\"button\" class=\"add_item_link btn btn-outline-info text-center\" data-collection-holder-class=\"contacto\">Agregar Contacto</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
        <script>
            jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            var \$tagsCollectionHolder = \$('ul.titulacion');
            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$tagsCollectionHolder.data('index', \$tagsCollectionHolder.find('input').length);

            \$('body').on('click', '.add_item_link', function(e) {
                var \$collectionHolderClass = \$(e.currentTarget).data('collectionHolderClass');
                // add a new tag form (see next code block)
                addFormToCollection(\$collectionHolderClass);
                
            })
            \$('body').on('click', 'remove_item_link', function(e) {
                \$collectionHolder = \$('ul.titulacion');

                 \$collectionHolder.find('li').each(function() {
                addTagFormDeleteLink(\$(this));
            
            });
                
            })
        });
        </script>
    
       <script> 
       function addFormToCollection(\$collectionHolderClass) {
                // Get the ul that holds the collection of tags
                var \$collectionHolder = \$('.' + \$collectionHolderClass);

                // Get the data-prototype explained earlier
                var prototype = \$collectionHolder.data('prototype');

                // get the new index
                var index = \$collectionHolder.data('index');

                var newForm = prototype;
                // You need this only if you didn't set 'label' => false in your tags field in TaskType
                // Replace '__name__label__' in the prototype's HTML to
                // instead be a number based on how many items we have
                // newForm = newForm.replace(/__name__label__/g, index);

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                newForm = newForm.replace(/__name__/g, index);

                // increase the index with one for the next item
                \$collectionHolder.data('index', index + 1);

                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                // Add the new form at the end of the list
                \$collectionHolder.append(\$newFormLi)
                addTagFormDeleteLink(\$newFormLi);
            }</script>
            <script>
            function addTagFormDeleteLink(\$tagFormLi) {
                var \$removeFormButton = \$('<button class=\"btn btn-outline-info mt-2 mb-2\" type=\"button\">Eliminar Contacto</button>');
                \$tagFormLi.append(\$removeFormButton);

                \$removeFormButton.on('click', function(e) {
                    // remove the li for the tag form
                    \$tagFormLi.remove();
                });
            }</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graduado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 47,  163 => 46,  144 => 37,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  110 => 18,  102 => 13,  95 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Titulaciones Graduado/a{% endblock %}

{% block body %}
{{parent()}}
<h1 class = \"text-center\" >Alta datos personales graduado/a</h1>
<div class = \"container\" id = \"divFormulario\"> 
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
    <div class = \"container row mt-3 justify-content-center\">
        <div class = \"col-sm-7\">
            <h6 class = \"text-secondary text-left ml-1  \">Nombre completo del título obtenido por el/la graduado/a</h6> 
            {{ form_widget(formulario.titulo, {attr: {class: 'form-control camposEstandar', placeholder: 'Título obtenido'}})}}
        </div>
        <div class = \"col-sm-2\"></div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Fecha egreso</h6> 
            {{ form_widget(formulario.fechaEgreso, {attr: {class: 'form-control camposEstandar', placeholder: 'Título obtenido'}})}}
        </div>            
    </div>
    <div class = \"container row mt-4 justify-content-center\">
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº resolución ministerial</h6> 
            {{ form_widget(formulario.nroME, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº ME'}})}}
        </div>
        <div class = \"col-sm-3\">
            <h6 class = \"text-secondary text-left ml-1  \">Nº de resolución UNRaf</h6> 
            {{ form_widget(formulario.nroUnraf, {attr: {class: 'form-control camposEstandar', placeholder: 'Nº ME'}})}}
        </div>            
        <div class = \"col-sm-6\"></div>
    </div>
    {{ form_end(formulario)}}
    <h1 class = \"text-center mt-3 text-info\">Agregar titulación</h1> 
    <div class = \"row justify-content-center\">
        <div class = \"col-sm-6\">
            <ul style=\"list-style:none;\" class=\"titulacion\" data-prototype=\"{{form_widget(formulario.titulaciones.vars.prototype)|e('html_attr') }}\">
                <li data-collection-holder-class=\"titulacion\">{{ form_widget(formularioTitulacion)}}</li>
                <br>
            </ul>
        </div>
    </div>
    <div class =\"text-center\">
        <button type=\"button\" class=\"add_item_link btn btn-outline-info text-center\" data-collection-holder-class=\"contacto\">Agregar Contacto</button>
    </div>
{% endblock %}
{% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/releases/v5.15.2/js/all.js\" data-search-pseudo-elements></script>
        <script>
            jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            var \$tagsCollectionHolder = \$('ul.titulacion');
            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$tagsCollectionHolder.data('index', \$tagsCollectionHolder.find('input').length);

            \$('body').on('click', '.add_item_link', function(e) {
                var \$collectionHolderClass = \$(e.currentTarget).data('collectionHolderClass');
                // add a new tag form (see next code block)
                addFormToCollection(\$collectionHolderClass);
                
            })
            \$('body').on('click', 'remove_item_link', function(e) {
                \$collectionHolder = \$('ul.titulacion');

                 \$collectionHolder.find('li').each(function() {
                addTagFormDeleteLink(\$(this));
            
            });
                
            })
        });
        </script>
    
       <script> 
       function addFormToCollection(\$collectionHolderClass) {
                // Get the ul that holds the collection of tags
                var \$collectionHolder = \$('.' + \$collectionHolderClass);

                // Get the data-prototype explained earlier
                var prototype = \$collectionHolder.data('prototype');

                // get the new index
                var index = \$collectionHolder.data('index');

                var newForm = prototype;
                // You need this only if you didn't set 'label' => false in your tags field in TaskType
                // Replace '__name__label__' in the prototype's HTML to
                // instead be a number based on how many items we have
                // newForm = newForm.replace(/__name__label__/g, index);

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                newForm = newForm.replace(/__name__/g, index);

                // increase the index with one for the next item
                \$collectionHolder.data('index', index + 1);

                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                // Add the new form at the end of the list
                \$collectionHolder.append(\$newFormLi)
                addTagFormDeleteLink(\$newFormLi);
            }</script>
            <script>
            function addTagFormDeleteLink(\$tagFormLi) {
                var \$removeFormButton = \$('<button class=\"btn btn-outline-info mt-2 mb-2\" type=\"button\">Eliminar Contacto</button>');
                \$tagFormLi.append(\$removeFormButton);

                \$removeFormButton.on('click', function(e) {
                    // remove the li for the tag form
                    \$tagFormLi.remove();
                });
            }</script>
{% endblock %}
", "graduado/index.html.twig", "/var/www/html/RegistroDigital/templates/graduado/index.html.twig");
    }
}
