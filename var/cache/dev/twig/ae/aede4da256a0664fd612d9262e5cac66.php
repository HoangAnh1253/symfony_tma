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

/* category/index.html.twig */
class __TwigTemplate_cd5481352766098aea10f792f34d186b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Category index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <section id=\"category-section\" class=\"p-4 my-container\">
        ";
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
                    <button  class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
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
        echo "        <h1><b>Categories</b></h1>
        <br>
        <button onclick=\"addDataToModal(false, 'add')\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#addCategoryModal\"><i class=\"fa-solid fa-plus\"></i>Add</button>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th class=\"text-center\" scope=\"col\">ID</th>
                    <th class=\"text-center\" scope=\"col\">Title</th>
                    <th class=\"text-center\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                        <th class=\"text-center\" scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
                        <td class=\"categoryTitle text-center\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"text-right\">
                                <button onclick=\"addDataToModal(";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo ", 'edit')\" 
                                class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editCategoryModal\"><i
                                    class=\"fas fa-pen-to-square\"></i>Edit</button>
                            </div>
                        </td>
                        <td>
                             <div class=\"text-left\">
                                <button onclick=\"addDataToModal(";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo ", 'delete')\" 
                                class=\"btn btn-danger\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#deleteCategoryModal\">Delete</button>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>
    
        <!-- Add Category Modal -->
        <div class=\"modal fade modal-add\" id=\"addCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form id=\"addCategoryForm\" method=\"POST\" action=\"/category/new\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        echo "\"/>
                            <div class=\"mb-3\">
                                <label for=\"add-title\" class=\"form-label\">Add</label>
                                <input id=\"add-title\" type=\"text\" class=\"form-control\" name=\"title\">
                                <p style=\"color: red\" hidden id='add-title-blank-error'>Please fill in this field</p>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"add-confirm\" onclick=\"{addCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-success\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Edit Category Modal -->
        <div class=\"modal fade modal-edit\" id=\"editCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"edit-title\" class=\"form-label\">Title</label>
                            <input id=\"edit-title\" type=\"text\" class=\"form-control\" name=\"edit-title\">
                            <p style=\"color: red\" hidden id='edit-title-blank-error'>Please fill in this field</p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"edit-confirm\" onclick=\"{editCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-success\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Category Modal -->
        <div class=\"modal fade modal-delete\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" id=\"delete-form\" action=\"/\">
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\"/>
                            <div class=\"mb-3\">
                                <label for=\"delete-title\" class=\"form-label\">Title</label>
                                <input id=\"delete-title\" type=\"text\" class=\"form-control\" name=\"delete-title\"
                                    disabled>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"delete-confirm\" onclick=\"{deleteCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-danger\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        categories = ";
        // line 146
        echo json_encode((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 146, $this->source); })()));
        echo "

        function validateBlank(idInput, idConfirmBtn) {
            confirmBtn = \$(`#\${idConfirmBtn}`)
            input = \$(`#\${idInput}`)
            blankError = \$(`#\${idInput}-blank-error`)

            if (input.val() == '') {
                confirmBtn.prop(\"disabled\", true)
                blankError.prop(\"hidden\", false)
            }
            input.on('input', function() {
                if (this.value == '') {
                    blankError.prop(\"hidden\", false)
                    confirmBtn.prop(\"disabled\", true)
                } else {
                    blankError.prop(\"hidden\", true)
                    confirmBtn.prop(\"disabled\", false)
                }
            })
        }

        function addDataToModal(id, action) {
            if (id) {
                let category = categories.find(category => {
                    return category.id == id
                })
                console.log(categories)
                \$(`#\${action}-title`).val(category.title)
                confirmBtn = \$(`#\${action}-confirm`)
                confirmBtn.data(\"category_id\", id);
            }
            if (action == 'edit' || action == 'add') {
                validateBlank(`\${action}-title`, `\${action}-confirm`)
            }
        }

        function deleteCategory() {
            let deleteForm = \$(\"#delete-form\")
            let categoryId = \$(\"#delete-confirm\").data('category_id')
            deleteForm.prop(\"action\", `/category/\${categoryId}/delete`)
            deleteForm.submit()
        }

        async function editCategory() {
            categoryId = \$(\"#edit-confirm\").data('category_id')
            input = \$(\"#edit-title\").val()
            payload = {
                \"title\": input
            }
            response = await axios.patch(`http://127.0.0.1:8000/category/api/\${categoryId}/edit`, payload)
            error = response.data.error
            if (error) {
               location.reload();
            } else {
                editedCategory = response.data
                categories.forEach(category => {
                    if (category.id == editedCategory.id) {
                        category.title = editedCategory.title
                        \$(`#\${editedCategory.id}`).find(\".categoryTitle\").text(editedCategory.title)
                    }
                });
            }
        }

        function addCategory() {
            addCategoryForm = \$(`#addCategoryForm`)
            console.log(addCategoryForm.serializeArray());
            addCategoryForm.submit()
        }

        // This code close alert not found
        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                alert('Nice, you triggered this alert message!', 'success')
            })
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 146,  233 => 127,  174 => 71,  157 => 56,  144 => 49,  134 => 42,  128 => 39,  124 => 38,  119 => 37,  115 => 36,  100 => 23,  97 => 22,  87 => 18,  84 => 17,  79 => 16,  76 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Category index{% endblock %}

{% block body %}
     <section id=\"category-section\" class=\"p-4 my-container\">
        {# {% if errors is defined %}
\t\t{% for error in errors %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ error }}</div>
                    <button  class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %} #}
\t\t{% if violations is defined %}
\t\t{% for violation in violations %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ violation }}</div>
                    <button  class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %}
        <h1><b>Categories</b></h1>
        <br>
        <button onclick=\"addDataToModal(false, 'add')\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\"
            data-bs-target=\"#addCategoryModal\"><i class=\"fa-solid fa-plus\"></i>Add</button>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th class=\"text-center\" scope=\"col\">ID</th>
                    <th class=\"text-center\" scope=\"col\">Title</th>
                    <th class=\"text-center\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for category in categories %}
                    <tr id=\"{{ category.id }}\">
                        <th class=\"text-center\" scope=\"row\">{{ category.id }}</th>
                        <td class=\"categoryTitle text-center\">{{ category.title }}</td>
                        <td>
                            <div class=\"text-right\">
                                <button onclick=\"addDataToModal({{ category.id }}, 'edit')\" 
                                class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editCategoryModal\"><i
                                    class=\"fas fa-pen-to-square\"></i>Edit</button>
                            </div>
                        </td>
                        <td>
                             <div class=\"text-left\">
                                <button onclick=\"addDataToModal({{ category.id }}, 'delete')\" 
                                class=\"btn btn-danger\" data-bs-toggle=\"modal\"
                                data-bs-target=\"#deleteCategoryModal\">Delete</button>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    
        <!-- Add Category Modal -->
        <div class=\"modal fade modal-add\" id=\"addCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form id=\"addCategoryForm\" method=\"POST\" action=\"/category/new\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-item') }}\"/>
                            <div class=\"mb-3\">
                                <label for=\"add-title\" class=\"form-label\">Add</label>
                                <input id=\"add-title\" type=\"text\" class=\"form-control\" name=\"title\">
                                <p style=\"color: red\" hidden id='add-title-blank-error'>Please fill in this field</p>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"add-confirm\" onclick=\"{addCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-success\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Edit Category Modal -->
        <div class=\"modal fade modal-edit\" id=\"editCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <label for=\"edit-title\" class=\"form-label\">Title</label>
                            <input id=\"edit-title\" type=\"text\" class=\"form-control\" name=\"edit-title\">
                            <p style=\"color: red\" hidden id='edit-title-blank-error'>Please fill in this field</p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"edit-confirm\" onclick=\"{editCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-success\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Category Modal -->
        <div class=\"modal fade modal-delete\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Category</h5>
                        <button  class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" id=\"delete-form\" action=\"/\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\"/>
                            <div class=\"mb-3\">
                                <label for=\"delete-title\" class=\"form-label\">Title</label>
                                <input id=\"delete-title\" type=\"text\" class=\"form-control\" name=\"delete-title\"
                                    disabled>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button  class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"delete-confirm\" onclick=\"{deleteCategory()}\"  data-bs-dismiss=\"modal\"
                            class=\"btn btn-danger\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        categories = {{ categories | json_encode() | raw }}

        function validateBlank(idInput, idConfirmBtn) {
            confirmBtn = \$(`#\${idConfirmBtn}`)
            input = \$(`#\${idInput}`)
            blankError = \$(`#\${idInput}-blank-error`)

            if (input.val() == '') {
                confirmBtn.prop(\"disabled\", true)
                blankError.prop(\"hidden\", false)
            }
            input.on('input', function() {
                if (this.value == '') {
                    blankError.prop(\"hidden\", false)
                    confirmBtn.prop(\"disabled\", true)
                } else {
                    blankError.prop(\"hidden\", true)
                    confirmBtn.prop(\"disabled\", false)
                }
            })
        }

        function addDataToModal(id, action) {
            if (id) {
                let category = categories.find(category => {
                    return category.id == id
                })
                console.log(categories)
                \$(`#\${action}-title`).val(category.title)
                confirmBtn = \$(`#\${action}-confirm`)
                confirmBtn.data(\"category_id\", id);
            }
            if (action == 'edit' || action == 'add') {
                validateBlank(`\${action}-title`, `\${action}-confirm`)
            }
        }

        function deleteCategory() {
            let deleteForm = \$(\"#delete-form\")
            let categoryId = \$(\"#delete-confirm\").data('category_id')
            deleteForm.prop(\"action\", `/category/\${categoryId}/delete`)
            deleteForm.submit()
        }

        async function editCategory() {
            categoryId = \$(\"#edit-confirm\").data('category_id')
            input = \$(\"#edit-title\").val()
            payload = {
                \"title\": input
            }
            response = await axios.patch(`http://127.0.0.1:8000/category/api/\${categoryId}/edit`, payload)
            error = response.data.error
            if (error) {
               location.reload();
            } else {
                editedCategory = response.data
                categories.forEach(category => {
                    if (category.id == editedCategory.id) {
                        category.title = editedCategory.title
                        \$(`#\${editedCategory.id}`).find(\".categoryTitle\").text(editedCategory.title)
                    }
                });
            }
        }

        function addCategory() {
            addCategoryForm = \$(`#addCategoryForm`)
            console.log(addCategoryForm.serializeArray());
            addCategoryForm.submit()
        }

        // This code close alert not found
        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                alert('Nice, you triggered this alert message!', 'success')
            })
        }
    </script>
{% endblock %}
", "category/index.html.twig", "/Users/nguyenlamhoanganh/Downloads/symfonytest 2/templates/category/index.html.twig");
    }
}
