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

/* usuario/roles.html.twig */
class __TwigTemplate_faa6487d34c6ece3bc5a437d500995de933c2f385ad47864faad52692c60c569 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/roles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/roles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/roles.html.twig", 1);
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

        echo "Registro Digital - Modificar Roles";
        
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
<div class = \"container\">
    <h2 class = \"text-center text-info\" style = \"font-size: 50px\"> Usuarios </h2>
    <div class = \"list-group \" id = \"divFormulario\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 10, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div class = \"container row mt-3\">
                <div class = \"col-sm-7 media\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "buscar", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Buscar por apellido.."]]);
        echo "  
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "Buscar", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "btn btn-buscar d-inline"]]);
        echo "  
                </div>
                <div class = \"col-sm-1\"></div>
                <div class = \"col-sm-2\">
                    <a class = \"btn form-control campoForm nueva\" href = \"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("altaDatosPersonales");
        echo "\">Crear Egresado</a>
                </div>
            </div>
            <hr>
            <div class = \"col-sm-4\">
                <b style = \"color: #0F9FA8;\">Cantidad de usuarios: ";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 23, $this->source); })())), "html", null, true);
        echo " </b>
            </div>
            </div>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
        
        <div class = \"container mt-2 p-5 \" id = \"divFormulario\">
            <div class = \"row\">
                <div class = \"col-sm-4\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Email</h5>
                </div>
                <div class = \"col-sm-3\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Último acceso</h5>   
                </div>
                <div class = \"col-sm-5\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Asignar roles</h5>
                </div>
            </div>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            echo "                   <div class = \"row mt-5\">
                        <div class = \"col-sm-4\">
                            <p class = \"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                        </div>
                        <div class = \"col-sm-3\">
                            <p class = \"text-center\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ultimoAcceso", [], "any", false, false, false, 46), "d/m H:i"), "html", null, true);
            echo "</p>
                        </div>
                        <div class = \"col-sm-5\">
                             ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 49));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 50
                echo "                        ";
                // line 52
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
                    echo " 
                                    ";
                    // line 53
                    if ((0 === twig_compare($context["rol"], "ROLE_SUPERADMIN"))) {
                        // line 54
                        echo "                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                        echo "\">User</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                        echo "\">Admin</a>
                                            <a class = \"btn btn-outline-danger ml-3 \" onclick=\"DeleteFunction(";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57), "html", null, true);
                        echo ")\">Eliminar</a>
                                        </div>
                                    ";
                    } elseif ((0 === twig_compare(                    // line 59
$context["rol"], "ROLE_ADMIN"))) {
                        // line 60
                        echo "                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3  \" href = \"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioUser", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                        echo "\">User</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioSuperadmin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                        echo "\">SuperAdmin</a>
                                            <a class = \"btn btn-outline-danger ml-3\" onclick=\"DeleteFunction(";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
                        echo ")\">Eliminar</a>
                                        </div>
                                    ";
                    } elseif ((0 === twig_compare(                    // line 65
$context["rol"], "ROLE_USER"))) {
                        // line 66
                        echo "                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                        echo "\">Admin</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"";
                        // line 68
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioSuperadmin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                        echo "\">SuperAdmin</a>
                                            <a class = \"btn btn-outline-danger ml-3 \" onclick=\"DeleteFunction(";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69), "html", null, true);
                        echo ")\">Eliminar</a>
                                        </div>
                                    ";
                    }
                    // line 72
                    echo "                                ";
                }
                // line 73
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                        </div>
                    </div>
                <hr style = \"background-color: orange;\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
    </div>
</div>
<br>
<br>
<script src = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteUser.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 83,  268 => 78,  259 => 74,  245 => 73,  242 => 72,  236 => 69,  232 => 68,  228 => 67,  225 => 66,  223 => 65,  218 => 63,  214 => 62,  210 => 61,  207 => 60,  205 => 59,  200 => 57,  196 => 56,  192 => 55,  189 => 54,  187 => 53,  182 => 52,  180 => 50,  163 => 49,  157 => 46,  151 => 43,  147 => 41,  143 => 40,  126 => 26,  120 => 23,  112 => 18,  105 => 14,  101 => 13,  95 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro Digital - Modificar Roles{% endblock %}

