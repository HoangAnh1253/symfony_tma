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

/* equipment/index.html.twig */
class __TwigTemplate_417e380728f059b7eb6d181f64eb891f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipment index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<section class=\"p-4 my-container\">
\t\t";
        // line 7
        if (array_key_exists("errors", $context)) {
            // line 8
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>";
                // line 10
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t";
        }
        // line 15
        echo "\t\t";
        if (array_key_exists("violations", $context)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["violations"]) || array_key_exists("violations", $context) ? $context["violations"] : (function () { throw new RuntimeError('Variable "violations" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                // line 17
                echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>";
                // line 18
                echo twig_escape_filter($this->env, $context["violation"], "html", null, true);
                echo "</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "\t\t<h1><b>Search Equipment</b></h1>
\t\t<form method=\"GET\" id=\"search-form\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t<input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\"/>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<button onclick=\"searchEquipment()\" id=\"search-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t\t<i class=\"fas fa-search\">Search</i>
\t\t\t\t</button>

\t\t\t\t<a href=\"/equipments\" class=\"btn btn-info ";
        // line 34
        echo ((array_key_exists("filter", $context)) ? ("") : ("active"));
        echo "\">All</a>
\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_filter_by_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-info ";
            echo (((array_key_exists("filter", $context) && ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 36, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 36)))) ? ("active") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</div>
\t\t\t<p style=\"color: red\" hidden id='search-equipment-notfound-error'>Equipment not found</p>
\t\t</form>

\t\t<div style=\"position: relative\" class=\"autocomplete form-outline\">
\t\t\t<label style=\"margin-top: 40px\" for=\"\">
\t\t\t\t<b>Filter by User</b>
\t\t\t</label>
\t\t\t<input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\"/>

\t\t\t<p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

\t\t\t<button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t<i id=\"\" class=\"fas fa-search\">Search</i>
\t\t\t</button>
\t\t\t<form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
\t\t</div>
\t\t<div class=\"mt-4\">
\t\t\t<button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#equipment\">
\t\t\t\t<i class=\"fa-solid fa-plus\"></i>Add</button>
\t\t</div>
\t\t<table class=\"table table-hover\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">ID</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Name</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Description</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Category</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Status</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Using by</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 74
            echo "\t\t\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "description", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "category", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center equipStatus\">";
            // line 79
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 79), "first", [], "any", false, false, false, 79)) ? ("used") : ("available"));
            echo "</td>
                    \t<td class=\"text-center equipUser\">
                       \t ";
            // line 81
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 81), "first", [], "any", false, false, false, 81)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 81), "first", [], "any", false, false, false, 81), "user", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true))) : (print ("")));
            echo "
                    \t</td>\t\t
\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
                            <button onclick=\"openAssignModal(";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo ")\" class=\"btn btn-warning\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#assignEquipModal\"
                                ";
            // line 91
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 91), "first", [], "any", false, false, false, 91)) ? ("hidden") : (""));
            echo "><i
                                    class=\"fas fa-user-check\"></i>Assign</button>
                            <button onclick=\"openUnAssignModal(";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo ")\"
\t\t\t\t\t\t\t data-bs-toggle=\"modal\" data-bs-target=\"#unAssignEquipModal\"
                                class=\"btn btn-secondary unassign-btn\"
                                ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 96), "first", [], "any", false, false, false, 96)) ? ("") : ("hidden"));
            echo "><i
                                    class=\"fas fa-user-xmark\"></i>Unassigned</button>
                        </td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button  onclick=\"addDataToModel('";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "','delete')\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        // line 111
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 111, $this->source); })()));
        echo "
\t</section>


