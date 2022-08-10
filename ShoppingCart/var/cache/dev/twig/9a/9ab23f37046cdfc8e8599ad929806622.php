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
class __TwigTemplate_43d561645561f626653eb266ece6bf70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CategoryController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t\t
\t\t
\t\t<div class=\"container\">
\t\t<h1 class=\"text-center\">category List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_category");
        echo "\">Add</a>
\t\t</div>
\t\t<div class=\"col-md-4\">
                            <option selected disabled>Admin</option>
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_category");
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
        echo "\">Product update</a></li>
                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_customer");
        echo "\">Customer update</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
                            <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_employee");
        echo "\">Employee update</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
        echo "\">Image update</a></li>
                            <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">User update</a></li>
                            </div>
\t\t
\t";
        // line 30
        echo "\t
\t<div class=\"col-lg-12\">
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>CatID</th>
\t\t\t\t<th>Name</th>
                <th>Description</th>
\t\t\t\t<th>menu</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "catID", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this category ?');\">Delete</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t</div>
\t</div>
\t\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  187 => 56,  177 => 52,  173 => 51,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  152 => 44,  148 => 43,  133 => 30,  127 => 26,  123 => 25,  119 => 24,  113 => 21,  109 => 20,  105 => 19,  98 => 15,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategoryController!
{% endblock %}

{# {% extends \"base.html.twig\" %} #}
{% block body %}

\t\t
\t\t
\t\t<div class=\"container\">
\t\t<h1 class=\"text-center\">category List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"{{ path('add_category')}}\">Add</a>
\t\t</div>
\t\t<div class=\"col-md-4\">
                            <option selected disabled>Admin</option>
                            <li><a href=\"{{path ('view_list_category')}}\">Category</a></li>
                            <li><a href=\"{{path ('view_list_product')}}\">Product update</a></li>
                            <li><a href=\"{{path ('view_list_customer')}}\">Customer update</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
                            <li><a href=\"{{path ('view_list_employee')}}\">Employee update</a></li>
                            <li><a href=\"{{path ('image_index')}}\">Image update</a></li>
                            <li><a href=\"{{path ('user_index')}}\">User update</a></li>
                            </div>
\t\t
\t{# Display a list of all category in a table #}
\t
\t<div class=\"col-lg-12\">
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>CatID</th>
\t\t\t\t<th>Name</th>
                <th>Description</th>
\t\t\t\t<th>menu</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for category in categories %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ category.id }}</td>
\t\t\t\t\t<td>{{ category.catID }}</td>
\t\t\t\t\t<td>{{ category.name }}</td>
                    <td>{{category.description}}</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<a href=\"{{ path('edit_category', {'id': category.id })}}\">Edit</a>
\t\t\t\t\t\t<a href=\"{{ path('delete_category', {'id': category.id })}}\" onclick=\"return confirm('Do you want to delete this category ?');\">Delete</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t
\t\t</tbody>
\t</table>
\t</div>
\t</div>
\t\t</div>

{% endblock %}
", "category/index.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\category\\index.html.twig");
    }
}
