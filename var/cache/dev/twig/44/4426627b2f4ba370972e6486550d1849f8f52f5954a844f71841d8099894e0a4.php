<?php

/* /admin/menus/index.html.twig */
class __TwigTemplate_57c47fbfbeaae485bb16f99941accfc021dd6602502d97cc3ce12143dd9ac170 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/admin.html.twig", "/admin/menus/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/menus/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("/includes/messages.html.twig", "/admin/menus/index.html.twig", 4)->display($context);
        // line 5
        echo "
    <h1> Admim Menus </h1>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_novo");
        echo "\">Novo Menu</a>
    <hr>
    <table>
        <thead>
        <tr>
            <th>Matricula</th>
            <th>Titulo</th>
            <th>Criado em</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuId", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_edit", array("menu_id" => twig_get_attribute($this->env, $this->source, $context["menu"], "menuId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuTitle", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuCreatedAt", array()), "d/M/Y H:i:s"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_edit", array("menu_id" => twig_get_attribute($this->env, $this->source, $context["menu"], "menuId", array()))), "html", null, true);
            echo "\">Editar</a></td>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu_delet", array("menu_id" => twig_get_attribute($this->env, $this->source, $context["menu"], "menuId", array()))), "html", null, true);
            echo "\">Deletar</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/admin/menus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 26,  88 => 25,  84 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  51 => 7,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'admin/admin.html.twig' %}

{% block body %}
    {% include '/includes/messages.html.twig' %}

    <h1> Admim Menus </h1>
    <a href=\"{{ path('admin_menu_novo') }}\">Novo Menu</a>
    <hr>
    <table>
        <thead>
        <tr>
            <th>Matricula</th>
            <th>Titulo</th>
            <th>Criado em</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        </thead>
        <tbody>
            {% for menu in menus %}
                <tr>
                    <td>{{ menu.menuId }}</td>
                    <td><a href=\"{{ path('admin_menu_edit', {'menu_id': menu.menuId }) }}\">{{ menu.menuTitle }}</a></td>
                    <td>{{ menu.menuCreatedAt | date('d/M/Y H:i:s') }}</td>
                    <td><a href=\"{{ path('admin_menu_edit', {'menu_id': menu.menuId }) }}\">Editar</a></td>
                    <td><a href=\"{{ path('admin_menu_delet',{'menu_id': menu.menuId }) }}\">Deletar</a></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "/admin/menus/index.html.twig", "/Users/rafaelcandeira/Sites/tenX/cecap/templates/admin/menus/index.html.twig");
    }
}
