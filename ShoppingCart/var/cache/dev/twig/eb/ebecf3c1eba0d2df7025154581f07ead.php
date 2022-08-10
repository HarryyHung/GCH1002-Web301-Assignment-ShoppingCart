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

/* product/index.html.twig */
class __TwigTemplate_5aebe221004b5de01d5d2f4f1e1e2f6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        echo "
\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-7\">
\t\t<form  action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_product_name");
        echo "\" method=\"post\">
\t\t\t<input  type=\"search\" name=\"keyword\" required placeholder=\"Search by product name\">
\t\t</form>
\t\t
\t\t</div>
\t\t<br>
\t\t<div class=\"col-lg-2\">
\t\t<button class=\"button\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
        echo "\">refresh</a></button>
\t\t</div>
\t\t<div class=\"col-md-4\">
                            <option selected disabled>Admin</option>
                            <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_category");
        echo "\">Category</a></li>
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
        echo "\">Product update</a></li>
                            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_customer");
        echo "\">Customer update</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
                            <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_employee");
        echo "\">Employee update</a></li>
                            <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
        echo "\">Image update</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">User update</a></li>
                            </div>
\t\t";
        // line 28
        echo "\t\t<br></br>
\t\t<div class=\"\">
\t\t\t<select onchange=\"window.location.href=this.value\">
\t\t\t\t<option class=\"\">Sort by</option>
\t\t\t\t<option value=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_product_price_ascending");
        echo "\">Price Ascending</option>
\t\t\t\t<option value=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_product_price_descending");
        echo "\">Price Descending</option>
                <option value=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sort_product_name_ascending");
        echo "\">Name Ascending</option>
\t\t\t</select>
\t\t</div>
\t\t</div>
\t\t<br></br>
\t\t<h1 class=\"text-center\">Product List</h1>
\t\t
\t\t<a class=\"btn btn-default btn-lg active\"  href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
        echo "\" role=\"button\">Add new Product</a>
\t\t<table class = \"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>no.Id</th>
\t\t\t\t\t<th>Product Id</th>
\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t<th>Product Price</th>
\t\t\t\t\t<th>Product Infomation</th>
\t\t\t\t\t<th>Product category</th>
\t\t\t\t\t<th>Menu</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 56
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productID", [], "any", false, false, false, 59), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "info", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "catID", [], "any", false, false, false, 65), "catId", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_product_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Detail</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this product ?');\">Delete</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 73,  202 => 69,  198 => 68,  194 => 67,  188 => 65,  184 => 63,  180 => 62,  176 => 61,  171 => 59,  166 => 57,  163 => 56,  159 => 55,  142 => 41,  132 => 34,  128 => 33,  124 => 32,  118 => 28,  113 => 25,  109 => 24,  105 => 23,  99 => 20,  95 => 19,  91 => 18,  84 => 14,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-7\">
\t\t<form  action=\"{{ path('search_product_name') }}\" method=\"post\">
\t\t\t<input  type=\"search\" name=\"keyword\" required placeholder=\"Search by product name\">
\t\t</form>
\t\t
\t\t</div>
\t\t<br>
\t\t<div class=\"col-lg-2\">
\t\t<button class=\"button\"><a href=\"{{path('view_list_product')}}\">refresh</a></button>
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
\t\t{# <h3 class=\"text text-danger\">Total product: {{products|length}}</h3> #}
\t\t<br></br>
\t\t<div class=\"\">
\t\t\t<select onchange=\"window.location.href=this.value\">
\t\t\t\t<option class=\"\">Sort by</option>
\t\t\t\t<option value=\"{{ path('sort_product_price_ascending')}}\">Price Ascending</option>
\t\t\t\t<option value=\"{{ path('sort_product_price_descending')}}\">Price Descending</option>
                <option value=\"{{ path('sort_product_name_ascending')}}\">Name Ascending</option>
\t\t\t</select>
\t\t</div>
\t\t</div>
\t\t<br></br>
\t\t<h1 class=\"text-center\">Product List</h1>
\t\t
\t\t<a class=\"btn btn-default btn-lg active\"  href=\"{{ path('add_product')}}\" role=\"button\">Add new Product</a>
\t\t<table class = \"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>no.Id</th>
\t\t\t\t\t<th>Product Id</th>
\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t<th>Product Price</th>
\t\t\t\t\t<th>Product Infomation</th>
\t\t\t\t\t<th>Product category</th>
\t\t\t\t\t<th>Menu</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for product in products %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ product.id }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ product.productID }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ product.name }}</td>
\t\t\t\t\t\t<td>{{ product.price }}</td>
\t\t\t\t\t\t<td>{{ product.info }}</td>
\t\t\t\t\t\t{# get category id from category entity #}
\t\t\t\t\t\t<td>{{ product.catID.catId }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('view_product_by_id', {'id': product.id })}}\">Detail</a>
\t\t\t\t\t\t\t<a href=\"{{ path('edit_product', {'id': product.id })}}\">Edit</a>
\t\t\t\t\t\t\t<a href=\"{{ path('delete_product', {'id': product.id })}}\" onclick=\"return confirm('Do you want to delete this product ?');\">Delete</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
\t</div>
{% endblock %}
", "product/index.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\product\\index.html.twig");
    }
}
