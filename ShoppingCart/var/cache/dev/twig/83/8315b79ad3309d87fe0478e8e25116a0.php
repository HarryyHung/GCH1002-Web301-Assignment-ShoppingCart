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

/* cart/detailSys.html.twig */
class __TwigTemplate_4f08f1a4e379b38aca8d1c48c4b85cef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/detailSys.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/detailSys.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/detailSys.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div>
<table class \"table\">
   <tr>
      <th>Cart Detail</th>
   </tr>
   <tr>
      <th>Email</th>
      <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
   </tr>
   </table>
   <table class = \"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Product Id: </th>
\t\t\t\t\t<th>Product Name: </th>
\t\t\t\t\t<th>Product Price: </th>
\t\t\t\t\t<th>Product Infomation: </th>
\t\t\t\t\t<th>Product category: </th>
\t\t\t\t\t<th>Menu</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "info", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 34
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "catID", [], "any", false, false, false, 34), "catId", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_product_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Detail</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this product ?');\">Delete</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</tbody>
\t\t</table>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/detailSys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  133 => 38,  129 => 37,  125 => 36,  119 => 34,  115 => 32,  111 => 31,  107 => 30,  102 => 28,  99 => 27,  95 => 26,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div>
<table class \"table\">
   <tr>
      <th>Cart Detail</th>
   </tr>
   <tr>
      <th>Email</th>
      <td>{{ cart.email.email }}</td>
   </tr>
   </table>
   <table class = \"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Product Id: </th>
\t\t\t\t\t<th>Product Name: </th>
\t\t\t\t\t<th>Product Price: </th>
\t\t\t\t\t<th>Product Infomation: </th>
\t\t\t\t\t<th>Product category: </th>
\t\t\t\t\t<th>Menu</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for product in cart.email %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ product.id }}
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

</div>
{% endblock %}", "cart/detailSys.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\cart\\detailSys.html.twig");
    }
}