{% block body %}
{{parent()}}
<div class = \"container\">
    <h2 class = \"text-center text-info\" style = \"font-size: 50px\"> Usuarios </h2>
    <div class = \"list-group \" id = \"divFormulario\">
            {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div class = \"container row mt-3\">
                <div class = \"col-sm-7 media\">
                    {{ form_widget(formulario.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Buscar por apellido..'} }) }}  
                    {{ form_widget(formulario.Buscar, {attr: {class: 'btn btn-buscar d-inline'} }) }}  
                </div>
                <div class = \"col-sm-1\"></div>
                <div class = \"col-sm-2\">
                    <a class = \"btn form-control campoForm nueva\" href = \"{{path('altaDatosPersonales')}}\">Crear Egresado</a>
                </div>
            </div>
            <hr>
            <div class = \"col-sm-4\">
                <b style = \"color: #0F9FA8;\">Cantidad de usuarios: {{usuarios|length}} </b>
            </div>
            </div>
        {{ form_end(formulario) }}
        
        <div class = \"container mt-2 p-5 \" id = \"divFormulario\">
            <div class = \"row\">
                <div class = \"col-sm-4\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Email</h5>
                </div>
                <div class = \"col-sm-3\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Último acceso</h5>   
                </div>
                <div class = \"col-sm-5\">
                    <h5 class = \"text-center\" style = \"color: #0F9FA8\">Asignar roles</h5>
                </div>
            </div>
            {% for user in usuarios %}
                   <div class = \"row mt-5\">
                        <div class = \"col-sm-4\">
                            <p class = \"text-center\">{{user.email}}</p>
                        </div>
                        <div class = \"col-sm-3\">
                            <p class = \"text-center\">{{user.ultimoAcceso|date(\"d/m H:i\")}}</p>
                        </div>
                        <div class = \"col-sm-5\">
                             {% for rol in user.roles %}
                        {# El loop last sirve para analizar en base al ultimo rol, y que no aparezcan 70 botones, porque uno
                        Tiene 1 o mas roles siempre #}
                                {% if loop.last %} 
                                    {% if rol == \"ROLE_SUPERADMIN\" %}
                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"{{path('cambioUser', {'id': user.id})}}\">User</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"{{path('cambioAdmin', {'id': user.id})}}\">Admin</a>
                                            <a class = \"btn btn-outline-danger ml-3 \" onclick=\"DeleteFunction({{user.id}})\">Eliminar</a>
                                        </div>
                                    {% elseif rol == \"ROLE_ADMIN\" %}
                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3  \" href = \"{{path('cambioUser', {'id': user.id})}}\">User</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"{{path('cambioSuperadmin', {'id': user.id})}}\">SuperAdmin</a>
                                            <a class = \"btn btn-outline-danger ml-3\" onclick=\"DeleteFunction({{user.id}})\">Eliminar</a>
                                        </div>
                                    {% elseif rol == \"ROLE_USER\"%}
                                        <div class = \"text-center\">
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"{{path('cambioAdmin', {'id': user.id})}}\">Admin</a>
                                            <a class = \"btn btn-outline-info ml-3 \" href = \"{{path('cambioSuperadmin', {'id': user.id})}}\">SuperAdmin</a>
                                            <a class = \"btn btn-outline-danger ml-3 \" onclick=\"DeleteFunction({{user.id}})\">Eliminar</a>
                                        </div>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                <hr style = \"background-color: orange;\">
            {% endfor %}
        </div>
    </div>
</div>
<br>
<br>
<script src = \"{{asset('js/deleteUser.js')}}\"></script>
{% endblock %}
", "usuario/roles.html.twig", "/var/www/html/RegistroDigital/templates/usuario/roles.html.twig");
    }
}
