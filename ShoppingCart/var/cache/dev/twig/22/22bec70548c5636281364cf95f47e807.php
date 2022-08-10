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

/* customer/index.html.twig */
class __TwigTemplate_61c991299753847e55b9775726a003f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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

        echo "Hello CartController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t\t<div class=\"container\">
\t\t<h1 class=\"text-center\">Customer List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_customer");
        echo "\">Add</a>
\t\t</div>
\t\t<div class=\"col-md-4\">
                            <option selected disabled>Admin</option>
                            <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_category");
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
        echo "\">Product update</a></li>
                            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_customer");
        echo "\">Customer update</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_employee");
        echo "\">Employee update</a></li>
                            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
        echo "\">Image update</a></li>
                            <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">User update</a></li>
                            </div>
\t\t
\t";
        // line 27
        echo "\t
\t<div class=\"col-lg-12\">
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Phone Number</th>
\t\t\t\t<th>menu</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 41
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "phoneNumber", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_customer_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Detail</a>
\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_customer", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_customer", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this customer ?');\">Delete</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</tbody>
\t</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  179 => 50,  175 => 49,  171 => 48,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  146 => 40,  131 => 27,  125 => 23,  121 => 22,  117 => 21,  111 => 18,  107 => 17,  103 => 16,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!
{% endblock %}

{% block body %}

\t\t<div class=\"container\">
\t\t<h1 class=\"text-center\">Customer List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"{{ path('add_customer')}}\">Add</a>
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
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Phone Number</th>
\t\t\t\t<th>menu</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for customer in customers %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ customer.id }}</td>
\t\t\t\t\t<td>{{ customer.email }}</td>
\t\t\t\t\t<td>{{ customer.name }}</td>
\t\t\t\t\t<td>{{ customer.phoneNumber }}</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('view_customer_by_id', {'id': customer.id })}}\">Detail</a>
\t\t\t\t\t\t<a href=\"{{ path('edit_customer', {'id': customer.id })}}\">Edit</a>
\t\t\t\t\t\t<a href=\"{{ path('delete_customer', {'id': customer.id })}}\" onclick=\"return confirm('Do you want to delete this customer ?');\">Delete</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

{% endblock %}", "customer/index.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\customer\\index.html.twig");
    }
}
