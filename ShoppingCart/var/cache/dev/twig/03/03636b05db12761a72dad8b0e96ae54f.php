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

/* employee/index.html.twig */
class __TwigTemplate_0343d69f4309e2c8d73f8ddb8986778c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
<div class=\"col-md-7\">
 <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_employee_name");
        echo "\" method=\"post\">
        <input type=\"search\" name=\"keyword\" required
        placeholder=\"Search by employee name\">
    </form>
    </div>
\t\t<h1 class=\"text-center\">Employee List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_employee");
        echo "\">Add</a>
\t\t</div>
\t\t<div class=\"col-md-4\">
                            <option selected disabled>Admin</option>
                            <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_category");
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
        echo "\">Product update</a></li>
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_customer");
        echo "\">Customer update</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
                            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_employee");
        echo "\">Employee update</a></li>
                            <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
        echo "\">Image update</a></li>
                            <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">User update</a></li>
                            </div>
\t\t
\t";
        // line 28
        echo "\t
\t<div class=\"col-lg-12\">
    
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Employee Email</th>
                <th>Employee Name</th>
                <th>Position</th>
                <th>Phone number</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "position", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "phone", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_employee_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Detail</a>
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_employee", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Edit</a>
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_employee", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"
                onclick = \"return confirm('Do you want to delete this employee ?');\"
                >Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  166 => 51,  162 => 50,  158 => 49,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  138 => 43,  134 => 42,  118 => 28,  112 => 24,  108 => 23,  104 => 22,  98 => 19,  94 => 18,  90 => 17,  83 => 13,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"container\">
<div class=\"col-md-7\">
 <form action=\"{{ path('search_employee_name') }}\" method=\"post\">
        <input type=\"search\" name=\"keyword\" required
        placeholder=\"Search by employee name\">
    </form>
    </div>
\t\t<h1 class=\"text-center\">Employee List</h1>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-2\">
\t\t<a type=\"button\" style=\"\" class=\"button\" href=\"{{ path('add_employee')}}\">Add</a>
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
    
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Employee Email</th>
                <th>Employee Name</th>
                <th>Position</th>
                <th>Phone number</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
        {% for employee in employees %}
            <tr>
                <td>{{ employee.email }} </td>
                <td>{{ employee.name }}</td>
                <td>{{ employee.position }}</td>
                <td>{{ employee.phone }}</td>
                <td>
                <a href=\"{{ path('view_employee_by_id', {'id': employee.id })}}\">Detail</a>
                <a href=\"{{ path('edit_employee', {'id': employee.id })}}\">Edit</a>
                <a href=\"{{ path('delete_employee', {'id': employee.id })}}\"
                onclick = \"return confirm('Do you want to delete this employee ?');\"
                >Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "employee/index.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\employee\\index.html.twig");
    }
}