\t<!-- Add Equipment Modal -->
\t<div class=\"modal fade \" id=\"equipment\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" action=\"/equipments/new\" id=\"add-equipment-form\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"add-name\" type=\"text\" class=\"form-control\" name=\"name\" minlength=\"3\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"add-desc\" type=\"text\" class=\"form-control\" name=\"description\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb3\">
\t\t\t\t\t\t\t<label for=\"add-category\" class=\"form-label\">Category</label>
\t\t\t\t\t\t\t<select id=\"add-category\" class=\"form-select form-select-sm\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 139), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 139), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"addEquipment()\">Add Equipment</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Edit Equipment Modal -->
\t<div class=\"modal fade\" id=\"editEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Equipment</h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" id=\"edit-form\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" minlength=\"3\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-name-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"edit-desc\" type=\"text\" class=\"form-control\" name=\"edit-desc\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-desc-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\" hidden>
\t\t\t\t\t\t\t<label for=\"edit-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-available\"><label for=\"edit-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-used\"><label for=\"edit-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"editEquipment()\" id=\"edit-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save
\t\t\t\t\t\t\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t <!-- Delete Equipment Modal -->
\t<div class=\"modal fade modal-delete\" id=\"deleteEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\taria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" id=\"delete-form\" action=\"\">
\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"delete-name\" type=\"text\" class=\"form-control\" name=\"delete-name\"
\t\t\t\t\t\t\t\tvalue=\"abcd\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"delete-desc\" type=\"text\" class=\"form-control\" name=\"delete-desc\"
\t\t\t\t\t\t\t\tvalue=\"abcd\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-available\"
\t\t\t\t\t\t\t\tdisabled><label for=\"delete-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-used\"
\t\t\t\t\t\t\t\tdisabled><label for=\"delete-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t<button id=\"delete-confirm\" onclick=\"{deleteEquipment()}\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\tclass=\"btn btn-danger\">Confirm</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Assign Equipment Modal -->
\t<div class=\"modal fade\" id=\"assignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Assign Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"mb-3 autocomplete\">
\t\t\t\t\t\t<label for=\"assign-euqipment-input\" class=\"form-label\">User's name or ID</label>
\t\t\t\t\t\t<input id=\"assign-equipment-input\" type=\"text\" class=\"form-control\"
\t\t\t\t\t\t\tname=\"assign-equipment\" value=\"\" placeholder=\"Enter user's name or user's id\">
\t\t\t\t\t\t<p style=\"color: red\" hidden id='assign-blank-error'>Please fill in this field</p>
\t\t\t\t\t\t<p style=\"color: red\" hidden id='assign-notfound-error'>User not found</p>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"assignEquipment()\" id=\"assign-confirm\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\tclass=\"btn btn-primary\">Save changes
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- UnAssign Equipment Modal -->
\t<div class=\"modal fade\" id=\"unAssignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\"><b>UnAssign Equipment</b></h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tDo you want to unassign this equipment
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"unAssignEquipment(this)\" id=\"unAssign-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Confirm</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script>
equipments = ";
        // line 279
        echo json_encode((isset($context["allEquipments"]) || array_key_exists("allEquipments", $context) ? $context["allEquipments"] : (function () { throw new RuntimeError('Variable "allEquipments" does not exist.', 279, $this->source); })()));
        echo "
users = ";
        // line 280
        echo json_encode(((array_key_exists("users", $context)) ? (_twig_default_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 280, $this->source); })()), "")) : ("")));
        echo "

usersNameId = users.map(function(user) {
            return `\${user.name} (ID: \${user.id})`
        })

equipmentNameId = equipments.map(function(equipment){
\treturn `\${equipment.name} (ID: \${equipment.id})`
})

isAssignSelected = false

 \$(\"#search-input\").on('focus', function() {
            autocomplete('search-input', equipmentNameId, 'search-equipment');
})

 \$(\"#search-by-user-input\").on('focus', function() {
            autocomplete('search-by-user-input', usersNameId, 'search-user-equipment');
})

