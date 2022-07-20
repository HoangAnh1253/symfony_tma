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

/* sidebar.html.twig */
class __TwigTemplate_fbcdccc1d9e87b2128e211618bb5abc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        $context["array"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1), "_");
        // line 2
        echo "<nav class=\"navbar navbar-expand d-flex flex-column align-item-start\"
  id=\"sidebar\">
  <a href=\"#\" class=\"navbar-brand text-light mb-4\">
    <div class=\"display-5 font-weight-bold\">
      TMA
    </div>
  </a>
  <ul class=\"navbar-nav d-flex flex-column w-100\">
 \t
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "roles", [], "any", true, true, false, 11)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "roles", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 13
                echo "        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 14
                    echo "          <li class=\"nav-item w-100\">
            <a class=\"nav-link text-light pl-4 ";
                    // line 15
                    echo (((twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 15, $this->source); })()), 1, [], "array", false, false, false, 15) == "equipment")) ? ("nav-item-active") : (""));
                    echo " \" href=\"/equipments\">
              Equipments
            </a>
          </li>
          <li class=\"nav-item w-100\">
            <a class=\"nav-link text-light pl-4 ";
                    // line 20
                    echo (((twig_get_attribute($this->env, $this->source, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 20, $this->source); })()), 1, [], "array", false, false, false, 20) == "category")) ? ("nav-item-active") : (""));
                    echo "\" href=\"/category\">Categories</a>
          </li>
        ";
                }
                // line 23
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/user/equipment\">My Equipments</a>
    </li>
    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/user\" class=\"\">My info</a>
    </li>
    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/logout\" class=\"\">Logout</a>
    </li>
  </ul>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  86 => 24,  80 => 23,  74 => 20,  66 => 15,  63 => 14,  60 => 13,  55 => 12,  53 => 11,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set array = app.request.get('_route')|split('_') %}
<nav class=\"navbar navbar-expand d-flex flex-column align-item-start\"
  id=\"sidebar\">
  <a href=\"#\" class=\"navbar-brand text-light mb-4\">
    <div class=\"display-5 font-weight-bold\">
      TMA
    </div>
  </a>
  <ul class=\"navbar-nav d-flex flex-column w-100\">
 \t
    {% if app.user.roles is defined %}
      {% for role in app.user.roles %}
        {% if role == 'ROLE_ADMIN' %}
          <li class=\"nav-item w-100\">
            <a class=\"nav-link text-light pl-4 {{ array[1] =='equipment' ? 'nav-item-active' : '' }} \" href=\"/equipments\">
              Equipments
            </a>
          </li>
          <li class=\"nav-item w-100\">
            <a class=\"nav-link text-light pl-4 {{ array[1] =='category' ? 'nav-item-active' : '' }}\" href=\"/category\">Categories</a>
          </li>
        {% endif %}
      {% endfor %}
    {% endif %}
    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/user/equipment\">My Equipments</a>
    </li>
    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/user\" class=\"\">My info</a>
    </li>
    <li class=\"nav-item w-100\">
      <a class=\"nav-link text-light pl-4\" href=\"/logout\" class=\"\">Logout</a>
    </li>
  </ul>
</nav>
", "sidebar.html.twig", "/Users/nguyenlamhoanganh/Downloads/symfonytest 2/templates/sidebar.html.twig");
    }
}
