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

/* user/myEquipment.html.twig */
class __TwigTemplate_f20d23494f8bafb7d3e143382182d348 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/myEquipment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/myEquipment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Equipment
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section class=\"p-4 my-container\">
        <h1><b>My Equipments</b></h1>
        <table class=\"table\">
            <thead class=\"table-light\">
                <tr>
                    <th scope=\"col\">Serial Number</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Category</th>
                </tr>
            </thead>
            <tbody id=\"equipment-table-body\">
              ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 21
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"table-row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "category", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                        <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</th>
                        <td class=\"equipName\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td class=\"equipDesc\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td class=\"equipCategory\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "category", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>

    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/myEquipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  93 => 21,  89 => 20,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Equipment
{% endblock %}

{% block body %}
    <section class=\"p-4 my-container\">
        <h1><b>My Equipments</b></h1>
        <table class=\"table\">
            <thead class=\"table-light\">
                <tr>
                    <th scope=\"col\">Serial Number</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Category</th>
                </tr>
            </thead>
            <tbody id=\"equipment-table-body\">
              {% for equipment in equipments %}
                    <tr id=\"{{ equipment.id }}\" class=\"table-row {{ equipment.category.title }}\">
                        <th scope=\"row\">{{ equipment.id }}</th>
                        <td class=\"equipName\">{{ equipment.name }}</td>
                        <td class=\"equipDesc\">{{ equipment.description }}</td>
                        <td class=\"equipCategory\">{{ equipment.category.title }}</td>
                    </tr>
              {% endfor %}
            </tbody>
        </table>

    </section>
{% endblock %}
", "user/myEquipment.html.twig", "/Users/nguyenlamhoanganh/Downloads/symfonytest 2/templates/user/myEquipment.html.twig");
    }
}
