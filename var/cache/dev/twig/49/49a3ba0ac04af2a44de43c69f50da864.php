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

/* base.html.twig */
class __TwigTemplate_7a56b58cad0cac755cf8f3afa05da30c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
\t\t<!-- bootstrap 5 css -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t\t<style>
\t\t\t* {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tmin-height: 100vh;
\t\t\t\tbackground-color: #fff;
\t\t\t}

\t\t\t.navbar {
\t\t\t\twidth: 250px;
\t\t\t\theight: 100vh;
\t\t\t\tposition: fixed;
\t\t\t\tbackground-color: #0067FF;
\t\t\t\tbackground-image: linear-gradient(-315deg, #0067FF 0%, #008FFD 30%);
\t\t\t\ttransition: 0.4s;
\t\t\t}

\t\t\t.nav-item-active {
\t\t\t\tbackground-color: #ffffff26;
\t\t\t}

\t\t\t.nav-link {
\t\t\t\tfont-size: 1.25em;
\t\t\t}

\t\t\t.nav-link:active,
\t\t\t.nav-link:focus,
\t\t\t.nav-link:hover {
\t\t\t\tbackground-color: #ffffff12;
\t\t\t}

\t\t\t.dropdown-menu {
\t\t\t\tbackground-color: #7952b3;
\t\t\t}

\t\t\t.dropdown-item:active,
\t\t\t.dropdown-item:focus,
\t\t\t.dropdown-item:hover {
\t\t\t\tbackground-color: #ffffff26;
\t\t\t}

\t\t\t.my-container {
\t\t\t\ttransition: 0.4s;
\t\t\t\tmargin-left: 250px;
\t\t\t}


\t\t\t/ for navbar / .active-nav {
\t\t\t\tmargin-left: 0;
\t\t\t}

\t\t\t.modal-delete .modal-header {
\t\t\t\tbackground-color: #dc3545;
\t\t\t\tcolor: white;
\t\t\t}


\t\t\t.autocomplete-items {
\t\t\t\tposition: absolute;
\t\t\t\tborder: 1px solid #d4d4d4;
\t\t\t\tborder-bottom: none;
\t\t\t\tborder-top: none;
\t\t\t\tz-index: 99;
\t\t\t\t/*position the autocomplete items to be the same width as the container:*/
\t\t\t\ttop: 100%;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t}

\t\t\t.autocomplete-items div {
\t\t\t\tpadding: 10px;
\t\t\t\tcursor: pointer;
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder-bottom: 1px solid #d4d4d4;
\t\t\t}

\t\t\t/*when hovering an item:*/
\t\t\t.autocomplete-items div:hover {
\t\t\t\tbackground-color: #e9e9e9;
\t\t\t}

\t\t\t/*when navigating through the items using the arrow keys:*/
\t\t\t.autocomplete-active {
\t\t\t\tbackground-color: DodgerBlue !important;
\t\t\t\tcolor: #ffffff;
\t\t\t}

\t\t\tlabel.error {
\t\t\t\tcolor: red;
\t\t\t\tfont-size: 1rem;
\t\t\t\tdisplay: block;
\t\t\t\tmargin-top: 5px;
\t\t\t}

\t\t\tinput.error {
\t\t\t\tborder: 1px dashed red;
\t\t\t\tfont-weight: 300;
\t\t\t\tcolor: red;
\t\t\t}
\t\t</style>
\t</head>
\t<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
\t\t";
        // line 178
        echo "
\t\t";
        // line 179
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "

\t\t";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo "
\t\t";
        // line 190
        echo "\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 181
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 181,  192 => 6,  183 => 190,  180 => 182,  178 => 181,  173 => 179,  170 => 178,  51 => 8,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
\t\t<!-- bootstrap 5 css -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t\t<style>
\t\t\t* {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tmin-height: 100vh;
\t\t\t\tbackground-color: #fff;
\t\t\t}

\t\t\t.navbar {
\t\t\t\twidth: 250px;
\t\t\t\theight: 100vh;
\t\t\t\tposition: fixed;
\t\t\t\tbackground-color: #0067FF;
\t\t\t\tbackground-image: linear-gradient(-315deg, #0067FF 0%, #008FFD 30%);
\t\t\t\ttransition: 0.4s;
\t\t\t}

\t\t\t.nav-item-active {
\t\t\t\tbackground-color: #ffffff26;
\t\t\t}

\t\t\t.nav-link {
\t\t\t\tfont-size: 1.25em;
\t\t\t}

\t\t\t.nav-link:active,
\t\t\t.nav-link:focus,
\t\t\t.nav-link:hover {
\t\t\t\tbackground-color: #ffffff12;
\t\t\t}

\t\t\t.dropdown-menu {
\t\t\t\tbackground-color: #7952b3;
\t\t\t}

\t\t\t.dropdown-item:active,
\t\t\t.dropdown-item:focus,
\t\t\t.dropdown-item:hover {
\t\t\t\tbackground-color: #ffffff26;
\t\t\t}

\t\t\t.my-container {
\t\t\t\ttransition: 0.4s;
\t\t\t\tmargin-left: 250px;
\t\t\t}


\t\t\t/ for navbar / .active-nav {
\t\t\t\tmargin-left: 0;
\t\t\t}

\t\t\t.modal-delete .modal-header {
\t\t\t\tbackground-color: #dc3545;
\t\t\t\tcolor: white;
\t\t\t}


\t\t\t.autocomplete-items {
\t\t\t\tposition: absolute;
\t\t\t\tborder: 1px solid #d4d4d4;
\t\t\t\tborder-bottom: none;
\t\t\t\tborder-top: none;
\t\t\t\tz-index: 99;
\t\t\t\t/*position the autocomplete items to be the same width as the container:*/
\t\t\t\ttop: 100%;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t}

\t\t\t.autocomplete-items div {
\t\t\t\tpadding: 10px;
\t\t\t\tcursor: pointer;
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder-bottom: 1px solid #d4d4d4;
\t\t\t}

\t\t\t/*when hovering an item:*/
\t\t\t.autocomplete-items div:hover {
\t\t\t\tbackground-color: #e9e9e9;
\t\t\t}

\t\t\t/*when navigating through the items using the arrow keys:*/
\t\t\t.autocomplete-active {
\t\t\t\tbackground-color: DodgerBlue !important;
\t\t\t\tcolor: #ffffff;
\t\t\t}

\t\t\tlabel.error {
\t\t\t\tcolor: red;
\t\t\t\tfont-size: 1rem;
\t\t\t\tdisplay: block;
\t\t\t\tmargin-top: 5px;
\t\t\t}

\t\t\tinput.error {
\t\t\t\tborder: 1px dashed red;
\t\t\t\tfont-weight: 300;
\t\t\t\tcolor: red;
\t\t\t}
\t\t</style>
\t</head>
\t<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
\t\t{# {% block header %}
\t\t\t<header>
\t\t\t\t<nav class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\" x-data=\"{ isOpen: false }\" @keydown.escape=\"isOpen = false\" :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

\t\t\t\t\t<div class=\"flex items-center flex-shrink-0 text-white mr-6\">
\t\t\t\t\t\t<a class=\"text-white no-underline hover:text-white hover:no-underline\" href=\"/\">
\t\t\t\t\t\t\t<span class=\"text-2xl pl-2 font-extrabold\">
\t\t\t\t\t\t\t\tMovies
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<button @click=\"isOpen = !isOpen\" type=\"button\" class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\" :class=\"{ 'transition transform-180': isOpen }\">

\t\t\t\t\t\t<svg class=\"h-6 w-6 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\">

\t\t\t\t\t\t\t<path x-show=\"isOpen\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"/>

\t\t\t\t\t\t\t<path x-show=\"!isOpen\" fill-rule=\"evenodd\" d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\" :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\" @click.away=\"isOpen = false\" x-show.transition=\"true\">

\t\t\t\t\t\t<ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/movies\" @click=\"isOpen = false\">Movies
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/contact\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t{{ app.user ? 'Logout' : 'Login' }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t{% endblock %} #}

\t\t{{ include('sidebar.html.twig') }}

\t\t{% block body %}{% endblock %}

\t\t{# {% block footer %}
\t\t\t<footer class=\"bg-gray-600 py-6 mt-20\">
\t\t\t\t<p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
\t\t\t\t\tCopyright 2021 Code With Dary. All Rights Reserved
\t\t\t\t</p>
\t\t\t</footer>
\t\t{% endblock %} #}
\t</body>
</html>
", "base.html.twig", "/Users/nguyenlamhoanganh/Downloads/symfonytest 2/templates/base.html.twig");
    }
}