function searchUserEquipments() {
            userId = \$(\"#search-user-equipment-user-id\").val()
            if (!userId || !isAssignSelected) {

                input = \$(\"#search-by-user-input\").val()
                index = input.indexOf('(') - 1

                id = -1
                userName = ''
                if (index >= 0) {
                    userName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    userNameOrId = input.toUpperCase()
                }
                let assignUser = users.find(user => {
\t\t\t\t\t
                    return user.id == userNameOrId || user.name.toUpperCase() == userNameOrId || (user.id == id && user.name ==
                        userName)
                })
                if (assignUser)
                    userId = assignUser.id
            }
            if (!userId) {
                \$(`#search-user-equipment-notfound-error`).prop(\"hidden\", false)
                \$(`#search-user-equipment-confirm`).prop(\"disabled\", true)
            } else {
                searchForm = \$(\"#search-user-equipment-form\")
                searchForm.prop(\"action\", `/equipments/user/\${userId}`)
                searchForm.submit()
            }

} 

function searchEquipment() {
\t
\tequipmentId = ''
            if (!equipmentId || !isAssignSelected) {

                input =  \$(\"#search-input\").val()
                index = input.indexOf('(') - 1

                id = -1
                equipmentName = ''
\t\t\t\tequipmentNameOrId = ''
                if (index >= 0) {
                    equipmentName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    equipmentNameOrId = input.toUpperCase()
                }
\t\t\t
                let selectdEquipment = equipments.find(equipment => {
                    return equipment.id == equipmentNameOrId || equipment.name.toUpperCase() == equipmentNameOrId || (equipment.id == id && equipment.name ==
                        equipmentName)
                })

                if (selectdEquipment)
                    equipmentId = selectdEquipment.id
            }
\t\t\t
            if (!equipmentId) {
                \$(`#search-equipment-notfound-error`).prop(\"hidden\", false)
                \$(`#search-equipment-confirm`).prop(\"disabled\", true)
            } else {
            \tsearchForm = \$(\"#search-form\")
            \tsearchForm.prop(\"action\", `/equipments/\${equipmentId}`)
                searchForm.submit()
            }
}

function addEquipment() {
\taddStatus = \"available\"
\taddCategory = \$(\"#add-category\").val()
\t\$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
\t\$(\"#add-equipment-form\").validate();
\t\$(\"#add-equipment-form\").submit();
}

function addDataToModel(id, action) {
\t\t\$(async function () {
\t\t\tif (id) {
\t\t\tlet equipment = {}
\t\t\tfor (i = 0; i < equipments.length; i ++) {
\t\t\t\tif (equipments[i].id == id) {
\t\t\t\t\tequipment = equipments[i]
\t\t\t\t\tbreak
\t\t\t\t}
\t\t\t}
\t\t\teditNameInput = \$ (`#\${action}-name`)
\t\t\teditNameInput.val(equipment.name);

\t\t\teditDescInput = \$ (`#\${action}-desc`)
\t\t\teditDescInput.val(equipment.description)

\t\t\tavailableRadio = \$ (`#\${action}-status-available`)
\t\t\tusedRadio = \$ (`#\${action}-status-used`)
\t\t\tif (equipment.status == 'available') {
\t\t\tavailableRadio.prop('checked', true)
\t\t\t} else {
\t\t\tusedRadio.prop('checked', true)
\t\t\t}
\t\t\tconfirmButton = \$ (`#\${action}-confirm`)
\t\t\tconfirmButton.data(\"id\", id)

\t\t\tif (action == 'edit') {
\t\t\t\$(\"#edit-name\").on(\"input\", function () {
\t\t\tif (this.value == '') {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", false)
\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t} else {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", true)
\t\t\tif (\$(\"#edit-desc-blank-error\").prop(\"hidden\")) 
\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t}

\t\t\t})

\t\t\t\$(\"#edit-desc\").on(\"input\", function () {
\t\t\t\tif (this.value == '') {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
\t\t\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t\t} else {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
\t\t\t\t\tif (\$(\"#edit-name-blank-error\").prop(\"hidden\")) 
\t\t\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t\t}
\t\t\t})
\t\t}
\t\t}
\t})

}

async function editEquipment() {

\tserial_number = \$(\"#edit-confirm\").data(\"id\")
\teditName = \$(\"#edit-name\").val()
\teditDesc = \$(\"#edit-desc\").val()
\teditStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
\tpayload = {
\t\t\"name\": editName,
\t\t\"description\": editDesc
\t}


\tif (editName == '') {
\t\$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

\t} else if (editDesc == '') {
\t\$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
\t} else {
\tresponse = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
\t\tif(response.data.error)
\t\t\tlocation.reload();
\t\teditedRow = \$ (`#\${serial_number}`)

\t\teditedRowName = editedRow.find(\".equipName\")
\t\teditedRowName.text(response.data.name)

\t\teditedRowDesc = editedRow.find(\".equipDesc\")
\t\teditedRowDesc.text(response.data.description)

\t\tfor (i = 0; i < equipments.length; i ++) {
\t\tif (equipments[i].id == serial_number) {
\t\tequipments[i].name = editedRowName.text()
\t\tequipments[i].description = editedRowDesc.text()
\t\t}
\t\t}
\t}
}

function deleteEquipment(){
\tlet deleteForm = \$(\"#delete-form\")
    let id = \$(\"#delete-confirm\").data(\"id\")
    deleteForm.prop(\"action\", `/equipments/\${id}/delete`)
    deleteForm.submit()
}

function openAssignModal(id) {
\tautocomplete('assign-equipment-input', usersNameId, 'assign');
    assignBtn = \$(\"#assign-confirm\");
    assignBtn.data(\"id\", id)
}

function openUnAssignModal(id){
\tunassignBtn = \$(\"#unAssign-confirm\")
\tunassignBtn.data(\"id\", id)
}

async function assignEquipment() {

            id = \$(\"#assign-confirm\").data(\"id\")
            userId = \$(\"#assign-equipment-input\").val()
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })
\t\t\t if (userId || isAssignSelected) {
\t\t
                input = \$(\"#assign-equipment-input\").val()
                index = input.indexOf('(') - 1
                let userName, id, userNameOrId;
                if (index >= 0) {
                    userName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    userNameOrId = input.toUpperCase()
                }
                let assignUser = users.find(user => {
                    return user.id == userNameOrId || user.name.toUpperCase() == userNameOrId || (user.id == id && user
                        .name == userName)
                })
\t\t\t\tconsole.log(assignUser)
                if (assignUser)
                    userId = assignUser.id
            }

            if (!userId) {
                \$(`#assign-notfound-error`).prop(\"hidden\", false)
                \$(`#assign-confirm`).prop(\"disabled\", true)
            } else {
                payload = {
                    \"user_id\": userId
                }
\t\t\t}
                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${id}/assign`, payload)
\t\t\t\tconsole.log(response)
                editedRow = \$(`#\${id}`)

                editedRowUser = editedRow.find(\".equipUser\")
                editedRowUser.text(`\${response.data.name}`)

\t\t\t\teditedRowStatus = editedRow.find('.equipStatus')
                editedRowStatus.text('used')

                editedRowUnassignBtn = editedRow.find(\".unassign-btn\")
                editedRowUnassignBtn.prop(\"hidden\", false)

                editedRowAssignBtn = editedRow.find(\".btn-warning\")
                editedRowAssignBtn.prop(\"hidden\", true)

                assignModal = \$(\"#assignEquipModal\")
                assignModal.find(\".btn-secondary\").click()
}

async function unAssignEquipment() {
\t\t\tunassignBtn = \$(\"#unAssign-confirm\")
\t\t\tid = unassignBtn.data(\"id\")
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })

            response = await axios.get(`http://127.0.0.1:8000/equipments/api/\${id}/unassign`)
            editedRow = \$(`#\${id}`)

            editedRowUser = editedRow.find(\".equipUser\")
            editedRowUser.text(\"\")

\t\t\teditedRowStatus = editedRow.find('.equipStatus')
            editedRowStatus.text('available')

\t\t\tunassignBtn = editedRow.find(\".unassign-btn\")
            unassignBtn.prop(\"hidden\", true)

            assignBtn = editedRow.find(\".btn-warning\")
            assignBtn.prop(\"hidden\", false)
}

function autocomplete(id, arr, action) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            let currentFocus;
            inp = document.getElementById(id);
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                let a, b, i, val = this.value;
                isAssignSelected = false
                if (val == '') {
                    \$(`#\${action}-confirm`).prop(\"disabled\", true)
                    \$(`#\${action}-blank-error`).prop(\"hidden\", false)
                } else {
                    \$(`#\${action}-blank-error`).prop(\"hidden\", true)
                }
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");

                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");

                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                let found = false
                /*for each item in the array...*/
                for (let i = 0; i < arr.length; i++) {

                    /*check if the item contains the text field value:*/
                    let index = arr[i].toUpperCase().indexOf(val.toUpperCase())
                    if (index >= 0) {

                        found = true
                        \$(`#\${action}-confirm`).prop(\"disabled\", false)
                        \$(`#\${action}-notfound-error`).prop(\"hidden\", true)
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");
                        /*make the matching letters bold:*/
                        b.innerHTML = arr[i].substr(0, index)
                        b.innerHTML += \"<strong>\" + arr[i].substr(index, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(index + val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/

                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text field:*/

                            isAssignSelected = true;
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            inp.innerHTML += \"<input id='\" + action + \"-user-id' type='hidden' value='\" +
                                users[i]
                                .id + \"'>\";
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);

                    }
                }
                if (!found) {
                    \$(`#\${action}-confirm`).prop(\"disabled\", true)
                    \$(`#\${action}-notfound-error`).prop(\"hidden\", false)
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    isAssignSelected = true
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }

            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function(e) {
                closeAllLists(e.target);
            });
        }

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "equipment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 280,  476 => 279,  398 => 204,  333 => 141,  322 => 139,  318 => 138,  302 => 125,  285 => 111,  281 => 109,  272 => 105,  262 => 100,  255 => 96,  249 => 93,  244 => 91,  239 => 89,  232 => 85,  225 => 81,  220 => 79,  216 => 78,  212 => 77,  208 => 76,  204 => 75,  199 => 74,  194 => 73,  157 => 38,  144 => 36,  140 => 35,  136 => 34,  123 => 23,  120 => 22,  110 => 18,  107 => 17,  102 => 16,  99 => 15,  96 => 14,  86 => 10,  83 => 9,  78 => 8,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Equipment index{% endblock %}

{% block body %}
\t<section class=\"p-4 my-container\">
\t\t{% if errors is defined %}
\t\t{% for error in errors %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ error }}</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t{% if violations is defined %}
\t\t{% for violation in violations %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ violation }}</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t<h1><b>Search Equipment</b></h1>
\t\t<form method=\"GET\" id=\"search-form\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t<input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\"/>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<button onclick=\"searchEquipment()\" id=\"search-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t\t<i class=\"fas fa-search\">Search</i>
\t\t\t\t</button>

\t\t\t\t<a href=\"/equipments\" class=\"btn btn-info {{ filter is defined ? '' : 'active' }}\">All</a>
\t\t\t\t{% for category in categories %}
\t\t\t\t\t<a href=\"{{ path('app_equipment_filter_by_category', {'category': category.id}) }}\" class=\"btn btn-info {{ filter is defined and filter == category.title ? 'active' : '' }}\">{{ category.title }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<p style=\"color: red\" hidden id='search-equipment-notfound-error'>Equipment not found</p>
\t\t</form>

\t\t<div style=\"position: relative\" class=\"autocomplete form-outline\">
\t\t\t<label style=\"margin-top: 40px\" for=\"\">
\t\t\t\t<b>Filter by User</b>
\t\t\t</label>
\t\t\t<input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\"/>

\t\t\t<p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

\t\t\t<button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t<i id=\"\" class=\"fas fa-search\">Search</i>
\t\t\t</button>
\t\t\t<form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
\t\t</div>
\t\t<div class=\"mt-4\">
\t\t\t<button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#equipment\">
\t\t\t\t<i class=\"fa-solid fa-plus\"></i>Add</button>
\t\t</div>
\t\t<table class=\"table table-hover\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">ID</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Name</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Description</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Category</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Status</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Using by</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t{% for equipment in equipments %}
\t\t\t\t\t<tr id=\"{{equipment.id}}\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">{{ equipment.id }}</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">{{ equipment.name }}</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">{{ equipment.description }}</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">{{ equipment.category.name }}</td>
\t\t\t\t\t\t<td class=\"text-center equipStatus\">{{ equipment.assigns.first ? 'used' : 'available' }}</td>
                    \t<td class=\"text-center equipUser\">
                       \t {{ equipment.assigns.first ? equipment.assigns.first.user.name : '' }}
                    \t</td>\t\t
\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('{{ equipment.id }}','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
                            <button onclick=\"openAssignModal({{ equipment.id }})\" class=\"btn btn-warning\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#assignEquipModal\"
                                {{ equipment.assigns.first  ? 'hidden' : '' }}><i
                                    class=\"fas fa-user-check\"></i>Assign</button>
                            <button onclick=\"openUnAssignModal({{ equipment.id }})\"
\t\t\t\t\t\t\t data-bs-toggle=\"modal\" data-bs-target=\"#unAssignEquipModal\"
                                class=\"btn btn-secondary unassign-btn\"
                                {{ equipment.assigns.first ? '' : 'hidden' }}><i
                                    class=\"fas fa-user-xmark\"></i>Unassigned</button>
                        </td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button  onclick=\"addDataToModel('{{ equipment.id }}','delete')\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t{{ knp_pagination_render(equipments) }}
\t</section>


\t<!-- Add Equipment Modal -->
\t<div class=\"modal fade \" id=\"equipment\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" action=\"/equipments/new\" id=\"add-equipment-form\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-item') }}\"/>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"add-name\" type=\"text\" class=\"form-control\" name=\"name\" minlength=\"3\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"add-desc\" type=\"text\" class=\"form-control\" name=\"description\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb3\">
\t\t\t\t\t\t\t<label for=\"add-category\" class=\"form-label\">Category</label>
\t\t\t\t\t\t\t<select id=\"add-category\" class=\"form-select form-select-sm\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t<option value={{ category.id }}>{{ category.title }}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"addEquipment()\">Add Equipment</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Edit Equipment Modal -->
\t<div class=\"modal fade\" id=\"editEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Equipment</h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" id=\"edit-form\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" minlength=\"3\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-name-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"edit-desc\" type=\"text\" class=\"form-control\" name=\"edit-desc\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-desc-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\" hidden>
\t\t\t\t\t\t\t<label for=\"edit-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-available\"><label for=\"edit-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-used\"><label for=\"edit-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"editEquipment()\" id=\"edit-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save
\t\t\t\t\t\t\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t <!-- Delete Equipment Modal -->
\t<div class=\"modal fade modal-delete\" id=\"deleteEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\taria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" id=\"delete-form\" action=\"\">
\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\"/>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"delete-name\" type=\"text\" class=\"form-control\" name=\"delete-name\"
\t\t\t\t\t\t\t\tvalue=\"abcd\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"delete-desc\" type=\"text\" class=\"form-control\" name=\"delete-desc\"
\t\t\t\t\t\t\t\tvalue=\"abcd\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"delete-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-available\"
\t\t\t\t\t\t\t\tdisabled><label for=\"delete-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-used\"
\t\t\t\t\t\t\t\tdisabled><label for=\"delete-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t<button id=\"delete-confirm\" onclick=\"{deleteEquipment()}\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\tclass=\"btn btn-danger\">Confirm</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Assign Equipment Modal -->
\t<div class=\"modal fade\" id=\"assignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Assign Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"mb-3 autocomplete\">
\t\t\t\t\t\t<label for=\"assign-euqipment-input\" class=\"form-label\">User's name or ID</label>
\t\t\t\t\t\t<input id=\"assign-equipment-input\" type=\"text\" class=\"form-control\"
\t\t\t\t\t\t\tname=\"assign-equipment\" value=\"\" placeholder=\"Enter user's name or user's id\">
\t\t\t\t\t\t<p style=\"color: red\" hidden id='assign-blank-error'>Please fill in this field</p>
\t\t\t\t\t\t<p style=\"color: red\" hidden id='assign-notfound-error'>User not found</p>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"assignEquipment()\" id=\"assign-confirm\" data-bs-dismiss=\"modal\"
\t\t\t\t\t\tclass=\"btn btn-primary\">Save changes
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- UnAssign Equipment Modal -->
\t<div class=\"modal fade\" id=\"unAssignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\"><b>UnAssign Equipment</b></h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\tDo you want to unassign this equipment
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"unAssignEquipment(this)\" id=\"unAssign-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Confirm</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script>
equipments = {{ allEquipments | json_encode() | raw }}
users = {{ users|default('') | json_encode() | raw }}

usersNameId = users.map(function(user) {
            return `\${user.name} (ID: \${user.id})`
        })

equipmentNameId = equipments.map(function(equipment){
\treturn `\${equipment.name} (ID: \${equipment.id})`
})

isAssignSelected = false

 \$(\"#search-input\").on('focus', function() {
            autocomplete('search-input', equipmentNameId, 'search-equipment');
})

 \$(\"#search-by-user-input\").on('focus', function() {
            autocomplete('search-by-user-input', usersNameId, 'search-user-equipment');
})

function searchUserEquipments() {
            userId = \$(\"#search-user-equipment-user-id\").val()
            if (!userId || !isAssignSelected) {

                input = \$(\"#search-by-user-input\").val()
                index = input.indexOf('(') - 1

                id = -1
                userName = ''
                if (index >= 0) {
                    userName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    userNameOrId = input.toUpperCase()
                }
                let assignUser = users.find(user => {
\t\t\t\t\t
                    return user.id == userNameOrId || user.name.toUpperCase() == userNameOrId || (user.id == id && user.name ==
                        userName)
                })
                if (assignUser)
                    userId = assignUser.id
            }
            if (!userId) {
                \$(`#search-user-equipment-notfound-error`).prop(\"hidden\", false)
                \$(`#search-user-equipment-confirm`).prop(\"disabled\", true)
            } else {
                searchForm = \$(\"#search-user-equipment-form\")
                searchForm.prop(\"action\", `/equipments/user/\${userId}`)
                searchForm.submit()
            }

} 

function searchEquipment() {
\t
\tequipmentId = ''
            if (!equipmentId || !isAssignSelected) {

                input =  \$(\"#search-input\").val()
                index = input.indexOf('(') - 1

                id = -1
                equipmentName = ''
\t\t\t\tequipmentNameOrId = ''
                if (index >= 0) {
                    equipmentName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    equipmentNameOrId = input.toUpperCase()
                }
\t\t\t
                let selectdEquipment = equipments.find(equipment => {
                    return equipment.id == equipmentNameOrId || equipment.name.toUpperCase() == equipmentNameOrId || (equipment.id == id && equipment.name ==
                        equipmentName)
                })

                if (selectdEquipment)
                    equipmentId = selectdEquipment.id
            }
\t\t\t
            if (!equipmentId) {
                \$(`#search-equipment-notfound-error`).prop(\"hidden\", false)
                \$(`#search-equipment-confirm`).prop(\"disabled\", true)
            } else {
            \tsearchForm = \$(\"#search-form\")
            \tsearchForm.prop(\"action\", `/equipments/\${equipmentId}`)
                searchForm.submit()
            }
}

function addEquipment() {
\taddStatus = \"available\"
\taddCategory = \$(\"#add-category\").val()
\t\$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
\t\$(\"#add-equipment-form\").validate();
\t\$(\"#add-equipment-form\").submit();
}

function addDataToModel(id, action) {
\t\t\$(async function () {
\t\t\tif (id) {
\t\t\tlet equipment = {}
\t\t\tfor (i = 0; i < equipments.length; i ++) {
\t\t\t\tif (equipments[i].id == id) {
\t\t\t\t\tequipment = equipments[i]
\t\t\t\t\tbreak
\t\t\t\t}
\t\t\t}
\t\t\teditNameInput = \$ (`#\${action}-name`)
\t\t\teditNameInput.val(equipment.name);

\t\t\teditDescInput = \$ (`#\${action}-desc`)
\t\t\teditDescInput.val(equipment.description)

\t\t\tavailableRadio = \$ (`#\${action}-status-available`)
\t\t\tusedRadio = \$ (`#\${action}-status-used`)
\t\t\tif (equipment.status == 'available') {
\t\t\tavailableRadio.prop('checked', true)
\t\t\t} else {
\t\t\tusedRadio.prop('checked', true)
\t\t\t}
\t\t\tconfirmButton = \$ (`#\${action}-confirm`)
\t\t\tconfirmButton.data(\"id\", id)

\t\t\tif (action == 'edit') {
\t\t\t\$(\"#edit-name\").on(\"input\", function () {
\t\t\tif (this.value == '') {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", false)
\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t} else {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", true)
\t\t\tif (\$(\"#edit-desc-blank-error\").prop(\"hidden\")) 
\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t}

\t\t\t})

\t\t\t\$(\"#edit-desc\").on(\"input\", function () {
\t\t\t\tif (this.value == '') {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
\t\t\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t\t} else {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
\t\t\t\t\tif (\$(\"#edit-name-blank-error\").prop(\"hidden\")) 
\t\t\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t\t}
\t\t\t})
\t\t}
\t\t}
\t})

}

async function editEquipment() {

\tserial_number = \$(\"#edit-confirm\").data(\"id\")
\teditName = \$(\"#edit-name\").val()
\teditDesc = \$(\"#edit-desc\").val()
\teditStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
\tpayload = {
\t\t\"name\": editName,
\t\t\"description\": editDesc
\t}


\tif (editName == '') {
\t\$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

\t} else if (editDesc == '') {
\t\$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
\t} else {
\tresponse = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
\t\tif(response.data.error)
\t\t\tlocation.reload();
\t\teditedRow = \$ (`#\${serial_number}`)

\t\teditedRowName = editedRow.find(\".equipName\")
\t\teditedRowName.text(response.data.name)

\t\teditedRowDesc = editedRow.find(\".equipDesc\")
\t\teditedRowDesc.text(response.data.description)

\t\tfor (i = 0; i < equipments.length; i ++) {
\t\tif (equipments[i].id == serial_number) {
\t\tequipments[i].name = editedRowName.text()
\t\tequipments[i].description = editedRowDesc.text()
\t\t}
\t\t}
\t}
}

function deleteEquipment(){
\tlet deleteForm = \$(\"#delete-form\")
    let id = \$(\"#delete-confirm\").data(\"id\")
    deleteForm.prop(\"action\", `/equipments/\${id}/delete`)
    deleteForm.submit()
}

function openAssignModal(id) {
\tautocomplete('assign-equipment-input', usersNameId, 'assign');
    assignBtn = \$(\"#assign-confirm\");
    assignBtn.data(\"id\", id)
}

function openUnAssignModal(id){
\tunassignBtn = \$(\"#unAssign-confirm\")
\tunassignBtn.data(\"id\", id)
}

async function assignEquipment() {

            id = \$(\"#assign-confirm\").data(\"id\")
            userId = \$(\"#assign-equipment-input\").val()
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })
\t\t\t if (userId || isAssignSelected) {
\t\t
                input = \$(\"#assign-equipment-input\").val()
                index = input.indexOf('(') - 1
                let userName, id, userNameOrId;
                if (index >= 0) {
                    userName = input.substr(0, index)
                    id = input.substr(index + 6, input.length - 1 - index - 6)
                } else {
                    userNameOrId = input.toUpperCase()
                }
                let assignUser = users.find(user => {
                    return user.id == userNameOrId || user.name.toUpperCase() == userNameOrId || (user.id == id && user
                        .name == userName)
                })
\t\t\t\tconsole.log(assignUser)
                if (assignUser)
                    userId = assignUser.id
            }

            if (!userId) {
                \$(`#assign-notfound-error`).prop(\"hidden\", false)
                \$(`#assign-confirm`).prop(\"disabled\", true)
            } else {
                payload = {
                    \"user_id\": userId
                }
\t\t\t}
                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${id}/assign`, payload)
\t\t\t\tconsole.log(response)
                editedRow = \$(`#\${id}`)

                editedRowUser = editedRow.find(\".equipUser\")
                editedRowUser.text(`\${response.data.name}`)

\t\t\t\teditedRowStatus = editedRow.find('.equipStatus')
                editedRowStatus.text('used')

                editedRowUnassignBtn = editedRow.find(\".unassign-btn\")
                editedRowUnassignBtn.prop(\"hidden\", false)

                editedRowAssignBtn = editedRow.find(\".btn-warning\")
                editedRowAssignBtn.prop(\"hidden\", true)

                assignModal = \$(\"#assignEquipModal\")
                assignModal.find(\".btn-secondary\").click()
}

async function unAssignEquipment() {
\t\t\tunassignBtn = \$(\"#unAssign-confirm\")
\t\t\tid = unassignBtn.data(\"id\")
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })

            response = await axios.get(`http://127.0.0.1:8000/equipments/api/\${id}/unassign`)
            editedRow = \$(`#\${id}`)

            editedRowUser = editedRow.find(\".equipUser\")
            editedRowUser.text(\"\")

\t\t\teditedRowStatus = editedRow.find('.equipStatus')
            editedRowStatus.text('available')

\t\t\tunassignBtn = editedRow.find(\".unassign-btn\")
            unassignBtn.prop(\"hidden\", true)

            assignBtn = editedRow.find(\".btn-warning\")
            assignBtn.prop(\"hidden\", false)
}

function autocomplete(id, arr, action) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            let currentFocus;
            inp = document.getElementById(id);
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener(\"input\", function(e) {
                let a, b, i, val = this.value;
                isAssignSelected = false
                if (val == '') {
                    \$(`#\${action}-confirm`).prop(\"disabled\", true)
                    \$(`#\${action}-blank-error`).prop(\"hidden\", false)
                } else {
                    \$(`#\${action}-blank-error`).prop(\"hidden\", true)
                }
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement(\"DIV\");

                a.setAttribute(\"id\", this.id + \"autocomplete-list\");
                a.setAttribute(\"class\", \"autocomplete-items\");

                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                let found = false
                /*for each item in the array...*/
                for (let i = 0; i < arr.length; i++) {

                    /*check if the item contains the text field value:*/
                    let index = arr[i].toUpperCase().indexOf(val.toUpperCase())
                    if (index >= 0) {

                        found = true
                        \$(`#\${action}-confirm`).prop(\"disabled\", false)
                        \$(`#\${action}-notfound-error`).prop(\"hidden\", true)
                        /*create a DIV element for each matching element:*/
                        b = document.createElement(\"DIV\");
                        /*make the matching letters bold:*/
                        b.innerHTML = arr[i].substr(0, index)
                        b.innerHTML += \"<strong>\" + arr[i].substr(index, val.length) + \"</strong>\";
                        b.innerHTML += arr[i].substr(index + val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += \"<input type='hidden' value='\" + arr[i] + \"'>\";
                        /*execute a function when someone clicks on the item value (DIV element):*/

                        b.addEventListener(\"click\", function(e) {
                            /*insert the value for the autocomplete text field:*/

                            isAssignSelected = true;
                            inp.value = this.getElementsByTagName(\"input\")[0].value;
                            inp.innerHTML += \"<input id='\" + action + \"-user-id' type='hidden' value='\" +
                                users[i]
                                .id + \"'>\";
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);

                    }
                }
                if (!found) {
                    \$(`#\${action}-confirm`).prop(\"disabled\", true)
                    \$(`#\${action}-notfound-error`).prop(\"hidden\", false)
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener(\"keydown\", function(e) {
                var x = document.getElementById(this.id + \"autocomplete-list\");
                if (x) x = x.getElementsByTagName(\"div\");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    isAssignSelected = true
                    if (currentFocus > -1) {
                        /*and simulate a click on the \"active\" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as \"active\":*/
                if (!x) return false;
                /*start by removing the \"active\" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class \"autocomplete-active\":*/
                x[currentFocus].classList.add(\"autocomplete-active\");
            }

            function removeActive(x) {
                /*a function to remove the \"active\" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove(\"autocomplete-active\");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName(\"autocomplete-items\");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener(\"click\", function(e) {
                closeAllLists(e.target);
            });
        }

</script>
{% endblock %}
", "equipment/index.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\equipment\\index.html.twig");
    }
}
