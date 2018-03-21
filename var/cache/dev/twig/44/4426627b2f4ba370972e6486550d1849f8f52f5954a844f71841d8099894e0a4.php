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
        echo "    <h1> Admim Menus </h1>
    <table>
        <thead>
        <tr>
            <th>Matricula</th>
            <th>Titulo</th>
            <th>Criado em</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 15
            echo "                ";
            // line 16
            echo "                    ";
            // line 17
            echo "                    ";
            // line 18
            echo "                    ";
            // line 19
            echo "                ";
            // line 20
            echo "                <pre>
                    ";
            // line 21
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, $context["menu"]), "html", null, true);
            echo "
                </pre>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return array (  82 => 24,  73 => 21,  70 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  56 => 14,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'admin/admin.html.twig' %}

{% block body %}
    <h1> Admim Menus </h1>
    <table>
        <thead>
        <tr>
            <th>Matricula</th>
            <th>Titulo</th>
            <th>Criado em</th>
        </tr>
        </thead>
        <tbody>
            {% for menu in menus %}
                {#<tr>#}
                    {#<td>{{ menu.menu_id }}</td>#}
                    {#<td>{{ menu.menu_title }}</td>#}
                    {#<td>{{ menu.menu_createdAt | date('d/M/Y H:i:s') }}</td>#}
                {#</tr>#}
                <pre>
                    {{ dump(menu) }}
                </pre>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "/admin/menus/index.html.twig", "/Users/rafaelcandeira/Sites/tenX/cecap/templates/admin/menus/index.html.twig");
    }
}
